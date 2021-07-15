<?php



$tdatagestionpesosresiduos1 = array();
$tdatagestionpesosresiduos1[".searchableFields"] = array();
$tdatagestionpesosresiduos1[".ShortName"] = "gestionpesosresiduos1";
$tdatagestionpesosresiduos1[".OwnerID"] = "";
$tdatagestionpesosresiduos1[".OriginalTable"] = "public.GestionPesosResiduos";


$defaultPages = my_json_decode( "{\"add\":\"add\",\"edit\":\"edit\",\"export\":\"export\",\"import\":\"import\",\"list\":\"list\",\"print\":\"print\",\"search\":\"search\",\"view\":\"view\"}" );

$tdatagestionpesosresiduos1[".pagesByType"] = my_json_decode( "{\"add\":[\"add\"],\"edit\":[\"edit\"],\"export\":[\"export\"],\"import\":[\"import\"],\"list\":[\"list\"],\"print\":[\"print\"],\"search\":[\"search\"],\"view\":[\"view\"]}" );
$tdatagestionpesosresiduos1[".pages"] = types2pages( my_json_decode( "{\"add\":[\"add\"],\"edit\":[\"edit\"],\"export\":[\"export\"],\"import\":[\"import\"],\"list\":[\"list\"],\"print\":[\"print\"],\"search\":[\"search\"],\"view\":[\"view\"]}" ) );
$tdatagestionpesosresiduos1[".defaultPages"] = $defaultPages;

//	field labels
$fieldLabelsgestionpesosresiduos1 = array();
$fieldToolTipsgestionpesosresiduos1 = array();
$pageTitlesgestionpesosresiduos1 = array();
$placeHoldersgestionpesosresiduos1 = array();

if(mlang_getcurrentlang()=="Spanish")
{
	$fieldLabelsgestionpesosresiduos1["Spanish"] = array();
	$fieldToolTipsgestionpesosresiduos1["Spanish"] = array();
	$placeHoldersgestionpesosresiduos1["Spanish"] = array();
	$pageTitlesgestionpesosresiduos1["Spanish"] = array();
	$fieldLabelsgestionpesosresiduos1["Spanish"]["IdGesPesResiduo"] = "Id Ges Pes Residuo";
	$fieldToolTipsgestionpesosresiduos1["Spanish"]["IdGesPesResiduo"] = "";
	$placeHoldersgestionpesosresiduos1["Spanish"]["IdGesPesResiduo"] = "";
	$fieldLabelsgestionpesosresiduos1["Spanish"]["concat"] = "Concat";
	$fieldToolTipsgestionpesosresiduos1["Spanish"]["concat"] = "";
	$placeHoldersgestionpesosresiduos1["Spanish"]["concat"] = "";
	$fieldLabelsgestionpesosresiduos1["Spanish"]["KilosResiduos"] = "Kilos Residuos";
	$fieldToolTipsgestionpesosresiduos1["Spanish"]["KilosResiduos"] = "";
	$placeHoldersgestionpesosresiduos1["Spanish"]["KilosResiduos"] = "";
	if (count($fieldToolTipsgestionpesosresiduos1["Spanish"]))
		$tdatagestionpesosresiduos1[".isUseToolTips"] = true;
}


	$tdatagestionpesosresiduos1[".NCSearch"] = true;



$tdatagestionpesosresiduos1[".shortTableName"] = "gestionpesosresiduos1";
$tdatagestionpesosresiduos1[".nSecOptions"] = 0;

$tdatagestionpesosresiduos1[".mainTableOwnerID"] = "";
$tdatagestionpesosresiduos1[".entityType"] = 1;

$tdatagestionpesosresiduos1[".strOriginalTableName"] = "public.GestionPesosResiduos";

	



$tdatagestionpesosresiduos1[".showAddInPopup"] = false;

$tdatagestionpesosresiduos1[".showEditInPopup"] = false;

$tdatagestionpesosresiduos1[".showViewInPopup"] = false;

//page's base css files names
$popupPagesLayoutNames = array();
$tdatagestionpesosresiduos1[".popupPagesLayoutNames"] = $popupPagesLayoutNames;


$tdatagestionpesosresiduos1[".listAjax"] = false;
//	temporary
$tdatagestionpesosresiduos1[".listAjax"] = false;

	$tdatagestionpesosresiduos1[".audit"] = false;

	$tdatagestionpesosresiduos1[".locking"] = false;


$pages = $tdatagestionpesosresiduos1[".defaultPages"];

