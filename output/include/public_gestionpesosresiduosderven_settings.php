<?php



$tdatapublic_gestionpesosresiduosderven = array();
$tdatapublic_gestionpesosresiduosderven[".searchableFields"] = array();
$tdatapublic_gestionpesosresiduosderven[".ShortName"] = "public_gestionpesosresiduosderven";
$tdatapublic_gestionpesosresiduosderven[".OwnerID"] = "";
$tdatapublic_gestionpesosresiduosderven[".OriginalTable"] = "public.GestionPesosResiduos";


$defaultPages = my_json_decode( "{\"add\":\"add\",\"export\":\"export\",\"import\":\"import\",\"list\":\"list\",\"print\":\"print\",\"search\":\"search\"}" );

$tdatapublic_gestionpesosresiduosderven[".pagesByType"] = my_json_decode( "{\"add\":[\"add\"],\"export\":[\"export\"],\"import\":[\"import\"],\"list\":[\"list\"],\"print\":[\"print\"],\"search\":[\"search\"]}" );
$tdatapublic_gestionpesosresiduosderven[".pages"] = types2pages( my_json_decode( "{\"add\":[\"add\"],\"export\":[\"export\"],\"import\":[\"import\"],\"list\":[\"list\"],\"print\":[\"print\"],\"search\":[\"search\"]}" ) );
$tdatapublic_gestionpesosresiduosderven[".defaultPages"] = $defaultPages;

//	field labels
$fieldLabelspublic_gestionpesosresiduosderven = array();
$fieldToolTipspublic_gestionpesosresiduosderven = array();
$pageTitlespublic_gestionpesosresiduosderven = array();
$placeHolderspublic_gestionpesosresiduosderven = array();

if(mlang_getcurrentlang()=="Spanish")
{
	$fieldLabelspublic_gestionpesosresiduosderven["Spanish"] = array();
	$fieldToolTipspublic_gestionpesosresiduosderven["Spanish"] = array();
	$placeHolderspublic_gestionpesosresiduosderven["Spanish"] = array();
	$pageTitlespublic_gestionpesosresiduosderven["Spanish"] = array();
	$fieldLabelspublic_gestionpesosresiduosderven["Spanish"]["concat"] = "Concat";
	$fieldToolTipspublic_gestionpesosresiduosderven["Spanish"]["concat"] = "";
	$placeHolderspublic_gestionpesosresiduosderven["Spanish"]["concat"] = "";
	$fieldLabelspublic_gestionpesosresiduosderven["Spanish"]["KilosResiduos"] = "Kilos Residuos";
	$fieldToolTipspublic_gestionpesosresiduosderven["Spanish"]["KilosResiduos"] = "";
	$placeHolderspublic_gestionpesosresiduosderven["Spanish"]["KilosResiduos"] = "";
	if (count($fieldToolTipspublic_gestionpesosresiduosderven["Spanish"]))
		$tdatapublic_gestionpesosresiduosderven[".isUseToolTips"] = true;
}


	$tdatapublic_gestionpesosresiduosderven[".NCSearch"] = true;



$tdatapublic_gestionpesosresiduosderven[".shortTableName"] = "public_gestionpesosresiduosderven";
$tdatapublic_gestionpesosresiduosderven[".nSecOptions"] = 0;

$tdatapublic_gestionpesosresiduosderven[".mainTableOwnerID"] = "";
$tdatapublic_gestionpesosresiduosderven[".entityType"] = 1;

$tdatapublic_gestionpesosresiduosderven[".strOriginalTableName"] = "public.GestionPesosResiduos";

	



$tdatapublic_gestionpesosresiduosderven[".showAddInPopup"] = false;

$tdatapublic_gestionpesosresiduosderven[".showEditInPopup"] = false;

$tdatapublic_gestionpesosresiduosderven[".showViewInPopup"] = false;

//page's base css files names
$popupPagesLayoutNames = array();
$tdatapublic_gestionpesosresiduosderven[".popupPagesLayoutNames"] = $popupPagesLayoutNames;


