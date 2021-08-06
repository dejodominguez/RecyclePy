<?php
$tdatagestion_registros_origen = array();
$tdatagestion_registros_origen[".searchableFields"] = array();
$tdatagestion_registros_origen[".ShortName"] = "gestion_registros_origen";
$tdatagestion_registros_origen[".OwnerID"] = "id_usuario";
$tdatagestion_registros_origen[".OriginalTable"] = "public.gestion_registros_origen";


$tdatagestion_registros_origen[".pagesByType"] = my_json_decode( "{\"add\":[\"add\"],\"edit\":[\"edit\"],\"export\":[\"export\"],\"import\":[\"import\"],\"list\":[\"list\"],\"print\":[\"print\"],\"search\":[\"search\"],\"view\":[\"view\"]}" );
$tdatagestion_registros_origen[".originalPagesByType"] = $tdatagestion_registros_origen[".pagesByType"];
$tdatagestion_registros_origen[".pages"] = types2pages( my_json_decode( "{\"add\":[\"add\"],\"edit\":[\"edit\"],\"export\":[\"export\"],\"import\":[\"import\"],\"list\":[\"list\"],\"print\":[\"print\"],\"search\":[\"search\"],\"view\":[\"view\"]}" ) );
$tdatagestion_registros_origen[".originalPages"] = $tdatagestion_registros_origen[".pages"];
$tdatagestion_registros_origen[".defaultPages"] = my_json_decode( "{\"add\":\"add\",\"edit\":\"edit\",\"export\":\"export\",\"import\":\"import\",\"list\":\"list\",\"print\":\"print\",\"search\":\"search\",\"view\":\"view\"}" );
$tdatagestion_registros_origen[".originalDefaultPages"] = $tdatagestion_registros_origen[".defaultPages"];

//	field labels
$fieldLabelsgestion_registros_origen = array();
$fieldToolTipsgestion_registros_origen = array();
$pageTitlesgestion_registros_origen = array();
$placeHoldersgestion_registros_origen = array();

if(mlang_getcurrentlang()=="Spanish")
{
	$fieldLabelsgestion_registros_origen["Spanish"] = array();
	$fieldToolTipsgestion_registros_origen["Spanish"] = array();
	$placeHoldersgestion_registros_origen["Spanish"] = array();
	$pageTitlesgestion_registros_origen["Spanish"] = array();
	$fieldLabelsgestion_registros_origen["Spanish"]["id_ges_reg_origen"] = "Código";
	$fieldToolTipsgestion_registros_origen["Spanish"]["id_ges_reg_origen"] = "";
	$placeHoldersgestion_registros_origen["Spanish"]["id_ges_reg_origen"] = "";
	$fieldLabelsgestion_registros_origen["Spanish"]["id_residuo"] = "Tipo de Residuo";
	$fieldToolTipsgestion_registros_origen["Spanish"]["id_residuo"] = "";
	$placeHoldersgestion_registros_origen["Spanish"]["id_residuo"] = "";
	$fieldLabelsgestion_registros_origen["Spanish"]["id_med_tip_origen"] = "Tip de medida";
	$fieldToolTipsgestion_registros_origen["Spanish"]["id_med_tip_origen"] = "";
	$placeHoldersgestion_registros_origen["Spanish"]["id_med_tip_origen"] = "";
	$fieldLabelsgestion_registros_origen["Spanish"]["id_usuario"] = "Separador/a";
	$fieldToolTipsgestion_registros_origen["Spanish"]["id_usuario"] = "";
	$placeHoldersgestion_registros_origen["Spanish"]["id_usuario"] = "";
	$fieldLabelsgestion_registros_origen["Spanish"]["cantidad_origen"] = "Cantidad";
	$fieldToolTipsgestion_registros_origen["Spanish"]["cantidad_origen"] = "";
	$placeHoldersgestion_registros_origen["Spanish"]["cantidad_origen"] = "";
	$fieldLabelsgestion_registros_origen["Spanish"]["foto_origen"] = "Fotos de origen";
	$fieldToolTipsgestion_registros_origen["Spanish"]["foto_origen"] = "";
	$placeHoldersgestion_registros_origen["Spanish"]["foto_origen"] = "";
	$fieldLabelsgestion_registros_origen["Spanish"]["gps_mapa_goo"] = "GPS en mapa google";
	$fieldToolTipsgestion_registros_origen["Spanish"]["gps_mapa_goo"] = "Los valores deben de ser de forma automátic. favor activar su GPS si la posición no carga de forma automática, gracias.";
	$placeHoldersgestion_registros_origen["Spanish"]["gps_mapa_goo"] = "";
	$fieldLabelsgestion_registros_origen["Spanish"]["Lat"] = "Lat";
	$fieldToolTipsgestion_registros_origen["Spanish"]["Lat"] = "";
	$placeHoldersgestion_registros_origen["Spanish"]["Lat"] = "";
	$fieldLabelsgestion_registros_origen["Spanish"]["Lng"] = "Lng";
	$fieldToolTipsgestion_registros_origen["Spanish"]["Lng"] = "";
	$placeHoldersgestion_registros_origen["Spanish"]["Lng"] = "";
	if (count($fieldToolTipsgestion_registros_origen["Spanish"]))
		$tdatagestion_registros_origen[".isUseToolTips"] = true;
}


	$tdatagestion_registros_origen[".NCSearch"] = true;



