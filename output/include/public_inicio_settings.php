<?php



$tdatapublic_inicio = array();
$tdatapublic_inicio[".searchableFields"] = array();
$tdatapublic_inicio[".ShortName"] = "public_inicio";
$tdatapublic_inicio[".OwnerID"] = "";
$tdatapublic_inicio[".OriginalTable"] = "public.Inicio";


$defaultPages = my_json_decode( "{\"list\":\"list\",\"search\":\"search\"}" );

$tdatapublic_inicio[".pagesByType"] = my_json_decode( "{\"list\":[\"list\"],\"search\":[\"search\"]}" );
$tdatapublic_inicio[".pages"] = types2pages( my_json_decode( "{\"list\":[\"list\"],\"search\":[\"search\"]}" ) );
$tdatapublic_inicio[".defaultPages"] = $defaultPages;

//	field labels
$fieldLabelspublic_inicio = array();
$fieldToolTipspublic_inicio = array();
$pageTitlespublic_inicio = array();
$placeHolderspublic_inicio = array();

if(mlang_getcurrentlang()=="Spanish")
{
	$fieldLabelspublic_inicio["Spanish"] = array();
	$fieldToolTipspublic_inicio["Spanish"] = array();
	$placeHolderspublic_inicio["Spanish"] = array();
	$pageTitlespublic_inicio["Spanish"] = array();
	$fieldLabelspublic_inicio["Spanish"]["ID"] = "ID";
	$fieldToolTipspublic_inicio["Spanish"]["ID"] = "";
	$placeHolderspublic_inicio["Spanish"]["ID"] = "";
	$fieldLabelspublic_inicio["Spanish"]["Nombre"] = "Nombre";
	$fieldToolTipspublic_inicio["Spanish"]["Nombre"] = "";
	$placeHolderspublic_inicio["Spanish"]["Nombre"] = "";
	$fieldLabelspublic_inicio["Spanish"]["Dercripci_n"] = "Dercripción";
	$fieldToolTipspublic_inicio["Spanish"]["Dercripci_n"] = "";
	$placeHolderspublic_inicio["Spanish"]["Dercripci_n"] = "";
	$fieldLabelspublic_inicio["Spanish"]["ID"] = "ID";
	$fieldToolTipspublic_inicio["Spanish"]["ID"] = "";
	$placeHolderspublic_inicio["Spanish"]["ID"] = "";
	$fieldLabelspublic_inicio["Spanish"]["Nombre"] = "Nombre";
	$fieldToolTipspublic_inicio["Spanish"]["Nombre"] = "";
	$placeHolderspublic_inicio["Spanish"]["Nombre"] = "";
	$fieldLabelspublic_inicio["Spanish"]["Dercripci_n"] = "Dercripción";
	$fieldToolTipspublic_inicio["Spanish"]["Dercripci_n"] = "";
	$placeHolderspublic_inicio["Spanish"]["Dercripci_n"] = "";
	if (count($fieldToolTipspublic_inicio["Spanish"]))
		$tdatapublic_inicio[".isUseToolTips"] = true;
}


	$tdatapublic_inicio[".NCSearch"] = true;



$tdatapublic_inicio[".shortTableName"] = "public_inicio";
$tdatapublic_inicio[".nSecOptions"] = 0;

$tdatapublic_inicio[".mainTableOwnerID"] = "";
$tdatapublic_inicio[".entityType"] = 0;

$tdatapublic_inicio[".strOriginalTableName"] = "public.Inicio";

	



$tdatapublic_inicio[".showAddInPopup"] = false;

$tdatapublic_inicio[".showEditInPopup"] = false;

$tdatapublic_inicio[".showViewInPopup"] = false;

//page's base css files names
$popupPagesLayoutNames = array();
$tdatapublic_inicio[".popupPagesLayoutNames"] = $popupPagesLayoutNames;


$tdatapublic_inicio[".listAjax"] = false;
//	temporary
$tdatapublic_inicio[".listAjax"] = false;

	$tdatapublic_inicio[".audit"] = false;

	$tdatapublic_inicio[".locking"] = false;


$pages = $tdatapublic_inicio[".defaultPages"];

if( $pages[PAGE_EDIT] ) {
	$tdatapublic_inicio[".edit"] = true;
	$tdatapublic_inicio[".afterEditAction"] = 1;
	$tdatapublic_inicio[".closePopupAfterEdit"] = 1;
	$tdatapublic_inicio[".afterEditActionDetTable"] = "";
}

if( $pages[PAGE_ADD] ) {
$tdatapublic_inicio[".add"] = true;
$tdatapublic_inicio[".afterAddAction"] = 1;
$tdatapublic_inicio[".closePopupAfterAdd"] = 1;
$tdatapublic_inicio[".afterAddActionDetTable"] = "";
}

