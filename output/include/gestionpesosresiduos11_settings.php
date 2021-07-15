<?php



$tdatagestionpesosresiduos11 = array();
$tdatagestionpesosresiduos11[".searchableFields"] = array();
$tdatagestionpesosresiduos11[".ShortName"] = "gestionpesosresiduos11";
$tdatagestionpesosresiduos11[".OwnerID"] = "";
$tdatagestionpesosresiduos11[".OriginalTable"] = "public.GestionPesosResiduos";


$defaultPages = my_json_decode( "{\"add\":\"add\",\"edit\":\"edit\",\"export\":\"export\",\"import\":\"import\",\"list\":\"list\",\"print\":\"print\",\"search\":\"search\",\"view\":\"view\"}" );

$tdatagestionpesosresiduos11[".pagesByType"] = my_json_decode( "{\"add\":[\"add\"],\"edit\":[\"edit\"],\"export\":[\"export\"],\"import\":[\"import\"],\"list\":[\"list\"],\"print\":[\"print\"],\"search\":[\"search\"],\"view\":[\"view\"]}" );
$tdatagestionpesosresiduos11[".pages"] = types2pages( my_json_decode( "{\"add\":[\"add\"],\"edit\":[\"edit\"],\"export\":[\"export\"],\"import\":[\"import\"],\"list\":[\"list\"],\"print\":[\"print\"],\"search\":[\"search\"],\"view\":[\"view\"]}" ) );
$tdatagestionpesosresiduos11[".defaultPages"] = $defaultPages;

//	field labels
$fieldLabelsgestionpesosresiduos11 = array();
$fieldToolTipsgestionpesosresiduos11 = array();
$pageTitlesgestionpesosresiduos11 = array();
$placeHoldersgestionpesosresiduos11 = array();

if(mlang_getcurrentlang()=="Spanish")
{
	$fieldLabelsgestionpesosresiduos11["Spanish"] = array();
	$fieldToolTipsgestionpesosresiduos11["Spanish"] = array();
	$placeHoldersgestionpesosresiduos11["Spanish"] = array();
	$pageTitlesgestionpesosresiduos11["Spanish"] = array();
	$fieldLabelsgestionpesosresiduos11["Spanish"]["IdGesPesResiduo"] = "Codigo";
	$fieldToolTipsgestionpesosresiduos11["Spanish"]["IdGesPesResiduo"] = "";
	$placeHoldersgestionpesosresiduos11["Spanish"]["IdGesPesResiduo"] = "";
	$fieldLabelsgestionpesosresiduos11["Spanish"]["IdReciclador"] = "Nombre Reciclador";
	$fieldToolTipsgestionpesosresiduos11["Spanish"]["IdReciclador"] = "";
	$placeHoldersgestionpesosresiduos11["Spanish"]["IdReciclador"] = "";
	$fieldLabelsgestionpesosresiduos11["Spanish"]["IdResiduo"] = "Tipos Residuos";
	$fieldToolTipsgestionpesosresiduos11["Spanish"]["IdResiduo"] = "";
	$placeHoldersgestionpesosresiduos11["Spanish"]["IdResiduo"] = "";
	$fieldLabelsgestionpesosresiduos11["Spanish"]["FechaGestion"] = "Fecha Gestion";
	$fieldToolTipsgestionpesosresiduos11["Spanish"]["FechaGestion"] = "";
	$placeHoldersgestionpesosresiduos11["Spanish"]["FechaGestion"] = "";
	$fieldLabelsgestionpesosresiduos11["Spanish"]["KilosResiduos"] = "Kilos Residuos";
	$fieldToolTipsgestionpesosresiduos11["Spanish"]["KilosResiduos"] = "";
	$placeHoldersgestionpesosresiduos11["Spanish"]["KilosResiduos"] = "";
	if (count($fieldToolTipsgestionpesosresiduos11["Spanish"]))
		$tdatagestionpesosresiduos11[".isUseToolTips"] = true;
}


	$tdatagestionpesosresiduos11[".NCSearch"] = true;



$tdatagestionpesosresiduos11[".shortTableName"] = "gestionpesosresiduos11";
$tdatagestionpesosresiduos11[".nSecOptions"] = 0;

$tdatagestionpesosresiduos11[".mainTableOwnerID"] = "";
$tdatagestionpesosresiduos11[".entityType"] = 1;

$tdatagestionpesosresiduos11[".strOriginalTableName"] = "public.GestionPesosResiduos";

	



$tdatagestionpesosresiduos11[".showAddInPopup"] = false;

$tdatagestionpesosresiduos11[".showEditInPopup"] = false;

