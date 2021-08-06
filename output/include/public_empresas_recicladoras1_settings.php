<?php
$tdatapublic_empresas_recicladoras1 = array();
$tdatapublic_empresas_recicladoras1[".searchableFields"] = array();
$tdatapublic_empresas_recicladoras1[".ShortName"] = "public_empresas_recicladoras1";
$tdatapublic_empresas_recicladoras1[".OwnerID"] = "";
$tdatapublic_empresas_recicladoras1[".OriginalTable"] = "public.empresas_recicladoras";


$tdatapublic_empresas_recicladoras1[".pagesByType"] = my_json_decode( "{\"add\":[\"add\"],\"edit\":[\"edit\"],\"export\":[\"export\"],\"import\":[\"import\"],\"list\":[\"list\"],\"masterlist\":[\"masterlist\"],\"masterprint\":[\"masterprint\"],\"print\":[\"print\"],\"search\":[\"search\"],\"view\":[\"view\"]}" );
$tdatapublic_empresas_recicladoras1[".originalPagesByType"] = $tdatapublic_empresas_recicladoras1[".pagesByType"];
$tdatapublic_empresas_recicladoras1[".pages"] = types2pages( my_json_decode( "{\"add\":[\"add\"],\"edit\":[\"edit\"],\"export\":[\"export\"],\"import\":[\"import\"],\"list\":[\"list\"],\"masterlist\":[\"masterlist\"],\"masterprint\":[\"masterprint\"],\"print\":[\"print\"],\"search\":[\"search\"],\"view\":[\"view\"]}" ) );
$tdatapublic_empresas_recicladoras1[".originalPages"] = $tdatapublic_empresas_recicladoras1[".pages"];
$tdatapublic_empresas_recicladoras1[".defaultPages"] = my_json_decode( "{\"add\":\"add\",\"edit\":\"edit\",\"export\":\"export\",\"import\":\"import\",\"list\":\"list\",\"masterlist\":\"masterlist\",\"masterprint\":\"masterprint\",\"print\":\"print\",\"search\":\"search\",\"view\":\"view\"}" );
$tdatapublic_empresas_recicladoras1[".originalDefaultPages"] = $tdatapublic_empresas_recicladoras1[".defaultPages"];

//	field labels
$fieldLabelspublic_empresas_recicladoras1 = array();
$fieldToolTipspublic_empresas_recicladoras1 = array();
$pageTitlespublic_empresas_recicladoras1 = array();
$placeHolderspublic_empresas_recicladoras1 = array();

