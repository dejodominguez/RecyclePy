<?php



$tdatapublic_inicioadmin = array();
$tdatapublic_inicioadmin[".searchableFields"] = array();
$tdatapublic_inicioadmin[".ShortName"] = "public_inicioadmin";
$tdatapublic_inicioadmin[".OwnerID"] = "";
$tdatapublic_inicioadmin[".OriginalTable"] = "public.InicioAdmin";


$defaultPages = my_json_decode( "{\"list\":\"list\",\"search\":\"search\"}" );

$tdatapublic_inicioadmin[".pagesByType"] = my_json_decode( "{\"list\":[\"list\"],\"search\":[\"search\"]}" );
$tdatapublic_inicioadmin[".pages"] = types2pages( my_json_decode( "{\"list\":[\"list\"],\"search\":[\"search\"]}" ) );
$tdatapublic_inicioadmin[".defaultPages"] = $defaultPages;

//	field labels
$fieldLabelspublic_inicioadmin = array();
$fieldToolTipspublic_inicioadmin = array();
$pageTitlespublic_inicioadmin = array();
$placeHolderspublic_inicioadmin = array();

if(mlang_getcurrentlang()=="Spanish")
{
	$fieldLabelspublic_inicioadmin["Spanish"] = array();
	$fieldToolTipspublic_inicioadmin["Spanish"] = array();
	$placeHolderspublic_inicioadmin["Spanish"] = array();
	$pageTitlespublic_inicioadmin["Spanish"] = array();
	$fieldLabelspublic_inicioadmin["Spanish"]["ID"] = "ID";
	$fieldToolTipspublic_inicioadmin["Spanish"]["ID"] = "";
	$placeHolderspublic_inicioadmin["Spanish"]["ID"] = "";
	if (count($fieldToolTipspublic_inicioadmin["Spanish"]))
		$tdatapublic_inicioadmin[".isUseToolTips"] = true;
}


	$tdatapublic_inicioadmin[".NCSearch"] = true;



$tdatapublic_inicioadmin[".shortTableName"] = "public_inicioadmin";
$tdatapublic_inicioadmin[".nSecOptions"] = 0;

$tdatapublic_inicioadmin[".mainTableOwnerID"] = "";
$tdatapublic_inicioadmin[".entityType"] = 0;

$tdatapublic_inicioadmin[".strOriginalTableName"] = "public.InicioAdmin";

	



$tdatapublic_inicioadmin[".showAddInPopup"] = false;

$tdatapublic_inicioadmin[".showEditInPopup"] = false;

$tdatapublic_inicioadmin[".showViewInPopup"] = false;

//page's base css files names
$popupPagesLayoutNames = array();
$tdatapublic_inicioadmin[".popupPagesLayoutNames"] = $popupPagesLayoutNames;


$tdatapublic_inicioadmin[".listAjax"] = false;
//	temporary
$tdatapublic_inicioadmin[".listAjax"] = false;

	$tdatapublic_inicioadmin[".audit"] = false;

	$tdatapublic_inicioadmin[".locking"] = false;


$pages = $tdatapublic_inicioadmin[".defaultPages"];

if( $pages[PAGE_EDIT] ) {
	$tdatapublic_inicioadmin[".edit"] = true;
	$tdatapublic_inicioadmin[".afterEditAction"] = 1;
	$tdatapublic_inicioadmin[".closePopupAfterEdit"] = 1;
	$tdatapublic_inicioadmin[".afterEditActionDetTable"] = "";
}

if( $pages[PAGE_ADD] ) {
$tdatapublic_inicioadmin[".add"] = true;
$tdatapublic_inicioadmin[".afterAddAction"] = 1;
$tdatapublic_inicioadmin[".closePopupAfterAdd"] = 1;
$tdatapublic_inicioadmin[".afterAddActionDetTable"] = "";
}

if( $pages[PAGE_LIST] ) {
	$tdatapublic_inicioadmin[".list"] = true;
}



$tdatapublic_inicioadmin[".strSortControlSettingsJSON"] = "";




if( $pages[PAGE_VIEW] ) {
$tdatapublic_inicioadmin[".view"] = true;
}

if( $pages[PAGE_IMPORT] ) {
$tdatapublic_inicioadmin[".import"] = true;
}

if( $pages[PAGE_EXPORT] ) {
$tdatapublic_inicioadmin[".exportTo"] = true;
}

if( $pages[PAGE_PRINT] ) {
$tdatapublic_inicioadmin[".printFriendly"] = true;
}



$tdatapublic_inicioadmin[".showSimpleSearchOptions"] = true; // temp fix #13449

// Allow Show/Hide Fields in GRID
$tdatapublic_inicioadmin[".allowShowHideFields"] = true; // temp fix #13449
//

// Allow Fields Reordering in GRID
$tdatapublic_inicioadmin[".allowFieldsReordering"] = true; // temp fix #13449
//

$tdatapublic_inicioadmin[".isUseAjaxSuggest"] = true;

$tdatapublic_inicioadmin[".rowHighlite"] = true;



			

$tdatapublic_inicioadmin[".ajaxCodeSnippetAdded"] = false;

$tdatapublic_inicioadmin[".buttonsAdded"] = false;

$tdatapublic_inicioadmin[".addPageEvents"] = false;

// use timepicker for search panel
$tdatapublic_inicioadmin[".isUseTimeForSearch"] = false;


$tdatapublic_inicioadmin[".badgeColor"] = "E07878";


