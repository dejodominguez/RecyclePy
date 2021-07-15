<?php



$tdatagestionregistrosorigen = array();
$tdatagestionregistrosorigen[".searchableFields"] = array();
$tdatagestionregistrosorigen[".ShortName"] = "gestionregistrosorigen";
$tdatagestionregistrosorigen[".OwnerID"] = "IdUsuario";
$tdatagestionregistrosorigen[".OriginalTable"] = "public.GestionRegistrosOrigen";


$defaultPages = my_json_decode( "{\"add\":\"add\",\"edit\":\"edit\",\"export\":\"export\",\"import\":\"import\",\"list\":\"list\",\"print\":\"print\",\"search\":\"search\",\"view\":\"view\"}" );

$tdatagestionregistrosorigen[".pagesByType"] = my_json_decode( "{\"add\":[\"add\"],\"edit\":[\"edit\"],\"export\":[\"export\"],\"import\":[\"import\"],\"list\":[\"list\"],\"print\":[\"print\"],\"search\":[\"search\"],\"view\":[\"view\"]}" );
$tdatagestionregistrosorigen[".pages"] = types2pages( my_json_decode( "{\"add\":[\"add\"],\"edit\":[\"edit\"],\"export\":[\"export\"],\"import\":[\"import\"],\"list\":[\"list\"],\"print\":[\"print\"],\"search\":[\"search\"],\"view\":[\"view\"]}" ) );
$tdatagestionregistrosorigen[".defaultPages"] = $defaultPages;

//	field labels
$fieldLabelsgestionregistrosorigen = array();
$fieldToolTipsgestionregistrosorigen = array();
$pageTitlesgestionregistrosorigen = array();
$placeHoldersgestionregistrosorigen = array();

if(mlang_getcurrentlang()=="Spanish")
{
	$fieldLabelsgestionregistrosorigen["Spanish"] = array();
	$fieldToolTipsgestionregistrosorigen["Spanish"] = array();
	$placeHoldersgestionregistrosorigen["Spanish"] = array();
	$pageTitlesgestionregistrosorigen["Spanish"] = array();
	$fieldLabelsgestionregistrosorigen["Spanish"]["IdGesRegOrigen"] = "Id Ges Reg Origen";
	$fieldToolTipsgestionregistrosorigen["Spanish"]["IdGesRegOrigen"] = "";
	$placeHoldersgestionregistrosorigen["Spanish"]["IdGesRegOrigen"] = "";
	$fieldLabelsgestionregistrosorigen["Spanish"]["IdResiduo"] = "Tipo de Residuo";
	$fieldToolTipsgestionregistrosorigen["Spanish"]["IdResiduo"] = "";
	$placeHoldersgestionregistrosorigen["Spanish"]["IdResiduo"] = "";
	$fieldLabelsgestionregistrosorigen["Spanish"]["IdMedTipOrigen"] = "Medida Origen";
	$fieldToolTipsgestionregistrosorigen["Spanish"]["IdMedTipOrigen"] = "";
	$placeHoldersgestionregistrosorigen["Spanish"]["IdMedTipOrigen"] = "";
	$fieldLabelsgestionregistrosorigen["Spanish"]["CantidadOrigen"] = "Cantidad Origen";
	$fieldToolTipsgestionregistrosorigen["Spanish"]["CantidadOrigen"] = "";
	$placeHoldersgestionregistrosorigen["Spanish"]["CantidadOrigen"] = "Cargue la cantida separado";
	$fieldLabelsgestionregistrosorigen["Spanish"]["IdUsuario"] = "Separador/a";
	$fieldToolTipsgestionregistrosorigen["Spanish"]["IdUsuario"] = "";
	$placeHoldersgestionregistrosorigen["Spanish"]["IdUsuario"] = "";
	$fieldLabelsgestionregistrosorigen["Spanish"]["FotoOrigen"] = "Foto Origen";
	$fieldToolTipsgestionregistrosorigen["Spanish"]["FotoOrigen"] = "";
	$placeHoldersgestionregistrosorigen["Spanish"]["FotoOrigen"] = "";
	$fieldLabelsgestionregistrosorigen["Spanish"]["GPSMapaGoo"] = "Long. y Lat de GPS de Google Maps";
	$fieldToolTipsgestionregistrosorigen["Spanish"]["GPSMapaGoo"] = "Los valores deben de ser de forma automátic. favor activar su GPS si la posición no carga de forma automática, gracias.";
	$placeHoldersgestionregistrosorigen["Spanish"]["GPSMapaGoo"] = "";
	$fieldLabelsgestionregistrosorigen["Spanish"]["Lat"] = "Lat";
	$fieldToolTipsgestionregistrosorigen["Spanish"]["Lat"] = "";
	$placeHoldersgestionregistrosorigen["Spanish"]["Lat"] = "";
	$fieldLabelsgestionregistrosorigen["Spanish"]["Lng"] = "Lng";
	$fieldToolTipsgestionregistrosorigen["Spanish"]["Lng"] = "";
	$placeHoldersgestionregistrosorigen["Spanish"]["Lng"] = "";
	if (count($fieldToolTipsgestionregistrosorigen["Spanish"]))
		$tdatagestionregistrosorigen[".isUseToolTips"] = true;
}


	$tdatagestionregistrosorigen[".NCSearch"] = true;



