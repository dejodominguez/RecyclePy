<?php



$tdatagestionregistrosorigen2 = array();
$tdatagestionregistrosorigen2[".searchableFields"] = array();
$tdatagestionregistrosorigen2[".ShortName"] = "gestionregistrosorigen2";
$tdatagestionregistrosorigen2[".OwnerID"] = "";
$tdatagestionregistrosorigen2[".OriginalTable"] = "public.GestionRegistrosOrigen2";


$defaultPages = my_json_decode( "{\"add\":\"add\",\"edit\":\"edit\",\"export\":\"export\",\"import\":\"import\",\"list\":\"list\",\"print\":\"print\",\"search\":\"search\",\"view\":\"view\"}" );

$tdatagestionregistrosorigen2[".pagesByType"] = my_json_decode( "{\"add\":[\"add\"],\"edit\":[\"edit\"],\"export\":[\"export\"],\"import\":[\"import\"],\"list\":[\"list\"],\"print\":[\"print\"],\"search\":[\"search\"],\"view\":[\"view\"]}" );
$tdatagestionregistrosorigen2[".pages"] = types2pages( my_json_decode( "{\"add\":[\"add\"],\"edit\":[\"edit\"],\"export\":[\"export\"],\"import\":[\"import\"],\"list\":[\"list\"],\"print\":[\"print\"],\"search\":[\"search\"],\"view\":[\"view\"]}" ) );
$tdatagestionregistrosorigen2[".defaultPages"] = $defaultPages;

//	field labels
$fieldLabelsgestionregistrosorigen2 = array();
$fieldToolTipsgestionregistrosorigen2 = array();
$pageTitlesgestionregistrosorigen2 = array();
$placeHoldersgestionregistrosorigen2 = array();

if(mlang_getcurrentlang()=="Spanish")
{
	$fieldLabelsgestionregistrosorigen2["Spanish"] = array();
	$fieldToolTipsgestionregistrosorigen2["Spanish"] = array();
	$placeHoldersgestionregistrosorigen2["Spanish"] = array();
	$pageTitlesgestionregistrosorigen2["Spanish"] = array();
	$fieldLabelsgestionregistrosorigen2["Spanish"]["IdGesRegOrigen"] = "Id Ges Reg Origen";
	$fieldToolTipsgestionregistrosorigen2["Spanish"]["IdGesRegOrigen"] = "";
	$placeHoldersgestionregistrosorigen2["Spanish"]["IdGesRegOrigen"] = "";
	$fieldLabelsgestionregistrosorigen2["Spanish"]["IdResiduo"] = "Id Residuo";
	$fieldToolTipsgestionregistrosorigen2["Spanish"]["IdResiduo"] = "";
	$placeHoldersgestionregistrosorigen2["Spanish"]["IdResiduo"] = "";
	$fieldLabelsgestionregistrosorigen2["Spanish"]["IdMedTipOrigen"] = "Id Med Tip Origen";
	$fieldToolTipsgestionregistrosorigen2["Spanish"]["IdMedTipOrigen"] = "";
	$placeHoldersgestionregistrosorigen2["Spanish"]["IdMedTipOrigen"] = "";
	$fieldLabelsgestionregistrosorigen2["Spanish"]["CantidadOrigen"] = "Cantidad Origen";
	$fieldToolTipsgestionregistrosorigen2["Spanish"]["CantidadOrigen"] = "";
	$placeHoldersgestionregistrosorigen2["Spanish"]["CantidadOrigen"] = "";
	$fieldLabelsgestionregistrosorigen2["Spanish"]["IdUsuario"] = "Id Usuario";
	$fieldToolTipsgestionregistrosorigen2["Spanish"]["IdUsuario"] = "";
	$placeHoldersgestionregistrosorigen2["Spanish"]["IdUsuario"] = "";
	$fieldLabelsgestionregistrosorigen2["Spanish"]["Lat"] = "Lat";
	$fieldToolTipsgestionregistrosorigen2["Spanish"]["Lat"] = "";
	$placeHoldersgestionregistrosorigen2["Spanish"]["Lat"] = "";
	$fieldLabelsgestionregistrosorigen2["Spanish"]["Lng"] = "Lng";
	$fieldToolTipsgestionregistrosorigen2["Spanish"]["Lng"] = "";
	$placeHoldersgestionregistrosorigen2["Spanish"]["Lng"] = "";
	$fieldLabelsgestionregistrosorigen2["Spanish"]["Mapa"] = "Mapa";
	$fieldToolTipsgestionregistrosorigen2["Spanish"]["Mapa"] = "";
	$placeHoldersgestionregistrosorigen2["Spanish"]["Mapa"] = "";
	$fieldLabelsgestionregistrosorigen2["Spanish"]["FotoOrigen"] = "Foto Origen";
	$fieldToolTipsgestionregistrosorigen2["Spanish"]["FotoOrigen"] = "";
	$placeHoldersgestionregistrosorigen2["Spanish"]["FotoOrigen"] = "";
	if (count($fieldToolTipsgestionregistrosorigen2["Spanish"]))
		$tdatagestionregistrosorigen2[".isUseToolTips"] = true;
}


	$tdatagestionregistrosorigen2[".NCSearch"] = true;



