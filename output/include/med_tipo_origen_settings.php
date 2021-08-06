<?php
$tdatamed_tipo_origen = array();
$tdatamed_tipo_origen[".searchableFields"] = array();
$tdatamed_tipo_origen[".ShortName"] = "med_tipo_origen";
$tdatamed_tipo_origen[".OwnerID"] = "";
$tdatamed_tipo_origen[".OriginalTable"] = "public.med_tipo_origen";


$tdatamed_tipo_origen[".pagesByType"] = my_json_decode( "{\"add\":[\"add\"],\"edit\":[\"edit\"],\"export\":[\"export\"],\"import\":[\"import\"],\"list\":[\"list\"],\"masterlist\":[\"masterlist\"],\"masterprint\":[\"masterprint\"],\"print\":[\"print\"],\"search\":[\"search\"],\"view\":[\"view\"]}" );
$tdatamed_tipo_origen[".originalPagesByType"] = $tdatamed_tipo_origen[".pagesByType"];
$tdatamed_tipo_origen[".pages"] = types2pages( my_json_decode( "{\"add\":[\"add\"],\"edit\":[\"edit\"],\"export\":[\"export\"],\"import\":[\"import\"],\"list\":[\"list\"],\"masterlist\":[\"masterlist\"],\"masterprint\":[\"masterprint\"],\"print\":[\"print\"],\"search\":[\"search\"],\"view\":[\"view\"]}" ) );
$tdatamed_tipo_origen[".originalPages"] = $tdatamed_tipo_origen[".pages"];
$tdatamed_tipo_origen[".defaultPages"] = my_json_decode( "{\"add\":\"add\",\"edit\":\"edit\",\"export\":\"export\",\"import\":\"import\",\"list\":\"list\",\"masterlist\":\"masterlist\",\"masterprint\":\"masterprint\",\"print\":\"print\",\"search\":\"search\",\"view\":\"view\"}" );
$tdatamed_tipo_origen[".originalDefaultPages"] = $tdatamed_tipo_origen[".defaultPages"];

//	field labels
$fieldLabelsmed_tipo_origen = array();
$fieldToolTipsmed_tipo_origen = array();
$pageTitlesmed_tipo_origen = array();
$placeHoldersmed_tipo_origen = array();

if(mlang_getcurrentlang()=="Spanish")
{
	$fieldLabelsmed_tipo_origen["Spanish"] = array();
	$fieldToolTipsmed_tipo_origen["Spanish"] = array();
	$placeHoldersmed_tipo_origen["Spanish"] = array();
	$pageTitlesmed_tipo_origen["Spanish"] = array();
	$fieldLabelsmed_tipo_origen["Spanish"]["id_med_tip_origen"] = "Código";
	$fieldToolTipsmed_tipo_origen["Spanish"]["id_med_tip_origen"] = "";
	$placeHoldersmed_tipo_origen["Spanish"]["id_med_tip_origen"] = "";
	$fieldLabelsmed_tipo_origen["Spanish"]["descri_med_tip_origen"] = "Descripción de Tipo";
	$fieldToolTipsmed_tipo_origen["Spanish"]["descri_med_tip_origen"] = "";
	$placeHoldersmed_tipo_origen["Spanish"]["descri_med_tip_origen"] = "";
	if (count($fieldToolTipsmed_tipo_origen["Spanish"]))
		$tdatamed_tipo_origen[".isUseToolTips"] = true;
}


	$tdatamed_tipo_origen[".NCSearch"] = true;



$tdatamed_tipo_origen[".shortTableName"] = "med_tipo_origen";
$tdatamed_tipo_origen[".nSecOptions"] = 0;

$tdatamed_tipo_origen[".mainTableOwnerID"] = "";
$tdatamed_tipo_origen[".entityType"] = 0;
$tdatamed_tipo_origen[".connId"] = "RealEstate_at_localhost";


$tdatamed_tipo_origen[".strOriginalTableName"] = "public.med_tipo_origen";

	



$tdatamed_tipo_origen[".showAddInPopup"] = false;

$tdatamed_tipo_origen[".showEditInPopup"] = false;

$tdatamed_tipo_origen[".showViewInPopup"] = false;

$tdatamed_tipo_origen[".listAjax"] = false;
//	temporary
//$tdatamed_tipo_origen[".listAjax"] = false;

	$tdatamed_tipo_origen[".audit"] = false;

	$tdatamed_tipo_origen[".locking"] = false;


$pages = $tdatamed_tipo_origen[".defaultPages"];

if( $pages[PAGE_EDIT] ) {
	$tdatamed_tipo_origen[".edit"] = true;
	$tdatamed_tipo_origen[".afterEditAction"] = 1;
	$tdatamed_tipo_origen[".closePopupAfterEdit"] = 1;
	$tdatamed_tipo_origen[".afterEditActionDetTable"] = "";
}