$tdatagestionregistrosorigen[".shortTableName"] = "gestionregistrosorigen";
$tdatagestionregistrosorigen[".nSecOptions"] = 1;

$tdatagestionregistrosorigen[".mainTableOwnerID"] = "IdUsuario";
$tdatagestionregistrosorigen[".entityType"] = 0;

$tdatagestionregistrosorigen[".strOriginalTableName"] = "public.GestionRegistrosOrigen";

	



$tdatagestionregistrosorigen[".showAddInPopup"] = false;

$tdatagestionregistrosorigen[".showEditInPopup"] = false;

$tdatagestionregistrosorigen[".showViewInPopup"] = false;

//page's base css files names
$popupPagesLayoutNames = array();
$tdatagestionregistrosorigen[".popupPagesLayoutNames"] = $popupPagesLayoutNames;


$tdatagestionregistrosorigen[".listAjax"] = false;
//	temporary
$tdatagestionregistrosorigen[".listAjax"] = false;

	$tdatagestionregistrosorigen[".audit"] = false;

	$tdatagestionregistrosorigen[".locking"] = false;


$pages = $tdatagestionregistrosorigen[".defaultPages"];

if( $pages[PAGE_EDIT] ) {
	$tdatagestionregistrosorigen[".edit"] = true;
	$tdatagestionregistrosorigen[".afterEditAction"] = 1;
	$tdatagestionregistrosorigen[".closePopupAfterEdit"] = 1;
	$tdatagestionregistrosorigen[".afterEditActionDetTable"] = "";
}

if( $pages[PAGE_ADD] ) {
$tdatagestionregistrosorigen[".add"] = true;
$tdatagestionregistrosorigen[".afterAddAction"] = 0;
$tdatagestionregistrosorigen[".closePopupAfterAdd"] = 1;
$tdatagestionregistrosorigen[".afterAddActionDetTable"] = "Detail tables not found!";
}

if( $pages[PAGE_LIST] ) {
	$tdatagestionregistrosorigen[".list"] = true;
}



$tdatagestionregistrosorigen[".strSortControlSettingsJSON"] = "";




if( $pages[PAGE_VIEW] ) {
$tdatagestionregistrosorigen[".view"] = true;
}

if( $pages[PAGE_IMPORT] ) {
$tdatagestionregistrosorigen[".import"] = true;
}

if( $pages[PAGE_EXPORT] ) {
$tdatagestionregistrosorigen[".exportTo"] = true;
}

if( $pages[PAGE_PRINT] ) {
$tdatagestionregistrosorigen[".printFriendly"] = true;
}



$tdatagestionregistrosorigen[".showSimpleSearchOptions"] = true; // temp fix #13449