$tdatagestion_registros_origen[".shortTableName"] = "gestion_registros_origen";
$tdatagestion_registros_origen[".nSecOptions"] = 1;

$tdatagestion_registros_origen[".mainTableOwnerID"] = "id_usuario";
$tdatagestion_registros_origen[".entityType"] = 0;
$tdatagestion_registros_origen[".connId"] = "RealEstate_at_localhost";


$tdatagestion_registros_origen[".strOriginalTableName"] = "public.gestion_registros_origen";

	



$tdatagestion_registros_origen[".showAddInPopup"] = false;

$tdatagestion_registros_origen[".showEditInPopup"] = false;

$tdatagestion_registros_origen[".showViewInPopup"] = false;

$tdatagestion_registros_origen[".listAjax"] = false;
//	temporary
//$tdatagestion_registros_origen[".listAjax"] = false;

	$tdatagestion_registros_origen[".audit"] = false;

	$tdatagestion_registros_origen[".locking"] = false;


$pages = $tdatagestion_registros_origen[".defaultPages"];

if( $pages[PAGE_EDIT] ) {
	$tdatagestion_registros_origen[".edit"] = true;
	$tdatagestion_registros_origen[".afterEditAction"] = 1;
	$tdatagestion_registros_origen[".closePopupAfterEdit"] = 1;
	$tdatagestion_registros_origen[".afterEditActionDetTable"] = "";
}

if( $pages[PAGE_ADD] ) {
$tdatagestion_registros_origen[".add"] = true;
$tdatagestion_registros_origen[".afterAddAction"] = 1;
$tdatagestion_registros_origen[".closePopupAfterAdd"] = 1;
$tdatagestion_registros_origen[".afterAddActionDetTable"] = "";
}

if( $pages[PAGE_LIST] ) {
	$tdatagestion_registros_origen[".list"] = true;
}



$tdatagestion_registros_origen[".strSortControlSettingsJSON"] = "";




if( $pages[PAGE_VIEW] ) {
$tdatagestion_registros_origen[".view"] = true;
}

if( $pages[PAGE_IMPORT] ) {
$tdatagestion_registros_origen[".import"] = true;
}

if( $pages[PAGE_EXPORT] ) {
$tdatagestion_registros_origen[".exportTo"] = true;
}

if( $pages[PAGE_PRINT] ) {
$tdatagestion_registros_origen[".printFriendly"] = true;
}



$tdatagestion_registros_origen[".showSimpleSearchOptions"] = true; // temp fix #13449

// Allow Show/Hide Fields in GRID
$tdatagestion_registros_origen[".allowShowHideFields"] = true; // temp fix #13449
//

// Allow Fields Reordering in GRID
$tdatagestion_registros_origen[".allowFieldsReordering"] = true; // temp fix #13449
//

$tdatagestion_registros_origen[".isUseAjaxSuggest"] = true;

$tdatagestion_registros_origen[".rowHighlite"] = true;



									

$tdatagestion_registros_origen[".ajaxCodeSnippetAdded"] = false;

$tdatagestion_registros_origen[".buttonsAdded"] = false;

$tdatagestion_registros_origen[".addPageEvents"] = true;

// use timepicker for search panel
$tdatagestion_registros_origen[".isUseTimeForSearch"] = false;


