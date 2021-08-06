<?php
$tdatagestion_pesos_residuos = array();
$tdatagestion_pesos_residuos[".searchableFields"] = array();
$tdatagestion_pesos_residuos[".ShortName"] = "gestion_pesos_residuos";
$tdatagestion_pesos_residuos[".OwnerID"] = "";
$tdatagestion_pesos_residuos[".OriginalTable"] = "public.gestion_pesos_residuos";


$tdatagestion_pesos_residuos[".pagesByType"] = my_json_decode( "{\"add\":[\"add\"],\"edit\":[\"edit\"],\"export\":[\"export\"],\"import\":[\"import\"],\"list\":[\"list\"],\"masterlist\":[\"masterlist\"],\"masterprint\":[\"masterprint\"],\"print\":[\"print\"],\"search\":[\"search\"],\"view\":[\"view\"]}" );
$tdatagestion_pesos_residuos[".originalPagesByType"] = $tdatagestion_pesos_residuos[".pagesByType"];
$tdatagestion_pesos_residuos[".pages"] = types2pages( my_json_decode( "{\"add\":[\"add\"],\"edit\":[\"edit\"],\"export\":[\"export\"],\"import\":[\"import\"],\"list\":[\"list\"],\"masterlist\":[\"masterlist\"],\"masterprint\":[\"masterprint\"],\"print\":[\"print\"],\"search\":[\"search\"],\"view\":[\"view\"]}" ) );
$tdatagestion_pesos_residuos[".originalPages"] = $tdatagestion_pesos_residuos[".pages"];
$tdatagestion_pesos_residuos[".defaultPages"] = my_json_decode( "{\"add\":\"add\",\"edit\":\"edit\",\"export\":\"export\",\"import\":\"import\",\"list\":\"list\",\"masterlist\":\"masterlist\",\"masterprint\":\"masterprint\",\"print\":\"print\",\"search\":\"search\",\"view\":\"view\"}" );
$tdatagestion_pesos_residuos[".originalDefaultPages"] = $tdatagestion_pesos_residuos[".defaultPages"];

//	field labels
$fieldLabelsgestion_pesos_residuos = array();
$fieldToolTipsgestion_pesos_residuos = array();
$pageTitlesgestion_pesos_residuos = array();
$placeHoldersgestion_pesos_residuos = array();

if(mlang_getcurrentlang()=="Spanish")
{
	$fieldLabelsgestion_pesos_residuos["Spanish"] = array();
	$fieldToolTipsgestion_pesos_residuos["Spanish"] = array();
	$placeHoldersgestion_pesos_residuos["Spanish"] = array();
	$pageTitlesgestion_pesos_residuos["Spanish"] = array();
	$fieldLabelsgestion_pesos_residuos["Spanish"]["id_ges_pes_residuo"] = "Código";
	$fieldToolTipsgestion_pesos_residuos["Spanish"]["id_ges_pes_residuo"] = "";
	$placeHoldersgestion_pesos_residuos["Spanish"]["id_ges_pes_residuo"] = "";
	$fieldLabelsgestion_pesos_residuos["Spanish"]["id_reciclador"] = "Reciclador/a";
	$fieldToolTipsgestion_pesos_residuos["Spanish"]["id_reciclador"] = "";
	$placeHoldersgestion_pesos_residuos["Spanish"]["id_reciclador"] = "";
	$fieldLabelsgestion_pesos_residuos["Spanish"]["id_residuo"] = "Residuo";
	$fieldToolTipsgestion_pesos_residuos["Spanish"]["id_residuo"] = "";
	$placeHoldersgestion_pesos_residuos["Spanish"]["id_residuo"] = "";
	$fieldLabelsgestion_pesos_residuos["Spanish"]["fecha_gestion_pesos"] = "Fecha Gestion Pesos";
	$fieldToolTipsgestion_pesos_residuos["Spanish"]["fecha_gestion_pesos"] = "";
	$placeHoldersgestion_pesos_residuos["Spanish"]["fecha_gestion_pesos"] = "";
	$fieldLabelsgestion_pesos_residuos["Spanish"]["kilo_residuo"] = "Kilo Residuo";
	$fieldToolTipsgestion_pesos_residuos["Spanish"]["kilo_residuo"] = "";
	$placeHoldersgestion_pesos_residuos["Spanish"]["kilo_residuo"] = "";
	$fieldLabelsgestion_pesos_residuos["Spanish"]["estado"] = "Estado";
	$fieldToolTipsgestion_pesos_residuos["Spanish"]["estado"] = "";
	$placeHoldersgestion_pesos_residuos["Spanish"]["estado"] = "";
	if (count($fieldToolTipsgestion_pesos_residuos["Spanish"]))
		$tdatagestion_pesos_residuos[".isUseToolTips"] = true;
}


	$tdatagestion_pesos_residuos[".NCSearch"] = true;



