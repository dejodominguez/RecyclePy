<?php

class RestConnection {
	var $connId;
	var $url;
	var $authType;
	var $dbType;

	var $username;
	var $password;

	var $apiKey;
	var $keyLocation;
	var $keyParameter;

	var $authUrl;
	var $tokenUrl;
	var $clientId;
	var $clientSecret;
	var $scope;
	var $_encryptInfo;

	protected $error = "";
	protected $responseCode = "";
	protected $response;

	protected $authorizationRequest = null;

	function __construct( $params ) {
		$this->dbType = nDATABASE_REST;
		$this->connId = $params["connId"];
		$this->url = $params["url"];
		$this->authType = $params["authType"];
	
		$this->username = $params["username"];
		$this->password = $params["password"];
	
		$this->apiKey = $params["apiKey"];
		$this->keyLocation = $params["keyLocation"];
		$this->keyParameter = $params["keyParameter"];
	
		$this->authUrl = $params["authUrl"];
		$this->tokenUrl = $params["tokenUrl"];
		$this->clientId = $params["clientId"];
		$this->clientSecret = $params["clientSecret"];
		$this->scope = $params["scope"];
	}

	/**
	 * Returns JSON oject or false in case of error
	 * "content" => response body
	 * "error" => error message if any
	 */
	function requestJson( $urlRequest, $method, $payload = array(), $headers = null, $urlParams = null ) {
		$request = new HttpRequest( 
			$this->url . $urlRequest,
			$method,
			$urlParams, 
			$payload,
			$headers
		);
		$res = &$this->requestWithAuth( $request );
		if( $res === false ) {
			return false;
		}
		if( $res == "" ) {
			return "";
		}
		$obj = my_json_decode( $res );
		if( is_array($obj) && count( $obj ) == 0 && trim( $res ) != "[]" ) {
			//	unable to parse?
			$this->error = "Unable to parse JSON result\n\n" . $res;
			return false;
		}
		return $obj;
	}

	
	/**
	 * Obtain access token from storage of any.
	 * Refresh if needed
	 * If none, signal to the application that authorization is needed
	 */
	function  getOauthAccessToken() {
		$oauthToken = $this->getOauthToken();
		if( !$oauthToken ) {
			if( $this->authType === "oauth" ) {
				//	signal external authorization needed
				$this->setAuthorizationRequest( $this->createUserAuthRequest() );
				return false;
			} else {
				//	send auth request
				$oauthToken = $this->requestOauthToken( $this->createOauthTokenRequest( array(
					"grant_type" =>"password",
					"username" => $this->username,
					"password" => $this->password,
					"scope" =>	$this->scope
				) ) );
				$this->setOauthToken( $oauthToken );
			}
		}
		$oauthToken = $this->checkRefreshOauthToken( $oauthToken );
		return $oauthToken[ "access_token" ];
	}

	function setOauthToken( $token ) {
		$sessionKey = "oauthToken_" . $this->connId;
		$_SESSION[ $sessionKey ] = my_json_encode( $token );
	}

	function getOauthToken() {
		$sessionKey = "oauthToken_" . $this->connId;
		if( !$_SESSION[ $sessionKey ] ) {
			return false;
		}
		return my_json_decode( $_SESSION[ $sessionKey ] );
	}


	/**
	 * @return String or false
	 */
	function & requestWithAuth( $request, $authenticateOnly = false ) {

		if( $this->authType === "oauth" || $this->authType === "oauthserver" ) {
			
			$accessToken = $this->getOauthAccessToken();
			$request->headers["Authorization"] = "Bearer ". $accessToken;
		}
		else if( $this->authType === "basic" ) { // Basic HTTP
			$request->addBasicAuthorization( $this->username, $this->password );
		}
		else if( $this->authType === "api" ) { //	API key
			if( $this->keyLocation == 1 ) {
				$request->headers[ $this->keyParameter ] = $this->apiKey;
			}
			else if( $this->keyLocation == 0 ){
				$request->urlParams[ $this->keyParameter ] = $this->apiKey;
			}
			else {
				$request->postPayload[ $this->keyParameter ] = $this->apiKey;
			}
		} else if( $this->authType === "custom" ) { 
			global $globalEvents;
			$handler = "rest_authenticate" . $this->connId;
			$globalEvents->$handler( $this, "data", $request, null );
		}

		if( $this->getAuthorizationRequest() != null ) {
			$this->error = "Authorization required";
			return false;
		}

		if( $authenticateOnly ) {
			return "ok";	
		}

		global $restResultCache;
		$requestKey = $request->getRequestKey();
		if( $requestKey !== null && isset( $restResultCache[ $requestKey ] ) ) {
			return $restResultCache[ $requestKey ];
		}
		
		
		$ret = $this->doRequest( $request );
		if( $ret === false ) {
			return false;
		}
		
		if( $requestKey !== null )
			$restResultCache[ $requestKey ] = &$ret["content"];
		return $ret["content"];
	}

	/**
	 * @param HttpRequest request
	 * @return Array( 
	 * 	header => string
	 *  error? => string
	 *  content? => string
	 * )
	 */
	public function doRequest( $request ) {
		global $dDebug;
		if( $dDebug ) {
			echo "<pre>";
			print_r( $request );
			echo "</pre>";
		}
		$url = prepareUrl( $request->url, $request->urlParams );
		//$body = $this->prepareRequestBody( $request );
		$body = $request->prepareRequestBody();
		$bodyLength = strlen_bin( $body );
		if( $bodyLength ) {
			$request->headers["Content-Length"] = $bodyLength;
		}
		$ret = runner_http_request( $url, $body, $request->method, $request->headers );
		if( $ret["error"] ) {
			$this->error = $ret["error"];
			return false;
		}
		if( $ret["responseCode"] < 200 || $ret["responseCode"] >= 300 ) {
			$this->error = $ret["header"] . $ret["content"];
			return false;
		}
		return $ret;
	}