if( $pages[PAGE_ADD] ) {
$tdatamed_tipo_origen[".add"] = true;
$tdatamed_tipo_origen[".afterAddAction"] = 1;
$tdatamed_tipo_origen[".closePopupAfterAdd"] = 1;
$tdatamed_tipo_origen[".afterAddActionDetTable"] = "";
}

if( $pages[PAGE_LIST] ) {
	$tdatamed_tipo_origen[".list"] = true;
}



$tdatamed_tipo_origen[".strSortControlSettingsJSON"] = "";




if( $pages[PAGE_VIEW] ) {
$tdatamed_tipo_origen[".view"] = true;
}

if( $pages[PAGE_IMPORT] ) {
$tdatamed_tipo_origen[".import"] = true;
}

if( $pages[PAGE_EXPORT] ) {
$tdatamed_tipo_origen[".exportTo"] = true;
}

if( $pages[PAGE_PRINT] ) {
$tdatamed_tipo_origen[".printFriendly"] = true;
}



$tdatamed_tipo_origen[".showSimpleSearchOptions"] = true; // temp fix #13449

// Allow Show/Hide Fields in GRID
$tdatamed_tipo_origen[".allowShowHideFields"] = true; // temp fix #13449
//

// Allow Fields Reordering in GRID
$tdatamed_tipo_origen[".allowFieldsReordering"] = true; // temp fix #13449
//

$tdatamed_tipo_origen[".isUseAjaxSuggest"] = true;

$tdatamed_tipo_origen[".rowHighlite"] = true;



			

$tdatamed_tipo_origen[".ajaxCodeSnippetAdded"] = false;

$tdatamed_tipo_origen[".buttonsAdded"] = false;

$tdatamed_tipo_origen[".addPageEvents"] = false;

// use timepicker for search panel
$tdatamed_tipo_origen[".isUseTimeForSearch"] = false;


$tdatamed_tipo_origen[".badgeColor"] = "8FBC8B";


$tdatamed_tipo_origen[".allSearchFields"] = array();
$tdatamed_tipo_origen[".filterFields"] = array();
$tdatamed_tipo_origen[".requiredSearchFields"] = array();

$tdatamed_tipo_origen[".googleLikeFields"] = array();
$tdatamed_tipo_origen[".googleLikeFields"][] = "id_med_tip_origen";
$tdatamed_tipo_origen[".googleLikeFields"][] = "descri_med_tip_origen";



$tdatamed_tipo_origen[".tableType"] = "list";

$tdatamed_tipo_origen[".printerPageOrientation"] = 0;
$tdatamed_tipo_origen[".nPrinterPageScale"] = 100;

$tdatamed_tipo_origen[".nPrinterSplitRecords"] = 40;

$tdatamed_tipo_origen[".geocodingEnabled"] = false;










$tdatamed_tipo_origen[".pageSize"] = 20;

$tdatamed_tipo_origen[".warnLeavingPages"] = true;



$tstrOrderBy = "";
$tdatamed_tipo_origen[".strOrderBy"] = $tstrOrderBy;

$tdatamed_tipo_origen[".orderindexes"] = array();


$tdatamed_tipo_origen[".sqlHead"] = "SELECT id_med_tip_origen,  	descri_med_tip_origen";
$tdatamed_tipo_origen[".sqlFrom"] = "FROM \"public\".med_tipo_origen";
$tdatamed_tipo_origen[".sqlWhereExpr"] = "";
$tdatamed_tipo_origen[".sqlTail"] = "";










//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdatamed_tipo_origen[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdatamed_tipo_origen[".arrGroupsPerPage"] = $arrGPP;

$tdatamed_tipo_origen[".highlightSearchResults"] = true;

$tableKeysmed_tipo_origen = array();
$tableKeysmed_tipo_origen[] = "id_med_tip_origen";
$tdatamed_tipo_origen[".Keys"] = $tableKeysmed_tipo_origen;


$tdatamed_tipo_origen[".hideMobileList"] = array();




//	id_med_tip_origen
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "id_med_tip_origen";
	$fdata["GoodName"] = "id_med_tip_origen";
	$fdata["ownerTable"] = "public.med_tipo_origen";
	$fdata["Label"] = GetFieldLabel("public_med_tipo_origen","id_med_tip_origen");
	$fdata["FieldType"] = 3;


	
	
			

		$fdata["strField"] = "id_med_tip_origen";

		$fdata["sourceSingle"] = "id_med_tip_origen";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "id_med_tip_origen";

	
	
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


	$tdatamed_tipo_origen["id_med_tip_origen"] = $fdata;
		$tdatamed_tipo_origen[".searchableFields"][] = "id_med_tip_origen";
