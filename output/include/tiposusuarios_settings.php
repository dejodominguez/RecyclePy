<?php
$tdatatiposusuarios = array();
$tdatatiposusuarios[".searchableFields"] = array();
$tdatatiposusuarios[".ShortName"] = "tiposusuarios";
$tdatatiposusuarios[".OwnerID"] = "";
$tdatatiposusuarios[".OriginalTable"] = "public.TiposUsuarios";


$tdatatiposusuarios[".pagesByType"] = my_json_decode( "{\"add\":[\"add\"],\"edit\":[\"edit\"],\"export\":[\"export\"],\"import\":[\"import\"],\"list\":[\"list\"],\"masterlist\":[\"masterlist\"],\"masterprint\":[\"masterprint\"],\"print\":[\"print\"],\"search\":[\"search\"],\"view\":[\"view\"]}" );
$tdatatiposusuarios[".originalPagesByType"] = $tdatatiposusuarios[".pagesByType"];
$tdatatiposusuarios[".pages"] = types2pages( my_json_decode( "{\"add\":[\"add\"],\"edit\":[\"edit\"],\"export\":[\"export\"],\"import\":[\"import\"],\"list\":[\"list\"],\"masterlist\":[\"masterlist\"],\"masterprint\":[\"masterprint\"],\"print\":[\"print\"],\"search\":[\"search\"],\"view\":[\"view\"]}" ) );
$tdatatiposusuarios[".originalPages"] = $tdatatiposusuarios[".pages"];
$tdatatiposusuarios[".defaultPages"] = my_json_decode( "{\"add\":\"add\",\"edit\":\"edit\",\"export\":\"export\",\"import\":\"import\",\"list\":\"list\",\"masterlist\":\"masterlist\",\"masterprint\":\"masterprint\",\"print\":\"print\",\"search\":\"search\",\"view\":\"view\"}" );
$tdatatiposusuarios[".originalDefaultPages"] = $tdatatiposusuarios[".defaultPages"];

//	field labels
$fieldLabelstiposusuarios = array();
$fieldToolTipstiposusuarios = array();
$pageTitlestiposusuarios = array();
$placeHolderstiposusuarios = array();

if(mlang_getcurrentlang()=="Spanish")
{
	$fieldLabelstiposusuarios["Spanish"] = array();
	$fieldToolTipstiposusuarios["Spanish"] = array();
	$placeHolderstiposusuarios["Spanish"] = array();
	$pageTitlestiposusuarios["Spanish"] = array();
	$fieldLabelstiposusuarios["Spanish"]["IdTipoUsu"] = "Id Tipo Usu";
	$fieldToolTipstiposusuarios["Spanish"]["IdTipoUsu"] = "";
	$placeHolderstiposusuarios["Spanish"]["IdTipoUsu"] = "";
	$fieldLabelstiposusuarios["Spanish"]["DescriTipoUsu"] = "Descri Tipo Usu";
	$fieldToolTipstiposusuarios["Spanish"]["DescriTipoUsu"] = "";
	$placeHolderstiposusuarios["Spanish"]["DescriTipoUsu"] = "";
	if (count($fieldToolTipstiposusuarios["Spanish"]))
		$tdatatiposusuarios[".isUseToolTips"] = true;
}


	$tdatatiposusuarios[".NCSearch"] = true;



$tdatatiposusuarios[".shortTableName"] = "tiposusuarios";
$tdatatiposusuarios[".nSecOptions"] = 0;

$tdatatiposusuarios[".mainTableOwnerID"] = "";
$tdatatiposusuarios[".entityType"] = 0;
$tdatatiposusuarios[".connId"] = "RealEstate_at_localhost";


$tdatatiposusuarios[".strOriginalTableName"] = "public.TiposUsuarios";

	



$tdatatiposusuarios[".showAddInPopup"] = false;

$tdatatiposusuarios[".showEditInPopup"] = false;

$tdatatiposusuarios[".showViewInPopup"] = false;

$tdatatiposusuarios[".listAjax"] = false;
//	temporary
//$tdatatiposusuarios[".listAjax"] = false;

	$tdatatiposusuarios[".audit"] = false;

	$tdatatiposusuarios[".locking"] = false;


$pages = $tdatatiposusuarios[".defaultPages"];

