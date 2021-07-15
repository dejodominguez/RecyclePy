<?php



$tdatatable1 = array();
$tdatatable1[".searchableFields"] = array();
$tdatatable1[".ShortName"] = "table1";
$tdatatable1[".OwnerID"] = "";
$tdatatable1[".OriginalTable"] = "public.Recicladores";


$defaultPages = my_json_decode( "{\"add\":\"add\",\"edit\":\"edit\",\"export\":\"export\",\"import\":\"import\",\"list\":\"list\",\"print\":\"print\",\"search\":\"search\",\"view\":\"view\"}" );

$tdatatable1[".pagesByType"] = my_json_decode( "{\"add\":[\"add\"],\"edit\":[\"edit\"],\"export\":[\"export\"],\"import\":[\"import\"],\"list\":[\"list\"],\"print\":[\"print\"],\"search\":[\"search\"],\"view\":[\"view\"]}" );
$tdatatable1[".pages"] = types2pages( my_json_decode( "{\"add\":[\"add\"],\"edit\":[\"edit\"],\"export\":[\"export\"],\"import\":[\"import\"],\"list\":[\"list\"],\"print\":[\"print\"],\"search\":[\"search\"],\"view\":[\"view\"]}" ) );
$tdatatable1[".defaultPages"] = $defaultPages;

//	field labels
$fieldLabelstable1 = array();
$fieldToolTipstable1 = array();
$pageTitlestable1 = array();
$placeHolderstable1 = array();

if(mlang_getcurrentlang()=="Spanish")
{
	$fieldLabelstable1["Spanish"] = array();
	$fieldToolTipstable1["Spanish"] = array();
	$placeHolderstable1["Spanish"] = array();
	$pageTitlestable1["Spanish"] = array();
	$fieldLabelstable1["Spanish"]["IdReciclador"] = "Id Reciclador";
	$fieldToolTipstable1["Spanish"]["IdReciclador"] = "";
	$placeHolderstable1["Spanish"]["IdReciclador"] = "";
	$fieldLabelstable1["Spanish"]["NomReciclador"] = "Nom Reciclador";
	$fieldToolTipstable1["Spanish"]["NomReciclador"] = "";
	$placeHolderstable1["Spanish"]["NomReciclador"] = "";
	if (count($fieldToolTipstable1["Spanish"]))
		$tdatatable1[".isUseToolTips"] = true;
}


	$tdatatable1[".NCSearch"] = true;



$tdatatable1[".shortTableName"] = "table1";
$tdatatable1[".nSecOptions"] = 0;

$tdatatable1[".mainTableOwnerID"] = "";
$tdatatable1[".entityType"] = 0;

$tdatatable1[".strOriginalTableName"] = "public.Recicladores";

	



$tdatatable1[".showAddInPopup"] = false;

$tdatatable1[".showEditInPopup"] = false;

$tdatatable1[".showViewInPopup"] = false;

//page's base css files names
$popupPagesLayoutNames = array();
$tdatatable1[".popupPagesLayoutNames"] = $popupPagesLayoutNames;


$tdatatable1[".listAjax"] = false;
//	temporary
$tdatatable1[".listAjax"] = false;

	$tdatatable1[".audit"] = false;

	$tdatatable1[".locking"] = false;


$pages = $tdatatable1[".defaultPages"];

if( $pages[PAGE_EDIT] ) {
	$tdatatable1[".edit"] = true;
	$tdatatable1[".afterEditAction"] = 1;
	$tdatatable1[".closePopupAfterEdit"] = 1;
	$tdatatable1[".afterEditActionDetTable"] = "";
}

if( $pages[PAGE_ADD] ) {
$tdatatable1[".add"] = true;
$tdatatable1[".afterAddAction"] = 1;
$tdatatable1[".closePopupAfterAdd"] = 1;
$tdatatable1[".afterAddActionDetTable"] = "";
}

if( $pages[PAGE_LIST] ) {
	$tdatatable1[".list"] = true;
}



$tdatatable1[".strSortControlSettingsJSON"] = "";




if( $pages[PAGE_VIEW] ) {
$tdatatable1[".view"] = true;
}

if( $pages[PAGE_IMPORT] ) {
$tdatatable1[".import"] = true;
}

if( $pages[PAGE_EXPORT] ) {
$tdatatable1[".exportTo"] = true;
}

if( $pages[PAGE_PRINT] ) {
$tdatatable1[".printFriendly"] = true;
}



$tdatatable1[".showSimpleSearchOptions"] = true; // temp fix #13449

// Allow Show/Hide Fields in GRID
$tdatatable1[".allowShowHideFields"] = true; // temp fix #13449
//

// Allow Fields Reordering in GRID
$tdatatable1[".allowFieldsReordering"] = true; // temp fix #13449
//

$tdatatable1[".isUseAjaxSuggest"] = true;

$tdatatable1[".rowHighlite"] = true;





$tdatatable1[".ajaxCodeSnippetAdded"] = false;

$tdatatable1[".buttonsAdded"] = false;

$tdatatable1[".addPageEvents"] = false;