$tdatagestion_pesos_residuos[".shortTableName"] = "gestion_pesos_residuos";
$tdatagestion_pesos_residuos[".nSecOptions"] = 0;

$tdatagestion_pesos_residuos[".mainTableOwnerID"] = "";
$tdatagestion_pesos_residuos[".entityType"] = 0;
$tdatagestion_pesos_residuos[".connId"] = "RealEstate_at_localhost";


$tdatagestion_pesos_residuos[".strOriginalTableName"] = "public.gestion_pesos_residuos";

	



$tdatagestion_pesos_residuos[".showAddInPopup"] = false;

$tdatagestion_pesos_residuos[".showEditInPopup"] = false;

$tdatagestion_pesos_residuos[".showViewInPopup"] = false;

$tdatagestion_pesos_residuos[".listAjax"] = false;
//	temporary
//$tdatagestion_pesos_residuos[".listAjax"] = false;

	$tdatagestion_pesos_residuos[".audit"] = false;

	$tdatagestion_pesos_residuos[".locking"] = false;


$pages = $tdatagestion_pesos_residuos[".defaultPages"];

if( $pages[PAGE_EDIT] ) {
	$tdatagestion_pesos_residuos[".edit"] = true;
	$tdatagestion_pesos_residuos[".afterEditAction"] = 1;
	$tdatagestion_pesos_residuos[".closePopupAfterEdit"] = 1;
	$tdatagestion_pesos_residuos[".afterEditActionDetTable"] = "";
}

if( $pages[PAGE_ADD] ) {
$tdatagestion_pesos_residuos[".add"] = true;
$tdatagestion_pesos_residuos[".afterAddAction"] = 1;
$tdatagestion_pesos_residuos[".closePopupAfterAdd"] = 1;
$tdatagestion_pesos_residuos[".afterAddActionDetTable"] = "";
}

if( $pages[PAGE_LIST] ) {
	$tdatagestion_pesos_residuos[".list"] = true;
}



$tdatagestion_pesos_residuos[".strSortControlSettingsJSON"] = "";




if( $pages[PAGE_VIEW] ) {
$tdatagestion_pesos_residuos[".view"] = true;
}

if( $pages[PAGE_IMPORT] ) {
$tdatagestion_pesos_residuos[".import"] = true;
}

if( $pages[PAGE_EXPORT] ) {
$tdatagestion_pesos_residuos[".exportTo"] = true;
}

if( $pages[PAGE_PRINT] ) {
$tdatagestion_pesos_residuos[".printFriendly"] = true;
}



$tdatagestion_pesos_residuos[".showSimpleSearchOptions"] = true; // temp fix #13449

// Allow Show/Hide Fields in GRID
$tdatagestion_pesos_residuos[".allowShowHideFields"] = true; // temp fix #13449
//

// Allow Fields Reordering in GRID
$tdatagestion_pesos_residuos[".allowFieldsReordering"] = true; // temp fix #13449
//

$tdatagestion_pesos_residuos[".isUseAjaxSuggest"] = true;

$tdatagestion_pesos_residuos[".rowHighlite"] = true;



									

$tdatagestion_pesos_residuos[".ajaxCodeSnippetAdded"] = false;

$tdatagestion_pesos_residuos[".buttonsAdded"] = false;

$tdatagestion_pesos_residuos[".addPageEvents"] = false;

// use timepicker for search panel
$tdatagestion_pesos_residuos[".isUseTimeForSearch"] = false;


$tdatagestion_pesos_residuos[".badgeColor"] = "e8926f";


$tdatagestion_pesos_residuos[".allSearchFields"] = array();
$tdatagestion_pesos_residuos[".filterFields"] = array();
$tdatagestion_pesos_residuos[".requiredSearchFields"] = array();

