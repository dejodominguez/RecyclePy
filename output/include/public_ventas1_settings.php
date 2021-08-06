<?php
$tdatapublic_ventas1 = array();
$tdatapublic_ventas1[".searchableFields"] = array();
$tdatapublic_ventas1[".ShortName"] = "public_ventas1";
$tdatapublic_ventas1[".OwnerID"] = "";
$tdatapublic_ventas1[".OriginalTable"] = "public.ventas";


$tdatapublic_ventas1[".pagesByType"] = my_json_decode( "{\"add\":[\"add\"],\"export\":[\"export\"],\"import\":[\"import\"],\"list\":[\"list\"],\"masterlist\":[\"masterlist\"],\"masterprint\":[\"masterprint\"],\"search\":[\"search\"]}" );
$tdatapublic_ventas1[".originalPagesByType"] = $tdatapublic_ventas1[".pagesByType"];
$tdatapublic_ventas1[".pages"] = types2pages( my_json_decode( "{\"add\":[\"add\"],\"export\":[\"export\"],\"import\":[\"import\"],\"list\":[\"list\"],\"masterlist\":[\"masterlist\"],\"masterprint\":[\"masterprint\"],\"search\":[\"search\"]}" ) );
$tdatapublic_ventas1[".originalPages"] = $tdatapublic_ventas1[".pages"];
$tdatapublic_ventas1[".defaultPages"] = my_json_decode( "{\"add\":\"add\",\"export\":\"export\",\"import\":\"import\",\"list\":\"list\",\"masterlist\":\"masterlist\",\"masterprint\":\"masterprint\",\"search\":\"search\"}" );
$tdatapublic_ventas1[".originalDefaultPages"] = $tdatapublic_ventas1[".defaultPages"];

//	field labels
$fieldLabelspublic_ventas1 = array();
$fieldToolTipspublic_ventas1 = array();
$pageTitlespublic_ventas1 = array();
$placeHolderspublic_ventas1 = array();

if(mlang_getcurrentlang()=="Spanish")
{
	$fieldLabelspublic_ventas1["Spanish"] = array();
	$fieldToolTipspublic_ventas1["Spanish"] = array();
	$placeHolderspublic_ventas1["Spanish"] = array();
	$pageTitlespublic_ventas1["Spanish"] = array();
	$fieldLabelspublic_ventas1["Spanish"]["observaci_n"] = "Observación";
	$fieldToolTipspublic_ventas1["Spanish"]["observaci_n"] = "";
	$placeHolderspublic_ventas1["Spanish"]["observaci_n"] = "Cargue aquí observaciones";
	$fieldLabelspublic_ventas1["Spanish"]["id_empre_recicladora"] = "Id Empre Recicladora";
	$fieldToolTipspublic_ventas1["Spanish"]["id_empre_recicladora"] = "";
	$placeHolderspublic_ventas1["Spanish"]["id_empre_recicladora"] = "";
	$fieldLabelspublic_ventas1["Spanish"]["id_venta"] = "Id Venta";
	$fieldToolTipspublic_ventas1["Spanish"]["id_venta"] = "";
	$placeHolderspublic_ventas1["Spanish"]["id_venta"] = "";
	$fieldLabelspublic_ventas1["Spanish"]["fecha_venta"] = "Fecha Venta";
	$fieldToolTipspublic_ventas1["Spanish"]["fecha_venta"] = "";
	$placeHolderspublic_ventas1["Spanish"]["fecha_venta"] = "";
	if (count($fieldToolTipspublic_ventas1["Spanish"]))
		$tdatapublic_ventas1[".isUseToolTips"] = true;
}


	$tdatapublic_ventas1[".NCSearch"] = true;



$tdatapublic_ventas1[".shortTableName"] = "public_ventas1";
$tdatapublic_ventas1[".nSecOptions"] = 0;

$tdatapublic_ventas1[".mainTableOwnerID"] = "";
$tdatapublic_ventas1[".entityType"] = 1;
$tdatapublic_ventas1[".connId"] = "RealEstate_at_localhost";


$tdatapublic_ventas1[".strOriginalTableName"] = "public.ventas";

	



$tdatapublic_ventas1[".showAddInPopup"] = false;

$tdatapublic_ventas1[".showEditInPopup"] = false;

$tdatapublic_ventas1[".showViewInPopup"] = false;

