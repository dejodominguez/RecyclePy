<?php
$tdatapublic_gestion_pesos_residuos_ven = array();
$tdatapublic_gestion_pesos_residuos_ven[".searchableFields"] = array();
$tdatapublic_gestion_pesos_residuos_ven[".ShortName"] = "public_gestion_pesos_residuos_ven";
$tdatapublic_gestion_pesos_residuos_ven[".OwnerID"] = "";
$tdatapublic_gestion_pesos_residuos_ven[".OriginalTable"] = "public.gestion_pesos_residuos";


$tdatapublic_gestion_pesos_residuos_ven[".pagesByType"] = my_json_decode( "{\"add\":[\"add\"],\"edit\":[\"edit\"],\"export\":[\"export\"],\"import\":[\"import\"],\"list\":[\"list\"],\"masterlist\":[\"masterlist\"],\"masterprint\":[\"masterprint\"],\"print\":[\"print\"],\"search\":[\"search\"],\"view\":[\"view\"]}" );
$tdatapublic_gestion_pesos_residuos_ven[".originalPagesByType"] = $tdatapublic_gestion_pesos_residuos_ven[".pagesByType"];
$tdatapublic_gestion_pesos_residuos_ven[".pages"] = types2pages( my_json_decode( "{\"add\":[\"add\"],\"edit\":[\"edit\"],\"export\":[\"export\"],\"import\":[\"import\"],\"list\":[\"list\"],\"masterlist\":[\"masterlist\"],\"masterprint\":[\"masterprint\"],\"print\":[\"print\"],\"search\":[\"search\"],\"view\":[\"view\"]}" ) );
$tdatapublic_gestion_pesos_residuos_ven[".originalPages"] = $tdatapublic_gestion_pesos_residuos_ven[".pages"];
$tdatapublic_gestion_pesos_residuos_ven[".defaultPages"] = my_json_decode( "{\"add\":\"add\",\"edit\":\"edit\",\"export\":\"export\",\"import\":\"import\",\"list\":\"list\",\"masterlist\":\"masterlist\",\"masterprint\":\"masterprint\",\"print\":\"print\",\"search\":\"search\",\"view\":\"view\"}" );
$tdatapublic_gestion_pesos_residuos_ven[".originalDefaultPages"] = $tdatapublic_gestion_pesos_residuos_ven[".defaultPages"];

//	field labels
$fieldLabelspublic_gestion_pesos_residuos_ven = array();
$fieldToolTipspublic_gestion_pesos_residuos_ven = array();
$pageTitlespublic_gestion_pesos_residuos_ven = array();
$placeHolderspublic_gestion_pesos_residuos_ven = array();

if(mlang_getcurrentlang()=="Spanish")
{
	$fieldLabelspublic_gestion_pesos_residuos_ven["Spanish"] = array();
	$fieldToolTipspublic_gestion_pesos_residuos_ven["Spanish"] = array();
	$placeHolderspublic_gestion_pesos_residuos_ven["Spanish"] = array();
	$pageTitlespublic_gestion_pesos_residuos_ven["Spanish"] = array();
	$fieldLabelspublic_gestion_pesos_residuos_ven["Spanish"]["id_ges_pes_residuo"] = "Id Ges Pes Residuo";
	$fieldToolTipspublic_gestion_pesos_residuos_ven["Spanish"]["id_ges_pes_residuo"] = "";
	$placeHolderspublic_gestion_pesos_residuos_ven["Spanish"]["id_ges_pes_residuo"] = "";
	$fieldLabelspublic_gestion_pesos_residuos_ven["Spanish"]["concat"] = "Concat";
	$fieldToolTipspublic_gestion_pesos_residuos_ven["Spanish"]["concat"] = "";
	$placeHolderspublic_gestion_pesos_residuos_ven["Spanish"]["concat"] = "";
	$fieldLabelspublic_gestion_pesos_residuos_ven["Spanish"]["kilo_residuo"] = "Kilo Residuo";
	$fieldToolTipspublic_gestion_pesos_residuos_ven["Spanish"]["kilo_residuo"] = "";
	$placeHolderspublic_gestion_pesos_residuos_ven["Spanish"]["kilo_residuo"] = "";
	if (count($fieldToolTipspublic_gestion_pesos_residuos_ven["Spanish"]))
		$tdatapublic_gestion_pesos_residuos_ven[".isUseToolTips"] = true;
}


	$tdatapublic_gestion_pesos_residuos_ven[".NCSearch"] = true;