$tdatagestionregistrosorigen2[".shortTableName"] = "gestionregistrosorigen2";
$tdatagestionregistrosorigen2[".nSecOptions"] = 0;

$tdatagestionregistrosorigen2[".mainTableOwnerID"] = "";
$tdatagestionregistrosorigen2[".entityType"] = 0;

$tdatagestionregistrosorigen2[".strOriginalTableName"] = "public.GestionRegistrosOrigen2";

	



$tdatagestionregistrosorigen2[".showAddInPopup"] = false;

$tdatagestionregistrosorigen2[".showEditInPopup"] = false;

$tdatagestionregistrosorigen2[".showViewInPopup"] = false;

//page's base css files names
$popupPagesLayoutNames = array();
$tdatagestionregistrosorigen2[".popupPagesLayoutNames"] = $popupPagesLayoutNames;


$tdatagestionregistrosorigen2[".listAjax"] = false;
//	temporary
$tdatagestionregistrosorigen2[".listAjax"] = false;

	$tdatagestionregistrosorigen2[".audit"] = false;

	$tdatagestionregistrosorigen2[".locking"] = false;


$pages = $tdatagestionregistrosorigen2[".defaultPages"];

if( $pages[PAGE_EDIT] ) {
	$tdatagestionregistrosorigen2[".edit"] = true;
	$tdatagestionregistrosorigen2[".afterEditAction"] = 1;
	$tdatagestionregistrosorigen2[".closePopupAfterEdit"] = 1;
	$tdatagestionregistrosorigen2[".afterEditActionDetTable"] = "";
}

if( $pages[PAGE_ADD] ) {
$tdatagestionregistrosorigen2[".add"] = true;
$tdatagestionregistrosorigen2[".afterAddAction"] = 1;
$tdatagestionregistrosorigen2[".closePopupAfterAdd"] = 1;
$tdatagestionregistrosorigen2[".afterAddActionDetTable"] = "";
}

if( $pages[PAGE_LIST] ) {
	$tdatagestionregistrosorigen2[".list"] = true;
}



$tdatagestionregistrosorigen2[".strSortControlSettingsJSON"] = "";




if( $pages[PAGE_VIEW] ) {
$tdatagestionregistrosorigen2[".view"] = true;
}

if( $pages[PAGE_IMPORT] ) {
$tdatagestionregistrosorigen2[".import"] = true;
}

if( $pages[PAGE_EXPORT] ) {
$tdatagestionregistrosorigen2[".exportTo"] = true;
}

if( $pages[PAGE_PRINT] ) {
$tdatagestionregistrosorigen2[".printFriendly"] = true;
}



$tdatagestionregistrosorigen2[".showSimpleSearchOptions"] = true; // temp fix #13449

