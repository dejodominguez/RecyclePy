<?php



$tdatagestionpesosresiduos = array();
$tdatagestionpesosresiduos[".searchableFields"] = array();
$tdatagestionpesosresiduos[".ShortName"] = "gestionpesosresiduos";
$tdatagestionpesosresiduos[".OwnerID"] = "";
$tdatagestionpesosresiduos[".OriginalTable"] = "public.GestionPesosResiduos";


$defaultPages = my_json_decode( "{\"add\":\"add\",\"edit\":\"edit\",\"export\":\"export\",\"import\":\"import\",\"list\":\"list\",\"print\":\"print\",\"search\":\"search\",\"view\":\"view\"}" );

$tdatagestionpesosresiduos[".pagesByType"] = my_json_decode( "{\"add\":[\"add\"],\"edit\":[\"edit\"],\"export\":[\"export\"],\"import\":[\"import\"],\"list\":[\"list\"],\"print\":[\"print\"],\"search\":[\"search\"],\"view\":[\"view\"]}" );
$tdatagestionpesosresiduos[".pages"] = types2pages( my_json_decode( "{\"add\":[\"add\"],\"edit\":[\"edit\"],\"export\":[\"export\"],\"import\":[\"import\"],\"list\":[\"list\"],\"print\":[\"print\"],\"search\":[\"search\"],\"view\":[\"view\"]}" ) );
$tdatagestionpesosresiduos[".defaultPages"] = $defaultPages;

//	field labels
$fieldLabelsgestionpesosresiduos = array();
$fieldToolTipsgestionpesosresiduos = array();
$pageTitlesgestionpesosresiduos = array();
$placeHoldersgestionpesosresiduos = array();

if(mlang_getcurrentlang()=="Spanish")
{
	$fieldLabelsgestionpesosresiduos["Spanish"] = array();
	$fieldToolTipsgestionpesosresiduos["Spanish"] = array();
	$placeHoldersgestionpesosresiduos["Spanish"] = array();
	$pageTitlesgestionpesosresiduos["Spanish"] = array();
	$fieldLabelsgestionpesosresiduos["Spanish"]["IdGesPesResiduo"] = "Codigo";
	$fieldToolTipsgestionpesosresiduos["Spanish"]["IdGesPesResiduo"] = "";
	$placeHoldersgestionpesosresiduos["Spanish"]["IdGesPesResiduo"] = "";
	$fieldLabelsgestionpesosresiduos["Spanish"]["IdReciclador"] = "Nombre Reciclador";
	$fieldToolTipsgestionpesosresiduos["Spanish"]["IdReciclador"] = "";
	$placeHoldersgestionpesosresiduos["Spanish"]["IdReciclador"] = "";
	$fieldLabelsgestionpesosresiduos["Spanish"]["IdResiduo"] = "Tipos Residuos";
	$fieldToolTipsgestionpesosresiduos["Spanish"]["IdResiduo"] = "";
	$placeHoldersgestionpesosresiduos["Spanish"]["IdResiduo"] = "";
	$fieldLabelsgestionpesosresiduos["Spanish"]["FechaGestion"] = "Fecha Gestion";
	$fieldToolTipsgestionpesosresiduos["Spanish"]["FechaGestion"] = "";
	$placeHoldersgestionpesosresiduos["Spanish"]["FechaGestion"] = "";
	$fieldLabelsgestionpesosresiduos["Spanish"]["KilosResiduos"] = "Kilos Residuos";
	$fieldToolTipsgestionpesosresiduos["Spanish"]["KilosResiduos"] = "";
	$placeHoldersgestionpesosresiduos["Spanish"]["KilosResiduos"] = "";
	if (count($fieldToolTipsgestionpesosresiduos["Spanish"]))
		$tdatagestionpesosresiduos[".isUseToolTips"] = true;
}


	$tdatagestionpesosresiduos[".NCSearch"] = true;



$tdatagestionpesosresiduos[".shortTableName"] = "gestionpesosresiduos";
$tdatagestionpesosresiduos[".nSecOptions"] = 0;

$tdatagestionpesosresiduos[".mainTableOwnerID"] = "";
$tdatagestionpesosresiduos[".entityType"] = 0;

