<?php
$strTableName="public.GestionRegistrosOrigen";
$_SESSION["OwnerID"] = $_SESSION["_".$strTableName."_OwnerID"];

$strOriginalTableName="public.GestionRegistrosOrigen";

$gstrOrderBy="";
if(strlen($gstrOrderBy) && strtolower(substr($gstrOrderBy,0,8))!="order by")
	$gstrOrderBy="order by ".$gstrOrderBy;

// alias for 'SQLQuery' object
$gSettings = new ProjectSettings("public.GestionRegistrosOrigen");
$gQuery = $gSettings->getSQLQuery();
$eventObj = &$tableEvents["public.GestionRegistrosOrigen"];

$reportCaseSensitiveGroupFields = false;

$gstrSQL = $gQuery->gSQLWhere("");

?>