// Allow Show/Hide Fields in GRID
$tdatagestionregistrosorigen2[".allowShowHideFields"] = true; // temp fix #13449
//

// Allow Fields Reordering in GRID
$tdatagestionregistrosorigen2[".allowFieldsReordering"] = true; // temp fix #13449
//

$tdatagestionregistrosorigen2[".isUseAjaxSuggest"] = true;

$tdatagestionregistrosorigen2[".rowHighlite"] = true;



			

$tdatagestionregistrosorigen2[".ajaxCodeSnippetAdded"] = false;

$tdatagestionregistrosorigen2[".buttonsAdded"] = false;

$tdatagestionregistrosorigen2[".addPageEvents"] = false;

// use timepicker for search panel
$tdatagestionregistrosorigen2[".isUseTimeForSearch"] = false;


$tdatagestionregistrosorigen2[".badgeColor"] = "CFAE83";


$tdatagestionregistrosorigen2[".allSearchFields"] = array();
$tdatagestionregistrosorigen2[".filterFields"] = array();
$tdatagestionregistrosorigen2[".requiredSearchFields"] = array();

$tdatagestionregistrosorigen2[".googleLikeFields"] = array();
$tdatagestionregistrosorigen2[".googleLikeFields"][] = "IdGesRegOrigen";
$tdatagestionregistrosorigen2[".googleLikeFields"][] = "IdResiduo";
$tdatagestionregistrosorigen2[".googleLikeFields"][] = "IdMedTipOrigen";
$tdatagestionregistrosorigen2[".googleLikeFields"][] = "CantidadOrigen";
$tdatagestionregistrosorigen2[".googleLikeFields"][] = "IdUsuario";
$tdatagestionregistrosorigen2[".googleLikeFields"][] = "Lat";
$tdatagestionregistrosorigen2[".googleLikeFields"][] = "Lng";
$tdatagestionregistrosorigen2[".googleLikeFields"][] = "Mapa";
$tdatagestionregistrosorigen2[".googleLikeFields"][] = "FotoOrigen";



$tdatagestionregistrosorigen2[".tableType"] = "list";

$tdatagestionregistrosorigen2[".printerPageOrientation"] = 0;
$tdatagestionregistrosorigen2[".nPrinterPageScale"] = 100;

$tdatagestionregistrosorigen2[".nPrinterSplitRecords"] = 40;

$tdatagestionregistrosorigen2[".geocodingEnabled"] = false;










$tdatagestionregistrosorigen2[".pageSize"] = 20;

$tdatagestionregistrosorigen2[".warnLeavingPages"] = true;



$tstrOrderBy = "";
if(strlen($tstrOrderBy) && strtolower(substr($tstrOrderBy,0,8))!="order by")
	$tstrOrderBy = "order by ".$tstrOrderBy;
$tdatagestionregistrosorigen2[".strOrderBy"] = $tstrOrderBy;

$tdatagestionregistrosorigen2[".orderindexes"] = array();

$tdatagestionregistrosorigen2[".sqlHead"] = "SELECT \"IdGesRegOrigen\",  	\"IdResiduo\",  	\"IdMedTipOrigen\",  	\"CantidadOrigen\",  	\"IdUsuario\",  	\"Lat\",  	\"Lng\",  	\"Mapa\",  	\"FotoOrigen\"";
$tdatagestionregistrosorigen2[".sqlFrom"] = "FROM \"public\".\"GestionRegistrosOrigen2\"";
$tdatagestionregistrosorigen2[".sqlWhereExpr"] = "";
$tdatagestionregistrosorigen2[".sqlTail"] = "";










//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdatagestionregistrosorigen2[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdatagestionregistrosorigen2[".arrGroupsPerPage"] = $arrGPP;

$tdatagestionregistrosorigen2[".highlightSearchResults"] = true;

$tableKeysgestionregistrosorigen2 = array();
$tableKeysgestionregistrosorigen2[] = "IdGesRegOrigen";
$tdatagestionregistrosorigen2[".Keys"] = $tableKeysgestionregistrosorigen2;