// use timepicker for search panel
$tdatatable1[".isUseTimeForSearch"] = false;


$tdatatable1[".badgeColor"] = "2F4F4F";


$tdatatable1[".allSearchFields"] = array();
$tdatatable1[".filterFields"] = array();
$tdatatable1[".requiredSearchFields"] = array();

$tdatatable1[".googleLikeFields"] = array();
$tdatatable1[".googleLikeFields"][] = "IdReciclador";
$tdatatable1[".googleLikeFields"][] = "NomReciclador";



$tdatatable1[".tableType"] = "list";

$tdatatable1[".printerPageOrientation"] = 0;
$tdatatable1[".nPrinterPageScale"] = 100;

$tdatatable1[".nPrinterSplitRecords"] = 40;

$tdatatable1[".geocodingEnabled"] = false;










$tdatatable1[".pageSize"] = 20;

$tdatatable1[".warnLeavingPages"] = true;



$tstrOrderBy = "";
if(strlen($tstrOrderBy) && strtolower(substr($tstrOrderBy,0,8))!="order by")
	$tstrOrderBy = "order by ".$tstrOrderBy;
$tdatatable1[".strOrderBy"] = $tstrOrderBy;

$tdatatable1[".orderindexes"] = array();

$tdatatable1[".sqlHead"] = "SELECT \"IdReciclador\",  	\"NomReciclador\"";
$tdatatable1[".sqlFrom"] = "FROM \"public\".\"Recicladores\"";
$tdatatable1[".sqlWhereExpr"] = "";
$tdatatable1[".sqlTail"] = "";










//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdatatable1[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdatatable1[".arrGroupsPerPage"] = $arrGPP;

$tdatatable1[".highlightSearchResults"] = true;

$tableKeystable1 = array();
$tableKeystable1[] = "IdReciclador";
$tdatatable1[".Keys"] = $tableKeystable1;


$tdatatable1[".hideMobileList"] = array();




//	IdReciclador
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "IdReciclador";
	$fdata["GoodName"] = "IdReciclador";
	$fdata["ownerTable"] = "public.Recicladores";
	$fdata["Label"] = GetFieldLabel("public_Table1","IdReciclador");
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


	$tdatatable1["IdReciclador"] = $fdata;
		$tdatatable1[".searchableFields"][] = "IdReciclador";
//	NomReciclador
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "NomReciclador";
	$fdata["GoodName"] = "NomReciclador";
	$fdata["ownerTable"] = "public.Recicladores";
	$fdata["Label"] = GetFieldLabel("public_Table1","NomReciclador");
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


	$tdatatable1["NomReciclador"] = $fdata;
		$tdatatable1[".searchableFields"][] = "NomReciclador";


$tables_data["public.Table1"]=&$tdatatable1;
$field_labels["public_Table1"] = &$fieldLabelstable1;
$fieldToolTips["public_Table1"] = &$fieldToolTipstable1;
$placeHolders["public_Table1"] = &$placeHolderstable1;
$page_titles["public_Table1"] = &$pageTitlestable1;

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)
$detailsTablesData["public.Table1"] = array();

// tables which are master tables for current table (detail)
$masterTablesData["public.Table1"] = array();



// -----------------end  prepare master-details data arrays ------------------------------//


require_once(getabspath("classes/sql.php"));










function createSqlQuery_table1()
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
	"m_srcTableName" => "public.Table1"
));

$proto6["m_sql"] = "\"IdReciclador\"";
$proto6["m_srcTableName"] = "public.Table1";
$proto6["m_expr"]=$obj;
$proto6["m_alias"] = "";
$obj = new SQLFieldListItem($proto6);

$proto0["m_fieldlist"][]=$obj;
						$proto8=array();
			$obj = new SQLField(array(
	"m_strName" => "NomReciclador",
	"m_strTable" => "public.Recicladores",
	"m_srcTableName" => "public.Table1"
));

$proto8["m_sql"] = "\"NomReciclador\"";
$proto8["m_srcTableName"] = "public.Table1";
$proto8["m_expr"]=$obj;
$proto8["m_alias"] = "";
$obj = new SQLFieldListItem($proto8);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto10=array();
$proto10["m_link"] = "SQLL_MAIN";
			$proto11=array();
$proto11["m_strName"] = "public.Recicladores";
$proto11["m_srcTableName"] = "public.Table1";
$proto11["m_columns"] = array();
$proto11["m_columns"][] = "IdReciclador";
$proto11["m_columns"][] = "NomReciclador";
$obj = new SQLTable($proto11);

$proto10["m_table"] = $obj;
$proto10["m_sql"] = "\"public\".\"Recicladores\"";
$proto10["m_alias"] = "";
$proto10["m_srcTableName"] = "public.Table1";
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
$proto0["m_srcTableName"]="public.Table1";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_table1 = createSqlQuery_table1();


	
		;

		

$tdatatable1[".sqlquery"] = $queryData_table1;

$tableEvents["public.Table1"] = new eventsBase;
$tdatatable1[".hasEvents"] = false;

?>