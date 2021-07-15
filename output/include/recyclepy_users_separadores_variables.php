<?php
$strTableName="public.RecyclePy_users_separadores";
$_SESSION["OwnerID"] = $_SESSION["_".$strTableName."_OwnerID"];

$strOriginalTableName="public.RecyclePy_users_separadores";

$gstrOrderBy="";
if(strlen($gstrOrderBy) && strtolower(substr($gstrOrderBy,0,8))!="order by")
	$gstrOrderBy="order by ".$gstrOrderBy;

// alias for 'SQLQuery' object
$gSettings = new ProjectSettings("public.RecyclePy_users_separadores");
$gQuery = $gSettings->getSQLQuery();
$eventObj = &$tableEvents["public.RecyclePy_users_separadores"];

$reportCaseSensitiveGroupFields = false;

$gstrSQL = $gQuery->gSQLWhere("");

?>