// Allow Show/Hide Fields in GRID
$tdatagestionregistrosorigen[".allowShowHideFields"] = true; // temp fix #13449
//

// Allow Fields Reordering in GRID
$tdatagestionregistrosorigen[".allowFieldsReordering"] = true; // temp fix #13449
//

$tdatagestionregistrosorigen[".isUseAjaxSuggest"] = true;

$tdatagestionregistrosorigen[".rowHighlite"] = true;



									

$tdatagestionregistrosorigen[".ajaxCodeSnippetAdded"] = false;

$tdatagestionregistrosorigen[".buttonsAdded"] = false;

$tdatagestionregistrosorigen[".addPageEvents"] = true;

// use timepicker for search panel
$tdatagestionregistrosorigen[".isUseTimeForSearch"] = false;


$tdatagestionregistrosorigen[".badgeColor"] = "6b8e23";


$tdatagestionregistrosorigen[".allSearchFields"] = array();
$tdatagestionregistrosorigen[".filterFields"] = array();
$tdatagestionregistrosorigen[".requiredSearchFields"] = array();

$tdatagestionregistrosorigen[".googleLikeFields"] = array();
$tdatagestionregistrosorigen[".googleLikeFields"][] = "IdGesRegOrigen";
$tdatagestionregistrosorigen[".googleLikeFields"][] = "IdResiduo";
$tdatagestionregistrosorigen[".googleLikeFields"][] = "IdMedTipOrigen";
$tdatagestionregistrosorigen[".googleLikeFields"][] = "IdUsuario";
$tdatagestionregistrosorigen[".googleLikeFields"][] = "CantidadOrigen";
$tdatagestionregistrosorigen[".googleLikeFields"][] = "FotoOrigen";
$tdatagestionregistrosorigen[".googleLikeFields"][] = "GPSMapaGoo";
$tdatagestionregistrosorigen[".googleLikeFields"][] = "Lat";
$tdatagestionregistrosorigen[".googleLikeFields"][] = "Lng";



$tdatagestionregistrosorigen[".tableType"] = "list";

$tdatagestionregistrosorigen[".printerPageOrientation"] = 0;
$tdatagestionregistrosorigen[".nPrinterPageScale"] = 100;

$tdatagestionregistrosorigen[".nPrinterSplitRecords"] = 40;

$tdatagestionregistrosorigen[".geocodingEnabled"] = true;
$tdatagestionregistrosorigen[".geocodingData"] = array();
$tdatagestionregistrosorigen[".geocodingData"]["latField"] = "Lat1";
$tdatagestionregistrosorigen[".geocodingData"]["lngField"] = "Lng1";
$tdatagestionregistrosorigen[".geocodingData"]["addressFields"] = array();
	$tdatagestionregistrosorigen[".geocodingData"]["addressFields"][] = "Lat";
	$tdatagestionregistrosorigen[".geocodingData"]["addressFields"][] = "Lng";










$tdatagestionregistrosorigen[".pageSize"] = 20;

$tdatagestionregistrosorigen[".warnLeavingPages"] = true;



$tstrOrderBy = "";
if(strlen($tstrOrderBy) && strtolower(substr($tstrOrderBy,0,8))!="order by")
	$tstrOrderBy = "order by ".$tstrOrderBy;
$tdatagestionregistrosorigen[".strOrderBy"] = $tstrOrderBy;

$tdatagestionregistrosorigen[".orderindexes"] = array();

$tdatagestionregistrosorigen[".sqlHead"] = "SELECT \"IdGesRegOrigen\",  	\"IdResiduo\",  	\"IdMedTipOrigen\",  	\"IdUsuario\",  	\"CantidadOrigen\",  	\"FotoOrigen\",  	\"GPSMapaGoo\",  	\"Lat\",  	\"Lng\"";
$tdatagestionregistrosorigen[".sqlFrom"] = "FROM \"public\".\"GestionRegistrosOrigen\"";
$tdatagestionregistrosorigen[".sqlWhereExpr"] = "";
$tdatagestionregistrosorigen[".sqlTail"] = "";