//	descri_med_tip_origen
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "descri_med_tip_origen";
	$fdata["GoodName"] = "descri_med_tip_origen";
	$fdata["ownerTable"] = "public.med_tipo_origen";
	$fdata["Label"] = GetFieldLabel("public_med_tipo_origen","descri_med_tip_origen");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "descri_med_tip_origen";

		$fdata["sourceSingle"] = "descri_med_tip_origen";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "descri_med_tip_origen";

	
	
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
			$edata["EditParams"].= " maxlength=50";

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


	$tdatamed_tipo_origen["descri_med_tip_origen"] = $fdata;
		$tdatamed_tipo_origen[".searchableFields"][] = "descri_med_tip_origen";


$tables_data["public.med_tipo_origen"]=&$tdatamed_tipo_origen;
$field_labels["public_med_tipo_origen"] = &$fieldLabelsmed_tipo_origen;
$fieldToolTips["public_med_tipo_origen"] = &$fieldToolTipsmed_tipo_origen;
$placeHolders["public_med_tipo_origen"] = &$placeHoldersmed_tipo_origen;
$page_titles["public_med_tipo_origen"] = &$pageTitlesmed_tipo_origen;

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)

//if !@TABLE.bReportCrossTab

$detailsTablesData["public.med_tipo_origen"] = array();
//	public.gestion_registros_origen
	
	

		$dIndex = 0;
	$detailsParam = array();
	$detailsParam["dDataSourceTable"]="public.gestion_registros_origen";
		$detailsParam["dOriginalTable"] = "public.gestion_registros_origen";



		
		$detailsParam["dType"]=PAGE_LIST;
	$detailsParam["dShortTable"] = "gestion_registros_origen";
	$detailsParam["dCaptionTable"] = GetTableCaption("public_gestion_registros_origen");
	$detailsParam["masterKeys"] =array();
	$detailsParam["detailKeys"] =array();


		
	$detailsTablesData["public.med_tipo_origen"][$dIndex] = $detailsParam;

	
		$detailsTablesData["public.med_tipo_origen"][$dIndex]["masterKeys"] = array();

	$detailsTablesData["public.med_tipo_origen"][$dIndex]["masterKeys"][]="id_med_tip_origen";

				$detailsTablesData["public.med_tipo_origen"][$dIndex]["detailKeys"] = array();

	$detailsTablesData["public.med_tipo_origen"][$dIndex]["detailKeys"][]="id_med_tip_origen";
//endif

// tables which are master tables for current table (detail)
$masterTablesData["public.med_tipo_origen"] = array();



// -----------------end  prepare master-details data arrays ------------------------------//



require_once(getabspath("classes/sql.php"));











function createSqlQuery_med_tipo_origen()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "id_med_tip_origen,  	descri_med_tip_origen";
$proto0["m_strFrom"] = "FROM \"public\".med_tipo_origen";
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
	"m_strName" => "id_med_tip_origen",
	"m_strTable" => "public.med_tipo_origen",
	"m_srcTableName" => "public.med_tipo_origen"
));

$proto6["m_sql"] = "id_med_tip_origen";
$proto6["m_srcTableName"] = "public.med_tipo_origen";
$proto6["m_expr"]=$obj;
$proto6["m_alias"] = "";
$obj = new SQLFieldListItem($proto6);

$proto0["m_fieldlist"][]=$obj;
						$proto8=array();
			$obj = new SQLField(array(
	"m_strName" => "descri_med_tip_origen",
	"m_strTable" => "public.med_tipo_origen",
	"m_srcTableName" => "public.med_tipo_origen"
));

$proto8["m_sql"] = "descri_med_tip_origen";
$proto8["m_srcTableName"] = "public.med_tipo_origen";
$proto8["m_expr"]=$obj;
$proto8["m_alias"] = "";
$obj = new SQLFieldListItem($proto8);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto10=array();
$proto10["m_link"] = "SQLL_MAIN";
			$proto11=array();
$proto11["m_strName"] = "public.med_tipo_origen";
$proto11["m_srcTableName"] = "public.med_tipo_origen";
$proto11["m_columns"] = array();
$proto11["m_columns"][] = "id_med_tip_origen";
$proto11["m_columns"][] = "descri_med_tip_origen";
$obj = new SQLTable($proto11);

$proto10["m_table"] = $obj;
$proto10["m_sql"] = "\"public\".med_tipo_origen";
$proto10["m_alias"] = "";
$proto10["m_srcTableName"] = "public.med_tipo_origen";
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
$proto0["m_srcTableName"]="public.med_tipo_origen";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_med_tipo_origen = createSqlQuery_med_tipo_origen();


	
		;

		

$tdatamed_tipo_origen[".sqlquery"] = $queryData_med_tipo_origen;



$tableEvents["public.med_tipo_origen"] = new eventsBase;
$tdatamed_tipo_origen[".hasEvents"] = false;

?>