$tdatagestion_pesos_residuos[".googleLikeFields"] = array();
$tdatagestion_pesos_residuos[".googleLikeFields"][] = "id_ges_pes_residuo";
$tdatagestion_pesos_residuos[".googleLikeFields"][] = "id_reciclador";
$tdatagestion_pesos_residuos[".googleLikeFields"][] = "id_residuo";
$tdatagestion_pesos_residuos[".googleLikeFields"][] = "fecha_gestion_pesos";
$tdatagestion_pesos_residuos[".googleLikeFields"][] = "kilo_residuo";
$tdatagestion_pesos_residuos[".googleLikeFields"][] = "estado";



$tdatagestion_pesos_residuos[".tableType"] = "list";

$tdatagestion_pesos_residuos[".printerPageOrientation"] = 0;
$tdatagestion_pesos_residuos[".nPrinterPageScale"] = 100;

$tdatagestion_pesos_residuos[".nPrinterSplitRecords"] = 40;

$tdatagestion_pesos_residuos[".geocodingEnabled"] = false;










$tdatagestion_pesos_residuos[".pageSize"] = 20;

$tdatagestion_pesos_residuos[".warnLeavingPages"] = true;



$tstrOrderBy = "";
$tdatagestion_pesos_residuos[".strOrderBy"] = $tstrOrderBy;

$tdatagestion_pesos_residuos[".orderindexes"] = array();


$tdatagestion_pesos_residuos[".sqlHead"] = "SELECT id_ges_pes_residuo,  	id_reciclador,  	id_residuo,  	fecha_gestion_pesos,  	kilo_residuo,  	estado";
$tdatagestion_pesos_residuos[".sqlFrom"] = "FROM \"public\".gestion_pesos_residuos";
$tdatagestion_pesos_residuos[".sqlWhereExpr"] = "";
$tdatagestion_pesos_residuos[".sqlTail"] = "";










//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdatagestion_pesos_residuos[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdatagestion_pesos_residuos[".arrGroupsPerPage"] = $arrGPP;

$tdatagestion_pesos_residuos[".highlightSearchResults"] = true;

$tableKeysgestion_pesos_residuos = array();
$tableKeysgestion_pesos_residuos[] = "id_ges_pes_residuo";
$tdatagestion_pesos_residuos[".Keys"] = $tableKeysgestion_pesos_residuos;


$tdatagestion_pesos_residuos[".hideMobileList"] = array();




//	id_ges_pes_residuo
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "id_ges_pes_residuo";
	$fdata["GoodName"] = "id_ges_pes_residuo";
	$fdata["ownerTable"] = "public.gestion_pesos_residuos";
	$fdata["Label"] = GetFieldLabel("public_gestion_pesos_residuos","id_ges_pes_residuo");
	$fdata["FieldType"] = 3;


	
	
			

		$fdata["strField"] = "id_ges_pes_residuo";

		$fdata["sourceSingle"] = "id_ges_pes_residuo";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "id_ges_pes_residuo";

	
	
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


	$tdatagestion_pesos_residuos["id_ges_pes_residuo"] = $fdata;
		$tdatagestion_pesos_residuos[".searchableFields"][] = "id_ges_pes_residuo";
//	id_reciclador
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "id_reciclador";
	$fdata["GoodName"] = "id_reciclador";
	$fdata["ownerTable"] = "public.gestion_pesos_residuos";
	$fdata["Label"] = GetFieldLabel("public_gestion_pesos_residuos","id_reciclador");
	$fdata["FieldType"] = 3;


	
	
			

		$fdata["strField"] = "id_reciclador";

		$fdata["sourceSingle"] = "id_reciclador";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "id_reciclador";

	
	
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

	$edata = array("EditFormat" => "Lookup wizard");

	
		$edata["weekdayMessage"] = array("message" => "", "messageType" => "Text");
	$edata["weekdays"] = "[]";


	
	

// Begin Lookup settings
				$edata["LookupType"] = 2;
	$edata["LookupTable"] = "public.recicladores";
			$edata["autoCompleteFieldsOnEdit"] = 0;
	$edata["autoCompleteFields"] = array();
		$edata["LCType"] = 0;

	
		
	$edata["LinkField"] = "id_reciclador";
	$edata["LinkFieldType"] = 0;
	$edata["DisplayField"] = "concat(nombre_reciclador,'  ',apellido_reciclador)";

	

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

	
			
	
	
	
	$fdata["EditFormats"]["edit"] = $edata;
	$edata = array("EditFormat" => "Lookup wizard");

	
		$edata["weekdayMessage"] = array("message" => "", "messageType" => "Text");
	$edata["weekdays"] = "[]";


	
	