$tdatapublic_gestion_pesos_residuos_ven[".shortTableName"] = "public_gestion_pesos_residuos_ven";
$tdatapublic_gestion_pesos_residuos_ven[".nSecOptions"] = 0;

$tdatapublic_gestion_pesos_residuos_ven[".mainTableOwnerID"] = "";
$tdatapublic_gestion_pesos_residuos_ven[".entityType"] = 1;
$tdatapublic_gestion_pesos_residuos_ven[".connId"] = "RealEstate_at_localhost";


$tdatapublic_gestion_pesos_residuos_ven[".strOriginalTableName"] = "public.gestion_pesos_residuos";

	



$tdatapublic_gestion_pesos_residuos_ven[".showAddInPopup"] = false;

$tdatapublic_gestion_pesos_residuos_ven[".showEditInPopup"] = false;

$tdatapublic_gestion_pesos_residuos_ven[".showViewInPopup"] = false;

$tdatapublic_gestion_pesos_residuos_ven[".listAjax"] = false;
//	temporary
//$tdatapublic_gestion_pesos_residuos_ven[".listAjax"] = false;

	$tdatapublic_gestion_pesos_residuos_ven[".audit"] = false;

	$tdatapublic_gestion_pesos_residuos_ven[".locking"] = false;


$pages = $tdatapublic_gestion_pesos_residuos_ven[".defaultPages"];

if( $pages[PAGE_EDIT] ) {
	$tdatapublic_gestion_pesos_residuos_ven[".edit"] = true;
	$tdatapublic_gestion_pesos_residuos_ven[".afterEditAction"] = 1;
	$tdatapublic_gestion_pesos_residuos_ven[".closePopupAfterEdit"] = 1;
	$tdatapublic_gestion_pesos_residuos_ven[".afterEditActionDetTable"] = "";
}

if( $pages[PAGE_ADD] ) {
$tdatapublic_gestion_pesos_residuos_ven[".add"] = true;
$tdatapublic_gestion_pesos_residuos_ven[".afterAddAction"] = 1;
$tdatapublic_gestion_pesos_residuos_ven[".closePopupAfterAdd"] = 1;
$tdatapublic_gestion_pesos_residuos_ven[".afterAddActionDetTable"] = "";
}

if( $pages[PAGE_LIST] ) {
	$tdatapublic_gestion_pesos_residuos_ven[".list"] = true;
}



$tdatapublic_gestion_pesos_residuos_ven[".strSortControlSettingsJSON"] = "";




if( $pages[PAGE_VIEW] ) {
$tdatapublic_gestion_pesos_residuos_ven[".view"] = true;
}

if( $pages[PAGE_IMPORT] ) {
$tdatapublic_gestion_pesos_residuos_ven[".import"] = true;
}

if( $pages[PAGE_EXPORT] ) {
$tdatapublic_gestion_pesos_residuos_ven[".exportTo"] = true;
}

if( $pages[PAGE_PRINT] ) {
$tdatapublic_gestion_pesos_residuos_ven[".printFriendly"] = true;
}



$tdatapublic_gestion_pesos_residuos_ven[".showSimpleSearchOptions"] = true; // temp fix #13449

// Allow Show/Hide Fields in GRID
$tdatapublic_gestion_pesos_residuos_ven[".allowShowHideFields"] = true; // temp fix #13449
//

// Allow Fields Reordering in GRID
$tdatapublic_gestion_pesos_residuos_ven[".allowFieldsReordering"] = true; // temp fix #13449
//

$tdatapublic_gestion_pesos_residuos_ven[".isUseAjaxSuggest"] = true;

$tdatapublic_gestion_pesos_residuos_ven[".rowHighlite"] = true;



			

$tdatapublic_gestion_pesos_residuos_ven[".ajaxCodeSnippetAdded"] = false;

$tdatapublic_gestion_pesos_residuos_ven[".buttonsAdded"] = false;

$tdatapublic_gestion_pesos_residuos_ven[".addPageEvents"] = false;

// use timepicker for search panel
$tdatapublic_gestion_pesos_residuos_ven[".isUseTimeForSearch"] = false;


$tdatapublic_gestion_pesos_residuos_ven[".badgeColor"] = "9ACD32";


$tdatapublic_gestion_pesos_residuos_ven[".allSearchFields"] = array();
$tdatapublic_gestion_pesos_residuos_ven[".filterFields"] = array();
$tdatapublic_gestion_pesos_residuos_ven[".requiredSearchFields"] = array();

