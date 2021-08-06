<?php
$tdatamedtipoorigen = array();
$tdatamedtipoorigen[".searchableFields"] = array();
$tdatamedtipoorigen[".ShortName"] = "medtipoorigen";
$tdatamedtipoorigen[".OwnerID"] = "";
$tdatamedtipoorigen[".OriginalTable"] = "public.MedTipoOrigen";


$tdatamedtipoorigen[".pagesByType"] = my_json_decode( "{\"add\":[\"add\"],\"edit\":[\"edit\"],\"export\":[\"export\"],\"import\":[\"import\"],\"list\":[\"list\"],\"masterlist\":[\"masterlist\"],\"masterprint\":[\"masterprint\"],\"print\":[\"print\"],\"search\":[\"search\"],\"view\":[\"view\"]}" );
$tdatamedtipoorigen[".originalPagesByType"] = $tdatamedtipoorigen[".pagesByType"];
$tdatamedtipoorigen[".pages"] = types2pages( my_json_decode( "{\"add\":[\"add\"],\"edit\":[\"edit\"],\"export\":[\"export\"],\"import\":[\"import\"],\"list\":[\"list\"],\"masterlist\":[\"masterlist\"],\"masterprint\":[\"masterprint\"],\"print\":[\"print\"],\"search\":[\"search\"],\"view\":[\"view\"]}" ) );
$tdatamedtipoorigen[".originalPages"] = $tdatamedtipoorigen[".pages"];
$tdatamedtipoorigen[".defaultPages"] = my_json_decode( "{\"add\":\"add\",\"edit\":\"edit\",\"export\":\"export\",\"import\":\"import\",\"list\":\"list\",\"masterlist\":\"masterlist\",\"masterprint\":\"masterprint\",\"print\":\"print\",\"search\":\"search\",\"view\":\"view\"}" );
$tdatamedtipoorigen[".originalDefaultPages"] = $tdatamedtipoorigen[".defaultPages"];

//	field labels
$fieldLabelsmedtipoorigen = array();
$fieldToolTipsmedtipoorigen = array();
$pageTitlesmedtipoorigen = array();
$placeHoldersmedtipoorigen = array();

if(mlang_getcurrentlang()=="Spanish")
{
	$fieldLabelsmedtipoorigen["Spanish"] = array();
	$fieldToolTipsmedtipoorigen["Spanish"] = array();
	$placeHoldersmedtipoorigen["Spanish"] = array();
	$pageTitlesmedtipoorigen["Spanish"] = array();
	$fieldLabelsmedtipoorigen["Spanish"]["IdMedTipOrigen"] = "Codigo";
	$fieldToolTipsmedtipoorigen["Spanish"]["IdMedTipOrigen"] = "";
	$placeHoldersmedtipoorigen["Spanish"]["IdMedTipOrigen"] = "";
	$fieldLabelsmedtipoorigen["Spanish"]["DescriMedTipOrigen"] = "Descripción";
	$fieldToolTipsmedtipoorigen["Spanish"]["DescriMedTipOrigen"] = "";
	$placeHoldersmedtipoorigen["Spanish"]["DescriMedTipOrigen"] = "";
	if (count($fieldToolTipsmedtipoorigen["Spanish"]))
		$tdatamedtipoorigen[".isUseToolTips"] = true;
}


	$tdatamedtipoorigen[".NCSearch"] = true;



$tdatamedtipoorigen[".shortTableName"] = "medtipoorigen";
$tdatamedtipoorigen[".nSecOptions"] = 0;

$tdatamedtipoorigen[".mainTableOwnerID"] = "";
$tdatamedtipoorigen[".entityType"] = 0;
$tdatamedtipoorigen[".connId"] = "RealEstate_at_localhost";


$tdatamedtipoorigen[".strOriginalTableName"] = "public.MedTipoOrigen";

	



$tdatamedtipoorigen[".showAddInPopup"] = false;

$tdatamedtipoorigen[".showEditInPopup"] = false;

$tdatamedtipoorigen[".showViewInPopup"] = false;

$tdatamedtipoorigen[".listAjax"] = false;
//	temporary
//$tdatamedtipoorigen[".listAjax"] = false;

	$tdatamedtipoorigen[".audit"] = false;

	$tdatamedtipoorigen[".locking"] = false;


$pages = $tdatamedtipoorigen[".defaultPages"];

if( $pages[PAGE_EDIT] ) {
	$tdatamedtipoorigen[".edit"] = true;
	$tdatamedtipoorigen[".afterEditAction"] = 0;
	$tdatamedtipoorigen[".closePopupAfterEdit"] = 1;
	$tdatamedtipoorigen[".afterEditActionDetTable"] = "";
}