if(mlang_getcurrentlang()=="Spanish")
{
	$fieldLabelspublic_empresas_recicladoras1["Spanish"] = array();
	$fieldToolTipspublic_empresas_recicladoras1["Spanish"] = array();
	$placeHolderspublic_empresas_recicladoras1["Spanish"] = array();
	$pageTitlespublic_empresas_recicladoras1["Spanish"] = array();
	$fieldLabelspublic_empresas_recicladoras1["Spanish"]["id_empre_recicladora"] = "Código";
	$fieldToolTipspublic_empresas_recicladoras1["Spanish"]["id_empre_recicladora"] = "";
	$placeHolderspublic_empresas_recicladoras1["Spanish"]["id_empre_recicladora"] = "";
	$fieldLabelspublic_empresas_recicladoras1["Spanish"]["ruc_empre_recicladora"] = "R.U.C.";
	$fieldToolTipspublic_empresas_recicladoras1["Spanish"]["ruc_empre_recicladora"] = "";
	$placeHolderspublic_empresas_recicladoras1["Spanish"]["ruc_empre_recicladora"] = "";
	$fieldLabelspublic_empresas_recicladoras1["Spanish"]["nombre_empre_recicladora"] = "Empresa";
	$fieldToolTipspublic_empresas_recicladoras1["Spanish"]["nombre_empre_recicladora"] = "";
	$placeHolderspublic_empresas_recicladoras1["Spanish"]["nombre_empre_recicladora"] = "";
	$fieldLabelspublic_empresas_recicladoras1["Spanish"]["direc_empre_recicladora"] = "Dirección de la empresa";
	$fieldToolTipspublic_empresas_recicladoras1["Spanish"]["direc_empre_recicladora"] = "";
	$placeHolderspublic_empresas_recicladoras1["Spanish"]["direc_empre_recicladora"] = "";
	$fieldLabelspublic_empresas_recicladoras1["Spanish"]["tel_empre_recicladora"] = "Teléfono de la empresa";
	$fieldToolTipspublic_empresas_recicladoras1["Spanish"]["tel_empre_recicladora"] = "";
	$placeHolderspublic_empresas_recicladoras1["Spanish"]["tel_empre_recicladora"] = "";
	$fieldLabelspublic_empresas_recicladoras1["Spanish"]["id_residuo"] = "Tipo de residuo que compra";
	$fieldToolTipspublic_empresas_recicladoras1["Spanish"]["id_residuo"] = "";
	$placeHolderspublic_empresas_recicladoras1["Spanish"]["id_residuo"] = "";
	$pageTitlespublic_empresas_recicladoras1["Spanish"]["print"] = "Informe Empresas Recicladoras";
	if (count($fieldToolTipspublic_empresas_recicladoras1["Spanish"]))
		$tdatapublic_empresas_recicladoras1[".isUseToolTips"] = true;
}


	$tdatapublic_empresas_recicladoras1[".NCSearch"] = true;



$tdatapublic_empresas_recicladoras1[".shortTableName"] = "public_empresas_recicladoras1";
$tdatapublic_empresas_recicladoras1[".nSecOptions"] = 0;

$tdatapublic_empresas_recicladoras1[".mainTableOwnerID"] = "";
$tdatapublic_empresas_recicladoras1[".entityType"] = 0;
$tdatapublic_empresas_recicladoras1[".connId"] = "RealEstate_at_localhost";


$tdatapublic_empresas_recicladoras1[".strOriginalTableName"] = "public.empresas_recicladoras";

	



$tdatapublic_empresas_recicladoras1[".showAddInPopup"] = false;

$tdatapublic_empresas_recicladoras1[".showEditInPopup"] = false;

$tdatapublic_empresas_recicladoras1[".showViewInPopup"] = false;

$tdatapublic_empresas_recicladoras1[".listAjax"] = false;
//	temporary
//$tdatapublic_empresas_recicladoras1[".listAjax"] = false;

	$tdatapublic_empresas_recicladoras1[".audit"] = false;

	$tdatapublic_empresas_recicladoras1[".locking"] = false;


$pages = $tdatapublic_empresas_recicladoras1[".defaultPages"];

if( $pages[PAGE_EDIT] ) {
	$tdatapublic_empresas_recicladoras1[".edit"] = true;
	$tdatapublic_empresas_recicladoras1[".afterEditAction"] = 1;
	$tdatapublic_empresas_recicladoras1[".closePopupAfterEdit"] = 1;
	$tdatapublic_empresas_recicladoras1[".afterEditActionDetTable"] = "";
}

if( $pages[PAGE_ADD] ) {
$tdatapublic_empresas_recicladoras1[".add"] = true;
$tdatapublic_empresas_recicladoras1[".afterAddAction"] = 1;
$tdatapublic_empresas_recicladoras1[".closePopupAfterAdd"] = 1;
$tdatapublic_empresas_recicladoras1[".afterAddActionDetTable"] = "";
}

if( $pages[PAGE_LIST] ) {
	$tdatapublic_empresas_recicladoras1[".list"] = true;
}



$tdatapublic_empresas_recicladoras1[".strSortControlSettingsJSON"] = "";




if( $pages[PAGE_VIEW] ) {
$tdatapublic_empresas_recicladoras1[".view"] = true;
}

if( $pages[PAGE_IMPORT] ) {
$tdatapublic_empresas_recicladoras1[".import"] = true;
}

