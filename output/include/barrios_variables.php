<?php
$strTableName="public.barrios";
$_SESSION["OwnerID"] = $_SESSION["_".$strTableName."_OwnerID"];

$strOriginalTableName="public.barrios";

$gstrOrderBy="";
if(strlen($gstrOrderBy) && strtolower(substr($gstrOrderBy,0,8))!="order by")
	$gstrOrderBy="order by ".$gstrOrderBy;

$reportCaseSensitiveGroupFields = false;

?>