$tdatapublic_gestionpesosresiduosderven[".listAjax"] = false;
//	temporary
$tdatapublic_gestionpesosresiduosderven[".listAjax"] = false;

	$tdatapublic_gestionpesosresiduosderven[".audit"] = false;

	$tdatapublic_gestionpesosresiduosderven[".locking"] = false;


$pages = $tdatapublic_gestionpesosresiduosderven[".defaultPages"];

if( $pages[PAGE_EDIT] ) {
	$tdatapublic_gestionpesosresiduosderven[".edit"] = true;
	$tdatapublic_gestionpesosresiduosderven[".afterEditAction"] = 1;
	$tdatapublic_gestionpesosresiduosderven[".closePopupAfterEdit"] = 1;
	$tdatapublic_gestionpesosresiduosderven[".afterEditActionDetTable"] = "";
}

if( $pages[PAGE_ADD] ) {
$tdatapublic_gestionpesosresiduosderven[".add"] = true;
$tdatapublic_gestionpesosresiduosderven[".afterAddAction"] = 1;
$tdatapublic_gestionpesosresiduosderven[".closePopupAfterAdd"] = 1;
$tdatapublic_gestionpesosresiduosderven[".afterAddActionDetTable"] = "";
}

if( $pages[PAGE_LIST] ) {
	$tdatapublic_gestionpesosresiduosderven[".list"] = true;
}



$tdatapublic_gestionpesosresiduosderven[".strSortControlSettingsJSON"] = "";




if( $pages[PAGE_VIEW] ) {
$tdatapublic_gestionpesosresiduosderven[".view"] = true;
}

if( $pages[PAGE_IMPORT] ) {
$tdatapublic_gestionpesosresiduosderven[".import"] = true;
}

if( $pages[PAGE_EXPORT] ) {
$tdatapublic_gestionpesosresiduosderven[".exportTo"] = true;
}

if( $pages[PAGE_PRINT] ) {
$tdatapublic_gestionpesosresiduosderven[".printFriendly"] = true;
}



$tdatapublic_gestionpesosresiduosderven[".showSimpleSearchOptions"] = true; // temp fix #13449

// Allow Show/Hide Fields in GRID
$tdatapublic_gestionpesosresiduosderven[".allowShowHideFields"] = true; // temp fix #13449
//

// Allow Fields Reordering in GRID
$tdatapublic_gestionpesosresiduosderven[".allowFieldsReordering"] = true; // temp fix #13449
//

$tdatapublic_gestionpesosresiduosderven[".isUseAjaxSuggest"] = true;

$tdatapublic_gestionpesosresiduosderven[".rowHighlite"] = true;



			

$tdatapublic_gestionpesosresiduosderven[".ajaxCodeSnippetAdded"] = false;

$tdatapublic_gestionpesosresiduosderven[".buttonsAdded"] = false;

$tdatapublic_gestionpesosresiduosderven[".addPageEvents"] = false;

// use timepicker for search panel
$tdatapublic_gestionpesosresiduosderven[".isUseTimeForSearch"] = false;


$tdatapublic_gestionpesosresiduosderven[".badgeColor"] = "D2691E";


$tdatapublic_gestionpesosresiduosderven[".allSearchFields"] = array();
$tdatapublic_gestionpesosresiduosderven[".filterFields"] = array();
$tdatapublic_gestionpesosresiduosderven[".requiredSearchFields"] = array();

$tdatapublic_gestionpesosresiduosderven[".googleLikeFields"] = array();
$tdatapublic_gestionpesosresiduosderven[".googleLikeFields"][] = "concat";
$tdatapublic_gestionpesosresiduosderven[".googleLikeFields"][] = "KilosResiduos";



$tdatapublic_gestionpesosresiduosderven[".tableType"] = "list";

$tdatapublic_gestionpesosresiduosderven[".printerPageOrientation"] = 0;
$tdatapublic_gestionpesosresiduosderven[".nPrinterPageScale"] = 100;

$tdatapublic_gestionpesosresiduosderven[".nPrinterSplitRecords"] = 40;