$tdatagestionregistrosorigen2[".hideMobileList"] = array();




//	IdGesRegOrigen
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "IdGesRegOrigen";
	$fdata["GoodName"] = "IdGesRegOrigen";
	$fdata["ownerTable"] = "public.GestionRegistrosOrigen2";
	$fdata["Label"] = GetFieldLabel("public_GestionRegistrosOrigen2","IdGesRegOrigen");
	$fdata["FieldType"] = 3;

	
		$fdata["AutoInc"] = true;

	
			

		$fdata["strField"] = "IdGesRegOrigen";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "\"IdGesRegOrigen\"";

	
	
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


	$tdatagestionregistrosorigen2["IdGesRegOrigen"] = $fdata;
		$tdatagestionregistrosorigen2[".searchableFields"][] = "IdGesRegOrigen";
//	IdResiduo
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "IdResiduo";
	$fdata["GoodName"] = "IdResiduo";
	$fdata["ownerTable"] = "public.GestionRegistrosOrigen2";
	$fdata["Label"] = GetFieldLabel("public_GestionRegistrosOrigen2","IdResiduo");
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


	$tdatagestionregistrosorigen2["IdResiduo"] = $fdata;
		$tdatagestionregistrosorigen2[".searchableFields"][] = "IdResiduo";
//	IdMedTipOrigen
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "IdMedTipOrigen";
	$fdata["GoodName"] = "IdMedTipOrigen";
	$fdata["ownerTable"] = "public.GestionRegistrosOrigen2";
	$fdata["Label"] = GetFieldLabel("public_GestionRegistrosOrigen2","IdMedTipOrigen");
	$fdata["FieldType"] = 3;

	
	
	
			

		$fdata["strField"] = "IdMedTipOrigen";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "\"IdMedTipOrigen\"";

	
	
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


	$tdatagestionregistrosorigen2["IdMedTipOrigen"] = $fdata;
		$tdatagestionregistrosorigen2[".searchableFields"][] = "IdMedTipOrigen";
//	CantidadOrigen
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "CantidadOrigen";
	$fdata["GoodName"] = "CantidadOrigen";
	$fdata["ownerTable"] = "public.GestionRegistrosOrigen2";
	$fdata["Label"] = GetFieldLabel("public_GestionRegistrosOrigen2","CantidadOrigen");
	$fdata["FieldType"] = 14;

	
	
	
			

		$fdata["strField"] = "CantidadOrigen";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "\"CantidadOrigen\"";

	
	
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "Number");

	
	
	
	
	
	
		$vdata["DecimalDigits"] = 0;

	
	
	
	
	
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


	$tdatagestionregistrosorigen2["CantidadOrigen"] = $fdata;
		$tdatagestionregistrosorigen2[".searchableFields"][] = "CantidadOrigen";
//	IdUsuario
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 5;
	$fdata["strName"] = "IdUsuario";
	$fdata["GoodName"] = "IdUsuario";
	$fdata["ownerTable"] = "public.GestionRegistrosOrigen2";
	$fdata["Label"] = GetFieldLabel("public_GestionRegistrosOrigen2","IdUsuario");
	$fdata["FieldType"] = 3;

	
	
	
			

		$fdata["strField"] = "IdUsuario";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "\"IdUsuario\"";

	
	
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


	$tdatagestionregistrosorigen2["IdUsuario"] = $fdata;
		$tdatagestionregistrosorigen2[".searchableFields"][] = "IdUsuario";
//	Lat
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 6;
	$fdata["strName"] = "Lat";
	$fdata["GoodName"] = "Lat";
	$fdata["ownerTable"] = "public.GestionRegistrosOrigen2";
	$fdata["Label"] = GetFieldLabel("public_GestionRegistrosOrigen2","Lat");
	$fdata["FieldType"] = 14;

	
	
	
			

		$fdata["strField"] = "Lat";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "\"Lat\"";

	
	
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "Number");

	
	
	
	
	
	
		$vdata["DecimalDigits"] = 10;

	
	
	
	
	
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


	$tdatagestionregistrosorigen2["Lat"] = $fdata;
		$tdatagestionregistrosorigen2[".searchableFields"][] = "Lat";