$tdatapublic_inicioadmin[".allSearchFields"] = array();
$tdatapublic_inicioadmin[".filterFields"] = array();
$tdatapublic_inicioadmin[".requiredSearchFields"] = array();

$tdatapublic_inicioadmin[".googleLikeFields"] = array();
$tdatapublic_inicioadmin[".googleLikeFields"][] = "ID";



$tdatapublic_inicioadmin[".tableType"] = "list";

$tdatapublic_inicioadmin[".printerPageOrientation"] = 0;
$tdatapublic_inicioadmin[".nPrinterPageScale"] = 100;

$tdatapublic_inicioadmin[".nPrinterSplitRecords"] = 40;

$tdatapublic_inicioadmin[".geocodingEnabled"] = false;










$tdatapublic_inicioadmin[".pageSize"] = 20;

$tdatapublic_inicioadmin[".warnLeavingPages"] = true;



$tstrOrderBy = "";
if(strlen($tstrOrderBy) && strtolower(substr($tstrOrderBy,0,8))!="order by")
	$tstrOrderBy = "order by ".$tstrOrderBy;
$tdatapublic_inicioadmin[".strOrderBy"] = $tstrOrderBy;

$tdatapublic_inicioadmin[".orderindexes"] = array();

$tdatapublic_inicioadmin[".sqlHead"] = "SELECT \"ID\"";
$tdatapublic_inicioadmin[".sqlFrom"] = "FROM \"public\".\"InicioAdmin\"";
$tdatapublic_inicioadmin[".sqlWhereExpr"] = "";
$tdatapublic_inicioadmin[".sqlTail"] = "";










//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdatapublic_inicioadmin[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdatapublic_inicioadmin[".arrGroupsPerPage"] = $arrGPP;

$tdatapublic_inicioadmin[".highlightSearchResults"] = true;

$tableKeyspublic_inicioadmin = array();
$tableKeyspublic_inicioadmin[] = "ID";
$tdatapublic_inicioadmin[".Keys"] = $tableKeyspublic_inicioadmin;


$tdatapublic_inicioadmin[".hideMobileList"] = array();




//	ID
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "ID";
	$fdata["GoodName"] = "ID";
	$fdata["ownerTable"] = "public.InicioAdmin";
	$fdata["Label"] = GetFieldLabel("public_InicioAdmin","ID");
	$fdata["FieldType"] = 3;

	
		$fdata["AutoInc"] = true;

	
			

		$fdata["strField"] = "ID";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "\"ID\"";

	
	
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


	$tdatapublic_inicioadmin["ID"] = $fdata;
		$tdatapublic_inicioadmin[".searchableFields"][] = "ID";


$tables_data["public.InicioAdmin"]=&$tdatapublic_inicioadmin;
$field_labels["public_InicioAdmin"] = &$fieldLabelspublic_inicioadmin;
$fieldToolTips["public_InicioAdmin"] = &$fieldToolTipspublic_inicioadmin;
$placeHolders["public_InicioAdmin"] = &$placeHolderspublic_inicioadmin;
$page_titles["public_InicioAdmin"] = &$pageTitlespublic_inicioadmin;

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)
$detailsTablesData["public.InicioAdmin"] = array();

// tables which are master tables for current table (detail)
$masterTablesData["public.InicioAdmin"] = array();



// -----------------end  prepare master-details data arrays ------------------------------//


require_once(getabspath("classes/sql.php"));










function createSqlQuery_public_inicioadmin()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "\"ID\"";
$proto0["m_strFrom"] = "FROM \"public\".\"InicioAdmin\"";
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
	"m_strName" => "ID",
	"m_strTable" => "public.InicioAdmin",
	"m_srcTableName" => "public.InicioAdmin"
));

$proto6["m_sql"] = "\"ID\"";
$proto6["m_srcTableName"] = "public.InicioAdmin";
$proto6["m_expr"]=$obj;
$proto6["m_alias"] = "";
$obj = new SQLFieldListItem($proto6);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto8=array();
$proto8["m_link"] = "SQLL_MAIN";
			$proto9=array();
$proto9["m_strName"] = "public.InicioAdmin";
$proto9["m_srcTableName"] = "public.InicioAdmin";
$proto9["m_columns"] = array();
$proto9["m_columns"][] = "ID";
$obj = new SQLTable($proto9);

$proto8["m_table"] = $obj;
$proto8["m_sql"] = "\"public\".\"InicioAdmin\"";
$proto8["m_alias"] = "";
$proto8["m_srcTableName"] = "public.InicioAdmin";
$proto10=array();
$proto10["m_sql"] = "";
$proto10["m_uniontype"] = "SQLL_UNKNOWN";
	$obj = new SQLNonParsed(array(
	"m_sql" => ""
));

$proto10["m_column"]=$obj;
$proto10["m_contained"] = array();
$proto10["m_strCase"] = "";
$proto10["m_havingmode"] = false;
$proto10["m_inBrackets"] = false;
$proto10["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto10);

$proto8["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto8);

$proto0["m_fromlist"][]=$obj;
$proto0["m_groupby"] = array();
$proto0["m_orderby"] = array();
$proto0["m_srcTableName"]="public.InicioAdmin";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_public_inicioadmin = createSqlQuery_public_inicioadmin();


	
		;

	

$tdatapublic_inicioadmin[".sqlquery"] = $queryData_public_inicioadmin;

$tableEvents["public.InicioAdmin"] = new eventsBase;
$tdatapublic_inicioadmin[".hasEvents"] = false;

?>