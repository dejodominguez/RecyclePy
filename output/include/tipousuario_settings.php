<?php
$tdatatipousuario = array();
$tdatatipousuario[".searchableFields"] = array();
$tdatatipousuario[".ShortName"] = "tipousuario";
$tdatatipousuario[".OwnerID"] = "";
$tdatatipousuario[".OriginalTable"] = "public.TipoUsuario";


$tdatatipousuario[".pagesByType"] = my_json_decode( "{\"add\":[\"add\"],\"edit\":[\"edit\"],\"export\":[\"export\"],\"import\":[\"import\"],\"list\":[\"list\"],\"masterlist\":[\"masterlist\"],\"masterprint\":[\"masterprint\"],\"print\":[\"print\"],\"search\":[\"search\"],\"view\":[\"view\"]}" );
$tdatatipousuario[".originalPagesByType"] = $tdatatipousuario[".pagesByType"];
$tdatatipousuario[".pages"] = types2pages( my_json_decode( "{\"add\":[\"add\"],\"edit\":[\"edit\"],\"export\":[\"export\"],\"import\":[\"import\"],\"list\":[\"list\"],\"masterlist\":[\"masterlist\"],\"masterprint\":[\"masterprint\"],\"print\":[\"print\"],\"search\":[\"search\"],\"view\":[\"view\"]}" ) );
$tdatatipousuario[".originalPages"] = $tdatatipousuario[".pages"];
$tdatatipousuario[".defaultPages"] = my_json_decode( "{\"add\":\"add\",\"edit\":\"edit\",\"export\":\"export\",\"import\":\"import\",\"list\":\"list\",\"masterlist\":\"masterlist\",\"masterprint\":\"masterprint\",\"print\":\"print\",\"search\":\"search\",\"view\":\"view\"}" );
$tdatatipousuario[".originalDefaultPages"] = $tdatatipousuario[".defaultPages"];

//	field labels
$fieldLabelstipousuario = array();
$fieldToolTipstipousuario = array();
$pageTitlestipousuario = array();
$placeHolderstipousuario = array();

if(mlang_getcurrentlang()=="Spanish")
{
	$fieldLabelstipousuario["Spanish"] = array();
	$fieldToolTipstipousuario["Spanish"] = array();
	$placeHolderstipousuario["Spanish"] = array();
	$pageTitlestipousuario["Spanish"] = array();
	$fieldLabelstipousuario["Spanish"]["IdTipoUsu"] = "Id Tipo Usu";
	$fieldToolTipstipousuario["Spanish"]["IdTipoUsu"] = "";
	$placeHolderstipousuario["Spanish"]["IdTipoUsu"] = "";
	$fieldLabelstipousuario["Spanish"]["DescriTipoUsu"] = "Descri Tipo Usu";
	$fieldToolTipstipousuario["Spanish"]["DescriTipoUsu"] = "";
	$placeHolderstipousuario["Spanish"]["DescriTipoUsu"] = "";
	if (count($fieldToolTipstipousuario["Spanish"]))
		$tdatatipousuario[".isUseToolTips"] = true;
}


	$tdatatipousuario[".NCSearch"] = true;



$tdatatipousuario[".shortTableName"] = "tipousuario";
$tdatatipousuario[".nSecOptions"] = 0;

$tdatatipousuario[".mainTableOwnerID"] = "";
$tdatatipousuario[".entityType"] = 0;
$tdatatipousuario[".connId"] = "RealEstate_at_localhost";


$tdatatipousuario[".strOriginalTableName"] = "public.TipoUsuario";

	



$tdatatipousuario[".showAddInPopup"] = false;

$tdatatipousuario[".showEditInPopup"] = false;

$tdatatipousuario[".showViewInPopup"] = false;

$tdatatipousuario[".listAjax"] = false;
//	temporary
//$tdatatipousuario[".listAjax"] = false;

	$tdatatipousuario[".audit"] = false;

	$tdatatipousuario[".locking"] = false;


$pages = $tdatatipousuario[".defaultPages"];