$tdatagestionpesosresiduos[".strOriginalTableName"] = "public.GestionPesosResiduos";

	



$tdatagestionpesosresiduos[".showAddInPopup"] = false;

$tdatagestionpesosresiduos[".showEditInPopup"] = false;

$tdatagestionpesosresiduos[".showViewInPopup"] = false;

//page's base css files names
$popupPagesLayoutNames = array();
$tdatagestionpesosresiduos[".popupPagesLayoutNames"] = $popupPagesLayoutNames;


$tdatagestionpesosresiduos[".listAjax"] = false;
//	temporary
$tdatagestionpesosresiduos[".listAjax"] = false;

	$tdatagestionpesosresiduos[".audit"] = false;

	$tdatagestionpesosresiduos[".locking"] = false;


$pages = $tdatagestionpesosresiduos[".defaultPages"];

if( $pages[PAGE_EDIT] ) {
	$tdatagestionpesosresiduos[".edit"] = true;
	$tdatagestionpesosresiduos[".afterEditAction"] = 1;
	$tdatagestionpesosresiduos[".closePopupAfterEdit"] = 1;
	$tdatagestionpesosresiduos[".afterEditActionDetTable"] = "";
}

if( $pages[PAGE_ADD] ) {
$tdatagestionpesosresiduos[".add"] = true;
$tdatagestionpesosresiduos[".afterAddAction"] = 1;
$tdatagestionpesosresiduos[".closePopupAfterAdd"] = 1;
$tdatagestionpesosresiduos[".afterAddActionDetTable"] = "";
}

if( $pages[PAGE_LIST] ) {
	$tdatagestionpesosresiduos[".list"] = true;
}



$tdatagestionpesosresiduos[".strSortControlSettingsJSON"] = "";




if( $pages[PAGE_VIEW] ) {
$tdatagestionpesosresiduos[".view"] = true;
}

if( $pages[PAGE_IMPORT] ) {
$tdatagestionpesosresiduos[".import"] = true;
}

if( $pages[PAGE_EXPORT] ) {
$tdatagestionpesosresiduos[".exportTo"] = true;
}

if( $pages[PAGE_PRINT] ) {
$tdatagestionpesosresiduos[".printFriendly"] = true;
}



$tdatagestionpesosresiduos[".showSimpleSearchOptions"] = true; // temp fix #13449

// Allow Show/Hide Fields in GRID
$tdatagestionpesosresiduos[".allowShowHideFields"] = true; // temp fix #13449
//

// Allow Fields Reordering in GRID
$tdatagestionpesosresiduos[".allowFieldsReordering"] = true; // temp fix #13449
//

$tdatagestionpesosresiduos[".isUseAjaxSuggest"] = true;

$tdatagestionpesosresiduos[".rowHighlite"] = true;



												

$tdatagestionpesosresiduos[".ajaxCodeSnippetAdded"] = false;

$tdatagestionpesosresiduos[".buttonsAdded"] = false;

$tdatagestionpesosresiduos[".addPageEvents"] = false;

// use timepicker for search panel
$tdatagestionpesosresiduos[".isUseTimeForSearch"] = false;


$tdatagestionpesosresiduos[".badgeColor"] = "e67349";


$tdatagestionpesosresiduos[".allSearchFields"] = array();
$tdatagestionpesosresiduos[".filterFields"] = array();
$tdatagestionpesosresiduos[".requiredSearchFields"] = array();

$tdatagestionpesosresiduos[".googleLikeFields"] = array();
$tdatagestionpesosresiduos[".googleLikeFields"][] = "IdGesPesResiduo";
$tdatagestionpesosresiduos[".googleLikeFields"][] = "IdReciclador";
$tdatagestionpesosresiduos[".googleLikeFields"][] = "IdResiduo";
$tdatagestionpesosresiduos[".googleLikeFields"][] = "FechaGestion";
$tdatagestionpesosresiduos[".googleLikeFields"][] = "KilosResiduos";



$tdatagestionpesosresiduos[".tableType"] = "list";

$tdatagestionpesosresiduos[".printerPageOrientation"] = 0;
$tdatagestionpesosresiduos[".nPrinterPageScale"] = 100;

