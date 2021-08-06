<?php
$tdataresiduos1 = array();
$tdataresiduos1[".searchableFields"] = array();
$tdataresiduos1[".ShortName"] = "residuos1";
$tdataresiduos1[".OwnerID"] = "";
$tdataresiduos1[".OriginalTable"] = "public.residuos";


$tdataresiduos1[".pagesByType"] = my_json_decode( "{\"add\":[\"add\"],\"export\":[\"export\"],\"import\":[\"import\"],\"list\":[\"list\"],\"masterlist\":[\"masterlist\"],\"masterprint\":[\"masterprint\"],\"print\":[\"print\"],\"search\":[\"search\"]}" );
$tdataresiduos1[".originalPagesByType"] = $tdataresiduos1[".pagesByType"];
$tdataresiduos1[".pages"] = types2pages( my_json_decode( "{\"add\":[\"add\"],\"export\":[\"export\"],\"import\":[\"import\"],\"list\":[\"list\"],\"masterlist\":[\"masterlist\"],\"masterprint\":[\"masterprint\"],\"print\":[\"print\"],\"search\":[\"search\"]}" ) );
$tdataresiduos1[".originalPages"] = $tdataresiduos1[".pages"];
$tdataresiduos1[".defaultPages"] = my_json_decode( "{\"add\":\"add\",\"export\":\"export\",\"import\":\"import\",\"list\":\"list\",\"masterlist\":\"masterlist\",\"masterprint\":\"masterprint\",\"print\":\"print\",\"search\":\"search\"}" );
$tdataresiduos1[".originalDefaultPages"] = $tdataresiduos1[".defaultPages"];

//	field labels
$fieldLabelsresiduos1 = array();
$fieldToolTipsresiduos1 = array();
$pageTitlesresiduos1 = array();
$placeHoldersresiduos1 = array();

if(mlang_getcurrentlang()=="Spanish")
{
	$fieldLabelsresiduos1["Spanish"] = array();
	$fieldToolTipsresiduos1["Spanish"] = array();
	$placeHoldersresiduos1["Spanish"] = array();
	$pageTitlesresiduos1["Spanish"] = array();
	$fieldLabelsresiduos1["Spanish"]["id_residuo"] = "Id Residuo";
	$fieldToolTipsresiduos1["Spanish"]["id_residuo"] = "";
	$placeHoldersresiduos1["Spanish"]["id_residuo"] = "";
	$fieldLabelsresiduos1["Spanish"]["descri_residuo"] = "Descri Residuo";
	$fieldToolTipsresiduos1["Spanish"]["descri_residuo"] = "";
	$placeHoldersresiduos1["Spanish"]["descri_residuo"] = "";
	if (count($fieldToolTipsresiduos1["Spanish"]))
		$tdataresiduos1[".isUseToolTips"] = true;
}


	$tdataresiduos1[".NCSearch"] = true;



$tdataresiduos1[".shortTableName"] = "residuos1";
$tdataresiduos1[".nSecOptions"] = 0;

$tdataresiduos1[".mainTableOwnerID"] = "";
$tdataresiduos1[".entityType"] = 1;
$tdataresiduos1[".connId"] = "RealEstate_at_localhost";


$tdataresiduos1[".strOriginalTableName"] = "public.residuos";

	



$tdataresiduos1[".showAddInPopup"] = false;

$tdataresiduos1[".showEditInPopup"] = false;

$tdataresiduos1[".showViewInPopup"] = false;

$tdataresiduos1[".listAjax"] = false;
//	temporary
//$tdataresiduos1[".listAjax"] = false;

	$tdataresiduos1[".audit"] = false;

	$tdataresiduos1[".locking"] = false;


$pages = $tdataresiduos1[".defaultPages"];

if( $pages[PAGE_EDIT] ) {
	$tdataresiduos1[".edit"] = true;
	$tdataresiduos1[".afterEditAction"] = 1;
	$tdataresiduos1[".closePopupAfterEdit"] = 1;
	$tdataresiduos1[".afterEditActionDetTable"] = "";
}

if( $pages[PAGE_ADD] ) {
$tdataresiduos1[".add"] = true;
$tdataresiduos1[".afterAddAction"] = 1;
$tdataresiduos1[".closePopupAfterAdd"] = 1;
$tdataresiduos1[".afterAddActionDetTable"] = "";
}

if( $pages[PAGE_LIST] ) {
	$tdataresiduos1[".list"] = true;
}



$tdataresiduos1[".strSortControlSettingsJSON"] = "";




if( $pages[PAGE_VIEW] ) {
$tdataresiduos1[".view"] = true;
}

if( $pages[PAGE_IMPORT] ) {
$tdataresiduos1[".import"] = true;
}

if( $pages[PAGE_EXPORT] ) {
$tdataresiduos1[".exportTo"] = true;
}

if( $pages[PAGE_PRINT] ) {
$tdataresiduos1[".printFriendly"] = true;
}



$tdataresiduos1[".showSimpleSearchOptions"] = true; // temp fix #13449

// Allow Show/Hide Fields in GRID
$tdataresiduos1[".allowShowHideFields"] = true; // temp fix #13449
//

// Allow Fields Reordering in GRID
$tdataresiduos1[".allowFieldsReordering"] = true; // temp fix #13449
//