//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdatagestionregistrosorigen[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdatagestionregistrosorigen[".arrGroupsPerPage"] = $arrGPP;

$tdatagestionregistrosorigen[".highlightSearchResults"] = true;

$tableKeysgestionregistrosorigen = array();
$tableKeysgestionregistrosorigen[] = "IdGesRegOrigen";
$tdatagestionregistrosorigen[".Keys"] = $tableKeysgestionregistrosorigen;


$tdatagestionregistrosorigen[".hideMobileList"] = array();




//	IdGesRegOrigen
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "IdGesRegOrigen";
	$fdata["GoodName"] = "IdGesRegOrigen";
	$fdata["ownerTable"] = "public.GestionRegistrosOrigen";
	$fdata["Label"] = GetFieldLabel("public_GestionRegistrosOrigen","IdGesRegOrigen");
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


	$tdatagestionregistrosorigen["IdGesRegOrigen"] = $fdata;
		$tdatagestionregistrosorigen[".searchableFields"][] = "IdGesRegOrigen";
//	IdResiduo
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "IdResiduo";
	$fdata["GoodName"] = "IdResiduo";
	$fdata["ownerTable"] = "public.GestionRegistrosOrigen";
	$fdata["Label"] = GetFieldLabel("public_GestionRegistrosOrigen","IdResiduo");
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


	$tdatagestionregistrosorigen["IdResiduo"] = $fdata;
		$tdatagestionregistrosorigen[".searchableFields"][] = "IdResiduo";
//	IdMedTipOrigen
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "IdMedTipOrigen";
	$fdata["GoodName"] = "IdMedTipOrigen";
	$fdata["ownerTable"] = "public.GestionRegistrosOrigen";
	$fdata["Label"] = GetFieldLabel("public_GestionRegistrosOrigen","IdMedTipOrigen");
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
	$edata["LookupTable"] = "public.MedTipoOrigen";
			$edata["autoCompleteFieldsOnEdit"] = 0;
	$edata["autoCompleteFields"] = array();
		$edata["LCType"] = 0;

	
		
	$edata["LinkField"] = "IdMedTipOrigen";
	$edata["LinkFieldType"] = 0;
	$edata["DisplayField"] = "DescriMedTipOrigen";

	

	
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


	$tdatagestionregistrosorigen["IdMedTipOrigen"] = $fdata;
		$tdatagestionregistrosorigen[".searchableFields"][] = "IdMedTipOrigen";
//	IdUsuario
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "IdUsuario";
	$fdata["GoodName"] = "IdUsuario";
	$fdata["ownerTable"] = "public.GestionRegistrosOrigen";
	$fdata["Label"] = GetFieldLabel("public_GestionRegistrosOrigen","IdUsuario");
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
	$edata["LookupTable"] = "public.Usuarios";
			$edata["autoCompleteFieldsOnEdit"] = 0;
	$edata["autoCompleteFields"] = array();
		$edata["LCType"] = 0;

	
		
	$edata["LinkField"] = "IdUsuario";
	$edata["LinkFieldType"] = 0;
	$edata["DisplayField"] = "NombreCompleto";

	

	
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


	$tdatagestionregistrosorigen["IdUsuario"] = $fdata;
		$tdatagestionregistrosorigen[".searchableFields"][] = "IdUsuario";
//	CantidadOrigen
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 5;
	$fdata["strName"] = "CantidadOrigen";
	$fdata["GoodName"] = "CantidadOrigen";
	$fdata["ownerTable"] = "public.GestionRegistrosOrigen";
	$fdata["Label"] = GetFieldLabel("public_GestionRegistrosOrigen","CantidadOrigen");
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


	$tdatagestionregistrosorigen["CantidadOrigen"] = $fdata;
		$tdatagestionregistrosorigen[".searchableFields"][] = "CantidadOrigen";