//	Lng
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 7;
	$fdata["strName"] = "Lng";
	$fdata["GoodName"] = "Lng";
	$fdata["ownerTable"] = "public.GestionRegistrosOrigen2";
	$fdata["Label"] = GetFieldLabel("public_GestionRegistrosOrigen2","Lng");
	$fdata["FieldType"] = 14;

	
	
	
			

		$fdata["strField"] = "Lng";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "\"Lng\"";

	
	
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "Number");

	
	
	
	
	
	
		$vdata["DecimalDigits"] = 10;

	
	
	
	
	
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


	$tdatagestionregistrosorigen2["Lng"] = $fdata;
		$tdatagestionregistrosorigen2[".searchableFields"][] = "Lng";
//	Mapa
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 8;
	$fdata["strName"] = "Mapa";
	$fdata["GoodName"] = "Mapa";
	$fdata["ownerTable"] = "public.GestionRegistrosOrigen2";
	$fdata["Label"] = GetFieldLabel("public_GestionRegistrosOrigen2","Mapa");
	$fdata["FieldType"] = 201;

	
	
	
			

		$fdata["strField"] = "Mapa";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "\"Mapa\"";

	
	
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

		$edata["maxNumberOfFiles"] = 0;

	
	
	
				$edata["nRows"] = 100;
			$edata["nCols"] = 200;

	
	
		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
	
	
	//	End validation

		$edata["CreateThumbnail"] = true;
	$edata["StrThumbnail"] = "th";
			$edata["ThumbnailSize"] = 600;

			
	
	
	
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


	$tdatagestionregistrosorigen2["Mapa"] = $fdata;
		$tdatagestionregistrosorigen2[".searchableFields"][] = "Mapa";
//	FotoOrigen
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 9;
	$fdata["strName"] = "FotoOrigen";
	$fdata["GoodName"] = "FotoOrigen";
	$fdata["ownerTable"] = "public.GestionRegistrosOrigen2";
	$fdata["Label"] = GetFieldLabel("public_GestionRegistrosOrigen2","FotoOrigen");
	$fdata["FieldType"] = 200;

	
	
	
			

		$fdata["strField"] = "FotoOrigen";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "\"FotoOrigen\"";

	
	
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "File-based Image");

	
	
				$vdata["ImageWidth"] = 600;
	$vdata["ImageHeight"] = 400;

			$vdata["multipleImgMode"] = 1;
	$vdata["maxImages"] = 0;

			$vdata["showGallery"] = true;
	$vdata["galleryMode"] = 2;
	$vdata["captionMode"] = 2;
	$vdata["captionField"] = "";

	$vdata["imageBorder"] = 1;
	$vdata["imageFullWidth"] = 1;


	
	
	
	
	
	
	
	
	
	
	
		$vdata["truncateText"] = true;
	$vdata["NumberOfChars"] = 80;

	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Document upload");

	
		$edata["weekdayMessage"] = array("message" => "", "messageType" => "Text");
	$edata["weekdays"] = "[]";


	
	



	
	
	
	
			$edata["acceptFileTypes"] = ".+$";
		$edata["acceptFileTypesHtml"] = "";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
	
	
	
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


	$tdatagestionregistrosorigen2["FotoOrigen"] = $fdata;
		$tdatagestionregistrosorigen2[".searchableFields"][] = "FotoOrigen";


$tables_data["public.GestionRegistrosOrigen2"]=&$tdatagestionregistrosorigen2;
$field_labels["public_GestionRegistrosOrigen2"] = &$fieldLabelsgestionregistrosorigen2;
$fieldToolTips["public_GestionRegistrosOrigen2"] = &$fieldToolTipsgestionregistrosorigen2;
$placeHolders["public_GestionRegistrosOrigen2"] = &$placeHoldersgestionregistrosorigen2;
$page_titles["public_GestionRegistrosOrigen2"] = &$pageTitlesgestionregistrosorigen2;

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)
$detailsTablesData["public.GestionRegistrosOrigen2"] = array();

