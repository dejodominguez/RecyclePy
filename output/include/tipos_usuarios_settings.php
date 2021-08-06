<?php
$tdatatipos_usuarios = array();
$tdatatipos_usuarios[".searchableFields"] = array();
$tdatatipos_usuarios[".ShortName"] = "tipos_usuarios";
$tdatatipos_usuarios[".OwnerID"] = "";
$tdatatipos_usuarios[".OriginalTable"] = "public.tipos_usuarios";


$tdatatipos_usuarios[".pagesByType"] = my_json_decode( "{\"add\":[\"add\"],\"edit\":[\"edit\"],\"export\":[\"export\"],\"import\":[\"import\"],\"list\":[\"list\"],\"masterlist\":[\"masterlist\"],\"masterprint\":[\"masterprint\"],\"print\":[\"print\"],\"search\":[\"search\"],\"view\":[\"view\"]}" );
$tdatatipos_usuarios[".originalPagesByType"] = $tdatatipos_usuarios[".pagesByType"];
$tdatatipos_usuarios[".pages"] = types2pages( my_json_decode( "{\"add\":[\"add\"],\"edit\":[\"edit\"],\"export\":[\"export\"],\"import\":[\"import\"],\"list\":[\"list\"],\"masterlist\":[\"masterlist\"],\"masterprint\":[\"masterprint\"],\"print\":[\"print\"],\"search\":[\"search\"],\"view\":[\"view\"]}" ) );
$tdatatipos_usuarios[".originalPages"] = $tdatatipos_usuarios[".pages"];
$tdatatipos_usuarios[".defaultPages"] = my_json_decode( "{\"add\":\"add\",\"edit\":\"edit\",\"export\":\"export\",\"import\":\"import\",\"list\":\"list\",\"masterlist\":\"masterlist\",\"masterprint\":\"masterprint\",\"print\":\"print\",\"search\":\"search\",\"view\":\"view\"}" );
$tdatatipos_usuarios[".originalDefaultPages"] = $tdatatipos_usuarios[".defaultPages"];

//	field labels
$fieldLabelstipos_usuarios = array();
$fieldToolTipstipos_usuarios = array();
$pageTitlestipos_usuarios = array();
$placeHolderstipos_usuarios = array();

if(mlang_getcurrentlang()=="Spanish")
{
	$fieldLabelstipos_usuarios["Spanish"] = array();
	$fieldToolTipstipos_usuarios["Spanish"] = array();
	$placeHolderstipos_usuarios["Spanish"] = array();
	$pageTitlestipos_usuarios["Spanish"] = array();
	$fieldLabelstipos_usuarios["Spanish"]["id_tipo_usu"] = "Código";
	$fieldToolTipstipos_usuarios["Spanish"]["id_tipo_usu"] = "";
	$placeHolderstipos_usuarios["Spanish"]["id_tipo_usu"] = "";
	$fieldLabelstipos_usuarios["Spanish"]["descri_tipo_usu"] = "Descripción";
	$fieldToolTipstipos_usuarios["Spanish"]["descri_tipo_usu"] = "";
	$placeHolderstipos_usuarios["Spanish"]["descri_tipo_usu"] = "";
	if (count($fieldToolTipstipos_usuarios["Spanish"]))
		$tdatatipos_usuarios[".isUseToolTips"] = true;
}


	$tdatatipos_usuarios[".NCSearch"] = true;



$tdatatipos_usuarios[".shortTableName"] = "tipos_usuarios";
$tdatatipos_usuarios[".nSecOptions"] = 0;

$tdatatipos_usuarios[".mainTableOwnerID"] = "";
$tdatatipos_usuarios[".entityType"] = 0;
$tdatatipos_usuarios[".connId"] = "RealEstate_at_localhost";


$tdatatipos_usuarios[".strOriginalTableName"] = "public.tipos_usuarios";

	



$tdatatipos_usuarios[".showAddInPopup"] = false;

$tdatatipos_usuarios[".showEditInPopup"] = false;

$tdatatipos_usuarios[".showViewInPopup"] = false;

$tdatatipos_usuarios[".listAjax"] = false;
//	temporary
//$tdatatipos_usuarios[".listAjax"] = false;

	$tdatatipos_usuarios[".audit"] = false;

	$tdatatipos_usuarios[".locking"] = false;


$pages = $tdatatipos_usuarios[".defaultPages"];

if( $pages[PAGE_EDIT] ) {
	$tdatatipos_usuarios[".edit"] = true;
	$tdatatipos_usuarios[".afterEditAction"] = 1;
	$tdatatipos_usuarios[".closePopupAfterEdit"] = 1;
	$tdatatipos_usuarios[".afterEditActionDetTable"] = "";
}

if( $pages[PAGE_ADD] ) {
$tdatatipos_usuarios[".add"] = true;
$tdatatipos_usuarios[".afterAddAction"] = 1;
$tdatatipos_usuarios[".closePopupAfterAdd"] = 1;
$tdatatipos_usuarios[".afterAddActionDetTable"] = "";
}