//	FotoOrigen
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 6;
	$fdata["strName"] = "FotoOrigen";
	$fdata["GoodName"] = "FotoOrigen";
	$fdata["ownerTable"] = "public.GestionRegistrosOrigen";
	$fdata["Label"] = GetFieldLabel("public_GestionRegistrosOrigen","FotoOrigen");
	$fdata["FieldType"] = 200;

	
	
	
			

		$fdata["strField"] = "FotoOrigen";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "\"FotoOrigen\"";

	
	
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "File-based Image");

	
	
				$vdata["ImageWidth"] = 200;
	$vdata["ImageHeight"] = 170;

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

		$edata["maxNumberOfFiles"] = 6;

	
	
	
	
	
	
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


	$tdatagestionregistrosorigen["FotoOrigen"] = $fdata;
		$tdatagestionregistrosorigen[".searchableFields"][] = "FotoOrigen";
//	GPSMapaGoo
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 7;
	$fdata["strName"] = "GPSMapaGoo";
	$fdata["GoodName"] = "GPSMapaGoo";
	$fdata["ownerTable"] = "public.GestionRegistrosOrigen";
	$fdata["Label"] = GetFieldLabel("public_GestionRegistrosOrigen","GPSMapaGoo");
	$fdata["FieldType"] = 201;

	
	
	
			

		$fdata["strField"] = "GPSMapaGoo";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "\"GPSMapaGoo\"";

	
	
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "Hyperlink");

	
		$vdata["LinkPrefix"] ="https://www.google.com/maps?q=";

	
	
				$vdata["hlType"] = 0;
	$vdata["hlLinkWordNameType"] = "Text";
	$vdata["hlLinkWordText"] = "Link";
	$vdata["hlTitleField"] = "";

	
	
	
	
	
	
	
	
	
		$vdata["truncateText"] = true;
	$vdata["NumberOfChars"] = 80;

	$fdata["ViewFormats"]["view"] = $vdata;
	$vdata = array("ViewFormat" => "Hyperlink");

	
		$vdata["LinkPrefix"] ="https://www.google.com/maps?q=";

	
	
				$vdata["hlType"] = 0;
	$vdata["hlLinkWordNameType"] = "Text";
	$vdata["hlLinkWordText"] = "Link";
	$vdata["hlTitleField"] = "";

	
	
	
	
	
	
	
	
	
		$vdata["truncateText"] = true;
	$vdata["NumberOfChars"] = 80;

	$fdata["ViewFormats"]["list"] = $vdata;
	$vdata = array("ViewFormat" => "Hyperlink");

	
		$vdata["LinkPrefix"] ="https://www.google.com/maps?q=";

	
	
				$vdata["hlType"] = 0;
	$vdata["hlLinkWordNameType"] = "Text";
	$vdata["hlLinkWordText"] = "Link";
	$vdata["hlTitleField"] = "";

	
	
	
	
	
	
	
	
	
		$vdata["truncateText"] = true;
	$vdata["NumberOfChars"] = 80;

	$fdata["ViewFormats"]["print"] = $vdata;
	$vdata = array("ViewFormat" => "Hyperlink");

	
		$vdata["LinkPrefix"] ="https://www.google.com/maps?q=";

	
	
				$vdata["hlType"] = 0;
	$vdata["hlLinkWordNameType"] = "Text";
	$vdata["hlLinkWordText"] = "Link";
	$vdata["hlTitleField"] = "";

	
	
	
	
	
	
	
	
	
		$vdata["truncateText"] = true;
	$vdata["NumberOfChars"] = 80;

	$fdata["ViewFormats"]["export"] = $vdata;
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
	$edata = array("EditFormat" => "Text field");

	
		$edata["weekdayMessage"] = array("message" => "", "messageType" => "Text");
	$edata["weekdays"] = "[]";


	
	



		$edata["IsRequired"] = true;

	
	
	
			$edata["acceptFileTypes"] = ".+$";
		$edata["acceptFileTypesHtml"] = "";

		$edata["maxNumberOfFiles"] = 0;

	
	
	
	
			$edata["HTML5InuptType"] = "text";

		$edata["EditParams"] = "";
		
		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
						$edata["validateAs"]["basicValidate"][] = "IsRequired";
		
	
	//	End validation

		$edata["CreateThumbnail"] = true;
	$edata["StrThumbnail"] = "th";
			$edata["ThumbnailSize"] = 600;

			
	
	
	
	$fdata["EditFormats"]["add"] = $edata;
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


	$tdatagestionregistrosorigen["GPSMapaGoo"] = $fdata;
		$tdatagestionregistrosorigen[".searchableFields"][] = "GPSMapaGoo";