if( $pages[PAGE_EDIT] ) {
	$tdatagestionpesosresiduos1[".edit"] = true;
	$tdatagestionpesosresiduos1[".afterEditAction"] = 1;
	$tdatagestionpesosresiduos1[".closePopupAfterEdit"] = 1;
	$tdatagestionpesosresiduos1[".afterEditActionDetTable"] = "";
}

if( $pages[PAGE_ADD] ) {
$tdatagestionpesosresiduos1[".add"] = true;
$tdatagestionpesosresiduos1[".afterAddAction"] = 1;
$tdatagestionpesosresiduos1[".closePopupAfterAdd"] = 1;
$tdatagestionpesosresiduos1[".afterAddActionDetTable"] = "";
}

if( $pages[PAGE_LIST] ) {
	$tdatagestionpesosresiduos1[".list"] = true;
}



$tdatagestionpesosresiduos1[".strSortControlSettingsJSON"] = "";




if( $pages[PAGE_VIEW] ) {
$tdatagestionpesosresiduos1[".view"] = true;
}

if( $pages[PAGE_IMPORT] ) {
$tdatagestionpesosresiduos1[".import"] = true;
}

if( $pages[PAGE_EXPORT] ) {
$tdatagestionpesosresiduos1[".exportTo"] = true;
}

if( $pages[PAGE_PRINT] ) {
$tdatagestionpesosresiduos1[".printFriendly"] = true;
}



$tdatagestionpesosresiduos1[".showSimpleSearchOptions"] = true; // temp fix #13449

// Allow Show/Hide Fields in GRID
$tdatagestionpesosresiduos1[".allowShowHideFields"] = true; // temp fix #13449
//

// Allow Fields Reordering in GRID
$tdatagestionpesosresiduos1[".allowFieldsReordering"] = true; // temp fix #13449
//

$tdatagestionpesosresiduos1[".isUseAjaxSuggest"] = true;

$tdatagestionpesosresiduos1[".rowHighlite"] = true;



			

$tdatagestionpesosresiduos1[".ajaxCodeSnippetAdded"] = false;

$tdatagestionpesosresiduos1[".buttonsAdded"] = false;

$tdatagestionpesosresiduos1[".addPageEvents"] = false;

// use timepicker for search panel
$tdatagestionpesosresiduos1[".isUseTimeForSearch"] = false;


$tdatagestionpesosresiduos1[".badgeColor"] = "B22222";


$tdatagestionpesosresiduos1[".allSearchFields"] = array();
$tdatagestionpesosresiduos1[".filterFields"] = array();
$tdatagestionpesosresiduos1[".requiredSearchFields"] = array();

$tdatagestionpesosresiduos1[".googleLikeFields"] = array();
$tdatagestionpesosresiduos1[".googleLikeFields"][] = "IdGesPesResiduo";
$tdatagestionpesosresiduos1[".googleLikeFields"][] = "concat";
$tdatagestionpesosresiduos1[".googleLikeFields"][] = "KilosResiduos";



$tdatagestionpesosresiduos1[".tableType"] = "list";

$tdatagestionpesosresiduos1[".printerPageOrientation"] = 0;
$tdatagestionpesosresiduos1[".nPrinterPageScale"] = 100;

$tdatagestionpesosresiduos1[".nPrinterSplitRecords"] = 40;

$tdatagestionpesosresiduos1[".geocodingEnabled"] = false;










$tdatagestionpesosresiduos1[".pageSize"] = 20;

$tdatagestionpesosresiduos1[".warnLeavingPages"] = true;



$tstrOrderBy = "";
if(strlen($tstrOrderBy) && strtolower(substr($tstrOrderBy,0,8))!="order by")
	$tstrOrderBy = "order by ".$tstrOrderBy;
$tdatagestionpesosresiduos1[".strOrderBy"] = $tstrOrderBy;

$tdatagestionpesosresiduos1[".orderindexes"] = array();

$tdatagestionpesosresiduos1[".sqlHead"] = "SELECT \"IdGesPesResiduo\", concat(\"IdGesPesResiduo\",' | ',r.\"NomReciclador\",' | ',re.\"DescriResiduo\",' | ',\"FechaGestion\"),  \"KilosResiduos\"";
$tdatagestionpesosresiduos1[".sqlFrom"] = "FROM \"public\".\"GestionPesosResiduos\" g, \"public\".\"Recicladores\" r, \"public\".\"Residuos\" re";
$tdatagestionpesosresiduos1[".sqlWhereExpr"] = "( ( \"IdGesPesResiduo\" = 1 ) ) and g.\"IdReciclador\"=r.\"IdReciclador\" and g.\"IdResiduo\"=re.\"IdResiduo\"";
$tdatagestionpesosresiduos1[".sqlTail"] = "";