if( $pages[PAGE_EDIT] ) {
	$tdatatipousuario[".edit"] = true;
	$tdatatipousuario[".afterEditAction"] = 1;
	$tdatatipousuario[".closePopupAfterEdit"] = 1;
	$tdatatipousuario[".afterEditActionDetTable"] = "";
}

if( $pages[PAGE_ADD] ) {
$tdatatipousuario[".add"] = true;
$tdatatipousuario[".afterAddAction"] = 1;
$tdatatipousuario[".closePopupAfterAdd"] = 1;
$tdatatipousuario[".afterAddActionDetTable"] = "";
}

if( $pages[PAGE_LIST] ) {
	$tdatatipousuario[".list"] = true;
}



$tdatatipousuario[".strSortControlSettingsJSON"] = "";




if( $pages[PAGE_VIEW] ) {
$tdatatipousuario[".view"] = true;
}

if( $pages[PAGE_IMPORT] ) {
$tdatatipousuario[".import"] = true;
}

if( $pages[PAGE_EXPORT] ) {
$tdatatipousuario[".exportTo"] = true;
}

if( $pages[PAGE_PRINT] ) {
$tdatatipousuario[".printFriendly"] = true;
}



$tdatatipousuario[".showSimpleSearchOptions"] = true; // temp fix #13449

// Allow Show/Hide Fields in GRID
$tdatatipousuario[".allowShowHideFields"] = true; // temp fix #13449
//

// Allow Fields Reordering in GRID
$tdatatipousuario[".allowFieldsReordering"] = true; // temp fix #13449
//

$tdatatipousuario[".isUseAjaxSuggest"] = true;

$tdatatipousuario[".rowHighlite"] = true;



			

$tdatatipousuario[".ajaxCodeSnippetAdded"] = false;

$tdatatipousuario[".buttonsAdded"] = false;

$tdatatipousuario[".addPageEvents"] = false;

// use timepicker for search panel
$tdatatipousuario[".isUseTimeForSearch"] = false;


$tdatatipousuario[".badgeColor"] = "E07878";


$tdatatipousuario[".allSearchFields"] = array();
$tdatatipousuario[".filterFields"] = array();
$tdatatipousuario[".requiredSearchFields"] = array();

$tdatatipousuario[".googleLikeFields"] = array();
$tdatatipousuario[".googleLikeFields"][] = "IdTipoUsu";
$tdatatipousuario[".googleLikeFields"][] = "DescriTipoUsu";



$tdatatipousuario[".tableType"] = "list";

$tdatatipousuario[".printerPageOrientation"] = 0;
$tdatatipousuario[".nPrinterPageScale"] = 100;

$tdatatipousuario[".nPrinterSplitRecords"] = 40;

$tdatatipousuario[".geocodingEnabled"] = false;










$tdatatipousuario[".pageSize"] = 20;

$tdatatipousuario[".warnLeavingPages"] = true;



$tstrOrderBy = "";
$tdatatipousuario[".strOrderBy"] = $tstrOrderBy;

$tdatatipousuario[".orderindexes"] = array();


$tdatatipousuario[".sqlHead"] = "SELECT \"IdTipoUsu\",  	\"DescriTipoUsu\"";
$tdatatipousuario[".sqlFrom"] = "FROM \"public\".\"TipoUsuario\"";
$tdatatipousuario[".sqlWhereExpr"] = "";
$tdatatipousuario[".sqlTail"] = "";










//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdatatipousuario[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdatatipousuario[".arrGroupsPerPage"] = $arrGPP;

$tdatatipousuario[".highlightSearchResults"] = true;

$tableKeystipousuario = array();
$tableKeystipousuario[] = "IdTipoUsu";
$tdatatipousuario[".Keys"] = $tableKeystipousuario;


$tdatatipousuario[".hideMobileList"] = array();




//	IdTipoUsu
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "IdTipoUsu";
	$fdata["GoodName"] = "IdTipoUsu";
	$fdata["ownerTable"] = "public.TipoUsuario";
	$fdata["Label"] = GetFieldLabel("public_TipoUsuario","IdTipoUsu");
	$fdata["FieldType"] = 3;


	
	
			

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


	$tdatatipousuario["IdTipoUsu"] = $fdata;
		$tdatatipousuario[".searchableFields"][] = "IdTipoUsu";