$tdatagestion_registros_origen[".badgeColor"] = "EDCA00";


$tdatagestion_registros_origen[".allSearchFields"] = array();
$tdatagestion_registros_origen[".filterFields"] = array();
$tdatagestion_registros_origen[".requiredSearchFields"] = array();

$tdatagestion_registros_origen[".googleLikeFields"] = array();
$tdatagestion_registros_origen[".googleLikeFields"][] = "id_ges_reg_origen";
$tdatagestion_registros_origen[".googleLikeFields"][] = "id_residuo";
$tdatagestion_registros_origen[".googleLikeFields"][] = "id_med_tip_origen";
$tdatagestion_registros_origen[".googleLikeFields"][] = "id_usuario";
$tdatagestion_registros_origen[".googleLikeFields"][] = "cantidad_origen";
$tdatagestion_registros_origen[".googleLikeFields"][] = "foto_origen";
$tdatagestion_registros_origen[".googleLikeFields"][] = "gps_mapa_goo";
$tdatagestion_registros_origen[".googleLikeFields"][] = "Lat";
$tdatagestion_registros_origen[".googleLikeFields"][] = "Lng";



$tdatagestion_registros_origen[".tableType"] = "list";

$tdatagestion_registros_origen[".printerPageOrientation"] = 0;
$tdatagestion_registros_origen[".nPrinterPageScale"] = 100;

$tdatagestion_registros_origen[".nPrinterSplitRecords"] = 40;

$tdatagestion_registros_origen[".geocodingEnabled"] = false;










$tdatagestion_registros_origen[".pageSize"] = 20;

$tdatagestion_registros_origen[".warnLeavingPages"] = true;



$tstrOrderBy = "";
$tdatagestion_registros_origen[".strOrderBy"] = $tstrOrderBy;

$tdatagestion_registros_origen[".orderindexes"] = array();


$tdatagestion_registros_origen[".sqlHead"] = "SELECT id_ges_reg_origen,  	id_residuo,  	id_med_tip_origen,  	id_usuario,  	cantidad_origen,  	foto_origen,  	gps_mapa_goo,  	\"Lat\",  	\"Lng\"";
$tdatagestion_registros_origen[".sqlFrom"] = "FROM \"public\".gestion_registros_origen";
$tdatagestion_registros_origen[".sqlWhereExpr"] = "";
$tdatagestion_registros_origen[".sqlTail"] = "";










//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdatagestion_registros_origen[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdatagestion_registros_origen[".arrGroupsPerPage"] = $arrGPP;

$tdatagestion_registros_origen[".highlightSearchResults"] = true;

$tableKeysgestion_registros_origen = array();
$tableKeysgestion_registros_origen[] = "id_ges_reg_origen";
$tdatagestion_registros_origen[".Keys"] = $tableKeysgestion_registros_origen;


$tdatagestion_registros_origen[".hideMobileList"] = array();




//	id_ges_reg_origen
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "id_ges_reg_origen";
	$fdata["GoodName"] = "id_ges_reg_origen";
	$fdata["ownerTable"] = "public.gestion_registros_origen";
	$fdata["Label"] = GetFieldLabel("public_gestion_registros_origen","id_ges_reg_origen");
	$fdata["FieldType"] = 3;


	
	
			

		$fdata["strField"] = "id_ges_reg_origen";

		$fdata["sourceSingle"] = "id_ges_reg_origen";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "id_ges_reg_origen";

	
	
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


	$tdatagestion_registros_origen["id_ges_reg_origen"] = $fdata;
		$tdatagestion_registros_origen[".searchableFields"][] = "id_ges_reg_origen";
//	id_residuo
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "id_residuo";
	$fdata["GoodName"] = "id_residuo";
	$fdata["ownerTable"] = "public.gestion_registros_origen";
	$fdata["Label"] = GetFieldLabel("public_gestion_registros_origen","id_residuo");
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

	$edata = array("EditFormat" => "Lookup wizard");

	
		$edata["weekdayMessage"] = array("message" => "", "messageType" => "Text");
	$edata["weekdays"] = "[]";


	
	