//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdatagestionpesosresiduos1[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdatagestionpesosresiduos1[".arrGroupsPerPage"] = $arrGPP;

$tdatagestionpesosresiduos1[".highlightSearchResults"] = true;

$tableKeysgestionpesosresiduos1 = array();
$tableKeysgestionpesosresiduos1[] = "IdGesPesResiduo";
$tdatagestionpesosresiduos1[".Keys"] = $tableKeysgestionpesosresiduos1;


$tdatagestionpesosresiduos1[".hideMobileList"] = array();




//	IdGesPesResiduo
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "IdGesPesResiduo";
	$fdata["GoodName"] = "IdGesPesResiduo";
	$fdata["ownerTable"] = "public.GestionPesosResiduos";
	$fdata["Label"] = GetFieldLabel("public_GestionPesosResiduos1","IdGesPesResiduo");
	$fdata["FieldType"] = 3;

	
		$fdata["AutoInc"] = true;

	
			

		$fdata["strField"] = "IdGesPesResiduo";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "\"IdGesPesResiduo\"";

	
	
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


	$tdatagestionpesosresiduos1["IdGesPesResiduo"] = $fdata;
		$tdatagestionpesosresiduos1[".searchableFields"][] = "IdGesPesResiduo";
//	concat
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "concat";
	$fdata["GoodName"] = "concat";
	$fdata["ownerTable"] = "";
	$fdata["Label"] = GetFieldLabel("public_GestionPesosResiduos1","concat");
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


	$tdatagestionpesosresiduos1["concat"] = $fdata;
		$tdatagestionpesosresiduos1[".searchableFields"][] = "concat";
//	KilosResiduos
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "KilosResiduos";
	$fdata["GoodName"] = "KilosResiduos";
	$fdata["ownerTable"] = "public.GestionPesosResiduos";
	$fdata["Label"] = GetFieldLabel("public_GestionPesosResiduos1","KilosResiduos");
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


	$tdatagestionpesosresiduos1["KilosResiduos"] = $fdata;
		$tdatagestionpesosresiduos1[".searchableFields"][] = "KilosResiduos";


$tables_data["public.GestionPesosResiduos1"]=&$tdatagestionpesosresiduos1;
$field_labels["public_GestionPesosResiduos1"] = &$fieldLabelsgestionpesosresiduos1;
$fieldToolTips["public_GestionPesosResiduos1"] = &$fieldToolTipsgestionpesosresiduos1;
$placeHolders["public_GestionPesosResiduos1"] = &$placeHoldersgestionpesosresiduos1;
$page_titles["public_GestionPesosResiduos1"] = &$pageTitlesgestionpesosresiduos1;

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)
$detailsTablesData["public.GestionPesosResiduos1"] = array();

// tables which are master tables for current table (detail)
$masterTablesData["public.GestionPesosResiduos1"] = array();



// -----------------end  prepare master-details data arrays ------------------------------//


require_once(getabspath("classes/sql.php"));










function createSqlQuery_gestionpesosresiduos1()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "\"IdGesPesResiduo\", concat(\"IdGesPesResiduo\",' | ',r.\"NomReciclador\",' | ',re.\"DescriResiduo\",' | ',\"FechaGestion\"),  \"KilosResiduos\"";
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
	"m_srcTableName" => "public.GestionPesosResiduos1"
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
	"m_srcTableName" => "public.GestionPesosResiduos1"
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
			$obj = new SQLField(array(
	"m_strName" => "IdGesPesResiduo",
	"m_strTable" => "g",
	"m_srcTableName" => "public.GestionPesosResiduos1"
));

$proto12["m_sql"] = "\"IdGesPesResiduo\"";
$proto12["m_srcTableName"] = "public.GestionPesosResiduos1";
$proto12["m_expr"]=$obj;
$proto12["m_alias"] = "";
$obj = new SQLFieldListItem($proto12);

$proto0["m_fieldlist"][]=$obj;
						$proto14=array();
			$proto15=array();
$proto15["m_functiontype"] = "SQLF_CUSTOM";
$proto15["m_arguments"] = array();
						$obj = new SQLNonParsed(array(
	"m_sql" => "\"IdGesPesResiduo\""
));

$proto15["m_arguments"][]=$obj;
						$obj = new SQLNonParsed(array(
	"m_sql" => "' | '"
));

