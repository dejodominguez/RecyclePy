<?php
$tdataresiduos2 = array();
$tdataresiduos2[".searchableFields"] = array();
$tdataresiduos2[".ShortName"] = "residuos2";
$tdataresiduos2[".OwnerID"] = "";
$tdataresiduos2[".OriginalTable"] = "public.residuos";


$tdataresiduos2[".pagesByType"] = my_json_decode( "{\"add\":[\"add\"],\"export\":[\"export\"],\"import\":[\"import\"],\"list\":[\"list\"],\"masterlist\":[\"masterlist\"],\"masterprint\":[\"masterprint\"],\"print\":[\"print\"],\"search\":[\"search\"]}" );
$tdataresiduos2[".originalPagesByType"] = $tdataresiduos2[".pagesByType"];
$tdataresiduos2[".pages"] = types2pages( my_json_decode( "{\"add\":[\"add\"],\"export\":[\"export\"],\"import\":[\"import\"],\"list\":[\"list\"],\"masterlist\":[\"masterlist\"],\"masterprint\":[\"masterprint\"],\"print\":[\"print\"],\"search\":[\"search\"]}" ) );
$tdataresiduos2[".originalPages"] = $tdataresiduos2[".pages"];
$tdataresiduos2[".defaultPages"] = my_json_decode( "{\"add\":\"add\",\"export\":\"export\",\"import\":\"import\",\"list\":\"list\",\"masterlist\":\"masterlist\",\"masterprint\":\"masterprint\",\"print\":\"print\",\"search\":\"search\"}" );
$tdataresiduos2[".originalDefaultPages"] = $tdataresiduos2[".defaultPages"];

//	field labels
$fieldLabelsresiduos2 = array();
$fieldToolTipsresiduos2 = array();
$pageTitlesresiduos2 = array();
$placeHoldersresiduos2 = array();

if(mlang_getcurrentlang()=="Spanish")
{
	$fieldLabelsresiduos2["Spanish"] = array();
	$fieldToolTipsresiduos2["Spanish"] = array();
	$placeHoldersresiduos2["Spanish"] = array();
	$pageTitlesresiduos2["Spanish"] = array();
	$fieldLabelsresiduos2["Spanish"]["descri_residuo"] = "Descri Residuo";
	$fieldToolTipsresiduos2["Spanish"]["descri_residuo"] = "";
	$placeHoldersresiduos2["Spanish"]["descri_residuo"] = "";
	$fieldLabelsresiduos2["Spanish"]["id_residuo"] = "Id Residuo";
	$fieldToolTipsresiduos2["Spanish"]["id_residuo"] = "";
	$placeHoldersresiduos2["Spanish"]["id_residuo"] = "";
	if (count($fieldToolTipsresiduos2["Spanish"]))
		$tdataresiduos2[".isUseToolTips"] = true;
}


	$tdataresiduos2[".NCSearch"] = true;



$tdataresiduos2[".shortTableName"] = "residuos2";
$tdataresiduos2[".nSecOptions"] = 0;

$tdataresiduos2[".mainTableOwnerID"] = "";
$tdataresiduos2[".entityType"] = 1;
$tdataresiduos2[".connId"] = "RealEstate_at_localhost";


$tdataresiduos2[".strOriginalTableName"] = "public.residuos";

	



$tdataresiduos2[".showAddInPopup"] = false;

$tdataresiduos2[".showEditInPopup"] = false;

$tdataresiduos2[".showViewInPopup"] = false;

$tdataresiduos2[".listAjax"] = false;
//	temporary
//$tdataresiduos2[".listAjax"] = false;

	$tdataresiduos2[".audit"] = false;

	$tdataresiduos2[".locking"] = false;


$pages = $tdataresiduos2[".defaultPages"];