if( $pages[PAGE_LIST] ) {
	$tdatatipos_usuarios[".list"] = true;
}



$tdatatipos_usuarios[".strSortControlSettingsJSON"] = "";




if( $pages[PAGE_VIEW] ) {
$tdatatipos_usuarios[".view"] = true;
}

if( $pages[PAGE_IMPORT] ) {
$tdatatipos_usuarios[".import"] = true;
}

if( $pages[PAGE_EXPORT] ) {
$tdatatipos_usuarios[".exportTo"] = true;
}

if( $pages[PAGE_PRINT] ) {
$tdatatipos_usuarios[".printFriendly"] = true;
}



$tdatatipos_usuarios[".showSimpleSearchOptions"] = true; // temp fix #13449

// Allow Show/Hide Fields in GRID
$tdatatipos_usuarios[".allowShowHideFields"] = true; // temp fix #13449
//

// Allow Fields Reordering in GRID
$tdatatipos_usuarios[".allowFieldsReordering"] = true; // temp fix #13449
//

$tdatatipos_usuarios[".isUseAjaxSuggest"] = true;

$tdatatipos_usuarios[".rowHighlite"] = true;



			

$tdatatipos_usuarios[".ajaxCodeSnippetAdded"] = false;

$tdatatipos_usuarios[".buttonsAdded"] = false;

$tdatatipos_usuarios[".addPageEvents"] = false;

// use timepicker for search panel
$tdatatipos_usuarios[".isUseTimeForSearch"] = false;


$tdatatipos_usuarios[".badgeColor"] = "E67349";


$tdatatipos_usuarios[".allSearchFields"] = array();
$tdatatipos_usuarios[".filterFields"] = array();
$tdatatipos_usuarios[".requiredSearchFields"] = array();

$tdatatipos_usuarios[".googleLikeFields"] = array();
$tdatatipos_usuarios[".googleLikeFields"][] = "id_tipo_usu";
$tdatatipos_usuarios[".googleLikeFields"][] = "descri_tipo_usu";



$tdatatipos_usuarios[".tableType"] = "list";

$tdatatipos_usuarios[".printerPageOrientation"] = 0;
$tdatatipos_usuarios[".nPrinterPageScale"] = 100;

$tdatatipos_usuarios[".nPrinterSplitRecords"] = 40;

$tdatatipos_usuarios[".geocodingEnabled"] = false;










$tdatatipos_usuarios[".pageSize"] = 20;

$tdatatipos_usuarios[".warnLeavingPages"] = true;



$tstrOrderBy = "";
$tdatatipos_usuarios[".strOrderBy"] = $tstrOrderBy;

$tdatatipos_usuarios[".orderindexes"] = array();


$tdatatipos_usuarios[".sqlHead"] = "SELECT id_tipo_usu,  	descri_tipo_usu";
$tdatatipos_usuarios[".sqlFrom"] = "FROM \"public\".tipos_usuarios";
$tdatatipos_usuarios[".sqlWhereExpr"] = "";
$tdatatipos_usuarios[".sqlTail"] = "";










//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdatatipos_usuarios[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdatatipos_usuarios[".arrGroupsPerPage"] = $arrGPP;

$tdatatipos_usuarios[".highlightSearchResults"] = true;

$tableKeystipos_usuarios = array();
$tableKeystipos_usuarios[] = "id_tipo_usu";
$tdatatipos_usuarios[".Keys"] = $tableKeystipos_usuarios;


$tdatatipos_usuarios[".hideMobileList"] = array();




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


	$tdatatipos_usuarios["id_tipo_usu"] = $fdata;
		$tdatatipos_usuarios[".searchableFields"][] = "id_tipo_usu";
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


	$tdatatipos_usuarios["descri_tipo_usu"] = $fdata;
		$tdatatipos_usuarios[".searchableFields"][] = "descri_tipo_usu";


$tables_data["public.tipos_usuarios"]=&$tdatatipos_usuarios;
$field_labels["public_tipos_usuarios"] = &$fieldLabelstipos_usuarios;
$fieldToolTips["public_tipos_usuarios"] = &$fieldToolTipstipos_usuarios;
$placeHolders["public_tipos_usuarios"] = &$placeHolderstipos_usuarios;
$page_titles["public_tipos_usuarios"] = &$pageTitlestipos_usuarios;

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)

//if !@TABLE.bReportCrossTab

$detailsTablesData["public.tipos_usuarios"] = array();
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











function createSqlQuery_tipos_usuarios()
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
$queryData_tipos_usuarios = createSqlQuery_tipos_usuarios();


	
		;

		

$tdatatipos_usuarios[".sqlquery"] = $queryData_tipos_usuarios;



$tableEvents["public.tipos_usuarios"] = new eventsBase;
$tdatatipos_usuarios[".hasEvents"] = false;

?>