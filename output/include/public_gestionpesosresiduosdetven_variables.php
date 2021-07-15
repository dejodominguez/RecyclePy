<?php
$strTableName="public.GestionPesosResiduosDetVen";
$_SESSION["OwnerID"] = $_SESSION["_".$strTableName."_OwnerID"];

$strOriginalTableName="public.GestionPesosResiduos";

$gstrOrderBy="";
if(strlen($gstrOrderBy) && strtolower(substr($gstrOrderBy,0,8))!="order by")
	$gstrOrderBy="order by ".$gstrOrderBy;

// alias for 'SQLQuery' object
$gSettings = new ProjectSettings("public.GestionPesosResiduosDetVen");
$gQuery = $gSettings->getSQLQuery();
$eventObj = &$tableEvents["public.GestionPesosResiduosDetVen"];

$reportCaseSensitiveGroupFields = false;

$gstrSQL = $gQuery->gSQLWhere("");

?>