if( $pages[PAGE_ADD] ) {
$tdatamedtipoorigen[".add"] = true;
$tdatamedtipoorigen[".afterAddAction"] = 1;
$tdatamedtipoorigen[".closePopupAfterAdd"] = 1;
$tdatamedtipoorigen[".afterAddActionDetTable"] = "";
}

if( $pages[PAGE_LIST] ) {
	$tdatamedtipoorigen[".list"] = true;
}



$tdatamedtipoorigen[".strSortControlSettingsJSON"] = "";




if( $pages[PAGE_VIEW] ) {
$tdatamedtipoorigen[".view"] = true;
}

if( $pages[PAGE_IMPORT] ) {
$tdatamedtipoorigen[".import"] = true;
}

if( $pages[PAGE_EXPORT] ) {
$tdatamedtipoorigen[".exportTo"] = true;
}

if( $pages[PAGE_PRINT] ) {
$tdatamedtipoorigen[".printFriendly"] = true;
}



$tdatamedtipoorigen[".showSimpleSearchOptions"] = true; // temp fix #13449

// Allow Show/Hide Fields in GRID
$tdatamedtipoorigen[".allowShowHideFields"] = true; // temp fix #13449
//

// Allow Fields Reordering in GRID
$tdatamedtipoorigen[".allowFieldsReordering"] = true; // temp fix #13449
//

$tdatamedtipoorigen[".isUseAjaxSuggest"] = true;

$tdatamedtipoorigen[".rowHighlite"] = true;



			

$tdatamedtipoorigen[".ajaxCodeSnippetAdded"] = false;

$tdatamedtipoorigen[".buttonsAdded"] = false;

$tdatamedtipoorigen[".addPageEvents"] = false;

// use timepicker for search panel
$tdatamedtipoorigen[".isUseTimeForSearch"] = false;


$tdatamedtipoorigen[".badgeColor"] = "CFAE83";


$tdatamedtipoorigen[".allSearchFields"] = array();
$tdatamedtipoorigen[".filterFields"] = array();
$tdatamedtipoorigen[".requiredSearchFields"] = array();

$tdatamedtipoorigen[".googleLikeFields"] = array();
$tdatamedtipoorigen[".googleLikeFields"][] = "IdMedTipOrigen";
$tdatamedtipoorigen[".googleLikeFields"][] = "DescriMedTipOrigen";



$tdatamedtipoorigen[".tableType"] = "list";

$tdatamedtipoorigen[".printerPageOrientation"] = 0;
$tdatamedtipoorigen[".nPrinterPageScale"] = 100;

$tdatamedtipoorigen[".nPrinterSplitRecords"] = 40;

$tdatamedtipoorigen[".geocodingEnabled"] = false;










$tdatamedtipoorigen[".pageSize"] = 20;

$tdatamedtipoorigen[".warnLeavingPages"] = true;



$tstrOrderBy = "";
$tdatamedtipoorigen[".strOrderBy"] = $tstrOrderBy;

$tdatamedtipoorigen[".orderindexes"] = array();


$tdatamedtipoorigen[".sqlHead"] = "SELECT \"IdMedTipOrigen\",  	\"DescriMedTipOrigen\"";
$tdatamedtipoorigen[".sqlFrom"] = "FROM \"public\".\"MedTipoOrigen\"";
$tdatamedtipoorigen[".sqlWhereExpr"] = "";
$tdatamedtipoorigen[".sqlTail"] = "";










//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdatamedtipoorigen[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdatamedtipoorigen[".arrGroupsPerPage"] = $arrGPP;

$tdatamedtipoorigen[".highlightSearchResults"] = true;

$tableKeysmedtipoorigen = array();
$tableKeysmedtipoorigen[] = "IdMedTipOrigen";
$tdatamedtipoorigen[".Keys"] = $tableKeysmedtipoorigen;


$tdatamedtipoorigen[".hideMobileList"] = array();




//	IdMedTipOrigen
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "IdMedTipOrigen";
	$fdata["GoodName"] = "IdMedTipOrigen";
	$fdata["ownerTable"] = "public.MedTipoOrigen";
	$fdata["Label"] = GetFieldLabel("public_MedTipoOrigen","IdMedTipOrigen");
	$fdata["FieldType"] = 3;


		$fdata["AutoInc"] = true;

	
			

		$fdata["strField"] = "IdMedTipOrigen";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "\"IdMedTipOrigen\"";

	
	
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


	$tdatamedtipoorigen["IdMedTipOrigen"] = $fdata;
		$tdatamedtipoorigen[".searchableFields"][] = "IdMedTipOrigen";
