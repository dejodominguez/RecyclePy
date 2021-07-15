<?php



$tdatapublic_gestionpesosresiduosdetven = array();
$tdatapublic_gestionpesosresiduosdetven[".searchableFields"] = array();
$tdatapublic_gestionpesosresiduosdetven[".ShortName"] = "public_gestionpesosresiduosdetven";
$tdatapublic_gestionpesosresiduosdetven[".OwnerID"] = "";
$tdatapublic_gestionpesosresiduosdetven[".OriginalTable"] = "public.GestionPesosResiduos";


$defaultPages = my_json_decode( "{\"add\":\"add\",\"edit\":\"edit\",\"export\":\"export\",\"import\":\"import\",\"list\":\"list\",\"print\":\"print\",\"search\":\"search\",\"view\":\"view\"}" );

$tdatapublic_gestionpesosresiduosdetven[".pagesByType"] = my_json_decode( "{\"add\":[\"add\"],\"edit\":[\"edit\"],\"export\":[\"export\"],\"import\":[\"import\"],\"list\":[\"list\"],\"print\":[\"print\"],\"search\":[\"search\"],\"view\":[\"view\"]}" );
$tdatapublic_gestionpesosresiduosdetven[".pages"] = types2pages( my_json_decode( "{\"add\":[\"add\"],\"edit\":[\"edit\"],\"export\":[\"export\"],\"import\":[\"import\"],\"list\":[\"list\"],\"print\":[\"print\"],\"search\":[\"search\"],\"view\":[\"view\"]}" ) );
$tdatapublic_gestionpesosresiduosdetven[".defaultPages"] = $defaultPages;

//	field labels
$fieldLabelspublic_gestionpesosresiduosdetven = array();
$fieldToolTipspublic_gestionpesosresiduosdetven = array();
$pageTitlespublic_gestionpesosresiduosdetven = array();
$placeHolderspublic_gestionpesosresiduosdetven = array();

if(mlang_getcurrentlang()=="Spanish")
{
	$fieldLabelspublic_gestionpesosresiduosdetven["Spanish"] = array();
	$fieldToolTipspublic_gestionpesosresiduosdetven["Spanish"] = array();
	$placeHolderspublic_gestionpesosresiduosdetven["Spanish"] = array();
	$pageTitlespublic_gestionpesosresiduosdetven["Spanish"] = array();
	$fieldLabelspublic_gestionpesosresiduosdetven["Spanish"]["IdGesPesResiduo"] = "Id Ges Pes Residuo";
	$fieldToolTipspublic_gestionpesosresiduosdetven["Spanish"]["IdGesPesResiduo"] = "";
	$placeHolderspublic_gestionpesosresiduosdetven["Spanish"]["IdGesPesResiduo"] = "";
	$fieldLabelspublic_gestionpesosresiduosdetven["Spanish"]["concat"] = "Concat";
	$fieldToolTipspublic_gestionpesosresiduosdetven["Spanish"]["concat"] = "";
	$placeHolderspublic_gestionpesosresiduosdetven["Spanish"]["concat"] = "";
	$fieldLabelspublic_gestionpesosresiduosdetven["Spanish"]["KilosResiduos"] = "Kilos Residuos";
	$fieldToolTipspublic_gestionpesosresiduosdetven["Spanish"]["KilosResiduos"] = "";
	$placeHolderspublic_gestionpesosresiduosdetven["Spanish"]["KilosResiduos"] = "";
	if (count($fieldToolTipspublic_gestionpesosresiduosdetven["Spanish"]))
		$tdatapublic_gestionpesosresiduosdetven[".isUseToolTips"] = true;
}


	$tdatapublic_gestionpesosresiduosdetven[".NCSearch"] = true;



$tdatapublic_gestionpesosresiduosdetven[".shortTableName"] = "public_gestionpesosresiduosdetven";
$tdatapublic_gestionpesosresiduosdetven[".nSecOptions"] = 0;

$tdatapublic_gestionpesosresiduosdetven[".mainTableOwnerID"] = "";
$tdatapublic_gestionpesosresiduosdetven[".entityType"] = 1;

$tdatapublic_gestionpesosresiduosdetven[".strOriginalTableName"] = "public.GestionPesosResiduos";

	



$tdatapublic_gestionpesosresiduosdetven[".showAddInPopup"] = false;