// Begin Lookup settings
				$edata["LookupType"] = 2;
	$edata["LookupTable"] = "public.residuos";
			$edata["autoCompleteFieldsOnEdit"] = 0;
	$edata["autoCompleteFields"] = array();
		$edata["LCType"] = 0;

	
		
	$edata["LinkField"] = "id_residuo";
	$edata["LinkFieldType"] = 3;
	$edata["DisplayField"] = "descri_residuo";

	

	
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

	
			
	
	
	
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;




// the field's search options settings
		$fdata["defaultSearchOption"] = "Equals";

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


	$tdatagestion_registros_origen["id_residuo"] = $fdata;
		$tdatagestion_registros_origen[".searchableFields"][] = "id_residuo";
//	id_med_tip_origen
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "id_med_tip_origen";
	$fdata["GoodName"] = "id_med_tip_origen";
	$fdata["ownerTable"] = "public.gestion_registros_origen";
	$fdata["Label"] = GetFieldLabel("public_gestion_registros_origen","id_med_tip_origen");
	$fdata["FieldType"] = 3;


	
	
			

		$fdata["strField"] = "id_med_tip_origen";

		$fdata["sourceSingle"] = "id_med_tip_origen";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "id_med_tip_origen";

	
	
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
	$edata["LookupTable"] = "public.med_tipo_origen";
			$edata["autoCompleteFieldsOnEdit"] = 0;
	$edata["autoCompleteFields"] = array();
		$edata["LCType"] = 0;

	
		
	$edata["LinkField"] = "id_med_tip_origen";
	$edata["LinkFieldType"] = 0;
	$edata["DisplayField"] = "descri_med_tip_origen";

	

	
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


	$tdatagestion_registros_origen["id_med_tip_origen"] = $fdata;
		$tdatagestion_registros_origen[".searchableFields"][] = "id_med_tip_origen";
//	id_usuario
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "id_usuario";
	$fdata["GoodName"] = "id_usuario";
	$fdata["ownerTable"] = "public.gestion_registros_origen";
	$fdata["Label"] = GetFieldLabel("public_gestion_registros_origen","id_usuario");
	$fdata["FieldType"] = 3;


	
	
			

		$fdata["strField"] = "id_usuario";

		$fdata["sourceSingle"] = "id_usuario";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "id_usuario";

	
	
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
	$edata["LookupTable"] = "public.usuarios";
			$edata["autoCompleteFieldsOnEdit"] = 0;
	$edata["autoCompleteFields"] = array();
		$edata["LCType"] = 0;

	
		
	$edata["LinkField"] = "id_usuario";
	$edata["LinkFieldType"] = 0;
	$edata["DisplayField"] = "nombre_completo";

	

	
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


	$tdatagestion_registros_origen["id_usuario"] = $fdata;
		$tdatagestion_registros_origen[".searchableFields"][] = "id_usuario";
//	cantidad_origen
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 5;
	$fdata["strName"] = "cantidad_origen";
	$fdata["GoodName"] = "cantidad_origen";
	$fdata["ownerTable"] = "public.gestion_registros_origen";
	$fdata["Label"] = GetFieldLabel("public_gestion_registros_origen","cantidad_origen");
	$fdata["FieldType"] = 14;


	
	
			

		$fdata["strField"] = "cantidad_origen";

		$fdata["sourceSingle"] = "cantidad_origen";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "cantidad_origen";

	
	
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


	$tdatagestion_registros_origen["cantidad_origen"] = $fdata;
		$tdatagestion_registros_origen[".searchableFields"][] = "cantidad_origen";
