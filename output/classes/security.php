<?php
class Security
{
	public static function processPageSecurity( $table, $permission, $ajaxMode = false, $message = '' )
	{
		if( Security::checkPagePermissions( $table, $permission ) )
			return true;

		if( $ajaxMode )
		{
			Security::sendPermissionError( $message );
			return false;
		}
		// The user is logged in but lacks necessary permissions
		// redirect to Menu.
		if( isLogged() && !Security::isGuest() )
		{
			HeaderRedirect("menu");
			return false;
		}

		//	Not logged in
		// 	redirect to Login
		//	Current URL is already saved  in session
		redirectToLogin();
		return false;
	}

	public static function processAdminPageSecurity( $ajaxMode = false )
	{
		Security::processLogoutRequest();

		if( !isLogged() || Security::isGuest() )
		{
			Security::tryRelogin();
		}

		if( Security::isAdmin() )
			return true;

		if( $ajaxMode )
		{
			Security::sendPermissionError();
			return false;
		}

		// The user is logged in but lacks necessary permissions
		// redirect to Menu.
		if( isLogged() && !Security::isGuest() )
		{
			HeaderRedirect("menu");
			return false;
		}

		//	Not logged in
		// 	redirect to Login
		//	Save current URL in session
		Security::saveRedirectURL();
		redirectToLogin();
		return false;
	}

	public static function saveRedirectURL()
	{
		$url = $_SERVER["SCRIPT_NAME"];
		$query = "";

		//	don't remember dashboard elements
		if( postvalue("dashelement") )
			return;

		foreach( $_GET as $key=>$value )
		{
			if( $key == "a" && $value == "logout" )
				continue;
			if( $query != "" )
				$query.="&";

			if( is_array($value) )
			{
				$query .= rawurlencode($key."[]")."=";
				$query .= implode( rawurlencode($key."[]")."=", $value );
			}
			else
			{
				$query .= rawurlencode($key);
				if( strlen($value) )
					$query .= "=" . rawurlencode($value);
			}
		}
		if( $query != "" )
			$url .= "?" . $query;
		$_SESSION["MyURL"] = $url;
	}

	public static function checkPagePermissions( $table, $permission )
	{
		//	log out if received ?a=logout request
		Security::processLogoutRequest();
		// save current URL
		Security::saveRedirectURL();

		$ret = Security::checkUserPermissions( $table, $permission );
		//	remember if current user has permissions on the page saved in $_SESSION[MyURL]
		$_SESSION["MyUrlAccess"] = $ret;
		return $ret;
	}

	protected static function createLoginPageObject()
	{
		include_once(getabspath('classes/loginpage.php'));
		include_once(getabspath('include/xtempl.php'));
		if( Security::loginMethod() == SECURITY_AD ) {
			include_once(getabspath('classes/loginpage_ad.php'));
		}
		$loginXt = new Xtempl();

		$loginParams = array("pageType" => PAGE_LOGIN);
		$loginParams['id'] = -1;
		$loginParams['xt'] = &$loginXt;
		$loginParams["tName"]= GLOBAL_PAGES;
		$loginParams['needSearchClauseObj'] = false;
		if( Security::loginMethod() == SECURITY_AD ) {
			$loginPageObject = new LoginPage_AD($loginParams);
		} else {
			$loginPageObject = new LoginPage($loginParams);
		}
		$loginPageObject->init();
		return $loginPageObject;
	}

	/**
	 * Try to login automatically using saved login data
	 */
	static function tryRelogin()
	{
		//	don't try if we have just logged out
		if( postvalue("a") == "logout" )
			return;

		//	don't relogin with POST requests
		if( isPostRequest() )
			return;

		//	don't relogin if prohibited
		if( !Security::allowAutoLogin() ) {
			return;
		}

		$loginPageObject = null;

		//	try to relogin with username & password from cookies first
		$loginToken = postvalue("token");
		if( !$loginToken ) {
			$loginToken = $_COOKIE["token"];
		}
		if( $loginToken ) {
			$tokenPayload = Security::verifyKeepLoggedToken( $loginToken );
			if( $tokenPayload ) {
				Security::loginAs( $tokenPayload["username"], true );
				return true;
			}
			//	clear cookie if weren't able to login
			Security::setKeepLoggedCookie( false );
		}

		//	try security plugins
		$securityPlugins = Security::GetPlugins();
		foreach( $securityPlugins as $sp )
		{
			$token = $sp->savedToken();
			if( $token ) {
				if( !$loginPageObject )
					$loginPageObject = Security::createLoginPageObject();

				if( $loginPageObject->LoginWithSP( $sp, $token, false ) )
					return true;
			}
		}

		return false;
	}

	static function checkUserPermissions($table, $permission)
	{
		//	user is logged in
		if( !isLogged() || Security::isGuest() )
		{
			Security::tryRelogin();
		}
		//	admin area security
		if( $table == ADMIN_USERS )
			return Security::isAdmin();

		return CheckTablePermissions($table, $permission);
	}

	/**
	 * Returns true if logged out
	 * @return Boolean
	 */
	static function processLogoutRequest()
	{
		//	no need to logout
		if( postvalue("a") != "logout" || Security::userSessionLevel() === LOGGED_NONE || Security::isGuest() )
			return false;

		//	logout and redirect (refresh current page)
		$loginPageObject = Security::createLoginPageObject();
		$loginPageObject->Logout();
		//	login as guest
		Security::doGuestLogin();
		global $logoutPerformed;
		$logoutPerformed = true;
		return true;
	}

	/**
	 * @param String message (optional)
	 */
	public static function sendPermissionError( $message = '' )
	{
		echo printJSON(array("success" => false, "message" => "No tiene permiso para acceder a esta tabla" . " " .$message ) );
		exit();
	}

	public static function redirectToList( $table )
	{
		$settings = new ProjectSettings( $table );
		if( $settings->hasListPage() )
		{
			HeaderRedirect($settings->getShortTableName(), "list", "a=return");
			exit();
		}
		//	no List page
		HeaderRedirect("menu");
		exit();
	}

	public static function clearSecuritySession()
	{
		session_unset();
		Security::setKeepLoggedCookie( false );


		// these lines are important
		// DO NOT REMOVE THEM!
		unset( $_COOKIE["username"] );
		unset( $_COOKIE["password"] );
		unset( $_COOKIE["token"] );
		unset( $_COOKIE["runnerSession"] );

		setProjectCookie("runnerSession", "", time() - 1, true );
		//	the rest of the cookies are removed within the setKeepLoggedCookie call


		storageDelete( "UserID" );
		storageDelete( "UserName" );
		storageDelete( "AccessLevel" );
		storageDelete( "pluginLogin" );
		storageDelete( "UserRights" );
		storageDelete( "LastReadRights" );
		storageDelete( 'GroupID' );
		storageDelete( "OwnerID" );
		storageDelete( "securityOverrides" );
		storageDelete( "runnerSession" );

		$toClear = array();
		foreach( $_SESSION as $k => $v )
		{
			if( substr($k, -8) == "_OwnerID" )
				$toClear[] = $k;
			if( substr($k, 0, 11) == "oauthToken_")
				$toClear[] = $k;
		}
		foreach( $toClear as $k => $v )
		{
			storageDelete( $k );
		}
	}

	public static function doGuestLogin()
	{
		if( !Security::guestLoginAvailable() ) {
			return;
		}
		Security::createUserSession( "" );
	}

	/**
	 * Security API calls
	 */

