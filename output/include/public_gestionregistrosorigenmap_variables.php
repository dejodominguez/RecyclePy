<?php
$strTableName="public.GestionRegistrosOrigenMap";
$_SESSION["OwnerID"] = $_SESSION["_".$strTableName."_OwnerID"];

$strOriginalTableName="public.GestionRegistrosOrigen";

$gstrOrderBy="";
if(strlen($gstrOrderBy) && strtolower(substr($gstrOrderBy,0,8))!="order by")
	$gstrOrderBy="order by ".$gstrOrderBy;

// alias for 'SQLQuery' object
$gSettings = new ProjectSettings("public.GestionRegistrosOrigenMap");
$gQuery = $gSettings->getSQLQuery();
$eventObj = &$tableEvents["public.GestionRegistrosOrigenMap"];

$reportCaseSensitiveGroupFields = false;

$gstrSQL = $gQuery->gSQLWhere("");

?>