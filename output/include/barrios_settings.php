<?php
$tdatabarrios = array();
$tdatabarrios[".searchableFields"] = array();
$tdatabarrios[".ShortName"] = "barrios";
$tdatabarrios[".OwnerID"] = "";
$tdatabarrios[".OriginalTable"] = "public.barrios";


$tdatabarrios[".pagesByType"] = my_json_decode( "{\"add\":[\"add\"],\"edit\":[\"edit\"],\"export\":[\"export\"],\"import\":[\"import\"],\"list\":[\"list\"],\"masterlist\":[\"masterlist\"],\"masterprint\":[\"masterprint\"],\"print\":[\"print\"],\"search\":[\"search\"],\"view\":[\"view\"]}" );
$tdatabarrios[".originalPagesByType"] = $tdatabarrios[".pagesByType"];
$tdatabarrios[".pages"] = types2pages( my_json_decode( "{\"add\":[\"add\"],\"edit\":[\"edit\"],\"export\":[\"export\"],\"import\":[\"import\"],\"list\":[\"list\"],\"masterlist\":[\"masterlist\"],\"masterprint\":[\"masterprint\"],\"print\":[\"print\"],\"search\":[\"search\"],\"view\":[\"view\"]}" ) );
$tdatabarrios[".originalPages"] = $tdatabarrios[".pages"];
$tdatabarrios[".defaultPages"] = my_json_decode( "{\"add\":\"add\",\"edit\":\"edit\",\"export\":\"export\",\"import\":\"import\",\"list\":\"list\",\"masterlist\":\"masterlist\",\"masterprint\":\"masterprint\",\"print\":\"print\",\"search\":\"search\",\"view\":\"view\"}" );
$tdatabarrios[".originalDefaultPages"] = $tdatabarrios[".defaultPages"];

//	field labels
$fieldLabelsbarrios = array();
$fieldToolTipsbarrios = array();
$pageTitlesbarrios = array();
$placeHoldersbarrios = array();

if(mlang_getcurrentlang()=="Spanish")
{
	$fieldLabelsbarrios["Spanish"] = array();
	$fieldToolTipsbarrios["Spanish"] = array();
	$placeHoldersbarrios["Spanish"] = array();
	$pageTitlesbarrios["Spanish"] = array();
	$fieldLabelsbarrios["Spanish"]["id_barrio"] = "Código ";
	$fieldToolTipsbarrios["Spanish"]["id_barrio"] = "";
	$placeHoldersbarrios["Spanish"]["id_barrio"] = "";
	$fieldLabelsbarrios["Spanish"]["descri_barrio"] = "Descripción";
	$fieldToolTipsbarrios["Spanish"]["descri_barrio"] = "";
	$placeHoldersbarrios["Spanish"]["descri_barrio"] = "";
	if (count($fieldToolTipsbarrios["Spanish"]))
		$tdatabarrios[".isUseToolTips"] = true;
}


	$tdatabarrios[".NCSearch"] = true;



$tdatabarrios[".shortTableName"] = "barrios";
$tdatabarrios[".nSecOptions"] = 0;

$tdatabarrios[".mainTableOwnerID"] = "";
$tdatabarrios[".entityType"] = 0;
$tdatabarrios[".connId"] = "RealEstate_at_localhost";


$tdatabarrios[".strOriginalTableName"] = "public.barrios";

	



$tdatabarrios[".showAddInPopup"] = false;

$tdatabarrios[".showEditInPopup"] = false;

$tdatabarrios[".showViewInPopup"] = false;

$tdatabarrios[".listAjax"] = false;
//	temporary
//$tdatabarrios[".listAjax"] = false;

	$tdatabarrios[".audit"] = false;

	$tdatabarrios[".locking"] = false;


$pages = $tdatabarrios[".defaultPages"];

if( $pages[PAGE_EDIT] ) {
	$tdatabarrios[".edit"] = true;
	$tdatabarrios[".afterEditAction"] = 1;
	$tdatabarrios[".closePopupAfterEdit"] = 1;
	$tdatabarrios[".afterEditActionDetTable"] = "";
}