$tdatapublic_ventas1[".listAjax"] = false;
//	temporary
//$tdatapublic_ventas1[".listAjax"] = false;

	$tdatapublic_ventas1[".audit"] = false;

	$tdatapublic_ventas1[".locking"] = false;


$pages = $tdatapublic_ventas1[".defaultPages"];

if( $pages[PAGE_EDIT] ) {
	$tdatapublic_ventas1[".edit"] = true;
	$tdatapublic_ventas1[".afterEditAction"] = 0;
	$tdatapublic_ventas1[".closePopupAfterEdit"] = 1;
	$tdatapublic_ventas1[".afterEditActionDetTable"] = "";
}

if( $pages[PAGE_ADD] ) {
$tdatapublic_ventas1[".add"] = true;
$tdatapublic_ventas1[".afterAddAction"] = 1;
$tdatapublic_ventas1[".closePopupAfterAdd"] = 1;
$tdatapublic_ventas1[".afterAddActionDetTable"] = "";
}

if( $pages[PAGE_LIST] ) {
	$tdatapublic_ventas1[".list"] = true;
}



$tdatapublic_ventas1[".strSortControlSettingsJSON"] = "";




if( $pages[PAGE_VIEW] ) {
$tdatapublic_ventas1[".view"] = true;
}

if( $pages[PAGE_IMPORT] ) {
$tdatapublic_ventas1[".import"] = true;
}

if( $pages[PAGE_EXPORT] ) {
$tdatapublic_ventas1[".exportTo"] = true;
}

if( $pages[PAGE_PRINT] ) {
$tdatapublic_ventas1[".printFriendly"] = true;
}



$tdatapublic_ventas1[".showSimpleSearchOptions"] = true; // temp fix #13449

// Allow Show/Hide Fields in GRID
$tdatapublic_ventas1[".allowShowHideFields"] = true; // temp fix #13449
//

// Allow Fields Reordering in GRID
$tdatapublic_ventas1[".allowFieldsReordering"] = true; // temp fix #13449
//

$tdatapublic_ventas1[".isUseAjaxSuggest"] = true;

$tdatapublic_ventas1[".rowHighlite"] = true;



						

$tdatapublic_ventas1[".ajaxCodeSnippetAdded"] = false;

$tdatapublic_ventas1[".buttonsAdded"] = false;

$tdatapublic_ventas1[".addPageEvents"] = false;

// use timepicker for search panel
$tdatapublic_ventas1[".isUseTimeForSearch"] = false;


$tdatapublic_ventas1[".badgeColor"] = "db7093";


$tdatapublic_ventas1[".allSearchFields"] = array();
$tdatapublic_ventas1[".filterFields"] = array();
$tdatapublic_ventas1[".requiredSearchFields"] = array();

$tdatapublic_ventas1[".googleLikeFields"] = array();
$tdatapublic_ventas1[".googleLikeFields"][] = "id_venta";
$tdatapublic_ventas1[".googleLikeFields"][] = "fecha_venta";
$tdatapublic_ventas1[".googleLikeFields"][] = "observación";
$tdatapublic_ventas1[".googleLikeFields"][] = "id_empre_recicladora";



$tdatapublic_ventas1[".tableType"] = "list";

$tdatapublic_ventas1[".printerPageOrientation"] = 0;
$tdatapublic_ventas1[".nPrinterPageScale"] = 100;

$tdatapublic_ventas1[".nPrinterSplitRecords"] = 40;

$tdatapublic_ventas1[".geocodingEnabled"] = false;










$tdatapublic_ventas1[".pageSize"] = 20;

$tdatapublic_ventas1[".warnLeavingPages"] = true;



$tstrOrderBy = "";
$tdatapublic_ventas1[".strOrderBy"] = $tstrOrderBy;

$tdatapublic_ventas1[".orderindexes"] = array();


$tdatapublic_ventas1[".sqlHead"] = "SELECT id_venta,  	fecha_venta,  	\"observación\",  	id_empre_recicladora";
$tdatapublic_ventas1[".sqlFrom"] = "FROM \"public\".ventas";
$tdatapublic_ventas1[".sqlWhereExpr"] = "";
$tdatapublic_ventas1[".sqlTail"] = "";

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
$tdatapublic_ventas1[".arrGridTabs"] = $arrGridTabs;









//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdatapublic_ventas1[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdatapublic_ventas1[".arrGroupsPerPage"] = $arrGPP;

$tdatapublic_ventas1[".highlightSearchResults"] = true;