// Begin Lookup settings
				$edata["LookupType"] = 2;
	$edata["LookupTable"] = "public.recicladores";
			$edata["autoCompleteFieldsOnEdit"] = 0;
	$edata["autoCompleteFields"] = array();
		$edata["LCType"] = 0;

	
		
	$edata["LinkField"] = "id_reciclador";
	$edata["LinkFieldType"] = 0;
	$edata["DisplayField"] = "concat(nombre_reciclador,' ',apellido_reciclador)";

	

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


	$tdatagestion_pesos_residuos["id_reciclador"] = $fdata;
		$tdatagestion_pesos_residuos[".searchableFields"][] = "id_reciclador";
//	id_residuo
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "id_residuo";
	$fdata["GoodName"] = "id_residuo";
	$fdata["ownerTable"] = "public.gestion_pesos_residuos";
	$fdata["Label"] = GetFieldLabel("public_gestion_pesos_residuos","id_residuo");
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
	$edata["LinkFieldType"] = 0;
	$edata["DisplayField"] = "descri_residuo";

	

	
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

	
			
	
	
	
	$fdata["EditFormats"]["edit"] = $edata;
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
	$edata["LinkFieldType"] = 0;
	$edata["DisplayField"] = "descri_residuo";

	

	
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


	$tdatagestion_pesos_residuos["id_residuo"] = $fdata;
		$tdatagestion_pesos_residuos[".searchableFields"][] = "id_residuo";
//	fecha_gestion_pesos
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "fecha_gestion_pesos";
	$fdata["GoodName"] = "fecha_gestion_pesos";
	$fdata["ownerTable"] = "public.gestion_pesos_residuos";
	$fdata["Label"] = GetFieldLabel("public_gestion_pesos_residuos","fecha_gestion_pesos");
	$fdata["FieldType"] = 7;


	
	
			

		$fdata["strField"] = "fecha_gestion_pesos";

		$fdata["sourceSingle"] = "fecha_gestion_pesos";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "fecha_gestion_pesos";

	
	
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


	$tdatagestion_pesos_residuos["fecha_gestion_pesos"] = $fdata;
		$tdatagestion_pesos_residuos[".searchableFields"][] = "fecha_gestion_pesos";
//	kilo_residuo
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 5;
	$fdata["strName"] = "kilo_residuo";
	$fdata["GoodName"] = "kilo_residuo";
	$fdata["ownerTable"] = "public.gestion_pesos_residuos";
	$fdata["Label"] = GetFieldLabel("public_gestion_pesos_residuos","kilo_residuo");
	$fdata["FieldType"] = 5;


	
	
			

		$fdata["strField"] = "kilo_residuo";

		$fdata["sourceSingle"] = "kilo_residuo";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "kilo_residuo";

	
	
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


	$tdatagestion_pesos_residuos["kilo_residuo"] = $fdata;
		$tdatagestion_pesos_residuos[".searchableFields"][] = "kilo_residuo";
//	estado
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 6;
	$fdata["strName"] = "estado";
	$fdata["GoodName"] = "estado";
	$fdata["ownerTable"] = "public.gestion_pesos_residuos";
	$fdata["Label"] = GetFieldLabel("public_gestion_pesos_residuos","estado");
	$fdata["FieldType"] = 14;


	
	
			

		$fdata["strField"] = "estado";

		$fdata["sourceSingle"] = "estado";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "estado";

	
	
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


	$tdatagestion_pesos_residuos["estado"] = $fdata;
		$tdatagestion_pesos_residuos[".searchableFields"][] = "estado";


$tables_data["public.gestion_pesos_residuos"]=&$tdatagestion_pesos_residuos;
$field_labels["public_gestion_pesos_residuos"] = &$fieldLabelsgestion_pesos_residuos;
$fieldToolTips["public_gestion_pesos_residuos"] = &$fieldToolTipsgestion_pesos_residuos;
$placeHolders["public_gestion_pesos_residuos"] = &$placeHoldersgestion_pesos_residuos;
$page_titles["public_gestion_pesos_residuos"] = &$pageTitlesgestion_pesos_residuos;

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)

//if !@TABLE.bReportCrossTab