//	Lat
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 8;
	$fdata["strName"] = "Lat";
	$fdata["GoodName"] = "Lat";
	$fdata["ownerTable"] = "public.GestionRegistrosOrigen";
	$fdata["Label"] = GetFieldLabel("public_GestionRegistrosOrigen","Lat");
	$fdata["FieldType"] = 14;

	
	
	
			

		$fdata["strField"] = "Lat";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "\"Lat\"";

	
	
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "Number");

	
	
	
	
	
	
		$vdata["DecimalDigits"] = 3;

	
	
	
	
	
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


	$tdatagestionregistrosorigen["Lat"] = $fdata;
		$tdatagestionregistrosorigen[".searchableFields"][] = "Lat";
//	Lng
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 9;
	$fdata["strName"] = "Lng";
	$fdata["GoodName"] = "Lng";
	$fdata["ownerTable"] = "public.GestionRegistrosOrigen";
	$fdata["Label"] = GetFieldLabel("public_GestionRegistrosOrigen","Lng");
	$fdata["FieldType"] = 14;

	
	
	
			

		$fdata["strField"] = "Lng";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "\"Lng\"";

	
	
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "Number");

	
	
	
	
	
	
		$vdata["DecimalDigits"] = 3;

	
	
	
	
	
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


	$tdatagestionregistrosorigen["Lng"] = $fdata;
		$tdatagestionregistrosorigen[".searchableFields"][] = "Lng";


$tables_data["public.GestionRegistrosOrigen"]=&$tdatagestionregistrosorigen;
$field_labels["public_GestionRegistrosOrigen"] = &$fieldLabelsgestionregistrosorigen;
$fieldToolTips["public_GestionRegistrosOrigen"] = &$fieldToolTipsgestionregistrosorigen;
$placeHolders["public_GestionRegistrosOrigen"] = &$placeHoldersgestionregistrosorigen;
$page_titles["public_GestionRegistrosOrigen"] = &$pageTitlesgestionregistrosorigen;

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)
$detailsTablesData["public.GestionRegistrosOrigen"] = array();

// tables which are master tables for current table (detail)
$masterTablesData["public.GestionRegistrosOrigen"] = array();



	
				$strOriginalDetailsTable="public.Usuarios";
	$masterParams = array();
	$masterParams["mDataSourceTable"]="public.Usuarios";
	$masterParams["mOriginalTable"]= $strOriginalDetailsTable;
	$masterParams["mShortTable"]= "usuarios";
	$masterParams["masterKeys"]= array();
	$masterParams["detailKeys"]= array();

	$masterParams["type"] = PAGE_LIST;
					$masterTablesData["public.GestionRegistrosOrigen"][0] = $masterParams;
				$masterTablesData["public.GestionRegistrosOrigen"][0]["masterKeys"] = array();
	$masterTablesData["public.GestionRegistrosOrigen"][0]["masterKeys"][]="IdUsuario";
				$masterTablesData["public.GestionRegistrosOrigen"][0]["detailKeys"] = array();
	$masterTablesData["public.GestionRegistrosOrigen"][0]["detailKeys"][]="IdUsuario";
		
	
				$strOriginalDetailsTable="public.MedTipoOrigen";
	$masterParams = array();
	$masterParams["mDataSourceTable"]="public.MedTipoOrigen";
	$masterParams["mOriginalTable"]= $strOriginalDetailsTable;
	$masterParams["mShortTable"]= "medtipoorigen";
	$masterParams["masterKeys"]= array();
	$masterParams["detailKeys"]= array();

	$masterParams["type"] = PAGE_LIST;
					$masterTablesData["public.GestionRegistrosOrigen"][1] = $masterParams;
				$masterTablesData["public.GestionRegistrosOrigen"][1]["masterKeys"] = array();
	$masterTablesData["public.GestionRegistrosOrigen"][1]["masterKeys"][]="IdMedTipOrigen";
				$masterTablesData["public.GestionRegistrosOrigen"][1]["detailKeys"] = array();
	$masterTablesData["public.GestionRegistrosOrigen"][1]["detailKeys"][]="IdMedTipOrigen";
		
