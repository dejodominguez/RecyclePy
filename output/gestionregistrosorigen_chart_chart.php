<?php
@ini_set("display_errors","1");
@ini_set("display_startup_errors","1");

$requestTable = "public.GestionRegistrosOrigen Chart";
$requestPage = "list";

require_once("include/dbcommon.php");
require_once('include/xtempl.php');
require_once('classes/chartpage.php');
require_once('classes/searchclause.php');
add_nocache_headers();

require_once("include/gestionregistrosorigen_chart_variables.php");

if( !Security::processPageSecurity( $strtablename, 'S' ) )
	return;






$mode = postvalue("mode");
if( $mode == "listdetails" )
	$pageMode = CHART_DETAILS;
elseif( $mode == "listdetailspopup" )
	$pageMode = CHART_POPUPDETAILS;
elseif( $mode == "dashchart" )
	$pageMode = CHART_DASHBOARD;
elseif( $mode == "dashdetails" )
	$pageMode = CHART_DASHDETAILS;
else
	$pageMode = CHART_SIMPLE;

$detailsMode = $pageMode != CHART_SIMPLE;

$xt = new Xtempl( $detailsMode );

$id = postvalue_number("id");
$id = $id ? $id : 1;

// set params for a RunnerPage constructor
$params = array();
$params["id"] = $id;
$params["xt"] = &$xt;
$params["mode"] = $pageMode;
$params["tName"] = $strTableName;
$params["pageType"] = PAGE_CHART;
$params["pageName"] = postvalue("page");
$params["masterTable"] = postvalue("mastertable");
$params['masterPageType'] = postvalue("masterpagetype");

$params["isGroupSecurity"] = $isGroupSecurity; // a global variable
$params["masterKeysReq"] = array();

if( $pageMode = CHART_DASHBOARD )
{
	$params["dashElementName"] = postvalue("dashelement");
	$params["dashTName"] = postvalue("table");
}

if( isset($_REQUEST["masterKeys"]) )
	$masterKeys = my_json_decode( $_REQUEST["masterKeys"] );

$i = 0;
while (true)
{
	$i++;
	if (isset($_REQUEST["masterkey".$i]))
		$_masterKey = $_REQUEST["masterkey".$i];
	elseif (isset($masterKeys["masterkey".$i]))
		$_masterKey = $masterKeys["masterkey".$i];
	else
		break;
	$params["masterKeysReq"][$i] = $_masterKey;
}

$pageObject = new ChartPage($params);
$pageObject->init();

if( $pageObject->processSaveSearch() )
	exit();

$pageObject->process();
?>