//	foto_origen
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 6;
	$fdata["strName"] = "foto_origen";
	$fdata["GoodName"] = "foto_origen";
	$fdata["ownerTable"] = "public.gestion_registros_origen";
	$fdata["Label"] = GetFieldLabel("public_gestion_registros_origen","foto_origen");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "foto_origen";

		$fdata["sourceSingle"] = "foto_origen";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "foto_origen";

	
	
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "Document Download");

	
	
	
								$vdata["ShowIcon"] = true;
		
	
	
	
	
	
	
	
		
	
	
	
		$vdata["truncateText"] = true;
	$vdata["NumberOfChars"] = 80;

	$fdata["ViewFormats"]["view"] = $vdata;
	$vdata = array("ViewFormat" => "Document Download");

	
	
	
								$vdata["ShowIcon"] = true;
		
	
	
	
	
	
	
	
		
	
	
	
		$vdata["truncateText"] = true;
	$vdata["NumberOfChars"] = 80;

	$fdata["ViewFormats"]["list"] = $vdata;
	$vdata = array("ViewFormat" => "Document Download");

	
	
	
								$vdata["ShowIcon"] = true;
		
	
	
	
	
	
	
	
		
	
	
	
		$vdata["truncateText"] = true;
	$vdata["NumberOfChars"] = 80;

	$fdata["ViewFormats"]["print"] = $vdata;
	$vdata = array("ViewFormat" => "Document Download");

	
	
	
								$vdata["ShowIcon"] = true;
		
	
	
	
	
	
	
	
		
	
	
	
		$vdata["truncateText"] = true;
	$vdata["NumberOfChars"] = 80;

	$fdata["ViewFormats"]["export"] = $vdata;
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

		$edata["CreateThumbnail"] = true;
	$edata["StrThumbnail"] = "th";
			$edata["ThumbnailSize"] = 600;

			
	
	
	
	$fdata["EditFormats"]["edit"] = $edata;
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

	
			
	
	
	
	$fdata["EditFormats"]["add"] = $edata;
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


	$tdatagestion_registros_origen["foto_origen"] = $fdata;
		$tdatagestion_registros_origen[".searchableFields"][] = "foto_origen";
//	gps_mapa_goo
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 7;
	$fdata["strName"] = "gps_mapa_goo";
	$fdata["GoodName"] = "gps_mapa_goo";
	$fdata["ownerTable"] = "public.gestion_registros_origen";
	$fdata["Label"] = GetFieldLabel("public_gestion_registros_origen","gps_mapa_goo");
	$fdata["FieldType"] = 201;


	
	
			

		$fdata["strField"] = "gps_mapa_goo";

		$fdata["sourceSingle"] = "gps_mapa_goo";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "gps_mapa_goo";

	
	
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
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Readonly");

	
		$edata["weekdayMessage"] = array("message" => "", "messageType" => "Text");
	$edata["weekdays"] = "[]";


	
	



		$edata["IsRequired"] = true;

	
	
	
			$edata["acceptFileTypes"] = ".+$";
		$edata["acceptFileTypesHtml"] = "";

		$edata["maxNumberOfFiles"] = 0;

	
	
	
	
	
	
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


	$tdatagestion_registros_origen["gps_mapa_goo"] = $fdata;
		$tdatagestion_registros_origen[".searchableFields"][] = "gps_mapa_goo";
//	Lat
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 8;
	$fdata["strName"] = "Lat";
	$fdata["GoodName"] = "Lat";
	$fdata["ownerTable"] = "public.gestion_registros_origen";
	$fdata["Label"] = GetFieldLabel("public_gestion_registros_origen","Lat");
	$fdata["FieldType"] = 14;


	
	
			

		$fdata["strField"] = "Lat";

		$fdata["sourceSingle"] = "Lat";

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


	$tdatagestion_registros_origen["Lat"] = $fdata;
		$tdatagestion_registros_origen[".searchableFields"][] = "Lat";
//	Lng
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 9;
	$fdata["strName"] = "Lng";
	$fdata["GoodName"] = "Lng";
	$fdata["ownerTable"] = "public.gestion_registros_origen";
	$fdata["Label"] = GetFieldLabel("public_gestion_registros_origen","Lng");
	$fdata["FieldType"] = 14;


	
	
			

		$fdata["strField"] = "Lng";

		$fdata["sourceSingle"] = "Lng";

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


	$tdatagestion_registros_origen["Lng"] = $fdata;
		$tdatagestion_registros_origen[".searchableFields"][] = "Lng";


$tables_data["public.gestion_registros_origen"]=&$tdatagestion_registros_origen;
$field_labels["public_gestion_registros_origen"] = &$fieldLabelsgestion_registros_origen;
$fieldToolTips["public_gestion_registros_origen"] = &$fieldToolTipsgestion_registros_origen;
$placeHolders["public_gestion_registros_origen"] = &$placeHoldersgestion_registros_origen;
$page_titles["public_gestion_registros_origen"] = &$pageTitlesgestion_registros_origen;

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)

//if !@TABLE.bReportCrossTab

$detailsTablesData["public.gestion_registros_origen"] = array();
//endif