$tdatapublic_gestionpesosresiduosderven[".geocodingEnabled"] = false;










$tdatapublic_gestionpesosresiduosderven[".pageSize"] = 20;

$tdatapublic_gestionpesosresiduosderven[".warnLeavingPages"] = true;



$tstrOrderBy = "";
if(strlen($tstrOrderBy) && strtolower(substr($tstrOrderBy,0,8))!="order by")
	$tstrOrderBy = "order by ".$tstrOrderBy;
$tdatapublic_gestionpesosresiduosderven[".strOrderBy"] = $tstrOrderBy;

$tdatapublic_gestionpesosresiduosderven[".orderindexes"] = array();

$tdatapublic_gestionpesosresiduosderven[".sqlHead"] = "SELECT concat(\"IdGesPesResiduo\",' | ',r.\"NomReciclador\",' | ',re.\"DescriResiduo\",' | ',\"FechaGestion\"),  \"KilosResiduos\"";
$tdatapublic_gestionpesosresiduosderven[".sqlFrom"] = "FROM \"public\".\"GestionPesosResiduos\" g, \"public\".\"Recicladores\" r, \"public\".\"Residuos\" re";
$tdatapublic_gestionpesosresiduosderven[".sqlWhereExpr"] = "( ( \"IdGesPesResiduo\" = 1 ) ) and g.\"IdReciclador\"=r.\"IdReciclador\" and g.\"IdResiduo\"=re.\"IdResiduo\"";
$tdatapublic_gestionpesosresiduosderven[".sqlTail"] = "";










//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdatapublic_gestionpesosresiduosderven[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdatapublic_gestionpesosresiduosderven[".arrGroupsPerPage"] = $arrGPP;

$tdatapublic_gestionpesosresiduosderven[".highlightSearchResults"] = true;

$tableKeyspublic_gestionpesosresiduosderven = array();
$tdatapublic_gestionpesosresiduosderven[".Keys"] = $tableKeyspublic_gestionpesosresiduosderven;


$tdatapublic_gestionpesosresiduosderven[".hideMobileList"] = array();




//	concat
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "concat";
	$fdata["GoodName"] = "concat";
	$fdata["ownerTable"] = "";
	$fdata["Label"] = GetFieldLabel("public_GestionPesosResiduosDerVen","concat");
	$fdata["FieldType"] = 201;

	
	
	
			

		$fdata["strField"] = "concat";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "concat(\"IdGesPesResiduo\",' | ',r.\"NomReciclador\",' | ',re.\"DescriResiduo\",' | ',\"FechaGestion\")";

	
	
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


	$tdatapublic_gestionpesosresiduosderven["concat"] = $fdata;
		$tdatapublic_gestionpesosresiduosderven[".searchableFields"][] = "concat";