if( $pages[PAGE_EDIT] ) {
	$tdataresiduos2[".edit"] = true;
	$tdataresiduos2[".afterEditAction"] = 1;
	$tdataresiduos2[".closePopupAfterEdit"] = 1;
	$tdataresiduos2[".afterEditActionDetTable"] = "";
}

if( $pages[PAGE_ADD] ) {
$tdataresiduos2[".add"] = true;
$tdataresiduos2[".afterAddAction"] = 1;
$tdataresiduos2[".closePopupAfterAdd"] = 1;
$tdataresiduos2[".afterAddActionDetTable"] = "";
}

if( $pages[PAGE_LIST] ) {
	$tdataresiduos2[".list"] = true;
}



$tdataresiduos2[".strSortControlSettingsJSON"] = "";




if( $pages[PAGE_VIEW] ) {
$tdataresiduos2[".view"] = true;
}

if( $pages[PAGE_IMPORT] ) {
$tdataresiduos2[".import"] = true;
}

if( $pages[PAGE_EXPORT] ) {
$tdataresiduos2[".exportTo"] = true;
}

if( $pages[PAGE_PRINT] ) {
$tdataresiduos2[".printFriendly"] = true;
}



$tdataresiduos2[".showSimpleSearchOptions"] = true; // temp fix #13449

// Allow Show/Hide Fields in GRID
$tdataresiduos2[".allowShowHideFields"] = true; // temp fix #13449
//

// Allow Fields Reordering in GRID
$tdataresiduos2[".allowFieldsReordering"] = true; // temp fix #13449
//

$tdataresiduos2[".isUseAjaxSuggest"] = true;

$tdataresiduos2[".rowHighlite"] = true;



			

$tdataresiduos2[".ajaxCodeSnippetAdded"] = false;

$tdataresiduos2[".buttonsAdded"] = false;

$tdataresiduos2[".addPageEvents"] = false;

// use timepicker for search panel
$tdataresiduos2[".isUseTimeForSearch"] = false;


$tdataresiduos2[".badgeColor"] = "E8926F";


$tdataresiduos2[".allSearchFields"] = array();
$tdataresiduos2[".filterFields"] = array();
$tdataresiduos2[".requiredSearchFields"] = array();

$tdataresiduos2[".googleLikeFields"] = array();
$tdataresiduos2[".googleLikeFields"][] = "id_residuo";
$tdataresiduos2[".googleLikeFields"][] = "descri_residuo";



$tdataresiduos2[".tableType"] = "list";

$tdataresiduos2[".printerPageOrientation"] = 0;
$tdataresiduos2[".nPrinterPageScale"] = 100;

$tdataresiduos2[".nPrinterSplitRecords"] = 40;

$tdataresiduos2[".geocodingEnabled"] = false;










$tdataresiduos2[".pageSize"] = 20;

$tdataresiduos2[".warnLeavingPages"] = true;



$tstrOrderBy = "";
$tdataresiduos2[".strOrderBy"] = $tstrOrderBy;

$tdataresiduos2[".orderindexes"] = array();


$tdataresiduos2[".sqlHead"] = "SELECT id_residuo,  	descri_residuo";
$tdataresiduos2[".sqlFrom"] = "FROM \"public\".residuos";
$tdataresiduos2[".sqlWhereExpr"] = "";
$tdataresiduos2[".sqlTail"] = "";










//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdataresiduos2[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdataresiduos2[".arrGroupsPerPage"] = $arrGPP;

$tdataresiduos2[".highlightSearchResults"] = true;

$tableKeysresiduos2 = array();
$tdataresiduos2[".Keys"] = $tableKeysresiduos2;


$tdataresiduos2[".hideMobileList"] = array();