	/**
	 *	Return current user's group when Static Permissions are used.
	 *	When Dynamic permissions are used, returns any group name the user belongs to
	 *	@return String
	 */
	public static function getUserGroup()
	{
		$userGroups = Security::getUserGroups();
		foreach( $userGroups as $g => $v )
		{
			return $g;
		}
		return "";
	}

	/**
	 *	Return array of the group IDs the user belongs to. Group Ids are the keys of the array:
	 *	$groups[ <group1> ] = true;
	 *	$groups[ <group2> ] = true;
	 *	Admin group ID is -1
	 *	When Static permissions are used, the array has only one element.
	 *	Returns empty array when the user is Guest or not logged in.
	 *	@return Array
	 */
	public static function getUserGroupIds()
	{
		global $globalSettings;
		if( $globalSettings["nLoginMethod"] == SECURITY_NONE || $globalSettings["nLoginMethod"] == SECURITY_HARDCODED )
			return array();

		if( !Security::dynamicPermissions() ) {
			//	static permissions
			if( storageGet( "GroupID" ) )
				return array( storageGet( "GroupID" ) => true );
			return array();
		}

		$groups = array();
		$userRights = &Security::dynamicUserRights();
		$arrgroups = &$userRights[ ".Groups" ];
		foreach( $arrgroups as $g ) {
			$groups[ $g ] = true;
		}
		return $groups;
	}

	/**
	 *	Return array of the group names the user belongs to. Group names are the keys of the array:
	 *	$groups[ <group1> ] = true;
	 *	$groups[ <group2> ] = true;
	 *	When Static permissions option is used, the array has only one element.
	 *	$groups[ <groupId> ] = true;
	 *	Returns empty array when the user is Guest or not logged in or doesn't belong to any group.
	 *	@return Array
	 */
	public static function getUserGroups()
	{
		global $globalSettings;
		if( $globalSettings["nLoginMethod"] == SECURITY_NONE || $globalSettings["nLoginMethod"] == SECURITY_HARDCODED )
			return array();
		if( !$globalSettings["isDynamicPerm"] || $globalSettings["nLoginMethod"] == SECURITY_AD )
			return Security::getUserGroupIds();

		// database-based dynamic permissions
		$groupIds = Security::getUserGroupIds();

		$groupNames = array();

		global $cman;
		$grConnection = $cman->getForUserGroups();

		$sql = "select ". $grConnection->addFieldWrappers( "" )
			." from ". $grConnection->addTableWrappers( "uggroups" ) . " WHERE " . $grConnection->addFieldWrappers( "" )
			." in ( " . implode( ",", array_keys( $groupIds ) ) . ")";

		$qResult = $grConnection->query( $sql );
		while( $data = $qResult->fetchNumeric() )
		{
			$groupNames[ $data[0] ] = true;
		}

		if( $groupIds[ -1 ] )
			$groupNames["<Admin>"] = true;

		return $groupNames;
	}

	/**
	 *	Return current user's name, the same he entered when logging in.
	 *	@return String
	 */
	public static function getUserName()
	{
		return storageGet( "UserID" );
	}

	/**
	 *	Return current user's display name, the one to be displayed on the pages.
	 *	@return String
	 */
	public static function getDisplayName()
	{
		return storageGet( "UserName" );
	}
	/**
	 *	Change the current user's display name, the one to be displayed on the pages.
	 *	@param String $str - new name, HTML formatting is allowed
	 */
	public static function setDisplayName( $str )
	{
		storageSet( "UserName",  $str );
	}

	/**
	 *	Checks if the current user is Guest or not.
	 *	@return Boolean
	 */
	public static function isGuest()
	{
		if( Security::getUserName() == "Guest" && storageGet( "AccessLevel" ) == ACCESS_LEVEL_GUEST )
			return true;
		return false;
	}

	/**
	 *	Checks if the current user is Dynamic permissions admin or not.
	 *	@return Boolean
	 */
	public static function isAdmin()
	{
		if( !isLogged() )
			return false;
		if( !Security::dynamicPermissions() ) {
			return false;
		}
		$userRights = &Security::dynamicUserRights();
		return $userRights[ ".IsAdmin" ];
	}

	/**
	 *	Checks if the current user is logged in.
	 *	@return Boolean
	 */
	public static function isLoggedIn()
	{
		return ( IsLogged() && !Security::isGuest() );
	}

	/**
	 *	Logs in under specified username
	 *	@param String $username
	 *	@param Boolean $fireEvents - call After Successful Login event or not
	 *	@returns Boolean - true if login was successful
	 */
	public static function loginAs( $username, $fireEvents = true, $displayName = "", $userData = array() )
	{
		$lMethod = Security::loginMethod();
		if( $lMethod == SECURITY_HARDCODED ) {
			Security::createUserSession( $username, $username, "" );
		} else if( $lMethod == SECURITY_TABLE ) {
			if( !$userData )
				$userData = Security::fetchUserData( $username, "", true );
			if( !$userData ) {
				//	user deleted?
				return false;
			}
			global $cDisplayNameField, $cUserNameField;
			Security::createUserSession( $userData[ $cUserNameField ], $userData[ $cDisplayNameField ], $userData );
		} else if( $lMethod == SECURITY_AD ) {
			if( $displayName == "" ) {
				$displayName = $username;
			}
			if( Security::dynamicPermissions() ) {
				//	run LoginPage_AD method to read list of groups from AD server
				$loginPageObject = Security::createLoginPageObject();
				return $loginPageObject->LogIn( $username, "", true, $fireEvents );
			} else {
				//	use supplied displayName. 
				Security::createUserSession( $username, $displayName != "" ? $displayName : $username );
			}
		}
		if( $fireEvents ) {
			Security::auditLoginSuccess();

			//	fire after successfulLogin event
			global $globalEvents;
			if( $globalEvents->exists("AfterSuccessfulLogin") )
			{
				$globalEvents->AfterSuccessfulLogin( $username, "", $userData, null );
			}
		}
		return true;
	}

	/**
	 * @param String username
	 * @param String password
	 * @param Boolean fireEvents (optional)  Run after unsuccessful event if login/password are incorrect.
	 * @return Boolean
	 */
	public static function checkUsernamePassword( $username, $password, $fireEvents = false )
	{
		$data = Security::fetchUserData( $username, $password, false );
		if( $data ) {
			return true;
		}
		if( $fireEvents )
		{
			global $globalEvents;
			$message = "";
			if( $globalEvents->exists("AfterUnsuccessfulLogin") )
				$globalEvents->AfterUnsuccessfulLogin( $username, $password, $message, null, null );
		}
		return false;
	}

	/**
	 * Check username/password and login if successful
	 * @param String username
	 * @param String password
	 * @param Boolean fireEvents (optional)  Run after unsuccessful event if login/password are incorrect.
	 * @return Boolean
	 */
	public static function login( $username, $password, $skipPasswordCheck = false, $fireEvents = true )
	{
		$lMethod = Security::loginMethod();
		if( $lMethod === LOGIN_HARDCODED ) {
			if( $skipPasswordCheck || Security::verifyHardcodedLogin( $username, $password ) ) {
				return Security::loginAs( GetGlobalData( "UserName" ), $fireEvents );
			}
		} else if( $lMethod === LOGIN_TABLE ) {
			$userData = Security::fetchUserData( $username, $password, $skipPasswordCheck );
			if( $userData ) {
				return Security::loginAs( $username, $fireEvents, "", $userData );
			}
		} else if( $lMethod === LOGIN_AD ) {
			$loginPageObject = Security::createLoginPageObject();
			return $loginPageObject->LogIn($username, $password, $skipPasswordCheck, $fireEvents );
		}
		if( $fireEvents ) {
			//	call unsuccessful login event
			Security::auditLoginFail( $username );
			global $globalEvents;
			if( $globalEvents->exists("AfterUnsuccessfulLogin") )
			{
				$message = "";
				$globalEvents->AfterUnsuccessfulLogin( $username, $password, $message, null, array() );
			}
		}
		return false;
	}