$tdatagestionpesosresiduos11[".showViewInPopup"] = false;

//page's base css files names
$popupPagesLayoutNames = array();
$tdatagestionpesosresiduos11[".popupPagesLayoutNames"] = $popupPagesLayoutNames;


$tdatagestionpesosresiduos11[".listAjax"] = false;
//	temporary
$tdatagestionpesosresiduos11[".listAjax"] = false;

	$tdatagestionpesosresiduos11[".audit"] = false;

	$tdatagestionpesosresiduos11[".locking"] = false;


$pages = $tdatagestionpesosresiduos11[".defaultPages"];

if( $pages[PAGE_EDIT] ) {
	$tdatagestionpesosresiduos11[".edit"] = true;
	$tdatagestionpesosresiduos11[".afterEditAction"] = 1;
	$tdatagestionpesosresiduos11[".closePopupAfterEdit"] = 1;
	$tdatagestionpesosresiduos11[".afterEditActionDetTable"] = "";
}

if( $pages[PAGE_ADD] ) {
$tdatagestionpesosresiduos11[".add"] = true;
$tdatagestionpesosresiduos11[".afterAddAction"] = 1;
$tdatagestionpesosresiduos11[".closePopupAfterAdd"] = 1;
$tdatagestionpesosresiduos11[".afterAddActionDetTable"] = "";
}

if( $pages[PAGE_LIST] ) {
	$tdatagestionpesosresiduos11[".list"] = true;
}



$tdatagestionpesosresiduos11[".strSortControlSettingsJSON"] = "";




if( $pages[PAGE_VIEW] ) {
$tdatagestionpesosresiduos11[".view"] = true;
}

if( $pages[PAGE_IMPORT] ) {
$tdatagestionpesosresiduos11[".import"] = true;
}

if( $pages[PAGE_EXPORT] ) {
$tdatagestionpesosresiduos11[".exportTo"] = true;
}

if( $pages[PAGE_PRINT] ) {
$tdatagestionpesosresiduos11[".printFriendly"] = true;
}



$tdatagestionpesosresiduos11[".showSimpleSearchOptions"] = true; // temp fix #13449

// Allow Show/Hide Fields in GRID
$tdatagestionpesosresiduos11[".allowShowHideFields"] = true; // temp fix #13449
//

// Allow Fields Reordering in GRID
$tdatagestionpesosresiduos11[".allowFieldsReordering"] = true; // temp fix #13449
//

$tdatagestionpesosresiduos11[".isUseAjaxSuggest"] = true;

$tdatagestionpesosresiduos11[".rowHighlite"] = true;



			

$tdatagestionpesosresiduos11[".ajaxCodeSnippetAdded"] = false;

$tdatagestionpesosresiduos11[".buttonsAdded"] = false;

$tdatagestionpesosresiduos11[".addPageEvents"] = false;

// use timepicker for search panel
$tdatagestionpesosresiduos11[".isUseTimeForSearch"] = false;


$tdatagestionpesosresiduos11[".badgeColor"] = "5F9EA0";


$tdatagestionpesosresiduos11[".allSearchFields"] = array();
$tdatagestionpesosresiduos11[".filterFields"] = array();
$tdatagestionpesosresiduos11[".requiredSearchFields"] = array();

$tdatagestionpesosresiduos11[".googleLikeFields"] = array();
$tdatagestionpesosresiduos11[".googleLikeFields"][] = "IdGesPesResiduo";
$tdatagestionpesosresiduos11[".googleLikeFields"][] = "IdReciclador";
$tdatagestionpesosresiduos11[".googleLikeFields"][] = "IdResiduo";
$tdatagestionpesosresiduos11[".googleLikeFields"][] = "FechaGestion";
$tdatagestionpesosresiduos11[".googleLikeFields"][] = "KilosResiduos";



$tdatagestionpesosresiduos11[".tableType"] = "list";

$tdatagestionpesosresiduos11[".printerPageOrientation"] = 0;
$tdatagestionpesosresiduos11[".nPrinterPageScale"] = 100;

$tdatagestionpesosresiduos11[".nPrinterSplitRecords"] = 40;

$tdatagestionpesosresiduos11[".geocodingEnabled"] = false;










$tdatagestionpesosresiduos11[".pageSize"] = 20;

$tdatagestionpesosresiduos11[".warnLeavingPages"] = true;



$tstrOrderBy = "";
if(strlen($tstrOrderBy) && strtolower(substr($tstrOrderBy,0,8))!="order by")
	$tstrOrderBy = "order by ".$tstrOrderBy;