if( $pages[PAGE_EXPORT] ) {
$tdatapublic_empresas_recicladoras1[".exportTo"] = true;
}

if( $pages[PAGE_PRINT] ) {
$tdatapublic_empresas_recicladoras1[".printFriendly"] = true;
}



$tdatapublic_empresas_recicladoras1[".showSimpleSearchOptions"] = true; // temp fix #13449

// Allow Show/Hide Fields in GRID
$tdatapublic_empresas_recicladoras1[".allowShowHideFields"] = true; // temp fix #13449
//

// Allow Fields Reordering in GRID
$tdatapublic_empresas_recicladoras1[".allowFieldsReordering"] = true; // temp fix #13449
//

$tdatapublic_empresas_recicladoras1[".isUseAjaxSuggest"] = true;

$tdatapublic_empresas_recicladoras1[".rowHighlite"] = true;



						

$tdatapublic_empresas_recicladoras1[".ajaxCodeSnippetAdded"] = false;

$tdatapublic_empresas_recicladoras1[".buttonsAdded"] = false;

$tdatapublic_empresas_recicladoras1[".addPageEvents"] = false;

// use timepicker for search panel
$tdatapublic_empresas_recicladoras1[".isUseTimeForSearch"] = false;


$tdatapublic_empresas_recicladoras1[".badgeColor"] = "8fbc8b";


$tdatapublic_empresas_recicladoras1[".allSearchFields"] = array();
$tdatapublic_empresas_recicladoras1[".filterFields"] = array();
$tdatapublic_empresas_recicladoras1[".requiredSearchFields"] = array();

$tdatapublic_empresas_recicladoras1[".googleLikeFields"] = array();
$tdatapublic_empresas_recicladoras1[".googleLikeFields"][] = "id_empre_recicladora";
$tdatapublic_empresas_recicladoras1[".googleLikeFields"][] = "ruc_empre_recicladora";
$tdatapublic_empresas_recicladoras1[".googleLikeFields"][] = "nombre_empre_recicladora";
$tdatapublic_empresas_recicladoras1[".googleLikeFields"][] = "direc_empre_recicladora";
$tdatapublic_empresas_recicladoras1[".googleLikeFields"][] = "tel_empre_recicladora";
$tdatapublic_empresas_recicladoras1[".googleLikeFields"][] = "id_residuo";



$tdatapublic_empresas_recicladoras1[".tableType"] = "list";

$tdatapublic_empresas_recicladoras1[".printerPageOrientation"] = 0;
$tdatapublic_empresas_recicladoras1[".nPrinterPageScale"] = 100;

$tdatapublic_empresas_recicladoras1[".nPrinterSplitRecords"] = 40;

$tdatapublic_empresas_recicladoras1[".geocodingEnabled"] = false;










$tdatapublic_empresas_recicladoras1[".pageSize"] = 20;

$tdatapublic_empresas_recicladoras1[".warnLeavingPages"] = true;



$tstrOrderBy = "";
$tdatapublic_empresas_recicladoras1[".strOrderBy"] = $tstrOrderBy;

$tdatapublic_empresas_recicladoras1[".orderindexes"] = array();


$tdatapublic_empresas_recicladoras1[".sqlHead"] = "SELECT id_empre_recicladora,  	ruc_empre_recicladora,  	nombre_empre_recicladora,  	direc_empre_recicladora,  	tel_empre_recicladora,  	id_residuo";
$tdatapublic_empresas_recicladoras1[".sqlFrom"] = "FROM \"public\".empresas_recicladoras";
$tdatapublic_empresas_recicladoras1[".sqlWhereExpr"] = "";
$tdatapublic_empresas_recicladoras1[".sqlTail"] = "";










//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdatapublic_empresas_recicladoras1[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdatapublic_empresas_recicladoras1[".arrGroupsPerPage"] = $arrGPP;

