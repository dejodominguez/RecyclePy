<?php
$strTableName="public.GestionRegistrosOrigen2";
$_SESSION["OwnerID"] = $_SESSION["_".$strTableName."_OwnerID"];

$strOriginalTableName="public.GestionRegistrosOrigen2";

$gstrOrderBy="";
if(strlen($gstrOrderBy) && strtolower(substr($gstrOrderBy,0,8))!="order by")
	$gstrOrderBy="order by ".$gstrOrderBy;

// alias for 'SQLQuery' object
$gSettings = new ProjectSettings("public.GestionRegistrosOrigen2");
$gQuery = $gSettings->getSQLQuery();
$eventObj = &$tableEvents["public.GestionRegistrosOrigen2"];

$reportCaseSensitiveGroupFields = false;

$gstrSQL = $gQuery->gSQLWhere("");

?>