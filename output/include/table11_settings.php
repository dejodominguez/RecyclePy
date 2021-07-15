<?php



$tdatatable11 = array();
$tdatatable11[".searchableFields"] = array();
$tdatatable11[".ShortName"] = "table11";
$tdatatable11[".OwnerID"] = "";
$tdatatable11[".OriginalTable"] = "public.Recicladores";


$defaultPages = my_json_decode( "{\"add\":\"add\",\"edit\":\"edit\",\"export\":\"export\",\"import\":\"import\",\"list\":\"list\",\"print\":\"print\",\"search\":\"search\",\"view\":\"view\"}" );

$tdatatable11[".pagesByType"] = my_json_decode( "{\"add\":[\"add\"],\"edit\":[\"edit\"],\"export\":[\"export\"],\"import\":[\"import\"],\"list\":[\"list\"],\"print\":[\"print\"],\"search\":[\"search\"],\"view\":[\"view\"]}" );
$tdatatable11[".pages"] = types2pages( my_json_decode( "{\"add\":[\"add\"],\"edit\":[\"edit\"],\"export\":[\"export\"],\"import\":[\"import\"],\"list\":[\"list\"],\"print\":[\"print\"],\"search\":[\"search\"],\"view\":[\"view\"]}" ) );
$tdatatable11[".defaultPages"] = $defaultPages;

//	field labels
$fieldLabelstable11 = array();
$fieldToolTipstable11 = array();
$pageTitlestable11 = array();
$placeHolderstable11 = array();

if(mlang_getcurrentlang()=="Spanish")
{
	$fieldLabelstable11["Spanish"] = array();
	$fieldToolTipstable11["Spanish"] = array();
	$placeHolderstable11["Spanish"] = array();
	$pageTitlestable11["Spanish"] = array();
	$fieldLabelstable11["Spanish"]["IdReciclador"] = "Id Reciclador";
	$fieldToolTipstable11["Spanish"]["IdReciclador"] = "";
	$placeHolderstable11["Spanish"]["IdReciclador"] = "";
	$fieldLabelstable11["Spanish"]["NomReciclador"] = "Nom Reciclador";
	$fieldToolTipstable11["Spanish"]["NomReciclador"] = "";
	$placeHolderstable11["Spanish"]["NomReciclador"] = "";
	if (count($fieldToolTipstable11["Spanish"]))
		$tdatatable11[".isUseToolTips"] = true;
}


	$tdatatable11[".NCSearch"] = true;



$tdatatable11[".shortTableName"] = "table11";
$tdatatable11[".nSecOptions"] = 0;

$tdatatable11[".mainTableOwnerID"] = "";
$tdatatable11[".entityType"] = 1;

$tdatatable11[".strOriginalTableName"] = "public.Recicladores";

	



$tdatatable11[".showAddInPopup"] = false;

$tdatatable11[".showEditInPopup"] = false;

$tdatatable11[".showViewInPopup"] = false;

//page's base css files names
$popupPagesLayoutNames = array();
$tdatatable11[".popupPagesLayoutNames"] = $popupPagesLayoutNames;


$tdatatable11[".listAjax"] = false;
//	temporary
$tdatatable11[".listAjax"] = false;

	$tdatatable11[".audit"] = false;

	$tdatatable11[".locking"] = false;


$pages = $tdatatable11[".defaultPages"];

if( $pages[PAGE_EDIT] ) {
	$tdatatable11[".edit"] = true;
	$tdatatable11[".afterEditAction"] = 1;
	$tdatatable11[".closePopupAfterEdit"] = 1;
	$tdatatable11[".afterEditActionDetTable"] = "";
}

if( $pages[PAGE_ADD] ) {
$tdatatable11[".add"] = true;
$tdatatable11[".afterAddAction"] = 1;
$tdatatable11[".closePopupAfterAdd"] = 1;
$tdatatable11[".afterAddActionDetTable"] = "";
}

if( $pages[PAGE_LIST] ) {
	$tdatatable11[".list"] = true;
}



$tdatatable11[".strSortControlSettingsJSON"] = "";




if( $pages[PAGE_VIEW] ) {
$tdatatable11[".view"] = true;
}

if( $pages[PAGE_IMPORT] ) {
$tdatatable11[".import"] = true;
}

if( $pages[PAGE_EXPORT] ) {
$tdatatable11[".exportTo"] = true;
}

if( $pages[PAGE_PRINT] ) {
$tdatatable11[".printFriendly"] = true;
}



$tdatatable11[".showSimpleSearchOptions"] = true; // temp fix #13449

// Allow Show/Hide Fields in GRID
$tdatatable11[".allowShowHideFields"] = true; // temp fix #13449
//

// Allow Fields Reordering in GRID
$tdatatable11[".allowFieldsReordering"] = true; // temp fix #13449
//

$tdatatable11[".isUseAjaxSuggest"] = true;

$tdatatable11[".rowHighlite"] = true;





$tdatatable11[".ajaxCodeSnippetAdded"] = false;

$tdatatable11[".buttonsAdded"] = false;

$tdatatable11[".addPageEvents"] = false;

// use timepicker for search panel
$tdatatable11[".isUseTimeForSearch"] = false;


$tdatatable11[".badgeColor"] = "00C2C5";


$tdatatable11[".allSearchFields"] = array();
$tdatatable11[".filterFields"] = array();
$tdatatable11[".requiredSearchFields"] = array();