$tableKeyspublic_ventas1 = array();
$tdatapublic_ventas1[".Keys"] = $tableKeyspublic_ventas1;


$tdatapublic_ventas1[".hideMobileList"] = array();




//	id_venta
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "id_venta";
	$fdata["GoodName"] = "id_venta";
	$fdata["ownerTable"] = "public.ventas";
	$fdata["Label"] = GetFieldLabel("public_ventas1","id_venta");
	$fdata["FieldType"] = 3;


	
	
			

		$fdata["strField"] = "id_venta";

		$fdata["sourceSingle"] = "id_venta";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "id_venta";

	
	
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


	$tdatapublic_ventas1["id_venta"] = $fdata;
		$tdatapublic_ventas1[".searchableFields"][] = "id_venta";
//	fecha_venta
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "fecha_venta";
	$fdata["GoodName"] = "fecha_venta";
	$fdata["ownerTable"] = "public.ventas";
	$fdata["Label"] = GetFieldLabel("public_ventas1","fecha_venta");
	$fdata["FieldType"] = 7;


	
	
			

		$fdata["strField"] = "fecha_venta";

		$fdata["sourceSingle"] = "fecha_venta";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "fecha_venta";

	
	
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "Short Date");

	
	
	
	
	
	
	
	
	
	
	
		
	
		$vdata["NeedEncode"] = true;

	
		$vdata["truncateText"] = true;
	$vdata["NumberOfChars"] = 80;

	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Date");

	
		$edata["weekdayMessage"] = array("message" => "", "messageType" => "Text");
	$edata["weekdays"] = "[]";


	
	



	
	
	
	
			$edata["acceptFileTypes"] = ".+$";
		$edata["acceptFileTypesHtml"] = "";

		$edata["maxNumberOfFiles"] = 1;

	
	
		$edata["DateEditType"] = 13;
	$edata["InitialYearFactor"] = 100;
	$edata["LastYearFactor"] = 10;

	
	
	
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
		$fdata["defaultSearchOption"] = "Equals";

			// the default search options list
				$fdata["searchOptionsList"] = array("Equals", "More than", "Less than", "Between", EMPTY_SEARCH, NOT_EMPTY );
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


	$tdatapublic_ventas1["fecha_venta"] = $fdata;
		$tdatapublic_ventas1[".searchableFields"][] = "fecha_venta";
//	observación
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "observación";
	$fdata["GoodName"] = "observaci_n";
	$fdata["ownerTable"] = "public.ventas";
	$fdata["Label"] = GetFieldLabel("public_ventas1","observaci_n");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "observación";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "\"observación\"";

	
	
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


	$tdatapublic_ventas1["observación"] = $fdata;
		$tdatapublic_ventas1[".searchableFields"][] = "observación";
//	id_empre_recicladora
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "id_empre_recicladora";
	$fdata["GoodName"] = "id_empre_recicladora";
	$fdata["ownerTable"] = "public.ventas";
	$fdata["Label"] = GetFieldLabel("public_ventas1","id_empre_recicladora");
	$fdata["FieldType"] = 3;


	
	
			

		$fdata["strField"] = "id_empre_recicladora";

		$fdata["sourceSingle"] = "id_empre_recicladora";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "id_empre_recicladora";

	
	
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


	$tdatapublic_ventas1["id_empre_recicladora"] = $fdata;
		$tdatapublic_ventas1[".searchableFields"][] = "id_empre_recicladora";


$tables_data["public.ventas1"]=&$tdatapublic_ventas1;
$field_labels["public_ventas1"] = &$fieldLabelspublic_ventas1;
$fieldToolTips["public_ventas1"] = &$fieldToolTipspublic_ventas1;
$placeHolders["public_ventas1"] = &$placeHolderspublic_ventas1;
$page_titles["public_ventas1"] = &$pageTitlespublic_ventas1;

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)

//if !@TABLE.bReportCrossTab

$detailsTablesData["public.ventas1"] = array();
//endif