// -----------------end  prepare master-details data arrays ------------------------------//


require_once(getabspath("classes/sql.php"));










function createSqlQuery_gestionregistrosorigen()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "\"IdGesRegOrigen\",  	\"IdResiduo\",  	\"IdMedTipOrigen\",  	\"IdUsuario\",  	\"CantidadOrigen\",  	\"FotoOrigen\",  	\"GPSMapaGoo\",  	\"Lat\",  	\"Lng\"";
$proto0["m_strFrom"] = "FROM \"public\".\"GestionRegistrosOrigen\"";
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
	"m_strTable" => "public.GestionRegistrosOrigen",
	"m_srcTableName" => "public.GestionRegistrosOrigen"
));

$proto6["m_sql"] = "\"IdGesRegOrigen\"";
$proto6["m_srcTableName"] = "public.GestionRegistrosOrigen";
$proto6["m_expr"]=$obj;
$proto6["m_alias"] = "";
$obj = new SQLFieldListItem($proto6);

$proto0["m_fieldlist"][]=$obj;
						$proto8=array();
			$obj = new SQLField(array(
	"m_strName" => "IdResiduo",
	"m_strTable" => "public.GestionRegistrosOrigen",
	"m_srcTableName" => "public.GestionRegistrosOrigen"
));

$proto8["m_sql"] = "\"IdResiduo\"";
$proto8["m_srcTableName"] = "public.GestionRegistrosOrigen";
$proto8["m_expr"]=$obj;
$proto8["m_alias"] = "";
$obj = new SQLFieldListItem($proto8);

$proto0["m_fieldlist"][]=$obj;
						$proto10=array();
			$obj = new SQLField(array(
	"m_strName" => "IdMedTipOrigen",
	"m_strTable" => "public.GestionRegistrosOrigen",
	"m_srcTableName" => "public.GestionRegistrosOrigen"
));

$proto10["m_sql"] = "\"IdMedTipOrigen\"";
$proto10["m_srcTableName"] = "public.GestionRegistrosOrigen";
$proto10["m_expr"]=$obj;
$proto10["m_alias"] = "";
$obj = new SQLFieldListItem($proto10);

$proto0["m_fieldlist"][]=$obj;
						$proto12=array();
			$obj = new SQLField(array(
	"m_strName" => "IdUsuario",
	"m_strTable" => "public.GestionRegistrosOrigen",
	"m_srcTableName" => "public.GestionRegistrosOrigen"
));

$proto12["m_sql"] = "\"IdUsuario\"";
$proto12["m_srcTableName"] = "public.GestionRegistrosOrigen";
$proto12["m_expr"]=$obj;
$proto12["m_alias"] = "";
$obj = new SQLFieldListItem($proto12);

$proto0["m_fieldlist"][]=$obj;
						$proto14=array();
			$obj = new SQLField(array(
	"m_strName" => "CantidadOrigen",
	"m_strTable" => "public.GestionRegistrosOrigen",
	"m_srcTableName" => "public.GestionRegistrosOrigen"
));

$proto14["m_sql"] = "\"CantidadOrigen\"";
$proto14["m_srcTableName"] = "public.GestionRegistrosOrigen";
$proto14["m_expr"]=$obj;
$proto14["m_alias"] = "";
$obj = new SQLFieldListItem($proto14);