	/**
	 * @return String
	 */
	public function lastError()
	{
		return $this->error;
	}

	/**
	 * @return HttpRequest
	 * Array( "url" => redirect url, "state" => state to save )
	 */
	public function createUserAuthRequest() {
		$request = new HttpRequest( $this->authUrl, "GET" );
		$state = generatePassword(30);
		$request->urlParams =  array(
			'response_type'   => 'code',
			'approval_prompt' => 'auto',
			'redirect_uri' => projectURL() . GetTableLink("oauthcallback"),
			'client_id' => $this->clientId,
			'state' => $state
		);
		if( $this->scope ) {
			$request->urlParams["scope"] = $this->scope;
		}
		return $request;

	}

	/**
	 *	Part of publis API 
	 */
	public function requestOauthToken( $request ) {
		$response = $this->doRequest( $request );
		if( $response === false ) {
			return false;
		}

		$result = $this->parseAuthResponse( $response );
		if( !$result["access_token"] ) {
			$this->error = $response["header"] . $response["content"];
			return false;
		}
		$accessToken = array(
			"access_token" => $result["access_token"],
			"refresh_token" => $result["refresh_token"]
		);
		if( !$result[ "refresh_token" ] && $request->postPayload[ "refresh_token" ] ) {
			//	use old refresh token
			$accessToken[ "refresh_token" ] = $request->postPayload[ "refresh_token" ];
		}
		if( $result["expires_in"]) {
			$accessToken["expires"] = time() + $result["expires_in"];
		} else if( $result["expires"] ) {
			$accessToken["expires"] = 0 + $result["expires"];

			$oauth2InceptionDate = 1349067600; // 2012-10-01
			if ( $accessToken["expires"] <= $oauth2InceptionDate ) {
				$accessToken["expires"] += time();
			}
		}
		return $accessToken;
	}

	protected function createOauthTokenRequest( $params ) {
		$request = new HttpRequest( $this->tokenUrl, "POST" );
		$request->postPayload = $params;
		$request->addBasicAuthorization( $this->clientId, $this->clientSecret );
		$request->headers["Content-Type"] = 'application/x-www-form-urlencoded';
		return $request;

	}

	public function validateCode( $code ) {
		if( !$code ) {
			$this->error = "Provider returned no authorization code";
			return false;
		}
		if( $this->authType === "oauth" ) { 
			return $this->validateOauthCode( $code );

		} else if( $this->authType === "custom" ) { 
			global $globalEvents;
			$handler = "rest_authenticate" . $this->connId;
			return $globalEvents->$handler( $this, "validate", null, $code );
		}
	}


	public function validateOauthCode( $code ) {

		$params = array(
			'grant_type'	=> 'authorization_code',
			'code'			=> $code,
			'redirect_uri' 	=> projectURL() . GetTableLink("oauthcallback"),
			'client_id'		=> $this->clientId
		);
		$accessToken = $this->requestOauthToken( $this->createOauthTokenRequest( $params ) );
		if( !$accessToken ) {
			return false;
		}
		$this->setOauthToken( $accessToken );
		return true;
	}

	public function parseAuthResponse( $response ) {
		$headers = explode( "\r\n", $response["header"] );
		$urlencoded = false;
		foreach( $headers as $h ) {
			if( stripos( $h, "Content-Type:" ) === 0 && stripos( $h, "urlencoded") !== false ) {
				$urlencoded = true;
				break;
			}
		}
		if( $urlencoded ) {
			$result = array();
			$result = parseQueryString( $response["content"] );
			return $result;
		}
		return my_json_decode( $response["content"] );
	}

	protected function checkRefreshOauthToken( $accessToken ) 
	{
		if( $this->accessTokenExpired( $accessToken ) ) {
			$params = array(
				'grant_type'	=> 'refresh_token',
				'refresh_token'	=> $accessToken['refresh_token']
			);
			$accessToken = $this->requestOauthToken( $this->createOauthTokenRequest( $params ) );
			$this->setOauthToken( $accessToken );
		}
		return $accessToken;
	}

	public function accessTokenExpired( $accessToken ) {
		$timeAllowance = 2;
		return $accessToken["expires"] && $accessToken["expires"] < time() - $timeAllowance;
	}
	
	public function isEncryptionByPHPEnabled() {
		return false;
	}

	public function dbBased() {
		return false;
	}

	public function close() {

	}

	public function checkIfJoinSubqueriesOptimized() {
		return false;
	}
	
	public function checkDBSubqueriesSupport() {
		return false;
	}

	/**
	 * 	Tell the application that additional authorization is required
	 */
	public function setAuthorizationRequest( $request ) {
		$this->authorizationRequest = $request;
		if( $request->urlParams["state"] )

		if( !$_SESSION[ 'oauth2statemap' ] ) {
			$_SESSION[ 'oauth2statemap' ] = array();
		}
		$_SESSION[ 'oauth2statemap' ][ $request->urlParams["state"] ] = $this->connId;
	}

	public function getAuthorizationRequest() {
		return $this->authorizationRequest;
	}

	/**
	 * Check if authorization has been obtained
	 * 
	 */
	public function checkAuthorization() {
		if( $this->authorizationRequest )
			return false;

		$result = $this->requestWithAuth( new HttpRequest(""), true );
		return !!$result;
	}


}
?>