$detailsTablesData["public.gestion_pesos_residuos"] = array();
//	public.detalles_ventas
	
	

		$dIndex = 0;
	$detailsParam = array();
	$detailsParam["dDataSourceTable"]="public.detalles_ventas";
		$detailsParam["dOriginalTable"] = "public.detalles_ventas";



		
		$detailsParam["dType"]=PAGE_LIST;
	$detailsParam["dShortTable"] = "detalles_ventas";
	$detailsParam["dCaptionTable"] = GetTableCaption("public_detalles_ventas");
	$detailsParam["masterKeys"] =array();
	$detailsParam["detailKeys"] =array();


		
	$detailsTablesData["public.gestion_pesos_residuos"][$dIndex] = $detailsParam;

	
		$detailsTablesData["public.gestion_pesos_residuos"][$dIndex]["masterKeys"] = array();

	$detailsTablesData["public.gestion_pesos_residuos"][$dIndex]["masterKeys"][]="id_ges_pes_residuo";

				$detailsTablesData["public.gestion_pesos_residuos"][$dIndex]["detailKeys"] = array();

	$detailsTablesData["public.gestion_pesos_residuos"][$dIndex]["detailKeys"][]="id_ges_pes_residuo";
//endif

// tables which are master tables for current table (detail)
$masterTablesData["public.gestion_pesos_residuos"] = array();



	
	//if !@t.bReportCrossTab
			$strOriginalDetailsTable="public.recicladores";
	$masterParams = array();
	$masterParams["mDataSourceTable"]="public.recicladores";
	$masterParams["mOriginalTable"]= $strOriginalDetailsTable;
	$masterParams["mShortTable"]= "recicladores";
	$masterParams["masterKeys"]= array();
	$masterParams["detailKeys"]= array();

	$masterParams["type"] = PAGE_LIST;
					$masterTablesData["public.gestion_pesos_residuos"][0] = $masterParams;
				$masterTablesData["public.gestion_pesos_residuos"][0]["masterKeys"] = array();
	$masterTablesData["public.gestion_pesos_residuos"][0]["masterKeys"][]="id_reciclador";
				$masterTablesData["public.gestion_pesos_residuos"][0]["detailKeys"] = array();
	$masterTablesData["public.gestion_pesos_residuos"][0]["detailKeys"][]="id_reciclador";
		
	//endif
	
	//if !@t.bReportCrossTab
			$strOriginalDetailsTable="public.residuos";
	$masterParams = array();
	$masterParams["mDataSourceTable"]="public.residuos";
	$masterParams["mOriginalTable"]= $strOriginalDetailsTable;
	$masterParams["mShortTable"]= "residuos";
	$masterParams["masterKeys"]= array();
	$masterParams["detailKeys"]= array();

	$masterParams["type"] = PAGE_LIST;
					$masterTablesData["public.gestion_pesos_residuos"][1] = $masterParams;
				$masterTablesData["public.gestion_pesos_residuos"][1]["masterKeys"] = array();
	$masterTablesData["public.gestion_pesos_residuos"][1]["masterKeys"][]="id_residuo";
				$masterTablesData["public.gestion_pesos_residuos"][1]["detailKeys"] = array();
	$masterTablesData["public.gestion_pesos_residuos"][1]["detailKeys"][]="id_residuo";
		
	//endif
// -----------------end  prepare master-details data arrays ------------------------------//



require_once(getabspath("classes/sql.php"));











function createSqlQuery_gestion_pesos_residuos()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "id_ges_pes_residuo,  	id_reciclador,  	id_residuo,  	fecha_gestion_pesos,  	kilo_residuo,  	estado";
$proto0["m_strFrom"] = "FROM \"public\".gestion_pesos_residuos";
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
	"m_strName" => "id_ges_pes_residuo",
	"m_strTable" => "public.gestion_pesos_residuos",
	"m_srcTableName" => "public.gestion_pesos_residuos"
));

$proto6["m_sql"] = "id_ges_pes_residuo";
$proto6["m_srcTableName"] = "public.gestion_pesos_residuos";
$proto6["m_expr"]=$obj;
$proto6["m_alias"] = "";
$obj = new SQLFieldListItem($proto6);

$proto0["m_fieldlist"][]=$obj;
						$proto8=array();
			$obj = new SQLField(array(
	"m_strName" => "id_reciclador",
	"m_strTable" => "public.gestion_pesos_residuos",
	"m_srcTableName" => "public.gestion_pesos_residuos"
));