//	id_residuo
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "id_residuo";
	$fdata["GoodName"] = "id_residuo";
	$fdata["ownerTable"] = "public.residuos";
	$fdata["Label"] = GetFieldLabel("public_residuos2","id_residuo");
	$fdata["FieldType"] = 3;


	
	
			

		$fdata["strField"] = "id_residuo";

		$fdata["sourceSingle"] = "id_residuo";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "id_residuo";

	
	
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "");

	
	
	
	
	
	
	
	
	
	
	
		
	
		$vdata["NeedEncode"] = true;

	
		$vdata["truncateText"] = true;
	$vdata["NumberOfChars"] = 80;

	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Text field");

	
		$edata["weekdayMessage"] = array("message" => "", "messageType" => "Text");
	$edata["weekdays"] = "[]";


	
	



		$edata["IsRequired"] = true;

	
	
	
			$edata["acceptFileTypes"] = ".+$";
		$edata["acceptFileTypesHtml"] = "";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
	
			$edata["HTML5InuptType"] = "text";

		$edata["EditParams"] = "";
		
		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
				$edata["validateAs"]["basicValidate"][] = getJsValidatorName("Number");
						$edata["validateAs"]["basicValidate"][] = "IsRequired";
		
	
	//	End validation

	
			
	
	
	
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;




// the field's search options settings
		$fdata["defaultSearchOption"] = "Contains";

			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings


//Filters settings
	$fdata["filterTotals"] = 0;
		$fdata["filterMultiSelect"] = 0;
			$fdata["filterFormat"] = "Values list";
		$fdata["showCollapsed"] = false;

		$fdata["sortValueType"] = 0;
		$fdata["numberOfVisibleItems"] = 10;

		$fdata["filterBy"] = 0;

	

	
	
//end of Filters settings


	$tdataresiduos2["id_residuo"] = $fdata;
		$tdataresiduos2[".searchableFields"][] = "id_residuo";
//	descri_residuo
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "descri_residuo";
	$fdata["GoodName"] = "descri_residuo";
	$fdata["ownerTable"] = "public.residuos";
	$fdata["Label"] = GetFieldLabel("public_residuos2","descri_residuo");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "descri_residuo";

		$fdata["sourceSingle"] = "descri_residuo";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "descri_residuo";

	
	
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "");

	
	
	
	
	
	
	
	
	
	
	
		
	
		$vdata["NeedEncode"] = true;

	
		$vdata["truncateText"] = true;
	$vdata["NumberOfChars"] = 80;

	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Text field");

	
		$edata["weekdayMessage"] = array("message" => "", "messageType" => "Text");
	$edata["weekdays"] = "[]";


	
	



	
	
	
	
			$edata["acceptFileTypes"] = ".+$";
		$edata["acceptFileTypesHtml"] = "";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
	
			$edata["HTML5InuptType"] = "text";

		$edata["EditParams"] = "";
		
		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
	
	
	//	End validation

	
			
	
	
	
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;




// the field's search options settings
		$fdata["defaultSearchOption"] = "Contains";

			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings


//Filters settings
	$fdata["filterTotals"] = 0;
		$fdata["filterMultiSelect"] = 0;
			$fdata["filterFormat"] = "Values list";
		$fdata["showCollapsed"] = false;

		$fdata["sortValueType"] = 0;
		$fdata["numberOfVisibleItems"] = 10;

		$fdata["filterBy"] = 0;

	

	
	
//end of Filters settings


	$tdataresiduos2["descri_residuo"] = $fdata;
		$tdataresiduos2[".searchableFields"][] = "descri_residuo";


$tables_data["public.residuos2"]=&$tdataresiduos2;
$field_labels["public_residuos2"] = &$fieldLabelsresiduos2;
$fieldToolTips["public_residuos2"] = &$fieldToolTipsresiduos2;
$placeHolders["public_residuos2"] = &$placeHoldersresiduos2;
$page_titles["public_residuos2"] = &$pageTitlesresiduos2;

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)

//if !@TABLE.bReportCrossTab

$detailsTablesData["public.residuos2"] = array();
//endif

// tables which are master tables for current table (detail)
$masterTablesData["public.residuos2"] = array();



