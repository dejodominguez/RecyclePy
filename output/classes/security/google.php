<?php

include_once(getabspath("classes/security.php"));

class SecurityPluginGoogle extends SecurityPlugin {

	/**
	 * @constructor
	 */
	function __construct()
	{
		parent::__construct();
		// client id
		$this->appId = GetGlobalData("GoogleClientId", "");
	}

	public function getUserInfo( $id_token )
	{
		global $cCharset;

//		require_once getabspath('plugins/google-api-php-client/vendor/autoload.php');
//		$client = new Google_Client( array( 'client_id' => $this->appId ) );
//		$payload = $client->verifyIdToken($id_token);

		$payload = $this->verifyIdToken( $id_token );

		if( $payload["error"] )
			$this->error = "Google security plugin: "
				.$payload["error"]." ".$payload["error_description"];

		if( !$payload || $payload["error"] )
			return array();

		//	save token in cookies
		setProjectCookie( 'google_token', $id_token, time() + 30 * 1440 * 60, true );

		$ret = array(
				"id" => "go".$payload["sub"],
				"name" => runner_convert_encoding( $payload["name"], $cCharset, 'UTF-8' ),
				"email" => $payload["email"],
				"raw" => $payload
			);

		if( $payload["picture"] ) {
			$picResult = runner_http_request( $payload["picture"], "", "GET", array(), false );
			if( $picResult["content"] )
				$ret["picture"] = $picResult["content"];
		}

		return $ret;
	}

	/**
	 * Verify token and get parsed paylod
	 * @param String token
	 * @return Array|false
	 */
	public function verifyIdToken( $token ) {
		//	OpenId standard verification routine
		$wellKnown = Security::getOpenIdCongiguration( "https://accounts.google.com/.well-known/openid-configuration" );
		$jwk = Security::getOpenIdJWK( $token, $wellKnown );
		
		$verifiedTokenData = Security::openIdVerifyToken( $token, $jwk );
		if( !$verifiedTokenData ) 
			return false;
		
		$payload = $verifiedTokenData["payload"];

		$domain = GetGlobalData("GoogleDomain", "");
		if( $domain ) {
			if( $payload["hd"] != $domain ) {
				$this->error = str_replace( "%s", $domain, mlang_message( 'GOOGLE_DOMAIN' ));
				return false;
			}
		}

		return $payload;
	}

	public function getJSSettings()
	{
		return array(
			"isGoogleSignIn" => true,
			"GoogleClientId" => $this->appId
		);
	}

	public function onLogout()
	{
		setProjectCookie( 'google_token', "", time() - 1, true );
	}

	public function savedToken()
	{
		return $_COOKIE[ 'google_token' ];
	}
}
?>