$tdatapublic_gestion_pesos_residuos_ven[".googleLikeFields"] = array();
$tdatapublic_gestion_pesos_residuos_ven[".googleLikeFields"][] = "id_ges_pes_residuo";
$tdatapublic_gestion_pesos_residuos_ven[".googleLikeFields"][] = "concat";
$tdatapublic_gestion_pesos_residuos_ven[".googleLikeFields"][] = "kilo_residuo";



$tdatapublic_gestion_pesos_residuos_ven[".tableType"] = "list";

$tdatapublic_gestion_pesos_residuos_ven[".printerPageOrientation"] = 0;
$tdatapublic_gestion_pesos_residuos_ven[".nPrinterPageScale"] = 100;

$tdatapublic_gestion_pesos_residuos_ven[".nPrinterSplitRecords"] = 40;

$tdatapublic_gestion_pesos_residuos_ven[".geocodingEnabled"] = false;










$tdatapublic_gestion_pesos_residuos_ven[".pageSize"] = 20;

$tdatapublic_gestion_pesos_residuos_ven[".warnLeavingPages"] = true;



$tstrOrderBy = "";
$tdatapublic_gestion_pesos_residuos_ven[".strOrderBy"] = $tstrOrderBy;

$tdatapublic_gestion_pesos_residuos_ven[".orderindexes"] = array();


$tdatapublic_gestion_pesos_residuos_ven[".sqlHead"] = "SELECT g.id_ges_pes_residuo,  concat(id_ges_pes_residuo, ' | ', r.nombre_reciclador, ' | ', re.descri_residuo, ' | ', fecha_gestion_pesos),  g.kilo_residuo";
$tdatapublic_gestion_pesos_residuos_ven[".sqlFrom"] = "FROM \"public\".gestion_pesos_residuos AS g  , \"public\".recicladores AS r  , \"public\".residuos AS re";
$tdatapublic_gestion_pesos_residuos_ven[".sqlWhereExpr"] = "(g.id_reciclador =r.id_reciclador) AND (g.id_residuo =re.id_residuo) AND estado=1";
$tdatapublic_gestion_pesos_residuos_ven[".sqlTail"] = "";










//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdatapublic_gestion_pesos_residuos_ven[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdatapublic_gestion_pesos_residuos_ven[".arrGroupsPerPage"] = $arrGPP;

$tdatapublic_gestion_pesos_residuos_ven[".highlightSearchResults"] = true;

$tableKeyspublic_gestion_pesos_residuos_ven = array();
$tableKeyspublic_gestion_pesos_residuos_ven[] = "id_ges_pes_residuo";
$tdatapublic_gestion_pesos_residuos_ven[".Keys"] = $tableKeyspublic_gestion_pesos_residuos_ven;


$tdatapublic_gestion_pesos_residuos_ven[".hideMobileList"] = array();




//	id_ges_pes_residuo
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "id_ges_pes_residuo";
	$fdata["GoodName"] = "id_ges_pes_residuo";
	$fdata["ownerTable"] = "public.gestion_pesos_residuos";
	$fdata["Label"] = GetFieldLabel("public_gestion_pesos_residuos_ven","id_ges_pes_residuo");
	$fdata["FieldType"] = 3;


	
	
			

		$fdata["strField"] = "id_ges_pes_residuo";

		$fdata["sourceSingle"] = "id_ges_pes_residuo";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "g.id_ges_pes_residuo";

	
	
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


	$tdatapublic_gestion_pesos_residuos_ven["id_ges_pes_residuo"] = $fdata;
		$tdatapublic_gestion_pesos_residuos_ven[".searchableFields"][] = "id_ges_pes_residuo";
//	concat
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "concat";
	$fdata["GoodName"] = "concat";
	$fdata["ownerTable"] = "";
	$fdata["Label"] = GetFieldLabel("public_gestion_pesos_residuos_ven","concat");
	$fdata["FieldType"] = 201;


	
	
			

		$fdata["strField"] = "concat";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "concat(id_ges_pes_residuo, ' | ', r.nombre_reciclador, ' | ', re.descri_residuo, ' | ', fecha_gestion_pesos)";

	
	
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

	$edata = array("EditFormat" => "Text area");

	
		$edata["weekdayMessage"] = array("message" => "", "messageType" => "Text");
	$edata["weekdays"] = "[]";


	
	



	
	
	
	
			$edata["acceptFileTypes"] = ".+$";
		$edata["acceptFileTypesHtml"] = "";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
				$edata["nRows"] = 100;
			$edata["nCols"] = 200;

	
	
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


	$tdatapublic_gestion_pesos_residuos_ven["concat"] = $fdata;
		$tdatapublic_gestion_pesos_residuos_ven[".searchableFields"][] = "concat";