// tables which are master tables for current table (detail)
$masterTablesData["public.GestionRegistrosOrigen2"] = array();



// -----------------end  prepare master-details data arrays ------------------------------//


require_once(getabspath("classes/sql.php"));










function createSqlQuery_gestionregistrosorigen2()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "\"IdGesRegOrigen\",  	\"IdResiduo\",  	\"IdMedTipOrigen\",  	\"CantidadOrigen\",  	\"IdUsuario\",  	\"Lat\",  	\"Lng\",  	\"Mapa\",  	\"FotoOrigen\"";
$proto0["m_strFrom"] = "FROM \"public\".\"GestionRegistrosOrigen2\"";
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
	"m_strName" => "IdGesRegOrigen",
	"m_strTable" => "public.GestionRegistrosOrigen2",
	"m_srcTableName" => "public.GestionRegistrosOrigen2"
));

$proto6["m_sql"] = "\"IdGesRegOrigen\"";
$proto6["m_srcTableName"] = "public.GestionRegistrosOrigen2";
$proto6["m_expr"]=$obj;
$proto6["m_alias"] = "";
$obj = new SQLFieldListItem($proto6);

$proto0["m_fieldlist"][]=$obj;
						$proto8=array();
			$obj = new SQLField(array(
	"m_strName" => "IdResiduo",
	"m_strTable" => "public.GestionRegistrosOrigen2",
	"m_srcTableName" => "public.GestionRegistrosOrigen2"
));

$proto8["m_sql"] = "\"IdResiduo\"";
$proto8["m_srcTableName"] = "public.GestionRegistrosOrigen2";
$proto8["m_expr"]=$obj;
$proto8["m_alias"] = "";
$obj = new SQLFieldListItem($proto8);

$proto0["m_fieldlist"][]=$obj;
						$proto10=array();
			$obj = new SQLField(array(
	"m_strName" => "IdMedTipOrigen",
	"m_strTable" => "public.GestionRegistrosOrigen2",
	"m_srcTableName" => "public.GestionRegistrosOrigen2"
));

$proto10["m_sql"] = "\"IdMedTipOrigen\"";
$proto10["m_srcTableName"] = "public.GestionRegistrosOrigen2";
$proto10["m_expr"]=$obj;
$proto10["m_alias"] = "";
$obj = new SQLFieldListItem($proto10);

$proto0["m_fieldlist"][]=$obj;
						$proto12=array();
			$obj = new SQLField(array(
	"m_strName" => "CantidadOrigen",
	"m_strTable" => "public.GestionRegistrosOrigen2",
	"m_srcTableName" => "public.GestionRegistrosOrigen2"
));

$proto12["m_sql"] = "\"CantidadOrigen\"";
$proto12["m_srcTableName"] = "public.GestionRegistrosOrigen2";
$proto12["m_expr"]=$obj;
$proto12["m_alias"] = "";
$obj = new SQLFieldListItem($proto12);

$proto0["m_fieldlist"][]=$obj;
						$proto14=array();
			$obj = new SQLField(array(
	"m_strName" => "IdUsuario",
	"m_strTable" => "public.GestionRegistrosOrigen2",
	"m_srcTableName" => "public.GestionRegistrosOrigen2"
));

$proto14["m_sql"] = "\"IdUsuario\"";
$proto14["m_srcTableName"] = "public.GestionRegistrosOrigen2";
$proto14["m_expr"]=$obj;
$proto14["m_alias"] = "";
$obj = new SQLFieldListItem($proto14);

$proto0["m_fieldlist"][]=$obj;
						$proto16=array();
			$obj = new SQLField(array(
	"m_strName" => "Lat",
	"m_strTable" => "public.GestionRegistrosOrigen2",
	"m_srcTableName" => "public.GestionRegistrosOrigen2"
));