//	KilosResiduos
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "KilosResiduos";
	$fdata["GoodName"] = "KilosResiduos";
	$fdata["ownerTable"] = "public.GestionPesosResiduos";
	$fdata["Label"] = GetFieldLabel("public_GestionPesosResiduosDerVen","KilosResiduos");
	$fdata["FieldType"] = 14;

	
	
	
			

		$fdata["strField"] = "KilosResiduos";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "\"KilosResiduos\"";

	
	
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "Number");

	
	
	
	
	
	
		$vdata["DecimalDigits"] = 0;

	
	
	
	
	
		$vdata["NeedEncode"] = true;

	
		$vdata["truncateText"] = true;
	$vdata["NumberOfChars"] = 80;

	$fdata["ViewFormats"]["view"] = $vdata;
	$vdata = array("ViewFormat" => "Number");

	
	
	
	
	
	
		$vdata["DecimalDigits"] = 1;

	
	
	
	
	
		$vdata["NeedEncode"] = true;

	
		$vdata["truncateText"] = true;
	$vdata["NumberOfChars"] = 80;

	$fdata["ViewFormats"]["list"] = $vdata;
	$vdata = array("ViewFormat" => "Number");

	
	
	
	
	
	
		$vdata["DecimalDigits"] = 0;

	
	
	
	
	
		$vdata["NeedEncode"] = true;

	
		$vdata["truncateText"] = true;
	$vdata["NumberOfChars"] = 80;

	$fdata["ViewFormats"]["print"] = $vdata;
	$vdata = array("ViewFormat" => "Number");

	
	
	
	
	
	
		$vdata["DecimalDigits"] = 0;

	
	
	
	
	
		$vdata["NeedEncode"] = true;

	
		$vdata["truncateText"] = true;
	$vdata["NumberOfChars"] = 80;

	$fdata["ViewFormats"]["export"] = $vdata;
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

	
			
	
	
	
	$fdata["EditFormats"]["add"] = $edata;
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

	
			
	
	
	
	$fdata["EditFormats"]["search"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = true;




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


	$tdatapublic_gestionpesosresiduosderven["KilosResiduos"] = $fdata;
		$tdatapublic_gestionpesosresiduosderven[".searchableFields"][] = "KilosResiduos";


$tables_data["public.GestionPesosResiduosDerVen"]=&$tdatapublic_gestionpesosresiduosderven;
$field_labels["public_GestionPesosResiduosDerVen"] = &$fieldLabelspublic_gestionpesosresiduosderven;
$fieldToolTips["public_GestionPesosResiduosDerVen"] = &$fieldToolTipspublic_gestionpesosresiduosderven;
$placeHolders["public_GestionPesosResiduosDerVen"] = &$placeHolderspublic_gestionpesosresiduosderven;
$page_titles["public_GestionPesosResiduosDerVen"] = &$pageTitlespublic_gestionpesosresiduosderven;

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)
$detailsTablesData["public.GestionPesosResiduosDerVen"] = array();

// tables which are master tables for current table (detail)
$masterTablesData["public.GestionPesosResiduosDerVen"] = array();



// -----------------end  prepare master-details data arrays ------------------------------//


require_once(getabspath("classes/sql.php"));










function createSqlQuery_public_gestionpesosresiduosderven()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "concat(\"IdGesPesResiduo\",' | ',r.\"NomReciclador\",' | ',re.\"DescriResiduo\",' | ',\"FechaGestion\"),  \"KilosResiduos\"";
$proto0["m_strFrom"] = "FROM \"public\".\"GestionPesosResiduos\" g, \"public\".\"Recicladores\" r, \"public\".\"Residuos\" re";
$proto0["m_strWhere"] = "( ( \"IdGesPesResiduo\" = 1 ) ) and g.\"IdReciclador\"=r.\"IdReciclador\" and g.\"IdResiduo\"=re.\"IdResiduo\"";
$proto0["m_strOrderBy"] = "";
	
		;
			$proto0["cipherer"] = null;
$proto2=array();
$proto2["m_sql"] = "( ( \"IdGesPesResiduo\" = 1 ) ) and g.\"IdReciclador\"=r.\"IdReciclador\" and g.\"IdResiduo\"=re.\"IdResiduo\"";
$proto2["m_uniontype"] = "SQLL_AND";
	$obj = new SQLNonParsed(array(
	"m_sql" => "( ( \"IdGesPesResiduo\" = 1 ) ) and g.\"IdReciclador\"=r.\"IdReciclador\" and g.\"IdResiduo\"=re.\"IdResiduo\""
));

$proto2["m_column"]=$obj;
$proto2["m_contained"] = array();
						$proto4=array();
$proto4["m_sql"] = "( \"IdGesPesResiduo\" = 1 )";
$proto4["m_uniontype"] = "SQLL_UNKNOWN";
						$obj = new SQLNonParsed(array(
	"m_sql" => "( \"IdGesPesResiduo\" = 1 )"
));