$tdatapublic_gestionpesosresiduosdetven[".showEditInPopup"] = false;

$tdatapublic_gestionpesosresiduosdetven[".showViewInPopup"] = false;

//page's base css files names
$popupPagesLayoutNames = array();
$tdatapublic_gestionpesosresiduosdetven[".popupPagesLayoutNames"] = $popupPagesLayoutNames;


$tdatapublic_gestionpesosresiduosdetven[".listAjax"] = false;
//	temporary
$tdatapublic_gestionpesosresiduosdetven[".listAjax"] = false;

	$tdatapublic_gestionpesosresiduosdetven[".audit"] = false;

	$tdatapublic_gestionpesosresiduosdetven[".locking"] = false;


$pages = $tdatapublic_gestionpesosresiduosdetven[".defaultPages"];

if( $pages[PAGE_EDIT] ) {
	$tdatapublic_gestionpesosresiduosdetven[".edit"] = true;
	$tdatapublic_gestionpesosresiduosdetven[".afterEditAction"] = 1;
	$tdatapublic_gestionpesosresiduosdetven[".closePopupAfterEdit"] = 1;
	$tdatapublic_gestionpesosresiduosdetven[".afterEditActionDetTable"] = "";
}

if( $pages[PAGE_ADD] ) {
$tdatapublic_gestionpesosresiduosdetven[".add"] = true;
$tdatapublic_gestionpesosresiduosdetven[".afterAddAction"] = 1;
$tdatapublic_gestionpesosresiduosdetven[".closePopupAfterAdd"] = 1;
$tdatapublic_gestionpesosresiduosdetven[".afterAddActionDetTable"] = "";
}

if( $pages[PAGE_LIST] ) {
	$tdatapublic_gestionpesosresiduosdetven[".list"] = true;
}



$tdatapublic_gestionpesosresiduosdetven[".strSortControlSettingsJSON"] = "";




if( $pages[PAGE_VIEW] ) {
$tdatapublic_gestionpesosresiduosdetven[".view"] = true;
}

if( $pages[PAGE_IMPORT] ) {
$tdatapublic_gestionpesosresiduosdetven[".import"] = true;
}

if( $pages[PAGE_EXPORT] ) {
$tdatapublic_gestionpesosresiduosdetven[".exportTo"] = true;
}

if( $pages[PAGE_PRINT] ) {
$tdatapublic_gestionpesosresiduosdetven[".printFriendly"] = true;
}



$tdatapublic_gestionpesosresiduosdetven[".showSimpleSearchOptions"] = true; // temp fix #13449

// Allow Show/Hide Fields in GRID
$tdatapublic_gestionpesosresiduosdetven[".allowShowHideFields"] = true; // temp fix #13449
//

// Allow Fields Reordering in GRID
$tdatapublic_gestionpesosresiduosdetven[".allowFieldsReordering"] = true; // temp fix #13449
//

$tdatapublic_gestionpesosresiduosdetven[".isUseAjaxSuggest"] = true;

$tdatapublic_gestionpesosresiduosdetven[".rowHighlite"] = true;



			

$tdatapublic_gestionpesosresiduosdetven[".ajaxCodeSnippetAdded"] = false;

$tdatapublic_gestionpesosresiduosdetven[".buttonsAdded"] = false;

$tdatapublic_gestionpesosresiduosdetven[".addPageEvents"] = false;

// use timepicker for search panel
$tdatapublic_gestionpesosresiduosdetven[".isUseTimeForSearch"] = false;


$tdatapublic_gestionpesosresiduosdetven[".badgeColor"] = "B22222";


$tdatapublic_gestionpesosresiduosdetven[".allSearchFields"] = array();
$tdatapublic_gestionpesosresiduosdetven[".filterFields"] = array();
$tdatapublic_gestionpesosresiduosdetven[".requiredSearchFields"] = array();

$tdatapublic_gestionpesosresiduosdetven[".googleLikeFields"] = array();
$tdatapublic_gestionpesosresiduosdetven[".googleLikeFields"][] = "IdGesPesResiduo";
$tdatapublic_gestionpesosresiduosdetven[".googleLikeFields"][] = "concat";
$tdatapublic_gestionpesosresiduosdetven[".googleLikeFields"][] = "KilosResiduos";