	/**
	 * @param String username
	 * @param String password (optional)
	 * @return Array
	 */
	public static function getUserData( $username, $password = "" )
	{
		return Security::fetchUserData( $username, $password, $password === "" );
	}

	/**
	 * This function must return data in case of provisional sessions as well!
	 * @return Array
	 */
	public static function & currentUserData( )
	{
		return storageGet("UserData");
	}



	/**
	 *	Logs the current user out
	 */
	public static function logout()
	{
		$loginPageObject = Security::createLoginPageObject();
		$loginPageObject->Logout();
	}

	/**
	 *	Returns table permissions array the current user.
	 *	Returns array where keys are specific permission letters:
	 * 	A - add,
	 *  D - delete,
	 *  E - edit,
	 *  S - search/list,
	 *  P - print/export,
	 *  I - import,
	 *	M - admin permission. When advanced permissions are in effect ( users can see/edit their own records only ), this permissions grants access to all records.
	 *
	 *  Sample:
	 *		$rights = Security::getPermissions( $table );
	 *		if( $rights["A"] )
	 *		echo "add permission available";
	 *
	 *	@param String $table - table name
	 *  @returns Array
	 */
	public static function getPermissions( $table )
	{
		$table = findTable( $table );
		if( $table == "" )
			return array();

		return Security::permMask2Array( GetUserPermissions( $table ) );
	}

	/**
	 *	Set table permissions for the current user.
	 *	Permissions should be passed in the form of array where keys are specific permission letters:
	 * 	A - add,
	 *  D - delete,
	 *  E - edit,
	 *  S - search/list,
	 *  P - print/export,
	 *  I - import,
	 *	M - admin permission. When advanced permissions are in effect ( users can see/edit their own records only ), this permissions grants access to all records.
	 *
	 *  Sample:
	 *		$rights = Security::getPermissions( $table );
	 *		$rights["A"] = true;
	 *		$rights["D"] = false;
	 *		Security::setPermissions( $table, $rights );
	 *
	 *  Permissions need to be set only once per user session, i.e. in the 'After Successful Login' event.
	 *
	 *	@param String $table - table name
	 *	@param Array $rights
	 *  @returns nothing
	 */

	public static function setPermissions( $table, $rights )
	{
		$table = findTable( $table );
		if( $table == "" )
			return;

		$overrides =& Security::createSecurityOverrides( $table );
		$overrides[ "mask" ] = Security::permArray2Mask( $rights );
	}

	private static function _setRestrictedPages( $table, $pageType, $pages, $pSet ) {

		$currentPages = Security::getRestrictedPages( $table );
		$newPages = array();
		foreach( $currentPages as $p ) {
			if( $pSet->getOriginalPageType( $p ) !== $pageType ) {
				$newPages[ $p ] = true;
			}
		}

		if( $pages ) {
			foreach( $pages as $p ) {
				$newPages[ $p ] = true;
			}
		}

		$overrides =& Security::createSecurityOverrides( $table );
		$overrides[ "pages" ] = $newPages;
		$pSet->resetPages();
	}

	public static function setRestrictedPages( $table, $type, $pages )
	{
		if( $table !== GLOBAL_PAGES ) {
			$table = findTable( $table );
			if( $table == "" )
				return;
		}
		if( !is_array( $pages ) ) {
			$pages = array( $pages );
		}
		Security::_setRestrictedPages( $table, $pageType, $pages, new ProjectSettings( $table ) );
	}

	public static function setAllowedPages( $table, $type, $allowedPages )
	{
		if( $table !== GLOBAL_PAGES ) {
			$table = findTable( $table );
			if( $table == "" )
				return;
		}
		if( !is_array( $allowedPages ) ) {
			$allowedPages = array( $allowedPages );
		}

		$pSet = new ProjectSettings( $table );
		$allPages = $pSet->getOriginalPagesByType( $type );
		$pages = array();
		foreach( $allPages as $p ) {
			if( !in_array( $p, $allowedPages ) )
				$pages[] = $p;
		}

		Security::_setRestrictedPages( $table, $pageType, $pages, $pSet );
	}

	private static function & createSecurityOverrides( $table ) {
		if( !isset( $_SESSION[ "securityOverrides" ] ) )
			$_SESSION[ "securityOverrides" ] = array();
		if( !isset( $_SESSION[ "securityOverrides" ][ $table ] ) )
			$_SESSION[ "securityOverrides" ][ $table ] = array();
		return $_SESSION[ "securityOverrides" ][ $table ];
	}

	private static function permMask2Array( $str )
	{
		$ret = array();
		for( $i = 0; $i < strlen($str); ++$i )
		{
			$c = substr( $str, $i, 1 );
			if( $c == "A" || $c == "D" || $c == "E" || $c == "S" || $c == "P" || $c == "I" || $c == "M" )
				$ret[ $c ] = true;
		}
		return $ret;
	}

	private static function permArray2Mask( $rights )
	{
		$str = "";
		if( !is_array( $rights ) )
		{
			if( strlen( $rights ) )
				$rights = Security::permMask2Array( $rights );
			else
				return "";
		}
		foreach( $rights as $c => $v )
			if( $v && ( $c == "A" || $c == "D" || $c == "E" || $c == "S" || $c == "P" || $c == "I" || $c == "M" ) )
				$str .= $c;
		return $str;
	}


	/**
	 *	Returns current user's OwnerID - the value used to identify records ownership in the specific table.
	 *
	 *	@param String $table - table name
	 *  @returns String
	 */
	public static function getOwnerId( $table )
	{
		$table = findTable( $table );
		if( $table == "" )
			return;

		return storageGet( "_" . $table . "_OwnerID" );
	}

	/**
	 *	Change current user's OwnerID - the value used to identify records ownership in the specific table.
	 *
	 *	@param String $table - table name
	 *  @param String $ownerid
	 */
	public static function setOwnerId( $table, $ownerid )
	{
		$table = findTable( $table );
		if( $table == "" )
			return;

		storageSet( "_" . $table . "_OwnerID" , $ownerid );
	}

	public static function hasLogin() {
		return GetGlobalData("createLoginPage");
	}

	public static function loginMethod() {
		return GetGlobalData("nLoginMethod");
	}

	public static function dynamicPermissions() {
		$method = Security::loginMethod();
		if( $method != SECURITY_TABLE && $method != SECURITY_AD)
			return false;
		return GetGlobalData("isDynamicPerm");
	}

	/**
	 * Returns true if permissions are defined in the project.
	 * When false, no permissions system is present in the project. Everyone sees everything.
	 * @return Boolean
	 */
	public static function permissionsAvailable() {
		$method = Security::loginMethod();
		if( $method != SECURITY_TABLE && $method != SECURITY_AD )
			return false;
		return GetGlobalData("isDynamicPerm") || GetGlobalData("userGroupCount");
	}

