<?php
$tdataresiduos = array();
$tdataresiduos[".searchableFields"] = array();
$tdataresiduos[".ShortName"] = "residuos";
$tdataresiduos[".OwnerID"] = "";
$tdataresiduos[".OriginalTable"] = "public.residuos";


$tdataresiduos[".pagesByType"] = my_json_decode( "{\"add\":[\"add\"],\"edit\":[\"edit\"],\"export\":[\"export\"],\"import\":[\"import\"],\"list\":[\"list\"],\"masterlist\":[\"masterlist\"],\"masterprint\":[\"masterprint\"],\"print\":[\"print\"],\"search\":[\"search\"]}" );
$tdataresiduos[".originalPagesByType"] = $tdataresiduos[".pagesByType"];
$tdataresiduos[".pages"] = types2pages( my_json_decode( "{\"add\":[\"add\"],\"edit\":[\"edit\"],\"export\":[\"export\"],\"import\":[\"import\"],\"list\":[\"list\"],\"masterlist\":[\"masterlist\"],\"masterprint\":[\"masterprint\"],\"print\":[\"print\"],\"search\":[\"search\"]}" ) );
$tdataresiduos[".originalPages"] = $tdataresiduos[".pages"];
$tdataresiduos[".defaultPages"] = my_json_decode( "{\"add\":\"add\",\"edit\":\"edit\",\"export\":\"export\",\"import\":\"import\",\"list\":\"list\",\"masterlist\":\"masterlist\",\"masterprint\":\"masterprint\",\"print\":\"print\",\"search\":\"search\"}" );
$tdataresiduos[".originalDefaultPages"] = $tdataresiduos[".defaultPages"];

//	field labels
$fieldLabelsresiduos = array();
$fieldToolTipsresiduos = array();
$pageTitlesresiduos = array();
$placeHoldersresiduos = array();

if(mlang_getcurrentlang()=="Spanish")
{
	$fieldLabelsresiduos["Spanish"] = array();
	$fieldToolTipsresiduos["Spanish"] = array();
	$placeHoldersresiduos["Spanish"] = array();
	$pageTitlesresiduos["Spanish"] = array();
	$fieldLabelsresiduos["Spanish"]["descri_residuo"] = "Descripción Residuo";
	$fieldToolTipsresiduos["Spanish"]["descri_residuo"] = "";
	$placeHoldersresiduos["Spanish"]["descri_residuo"] = "";
	$fieldLabelsresiduos["Spanish"]["id_residuo"] = "Código";
	$fieldToolTipsresiduos["Spanish"]["id_residuo"] = "";
	$placeHoldersresiduos["Spanish"]["id_residuo"] = "";
	if (count($fieldToolTipsresiduos["Spanish"]))
		$tdataresiduos[".isUseToolTips"] = true;
}


	$tdataresiduos[".NCSearch"] = true;



$tdataresiduos[".shortTableName"] = "residuos";
$tdataresiduos[".nSecOptions"] = 0;

$tdataresiduos[".mainTableOwnerID"] = "";
$tdataresiduos[".entityType"] = 0;
$tdataresiduos[".connId"] = "RealEstate_at_localhost";


$tdataresiduos[".strOriginalTableName"] = "public.residuos";

	



$tdataresiduos[".showAddInPopup"] = false;

$tdataresiduos[".showEditInPopup"] = false;

$tdataresiduos[".showViewInPopup"] = false;

$tdataresiduos[".listAjax"] = false;
//	temporary
//$tdataresiduos[".listAjax"] = false;

	$tdataresiduos[".audit"] = false;

	$tdataresiduos[".locking"] = false;


$pages = $tdataresiduos[".defaultPages"];

if( $pages[PAGE_EDIT] ) {
	$tdataresiduos[".edit"] = true;
	$tdataresiduos[".afterEditAction"] = 1;
	$tdataresiduos[".closePopupAfterEdit"] = 1;
	$tdataresiduos[".afterEditActionDetTable"] = "";
}

if( $pages[PAGE_ADD] ) {
$tdataresiduos[".add"] = true;
$tdataresiduos[".afterAddAction"] = 1;
$tdataresiduos[".closePopupAfterAdd"] = 1;
$tdataresiduos[".afterAddActionDetTable"] = "";
}

if( $pages[PAGE_LIST] ) {
	$tdataresiduos[".list"] = true;
}



$tdataresiduos[".strSortControlSettingsJSON"] = "";




if( $pages[PAGE_VIEW] ) {
$tdataresiduos[".view"] = true;
}

if( $pages[PAGE_IMPORT] ) {
$tdataresiduos[".import"] = true;
}

if( $pages[PAGE_EXPORT] ) {
$tdataresiduos[".exportTo"] = true;
}

if( $pages[PAGE_PRINT] ) {
$tdataresiduos[".printFriendly"] = true;
}



$tdataresiduos[".showSimpleSearchOptions"] = true; // temp fix #13449

// Allow Show/Hide Fields in GRID
$tdataresiduos[".allowShowHideFields"] = true; // temp fix #13449
//

