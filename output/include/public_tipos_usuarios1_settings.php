<?php
$tdatapublic_tipos_usuarios1 = array();
$tdatapublic_tipos_usuarios1[".searchableFields"] = array();
$tdatapublic_tipos_usuarios1[".ShortName"] = "public_tipos_usuarios1";
$tdatapublic_tipos_usuarios1[".OwnerID"] = "";
$tdatapublic_tipos_usuarios1[".OriginalTable"] = "public.tipos_usuarios";


$tdatapublic_tipos_usuarios1[".pagesByType"] = my_json_decode( "{\"add\":[\"add\"],\"export\":[\"export\"],\"import\":[\"import\"],\"list\":[\"list\"],\"masterlist\":[\"masterlist\"],\"masterprint\":[\"masterprint\"],\"print\":[\"print\"],\"search\":[\"search\"]}" );
$tdatapublic_tipos_usuarios1[".originalPagesByType"] = $tdatapublic_tipos_usuarios1[".pagesByType"];
$tdatapublic_tipos_usuarios1[".pages"] = types2pages( my_json_decode( "{\"add\":[\"add\"],\"export\":[\"export\"],\"import\":[\"import\"],\"list\":[\"list\"],\"masterlist\":[\"masterlist\"],\"masterprint\":[\"masterprint\"],\"print\":[\"print\"],\"search\":[\"search\"]}" ) );
$tdatapublic_tipos_usuarios1[".originalPages"] = $tdatapublic_tipos_usuarios1[".pages"];
$tdatapublic_tipos_usuarios1[".defaultPages"] = my_json_decode( "{\"add\":\"add\",\"export\":\"export\",\"import\":\"import\",\"list\":\"list\",\"masterlist\":\"masterlist\",\"masterprint\":\"masterprint\",\"print\":\"print\",\"search\":\"search\"}" );
$tdatapublic_tipos_usuarios1[".originalDefaultPages"] = $tdatapublic_tipos_usuarios1[".defaultPages"];

//	field labels
$fieldLabelspublic_tipos_usuarios1 = array();
$fieldToolTipspublic_tipos_usuarios1 = array();
$pageTitlespublic_tipos_usuarios1 = array();
$placeHolderspublic_tipos_usuarios1 = array();

if(mlang_getcurrentlang()=="Spanish")
{
	$fieldLabelspublic_tipos_usuarios1["Spanish"] = array();
	$fieldToolTipspublic_tipos_usuarios1["Spanish"] = array();
	$placeHolderspublic_tipos_usuarios1["Spanish"] = array();
	$pageTitlespublic_tipos_usuarios1["Spanish"] = array();
	$fieldLabelspublic_tipos_usuarios1["Spanish"]["descri_tipo_usu"] = "Descripción";
	$fieldToolTipspublic_tipos_usuarios1["Spanish"]["descri_tipo_usu"] = "";
	$placeHolderspublic_tipos_usuarios1["Spanish"]["descri_tipo_usu"] = "";
	$fieldLabelspublic_tipos_usuarios1["Spanish"]["id_tipo_usu"] = "Código";
	$fieldToolTipspublic_tipos_usuarios1["Spanish"]["id_tipo_usu"] = "";
	$placeHolderspublic_tipos_usuarios1["Spanish"]["id_tipo_usu"] = "";
	if (count($fieldToolTipspublic_tipos_usuarios1["Spanish"]))
		$tdatapublic_tipos_usuarios1[".isUseToolTips"] = true;
}


	$tdatapublic_tipos_usuarios1[".NCSearch"] = true;



$tdatapublic_tipos_usuarios1[".shortTableName"] = "public_tipos_usuarios1";
$tdatapublic_tipos_usuarios1[".nSecOptions"] = 0;

$tdatapublic_tipos_usuarios1[".mainTableOwnerID"] = "";
$tdatapublic_tipos_usuarios1[".entityType"] = 0;
$tdatapublic_tipos_usuarios1[".connId"] = "RealEstate_at_localhost";


$tdatapublic_tipos_usuarios1[".strOriginalTableName"] = "public.tipos_usuarios";

	



$tdatapublic_tipos_usuarios1[".showAddInPopup"] = false;

$tdatapublic_tipos_usuarios1[".showEditInPopup"] = false;

$tdatapublic_tipos_usuarios1[".showViewInPopup"] = false;

$tdatapublic_tipos_usuarios1[".listAjax"] = false;
//	temporary
//$tdatapublic_tipos_usuarios1[".listAjax"] = false;

	$tdatapublic_tipos_usuarios1[".audit"] = false;

	$tdatapublic_tipos_usuarios1[".locking"] = false;


$pages = $tdatapublic_tipos_usuarios1[".defaultPages"];

if( $pages[PAGE_EDIT] ) {
	$tdatapublic_tipos_usuarios1[".edit"] = true;
	$tdatapublic_tipos_usuarios1[".afterEditAction"] = 1;
	$tdatapublic_tipos_usuarios1[".closePopupAfterEdit"] = 1;
	$tdatapublic_tipos_usuarios1[".afterEditActionDetTable"] = "";
}