// tables which are master tables for current table (detail)
$masterTablesData["public.gestion_registros_origen"] = array();



	
	//if !@t.bReportCrossTab
			$strOriginalDetailsTable="public.residuos";
	$masterParams = array();
	$masterParams["mDataSourceTable"]="public.residuos";
	$masterParams["mOriginalTable"]= $strOriginalDetailsTable;
	$masterParams["mShortTable"]= "residuos";
	$masterParams["masterKeys"]= array();
	$masterParams["detailKeys"]= array();

	$masterParams["type"] = PAGE_LIST;
					$masterTablesData["public.gestion_registros_origen"][0] = $masterParams;
				$masterTablesData["public.gestion_registros_origen"][0]["masterKeys"] = array();
	$masterTablesData["public.gestion_registros_origen"][0]["masterKeys"][]="id_residuo";
				$masterTablesData["public.gestion_registros_origen"][0]["detailKeys"] = array();
	$masterTablesData["public.gestion_registros_origen"][0]["detailKeys"][]="id_residuo";
		
	//endif
	
	//if !@t.bReportCrossTab
			$strOriginalDetailsTable="public.med_tipo_origen";
	$masterParams = array();
	$masterParams["mDataSourceTable"]="public.med_tipo_origen";
	$masterParams["mOriginalTable"]= $strOriginalDetailsTable;
	$masterParams["mShortTable"]= "med_tipo_origen";
	$masterParams["masterKeys"]= array();
	$masterParams["detailKeys"]= array();

	$masterParams["type"] = PAGE_LIST;
					$masterTablesData["public.gestion_registros_origen"][1] = $masterParams;
				$masterTablesData["public.gestion_registros_origen"][1]["masterKeys"] = array();
	$masterTablesData["public.gestion_registros_origen"][1]["masterKeys"][]="id_med_tip_origen";
				$masterTablesData["public.gestion_registros_origen"][1]["detailKeys"] = array();
	$masterTablesData["public.gestion_registros_origen"][1]["detailKeys"][]="id_med_tip_origen";
		
	//endif
// -----------------end  prepare master-details data arrays ------------------------------//



require_once(getabspath("classes/sql.php"));











function createSqlQuery_gestion_registros_origen()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "id_ges_reg_origen,  	id_residuo,  	id_med_tip_origen,  	id_usuario,  	cantidad_origen,  	foto_origen,  	gps_mapa_goo,  	\"Lat\",  	\"Lng\"";
$proto0["m_strFrom"] = "FROM \"public\".gestion_registros_origen";
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
	"m_strName" => "id_ges_reg_origen",
	"m_strTable" => "public.gestion_registros_origen",
	"m_srcTableName" => "public.gestion_registros_origen"
));

$proto6["m_sql"] = "id_ges_reg_origen";
$proto6["m_srcTableName"] = "public.gestion_registros_origen";
$proto6["m_expr"]=$obj;
$proto6["m_alias"] = "";
$obj = new SQLFieldListItem($proto6);

$proto0["m_fieldlist"][]=$obj;
						$proto8=array();
			$obj = new SQLField(array(
	"m_strName" => "id_residuo",
	"m_strTable" => "public.gestion_registros_origen",
	"m_srcTableName" => "public.gestion_registros_origen"
));

$proto8["m_sql"] = "id_residuo";
$proto8["m_srcTableName"] = "public.gestion_registros_origen";
$proto8["m_expr"]=$obj;
$proto8["m_alias"] = "";
$obj = new SQLFieldListItem($proto8);

$proto0["m_fieldlist"][]=$obj;
						$proto10=array();
			$obj = new SQLField(array(
	"m_strName" => "id_med_tip_origen",
	"m_strTable" => "public.gestion_registros_origen",
	"m_srcTableName" => "public.gestion_registros_origen"
));

$proto10["m_sql"] = "id_med_tip_origen";
$proto10["m_srcTableName"] = "public.gestion_registros_origen";
$proto10["m_expr"]=$obj;
$proto10["m_alias"] = "";
$obj = new SQLFieldListItem($proto10);

$proto0["m_fieldlist"][]=$obj;
						$proto12=array();
			$obj = new SQLField(array(
	"m_strName" => "id_usuario",
	"m_strTable" => "public.gestion_registros_origen",
	"m_srcTableName" => "public.gestion_registros_origen"
));

$proto12["m_sql"] = "id_usuario";
$proto12["m_srcTableName"] = "public.gestion_registros_origen";
$proto12["m_expr"]=$obj;
$proto12["m_alias"] = "";
$obj = new SQLFieldListItem($proto12);

