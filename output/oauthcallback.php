<?php
require_once('include/dbcommon.php');

global  $restApis;
// If we don't have an authorization code then get one
if ( !isset($_GET['code']) ) {

	$connId = postvalue( "connid" );
	if( $connId == "" ) {
		exit();
	}
	$rconn = $restApis->getConnection( $connId );
	if( !$rconn ) {
		exit();
	}

	$authRequest = $rconn->createUserAuthRequest();
	$rconn->setAuthorizationRequest( $authRequest );
	header( "Location: " . $authRequest->getUrl() );	
/*	

	if( !$_SESSION[ 'oauth2statemap' ] ) {
		$_SESSION[ 'oauth2statemap' ] = array();
	}
	$_SESSION[ 'oauth2statemap' ][ $authRequest["state"] ] = $connId;
	header( 'Location: ' . $authRequest["url"] );
*/	
    exit();

} else {
	// verify state parameter and get $connId
	$state = $_GET['state'];
	if( $state == "" || !$_SESSION[ 'oauth2statemap' ] )
		exit();
	$connId = $_SESSION[ 'oauth2statemap' ][ $state ];
	unset( $_SESSION[ 'oauth2statemap' ][ $state ] );
	if( !$connId ) {
		exit();
	}
	$rconn = $restApis->getConnection( $connId );
	if( !$rconn ) {
		exit();
	}


	if( $rconn->validateCode( $_GET['code'] ) ) {
		if( $_SESSION["MyURL"] ) {
			$url = $_SESSION["MyURL"];
			unset( $_SESSION["MyURL"] );
			header("Location: ". $url );
			exit();
		}
	}
	echo "invalid token";
	if ( $globalSettings["showDetailedError"] ) {
		echo "<pre>";
		echo $rconn->lastError();
		echo "</pre>";
	} 

}	

?>