$tdatapublic_gestionpesosresiduosdetven[".tableType"] = "list";

$tdatapublic_gestionpesosresiduosdetven[".printerPageOrientation"] = 0;
$tdatapublic_gestionpesosresiduosdetven[".nPrinterPageScale"] = 100;

$tdatapublic_gestionpesosresiduosdetven[".nPrinterSplitRecords"] = 40;

$tdatapublic_gestionpesosresiduosdetven[".geocodingEnabled"] = false;










$tdatapublic_gestionpesosresiduosdetven[".pageSize"] = 20;

$tdatapublic_gestionpesosresiduosdetven[".warnLeavingPages"] = true;



$tstrOrderBy = "";
if(strlen($tstrOrderBy) && strtolower(substr($tstrOrderBy,0,8))!="order by")
	$tstrOrderBy = "order by ".$tstrOrderBy;
$tdatapublic_gestionpesosresiduosdetven[".strOrderBy"] = $tstrOrderBy;

$tdatapublic_gestionpesosresiduosdetven[".orderindexes"] = array();

$tdatapublic_gestionpesosresiduosdetven[".sqlHead"] = "SELECT g.\"IdGesPesResiduo\",  concat(\"IdGesPesResiduo\", ' | ', r.\"NomReciclador\", ' | ', re.\"DescriResiduo\", ' | ', \"FechaGestion\"),  \"KilosResiduos\"";
$tdatapublic_gestionpesosresiduosdetven[".sqlFrom"] = "FROM \"public\".\"GestionPesosResiduos\" AS g  , \"public\".\"Recicladores\" AS r  , \"public\".\"Residuos\" AS re";
$tdatapublic_gestionpesosresiduosdetven[".sqlWhereExpr"] = "g.\"IdReciclador\"=r.\"IdReciclador\" and g.\"IdResiduo\"=re.\"IdResiduo\"";
$tdatapublic_gestionpesosresiduosdetven[".sqlTail"] = "";










//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdatapublic_gestionpesosresiduosdetven[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdatapublic_gestionpesosresiduosdetven[".arrGroupsPerPage"] = $arrGPP;

$tdatapublic_gestionpesosresiduosdetven[".highlightSearchResults"] = true;

$tableKeyspublic_gestionpesosresiduosdetven = array();
$tableKeyspublic_gestionpesosresiduosdetven[] = "IdGesPesResiduo";
$tdatapublic_gestionpesosresiduosdetven[".Keys"] = $tableKeyspublic_gestionpesosresiduosdetven;


$tdatapublic_gestionpesosresiduosdetven[".hideMobileList"] = array();




//	IdGesPesResiduo
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "IdGesPesResiduo";
	$fdata["GoodName"] = "IdGesPesResiduo";
	$fdata["ownerTable"] = "public.GestionPesosResiduos";
	$fdata["Label"] = GetFieldLabel("public_GestionPesosResiduosDetVen","IdGesPesResiduo");
	$fdata["FieldType"] = 3;

	
		$fdata["AutoInc"] = true;

	
			

		$fdata["strField"] = "IdGesPesResiduo";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "g.\"IdGesPesResiduo\"";

	
	
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


	$tdatapublic_gestionpesosresiduosdetven["IdGesPesResiduo"] = $fdata;
		$tdatapublic_gestionpesosresiduosdetven[".searchableFields"][] = "IdGesPesResiduo";
//	concat
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "concat";
	$fdata["GoodName"] = "concat";
	$fdata["ownerTable"] = "";
	$fdata["Label"] = GetFieldLabel("public_GestionPesosResiduosDetVen","concat");
	$fdata["FieldType"] = 201;

	
	
	
			

		$fdata["strField"] = "concat";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "concat(\"IdGesPesResiduo\", ' | ', r.\"NomReciclador\", ' | ', re.\"DescriResiduo\", ' | ', \"FechaGestion\")";

	
	
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


	$tdatapublic_gestionpesosresiduosdetven["concat"] = $fdata;
		$tdatapublic_gestionpesosresiduosdetven[".searchableFields"][] = "concat";