if( $pages[PAGE_ADD] ) {
$tdatapublic_tipos_usuarios1[".add"] = true;
$tdatapublic_tipos_usuarios1[".afterAddAction"] = 1;
$tdatapublic_tipos_usuarios1[".closePopupAfterAdd"] = 1;
$tdatapublic_tipos_usuarios1[".afterAddActionDetTable"] = "";
}

if( $pages[PAGE_LIST] ) {
	$tdatapublic_tipos_usuarios1[".list"] = true;
}



$tdatapublic_tipos_usuarios1[".strSortControlSettingsJSON"] = "";




if( $pages[PAGE_VIEW] ) {
$tdatapublic_tipos_usuarios1[".view"] = true;
}

if( $pages[PAGE_IMPORT] ) {
$tdatapublic_tipos_usuarios1[".import"] = true;
}

if( $pages[PAGE_EXPORT] ) {
$tdatapublic_tipos_usuarios1[".exportTo"] = true;
}

if( $pages[PAGE_PRINT] ) {
$tdatapublic_tipos_usuarios1[".printFriendly"] = true;
}



$tdatapublic_tipos_usuarios1[".showSimpleSearchOptions"] = true; // temp fix #13449

// Allow Show/Hide Fields in GRID
$tdatapublic_tipos_usuarios1[".allowShowHideFields"] = true; // temp fix #13449
//

// Allow Fields Reordering in GRID
$tdatapublic_tipos_usuarios1[".allowFieldsReordering"] = true; // temp fix #13449
//

$tdatapublic_tipos_usuarios1[".isUseAjaxSuggest"] = true;

$tdatapublic_tipos_usuarios1[".rowHighlite"] = true;



			

$tdatapublic_tipos_usuarios1[".ajaxCodeSnippetAdded"] = false;

$tdatapublic_tipos_usuarios1[".buttonsAdded"] = false;

$tdatapublic_tipos_usuarios1[".addPageEvents"] = false;

// use timepicker for search panel
$tdatapublic_tipos_usuarios1[".isUseTimeForSearch"] = false;


$tdatapublic_tipos_usuarios1[".badgeColor"] = "008B8B";


$tdatapublic_tipos_usuarios1[".allSearchFields"] = array();
$tdatapublic_tipos_usuarios1[".filterFields"] = array();
$tdatapublic_tipos_usuarios1[".requiredSearchFields"] = array();

$tdatapublic_tipos_usuarios1[".googleLikeFields"] = array();
$tdatapublic_tipos_usuarios1[".googleLikeFields"][] = "id_tipo_usu";
$tdatapublic_tipos_usuarios1[".googleLikeFields"][] = "descri_tipo_usu";



$tdatapublic_tipos_usuarios1[".tableType"] = "list";

$tdatapublic_tipos_usuarios1[".printerPageOrientation"] = 0;
$tdatapublic_tipos_usuarios1[".nPrinterPageScale"] = 100;

$tdatapublic_tipos_usuarios1[".nPrinterSplitRecords"] = 40;

$tdatapublic_tipos_usuarios1[".geocodingEnabled"] = false;










$tdatapublic_tipos_usuarios1[".pageSize"] = 20;

$tdatapublic_tipos_usuarios1[".warnLeavingPages"] = true;



$tstrOrderBy = "";
$tdatapublic_tipos_usuarios1[".strOrderBy"] = $tstrOrderBy;

$tdatapublic_tipos_usuarios1[".orderindexes"] = array();


$tdatapublic_tipos_usuarios1[".sqlHead"] = "SELECT id_tipo_usu,  	descri_tipo_usu";
$tdatapublic_tipos_usuarios1[".sqlFrom"] = "FROM \"public\".tipos_usuarios";
$tdatapublic_tipos_usuarios1[".sqlWhereExpr"] = "";
$tdatapublic_tipos_usuarios1[".sqlTail"] = "";










//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdatapublic_tipos_usuarios1[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdatapublic_tipos_usuarios1[".arrGroupsPerPage"] = $arrGPP;

$tdatapublic_tipos_usuarios1[".highlightSearchResults"] = true;

$tableKeyspublic_tipos_usuarios1 = array();
$tdatapublic_tipos_usuarios1[".Keys"] = $tableKeyspublic_tipos_usuarios1;


$tdatapublic_tipos_usuarios1[".hideMobileList"] = array();




//	id_tipo_usu
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "id_tipo_usu";
	$fdata["GoodName"] = "id_tipo_usu";
	$fdata["ownerTable"] = "public.tipos_usuarios";
	$fdata["Label"] = GetFieldLabel("public_tipos_usuarios","id_tipo_usu");
	$fdata["FieldType"] = 3;


	
	
			

		$fdata["strField"] = "id_tipo_usu";

		$fdata["sourceSingle"] = "id_tipo_usu";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "id_tipo_usu";

	
	
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


	$tdatapublic_tipos_usuarios1["id_tipo_usu"] = $fdata;
		$tdatapublic_tipos_usuarios1[".searchableFields"][] = "id_tipo_usu";