if( $pages[PAGE_ADD] ) {
$tdatabarrios[".add"] = true;
$tdatabarrios[".afterAddAction"] = 1;
$tdatabarrios[".closePopupAfterAdd"] = 1;
$tdatabarrios[".afterAddActionDetTable"] = "";
}

if( $pages[PAGE_LIST] ) {
	$tdatabarrios[".list"] = true;
}



$tdatabarrios[".strSortControlSettingsJSON"] = "";




if( $pages[PAGE_VIEW] ) {
$tdatabarrios[".view"] = true;
}

if( $pages[PAGE_IMPORT] ) {
$tdatabarrios[".import"] = true;
}

if( $pages[PAGE_EXPORT] ) {
$tdatabarrios[".exportTo"] = true;
}

if( $pages[PAGE_PRINT] ) {
$tdatabarrios[".printFriendly"] = true;
}



$tdatabarrios[".showSimpleSearchOptions"] = true; // temp fix #13449

// Allow Show/Hide Fields in GRID
$tdatabarrios[".allowShowHideFields"] = true; // temp fix #13449
//

// Allow Fields Reordering in GRID
$tdatabarrios[".allowFieldsReordering"] = true; // temp fix #13449
//

$tdatabarrios[".isUseAjaxSuggest"] = true;

$tdatabarrios[".rowHighlite"] = true;



			

$tdatabarrios[".ajaxCodeSnippetAdded"] = false;

$tdatabarrios[".buttonsAdded"] = false;

$tdatabarrios[".addPageEvents"] = false;

// use timepicker for search panel
$tdatabarrios[".isUseTimeForSearch"] = false;


$tdatabarrios[".badgeColor"] = "9ACD32";


$tdatabarrios[".allSearchFields"] = array();
$tdatabarrios[".filterFields"] = array();
$tdatabarrios[".requiredSearchFields"] = array();

$tdatabarrios[".googleLikeFields"] = array();
$tdatabarrios[".googleLikeFields"][] = "id_barrio";
$tdatabarrios[".googleLikeFields"][] = "descri_barrio";



$tdatabarrios[".tableType"] = "list";

$tdatabarrios[".printerPageOrientation"] = 0;
$tdatabarrios[".nPrinterPageScale"] = 100;

$tdatabarrios[".nPrinterSplitRecords"] = 40;

$tdatabarrios[".geocodingEnabled"] = false;










$tdatabarrios[".pageSize"] = 20;

$tdatabarrios[".warnLeavingPages"] = true;



$tstrOrderBy = "";
$tdatabarrios[".strOrderBy"] = $tstrOrderBy;

$tdatabarrios[".orderindexes"] = array();


$tdatabarrios[".sqlHead"] = "SELECT id_barrio,  	descri_barrio";
$tdatabarrios[".sqlFrom"] = "FROM \"public\".barrios";
$tdatabarrios[".sqlWhereExpr"] = "";
$tdatabarrios[".sqlTail"] = "";










//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdatabarrios[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdatabarrios[".arrGroupsPerPage"] = $arrGPP;

$tdatabarrios[".highlightSearchResults"] = true;

$tableKeysbarrios = array();
$tableKeysbarrios[] = "id_barrio";
$tdatabarrios[".Keys"] = $tableKeysbarrios;


$tdatabarrios[".hideMobileList"] = array();




//	id_barrio
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "id_barrio";
	$fdata["GoodName"] = "id_barrio";
	$fdata["ownerTable"] = "public.barrios";
	$fdata["Label"] = GetFieldLabel("public_barrios","id_barrio");
	$fdata["FieldType"] = 3;


	
	
			

		$fdata["strField"] = "id_barrio";

		$fdata["sourceSingle"] = "id_barrio";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "id_barrio";

	
	
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


	$tdatabarrios["id_barrio"] = $fdata;
		$tdatabarrios[".searchableFields"][] = "id_barrio";