$tdatapublic_empresas_recicladoras1[".highlightSearchResults"] = true;

$tableKeyspublic_empresas_recicladoras1 = array();
$tableKeyspublic_empresas_recicladoras1[] = "id_empre_recicladora";
$tdatapublic_empresas_recicladoras1[".Keys"] = $tableKeyspublic_empresas_recicladoras1;


$tdatapublic_empresas_recicladoras1[".hideMobileList"] = array();




//	id_empre_recicladora
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "id_empre_recicladora";
	$fdata["GoodName"] = "id_empre_recicladora";
	$fdata["ownerTable"] = "public.empresas_recicladoras";
	$fdata["Label"] = GetFieldLabel("public_empresas_recicladoras","id_empre_recicladora");
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


	$tdatapublic_empresas_recicladoras1["id_empre_recicladora"] = $fdata;
		$tdatapublic_empresas_recicladoras1[".searchableFields"][] = "id_empre_recicladora";
//	ruc_empre_recicladora
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "ruc_empre_recicladora";
	$fdata["GoodName"] = "ruc_empre_recicladora";
	$fdata["ownerTable"] = "public.empresas_recicladoras";
	$fdata["Label"] = GetFieldLabel("public_empresas_recicladoras","ruc_empre_recicladora");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "ruc_empre_recicladora";

		$fdata["sourceSingle"] = "ruc_empre_recicladora";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "ruc_empre_recicladora";

	
	
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


	$tdatapublic_empresas_recicladoras1["ruc_empre_recicladora"] = $fdata;
		$tdatapublic_empresas_recicladoras1[".searchableFields"][] = "ruc_empre_recicladora";
//	nombre_empre_recicladora
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "nombre_empre_recicladora";
	$fdata["GoodName"] = "nombre_empre_recicladora";
	$fdata["ownerTable"] = "public.empresas_recicladoras";
	$fdata["Label"] = GetFieldLabel("public_empresas_recicladoras","nombre_empre_recicladora");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "nombre_empre_recicladora";

		$fdata["sourceSingle"] = "nombre_empre_recicladora";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "nombre_empre_recicladora";

	
	
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


	$tdatapublic_empresas_recicladoras1["nombre_empre_recicladora"] = $fdata;
		$tdatapublic_empresas_recicladoras1[".searchableFields"][] = "nombre_empre_recicladora";
//	direc_empre_recicladora
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "direc_empre_recicladora";
	$fdata["GoodName"] = "direc_empre_recicladora";
	$fdata["ownerTable"] = "public.empresas_recicladoras";
	$fdata["Label"] = GetFieldLabel("public_empresas_recicladoras","direc_empre_recicladora");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "direc_empre_recicladora";

		$fdata["sourceSingle"] = "direc_empre_recicladora";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "direc_empre_recicladora";

	
	
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


	$tdatapublic_empresas_recicladoras1["direc_empre_recicladora"] = $fdata;
		$tdatapublic_empresas_recicladoras1[".searchableFields"][] = "direc_empre_recicladora";
//	tel_empre_recicladora
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 5;
	$fdata["strName"] = "tel_empre_recicladora";
	$fdata["GoodName"] = "tel_empre_recicladora";
	$fdata["ownerTable"] = "public.empresas_recicladoras";
	$fdata["Label"] = GetFieldLabel("public_empresas_recicladoras","tel_empre_recicladora");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "tel_empre_recicladora";

		$fdata["sourceSingle"] = "tel_empre_recicladora";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "tel_empre_recicladora";

	
	
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


	$tdatapublic_empresas_recicladoras1["tel_empre_recicladora"] = $fdata;
		$tdatapublic_empresas_recicladoras1[".searchableFields"][] = "tel_empre_recicladora";