$proto4["m_column"]=$obj;
$proto4["m_contained"] = array();
$proto4["m_strCase"] = "= True";
$proto4["m_havingmode"] = false;
$proto4["m_inBrackets"] = true;
$proto4["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto4);

			$proto2["m_contained"][]=$obj;
						$proto6=array();
$proto6["m_sql"] = "g.\"IdReciclador\"=r.\"IdReciclador\"";
$proto6["m_uniontype"] = "SQLL_UNKNOWN";
						$obj = new SQLField(array(
	"m_strName" => "IdReciclador",
	"m_strTable" => "g",
	"m_srcTableName" => "public.GestionPesosResiduosDerVen"
));

$proto6["m_column"]=$obj;
$proto6["m_contained"] = array();
$proto6["m_strCase"] = "=r.\"IdReciclador\"";
$proto6["m_havingmode"] = false;
$proto6["m_inBrackets"] = false;
$proto6["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto6);

			$proto2["m_contained"][]=$obj;
						$proto8=array();
$proto8["m_sql"] = "g.\"IdResiduo\"=re.\"IdResiduo\"";
$proto8["m_uniontype"] = "SQLL_UNKNOWN";
						$obj = new SQLField(array(
	"m_strName" => "IdResiduo",
	"m_strTable" => "g",
	"m_srcTableName" => "public.GestionPesosResiduosDerVen"
));

$proto8["m_column"]=$obj;
$proto8["m_contained"] = array();
$proto8["m_strCase"] = "=re.\"IdResiduo\"";
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
			$proto13=array();
$proto13["m_functiontype"] = "SQLF_CUSTOM";
$proto13["m_arguments"] = array();
						$obj = new SQLNonParsed(array(
	"m_sql" => "\"IdGesPesResiduo\""
));

$proto13["m_arguments"][]=$obj;
						$obj = new SQLNonParsed(array(
	"m_sql" => "' | '"
));

$proto13["m_arguments"][]=$obj;
						$obj = new SQLNonParsed(array(
	"m_sql" => "r.\"NomReciclador\""
));

$proto13["m_arguments"][]=$obj;
						$obj = new SQLNonParsed(array(
	"m_sql" => "' | '"
));

$proto13["m_arguments"][]=$obj;
						$obj = new SQLNonParsed(array(
	"m_sql" => "re.\"DescriResiduo\""
));

$proto13["m_arguments"][]=$obj;
						$obj = new SQLNonParsed(array(
	"m_sql" => "' | '"
));

$proto13["m_arguments"][]=$obj;
						$obj = new SQLNonParsed(array(
	"m_sql" => "\"FechaGestion\""
));

$proto13["m_arguments"][]=$obj;
$proto13["m_strFunctionName"] = "concat";
$obj = new SQLFunctionCall($proto13);

$proto12["m_sql"] = "concat(\"IdGesPesResiduo\",' | ',r.\"NomReciclador\",' | ',re.\"DescriResiduo\",' | ',\"FechaGestion\")";
$proto12["m_srcTableName"] = "public.GestionPesosResiduosDerVen";
$proto12["m_expr"]=$obj;
$proto12["m_alias"] = "";
$obj = new SQLFieldListItem($proto12);

$proto0["m_fieldlist"][]=$obj;
						$proto21=array();
			$obj = new SQLField(array(
	"m_strName" => "KilosResiduos",
	"m_strTable" => "g",
	"m_srcTableName" => "public.GestionPesosResiduosDerVen"
));

$proto21["m_sql"] = "\"KilosResiduos\"";
$proto21["m_srcTableName"] = "public.GestionPesosResiduosDerVen";
$proto21["m_expr"]=$obj;
$proto21["m_alias"] = "";
$obj = new SQLFieldListItem($proto21);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto23=array();
$proto23["m_link"] = "SQLL_MAIN";
			$proto24=array();
$proto24["m_strName"] = "public.GestionPesosResiduos";
$proto24["m_srcTableName"] = "public.GestionPesosResiduosDerVen";
$proto24["m_columns"] = array();
$proto24["m_columns"][] = "IdGesPesResiduo";
$proto24["m_columns"][] = "IdReciclador";
$proto24["m_columns"][] = "IdResiduo";
$proto24["m_columns"][] = "FechaGestion";
$proto24["m_columns"][] = "KilosResiduos";
$obj = new SQLTable($proto24);

$proto23["m_table"] = $obj;
$proto23["m_sql"] = "\"public\".\"GestionPesosResiduos\" g";
$proto23["m_alias"] = "g";
$proto23["m_srcTableName"] = "public.GestionPesosResiduosDerVen";
$proto25=array();
$proto25["m_sql"] = "";
$proto25["m_uniontype"] = "SQLL_UNKNOWN";
	$obj = new SQLNonParsed(array(
	"m_sql" => ""
));

$proto25["m_column"]=$obj;
$proto25["m_contained"] = array();
$proto25["m_strCase"] = "";
$proto25["m_havingmode"] = false;
$proto25["m_inBrackets"] = false;
$proto25["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto25);

$proto23["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto23);

$proto0["m_fromlist"][]=$obj;
												$proto27=array();
$proto27["m_link"] = "SQLL_CROSSJOIN";
			$proto28=array();
$proto28["m_strName"] = "public.Recicladores";
$proto28["m_srcTableName"] = "public.GestionPesosResiduosDerVen";
$proto28["m_columns"] = array();
$proto28["m_columns"][] = "IdReciclador";
$proto28["m_columns"][] = "FotoReciclador";
$proto28["m_columns"][] = "CIReciclador";
$proto28["m_columns"][] = "NomReciclador";
$proto28["m_columns"][] = "ApeReciclador";
$proto28["m_columns"][] = "DirReciclador";
$proto28["m_columns"][] = "TelReciclador";
$proto28["m_columns"][] = "LogoASO";
$obj = new SQLTable($proto28);

$proto27["m_table"] = $obj;
$proto27["m_sql"] = "\"public\".\"Recicladores\" r";
$proto27["m_alias"] = "r";
$proto27["m_srcTableName"] = "public.GestionPesosResiduosDerVen";
$proto29=array();
$proto29["m_sql"] = "";
$proto29["m_uniontype"] = "SQLL_UNKNOWN";
	$obj = new SQLNonParsed(array(
	"m_sql" => ""
));

$proto29["m_column"]=$obj;
$proto29["m_contained"] = array();
$proto29["m_strCase"] = "";
$proto29["m_havingmode"] = false;
$proto29["m_inBrackets"] = false;
$proto29["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto29);

$proto27["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto27);

$proto0["m_fromlist"][]=$obj;
												$proto31=array();
$proto31["m_link"] = "SQLL_CROSSJOIN";
			$proto32=array();
$proto32["m_strName"] = "public.Residuos";
$proto32["m_srcTableName"] = "public.GestionPesosResiduosDerVen";
$proto32["m_columns"] = array();
$proto32["m_columns"][] = "IdResiduo";
$proto32["m_columns"][] = "DescriResiduo";
$obj = new SQLTable($proto32);

$proto31["m_table"] = $obj;
$proto31["m_sql"] = "\"public\".\"Residuos\" re";
$proto31["m_alias"] = "re";
$proto31["m_srcTableName"] = "public.GestionPesosResiduosDerVen";
$proto33=array();
$proto33["m_sql"] = "";
$proto33["m_uniontype"] = "SQLL_UNKNOWN";
	$obj = new SQLNonParsed(array(
	"m_sql" => ""
));

$proto33["m_column"]=$obj;
$proto33["m_contained"] = array();
$proto33["m_strCase"] = "";
$proto33["m_havingmode"] = false;
$proto33["m_inBrackets"] = false;
$proto33["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto33);

$proto31["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto31);

$proto0["m_fromlist"][]=$obj;
$proto0["m_groupby"] = array();
$proto0["m_orderby"] = array();
$proto0["m_srcTableName"]="public.GestionPesosResiduosDerVen";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_public_gestionpesosresiduosderven = createSqlQuery_public_gestionpesosresiduosderven();


	
		;

		

$tdatapublic_gestionpesosresiduosderven[".sqlquery"] = $queryData_public_gestionpesosresiduosderven;

$tableEvents["public.GestionPesosResiduosDerVen"] = new eventsBase;
$tdatapublic_gestionpesosresiduosderven[".hasEvents"] = false;

?>