$tdataresiduos1[".isUseAjaxSuggest"] = true;

$tdataresiduos1[".rowHighlite"] = true;



			

$tdataresiduos1[".ajaxCodeSnippetAdded"] = false;

$tdataresiduos1[".buttonsAdded"] = false;

$tdataresiduos1[".addPageEvents"] = false;

// use timepicker for search panel
$tdataresiduos1[".isUseTimeForSearch"] = false;


$tdataresiduos1[".badgeColor"] = "B22222";


$tdataresiduos1[".allSearchFields"] = array();
$tdataresiduos1[".filterFields"] = array();
$tdataresiduos1[".requiredSearchFields"] = array();

$tdataresiduos1[".googleLikeFields"] = array();
$tdataresiduos1[".googleLikeFields"][] = "id_residuo";
$tdataresiduos1[".googleLikeFields"][] = "descri_residuo";



$tdataresiduos1[".tableType"] = "list";

$tdataresiduos1[".printerPageOrientation"] = 0;
$tdataresiduos1[".nPrinterPageScale"] = 100;

$tdataresiduos1[".nPrinterSplitRecords"] = 40;

$tdataresiduos1[".geocodingEnabled"] = false;










$tdataresiduos1[".pageSize"] = 20;

$tdataresiduos1[".warnLeavingPages"] = true;



$tstrOrderBy = "";
$tdataresiduos1[".strOrderBy"] = $tstrOrderBy;

$tdataresiduos1[".orderindexes"] = array();


$tdataresiduos1[".sqlHead"] = "SELECT id_residuo,  	descri_residuo";
$tdataresiduos1[".sqlFrom"] = "FROM \"public\".residuos";
$tdataresiduos1[".sqlWhereExpr"] = "";
$tdataresiduos1[".sqlTail"] = "";










//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdataresiduos1[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdataresiduos1[".arrGroupsPerPage"] = $arrGPP;

$tdataresiduos1[".highlightSearchResults"] = true;

$tableKeysresiduos1 = array();
$tdataresiduos1[".Keys"] = $tableKeysresiduos1;


$tdataresiduos1[".hideMobileList"] = array();




//	id_residuo
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "id_residuo";
	$fdata["GoodName"] = "id_residuo";
	$fdata["ownerTable"] = "public.residuos";
	$fdata["Label"] = GetFieldLabel("public_residuos1","id_residuo");
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


	$tdataresiduos1["id_residuo"] = $fdata;
		$tdataresiduos1[".searchableFields"][] = "id_residuo";
//	descri_residuo
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "descri_residuo";
	$fdata["GoodName"] = "descri_residuo";
	$fdata["ownerTable"] = "public.residuos";
	$fdata["Label"] = GetFieldLabel("public_residuos1","descri_residuo");
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


	$tdataresiduos1["descri_residuo"] = $fdata;
		$tdataresiduos1[".searchableFields"][] = "descri_residuo";


$tables_data["public.residuos1"]=&$tdataresiduos1;
$field_labels["public_residuos1"] = &$fieldLabelsresiduos1;
$fieldToolTips["public_residuos1"] = &$fieldToolTipsresiduos1;
$placeHolders["public_residuos1"] = &$placeHoldersresiduos1;
$page_titles["public_residuos1"] = &$pageTitlesresiduos1;

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)

//if !@TABLE.bReportCrossTab

$detailsTablesData["public.residuos1"] = array();
//endif

// tables which are master tables for current table (detail)
$masterTablesData["public.residuos1"] = array();



// -----------------end  prepare master-details data arrays ------------------------------//



require_once(getabspath("classes/sql.php"));











function createSqlQuery_residuos1()
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
	"m_srcTableName" => "public.residuos1"
));

$proto6["m_sql"] = "id_residuo";
$proto6["m_srcTableName"] = "public.residuos1";
$proto6["m_expr"]=$obj;
$proto6["m_alias"] = "";
$obj = new SQLFieldListItem($proto6);

$proto0["m_fieldlist"][]=$obj;
						$proto8=array();
			$obj = new SQLField(array(
	"m_strName" => "descri_residuo",
	"m_strTable" => "public.residuos",
	"m_srcTableName" => "public.residuos1"
));

$proto8["m_sql"] = "descri_residuo";
$proto8["m_srcTableName"] = "public.residuos1";
$proto8["m_expr"]=$obj;
$proto8["m_alias"] = "";
$obj = new SQLFieldListItem($proto8);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto10=array();
$proto10["m_link"] = "SQLL_MAIN";
			$proto11=array();
$proto11["m_strName"] = "public.residuos";
$proto11["m_srcTableName"] = "public.residuos1";
$proto11["m_columns"] = array();
$proto11["m_columns"][] = "id_residuo";
$proto11["m_columns"][] = "descri_residuo";
$obj = new SQLTable($proto11);

$proto10["m_table"] = $obj;
$proto10["m_sql"] = "\"public\".residuos";
$proto10["m_alias"] = "";
$proto10["m_srcTableName"] = "public.residuos1";
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
$proto0["m_srcTableName"]="public.residuos1";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_residuos1 = createSqlQuery_residuos1();


	
		;

		

$tdataresiduos1[".sqlquery"] = $queryData_residuos1;



$tableEvents["public.residuos1"] = new eventsBase;
$tdataresiduos1[".hasEvents"] = false;

?>