$proto0["m_fieldlist"][]=$obj;
						$proto14=array();
			$obj = new SQLField(array(
	"m_strName" => "cantidad_origen",
	"m_strTable" => "public.gestion_registros_origen",
	"m_srcTableName" => "public.gestion_registros_origen"
));

$proto14["m_sql"] = "cantidad_origen";
$proto14["m_srcTableName"] = "public.gestion_registros_origen";
$proto14["m_expr"]=$obj;
$proto14["m_alias"] = "";
$obj = new SQLFieldListItem($proto14);

$proto0["m_fieldlist"][]=$obj;
						$proto16=array();
			$obj = new SQLField(array(
	"m_strName" => "foto_origen",
	"m_strTable" => "public.gestion_registros_origen",
	"m_srcTableName" => "public.gestion_registros_origen"
));

$proto16["m_sql"] = "foto_origen";
$proto16["m_srcTableName"] = "public.gestion_registros_origen";
$proto16["m_expr"]=$obj;
$proto16["m_alias"] = "";
$obj = new SQLFieldListItem($proto16);

$proto0["m_fieldlist"][]=$obj;
						$proto18=array();
			$obj = new SQLField(array(
	"m_strName" => "gps_mapa_goo",
	"m_strTable" => "public.gestion_registros_origen",
	"m_srcTableName" => "public.gestion_registros_origen"
));

$proto18["m_sql"] = "gps_mapa_goo";
$proto18["m_srcTableName"] = "public.gestion_registros_origen";
$proto18["m_expr"]=$obj;
$proto18["m_alias"] = "";
$obj = new SQLFieldListItem($proto18);

$proto0["m_fieldlist"][]=$obj;
						$proto20=array();
			$obj = new SQLField(array(
	"m_strName" => "Lat",
	"m_strTable" => "public.gestion_registros_origen",
	"m_srcTableName" => "public.gestion_registros_origen"
));

$proto20["m_sql"] = "\"Lat\"";
$proto20["m_srcTableName"] = "public.gestion_registros_origen";
$proto20["m_expr"]=$obj;
$proto20["m_alias"] = "";
$obj = new SQLFieldListItem($proto20);

$proto0["m_fieldlist"][]=$obj;
						$proto22=array();
			$obj = new SQLField(array(
	"m_strName" => "Lng",
	"m_strTable" => "public.gestion_registros_origen",
	"m_srcTableName" => "public.gestion_registros_origen"
));

$proto22["m_sql"] = "\"Lng\"";
$proto22["m_srcTableName"] = "public.gestion_registros_origen";
$proto22["m_expr"]=$obj;
$proto22["m_alias"] = "";
$obj = new SQLFieldListItem($proto22);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto24=array();
$proto24["m_link"] = "SQLL_MAIN";
			$proto25=array();
$proto25["m_strName"] = "public.gestion_registros_origen";
$proto25["m_srcTableName"] = "public.gestion_registros_origen";
$proto25["m_columns"] = array();
$proto25["m_columns"][] = "id_ges_reg_origen";
$proto25["m_columns"][] = "id_residuo";
$proto25["m_columns"][] = "id_med_tip_origen";
$proto25["m_columns"][] = "id_usuario";
$proto25["m_columns"][] = "cantidad_origen";
$proto25["m_columns"][] = "foto_origen";
$proto25["m_columns"][] = "gps_mapa_goo";
$proto25["m_columns"][] = "Lat";
$proto25["m_columns"][] = "Lng";
$obj = new SQLTable($proto25);

$proto24["m_table"] = $obj;
$proto24["m_sql"] = "\"public\".gestion_registros_origen";
$proto24["m_alias"] = "";
$proto24["m_srcTableName"] = "public.gestion_registros_origen";
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
$proto0["m_srcTableName"]="public.gestion_registros_origen";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_gestion_registros_origen = createSqlQuery_gestion_registros_origen();


	
		;

									

$tdatagestion_registros_origen[".sqlquery"] = $queryData_gestion_registros_origen;



include_once(getabspath("include/gestion_registros_origen_events.php"));
$tableEvents["public.gestion_registros_origen"] = new eventclass_gestion_registros_origen;
$tdatagestion_registros_origen[".hasEvents"] = true;

?>