$tdatagestionpesosresiduos[".nPrinterSplitRecords"] = 40;

$tdatagestionpesosresiduos[".geocodingEnabled"] = false;










$tdatagestionpesosresiduos[".pageSize"] = 20;

$tdatagestionpesosresiduos[".warnLeavingPages"] = true;



$tstrOrderBy = "";
if(strlen($tstrOrderBy) && strtolower(substr($tstrOrderBy,0,8))!="order by")
	$tstrOrderBy = "order by ".$tstrOrderBy;
$tdatagestionpesosresiduos[".strOrderBy"] = $tstrOrderBy;

$tdatagestionpesosresiduos[".orderindexes"] = array();

$tdatagestionpesosresiduos[".sqlHead"] = "SELECT \"IdGesPesResiduo\",  	\"IdReciclador\",  	\"IdResiduo\",  	\"FechaGestion\",  	\"KilosResiduos\"";
$tdatagestionpesosresiduos[".sqlFrom"] = "FROM \"public\".\"GestionPesosResiduos\"";
$tdatagestionpesosresiduos[".sqlWhereExpr"] = "";
$tdatagestionpesosresiduos[".sqlTail"] = "";










//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdatagestionpesosresiduos[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdatagestionpesosresiduos[".arrGroupsPerPage"] = $arrGPP;

$tdatagestionpesosresiduos[".highlightSearchResults"] = true;

$tableKeysgestionpesosresiduos = array();
$tableKeysgestionpesosresiduos[] = "IdGesPesResiduo";
$tdatagestionpesosresiduos[".Keys"] = $tableKeysgestionpesosresiduos;


$tdatagestionpesosresiduos[".hideMobileList"] = array();




//	IdGesPesResiduo
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "IdGesPesResiduo";
	$fdata["GoodName"] = "IdGesPesResiduo";
	$fdata["ownerTable"] = "public.GestionPesosResiduos";
	$fdata["Label"] = GetFieldLabel("public_GestionPesosResiduos","IdGesPesResiduo");
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


	$tdatagestionpesosresiduos["IdGesPesResiduo"] = $fdata;
		$tdatagestionpesosresiduos[".searchableFields"][] = "IdGesPesResiduo";
//	IdReciclador
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "IdReciclador";
	$fdata["GoodName"] = "IdReciclador";
	$fdata["ownerTable"] = "public.GestionPesosResiduos";
	$fdata["Label"] = GetFieldLabel("public_GestionPesosResiduos","IdReciclador");
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
	$edata["DisplayField"] = " concat(\"NomReciclador\",'  ',\"ApeReciclador\")   ";

	

		$edata["CustomDisplay"] = "true";

	$edata["LookupOrderBy"] = "";

	
	
	
	

	
	
		$edata["SelectSize"] = 1;

// End Lookup Settings


		$edata["IsRequired"] = true;

	
	
	
			$edata["acceptFileTypes"] = ".+$";
		$edata["acceptFileTypesHtml"] = "";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
	
	
	
		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
						$edata["validateAs"]["basicValidate"][] = "IsRequired";
		
	
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


	$tdatagestionpesosresiduos["IdReciclador"] = $fdata;
		$tdatagestionpesosresiduos[".searchableFields"][] = "IdReciclador";
//	IdResiduo
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "IdResiduo";
	$fdata["GoodName"] = "IdResiduo";
	$fdata["ownerTable"] = "public.GestionPesosResiduos";
	$fdata["Label"] = GetFieldLabel("public_GestionPesosResiduos","IdResiduo");
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


		$edata["IsRequired"] = true;

	
	
	
			$edata["acceptFileTypes"] = ".+$";
		$edata["acceptFileTypesHtml"] = "";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
	
	
	
		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
						$edata["validateAs"]["basicValidate"][] = "IsRequired";
		
	
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


	$tdatagestionpesosresiduos["IdResiduo"] = $fdata;
		$tdatagestionpesosresiduos[".searchableFields"][] = "IdResiduo";