$proto16["m_sql"] = "\"Lat\"";
$proto16["m_srcTableName"] = "public.GestionRegistrosOrigen2";
$proto16["m_expr"]=$obj;
$proto16["m_alias"] = "";
$obj = new SQLFieldListItem($proto16);

$proto0["m_fieldlist"][]=$obj;
						$proto18=array();
			$obj = new SQLField(array(
	"m_strName" => "Lng",
	"m_strTable" => "public.GestionRegistrosOrigen2",
	"m_srcTableName" => "public.GestionRegistrosOrigen2"
));

$proto18["m_sql"] = "\"Lng\"";
$proto18["m_srcTableName"] = "public.GestionRegistrosOrigen2";
$proto18["m_expr"]=$obj;
$proto18["m_alias"] = "";
$obj = new SQLFieldListItem($proto18);

$proto0["m_fieldlist"][]=$obj;
						$proto20=array();
			$obj = new SQLField(array(
	"m_strName" => "Mapa",
	"m_strTable" => "public.GestionRegistrosOrigen2",
	"m_srcTableName" => "public.GestionRegistrosOrigen2"
));

$proto20["m_sql"] = "\"Mapa\"";
$proto20["m_srcTableName"] = "public.GestionRegistrosOrigen2";
$proto20["m_expr"]=$obj;
$proto20["m_alias"] = "";
$obj = new SQLFieldListItem($proto20);

$proto0["m_fieldlist"][]=$obj;
						$proto22=array();
			$obj = new SQLField(array(
	"m_strName" => "FotoOrigen",
	"m_strTable" => "public.GestionRegistrosOrigen2",
	"m_srcTableName" => "public.GestionRegistrosOrigen2"
));

$proto22["m_sql"] = "\"FotoOrigen\"";
$proto22["m_srcTableName"] = "public.GestionRegistrosOrigen2";
$proto22["m_expr"]=$obj;
$proto22["m_alias"] = "";
$obj = new SQLFieldListItem($proto22);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto24=array();
$proto24["m_link"] = "SQLL_MAIN";
			$proto25=array();
$proto25["m_strName"] = "public.GestionRegistrosOrigen2";
$proto25["m_srcTableName"] = "public.GestionRegistrosOrigen2";
$proto25["m_columns"] = array();
$proto25["m_columns"][] = "IdGesRegOrigen";
$proto25["m_columns"][] = "IdResiduo";
$proto25["m_columns"][] = "IdMedTipOrigen";
$proto25["m_columns"][] = "CantidadOrigen";
$proto25["m_columns"][] = "IdUsuario";
$proto25["m_columns"][] = "Lat";
$proto25["m_columns"][] = "Lng";
$proto25["m_columns"][] = "Mapa";
$proto25["m_columns"][] = "FotoOrigen";
$obj = new SQLTable($proto25);

$proto24["m_table"] = $obj;
$proto24["m_sql"] = "\"public\".\"GestionRegistrosOrigen2\"";
$proto24["m_alias"] = "";
$proto24["m_srcTableName"] = "public.GestionRegistrosOrigen2";
$proto26=array();
$proto26["m_sql"] = "";
$proto26["m_uniontype"] = "SQLL_UNKNOWN";
	$obj = new SQLNonParsed(array(
	"m_sql" => ""
));

$proto26["m_column"]=$obj;
$proto26["m_contained"] = array();
$proto26["m_strCase"] = "";
$proto26["m_havingmode"] = false;
$proto26["m_inBrackets"] = false;
$proto26["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto26);

$proto24["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto24);

$proto0["m_fromlist"][]=$obj;
$proto0["m_groupby"] = array();
$proto0["m_orderby"] = array();
$proto0["m_srcTableName"]="public.GestionRegistrosOrigen2";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_gestionregistrosorigen2 = createSqlQuery_gestionregistrosorigen2();


	
		;

									

$tdatagestionregistrosorigen2[".sqlquery"] = $queryData_gestionregistrosorigen2;

$tableEvents["public.GestionRegistrosOrigen2"] = new eventsBase;
$tdatagestionregistrosorigen2[".hasEvents"] = false;

?>