//	KilosResiduos
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "KilosResiduos";
	$fdata["GoodName"] = "KilosResiduos";
	$fdata["ownerTable"] = "public.GestionPesosResiduos";
	$fdata["Label"] = GetFieldLabel("public_GestionPesosResiduosDetVen","KilosResiduos");
	$fdata["FieldType"] = 5;

	
	
	
			

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

	
	
	
	
	
	
		$vdata["DecimalDigits"] = 3;

	
	
	
	
	
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


	$tdatapublic_gestionpesosresiduosdetven["KilosResiduos"] = $fdata;
		$tdatapublic_gestionpesosresiduosdetven[".searchableFields"][] = "KilosResiduos";


$tables_data["public.GestionPesosResiduosDetVen"]=&$tdatapublic_gestionpesosresiduosdetven;
$field_labels["public_GestionPesosResiduosDetVen"] = &$fieldLabelspublic_gestionpesosresiduosdetven;
$fieldToolTips["public_GestionPesosResiduosDetVen"] = &$fieldToolTipspublic_gestionpesosresiduosdetven;
$placeHolders["public_GestionPesosResiduosDetVen"] = &$placeHolderspublic_gestionpesosresiduosdetven;
$page_titles["public_GestionPesosResiduosDetVen"] = &$pageTitlespublic_gestionpesosresiduosdetven;

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)
$detailsTablesData["public.GestionPesosResiduosDetVen"] = array();

// tables which are master tables for current table (detail)
$masterTablesData["public.GestionPesosResiduosDetVen"] = array();



// -----------------end  prepare master-details data arrays ------------------------------//


require_once(getabspath("classes/sql.php"));










function createSqlQuery_public_gestionpesosresiduosdetven()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "g.\"IdGesPesResiduo\",  concat(\"IdGesPesResiduo\", ' | ', r.\"NomReciclador\", ' | ', re.\"DescriResiduo\", ' | ', \"FechaGestion\"),  \"KilosResiduos\"";
$proto0["m_strFrom"] = "FROM \"public\".\"GestionPesosResiduos\" AS g  , \"public\".\"Recicladores\" AS r  , \"public\".\"Residuos\" AS re";
$proto0["m_strWhere"] = "g.\"IdReciclador\"=r.\"IdReciclador\" and g.\"IdResiduo\"=re.\"IdResiduo\"";
$proto0["m_strOrderBy"] = "";
	
		;
			$proto0["cipherer"] = null;
$proto2=array();
$proto2["m_sql"] = "g.\"IdReciclador\"=r.\"IdReciclador\" and g.\"IdResiduo\"=re.\"IdResiduo\"";
$proto2["m_uniontype"] = "SQLL_AND";
	$obj = new SQLNonParsed(array(
	"m_sql" => "g.\"IdReciclador\"=r.\"IdReciclador\" and g.\"IdResiduo\"=re.\"IdResiduo\""
));

$proto2["m_column"]=$obj;
$proto2["m_contained"] = array();
						$proto4=array();
$proto4["m_sql"] = "g.\"IdReciclador\"=r.\"IdReciclador\"";
$proto4["m_uniontype"] = "SQLL_UNKNOWN";
						$obj = new SQLField(array(
	"m_strName" => "IdReciclador",
	"m_strTable" => "g",
	"m_srcTableName" => "public.GestionPesosResiduosDetVen"
));