//	kilo_residuo
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "kilo_residuo";
	$fdata["GoodName"] = "kilo_residuo";
	$fdata["ownerTable"] = "public.gestion_pesos_residuos";
	$fdata["Label"] = GetFieldLabel("public_gestion_pesos_residuos_ven","kilo_residuo");
	$fdata["FieldType"] = 5;


	
	
			

		$fdata["strField"] = "kilo_residuo";

		$fdata["sourceSingle"] = "kilo_residuo";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "g.kilo_residuo";

	
	
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
				$edata["validateAs"]["basicValidate"][] = getJsValidatorName("Number");
							
	
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


	$tdatapublic_gestion_pesos_residuos_ven["kilo_residuo"] = $fdata;
		$tdatapublic_gestion_pesos_residuos_ven[".searchableFields"][] = "kilo_residuo";


$tables_data["public.gestion_pesos_residuos_ven"]=&$tdatapublic_gestion_pesos_residuos_ven;
$field_labels["public_gestion_pesos_residuos_ven"] = &$fieldLabelspublic_gestion_pesos_residuos_ven;
$fieldToolTips["public_gestion_pesos_residuos_ven"] = &$fieldToolTipspublic_gestion_pesos_residuos_ven;
$placeHolders["public_gestion_pesos_residuos_ven"] = &$placeHolderspublic_gestion_pesos_residuos_ven;
$page_titles["public_gestion_pesos_residuos_ven"] = &$pageTitlespublic_gestion_pesos_residuos_ven;

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)

//if !@TABLE.bReportCrossTab

$detailsTablesData["public.gestion_pesos_residuos_ven"] = array();
//endif

// tables which are master tables for current table (detail)
$masterTablesData["public.gestion_pesos_residuos_ven"] = array();



// -----------------end  prepare master-details data arrays ------------------------------//



require_once(getabspath("classes/sql.php"));











function createSqlQuery_public_gestion_pesos_residuos_ven()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "g.id_ges_pes_residuo,  concat(id_ges_pes_residuo, ' | ', r.nombre_reciclador, ' | ', re.descri_residuo, ' | ', fecha_gestion_pesos),  g.kilo_residuo";
$proto0["m_strFrom"] = "FROM \"public\".gestion_pesos_residuos AS g  , \"public\".recicladores AS r  , \"public\".residuos AS re";
$proto0["m_strWhere"] = "(g.id_reciclador =r.id_reciclador) AND (g.id_residuo =re.id_residuo) AND estado=1";
$proto0["m_strOrderBy"] = "";
	
		;
			$proto0["cipherer"] = null;
$proto2=array();
$proto2["m_sql"] = "(g.id_reciclador =r.id_reciclador) AND (g.id_residuo =re.id_residuo) AND estado=1";
$proto2["m_uniontype"] = "SQLL_AND";
	$obj = new SQLNonParsed(array(
	"m_sql" => "(g.id_reciclador =r.id_reciclador) AND (g.id_residuo =re.id_residuo) AND estado=1"
));

$proto2["m_column"]=$obj;
$proto2["m_contained"] = array();
						$proto4=array();
$proto4["m_sql"] = "g.id_reciclador =r.id_reciclador";
$proto4["m_uniontype"] = "SQLL_UNKNOWN";
						$obj = new SQLField(array(
	"m_strName" => "id_reciclador",
	"m_strTable" => "g",
	"m_srcTableName" => "public.gestion_pesos_residuos_ven"
));