//	FechaGestion
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "FechaGestion";
	$fdata["GoodName"] = "FechaGestion";
	$fdata["ownerTable"] = "public.GestionPesosResiduos";
	$fdata["Label"] = GetFieldLabel("public_GestionPesosResiduos","FechaGestion");
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

	
		$edata["weekdayMessage"] = array("message" => "Invalid week day", "messageType" => "Text");
	$edata["weekdays"] = "[]";


	
	



		$edata["IsRequired"] = true;

	
	
	
			$edata["acceptFileTypes"] = ".+$";
		$edata["acceptFileTypesHtml"] = "";

		$edata["maxNumberOfFiles"] = 1;

	
	
		$edata["DateEditType"] = 5;
	$edata["InitialYearFactor"] = 100;
	$edata["LastYearFactor"] = 10;

	
	
	
		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
						$edata["validateAs"]["basicValidate"][] = "IsRequired";
		
	
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


	$tdatagestionpesosresiduos["FechaGestion"] = $fdata;
		$tdatagestionpesosresiduos[".searchableFields"][] = "FechaGestion";
//	KilosResiduos
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 5;
	$fdata["strName"] = "KilosResiduos";
	$fdata["GoodName"] = "KilosResiduos";
	$fdata["ownerTable"] = "public.GestionPesosResiduos";
	$fdata["Label"] = GetFieldLabel("public_GestionPesosResiduos","KilosResiduos");
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


	$tdatagestionpesosresiduos["KilosResiduos"] = $fdata;
		$tdatagestionpesosresiduos[".searchableFields"][] = "KilosResiduos";


$tables_data["public.GestionPesosResiduos"]=&$tdatagestionpesosresiduos;
$field_labels["public_GestionPesosResiduos"] = &$fieldLabelsgestionpesosresiduos;
$fieldToolTips["public_GestionPesosResiduos"] = &$fieldToolTipsgestionpesosresiduos;
$placeHolders["public_GestionPesosResiduos"] = &$placeHoldersgestionpesosresiduos;
$page_titles["public_GestionPesosResiduos"] = &$pageTitlesgestionpesosresiduos;

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)
$detailsTablesData["public.GestionPesosResiduos"] = array();

// tables which are master tables for current table (detail)
$masterTablesData["public.GestionPesosResiduos"] = array();



	
				$strOriginalDetailsTable="public.Recicladores";
	$masterParams = array();
	$masterParams["mDataSourceTable"]="public.Recicladores";
	$masterParams["mOriginalTable"]= $strOriginalDetailsTable;
	$masterParams["mShortTable"]= "recicladores";
	$masterParams["masterKeys"]= array();
	$masterParams["detailKeys"]= array();

	$masterParams["type"] = PAGE_LIST;
					$masterTablesData["public.GestionPesosResiduos"][0] = $masterParams;
				$masterTablesData["public.GestionPesosResiduos"][0]["masterKeys"] = array();
	$masterTablesData["public.GestionPesosResiduos"][0]["masterKeys"][]="IdReciclador";
				$masterTablesData["public.GestionPesosResiduos"][0]["detailKeys"] = array();
	$masterTablesData["public.GestionPesosResiduos"][0]["detailKeys"][]="IdReciclador";
		
	
				$strOriginalDetailsTable="public.Residuos";
	$masterParams = array();
	$masterParams["mDataSourceTable"]="public.Residuos";
	$masterParams["mOriginalTable"]= $strOriginalDetailsTable;
	$masterParams["mShortTable"]= "residuos";
	$masterParams["masterKeys"]= array();
	$masterParams["detailKeys"]= array();

	$masterParams["type"] = PAGE_LIST;
					$masterTablesData["public.GestionPesosResiduos"][1] = $masterParams;
				$masterTablesData["public.GestionPesosResiduos"][1]["masterKeys"] = array();
	$masterTablesData["public.GestionPesosResiduos"][1]["masterKeys"][]="IdResiduo";
				$masterTablesData["public.GestionPesosResiduos"][1]["detailKeys"] = array();
	$masterTablesData["public.GestionPesosResiduos"][1]["detailKeys"][]="IdResiduo";
		
	
				$strOriginalDetailsTable="public.DetalleVentas";
	$masterParams = array();
	$masterParams["mDataSourceTable"]="public.DetalleVentas";
	$masterParams["mOriginalTable"]= $strOriginalDetailsTable;
	$masterParams["mShortTable"]= "detalleventas";
	$masterParams["masterKeys"]= array();
	$masterParams["detailKeys"]= array();

	$masterParams["type"] = PAGE_LIST;
					$masterTablesData["public.GestionPesosResiduos"][2] = $masterParams;
				$masterTablesData["public.GestionPesosResiduos"][2]["masterKeys"] = array();
	$masterTablesData["public.GestionPesosResiduos"][2]["masterKeys"][]="IdFGesPesResiduo";
				$masterTablesData["public.GestionPesosResiduos"][2]["detailKeys"] = array();
	$masterTablesData["public.GestionPesosResiduos"][2]["detailKeys"][]="IdGesPesResiduo";
		