$tdatagestionpesosresiduos11[".strOrderBy"] = $tstrOrderBy;

$tdatagestionpesosresiduos11[".orderindexes"] = array();

$tdatagestionpesosresiduos11[".sqlHead"] = "SELECT \"IdGesPesResiduo\",  	\"IdReciclador\",  	\"IdResiduo\",  	\"FechaGestion\",  	\"KilosResiduos\"";
$tdatagestionpesosresiduos11[".sqlFrom"] = "FROM \"public\".\"GestionPesosResiduos\"";
$tdatagestionpesosresiduos11[".sqlWhereExpr"] = "";
$tdatagestionpesosresiduos11[".sqlTail"] = "";










//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdatagestionpesosresiduos11[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdatagestionpesosresiduos11[".arrGroupsPerPage"] = $arrGPP;

$tdatagestionpesosresiduos11[".highlightSearchResults"] = true;

$tableKeysgestionpesosresiduos11 = array();
$tableKeysgestionpesosresiduos11[] = "IdGesPesResiduo";
$tdatagestionpesosresiduos11[".Keys"] = $tableKeysgestionpesosresiduos11;


$tdatagestionpesosresiduos11[".hideMobileList"] = array();




//	IdGesPesResiduo
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "IdGesPesResiduo";
	$fdata["GoodName"] = "IdGesPesResiduo";
	$fdata["ownerTable"] = "public.GestionPesosResiduos";
	$fdata["Label"] = GetFieldLabel("public_GestionPesosResiduos11","IdGesPesResiduo");
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


	$tdatagestionpesosresiduos11["IdGesPesResiduo"] = $fdata;
		$tdatagestionpesosresiduos11[".searchableFields"][] = "IdGesPesResiduo";
//	IdReciclador
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "IdReciclador";
	$fdata["GoodName"] = "IdReciclador";
	$fdata["ownerTable"] = "public.GestionPesosResiduos";
	$fdata["Label"] = GetFieldLabel("public_GestionPesosResiduos11","IdReciclador");
	$fdata["FieldType"] = 3;

	
	
	
			

		$fdata["strField"] = "IdReciclador";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "\"IdReciclador\"";

	
	
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "");

	
	
	
	
	
	
	
	
	
	
	
	
		$vdata["NeedEncode"] = true;

	
		$vdata["truncateText"] = true;
	$vdata["NumberOfChars"] = 80;

	$fdata["ViewFormats"]["view"] = $vdata;
	$vdata = array("ViewFormat" => "");

	
	
	
	
	
	
	
	
	
	
	
	
		$vdata["NeedEncode"] = true;

	
		$vdata["truncateText"] = true;
	$vdata["NumberOfChars"] = 80;

	$fdata["ViewFormats"]["list"] = $vdata;
	$vdata = array("ViewFormat" => "");

	
	
	
	
	
	
	
	
	
	
	
	
		$vdata["NeedEncode"] = true;

	
		$vdata["truncateText"] = true;
	$vdata["NumberOfChars"] = 80;

	$fdata["ViewFormats"]["print"] = $vdata;
	$vdata = array("ViewFormat" => "");

	
	
	
	
	
	
	
	
	
	
	
	
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
	$edata = array("EditFormat" => "Lookup wizard");

	
		$edata["weekdayMessage"] = array("message" => "", "messageType" => "Text");
	$edata["weekdays"] = "[]";


	
	

// Begin Lookup settings
				$edata["LookupType"] = 2;
	$edata["LookupTable"] = "public.Recicladores";
			$edata["autoCompleteFieldsOnEdit"] = 0;
	$edata["autoCompleteFields"] = array();
		$edata["LCType"] = 0;

	
		
	$edata["LinkField"] = "IdReciclador";
	$edata["LinkFieldType"] = 0;
	$edata["DisplayField"] = "NomReciclador";

	

	
	$edata["LookupOrderBy"] = "";

	
	
	
	

	
	
		$edata["SelectSize"] = 1;

// End Lookup Settings


	
	
	
	
			$edata["acceptFileTypes"] = ".+$";
		$edata["acceptFileTypesHtml"] = "";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
	
	
	
		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
							
	
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


	$tdatagestionpesosresiduos11["IdReciclador"] = $fdata;
		$tdatagestionpesosresiduos11[".searchableFields"][] = "IdReciclador";