	/**
	 * Returns true if there are users in the project.
	 * When false, there may be single hardcoded login in the project, but no different users
	 * @return Boolean
	 */
	public static function hasUsers() {
		$method = Security::loginMethod();
		if( $method != SECURITY_TABLE && $method != SECURITY_AD )
			return false;
		return true;
	}


	/**
	 * 	$permission - one of A,D,E,S,P,I literals
	 *  $table that the permissions are requested on
	 *  $ownerId - ownerId of the record the permissions is requested on
	 */
	public static function userCan( $permission, $table, $ownerId = null )
	{
		if( !Security::hasLogin() ) {
			return true;
		}

		$strPerm = GetUserPermissions( $table );

		// no permissions
		if( strpos( $strPerm, $permission ) === false )
			return false;

		//	record ownerId check not requested or user has admin permissions
		if( $ownerId === null || strpos($strPerm, "M") !== false )
			return true;

		$pSet = new ProjectSettings($table);
		$advSecType = $pSet->getAdvancedSecurityType();
		if( $advSecType == ADVSECURITY_ALL || $advSecType == ADVSECURITY_NONE /*????*/  )
			return true;

		if( $advSecType == ADVSECURITY_EDIT_OWN && $permission != 'D' && $permission != 'E' ) {
			return true;
		}

		$currentOwnerId = (string)storageGet( "_".$table."_OwnerID" );
		if( $pSet->isCaseInsensitiveUsername() ) {
			$ownerId = strtoupper( $ownerId );
			$currentOwnerId = strtoupper( $currentOwnerId );
		}

		return ( "".$ownerId ) === ( "".$currentOwnerId );
	}

	/**
	 * 	User has permissions on fields specified on the Register page and on the fields from pages he has access to
	 *  pageName can be substituted by another page
	 *
	 *  @param String table
	 *  @param String field
	 *  @param String pageType
	 *  @param String pageName
	 *  @param Boolean edit. Either we are asking to show field
	 */
	public static function userHasFieldPermissions( $table, $field, $pageType, $pageName, $edit ) {
		global $cLoginTable;
		$pageTable = $table;
		if( $table === $cLoginTable && ( $pageType === "register" || $pageType === "userinfo" ) ) {
			$pageTable = GLOBAL_PAGES;
		}
		$pSet = new ProjectSettings( $table, $pageType, $pageName, $pageTable );
		$pageType = $pSet->getPageType();

		$permission = Security::pageType2permission( $pageType );
		if( $pageTable != GLOBAL_PAGES && !Security::userCan( $permission, $table ) ) {
			return false;
		}


		//	search panel fields
		if( $edit && !pageTypeInputsData( $pageType ) ) {
			if( $pSet->appearOnSearchPanel( $field ) ) {
				return true;
			}
			if( $pageType == "list") {
				return $pSet->hasInlineEdit() && $pSet->appearOnInlineEdit( $field )
				|| $pSet->hasInlineAdd() && $pSet->appearOnInlineAdd( $field );
			}
		}
		if( !$edit && !pageTypeShowsData( $pageType ) )
			return false;
		return $pSet->appearOnPage( $field );
	}

	public static function getRestrictedPages( $table )
	{
		if( is_array( $_SESSION["securityOverrides"] ) )
		{
			if( isset( $_SESSION["securityOverrides"][ $table ] ) ) {
				if( isset( $_SESSION["securityOverrides"][ $table ][ "pages" ] ) ) {
					return $_SESSION["securityOverrides"][ $table ][ "pages" ];
				}
			}
		}
		if( Security::dynamicPermissions() ) {
			$userRights = &Security::dynamicUserRights();
			$pages = @$userRights[$table]["pages"];
			if( !$pages ) {
				$pages = array();
			}
			return $pages;
		} else {
			return Security::_staticRestrictedPages( $table );
		}
		return array();
	}

	public static function pageType2permission( $pageType ) {
		if( $pageType == "add" )
			return "A";
		else if( $pageType == "edit" )
			return "E";
		else if( $pageType == "print" || $pageType == "export" || $pageType == "rprint" || $pageType == "masterprint" || $pageType == "masterrprint" )
			return "P";
		else if( $pageType == "import" )
			return "I";
		return "S";
	}

	public static function _staticRestrictedPages( $table ) {
		$group = Security::getUserGroup();
		if( $group == "2" )	{
			return array();
		}
		if( $group == "1" )	{
			return array();
		}
		//	default permissions
		return array();
	}

	public static function GetPlugins() {
		$plugins = array();
		require_once( getabspath('classes/security/securityplugin.php') );

		if( GetGlobalData("isFB", false) )
		{
			require_once( getabspath( 'classes/security/fb.php' ) );
			$plugins["fb"] = new SecurityPluginFB();
		}


		if( GetGlobalData("isGoogleSignIn", false) )
		{
			require_once( getabspath( 'classes/security/google.php' ) );
			$plugins["go"] = new SecurityPluginGoogle();
		}

		return $plugins;
	}

	public static function getLoginTable() {
		global $cLoginTable;
		if( Security::loginMethod() === SECURITY_TABLE )
			return $cLoginTable;
		return false;
	}

	/**
	 * Test whether the user has permissions to see the page
	 */
	public static function userCanSeePage( $table, $page ) {
		$pSet = new ProjectSettings( $table, "", $page );
		if( $pSet->pageName() != $page )
			return false;
		if( $table ==  GLOBAL_PAGES )
			return true;
		$permission = Security::pageType2permission( $pSet->getPageType() );
		if( !$permission ) {
			//	page doesn't require permissions
			return true;
		}
		$strPerm = GetUserPermissions( $table );
		return strpos( $strPerm, $permission ) !== false;
	}

	/**
	 * @param String - one of the permission letters: 'ADESPIM'
	 * @param ProjectSettings
	 * @param Boolean - don't check if the user has permissions on the table. Check record-level permissions only.
	 * 					This flag is for lookup wizards
	 * @return DsCondition or null if no condition needed
	 */
	public static function SelectCondition( $strRequestedPremission, $pSet, $skipTablePermissions = false )
	{
		//	not a project table
		if( !$pSet ) {
			return null;
		}

		if( !Security::hasUsers() ) {
			return null;
		}

		$strPerm = GetUserPermissions( $pSet->table() );
		if( !$skipTablePermissions && strpos( $strPerm, $strRequestedPremission ) === false ) {
			return DataCondition::_False();
		}

		$ownerid = storageGet( "_" . $pSet->table() . "_OwnerID" );


		$tableAdvSecurity = $pSet->getAdvancedSecurityType();
		if( strpos($strPerm, "M") !== false ) {
			return null;
		}

		if ( $tableAdvSecurity == ADVSECURITY_VIEW_OWN
				||  $tableAdvSecurity == ADVSECURITY_EDIT_OWN
					&& ( $strRequestedPremission == "E" || $strRequestedPremission == "D") ) {
			return DataCondition::FieldEquals( $pSet->getTableOwnerID(), $ownerid );
		}

		return null;
	}

	/**
	 * Get DataSource for ug_members table
	 * @return DataSource
	 */
	public static function getUgMembersDatasource() {
		if( !Security::dynamicPermissions() ) {
			return null;
		}
		global $cman;
		return getTableDataSource( "ugmembers", $cman->getUserGroupsConnId() );
	}

	/**
	 * Get DataSource for ug_groups table
	 * @return DataSource
	 */
	public static function getUgGroupsDatasource() {
		if( !Security::dynamicPermissions() ) {
			return null;
		}
		global $cman;
		return getTableDataSource( "uggroups", $cman->getUserGroupsConnId() );
	}