// -----------------end  prepare master-details data arrays ------------------------------//


require_once(getabspath("classes/sql.php"));










function createSqlQuery_gestionpesosresiduos()
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
	"m_srcTableName" => "public.GestionPesosResiduos"
));

$proto6["m_sql"] = "\"IdGesPesResiduo\"";
$proto6["m_srcTableName"] = "public.GestionPesosResiduos";
$proto6["m_expr"]=$obj;
$proto6["m_alias"] = "";
$obj = new SQLFieldListItem($proto6);

$proto0["m_fieldlist"][]=$obj;
						$proto8=array();
			$obj = new SQLField(array(
	"m_strName" => "IdReciclador",
	"m_strTable" => "public.GestionPesosResiduos",
	"m_srcTableName" => "public.GestionPesosResiduos"
));

$proto8["m_sql"] = "\"IdReciclador\"";
$proto8["m_srcTableName"] = "public.GestionPesosResiduos";
$proto8["m_expr"]=$obj;
$proto8["m_alias"] = "";
$obj = new SQLFieldListItem($proto8);

$proto0["m_fieldlist"][]=$obj;
						$proto10=array();
			$obj = new SQLField(array(
	"m_strName" => "IdResiduo",
	"m_strTable" => "public.GestionPesosResiduos",
	"m_srcTableName" => "public.GestionPesosResiduos"
));

$proto10["m_sql"] = "\"IdResiduo\"";
$proto10["m_srcTableName"] = "public.GestionPesosResiduos";
$proto10["m_expr"]=$obj;
$proto10["m_alias"] = "";
$obj = new SQLFieldListItem($proto10);

$proto0["m_fieldlist"][]=$obj;
						$proto12=array();
			$obj = new SQLField(array(
	"m_strName" => "FechaGestion",
	"m_strTable" => "public.GestionPesosResiduos",
	"m_srcTableName" => "public.GestionPesosResiduos"
));

$proto12["m_sql"] = "\"FechaGestion\"";
$proto12["m_srcTableName"] = "public.GestionPesosResiduos";
$proto12["m_expr"]=$obj;
$proto12["m_alias"] = "";
$obj = new SQLFieldListItem($proto12);

$proto0["m_fieldlist"][]=$obj;
						$proto14=array();
			$obj = new SQLField(array(
	"m_strName" => "KilosResiduos",
	"m_strTable" => "public.GestionPesosResiduos",
	"m_srcTableName" => "public.GestionPesosResiduos"
));

$proto14["m_sql"] = "\"KilosResiduos\"";
$proto14["m_srcTableName"] = "public.GestionPesosResiduos";
$proto14["m_expr"]=$obj;
$proto14["m_alias"] = "";
$obj = new SQLFieldListItem($proto14);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto16=array();
$proto16["m_link"] = "SQLL_MAIN";
			$proto17=array();
$proto17["m_strName"] = "public.GestionPesosResiduos";
$proto17["m_srcTableName"] = "public.GestionPesosResiduos";
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
$proto16["m_srcTableName"] = "public.GestionPesosResiduos";
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
$proto0["m_srcTableName"]="public.GestionPesosResiduos";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_gestionpesosresiduos = createSqlQuery_gestionpesosresiduos();


	
		;

					

$tdatagestionpesosresiduos[".sqlquery"] = $queryData_gestionpesosresiduos;

$tableEvents["public.GestionPesosResiduos"] = new eventsBase;
$tdatagestionpesosresiduos[".hasEvents"] = false;

?>