if( $pages[PAGE_LIST] ) {
	$tdatapublic_inicio[".list"] = true;
}



$tdatapublic_inicio[".strSortControlSettingsJSON"] = "";




if( $pages[PAGE_VIEW] ) {
$tdatapublic_inicio[".view"] = true;
}

if( $pages[PAGE_IMPORT] ) {
$tdatapublic_inicio[".import"] = true;
}

if( $pages[PAGE_EXPORT] ) {
$tdatapublic_inicio[".exportTo"] = true;
}

if( $pages[PAGE_PRINT] ) {
$tdatapublic_inicio[".printFriendly"] = true;
}



$tdatapublic_inicio[".showSimpleSearchOptions"] = true; // temp fix #13449

// Allow Show/Hide Fields in GRID
$tdatapublic_inicio[".allowShowHideFields"] = true; // temp fix #13449
//

// Allow Fields Reordering in GRID
$tdatapublic_inicio[".allowFieldsReordering"] = true; // temp fix #13449
//

$tdatapublic_inicio[".isUseAjaxSuggest"] = true;

$tdatapublic_inicio[".rowHighlite"] = true;



			

$tdatapublic_inicio[".ajaxCodeSnippetAdded"] = false;

$tdatapublic_inicio[".buttonsAdded"] = false;

$tdatapublic_inicio[".addPageEvents"] = false;

// use timepicker for search panel
$tdatapublic_inicio[".isUseTimeForSearch"] = false;


$tdatapublic_inicio[".badgeColor"] = "BC8F8F";


$tdatapublic_inicio[".allSearchFields"] = array();
$tdatapublic_inicio[".filterFields"] = array();
$tdatapublic_inicio[".requiredSearchFields"] = array();

$tdatapublic_inicio[".googleLikeFields"] = array();
$tdatapublic_inicio[".googleLikeFields"][] = "ID";
$tdatapublic_inicio[".googleLikeFields"][] = "Nombre";
$tdatapublic_inicio[".googleLikeFields"][] = "Dercripción";



$tdatapublic_inicio[".tableType"] = "list";

$tdatapublic_inicio[".printerPageOrientation"] = 0;
$tdatapublic_inicio[".nPrinterPageScale"] = 100;

$tdatapublic_inicio[".nPrinterSplitRecords"] = 40;

$tdatapublic_inicio[".geocodingEnabled"] = false;










$tdatapublic_inicio[".pageSize"] = 20;

$tdatapublic_inicio[".warnLeavingPages"] = true;



$tstrOrderBy = "";
if(strlen($tstrOrderBy) && strtolower(substr($tstrOrderBy,0,8))!="order by")
	$tstrOrderBy = "order by ".$tstrOrderBy;
$tdatapublic_inicio[".strOrderBy"] = $tstrOrderBy;

$tdatapublic_inicio[".orderindexes"] = array();

$tdatapublic_inicio[".sqlHead"] = "SELECT \"ID\",  	\"Nombre\",  	\"Dercripción\"";
$tdatapublic_inicio[".sqlFrom"] = "FROM \"public\".\"Inicio\"";
$tdatapublic_inicio[".sqlWhereExpr"] = "";
$tdatapublic_inicio[".sqlTail"] = "";

//fill array of tabs for list page
$arrGridTabs = array();
$arrGridTabs[] = array(
	'tabId' => "",
	'name' => "All data",
	'nameType' => 'Text',
	'where' => "",
	'showRowCount' => 0,
	'hideEmpty' => 0,
);
$tdatapublic_inicio[".arrGridTabs"] = $arrGridTabs;









//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdatapublic_inicio[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdatapublic_inicio[".arrGroupsPerPage"] = $arrGPP;

$tdatapublic_inicio[".highlightSearchResults"] = true;

$tableKeyspublic_inicio = array();
$tableKeyspublic_inicio[] = "ID";
$tdatapublic_inicio[".Keys"] = $tableKeyspublic_inicio;


$tdatapublic_inicio[".hideMobileList"] = array();




//	ID
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "ID";
	$fdata["GoodName"] = "ID";
	$fdata["ownerTable"] = "public.Inicio";
	$fdata["Label"] = GetFieldLabel("public_Inicio","ID");
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


	$tdatapublic_inicio["ID"] = $fdata;
		$tdatapublic_inicio[".searchableFields"][] = "ID";