	/**
	 * Get DataSource for ug_rights table
	 * @return DataSource
	 */
	public static function getUgRightsDatasource() {
		if( !Security::dynamicPermissions() ) {
			return null;
		}
		global $cman;
		return getTableDataSource( "ugrights", $cman->getUserGroupsConnId() );
	}


	/**
	 * get well-known configuration
	 * @param String configurationUrl
	 * @return Array
	 */
	public static function getOpenIdCongiguration( $configurationUrl ) {
		$response = runner_http_request( $configurationUrl );
		return my_json_decode( $response["content"] );
	}

	/**
	 * Get public key form JWKS
	 * @param String jwt
	 * @param Array wellKnown
	 * @return Array JWK format
	 */
	public static function getOpenIdJWK( $jwt, $wellKnown ) {
		$response = runner_http_request( $wellKnown["jwks_uri"] );
		$keys = my_json_decode( $response["content"] );

		$parts = explode('.', $jwt);
		$tokenHeader = my_json_decode( base64_decode_url( $parts[0] ) );

		if( isset( $tokenHeader["kid"] ) ) {
			foreach( $keys["keys"] as $key ) {
				if( $key["kid"] == $tokenHeader["kid"] )
					return $key;
			}
			return null;
		}

		// case with one key without id
		if( count( $keys ) == 1 && !strlen( $keys[0]["kid"] ) )
			return 	$keys[0];

		return null;
	}

	/**
	 * Verify token buy key
	 * @param String jwt
	 * @param Array jwk  (JWK Format)
	 * @return Array|false
	 */
	public static function openIdVerifyToken( $jwt, $jwk ) {
		return verifyOpenIdToken( $jwt, $jwk );
	}

	/**
	 * @param String jwt
	 * @return Array|false
	 */
	public static function parseJWT( $jwt ) {
		$parts = explode( '.', $jwt );
		if( count( $parts) != 3 )
			return false;

		return array(
			"header" => my_json_decode( base64_decode_url( $parts[0] ) ),
			"payload" => my_json_decode( base64_decode_url( $parts[1] ) ),
			"signature" => base64_decode_url_binary( $parts[2] )
		);
	}

	public static function twoFactorAvailable() {
		if( inRestApi() ) {
			return false;
		}
		global $globalSettings;
		return isset( $globalSettings["twoFactor"] );
	}

	public static function & twoFactorSettings() {
		global $globalSettings;
		return $globalSettings["twoFactor"];
	}

	public static function twoFactorMethod( $value ) {
		if( $value & 2 ) {
			return "email";
		}
		if( $value & 4 ) {
			return "phone";
		}
		if( $value & 8 ) {
			return "totp";
		}
		return "";
	}
	public static function twoFactorEnabled( $value ) {
		return $value & 1;
	}

	public static function getTwoFactorValue( $enable, $method ) {

		$enableValue = $enable ? 1 : 0;
		if( $method === "email" ) {
			return 	2 + $enableValue;
		} else if( $method === "phone" ) {
			return 	4 + $enableValue;
		} else if( $method === "totp" ) {
			return 	8 + $enableValue;
		}
		return 0;
	}

	public static function prepareTwoFactorMessage( $code ) {
		$smsText = myfile_get_contents( getabspath("email/".mlang_getcurrentlang()."/twofactorauth.txt"), "r");
		return str_replace( "%code%", $code, $smsText );
	}

	/**
	 * Returns true if automatoc login with saved credentials is allowed
	 * @return Boolean
	 */
	public static function allowAutoLogin() {
		$userData =& Security::provisionalUserData();
		$twofSettings =& Security::twoFactorSettings();
		$twoFactorValue = $userData[ $twofSettings[ "twoFactorField" ] ];
		return !Security::twoFactorEnabled($twoFactorValue);
	}

	/**
	 * @return Boolean
	 */
	public static function guestLoginAvailable() {
		global $globalSettings;
		if( $globalSettings["staticGuestLogin"] || Security::dynamicPermissions() ) {
			return guestHasPermissions();
		}
		return false;
	}

	/**
	 * @param Array $data - user's record from the database
	 */
	public static function  fillTablesOwnerId( $data ) {


					storageSet( "OwnerID", $data["id_usuario"] );
		storageSet( "_public.detalles_ventas_OwnerID", $data["id_usuario"] );
					storageSet( "_public.gestion_registros_origen_OwnerID", $data["id_usuario"] );
	}

	/**
	 * @param Int $sessionLevel - one of the LOGGED_... constants
	 */
	public static function createProvisionalSession( $sessionLevel, $userId, $displayName = "", $userData = array() ) {
		Security::createUserSession( $userId, $displayName, $userData );
		storageDelete( "UserID" );
		storageSet( "SessionLevel", $sessionLevel );
		storageSet( "ProvisionalUserID", $userId );
	}

	/**
	 * @return Boolean - false if session os lost or never existed
	 */
	public static function elevateSession( $level = LOGGED_FULL ) {
		$userId = storageGet( "ProvisionalUserID" );
		if( !$userId ) {
			return false;
		}
		storageSet( "SessionLevel", $level );
		if( $level == LOGGED_FULL ) {
			storageSet( "UserID", $userId );
			storageDelete( "ProvisionalUserID" );
		}
		return true;
	}

	/**
	 * @param String userid - guest login when empty
	 */
	public static function createUserSession( $userId, $displayName = "", $userData = array(), $adGroups = array() ) {

		if( $userId && Security::getUserName() !== $userId ) {
			regenerateSessionId();
		}

		$accessLevel = ACCESS_LEVEL_USER;
		if( $userId == "" ) {
			$userId = "Guest";
			$accessLevel = ACCESS_LEVEL_GUEST;
			$displayName = "Invitado";
		}
		if( $displayName == "" ) {
			$displayName = $userId;
		}

		storageSet( "SessionLevel", LOGGED_FULL );
		storageSet( "UserID", $userId );
		storageSet( "AccessLevel", $accessLevel );

		//	htmlspecialchars is by design, to let users override this with their own HTML code
		storageSet( "UserName", runner_htmlspecialchars( $displayName ) );

		//	set GroupId
		if( Security::loginMethod() === SECURITY_AD ) {
			storageSet("GroupID", implode( ",", $adGroups ) );
		} else {
			global $cUserGroupField;
			storageSet("GroupID", Security::permissionsAvailable()
				? $userData[ $cUserGroupField ]
				: "" );
		}
		if( $accessLevel === ACCESS_LEVEL_GUEST ) {
			storageSet( "GroupID", "<Guest>" );
		}

		//	cookie to prevent CSRF attack
		$_SESSION["runnerSession"] = generatePassword(20);
		setProjectCookie( "runnerSession", $_SESSION["runnerSession"], 0, true, true );

		Security::fillTablesOwnerId( $userData );

		storageSet( "UserData", $userData );
	}

	/**
	 * Read Dynamic permissions groups with database-based security
	 * @return Array of numeric group identificators
	 */
	public static function readDatabaseUserGroups( $userId ) {
		global $caseInsensitiveUsername;
		$dataSource = Security::getUgMembersDatasource();

		$dc = new DsCommand();
		// $userID may contain username or security plugin user id
		$dc->filter = DataCondition::FieldEquals(
			"",
			$userId,
			0,
			$caseInsensitiveUsername ? dsCASE_INSENSITIVE : dsCASE_STRICT);
		$qResult = $dataSource->getList( $dc );

		while( $data = $qResult->fetchAssoc() ) {
			$groups[] = $data[""];
		}
		return $groups;
	}