if( $pages[PAGE_EDIT] ) {
	$tdatatiposusuarios[".edit"] = true;
	$tdatatiposusuarios[".afterEditAction"] = 1;
	$tdatatiposusuarios[".closePopupAfterEdit"] = 1;
	$tdatatiposusuarios[".afterEditActionDetTable"] = "";
}

if( $pages[PAGE_ADD] ) {
$tdatatiposusuarios[".add"] = true;
$tdatatiposusuarios[".afterAddAction"] = 1;
$tdatatiposusuarios[".closePopupAfterAdd"] = 1;
$tdatatiposusuarios[".afterAddActionDetTable"] = "";
}

if( $pages[PAGE_LIST] ) {
	$tdatatiposusuarios[".list"] = true;
}



$tdatatiposusuarios[".strSortControlSettingsJSON"] = "";




if( $pages[PAGE_VIEW] ) {
$tdatatiposusuarios[".view"] = true;
}

if( $pages[PAGE_IMPORT] ) {
$tdatatiposusuarios[".import"] = true;
}

if( $pages[PAGE_EXPORT] ) {
$tdatatiposusuarios[".exportTo"] = true;
}

if( $pages[PAGE_PRINT] ) {
$tdatatiposusuarios[".printFriendly"] = true;
}



$tdatatiposusuarios[".showSimpleSearchOptions"] = true; // temp fix #13449

// Allow Show/Hide Fields in GRID
$tdatatiposusuarios[".allowShowHideFields"] = true; // temp fix #13449
//

// Allow Fields Reordering in GRID
$tdatatiposusuarios[".allowFieldsReordering"] = true; // temp fix #13449
//

$tdatatiposusuarios[".isUseAjaxSuggest"] = true;

$tdatatiposusuarios[".rowHighlite"] = true;



			

$tdatatiposusuarios[".ajaxCodeSnippetAdded"] = false;

$tdatatiposusuarios[".buttonsAdded"] = false;

$tdatatiposusuarios[".addPageEvents"] = false;

// use timepicker for search panel
$tdatatiposusuarios[".isUseTimeForSearch"] = false;


$tdatatiposusuarios[".badgeColor"] = "008B8B";


$tdatatiposusuarios[".allSearchFields"] = array();
$tdatatiposusuarios[".filterFields"] = array();
$tdatatiposusuarios[".requiredSearchFields"] = array();

$tdatatiposusuarios[".googleLikeFields"] = array();
$tdatatiposusuarios[".googleLikeFields"][] = "IdTipoUsu";
$tdatatiposusuarios[".googleLikeFields"][] = "DescriTipoUsu";



$tdatatiposusuarios[".tableType"] = "list";

$tdatatiposusuarios[".printerPageOrientation"] = 0;
$tdatatiposusuarios[".nPrinterPageScale"] = 100;

$tdatatiposusuarios[".nPrinterSplitRecords"] = 40;

$tdatatiposusuarios[".geocodingEnabled"] = false;










$tdatatiposusuarios[".pageSize"] = 20;

$tdatatiposusuarios[".warnLeavingPages"] = true;



$tstrOrderBy = "";
$tdatatiposusuarios[".strOrderBy"] = $tstrOrderBy;

$tdatatiposusuarios[".orderindexes"] = array();


$tdatatiposusuarios[".sqlHead"] = "SELECT \"IdTipoUsu\",  	\"DescriTipoUsu\"";
$tdatatiposusuarios[".sqlFrom"] = "FROM \"public\".\"TiposUsuarios\"";
$tdatatiposusuarios[".sqlWhereExpr"] = "";
$tdatatiposusuarios[".sqlTail"] = "";










//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdatatiposusuarios[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdatatiposusuarios[".arrGroupsPerPage"] = $arrGPP;

$tdatatiposusuarios[".highlightSearchResults"] = true;

$tableKeystiposusuarios = array();
$tableKeystiposusuarios[] = "IdTipoUsu";
$tdatatiposusuarios[".Keys"] = $tableKeystiposusuarios;


$tdatatiposusuarios[".hideMobileList"] = array();




//	IdTipoUsu
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "IdTipoUsu";
	$fdata["GoodName"] = "IdTipoUsu";
	$fdata["ownerTable"] = "public.TiposUsuarios";
	$fdata["Label"] = GetFieldLabel("public_TiposUsuarios","IdTipoUsu");
	$fdata["FieldType"] = 3;


		$fdata["AutoInc"] = true;

	
			

		$fdata["strField"] = "IdTipoUsu";

		$fdata["sourceSingle"] = "IdTipoUsu";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "\"IdTipoUsu\"";

	
	
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


	$tdatatiposusuarios["IdTipoUsu"] = $fdata;
		$tdatatiposusuarios[".searchableFields"][] = "IdTipoUsu";