// Allow Fields Reordering in GRID
$tdataresiduos[".allowFieldsReordering"] = true; // temp fix #13449
//

$tdataresiduos[".isUseAjaxSuggest"] = true;

$tdataresiduos[".rowHighlite"] = true;



			

$tdataresiduos[".ajaxCodeSnippetAdded"] = false;

$tdataresiduos[".buttonsAdded"] = false;

$tdataresiduos[".addPageEvents"] = false;

// use timepicker for search panel
$tdataresiduos[".isUseTimeForSearch"] = false;


$tdataresiduos[".badgeColor"] = "9ACD32";


$tdataresiduos[".allSearchFields"] = array();
$tdataresiduos[".filterFields"] = array();
$tdataresiduos[".requiredSearchFields"] = array();

$tdataresiduos[".googleLikeFields"] = array();
$tdataresiduos[".googleLikeFields"][] = "id_residuo";
$tdataresiduos[".googleLikeFields"][] = "descri_residuo";



$tdataresiduos[".tableType"] = "list";

$tdataresiduos[".printerPageOrientation"] = 0;
$tdataresiduos[".nPrinterPageScale"] = 100;

$tdataresiduos[".nPrinterSplitRecords"] = 40;

$tdataresiduos[".geocodingEnabled"] = false;










$tdataresiduos[".pageSize"] = 20;

$tdataresiduos[".warnLeavingPages"] = true;



$tstrOrderBy = "";
$tdataresiduos[".strOrderBy"] = $tstrOrderBy;

$tdataresiduos[".orderindexes"] = array();


$tdataresiduos[".sqlHead"] = "SELECT id_residuo,  	descri_residuo";
$tdataresiduos[".sqlFrom"] = "FROM \"public\".residuos";
$tdataresiduos[".sqlWhereExpr"] = "";
$tdataresiduos[".sqlTail"] = "";










//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdataresiduos[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdataresiduos[".arrGroupsPerPage"] = $arrGPP;

$tdataresiduos[".highlightSearchResults"] = true;

$tableKeysresiduos = array();
$tableKeysresiduos[] = "id_residuo";
$tdataresiduos[".Keys"] = $tableKeysresiduos;


$tdataresiduos[".hideMobileList"] = array();




//	id_residuo
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "id_residuo";
	$fdata["GoodName"] = "id_residuo";
	$fdata["ownerTable"] = "public.residuos";
	$fdata["Label"] = GetFieldLabel("public_residuos","id_residuo");
	$fdata["FieldType"] = 3;


	
	
			

		$fdata["strField"] = "id_residuo";

		$fdata["sourceSingle"] = "id_residuo";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "id_residuo";

	
	
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


	$tdataresiduos["id_residuo"] = $fdata;
		$tdataresiduos[".searchableFields"][] = "id_residuo";
//	descri_residuo
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "descri_residuo";
	$fdata["GoodName"] = "descri_residuo";
	$fdata["ownerTable"] = "public.residuos";
	$fdata["Label"] = GetFieldLabel("public_residuos","descri_residuo");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "descri_residuo";

		$fdata["sourceSingle"] = "descri_residuo";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "descri_residuo";

	
	
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


	$tdataresiduos["descri_residuo"] = $fdata;
		$tdataresiduos[".searchableFields"][] = "descri_residuo";


$tables_data["public.residuos"]=&$tdataresiduos;
$field_labels["public_residuos"] = &$fieldLabelsresiduos;
$fieldToolTips["public_residuos"] = &$fieldToolTipsresiduos;
$placeHolders["public_residuos"] = &$placeHoldersresiduos;
$page_titles["public_residuos"] = &$pageTitlesresiduos;

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)

//if !@TABLE.bReportCrossTab

$detailsTablesData["public.residuos"] = array();
//	public.recicladores
	
	

		$dIndex = 0;
	$detailsParam = array();
	$detailsParam["dDataSourceTable"]="public.recicladores";
		$detailsParam["dOriginalTable"] = "public.recicladores";



		
		$detailsParam["dType"]=PAGE_LIST;
	$detailsParam["dShortTable"] = "recicladores";
	$detailsParam["dCaptionTable"] = GetTableCaption("public_recicladores");
	$detailsParam["masterKeys"] =array();
	$detailsParam["detailKeys"] =array();


		
	$detailsTablesData["public.residuos"][$dIndex] = $detailsParam;

	
		$detailsTablesData["public.residuos"][$dIndex]["masterKeys"] = array();

	$detailsTablesData["public.residuos"][$dIndex]["masterKeys"][]="id_residuo";

				$detailsTablesData["public.residuos"][$dIndex]["detailKeys"] = array();

	$detailsTablesData["public.residuos"][$dIndex]["detailKeys"][]="id_residuo";