//	IdResiduo
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "IdResiduo";
	$fdata["GoodName"] = "IdResiduo";
	$fdata["ownerTable"] = "public.GestionPesosResiduos";
	$fdata["Label"] = GetFieldLabel("public_GestionPesosResiduos11","IdResiduo");
	$fdata["FieldType"] = 3;

	
	
	
			

		$fdata["strField"] = "IdResiduo";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "\"IdResiduo\"";

	
	
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "");

	
	
	
	
	
	
	
	
	
	
	
	
		$vdata["NeedEncode"] = true;

	
		$vdata["truncateText"] = true;
	$vdata["NumberOfChars"] = 80;

	$fdata["ViewFormats"]["view"] = $vdata;
	$vdata = array("ViewFormat" => "");

	
	
	
	
	
	
	
	
	
	
	
	
		$vdata["NeedEncode"] = true;

	
		$vdata["truncateText"] = true;
	$vdata["NumberOfChars"] = 80;

	$fdata["ViewFormats"]["list"] = $vdata;
	$vdata = array("ViewFormat" => "");

	
	
	
	
	
	
	
	
	
	
	
	
		$vdata["NeedEncode"] = true;

	
		$vdata["truncateText"] = true;
	$vdata["NumberOfChars"] = 80;

	$fdata["ViewFormats"]["print"] = $vdata;
	$vdata = array("ViewFormat" => "");

	
	
	
	
	
	
	
	
	
	
	
	
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
	$edata = array("EditFormat" => "Lookup wizard");

	
		$edata["weekdayMessage"] = array("message" => "", "messageType" => "Text");
	$edata["weekdays"] = "[]";


	
	

// Begin Lookup settings
				$edata["LookupType"] = 2;
	$edata["LookupTable"] = "public.Residuos";
			$edata["autoCompleteFieldsOnEdit"] = 0;
	$edata["autoCompleteFields"] = array();
		$edata["LCType"] = 0;

	
		
	$edata["LinkField"] = "IdResiduo";
	$edata["LinkFieldType"] = 0;
	$edata["DisplayField"] = "DescriResiduo";

	

	
	$edata["LookupOrderBy"] = "IdResiduo";

	
	
	
	

	
	
		$edata["SelectSize"] = 1;

// End Lookup Settings


	
	
	
	
			$edata["acceptFileTypes"] = ".+$";
		$edata["acceptFileTypesHtml"] = "";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
	
	
	
		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
							
	
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


	$tdatagestionpesosresiduos11["IdResiduo"] = $fdata;
		$tdatagestionpesosresiduos11[".searchableFields"][] = "IdResiduo";
//	FechaGestion
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "FechaGestion";
	$fdata["GoodName"] = "FechaGestion";
	$fdata["ownerTable"] = "public.GestionPesosResiduos";
	$fdata["Label"] = GetFieldLabel("public_GestionPesosResiduos11","FechaGestion");
	$fdata["FieldType"] = 7;

	
	
	
			

		$fdata["strField"] = "FechaGestion";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "\"FechaGestion\"";

	
	
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


	$tdatagestionpesosresiduos11["FechaGestion"] = $fdata;
		$tdatagestionpesosresiduos11[".searchableFields"][] = "FechaGestion";
//	KilosResiduos
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 5;
	$fdata["strName"] = "KilosResiduos";
	$fdata["GoodName"] = "KilosResiduos";
	$fdata["ownerTable"] = "public.GestionPesosResiduos";
	$fdata["Label"] = GetFieldLabel("public_GestionPesosResiduos11","KilosResiduos");
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


	$tdatagestionpesosresiduos11["KilosResiduos"] = $fdata;
		$tdatagestionpesosresiduos11[".searchableFields"][] = "KilosResiduos";


$tables_data["public.GestionPesosResiduos11"]=&$tdatagestionpesosresiduos11;
$field_labels["public_GestionPesosResiduos11"] = &$fieldLabelsgestionpesosresiduos11;
$fieldToolTips["public_GestionPesosResiduos11"] = &$fieldToolTipsgestionpesosresiduos11;
$placeHolders["public_GestionPesosResiduos11"] = &$placeHoldersgestionpesosresiduos11;
$page_titles["public_GestionPesosResiduos11"] = &$pageTitlesgestionpesosresiduos11;

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)
$detailsTablesData["public.GestionPesosResiduos11"] = array();

// tables which are master tables for current table (detail)
$masterTablesData["public.GestionPesosResiduos11"] = array();



// -----------------end  prepare master-details data arrays ------------------------------//


require_once(getabspath("classes/sql.php"));










function createSqlQuery_gestionpesosresiduos11()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "\"IdGesPesResiduo\",  	\"IdReciclador\",  	\"IdResiduo\",  	\"FechaGestion\",  	\"KilosResiduos\"";
$proto0["m_strFrom"] = "FROM \"public\".\"GestionPesosResiduos\"";
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
	"m_strName" => "IdGesPesResiduo",
	"m_strTable" => "public.GestionPesosResiduos",
	"m_srcTableName" => "public.GestionPesosResiduos11"
));