//	DescriTipoUsu
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "DescriTipoUsu";
	$fdata["GoodName"] = "DescriTipoUsu";
	$fdata["ownerTable"] = "public.TiposUsuarios";
	$fdata["Label"] = GetFieldLabel("public_TiposUsuarios","DescriTipoUsu");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "DescriTipoUsu";

		$fdata["sourceSingle"] = "DescriTipoUsu";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "\"DescriTipoUsu\"";

	
	
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


	$tdatatiposusuarios["DescriTipoUsu"] = $fdata;
		$tdatatiposusuarios[".searchableFields"][] = "DescriTipoUsu";


$tables_data["public.TiposUsuarios"]=&$tdatatiposusuarios;
$field_labels["public_TiposUsuarios"] = &$fieldLabelstiposusuarios;
$fieldToolTips["public_TiposUsuarios"] = &$fieldToolTipstiposusuarios;
$placeHolders["public_TiposUsuarios"] = &$placeHolderstiposusuarios;
$page_titles["public_TiposUsuarios"] = &$pageTitlestiposusuarios;

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)

//if !@TABLE.bReportCrossTab

$detailsTablesData["public.TiposUsuarios"] = array();
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


		
	$detailsTablesData["public.TiposUsuarios"][$dIndex] = $detailsParam;

	
		$detailsTablesData["public.TiposUsuarios"][$dIndex]["masterKeys"] = array();

	$detailsTablesData["public.TiposUsuarios"][$dIndex]["masterKeys"][]="IdTipoUsu";

				$detailsTablesData["public.TiposUsuarios"][$dIndex]["detailKeys"] = array();

	$detailsTablesData["public.TiposUsuarios"][$dIndex]["detailKeys"][]="IdTipoUsu";
//endif

// tables which are master tables for current table (detail)
$masterTablesData["public.TiposUsuarios"] = array();



// -----------------end  prepare master-details data arrays ------------------------------//



require_once(getabspath("classes/sql.php"));











function createSqlQuery_tiposusuarios()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "\"IdTipoUsu\",  	\"DescriTipoUsu\"";
$proto0["m_strFrom"] = "FROM \"public\".\"TiposUsuarios\"";
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
	"m_strName" => "IdTipoUsu",
	"m_strTable" => "public.TiposUsuarios",
	"m_srcTableName" => "public.TiposUsuarios"
));

$proto6["m_sql"] = "\"IdTipoUsu\"";
$proto6["m_srcTableName"] = "public.TiposUsuarios";
$proto6["m_expr"]=$obj;
$proto6["m_alias"] = "";
$obj = new SQLFieldListItem($proto6);

$proto0["m_fieldlist"][]=$obj;
						$proto8=array();
			$obj = new SQLField(array(
	"m_strName" => "DescriTipoUsu",
	"m_strTable" => "public.TiposUsuarios",
	"m_srcTableName" => "public.TiposUsuarios"
));

$proto8["m_sql"] = "\"DescriTipoUsu\"";
$proto8["m_srcTableName"] = "public.TiposUsuarios";
$proto8["m_expr"]=$obj;
$proto8["m_alias"] = "";
$obj = new SQLFieldListItem($proto8);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto10=array();
$proto10["m_link"] = "SQLL_MAIN";
			$proto11=array();
$proto11["m_strName"] = "public.TiposUsuarios";
$proto11["m_srcTableName"] = "public.TiposUsuarios";
$proto11["m_columns"] = array();
$proto11["m_columns"][] = "IdTipoUsu";
$proto11["m_columns"][] = "DescriTipoUsu";
$obj = new SQLTable($proto11);

$proto10["m_table"] = $obj;
$proto10["m_sql"] = "\"public\".\"TiposUsuarios\"";
$proto10["m_alias"] = "";
$proto10["m_srcTableName"] = "public.TiposUsuarios";
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
$proto0["m_srcTableName"]="public.TiposUsuarios";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_tiposusuarios = createSqlQuery_tiposusuarios();


	
		;

		

$tdatatiposusuarios[".sqlquery"] = $queryData_tiposusuarios;



$tableEvents["public.TiposUsuarios"] = new eventsBase;
$tdatatiposusuarios[".hasEvents"] = false;

?>