// -----------------end  prepare master-details data arrays ------------------------------//



require_once(getabspath("classes/sql.php"));











function createSqlQuery_residuos2()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "id_residuo,  	descri_residuo";
$proto0["m_strFrom"] = "FROM \"public\".residuos";
$proto0["m_strWhere"] = "";
$proto0["m_strOrderBy"] = "";
	
		;
			$proto0["cipherer"] = null;
$proto2=array();
$proto2["m_sql"] = "";
$proto2["m_uniontype"] = "SQLL_UNKNOWN";
	$obj = new SQLNonParsed(array(
	"m_sql" => ""
));

$proto2["m_column"]=$obj;
$proto2["m_contained"] = array();
$proto2["m_strCase"] = "";
$proto2["m_havingmode"] = false;
$proto2["m_inBrackets"] = false;
$proto2["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto2);

$proto0["m_where"] = $obj;
$proto4=array();
$proto4["m_sql"] = "";
$proto4["m_uniontype"] = "SQLL_UNKNOWN";
	$obj = new SQLNonParsed(array(
	"m_sql" => ""
));

$proto4["m_column"]=$obj;
$proto4["m_contained"] = array();
$proto4["m_strCase"] = "";
$proto4["m_havingmode"] = false;
$proto4["m_inBrackets"] = false;
$proto4["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto4);

$proto0["m_having"] = $obj;
$proto0["m_fieldlist"] = array();
						$proto6=array();
			$obj = new SQLField(array(
	"m_strName" => "id_residuo",
	"m_strTable" => "public.residuos",
	"m_srcTableName" => "public.residuos2"
));

$proto6["m_sql"] = "id_residuo";
$proto6["m_srcTableName"] = "public.residuos2";
$proto6["m_expr"]=$obj;
$proto6["m_alias"] = "";
$obj = new SQLFieldListItem($proto6);

$proto0["m_fieldlist"][]=$obj;
						$proto8=array();
			$obj = new SQLField(array(
	"m_strName" => "descri_residuo",
	"m_strTable" => "public.residuos",
	"m_srcTableName" => "public.residuos2"
));

$proto8["m_sql"] = "descri_residuo";
$proto8["m_srcTableName"] = "public.residuos2";
$proto8["m_expr"]=$obj;
$proto8["m_alias"] = "";
$obj = new SQLFieldListItem($proto8);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto10=array();
$proto10["m_link"] = "SQLL_MAIN";
			$proto11=array();
$proto11["m_strName"] = "public.residuos";
$proto11["m_srcTableName"] = "public.residuos2";
$proto11["m_columns"] = array();
$proto11["m_columns"][] = "id_residuo";
$proto11["m_columns"][] = "descri_residuo";
$obj = new SQLTable($proto11);

$proto10["m_table"] = $obj;
$proto10["m_sql"] = "\"public\".residuos";
$proto10["m_alias"] = "";
$proto10["m_srcTableName"] = "public.residuos2";
$proto12=array();
$proto12["m_sql"] = "";
$proto12["m_uniontype"] = "SQLL_UNKNOWN";
	$obj = new SQLNonParsed(array(
	"m_sql" => ""
));

$proto12["m_column"]=$obj;
$proto12["m_contained"] = array();
$proto12["m_strCase"] = "";
$proto12["m_havingmode"] = false;
$proto12["m_inBrackets"] = false;
$proto12["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto12);

$proto10["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto10);

$proto0["m_fromlist"][]=$obj;
$proto0["m_groupby"] = array();
$proto0["m_orderby"] = array();
$proto0["m_srcTableName"]="public.residuos2";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_residuos2 = createSqlQuery_residuos2();


	
		;

		

$tdataresiduos2[".sqlquery"] = $queryData_residuos2;



$tableEvents["public.residuos2"] = new eventsBase;
$tdataresiduos2[".hasEvents"] = false;

?>