$proto6["m_sql"] = "\"IdGesPesResiduo\"";
$proto6["m_srcTableName"] = "public.GestionPesosResiduos11";
$proto6["m_expr"]=$obj;
$proto6["m_alias"] = "";
$obj = new SQLFieldListItem($proto6);

$proto0["m_fieldlist"][]=$obj;
						$proto8=array();
			$obj = new SQLField(array(
	"m_strName" => "IdReciclador",
	"m_strTable" => "public.GestionPesosResiduos",
	"m_srcTableName" => "public.GestionPesosResiduos11"
));

$proto8["m_sql"] = "\"IdReciclador\"";
$proto8["m_srcTableName"] = "public.GestionPesosResiduos11";
$proto8["m_expr"]=$obj;
$proto8["m_alias"] = "";
$obj = new SQLFieldListItem($proto8);

$proto0["m_fieldlist"][]=$obj;
						$proto10=array();
			$obj = new SQLField(array(
	"m_strName" => "IdResiduo",
	"m_strTable" => "public.GestionPesosResiduos",
	"m_srcTableName" => "public.GestionPesosResiduos11"
));

$proto10["m_sql"] = "\"IdResiduo\"";
$proto10["m_srcTableName"] = "public.GestionPesosResiduos11";
$proto10["m_expr"]=$obj;
$proto10["m_alias"] = "";
$obj = new SQLFieldListItem($proto10);

$proto0["m_fieldlist"][]=$obj;
						$proto12=array();
			$obj = new SQLField(array(
	"m_strName" => "FechaGestion",
	"m_strTable" => "public.GestionPesosResiduos",
	"m_srcTableName" => "public.GestionPesosResiduos11"
));

$proto12["m_sql"] = "\"FechaGestion\"";
$proto12["m_srcTableName"] = "public.GestionPesosResiduos11";
$proto12["m_expr"]=$obj;
$proto12["m_alias"] = "";
$obj = new SQLFieldListItem($proto12);

$proto0["m_fieldlist"][]=$obj;
						$proto14=array();
			$obj = new SQLField(array(
	"m_strName" => "KilosResiduos",
	"m_strTable" => "public.GestionPesosResiduos",
	"m_srcTableName" => "public.GestionPesosResiduos11"
));

$proto14["m_sql"] = "\"KilosResiduos\"";
$proto14["m_srcTableName"] = "public.GestionPesosResiduos11";
$proto14["m_expr"]=$obj;
$proto14["m_alias"] = "";
$obj = new SQLFieldListItem($proto14);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto16=array();
$proto16["m_link"] = "SQLL_MAIN";
			$proto17=array();
$proto17["m_strName"] = "public.GestionPesosResiduos";
$proto17["m_srcTableName"] = "public.GestionPesosResiduos11";
$proto17["m_columns"] = array();
$proto17["m_columns"][] = "IdGesPesResiduo";
$proto17["m_columns"][] = "IdReciclador";
$proto17["m_columns"][] = "IdResiduo";
$proto17["m_columns"][] = "FechaGestion";
$proto17["m_columns"][] = "KilosResiduos";
$obj = new SQLTable($proto17);

$proto16["m_table"] = $obj;
$proto16["m_sql"] = "\"public\".\"GestionPesosResiduos\"";
$proto16["m_alias"] = "";
$proto16["m_srcTableName"] = "public.GestionPesosResiduos11";
$proto18=array();
$proto18["m_sql"] = "";
$proto18["m_uniontype"] = "SQLL_UNKNOWN";
	$obj = new SQLNonParsed(array(
	"m_sql" => ""
));

$proto18["m_column"]=$obj;
$proto18["m_contained"] = array();
$proto18["m_strCase"] = "";
$proto18["m_havingmode"] = false;
$proto18["m_inBrackets"] = false;
$proto18["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto18);

$proto16["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto16);

$proto0["m_fromlist"][]=$obj;
$proto0["m_groupby"] = array();
$proto0["m_orderby"] = array();
$proto0["m_srcTableName"]="public.GestionPesosResiduos11";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_gestionpesosresiduos11 = createSqlQuery_gestionpesosresiduos11();


	
		;

					

$tdatagestionpesosresiduos11[".sqlquery"] = $queryData_gestionpesosresiduos11;

$tableEvents["public.GestionPesosResiduos11"] = new eventsBase;
$tdatagestionpesosresiduos11[".hasEvents"] = false;

?>