$proto15["m_arguments"][]=$obj;
						$obj = new SQLNonParsed(array(
	"m_sql" => "r.\"NomReciclador\""
));

$proto15["m_arguments"][]=$obj;
						$obj = new SQLNonParsed(array(
	"m_sql" => "' | '"
));

$proto15["m_arguments"][]=$obj;
						$obj = new SQLNonParsed(array(
	"m_sql" => "re.\"DescriResiduo\""
));

$proto15["m_arguments"][]=$obj;
						$obj = new SQLNonParsed(array(
	"m_sql" => "' | '"
));

$proto15["m_arguments"][]=$obj;
						$obj = new SQLNonParsed(array(
	"m_sql" => "\"FechaGestion\""
));

$proto15["m_arguments"][]=$obj;
$proto15["m_strFunctionName"] = "concat";
$obj = new SQLFunctionCall($proto15);

$proto14["m_sql"] = "concat(\"IdGesPesResiduo\",' | ',r.\"NomReciclador\",' | ',re.\"DescriResiduo\",' | ',\"FechaGestion\")";
$proto14["m_srcTableName"] = "public.GestionPesosResiduos1";
$proto14["m_expr"]=$obj;
$proto14["m_alias"] = "";
$obj = new SQLFieldListItem($proto14);

$proto0["m_fieldlist"][]=$obj;
						$proto23=array();
			$obj = new SQLField(array(
	"m_strName" => "KilosResiduos",
	"m_strTable" => "g",
	"m_srcTableName" => "public.GestionPesosResiduos1"
));

$proto23["m_sql"] = "\"KilosResiduos\"";
$proto23["m_srcTableName"] = "public.GestionPesosResiduos1";
$proto23["m_expr"]=$obj;
$proto23["m_alias"] = "";
$obj = new SQLFieldListItem($proto23);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto25=array();
$proto25["m_link"] = "SQLL_MAIN";
			$proto26=array();
$proto26["m_strName"] = "public.GestionPesosResiduos";
$proto26["m_srcTableName"] = "public.GestionPesosResiduos1";
$proto26["m_columns"] = array();
$proto26["m_columns"][] = "IdGesPesResiduo";
$proto26["m_columns"][] = "IdReciclador";
$proto26["m_columns"][] = "IdResiduo";
$proto26["m_columns"][] = "FechaGestion";
$proto26["m_columns"][] = "KilosResiduos";
$obj = new SQLTable($proto26);

$proto25["m_table"] = $obj;
$proto25["m_sql"] = "\"public\".\"GestionPesosResiduos\" g";
$proto25["m_alias"] = "g";
$proto25["m_srcTableName"] = "public.GestionPesosResiduos1";
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
$proto30["m_strName"] = "public.Recicladores";
$proto30["m_srcTableName"] = "public.GestionPesosResiduos1";
$proto30["m_columns"] = array();
$proto30["m_columns"][] = "IdReciclador";
$proto30["m_columns"][] = "FotoReciclador";
$proto30["m_columns"][] = "CIReciclador";
$proto30["m_columns"][] = "NomReciclador";
$proto30["m_columns"][] = "ApeReciclador";
$proto30["m_columns"][] = "DirReciclador";
$proto30["m_columns"][] = "TelReciclador";
$proto30["m_columns"][] = "LogoASO";
$obj = new SQLTable($proto30);

$proto29["m_table"] = $obj;
$proto29["m_sql"] = "\"public\".\"Recicladores\" r";
$proto29["m_alias"] = "r";
$proto29["m_srcTableName"] = "public.GestionPesosResiduos1";
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
$proto34["m_strName"] = "public.Residuos";
$proto34["m_srcTableName"] = "public.GestionPesosResiduos1";
$proto34["m_columns"] = array();
$proto34["m_columns"][] = "IdResiduo";
$proto34["m_columns"][] = "DescriResiduo";
$obj = new SQLTable($proto34);

$proto33["m_table"] = $obj;
$proto33["m_sql"] = "\"public\".\"Residuos\" re";
$proto33["m_alias"] = "re";
$proto33["m_srcTableName"] = "public.GestionPesosResiduos1";
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
$proto0["m_srcTableName"]="public.GestionPesosResiduos1";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_gestionpesosresiduos1 = createSqlQuery_gestionpesosresiduos1();


	
		;

			

$tdatagestionpesosresiduos1[".sqlquery"] = $queryData_gestionpesosresiduos1;

$tableEvents["public.GestionPesosResiduos1"] = new eventsBase;
$tdatagestionpesosresiduos1[".hasEvents"] = false;

?>