//	DescriTipoUsu
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "DescriTipoUsu";
	$fdata["GoodName"] = "DescriTipoUsu";
	$fdata["ownerTable"] = "public.TipoUsuario";
	$fdata["Label"] = GetFieldLabel("public_TipoUsuario","DescriTipoUsu");
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


	$tdatatipousuario["DescriTipoUsu"] = $fdata;
		$tdatatipousuario[".searchableFields"][] = "DescriTipoUsu";


$tables_data["public.TipoUsuario"]=&$tdatatipousuario;
$field_labels["public_TipoUsuario"] = &$fieldLabelstipousuario;
$fieldToolTips["public_TipoUsuario"] = &$fieldToolTipstipousuario;
$placeHolders["public_TipoUsuario"] = &$placeHolderstipousuario;
$page_titles["public_TipoUsuario"] = &$pageTitlestipousuario;

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)

//if !@TABLE.bReportCrossTab

$detailsTablesData["public.TipoUsuario"] = array();
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


		
	$detailsTablesData["public.TipoUsuario"][$dIndex] = $detailsParam;

	
		$detailsTablesData["public.TipoUsuario"][$dIndex]["masterKeys"] = array();

	$detailsTablesData["public.TipoUsuario"][$dIndex]["masterKeys"][]="IdTipoUsu";

				$detailsTablesData["public.TipoUsuario"][$dIndex]["detailKeys"] = array();

	$detailsTablesData["public.TipoUsuario"][$dIndex]["detailKeys"][]="IdTipoUsu";
//endif

// tables which are master tables for current table (detail)
$masterTablesData["public.TipoUsuario"] = array();



// -----------------end  prepare master-details data arrays ------------------------------//



require_once(getabspath("classes/sql.php"));











function createSqlQuery_tipousuario()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "\"IdTipoUsu\",  	\"DescriTipoUsu\"";
$proto0["m_strFrom"] = "FROM \"public\".\"TipoUsuario\"";
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
	"m_strTable" => "public.TipoUsuario",
	"m_srcTableName" => "public.TipoUsuario"
));

$proto6["m_sql"] = "\"IdTipoUsu\"";
$proto6["m_srcTableName"] = "public.TipoUsuario";
$proto6["m_expr"]=$obj;
$proto6["m_alias"] = "";
$obj = new SQLFieldListItem($proto6);

$proto0["m_fieldlist"][]=$obj;
						$proto8=array();
			$obj = new SQLField(array(
	"m_strName" => "DescriTipoUsu",
	"m_strTable" => "public.TipoUsuario",
	"m_srcTableName" => "public.TipoUsuario"
));

$proto8["m_sql"] = "\"DescriTipoUsu\"";
$proto8["m_srcTableName"] = "public.TipoUsuario";
$proto8["m_expr"]=$obj;
$proto8["m_alias"] = "";
$obj = new SQLFieldListItem($proto8);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto10=array();
$proto10["m_link"] = "SQLL_MAIN";
			$proto11=array();
$proto11["m_strName"] = "public.TipoUsuario";
$proto11["m_srcTableName"] = "public.TipoUsuario";
$proto11["m_columns"] = array();
$proto11["m_columns"][] = "IdTipoUsu";
$proto11["m_columns"][] = "DescriTipoUsu";
$obj = new SQLTable($proto11);

$proto10["m_table"] = $obj;
$proto10["m_sql"] = "\"public\".\"TipoUsuario\"";
$proto10["m_alias"] = "";
$proto10["m_srcTableName"] = "public.TipoUsuario";
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
$proto0["m_srcTableName"]="public.TipoUsuario";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_tipousuario = createSqlQuery_tipousuario();


	
		;

		

$tdatatipousuario[".sqlquery"] = $queryData_tipousuario;



$tableEvents["public.TipoUsuario"] = new eventsBase;
$tdatatipousuario[".hasEvents"] = false;

?>