//	id_residuo
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 6;
	$fdata["strName"] = "id_residuo";
	$fdata["GoodName"] = "id_residuo";
	$fdata["ownerTable"] = "public.empresas_recicladoras";
	$fdata["Label"] = GetFieldLabel("public_empresas_recicladoras","id_residuo");
	$fdata["FieldType"] = 200;


	
	
			

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
	$vdata = array("ViewFormat" => "");

	
	
	
	
	
	
	
	
	
	
	
		
	
		$vdata["NeedEncode"] = true;

	
		$vdata["truncateText"] = true;
	$vdata["NumberOfChars"] = 80;

	$fdata["ViewFormats"]["masterlist"] = $vdata;
	$vdata = array("ViewFormat" => "");

	
	
	
	
	
	
	
	
	
	
	
		
	
		$vdata["NeedEncode"] = true;

	
		$vdata["truncateText"] = true;
	$vdata["NumberOfChars"] = 80;

	$fdata["ViewFormats"]["masterprint"] = $vdata;
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

	
	
	
	

	
		$edata["Multiselect"] = true;

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

	
	
	
	

	
		$edata["Multiselect"] = true;

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


	$tdatapublic_empresas_recicladoras1["id_residuo"] = $fdata;
		$tdatapublic_empresas_recicladoras1[".searchableFields"][] = "id_residuo";


$tables_data["public.empresas_recicladoras"]=&$tdatapublic_empresas_recicladoras1;
$field_labels["public_empresas_recicladoras"] = &$fieldLabelspublic_empresas_recicladoras1;
$fieldToolTips["public_empresas_recicladoras"] = &$fieldToolTipspublic_empresas_recicladoras1;
$placeHolders["public_empresas_recicladoras"] = &$placeHolderspublic_empresas_recicladoras1;
$page_titles["public_empresas_recicladoras"] = &$pageTitlespublic_empresas_recicladoras1;

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)

//if !@TABLE.bReportCrossTab

$detailsTablesData["public.empresas_recicladoras"] = array();
//endif

// tables which are master tables for current table (detail)
$masterTablesData["public.empresas_recicladoras"] = array();



	
	//if !@t.bReportCrossTab
			$strOriginalDetailsTable="public.residuos";
	$masterParams = array();
	$masterParams["mDataSourceTable"]="public.residuos";
	$masterParams["mOriginalTable"]= $strOriginalDetailsTable;
	$masterParams["mShortTable"]= "residuos";
	$masterParams["masterKeys"]= array();
	$masterParams["detailKeys"]= array();

	$masterParams["type"] = PAGE_LIST;
					$masterTablesData["public.empresas_recicladoras"][0] = $masterParams;
				$masterTablesData["public.empresas_recicladoras"][0]["masterKeys"] = array();
	$masterTablesData["public.empresas_recicladoras"][0]["masterKeys"][]="id_residuo";
				$masterTablesData["public.empresas_recicladoras"][0]["detailKeys"] = array();
	$masterTablesData["public.empresas_recicladoras"][0]["detailKeys"][]="id_residuo";
		
	//endif
// -----------------end  prepare master-details data arrays ------------------------------//



require_once(getabspath("classes/sql.php"));











function createSqlQuery_public_empresas_recicladoras1()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "id_empre_recicladora,  	ruc_empre_recicladora,  	nombre_empre_recicladora,  	direc_empre_recicladora,  	tel_empre_recicladora,  	id_residuo";
$proto0["m_strFrom"] = "FROM \"public\".empresas_recicladoras";
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
	"m_strName" => "id_empre_recicladora",
	"m_strTable" => "public.empresas_recicladoras",
	"m_srcTableName" => "public.empresas_recicladoras"
));

$proto6["m_sql"] = "id_empre_recicladora";
$proto6["m_srcTableName"] = "public.empresas_recicladoras";
$proto6["m_expr"]=$obj;
$proto6["m_alias"] = "";
$obj = new SQLFieldListItem($proto6);

$proto0["m_fieldlist"][]=$obj;
						$proto8=array();
			$obj = new SQLField(array(
	"m_strName" => "ruc_empre_recicladora",
	"m_strTable" => "public.empresas_recicladoras",
	"m_srcTableName" => "public.empresas_recicladoras"
));