	/**
	 * Read Dynamic permissions groups with AD-based security
	 * @return Array of numeric group identificators
	 */
	protected static function readADUserGroups() {

		$userId = Security::getUserName();
		//	prepare list of group and user names
		$userGroups = explode(',', storageGet('GroupID') );
		$userGroups[] = $userId;

		$atIdx = strpos( $userId, '@' );
		if( $atIdx !== false )
			$userGroups[] = substr( $userId, 0, $atIdx );

		//	prepare command
		global $caseInsensitiveUsername;
		$dataSource = Security::getUgGroupsDatasource();

		$dc = new DsCommand();
		$dc->filter = DataCondition::FieldInList(
			"",
			$userGroups,
			$caseInsensitiveUsername ? dsCASE_INSENSITIVE : dsCASE_STRICT);

		//	run request
		$qResult = $dataSource->getList( $dc );

		while( $data = $qResult->fetchAssoc() ) {
			$groups[] = $data[""];
		}
		return $groups;
	}

	/**
	 * @return boolean
	 */
	protected static function ADUserisAdmin() {

		global $caseInsensitiveUsername;
		$adminUsers = GetGlobalData("ADAdmins", array());
		$userId = Security::getUserName();
		if ($caseInsensitiveUsername) {
			//	convert everything to upper register
			foreach( array_keys( $adminUsers ) as $i )
				$adminUsers[ $i ] = strtoupper( $adminUsers[ $i ] );
			$userId = strtoupper( $userId );
		}

		//	username added to admin groups
		if ( in_array( $userId, $adminUsers ) )
		{
			return true;
		}

		$userGroups = explode(',', storageGet('GroupID') );
		foreach ($userGroups as $g)
		{
			$gName = $caseInsensitiveUsername
				? strtoupper( $g )
				: $g;
			if( in_array( $gName, $adminUsers) ) {
				return true;
			}
		}
		return false;
	}

	/**
	 * return reference to the user rights array in the session storage
	 */
	public static function & dynamicUserRights() {
		Security::readUserPermissions();
		return Security::userRightsStorage();
	}

	public static function & userRightsStorage( $userId = "" ) {
		if( $userId == "" ) {
			$userId = Security::getUserName();
		}
		$userRights =& storageFindOrCreate( "UserRights" );
		if( !isset( $userRights[ $userId ] ) ) {
			$userRights[ $userId ] = array();
		}
		return $userRights[ $userId ];
	}

	/**
	 * select table permissions for the list of gtoups from the database
	 * @return DataResult
	 */
	public static function fetchDynamicPermissions( $groups ) {
		$dc = new DsCommand();
		global $caseInsensitiveUsername;
		$caseInsensitive = ( $caseInsensitiveUsername && Security::loginMethod() === SECURITY_AD )
			? dsCASE_INSENSITIVE
			: dsCASE_DEFAULT;
		$dc->filter = DataCondition::_And( array(
			DataCondition::FieldInList(
				"",
				$groups, $caseInsensitive ),
			DataCondition::_Not(
				DataCondition::FieldIs( "", dsopEMPTY, "" )
			)
		));
		$dataSource = Security::getUgRightsDatasource();
		return $dataSource->getList( $dc );
	}

	protected static function readUserPermissions() {
		global $gPermissionsRead, $gPermissionsRefreshTime ;

		$userId = Security::getUserName();

		$sessionRights =& Security::userRightsStorage();
		$needreload = !$sessionRights;

		if(!$needreload && ( $gPermissionsRead || time() - storageGet( "LastReadRights" ) <= $gPermissionsRefreshTime))
			return;

		//	clear everything
		$userRights =& storageFindOrCreate( "UserRights" );
		$userRights[ Security::getUserName() ] = array();
		$sessionRights =&$userRights[ Security::getUserName() ];


		if( Security::isGuest() || $userId == "" ) {
			$groups[] = -3;
		}  else {
			if( Security::loginMethod() === SECURITY_AD )
			{
				$groups = Security::readADUserGroups();
			}
			else
			{
				$groups = Security::readDatabaseUserGroups( $userId );
			}

			//	member of <Default> group if doesn't belong anywhere
			if( !count($groups) )
				$groups[] = -2;
		}

		$qResult = Security::fetchDynamicPermissions( $groups );

		//	read table permissions
		while( $data = $qResult->fetchAssoc() )
		{
			$table = $data[ "" ];
			$mask = $data[ "" ];
			$restrictedPages = my_json_decode( $data[ "" ] );
			if( !is_array( $restrictedPages )) {
				$restrictedPages = array();
			}
			if( !array_key_exists( $table, $sessionRights ) )
			{
				$sessionRights[ $table ] = array( "mask" => $mask, "pages" => $restrictedPages );
				continue;
			}
			$currentMask = $sessionRights[ $table ]["mask"];
			$currentPages = &$sessionRights[ $table ]["pages"];
			for($i = 0; $i < strlen($mask); $i++)
			{
				$perm = substr($mask, $i, 1);
				if( strpos($currentMask, $perm ) === false )
				$sessionRights[ $table ]["mask"] .= $perm;
			}
			foreach( $restrictedPages as $page => $dummy ) {
				$currentPages[$page] = true;
			}
		}

		if( Security::loginMethod() === SECURITY_AD ) {
			$sessionRights[".IsAdmin"] = Security::ADUserisAdmin();
		} else {
			$sessionRights[".IsAdmin"] = in_array( -1, $groups );
		}
		$sessionRights[".Groups"] = $groups;
		storageSet( "LastReadRights", time() );
		$gPermissionsRead = true;
	}

	public static function guestHasStaticPermissions() {
		return false;
	}

	public static function guestHasDynamicPermissions() {
		$result = Security::fetchDynamicPermissions( array( -3 ) );

		//	only current project tables matter
		//	the database may have irrelevant records
		$tables =& GetTablesListWithoutSecurity();
		while( $data = $result->fetchAssoc() ) {
			if( in_array( $data[ "" ], $tables ) ) {
				return true;
			}
		}
		return false;
	}

	public static function auditLoginSuccess() {
		$auditObj = GetAuditObject();
		if( !$auditObj ) {
			return;
		}
		$auditObj->LogLogin( Security::getUserName() );
		$auditObj->LoginSuccessful();
	}

	public static function auditLoginFail( $username ) {
		$auditObj = GetAuditObject();
		if( !$auditObj ) {
			return;
		}
		$auditObj->LogLoginFailed($username);
		$auditObj->LoginUnsuccessful($username);
	}

	/**
	 * @return DsCommand
	 */
	protected static function createFetchUserCommand( $username, $loginControls = array(), $ignoreActivation = false ) {
		global $cUserNameField, $caseInsensitiveUsername;

		$conditions = array(
			DataCondition::FieldEquals( $cUserNameField, $username, 0, $caseInsensitiveUsername ? dsCASE_INSENSITIVE : dsCASE_STRICT )
		);
		if( !$ignoreActivation && GetGlobalData( "userRequireActivation" ) ) {
			$conditions[] = DataCondition::FieldEquals( GetGlobalData( "userActivationField" ), 1 );
		}
		foreach( $loginControls as $field => $value ) {
			$conditions[] = DataCondition::FieldEquals( $field, $value );
		}
		$dc = new DsCommand();
		$dc->filter = DataCondition::_And( $conditions );
		return $dc;
	}