$proto8["m_sql"] = "id_reciclador";
$proto8["m_srcTableName"] = "public.gestion_pesos_residuos";
$proto8["m_expr"]=$obj;
$proto8["m_alias"] = "";
$obj = new SQLFieldListItem($proto8);

$proto0["m_fieldlist"][]=$obj;
						$proto10=array();
			$obj = new SQLField(array(
	"m_strName" => "id_residuo",
	"m_strTable" => "public.gestion_pesos_residuos",
	"m_srcTableName" => "public.gestion_pesos_residuos"
));

$proto10["m_sql"] = "id_residuo";
$proto10["m_srcTableName"] = "public.gestion_pesos_residuos";
$proto10["m_expr"]=$obj;
$proto10["m_alias"] = "";
$obj = new SQLFieldListItem($proto10);

$proto0["m_fieldlist"][]=$obj;
						$proto12=array();
			$obj = new SQLField(array(
	"m_strName" => "fecha_gestion_pesos",
	"m_strTable" => "public.gestion_pesos_residuos",
	"m_srcTableName" => "public.gestion_pesos_residuos"
));

$proto12["m_sql"] = "fecha_gestion_pesos";
$proto12["m_srcTableName"] = "public.gestion_pesos_residuos";
$proto12["m_expr"]=$obj;
$proto12["m_alias"] = "";
$obj = new SQLFieldListItem($proto12);

$proto0["m_fieldlist"][]=$obj;
						$proto14=array();
			$obj = new SQLField(array(
	"m_strName" => "kilo_residuo",
	"m_strTable" => "public.gestion_pesos_residuos",
	"m_srcTableName" => "public.gestion_pesos_residuos"
));

$proto14["m_sql"] = "kilo_residuo";
$proto14["m_srcTableName"] = "public.gestion_pesos_residuos";
$proto14["m_expr"]=$obj;
$proto14["m_alias"] = "";
$obj = new SQLFieldListItem($proto14);

$proto0["m_fieldlist"][]=$obj;
						$proto16=array();
			$obj = new SQLField(array(
	"m_strName" => "estado",
	"m_strTable" => "public.gestion_pesos_residuos",
	"m_srcTableName" => "public.gestion_pesos_residuos"
));

$proto16["m_sql"] = "estado";
$proto16["m_srcTableName"] = "public.gestion_pesos_residuos";
$proto16["m_expr"]=$obj;
$proto16["m_alias"] = "";
$obj = new SQLFieldListItem($proto16);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto18=array();
$proto18["m_link"] = "SQLL_MAIN";
			$proto19=array();
$proto19["m_strName"] = "public.gestion_pesos_residuos";
$proto19["m_srcTableName"] = "public.gestion_pesos_residuos";
$proto19["m_columns"] = array();
$proto19["m_columns"][] = "id_ges_pes_residuo";
$proto19["m_columns"][] = "id_reciclador";
$proto19["m_columns"][] = "id_residuo";
$proto19["m_columns"][] = "fecha_gestion_pesos";
$proto19["m_columns"][] = "kilo_residuo";
$proto19["m_columns"][] = "estado";
$obj = new SQLTable($proto19);

$proto18["m_table"] = $obj;
$proto18["m_sql"] = "\"public\".gestion_pesos_residuos";
$proto18["m_alias"] = "";
$proto18["m_srcTableName"] = "public.gestion_pesos_residuos";
$proto20=array();
$proto20["m_sql"] = "";
$proto20["m_uniontype"] = "SQLL_UNKNOWN";
	$obj = new SQLNonParsed(array(
	"m_sql" => ""
));

$proto20["m_column"]=$obj;
$proto20["m_contained"] = array();
$proto20["m_strCase"] = "";
$proto20["m_havingmode"] = false;
$proto20["m_inBrackets"] = false;
$proto20["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto20);

$proto18["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto18);

$proto0["m_fromlist"][]=$obj;
$proto0["m_groupby"] = array();
$proto0["m_orderby"] = array();
$proto0["m_srcTableName"]="public.gestion_pesos_residuos";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_gestion_pesos_residuos = createSqlQuery_gestion_pesos_residuos();


	
		;

						

$tdatagestion_pesos_residuos[".sqlquery"] = $queryData_gestion_pesos_residuos;



$tableEvents["public.gestion_pesos_residuos"] = new eventsBase;
$tdatagestion_pesos_residuos[".hasEvents"] = false;

?>