//	descri_barrio
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "descri_barrio";
	$fdata["GoodName"] = "descri_barrio";
	$fdata["ownerTable"] = "public.barrios";
	$fdata["Label"] = GetFieldLabel("public_barrios","descri_barrio");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "descri_barrio";

		$fdata["sourceSingle"] = "descri_barrio";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "descri_barrio";

	
	
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


	$tdatabarrios["descri_barrio"] = $fdata;
		$tdatabarrios[".searchableFields"][] = "descri_barrio";


$tables_data["public.barrios"]=&$tdatabarrios;
$field_labels["public_barrios"] = &$fieldLabelsbarrios;
$fieldToolTips["public_barrios"] = &$fieldToolTipsbarrios;
$placeHolders["public_barrios"] = &$placeHoldersbarrios;
$page_titles["public_barrios"] = &$pageTitlesbarrios;

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)

//if !@TABLE.bReportCrossTab

$detailsTablesData["public.barrios"] = array();
//	public.usuarios
	
	

		$dIndex = 0;
	$detailsParam = array();
	$detailsParam["dDataSourceTable"]="public.usuarios";
		$detailsParam["dOriginalTable"] = "public.usuarios";



		
		$detailsParam["dType"]=PAGE_LIST;
	$detailsParam["dShortTable"] = "usuarios";
	$detailsParam["dCaptionTable"] = GetTableCaption("public_usuarios");
	$detailsParam["masterKeys"] =array();
	$detailsParam["detailKeys"] =array();


		
	$detailsTablesData["public.barrios"][$dIndex] = $detailsParam;

	
		$detailsTablesData["public.barrios"][$dIndex]["masterKeys"] = array();

	$detailsTablesData["public.barrios"][$dIndex]["masterKeys"][]="id_barrio";

				$detailsTablesData["public.barrios"][$dIndex]["detailKeys"] = array();

	$detailsTablesData["public.barrios"][$dIndex]["detailKeys"][]="id_barrio";
//endif

// tables which are master tables for current table (detail)
$masterTablesData["public.barrios"] = array();



// -----------------end  prepare master-details data arrays ------------------------------//



require_once(getabspath("classes/sql.php"));











function createSqlQuery_barrios()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "id_barrio,  	descri_barrio";
$proto0["m_strFrom"] = "FROM \"public\".barrios";
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
	"m_strName" => "id_barrio",
	"m_strTable" => "public.barrios",
	"m_srcTableName" => "public.barrios"
));

$proto6["m_sql"] = "id_barrio";
$proto6["m_srcTableName"] = "public.barrios";
$proto6["m_expr"]=$obj;
$proto6["m_alias"] = "";
$obj = new SQLFieldListItem($proto6);

$proto0["m_fieldlist"][]=$obj;
						$proto8=array();
			$obj = new SQLField(array(
	"m_strName" => "descri_barrio",
	"m_strTable" => "public.barrios",
	"m_srcTableName" => "public.barrios"
));

$proto8["m_sql"] = "descri_barrio";
$proto8["m_srcTableName"] = "public.barrios";
$proto8["m_expr"]=$obj;
$proto8["m_alias"] = "";
$obj = new SQLFieldListItem($proto8);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto10=array();
$proto10["m_link"] = "SQLL_MAIN";
			$proto11=array();
$proto11["m_strName"] = "public.barrios";
$proto11["m_srcTableName"] = "public.barrios";
$proto11["m_columns"] = array();
$proto11["m_columns"][] = "id_barrio";
$proto11["m_columns"][] = "descri_barrio";
$obj = new SQLTable($proto11);

$proto10["m_table"] = $obj;
$proto10["m_sql"] = "\"public\".barrios";
$proto10["m_alias"] = "";
$proto10["m_srcTableName"] = "public.barrios";
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
$proto0["m_srcTableName"]="public.barrios";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_barrios = createSqlQuery_barrios();


	
		;

		

$tdatabarrios[".sqlquery"] = $queryData_barrios;



$tableEvents["public.barrios"] = new eventsBase;
$tdatabarrios[".hasEvents"] = false;

?>