$proto0["m_fieldlist"][]=$obj;
						$proto16=array();
			$obj = new SQLField(array(
	"m_strName" => "FotoOrigen",
	"m_strTable" => "public.GestionRegistrosOrigen",
	"m_srcTableName" => "public.GestionRegistrosOrigen"
));

$proto16["m_sql"] = "\"FotoOrigen\"";
$proto16["m_srcTableName"] = "public.GestionRegistrosOrigen";
$proto16["m_expr"]=$obj;
$proto16["m_alias"] = "";
$obj = new SQLFieldListItem($proto16);

$proto0["m_fieldlist"][]=$obj;
						$proto18=array();
			$obj = new SQLField(array(
	"m_strName" => "GPSMapaGoo",
	"m_strTable" => "public.GestionRegistrosOrigen",
	"m_srcTableName" => "public.GestionRegistrosOrigen"
));

$proto18["m_sql"] = "\"GPSMapaGoo\"";
$proto18["m_srcTableName"] = "public.GestionRegistrosOrigen";
$proto18["m_expr"]=$obj;
$proto18["m_alias"] = "";
$obj = new SQLFieldListItem($proto18);

$proto0["m_fieldlist"][]=$obj;
						$proto20=array();
			$obj = new SQLField(array(
	"m_strName" => "Lat",
	"m_strTable" => "public.GestionRegistrosOrigen",
	"m_srcTableName" => "public.GestionRegistrosOrigen"
));

$proto20["m_sql"] = "\"Lat\"";
$proto20["m_srcTableName"] = "public.GestionRegistrosOrigen";
$proto20["m_expr"]=$obj;
$proto20["m_alias"] = "";
$obj = new SQLFieldListItem($proto20);

$proto0["m_fieldlist"][]=$obj;
						$proto22=array();
			$obj = new SQLField(array(
	"m_strName" => "Lng",
	"m_strTable" => "public.GestionRegistrosOrigen",
	"m_srcTableName" => "public.GestionRegistrosOrigen"
));

$proto22["m_sql"] = "\"Lng\"";
$proto22["m_srcTableName"] = "public.GestionRegistrosOrigen";
$proto22["m_expr"]=$obj;
$proto22["m_alias"] = "";
$obj = new SQLFieldListItem($proto22);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto24=array();
$proto24["m_link"] = "SQLL_MAIN";
			$proto25=array();
$proto25["m_strName"] = "public.GestionRegistrosOrigen";
$proto25["m_srcTableName"] = "public.GestionRegistrosOrigen";
$proto25["m_columns"] = array();
$proto25["m_columns"][] = "IdGesRegOrigen";
$proto25["m_columns"][] = "IdResiduo";
$proto25["m_columns"][] = "IdMedTipOrigen";
$proto25["m_columns"][] = "IdUsuario";
$proto25["m_columns"][] = "CantidadOrigen";
$proto25["m_columns"][] = "FotoOrigen";
$proto25["m_columns"][] = "GPSMapaGoo";
$proto25["m_columns"][] = "Lat";
$proto25["m_columns"][] = "Lng";
$obj = new SQLTable($proto25);

$proto24["m_table"] = $obj;
$proto24["m_sql"] = "\"public\".\"GestionRegistrosOrigen\"";
$proto24["m_alias"] = "";
$proto24["m_srcTableName"] = "public.GestionRegistrosOrigen";
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
$proto0["m_srcTableName"]="public.GestionRegistrosOrigen";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_gestionregistrosorigen = createSqlQuery_gestionregistrosorigen();


	
		;

									

$tdatagestionregistrosorigen[".sqlquery"] = $queryData_gestionregistrosorigen;

include_once(getabspath("include/gestionregistrosorigen_events.php"));
$tableEvents["public.GestionRegistrosOrigen"] = new eventclass_gestionregistrosorigen;
$tdatagestionregistrosorigen[".hasEvents"] = true;

?>