	/**
	 * Verify username & password against database.
	 * Return user's record if success, null otherwise
	 */
	public static function fetchUserData( $username, $password, $skipPasswordCheck = false, $loginControls = array() ) {

		if( Security::loginMethod() != SECURITY_TABLE ) {
			return null;
		}
		$dataSource = getLoginDataSource();

		// dont' bother about activation if password is not checked
		$dc = Security::createFetchUserCommand( $username, $loginControls, $skipPasswordCheck );
		$qResult = $dataSource->getSingle( $dc );
		$data = $dataSource->decryptRecord( $qResult->fetchAssoc() );

		if( !$skipPasswordCheck && GetGlobalData( "userRequireActivation" ) ) {
			if( $data ) {
				//	the activation field may not be present in the SQL
				$data[ GetGlobalData( "userActivationField" ) ] = 1;
			} else {
				//	try to find an unactivated user
				$dc = Security::createFetchUserCommand( $username, $loginControls, true );
				$qResult = $dataSource->getSingle( $dc );
				$data = $dataSource->decryptRecord( $qResult->fetchAssoc() );
			}
		}

		if( !$data ) {
			return null;
		}

		global $cPasswordField;
		if( !$skipPasswordCheck && !Security::verifyPassword( $password, $data[ $cPasswordField ] ) ) {
			return null;
		}
		return $data;
	}

	public static function verifyPassword( $password, $storedPassword ) {
		global $globalSettings;
		if( $globalSettings["bEncryptPasswords"] ) {
			if( $globalSettings["nEncryptPasswordMethod"] == 0 )
				return passwordVerify( $password, $storedPassword );
			else {
				return (string)Security::hashPassword( $password ) === (string)$storedPassword;
			}
		}
		return (string)$password === (string)$storedPassword;
	}

	public static function hashPassword( $password ) {
		global $globalSettings;

		global $globalSettings;
		return ( $globalSettings["nEncryptPasswordMethod"] == 0 )
			? getPasswordHash( $password )
			: md5( $password );
	}

	/**
	 * @return Array {
	 * success => boolean
	 * message => string ( if not success )
	 * }
	 */
	public static function sendTwoFactorCode( $method, $address, $code ) {
		if( $method === "email" ) {
			return RunnerPage::sendEmailByTemplate( $address, "twofactoremail", array( "code" => $code ) );
		} else if( $method === "phone" ) {
			$message = Security::prepareTwoFactorMessage( $code );
			return runner_sms( $address, $message );
		}

		return array( "success" => false, "message" => "Unknown two factor authentication method" );
	}

	public static function userSessionLevel() {
		if( Security::getUserName() != "" ) {
			return LOGGED_FULL;
		}
		if( Security::provisionalUsername() == "" ) {
			return LOGGED_NONE;
		}
		return storageGet("SessionLevel");
	}

	public static function provisionalUsername() {
		if( Security::getUserName() != "" )
			return "";
		return storageGet("ProvisionalUserID");
	}

	public static function provisionalUserData() {
		return storageGet( "UserData" );
	}

	/**
	 * @return Array {
	 * method => string, method used
	 * address => address used
	 * } or null if nothing to send
	 */
	public static function twoFactorDeliveryInfo( &$userData ) {
		$twofSettings =& Security::twoFactorSettings();
		$twoFactorValue = $userData[ $twofSettings[ "twoFactorField" ] ];
		if( !Security::twoFactorEnabled( $twoFactorValue ) ) {
			return null;
		}
		$twofMethod = Security::twoFactorMethod( $twoFactorValue );
		$ret = array(
			"method" => $twofMethod
		);
		if( $twofMethod == "email"  ) {
			$ret["address"] = $userData[ $twofSettings["emailField"] ];
		} else if( $twofMethod == "phone" ) {
			$ret["address"] = $userData[ $twofSettings["phoneField"] ];
		} else if( $twofMethod == "totp" ) {
			$ret["address"] = $twofSettings["projectName"];
		}
		return $ret;
	}

	/**
	 * Generate, save and send the two factor code based on the provisional session data
	 *
	 * !!! This method does not validate user and project settings.
	 * Use verifyTwoFactorEnabled for that
	 *
	 * @return Array {
	 * success => boolean
	 * message => string ( if not success )
	 * method => string, method used
	 * address => address used
	 * } or null if nothing to send
	 */
	public static function generateAndSendTwoFactorCode() {
		if( Security::userSessionLevel() !== LOGGED_2F_PENDING ) {
			return null;
		}
		$userData =& Security::provisionalUserData();
		$twofSettings =& Security::twoFactorSettings();

		$destination = Security::twoFactorDeliveryInfo( $userData );

		if( !$destination ) {
			return null;
		}
		if( $destination["method"] === "totp" ) {
			$destination["success"] = true;
			return $destination;
		}
		//	generate 2f code
		$code = generateUserCode( GetGlobalData("smsCodeLength", 6) );
		storageSet( "twoFactorCode", $code );

		$ret = Security::sendTwoFactorCode( $destination["method"], $destination["address"], $code );
		$ret[ "address" ] = $destination["address"];
		$ret[ "method" ] = $destination["method"];
		return $ret;
	}

	/**
	 * Verify the two factor code based on the provisional session data
	 * !!! This function does not elevate session!!
	 * @return Boolean
	 */
	public static function checkTwoFactorCode( $code ) {

		if( Security::userSessionLevel() !== LOGGED_2F_PENDING ) {
			return false;
		}
		$userData =& Security::provisionalUserData();
		$twofSettings =& Security::twoFactorSettings();

		$twoFactorValue = $userData[ $twofSettings[ "twoFactorField" ] ];
		if( !Security::twoFactorEnabled( $twoFactorValue ) ) {
			return true;
		}
		$twofMethod = Security::twoFactorMethod( $twoFactorValue );
		if( $twofMethod == "email" || $twofMethod == "phone" ) {
			$savedCode = storageGet( "twoFactorCode" );
			return $code != "" && $savedCode == $code;
		}

		if( $twofMethod == "totp" ) {
			return $code == calculateTotpCode( $userData[ $twofSettings["totpField"] ] );
		}
		return false;
	}


	/**
	 * Verify two factor settigns to make sure it is enabled and can be used
	 * @return Boolean
	 */
	public static function verifyTwoFactorEnabled( $userData ) {
		$twofSettings =& Security::twoFactorSettings();
		if( !$twofSettings ) {
			//	2FA turned off in the project
			return false;
		}
		$twoFactorValue = $userData[ $twofSettings[ "twoFactorField" ] ];
		if( !Security::twoFactorEnabled( $twoFactorValue ) ) {
			//	2FA turned off for this user
			return false;
		}
		$twofMethod = Security::twoFactorMethod( $twoFactorValue );

		if( $twofMethod === "totp" ) {
			return validateTotpSecret( $userData[ $twofSettings[ "totpField" ] ] );
		} else if ( $twofMethod === "phone" ) {
			$number = normalizePhoneNumber( $userData[ $twofSettings[ "phoneField" ] ] );
			return strlen( $number ) > 5;
		} else if( $twofMethod === "email" ) {
			return validateEmail( $userData[ $twofSettings[ "emailField" ] ] );
		}

		//	unknown or un-selected 2FA method
		return false;
	}