//	descri_tipo_usu
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "descri_tipo_usu";
	$fdata["GoodName"] = "descri_tipo_usu";
	$fdata["ownerTable"] = "public.tipos_usuarios";
	$fdata["Label"] = GetFieldLabel("public_tipos_usuarios","descri_tipo_usu");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "descri_tipo_usu";

		$fdata["sourceSingle"] = "descri_tipo_usu";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "descri_tipo_usu";

	
	
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


	$tdatapublic_tipos_usuarios1["descri_tipo_usu"] = $fdata;
		$tdatapublic_tipos_usuarios1[".searchableFields"][] = "descri_tipo_usu";


$tables_data["public.tipos_usuarios"]=&$tdatapublic_tipos_usuarios1;
$field_labels["public_tipos_usuarios"] = &$fieldLabelspublic_tipos_usuarios1;
$fieldToolTips["public_tipos_usuarios"] = &$fieldToolTipspublic_tipos_usuarios1;
$placeHolders["public_tipos_usuarios"] = &$placeHolderspublic_tipos_usuarios1;
$page_titles["public_tipos_usuarios"] = &$pageTitlespublic_tipos_usuarios1;

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)

//if !@TABLE.bReportCrossTab

$detailsTablesData["public.tipos_usuarios"] = array();
//	public.Usuarios
	
	

		$dIndex = 0;
	$detailsParam = array();
	$detailsParam["dDataSourceTable"]="public.Usuarios";
		$detailsParam["dOriginalTable"] = "public.Usuarios";



		
		$detailsParam["dType"]=PAGE_LIST;
	$detailsParam["dShortTable"] = "usuarios";
	$detailsParam["dCaptionTable"] = GetTableCaption("public_Usuarios");
	$detailsParam["masterKeys"] =array();
	$detailsParam["detailKeys"] =array();


		
	$detailsTablesData["public.tipos_usuarios"][$dIndex] = $detailsParam;

	
		$detailsTablesData["public.tipos_usuarios"][$dIndex]["masterKeys"] = array();

	$detailsTablesData["public.tipos_usuarios"][$dIndex]["masterKeys"][]="id_tipo_usu";

				$detailsTablesData["public.tipos_usuarios"][$dIndex]["detailKeys"] = array();

	$detailsTablesData["public.tipos_usuarios"][$dIndex]["detailKeys"][]="id_tipo_usu";
//endif

// tables which are master tables for current table (detail)
$masterTablesData["public.tipos_usuarios"] = array();



// -----------------end  prepare master-details data arrays ------------------------------//



require_once(getabspath("classes/sql.php"));











function createSqlQuery_public_tipos_usuarios1()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "id_tipo_usu,  	descri_tipo_usu";
$proto0["m_strFrom"] = "FROM \"public\".tipos_usuarios";
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
	"m_strName" => "id_tipo_usu",
	"m_strTable" => "public.tipos_usuarios",
	"m_srcTableName" => "public.tipos_usuarios"
));

$proto6["m_sql"] = "id_tipo_usu";
$proto6["m_srcTableName"] = "public.tipos_usuarios";
$proto6["m_expr"]=$obj;
$proto6["m_alias"] = "";
$obj = new SQLFieldListItem($proto6);

$proto0["m_fieldlist"][]=$obj;
						$proto8=array();
			$obj = new SQLField(array(
	"m_strName" => "descri_tipo_usu",
	"m_strTable" => "public.tipos_usuarios",
	"m_srcTableName" => "public.tipos_usuarios"
));

$proto8["m_sql"] = "descri_tipo_usu";
$proto8["m_srcTableName"] = "public.tipos_usuarios";
$proto8["m_expr"]=$obj;
$proto8["m_alias"] = "";
$obj = new SQLFieldListItem($proto8);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto10=array();
$proto10["m_link"] = "SQLL_MAIN";
			$proto11=array();
$proto11["m_strName"] = "public.tipos_usuarios";
$proto11["m_srcTableName"] = "public.tipos_usuarios";
$proto11["m_columns"] = array();
$proto11["m_columns"][] = "id_tipo_usu";
$proto11["m_columns"][] = "descri_tipo_usu";
$obj = new SQLTable($proto11);

$proto10["m_table"] = $obj;
$proto10["m_sql"] = "\"public\".tipos_usuarios";
$proto10["m_alias"] = "";
$proto10["m_srcTableName"] = "public.tipos_usuarios";
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
$proto0["m_srcTableName"]="public.tipos_usuarios";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_public_tipos_usuarios1 = createSqlQuery_public_tipos_usuarios1();


	
		;

		

$tdatapublic_tipos_usuarios1[".sqlquery"] = $queryData_public_tipos_usuarios1;



$tableEvents["public.tipos_usuarios"] = new eventsBase;
$tdatapublic_tipos_usuarios1[".hasEvents"] = false;

?>