$proto4["m_column"]=$obj;
$proto4["m_contained"] = array();
$proto4["m_strCase"] = "=r.\"IdReciclador\"";
$proto4["m_havingmode"] = false;
$proto4["m_inBrackets"] = false;
$proto4["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto4);

			$proto2["m_contained"][]=$obj;
						$proto6=array();
$proto6["m_sql"] = "g.\"IdResiduo\"=re.\"IdResiduo\"";
$proto6["m_uniontype"] = "SQLL_UNKNOWN";
						$obj = new SQLField(array(
	"m_strName" => "IdResiduo",
	"m_strTable" => "g",
	"m_srcTableName" => "public.GestionPesosResiduosDetVen"
));

$proto6["m_column"]=$obj;
$proto6["m_contained"] = array();
$proto6["m_strCase"] = "=re.\"IdResiduo\"";
$proto6["m_havingmode"] = false;
$proto6["m_inBrackets"] = false;
$proto6["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto6);

			$proto2["m_contained"][]=$obj;
$proto2["m_strCase"] = "";
$proto2["m_havingmode"] = false;
$proto2["m_inBrackets"] = false;
$proto2["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto2);

$proto0["m_where"] = $obj;
$proto8=array();
$proto8["m_sql"] = "";
$proto8["m_uniontype"] = "SQLL_UNKNOWN";
	$obj = new SQLNonParsed(array(
	"m_sql" => ""
));

$proto8["m_column"]=$obj;
$proto8["m_contained"] = array();
$proto8["m_strCase"] = "";
$proto8["m_havingmode"] = false;
$proto8["m_inBrackets"] = false;
$proto8["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto8);

$proto0["m_having"] = $obj;
$proto0["m_fieldlist"] = array();
						$proto10=array();
			$obj = new SQLField(array(
	"m_strName" => "IdGesPesResiduo",
	"m_strTable" => "g",
	"m_srcTableName" => "public.GestionPesosResiduosDetVen"
));

$proto10["m_sql"] = "g.\"IdGesPesResiduo\"";
$proto10["m_srcTableName"] = "public.GestionPesosResiduosDetVen";
$proto10["m_expr"]=$obj;
$proto10["m_alias"] = "";
$obj = new SQLFieldListItem($proto10);

$proto0["m_fieldlist"][]=$obj;
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

$proto12["m_sql"] = "concat(\"IdGesPesResiduo\", ' | ', r.\"NomReciclador\", ' | ', re.\"DescriResiduo\", ' | ', \"FechaGestion\")";
$proto12["m_srcTableName"] = "public.GestionPesosResiduosDetVen";
$proto12["m_expr"]=$obj;
$proto12["m_alias"] = "";
$obj = new SQLFieldListItem($proto12);

$proto0["m_fieldlist"][]=$obj;
						$proto21=array();
			$obj = new SQLField(array(
	"m_strName" => "KilosResiduos",
	"m_strTable" => "g",
	"m_srcTableName" => "public.GestionPesosResiduosDetVen"
));

$proto21["m_sql"] = "\"KilosResiduos\"";
$proto21["m_srcTableName"] = "public.GestionPesosResiduosDetVen";
$proto21["m_expr"]=$obj;
$proto21["m_alias"] = "";
$obj = new SQLFieldListItem($proto21);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto23=array();
$proto23["m_link"] = "SQLL_MAIN";
			$proto24=array();
$proto24["m_strName"] = "public.GestionPesosResiduos";
$proto24["m_srcTableName"] = "public.GestionPesosResiduosDetVen";
$proto24["m_columns"] = array();
$proto24["m_columns"][] = "IdGesPesResiduo";
$proto24["m_columns"][] = "IdReciclador";
$proto24["m_columns"][] = "IdResiduo";
$proto24["m_columns"][] = "FechaGestion";
$proto24["m_columns"][] = "KilosResiduos";
$obj = new SQLTable($proto24);

$proto23["m_table"] = $obj;
$proto23["m_sql"] = "\"public\".\"GestionPesosResiduos\" AS g";
$proto23["m_alias"] = "g";
$proto23["m_srcTableName"] = "public.GestionPesosResiduosDetVen";
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
$proto28["m_srcTableName"] = "public.GestionPesosResiduosDetVen";
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
$proto27["m_sql"] = "\"public\".\"Recicladores\" AS r";
$proto27["m_alias"] = "r";
$proto27["m_srcTableName"] = "public.GestionPesosResiduosDetVen";
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
$proto32["m_srcTableName"] = "public.GestionPesosResiduosDetVen";
$proto32["m_columns"] = array();
$proto32["m_columns"][] = "IdResiduo";
$proto32["m_columns"][] = "DescriResiduo";
$obj = new SQLTable($proto32);

$proto31["m_table"] = $obj;
$proto31["m_sql"] = "\"public\".\"Residuos\" AS re";
$proto31["m_alias"] = "re";
$proto31["m_srcTableName"] = "public.GestionPesosResiduosDetVen";
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
$proto0["m_srcTableName"]="public.GestionPesosResiduosDetVen";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_public_gestionpesosresiduosdetven = createSqlQuery_public_gestionpesosresiduosdetven();


	
		;

			

$tdatapublic_gestionpesosresiduosdetven[".sqlquery"] = $queryData_public_gestionpesosresiduosdetven;

$tableEvents["public.GestionPesosResiduosDetVen"] = new eventsBase;
$tdatapublic_gestionpesosresiduosdetven[".hasEvents"] = false;

?>