	/**
	 * Checks whether 'remember this machine for two weeks' is in effect
	 */
	public static function machineTwoFactorTrusted( $userData ) {
		//	verify some cookie
		return false;
	}

	/**
	 * @return Boolean
	 */
	public static function verifyHardcodedLogin( $username, $password ) {
		if( Security::loginMethod() !== SECURITY_HARDCODED ) {
			return false;
		}
		$cUserName = GetGlobalData( "UserName" );
		$cPassword = GetGlobalData( "Password" );
		global $caseInsensitiveUsername;
		return $caseInsensitiveUsername
			? strtoupper( $username ) === strtoupper( $cUserName ) && strtoupper( $password ) === strtoupper( $cPassword )
			: $username == $cUserName && $password == $cPassword;
	}

	public static function setKeepLoggedCookie( $success ) {
		if( $success && GetGlobalData( "keepLoggedIn" ) ) {		
			$payload = array( 
				"username" => Security::getUserName(), 
				"host" => projectHost(),
				"origin" => projectUrl()
			);
			
			//	add password hash for more security, so the old tokens stop working when password is changed
			if( Security::loginMethod() === SECURITY_TABLE ) {
				global $cPasswordField;
				$data =& Security::currentUserData();
				$payload["checksum"] = getPasswordHash( $data[ $cPasswordField ] );
			} else if( Security::loginMethod() === SECURITY_HARDCODED ) {
				$payload["checksum"] = getPasswordHash( GetGlobalData("Password") );
			} else if( Security::loginMethod() === SECURITY_AD ) {
				$payload["displayName"] = Security::getDisplayName();
			}
			
			$secondsIn30 = 30 * 1440 * 60;
			setProjectCookie("token", jwt_encode( $payload, $secondsIn30 ), time() + $secondsIn30, true );
		} else {
			setProjectCookie("token", "", time() - 1, true );
		}
	}

	/**
	 * If the token is good to be used for login, return decoded token. Null otherwise
	 * @return Array or null
	 */
	public static function verifyKeepLoggedToken( $jwt ) {
		$payload = jwt_verify_decode( $jwt );
		if( !$payload ) {
			return null;
		}

		if( $payload["username"] == "" )
			return null;

		if( $payload[ "external" ] ) {
			//	token created by external.php
			//	no additional chek needed
			return $payload;
		}
		
		//	token created by Remeber me feature 
		//	verify password checksum if available
		//	verify GetGlobalData( "keepLoggedIn" ) and make sure 2FA is off
		
		if( !GetGlobalData( "keepLoggedIn" ) ) {
			return false;
		}

		$userData = array();
		if( Security::loginMethod() === SECURITY_TABLE ) {
			$userData = Security::fetchUserData( $payload["username"], "", true );
			if( !$userData ) {
				return null;
			}
			global $cPasswordField;
			if( !passwordVerify( $userData[ $cPasswordField ], $payload["checksum"]) ) {
				return null;
			}
			// find out if 2factor auth is in effect
			$twofSettings =& Security::twoFactorSettings();
			if( $twofSettings["available"] ) {
				return null;
			}
		} else if( Security::loginMethod() === SECURITY_HARDCODED ) {
			if( !passwordVerify( GetGlobalData("Password"), $payload["checksum"]) ) {
				return null;
			}
		} else if( Security::loginMethod() === SECURITY_AD ) {
			//	don't login if AD Autologin is in effect
			if( GetGlobalData("ADSingleSign", 0) && $_SERVER["REMOTE_USER"] ) {
				return null;
			}
		}
		return $payload;
	}
	
	/**
	 * Lgogin as guest if nothing prevents from it
	 */
	public static function autoLoginAsGuest() {
		
		$scriptname = getFileWoExtension( getFileNameFromURL() );
		
		if(!isLogged() && Security::provisionalUsername() == "" 
			&& $scriptname!="login" 
			&& $scriptname!="remind" 
			&& $scriptname!="register" 
			&& $scriptname!="checkduplicates")
		{
			Security::doGuestLogin();
			return true;
		}
		return false;
	}

	/**
	 * @return Boolean
	 */
	public static function fieldIsUserpic( $table, $field ) {
		if( Security::loginMethod() != SECURITY_TABLE ) {
			return false;
		}
		global $cLoginTable, $cUserpicField;
		return $table == $cLoginTable && $field == $cUserpicField;
	}

	/**
	 * @return DsCondition
	 */
	public static function usernameCondition() {
		global $cUserNameField, $caseInsensitiveUsername;
		return DataCondition::FieldEquals( 
			$cUserNameField, 
			Security::getUserName(), 
			0, 
			$caseInsensitiveUsername ? dsCASE_INSENSITIVE : dsCASE_STRICT 
		);
	}

	/**
	 * whether or not show userpic from the database
	 * @return Boolean
	 */
	public static function showUserPic() {
		global $cUserpicField, $cLoginTable;
		if( Security::loginMethod() != SECURITY_TABLE || $cUserpicField == "" ) {
			return false;
		}
		if( Security::isGuest() ) {
			return false;
		}
		$sessionLevel = Security::userSessionLevel();
		if( $sessionLevel != LOGGED_FULL && $sessionLevel != LOGGED_2FSETUP_PENDING ) {
			return false;
		}
		$userData =& Security::currentUserData();
		if( !isset($userData[ $cUserpicField ]) || strlen_bin($userData[ $cUserpicField ]) == 0 ) {
			return false;
		}
		return true;
	}

	/**
	 * Reload user data from the database
	 */
	public static function refreshUserdata() {
		if( Security::loginMethod() != SECURITY_TABLE ) 
			return;
		if( !isLogged() || Security::isGuest() )
			return;
		$userData = Security::fetchUserData( Security::getUserName(), "", true );
		storageSet( "UserData", $userData );
	}

	/**
	 * CSRF attack prevention
	 * @return Boolean true when safe
	 */
	public static function verifySafeCSRF() {
		//	POST requests must come from the same site only
		global $csrfProtectionOff;
		if( !inRestApi() && !$csrfProtectionOff && isPostRequest() ) {

			//	cookie with SameSite=strict check
			if( !$_SESSION["runnerSession"]  || $_SESSION["runnerSession"] !== $_COOKIE["runnerSession"] ) {
				return false;
			}
			//	additional Referer header check for IE
			if( strtoupper( hostFromUrl( $_SERVER["HTTP_REFERER"] ) ) !== strtoupper( projectHost() ) ) {
				return false;
			}
		}
		return true;
	}

	public static function callAfterLogin() {
		global $globalEvents;
		if( $globalEvents->exists("AfterSuccessfulLogin") )
		{
			$globalEvents->AfterSuccessfulLogin( Security::getUserName(), '', Security::currentUserData(), null );
		}
	}
	
	/**
	 * The CSRF-protection cookie need not be created during the login only.
	 * Any GET-request can verify and update the cookie. 
	 * The cookie may be absent in case of two projects on the same server sharing the session name
	 * The user logs into the first project and also became logged into the secodn, but without the session cookie
	 */
	public static function updateCSRFCookie() {
		if( requestMethod() !== "GET" ) {
			return;
		}
		if( !Security::isLoggedIn() ) {
			return;
		}
		if( !storageGet( "runnerSession" ) ) {
			storageSet( "runnerSession",  generatePassword(20) );
		}
		if( storageGet( "runnerSession" ) !== $_COOKIE["runnerSession"] ) {
			setProjectCookie( "runnerSession", storageGet( "runnerSession" ), 0, true, true );			
		}
	}

}

?>