//	public.gestion_pesos_residuos
	
	

		$dIndex = 1;
	$detailsParam = array();
	$detailsParam["dDataSourceTable"]="public.gestion_pesos_residuos";
		$detailsParam["dOriginalTable"] = "public.gestion_pesos_residuos";



		
		$detailsParam["dType"]=PAGE_LIST;
	$detailsParam["dShortTable"] = "gestion_pesos_residuos";
	$detailsParam["dCaptionTable"] = GetTableCaption("public_gestion_pesos_residuos");
	$detailsParam["masterKeys"] =array();
	$detailsParam["detailKeys"] =array();


		
	$detailsTablesData["public.residuos"][$dIndex] = $detailsParam;

	
		$detailsTablesData["public.residuos"][$dIndex]["masterKeys"] = array();

	$detailsTablesData["public.residuos"][$dIndex]["masterKeys"][]="id_residuo";

				$detailsTablesData["public.residuos"][$dIndex]["detailKeys"] = array();

	$detailsTablesData["public.residuos"][$dIndex]["detailKeys"][]="id_residuo";
//	public.empresas_recicladoras
	
	

		$dIndex = 2;
	$detailsParam = array();
	$detailsParam["dDataSourceTable"]="public.empresas_recicladoras";
		$detailsParam["dOriginalTable"] = "public.empresas_recicladoras";



		
		$detailsParam["dType"]=PAGE_LIST;
	$detailsParam["dShortTable"] = "public_empresas_recicladoras1";
	$detailsParam["dCaptionTable"] = GetTableCaption("public_empresas_recicladoras");
	$detailsParam["masterKeys"] =array();
	$detailsParam["detailKeys"] =array();


		
	$detailsTablesData["public.residuos"][$dIndex] = $detailsParam;

	
		$detailsTablesData["public.residuos"][$dIndex]["masterKeys"] = array();

	$detailsTablesData["public.residuos"][$dIndex]["masterKeys"][]="id_residuo";

				$detailsTablesData["public.residuos"][$dIndex]["detailKeys"] = array();

	$detailsTablesData["public.residuos"][$dIndex]["detailKeys"][]="id_residuo";
//	public.gestion_registros_origen
	
	

		$dIndex = 3;
	$detailsParam = array();
	$detailsParam["dDataSourceTable"]="public.gestion_registros_origen";
		$detailsParam["dOriginalTable"] = "public.gestion_registros_origen";



		
		$detailsParam["dType"]=PAGE_LIST;
	$detailsParam["dShortTable"] = "gestion_registros_origen";
	$detailsParam["dCaptionTable"] = GetTableCaption("public_gestion_registros_origen");
	$detailsParam["masterKeys"] =array();
	$detailsParam["detailKeys"] =array();


		
	$detailsTablesData["public.residuos"][$dIndex] = $detailsParam;

	
		$detailsTablesData["public.residuos"][$dIndex]["masterKeys"] = array();

	$detailsTablesData["public.residuos"][$dIndex]["masterKeys"][]="id_residuo";

				$detailsTablesData["public.residuos"][$dIndex]["detailKeys"] = array();

	$detailsTablesData["public.residuos"][$dIndex]["detailKeys"][]="id_residuo";
//endif

// tables which are master tables for current table (detail)
$masterTablesData["public.residuos"] = array();



// -----------------end  prepare master-details data arrays ------------------------------//



require_once(getabspath("classes/sql.php"));











function createSqlQuery_residuos()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "id_residuo,  	descri_residuo";
$proto0["m_strFrom"] = "FROM \"public\".residuos";
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
	"m_strName" => "id_residuo",
	"m_strTable" => "public.residuos",
	"m_srcTableName" => "public.residuos"
));

$proto6["m_sql"] = "id_residuo";
$proto6["m_srcTableName"] = "public.residuos";
$proto6["m_expr"]=$obj;
$proto6["m_alias"] = "";
$obj = new SQLFieldListItem($proto6);

$proto0["m_fieldlist"][]=$obj;
						$proto8=array();
			$obj = new SQLField(array(
	"m_strName" => "descri_residuo",
	"m_strTable" => "public.residuos",
	"m_srcTableName" => "public.residuos"
));

$proto8["m_sql"] = "descri_residuo";
$proto8["m_srcTableName"] = "public.residuos";
$proto8["m_expr"]=$obj;
$proto8["m_alias"] = "";
$obj = new SQLFieldListItem($proto8);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto10=array();
$proto10["m_link"] = "SQLL_MAIN";
			$proto11=array();
$proto11["m_strName"] = "public.residuos";
$proto11["m_srcTableName"] = "public.residuos";
$proto11["m_columns"] = array();
$proto11["m_columns"][] = "id_residuo";
$proto11["m_columns"][] = "descri_residuo";
$obj = new SQLTable($proto11);

$proto10["m_table"] = $obj;
$proto10["m_sql"] = "\"public\".residuos";
$proto10["m_alias"] = "";
$proto10["m_srcTableName"] = "public.residuos";
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
$proto0["m_srcTableName"]="public.residuos";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_residuos = createSqlQuery_residuos();


	
		;

		

$tdataresiduos[".sqlquery"] = $queryData_residuos;



$tableEvents["public.residuos"] = new eventsBase;
$tdataresiduos[".hasEvents"] = false;

?>