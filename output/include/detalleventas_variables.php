<?php
$strTableName="public.DetalleVentas";
$_SESSION["OwnerID"] = $_SESSION["_".$strTableName."_OwnerID"];

$strOriginalTableName="public.DetalleVentas";

$gstrOrderBy="ORDER BY \"IdFGesPesResiduo\" DESC";
if(strlen($gstrOrderBy) && strtolower(substr($gstrOrderBy,0,8))!="order by")
	$gstrOrderBy="order by ".$gstrOrderBy;

// alias for 'SQLQuery' object
$gSettings = new ProjectSettings("public.DetalleVentas");
$gQuery = $gSettings->getSQLQuery();
$eventObj = &$tableEvents["public.DetalleVentas"];

$reportCaseSensitiveGroupFields = false;

$gstrSQL = $gQuery->gSQLWhere("");

?>