//	Nombre
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "Nombre";
	$fdata["GoodName"] = "Nombre";
	$fdata["ownerTable"] = "public.Inicio";
	$fdata["Label"] = GetFieldLabel("public_Inicio","Nombre");
	$fdata["FieldType"] = 200;

	
	
	
			

		$fdata["strField"] = "Nombre";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "\"Nombre\"";

	
	
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


	$tdatapublic_inicio["Nombre"] = $fdata;
		$tdatapublic_inicio[".searchableFields"][] = "Nombre";
//	Dercripción
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "Dercripción";
	$fdata["GoodName"] = "Dercripci_n";
	$fdata["ownerTable"] = "public.Inicio";
	$fdata["Label"] = GetFieldLabel("public_Inicio","Dercripci_n");
	$fdata["FieldType"] = 200;

	
	
	
			

		$fdata["strField"] = "Dercripción";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "\"Dercripción\"";

	
	
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


	$tdatapublic_inicio["Dercripción"] = $fdata;
		$tdatapublic_inicio[".searchableFields"][] = "Dercripción";


$tables_data["public.Inicio"]=&$tdatapublic_inicio;
$field_labels["public_Inicio"] = &$fieldLabelspublic_inicio;
$fieldToolTips["public_Inicio"] = &$fieldToolTipspublic_inicio;
$placeHolders["public_Inicio"] = &$placeHolderspublic_inicio;
$page_titles["public_Inicio"] = &$pageTitlespublic_inicio;

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)
$detailsTablesData["public.Inicio"] = array();

// tables which are master tables for current table (detail)
$masterTablesData["public.Inicio"] = array();



// -----------------end  prepare master-details data arrays ------------------------------//


require_once(getabspath("classes/sql.php"));










function createSqlQuery_public_inicio()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "\"ID\",  	\"Nombre\",  	\"Dercripción\"";
$proto0["m_strFrom"] = "FROM \"public\".\"Inicio\"";
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
	"m_strTable" => "public.Inicio",
	"m_srcTableName" => "public.Inicio"
));

$proto6["m_sql"] = "\"ID\"";
$proto6["m_srcTableName"] = "public.Inicio";
$proto6["m_expr"]=$obj;
$proto6["m_alias"] = "";
$obj = new SQLFieldListItem($proto6);

$proto0["m_fieldlist"][]=$obj;
						$proto8=array();
			$obj = new SQLField(array(
	"m_strName" => "Nombre",
	"m_strTable" => "public.Inicio",
	"m_srcTableName" => "public.Inicio"
));

$proto8["m_sql"] = "\"Nombre\"";
$proto8["m_srcTableName"] = "public.Inicio";
$proto8["m_expr"]=$obj;
$proto8["m_alias"] = "";
$obj = new SQLFieldListItem($proto8);

$proto0["m_fieldlist"][]=$obj;
						$proto10=array();
			$obj = new SQLField(array(
	"m_strName" => "Dercripción",
	"m_strTable" => "public.Inicio",
	"m_srcTableName" => "public.Inicio"
));

$proto10["m_sql"] = "\"Dercripción\"";
$proto10["m_srcTableName"] = "public.Inicio";
$proto10["m_expr"]=$obj;
$proto10["m_alias"] = "";
$obj = new SQLFieldListItem($proto10);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto12=array();
$proto12["m_link"] = "SQLL_MAIN";
			$proto13=array();
$proto13["m_strName"] = "public.Inicio";
$proto13["m_srcTableName"] = "public.Inicio";
$proto13["m_columns"] = array();
$proto13["m_columns"][] = "ID";
$proto13["m_columns"][] = "Nombre";
$proto13["m_columns"][] = "Dercripción";
$obj = new SQLTable($proto13);

$proto12["m_table"] = $obj;
$proto12["m_sql"] = "\"public\".\"Inicio\"";
$proto12["m_alias"] = "";
$proto12["m_srcTableName"] = "public.Inicio";
$proto14=array();
$proto14["m_sql"] = "";
$proto14["m_uniontype"] = "SQLL_UNKNOWN";
	$obj = new SQLNonParsed(array(
	"m_sql" => ""
));

$proto14["m_column"]=$obj;
$proto14["m_contained"] = array();
$proto14["m_strCase"] = "";
$proto14["m_havingmode"] = false;
$proto14["m_inBrackets"] = false;
$proto14["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto14);

$proto12["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto12);

$proto0["m_fromlist"][]=$obj;
$proto0["m_groupby"] = array();
$proto0["m_orderby"] = array();
$proto0["m_srcTableName"]="public.Inicio";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_public_inicio = createSqlQuery_public_inicio();


	
		;

			

$tdatapublic_inicio[".sqlquery"] = $queryData_public_inicio;

$tableEvents["public.Inicio"] = new eventsBase;
$tdatapublic_inicio[".hasEvents"] = false;

?>