$proto4["m_column"]=$obj;
$proto4["m_contained"] = array();
$proto4["m_strCase"] = "=r.id_reciclador";
$proto4["m_havingmode"] = false;
$proto4["m_inBrackets"] = true;
$proto4["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto4);

			$proto2["m_contained"][]=$obj;
						$proto6=array();
$proto6["m_sql"] = "g.id_residuo =re.id_residuo";
$proto6["m_uniontype"] = "SQLL_UNKNOWN";
						$obj = new SQLField(array(
	"m_strName" => "id_residuo",
	"m_strTable" => "g",
	"m_srcTableName" => "public.gestion_pesos_residuos_ven"
));

$proto6["m_column"]=$obj;
$proto6["m_contained"] = array();
$proto6["m_strCase"] = "=re.id_residuo";
$proto6["m_havingmode"] = false;
$proto6["m_inBrackets"] = true;
$proto6["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto6);

			$proto2["m_contained"][]=$obj;
						$proto8=array();
$proto8["m_sql"] = "estado=1";
$proto8["m_uniontype"] = "SQLL_UNKNOWN";
						$obj = new SQLField(array(
	"m_strName" => "estado",
	"m_strTable" => "g",
	"m_srcTableName" => "public.gestion_pesos_residuos_ven"
));

$proto8["m_column"]=$obj;
$proto8["m_contained"] = array();
$proto8["m_strCase"] = "=1";
$proto8["m_havingmode"] = false;
$proto8["m_inBrackets"] = false;
$proto8["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto8);

			$proto2["m_contained"][]=$obj;
$proto2["m_strCase"] = "";
$proto2["m_havingmode"] = false;
$proto2["m_inBrackets"] = false;
$proto2["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto2);

$proto0["m_where"] = $obj;
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

$proto0["m_having"] = $obj;
$proto0["m_fieldlist"] = array();
						$proto12=array();
			$obj = new SQLField(array(
	"m_strName" => "id_ges_pes_residuo",
	"m_strTable" => "g",
	"m_srcTableName" => "public.gestion_pesos_residuos_ven"
));

$proto12["m_sql"] = "g.id_ges_pes_residuo";
$proto12["m_srcTableName"] = "public.gestion_pesos_residuos_ven";
$proto12["m_expr"]=$obj;
$proto12["m_alias"] = "";
$obj = new SQLFieldListItem($proto12);

$proto0["m_fieldlist"][]=$obj;
						$proto14=array();
			$proto15=array();
$proto15["m_functiontype"] = "SQLF_CUSTOM";
$proto15["m_arguments"] = array();
						$obj = new SQLNonParsed(array(
	"m_sql" => "id_ges_pes_residuo"
));

$proto15["m_arguments"][]=$obj;
						$obj = new SQLNonParsed(array(
	"m_sql" => "' | '"
));

$proto15["m_arguments"][]=$obj;
						$obj = new SQLNonParsed(array(
	"m_sql" => "r.nombre_reciclador"
));

$proto15["m_arguments"][]=$obj;
						$obj = new SQLNonParsed(array(
	"m_sql" => "' | '"
));

$proto15["m_arguments"][]=$obj;
						$obj = new SQLNonParsed(array(
	"m_sql" => "re.descri_residuo"
));

$proto15["m_arguments"][]=$obj;
						$obj = new SQLNonParsed(array(
	"m_sql" => "' | '"
));

$proto15["m_arguments"][]=$obj;
						$obj = new SQLNonParsed(array(
	"m_sql" => "fecha_gestion_pesos"
));

$proto15["m_arguments"][]=$obj;
$proto15["m_strFunctionName"] = "concat";
$obj = new SQLFunctionCall($proto15);

$proto14["m_sql"] = "concat(id_ges_pes_residuo, ' | ', r.nombre_reciclador, ' | ', re.descri_residuo, ' | ', fecha_gestion_pesos)";
$proto14["m_srcTableName"] = "public.gestion_pesos_residuos_ven";
$proto14["m_expr"]=$obj;
$proto14["m_alias"] = "";
$obj = new SQLFieldListItem($proto14);

$proto0["m_fieldlist"][]=$obj;
						$proto23=array();
			$obj = new SQLField(array(
	"m_strName" => "kilo_residuo",
	"m_strTable" => "g",
	"m_srcTableName" => "public.gestion_pesos_residuos_ven"
));

$proto23["m_sql"] = "g.kilo_residuo";
$proto23["m_srcTableName"] = "public.gestion_pesos_residuos_ven";
$proto23["m_expr"]=$obj;
$proto23["m_alias"] = "";
$obj = new SQLFieldListItem($proto23);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto25=array();
$proto25["m_link"] = "SQLL_MAIN";
			$proto26=array();
$proto26["m_strName"] = "public.gestion_pesos_residuos";
$proto26["m_srcTableName"] = "public.gestion_pesos_residuos_ven";
$proto26["m_columns"] = array();
$proto26["m_columns"][] = "id_ges_pes_residuo";
$proto26["m_columns"][] = "id_reciclador";
$proto26["m_columns"][] = "id_residuo";
$proto26["m_columns"][] = "fecha_gestion_pesos";
$proto26["m_columns"][] = "kilo_residuo";
$proto26["m_columns"][] = "estado";
$obj = new SQLTable($proto26);

$proto25["m_table"] = $obj;
$proto25["m_sql"] = "\"public\".gestion_pesos_residuos AS g";
$proto25["m_alias"] = "g";
$proto25["m_srcTableName"] = "public.gestion_pesos_residuos_ven";
$proto27=array();
$proto27["m_sql"] = "";
$proto27["m_uniontype"] = "SQLL_UNKNOWN";
	$obj = new SQLNonParsed(array(
	"m_sql" => ""
));

$proto27["m_column"]=$obj;
$proto27["m_contained"] = array();
$proto27["m_strCase"] = "";
$proto27["m_havingmode"] = false;
$proto27["m_inBrackets"] = false;
$proto27["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto27);

$proto25["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto25);

$proto0["m_fromlist"][]=$obj;
												$proto29=array();
$proto29["m_link"] = "SQLL_CROSSJOIN";
			$proto30=array();
$proto30["m_strName"] = "public.recicladores";
$proto30["m_srcTableName"] = "public.gestion_pesos_residuos_ven";
$proto30["m_columns"] = array();
$proto30["m_columns"][] = "id_reciclador";
$proto30["m_columns"][] = "foto_reciclador";
$proto30["m_columns"][] = "ci_reciclador";
$proto30["m_columns"][] = "nombre_reciclador";
$proto30["m_columns"][] = "apellido_reciclador";
$proto30["m_columns"][] = "direc_reciclador";
$proto30["m_columns"][] = "tel_reciclador";
$proto30["m_columns"][] = "logo_aso";
$proto30["m_columns"][] = "id_residuo";
$obj = new SQLTable($proto30);

$proto29["m_table"] = $obj;
$proto29["m_sql"] = "\"public\".recicladores AS r";
$proto29["m_alias"] = "r";
$proto29["m_srcTableName"] = "public.gestion_pesos_residuos_ven";
$proto31=array();
$proto31["m_sql"] = "";
$proto31["m_uniontype"] = "SQLL_UNKNOWN";
	$obj = new SQLNonParsed(array(
	"m_sql" => ""
));

$proto31["m_column"]=$obj;
$proto31["m_contained"] = array();
$proto31["m_strCase"] = "";
$proto31["m_havingmode"] = false;
$proto31["m_inBrackets"] = false;
$proto31["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto31);

$proto29["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto29);

$proto0["m_fromlist"][]=$obj;
												$proto33=array();
$proto33["m_link"] = "SQLL_CROSSJOIN";
			$proto34=array();
$proto34["m_strName"] = "public.residuos";
$proto34["m_srcTableName"] = "public.gestion_pesos_residuos_ven";
$proto34["m_columns"] = array();
$proto34["m_columns"][] = "id_residuo";
$proto34["m_columns"][] = "descri_residuo";
$obj = new SQLTable($proto34);

$proto33["m_table"] = $obj;
$proto33["m_sql"] = "\"public\".residuos AS re";
$proto33["m_alias"] = "re";
$proto33["m_srcTableName"] = "public.gestion_pesos_residuos_ven";
$proto35=array();
$proto35["m_sql"] = "";
$proto35["m_uniontype"] = "SQLL_UNKNOWN";
	$obj = new SQLNonParsed(array(
	"m_sql" => ""
));

$proto35["m_column"]=$obj;
$proto35["m_contained"] = array();
$proto35["m_strCase"] = "";
$proto35["m_havingmode"] = false;
$proto35["m_inBrackets"] = false;
$proto35["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto35);

$proto33["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto33);

$proto0["m_fromlist"][]=$obj;
$proto0["m_groupby"] = array();
$proto0["m_orderby"] = array();
$proto0["m_srcTableName"]="public.gestion_pesos_residuos_ven";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_public_gestion_pesos_residuos_ven = createSqlQuery_public_gestion_pesos_residuos_ven();


	
		;

			

$tdatapublic_gestion_pesos_residuos_ven[".sqlquery"] = $queryData_public_gestion_pesos_residuos_ven;



$tableEvents["public.gestion_pesos_residuos_ven"] = new eventsBase;
$tdatapublic_gestion_pesos_residuos_ven[".hasEvents"] = false;

?>