$proto8["m_sql"] = "ruc_empre_recicladora";
$proto8["m_srcTableName"] = "public.empresas_recicladoras";
$proto8["m_expr"]=$obj;
$proto8["m_alias"] = "";
$obj = new SQLFieldListItem($proto8);

$proto0["m_fieldlist"][]=$obj;
						$proto10=array();
			$obj = new SQLField(array(
	"m_strName" => "nombre_empre_recicladora",
	"m_strTable" => "public.empresas_recicladoras",
	"m_srcTableName" => "public.empresas_recicladoras"
));

$proto10["m_sql"] = "nombre_empre_recicladora";
$proto10["m_srcTableName"] = "public.empresas_recicladoras";
$proto10["m_expr"]=$obj;
$proto10["m_alias"] = "";
$obj = new SQLFieldListItem($proto10);

$proto0["m_fieldlist"][]=$obj;
						$proto12=array();
			$obj = new SQLField(array(
	"m_strName" => "direc_empre_recicladora",
	"m_strTable" => "public.empresas_recicladoras",
	"m_srcTableName" => "public.empresas_recicladoras"
));

$proto12["m_sql"] = "direc_empre_recicladora";
$proto12["m_srcTableName"] = "public.empresas_recicladoras";
$proto12["m_expr"]=$obj;
$proto12["m_alias"] = "";
$obj = new SQLFieldListItem($proto12);

$proto0["m_fieldlist"][]=$obj;
						$proto14=array();
			$obj = new SQLField(array(
	"m_strName" => "tel_empre_recicladora",
	"m_strTable" => "public.empresas_recicladoras",
	"m_srcTableName" => "public.empresas_recicladoras"
));

$proto14["m_sql"] = "tel_empre_recicladora";
$proto14["m_srcTableName"] = "public.empresas_recicladoras";
$proto14["m_expr"]=$obj;
$proto14["m_alias"] = "";
$obj = new SQLFieldListItem($proto14);

$proto0["m_fieldlist"][]=$obj;
						$proto16=array();
			$obj = new SQLField(array(
	"m_strName" => "id_residuo",
	"m_strTable" => "public.empresas_recicladoras",
	"m_srcTableName" => "public.empresas_recicladoras"
));

$proto16["m_sql"] = "id_residuo";
$proto16["m_srcTableName"] = "public.empresas_recicladoras";
$proto16["m_expr"]=$obj;
$proto16["m_alias"] = "";
$obj = new SQLFieldListItem($proto16);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto18=array();
$proto18["m_link"] = "SQLL_MAIN";
			$proto19=array();
$proto19["m_strName"] = "public.empresas_recicladoras";
$proto19["m_srcTableName"] = "public.empresas_recicladoras";
$proto19["m_columns"] = array();
$proto19["m_columns"][] = "id_empre_recicladora";
$proto19["m_columns"][] = "ruc_empre_recicladora";
$proto19["m_columns"][] = "nombre_empre_recicladora";
$proto19["m_columns"][] = "direc_empre_recicladora";
$proto19["m_columns"][] = "tel_empre_recicladora";
$proto19["m_columns"][] = "id_residuo";
$obj = new SQLTable($proto19);

$proto18["m_table"] = $obj;
$proto18["m_sql"] = "\"public\".empresas_recicladoras";
$proto18["m_alias"] = "";
$proto18["m_srcTableName"] = "public.empresas_recicladoras";
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
$proto0["m_srcTableName"]="public.empresas_recicladoras";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_public_empresas_recicladoras1 = createSqlQuery_public_empresas_recicladoras1();


	
		;

						

$tdatapublic_empresas_recicladoras1[".sqlquery"] = $queryData_public_empresas_recicladoras1;



$tableEvents["public.empresas_recicladoras"] = new eventsBase;
$tdatapublic_empresas_recicladoras1[".hasEvents"] = false;

?>