//	DescriMedTipOrigen
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "DescriMedTipOrigen";
	$fdata["GoodName"] = "DescriMedTipOrigen";
	$fdata["ownerTable"] = "public.MedTipoOrigen";
	$fdata["Label"] = GetFieldLabel("public_MedTipoOrigen","DescriMedTipOrigen");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "DescriMedTipOrigen";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "\"DescriMedTipOrigen\"";

	
	
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


	$tdatamedtipoorigen["DescriMedTipOrigen"] = $fdata;
		$tdatamedtipoorigen[".searchableFields"][] = "DescriMedTipOrigen";


$tables_data["public.MedTipoOrigen"]=&$tdatamedtipoorigen;
$field_labels["public_MedTipoOrigen"] = &$fieldLabelsmedtipoorigen;
$fieldToolTips["public_MedTipoOrigen"] = &$fieldToolTipsmedtipoorigen;
$placeHolders["public_MedTipoOrigen"] = &$placeHoldersmedtipoorigen;
$page_titles["public_MedTipoOrigen"] = &$pageTitlesmedtipoorigen;

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)

//if !@TABLE.bReportCrossTab

$detailsTablesData["public.MedTipoOrigen"] = array();
//	public.GestionRegistrosOrigen
	
	

		$dIndex = 0;
	$detailsParam = array();
	$detailsParam["dDataSourceTable"]="public.GestionRegistrosOrigen";
		$detailsParam["dOriginalTable"] = "public.GestionRegistrosOrigen";



		
		$detailsParam["dType"]=PAGE_LIST;
	$detailsParam["dShortTable"] = "gestionregistrosorigen";
	$detailsParam["dCaptionTable"] = GetTableCaption("public_GestionRegistrosOrigen");
	$detailsParam["masterKeys"] =array();
	$detailsParam["detailKeys"] =array();


		
	$detailsTablesData["public.MedTipoOrigen"][$dIndex] = $detailsParam;

	
		$detailsTablesData["public.MedTipoOrigen"][$dIndex]["masterKeys"] = array();

	$detailsTablesData["public.MedTipoOrigen"][$dIndex]["masterKeys"][]="IdMedTipOrigen";

				$detailsTablesData["public.MedTipoOrigen"][$dIndex]["detailKeys"] = array();

	$detailsTablesData["public.MedTipoOrigen"][$dIndex]["detailKeys"][]="IdMedTipOrigen";
//endif

// tables which are master tables for current table (detail)
$masterTablesData["public.MedTipoOrigen"] = array();



// -----------------end  prepare master-details data arrays ------------------------------//



require_once(getabspath("classes/sql.php"));











function createSqlQuery_medtipoorigen()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "\"IdMedTipOrigen\",  	\"DescriMedTipOrigen\"";
$proto0["m_strFrom"] = "FROM \"public\".\"MedTipoOrigen\"";
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
	"m_strName" => "IdMedTipOrigen",
	"m_strTable" => "public.MedTipoOrigen",
	"m_srcTableName" => "public.MedTipoOrigen"
));

$proto6["m_sql"] = "\"IdMedTipOrigen\"";
$proto6["m_srcTableName"] = "public.MedTipoOrigen";
$proto6["m_expr"]=$obj;
$proto6["m_alias"] = "";
$obj = new SQLFieldListItem($proto6);

$proto0["m_fieldlist"][]=$obj;
						$proto8=array();
			$obj = new SQLField(array(
	"m_strName" => "DescriMedTipOrigen",
	"m_strTable" => "public.MedTipoOrigen",
	"m_srcTableName" => "public.MedTipoOrigen"
));

$proto8["m_sql"] = "\"DescriMedTipOrigen\"";
$proto8["m_srcTableName"] = "public.MedTipoOrigen";
$proto8["m_expr"]=$obj;
$proto8["m_alias"] = "";
$obj = new SQLFieldListItem($proto8);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto10=array();
$proto10["m_link"] = "SQLL_MAIN";
			$proto11=array();
$proto11["m_strName"] = "public.MedTipoOrigen";
$proto11["m_srcTableName"] = "public.MedTipoOrigen";
$proto11["m_columns"] = array();
$proto11["m_columns"][] = "IdMedTipOrigen";
$proto11["m_columns"][] = "DescriMedTipOrigen";
$obj = new SQLTable($proto11);

$proto10["m_table"] = $obj;
$proto10["m_sql"] = "\"public\".\"MedTipoOrigen\"";
$proto10["m_alias"] = "";
$proto10["m_srcTableName"] = "public.MedTipoOrigen";
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
$proto0["m_srcTableName"]="public.MedTipoOrigen";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_medtipoorigen = createSqlQuery_medtipoorigen();


	
		;

		

$tdatamedtipoorigen[".sqlquery"] = $queryData_medtipoorigen;



$tableEvents["public.MedTipoOrigen"] = new eventsBase;
$tdatamedtipoorigen[".hasEvents"] = false;

?>