// tables which are master tables for current table (detail)
$masterTablesData["public.ventas1"] = array();



	
	//if !@t.bReportCrossTab
			$strOriginalDetailsTable="public.empresas_recicladores";
	$masterParams = array();
	$masterParams["mDataSourceTable"]="public.empresas_recicladores";
	$masterParams["mOriginalTable"]= $strOriginalDetailsTable;
	$masterParams["mShortTable"]= "empresas_recicladores";
	$masterParams["masterKeys"]= array();
	$masterParams["detailKeys"]= array();

	$masterParams["type"] = PAGE_LIST;
					$masterTablesData["public.ventas1"][0] = $masterParams;
				$masterTablesData["public.ventas1"][0]["masterKeys"] = array();
	$masterTablesData["public.ventas1"][0]["masterKeys"][]="id_empre_recicladora";
				$masterTablesData["public.ventas1"][0]["detailKeys"] = array();
	$masterTablesData["public.ventas1"][0]["detailKeys"][]="id_empre_recicladora";
		
	//endif
// -----------------end  prepare master-details data arrays ------------------------------//



require_once(getabspath("classes/sql.php"));











function createSqlQuery_public_ventas1()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "id_venta,  	fecha_venta,  	\"observación\",  	id_empre_recicladora";
$proto0["m_strFrom"] = "FROM \"public\".ventas";
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
	"m_strName" => "id_venta",
	"m_strTable" => "public.ventas",
	"m_srcTableName" => "public.ventas1"
));

$proto6["m_sql"] = "id_venta";
$proto6["m_srcTableName"] = "public.ventas1";
$proto6["m_expr"]=$obj;
$proto6["m_alias"] = "";
$obj = new SQLFieldListItem($proto6);

$proto0["m_fieldlist"][]=$obj;
						$proto8=array();
			$obj = new SQLField(array(
	"m_strName" => "fecha_venta",
	"m_strTable" => "public.ventas",
	"m_srcTableName" => "public.ventas1"
));

$proto8["m_sql"] = "fecha_venta";
$proto8["m_srcTableName"] = "public.ventas1";
$proto8["m_expr"]=$obj;
$proto8["m_alias"] = "";
$obj = new SQLFieldListItem($proto8);

$proto0["m_fieldlist"][]=$obj;
						$proto10=array();
			$obj = new SQLField(array(
	"m_strName" => "observación",
	"m_strTable" => "public.ventas",
	"m_srcTableName" => "public.ventas1"
));

$proto10["m_sql"] = "\"observación\"";
$proto10["m_srcTableName"] = "public.ventas1";
$proto10["m_expr"]=$obj;
$proto10["m_alias"] = "";
$obj = new SQLFieldListItem($proto10);

$proto0["m_fieldlist"][]=$obj;
						$proto12=array();
			$obj = new SQLField(array(
	"m_strName" => "id_empre_recicladora",
	"m_strTable" => "public.ventas",
	"m_srcTableName" => "public.ventas1"
));

$proto12["m_sql"] = "id_empre_recicladora";
$proto12["m_srcTableName"] = "public.ventas1";
$proto12["m_expr"]=$obj;
$proto12["m_alias"] = "";
$obj = new SQLFieldListItem($proto12);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto14=array();
$proto14["m_link"] = "SQLL_MAIN";
			$proto15=array();
$proto15["m_strName"] = "public.ventas";
$proto15["m_srcTableName"] = "public.ventas1";
$proto15["m_columns"] = array();
$proto15["m_columns"][] = "id_venta";
$proto15["m_columns"][] = "fecha_venta";
$proto15["m_columns"][] = "observación";
$proto15["m_columns"][] = "id_empre_recicladora";
$obj = new SQLTable($proto15);

$proto14["m_table"] = $obj;
$proto14["m_sql"] = "\"public\".ventas";
$proto14["m_alias"] = "";
$proto14["m_srcTableName"] = "public.ventas1";
$proto16=array();
$proto16["m_sql"] = "";
$proto16["m_uniontype"] = "SQLL_UNKNOWN";
	$obj = new SQLNonParsed(array(
	"m_sql" => ""
));

$proto16["m_column"]=$obj;
$proto16["m_contained"] = array();
$proto16["m_strCase"] = "";
$proto16["m_havingmode"] = false;
$proto16["m_inBrackets"] = false;
$proto16["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto16);

$proto14["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto14);

$proto0["m_fromlist"][]=$obj;
$proto0["m_groupby"] = array();
$proto0["m_orderby"] = array();
$proto0["m_srcTableName"]="public.ventas1";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_public_ventas1 = createSqlQuery_public_ventas1();


	
		;

				

$tdatapublic_ventas1[".sqlquery"] = $queryData_public_ventas1;



$tableEvents["public.ventas1"] = new eventsBase;
$tdatapublic_ventas1[".hasEvents"] = false;

?>