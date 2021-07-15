<?php
$strTableName="public.GestionPesosResiduosDerVen";
$_SESSION["OwnerID"] = $_SESSION["_".$strTableName."_OwnerID"];

$strOriginalTableName="public.GestionPesosResiduos";

$gstrOrderBy="";
if(strlen($gstrOrderBy) && strtolower(substr($gstrOrderBy,0,8))!="order by")
	$gstrOrderBy="order by ".$gstrOrderBy;

// alias for 'SQLQuery' object
$gSettings = new ProjectSettings("public.GestionPesosResiduosDerVen");
$gQuery = $gSettings->getSQLQuery();
$eventObj = &$tableEvents["public.GestionPesosResiduosDerVen"];

$reportCaseSensitiveGroupFields = false;

$gstrSQL = $gQuery->gSQLWhere("");

?>