$tdatatable11[".googleLikeFields"] = array();
$tdatatable11[".googleLikeFields"][] = "IdReciclador";
$tdatatable11[".googleLikeFields"][] = "NomReciclador";



$tdatatable11[".tableType"] = "list";

$tdatatable11[".printerPageOrientation"] = 0;
$tdatatable11[".nPrinterPageScale"] = 100;

$tdatatable11[".nPrinterSplitRecords"] = 40;

$tdatatable11[".geocodingEnabled"] = false;










$tdatatable11[".pageSize"] = 20;

$tdatatable11[".warnLeavingPages"] = true;



$tstrOrderBy = "";
if(strlen($tstrOrderBy) && strtolower(substr($tstrOrderBy,0,8))!="order by")
	$tstrOrderBy = "order by ".$tstrOrderBy;
$tdatatable11[".strOrderBy"] = $tstrOrderBy;

$tdatatable11[".orderindexes"] = array();

$tdatatable11[".sqlHead"] = "SELECT \"IdReciclador\",  	\"NomReciclador\"";
$tdatatable11[".sqlFrom"] = "FROM \"public\".\"Recicladores\"";
$tdatatable11[".sqlWhereExpr"] = "";
$tdatatable11[".sqlTail"] = "";










//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdatatable11[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdatatable11[".arrGroupsPerPage"] = $arrGPP;

$tdatatable11[".highlightSearchResults"] = true;

$tableKeystable11 = array();
$tableKeystable11[] = "IdReciclador";
$tdatatable11[".Keys"] = $tableKeystable11;


$tdatatable11[".hideMobileList"] = array();




//	IdReciclador
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "IdReciclador";
	$fdata["GoodName"] = "IdReciclador";
	$fdata["ownerTable"] = "public.Recicladores";
	$fdata["Label"] = GetFieldLabel("public_Table11","IdReciclador");
	$fdata["FieldType"] = 14;

	
	
	
			

		$fdata["strField"] = "IdReciclador";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "\"IdReciclador\"";

	
	
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "Number");

	
	
	
	
	
	
		$vdata["DecimalDigits"] = 0;

	
	
	
	
	
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


	$tdatatable11["IdReciclador"] = $fdata;
		$tdatatable11[".searchableFields"][] = "IdReciclador";
//	NomReciclador
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "NomReciclador";
	$fdata["GoodName"] = "NomReciclador";
	$fdata["ownerTable"] = "public.Recicladores";
	$fdata["Label"] = GetFieldLabel("public_Table11","NomReciclador");
	$fdata["FieldType"] = 200;

	
	
	
			

		$fdata["strField"] = "NomReciclador";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "\"NomReciclador\"";

	
	
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


	$tdatatable11["NomReciclador"] = $fdata;
		$tdatatable11[".searchableFields"][] = "NomReciclador";


$tables_data["public.Table11"]=&$tdatatable11;
$field_labels["public_Table11"] = &$fieldLabelstable11;
$fieldToolTips["public_Table11"] = &$fieldToolTipstable11;
$placeHolders["public_Table11"] = &$placeHolderstable11;
$page_titles["public_Table11"] = &$pageTitlestable11;

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)
$detailsTablesData["public.Table11"] = array();

// tables which are master tables for current table (detail)
$masterTablesData["public.Table11"] = array();



// -----------------end  prepare master-details data arrays ------------------------------//


require_once(getabspath("classes/sql.php"));










function createSqlQuery_table11()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "\"IdReciclador\",  	\"NomReciclador\"";
$proto0["m_strFrom"] = "FROM \"public\".\"Recicladores\"";
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
	"m_strName" => "IdReciclador",
	"m_strTable" => "public.Recicladores",
	"m_srcTableName" => "public.Table11"
));

$proto6["m_sql"] = "\"IdReciclador\"";
$proto6["m_srcTableName"] = "public.Table11";
$proto6["m_expr"]=$obj;
$proto6["m_alias"] = "";
$obj = new SQLFieldListItem($proto6);

$proto0["m_fieldlist"][]=$obj;
						$proto8=array();
			$obj = new SQLField(array(
	"m_strName" => "NomReciclador",
	"m_strTable" => "public.Recicladores",
	"m_srcTableName" => "public.Table11"
));

$proto8["m_sql"] = "\"NomReciclador\"";
$proto8["m_srcTableName"] = "public.Table11";
$proto8["m_expr"]=$obj;
$proto8["m_alias"] = "";
$obj = new SQLFieldListItem($proto8);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto10=array();
$proto10["m_link"] = "SQLL_MAIN";
			$proto11=array();
$proto11["m_strName"] = "public.Recicladores";
$proto11["m_srcTableName"] = "public.Table11";
$proto11["m_columns"] = array();
$proto11["m_columns"][] = "IdReciclador";
$proto11["m_columns"][] = "NomReciclador";
$obj = new SQLTable($proto11);

$proto10["m_table"] = $obj;
$proto10["m_sql"] = "\"public\".\"Recicladores\"";
$proto10["m_alias"] = "";
$proto10["m_srcTableName"] = "public.Table11";
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
$proto0["m_srcTableName"]="public.Table11";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_table11 = createSqlQuery_table11();


	
		;

		

$tdatatable11[".sqlquery"] = $queryData_table11;

$tableEvents["public.Table11"] = new eventsBase;
$tdatatable11[".hasEvents"] = false;

?>