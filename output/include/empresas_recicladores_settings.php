<?php
$tdataempresas_recicladores = array();
$tdataempresas_recicladores[".searchableFields"] = array();
$tdataempresas_recicladores[".ShortName"] = "empresas_recicladores";
$tdataempresas_recicladores[".OwnerID"] = "";
$tdataempresas_recicladores[".OriginalTable"] = "public.empresas_recicladores";


$tdataempresas_recicladores[".pagesByType"] = my_json_decode( "{\"add\":[\"add\"],\"edit\":[\"edit\"],\"export\":[\"export\"],\"import\":[\"import\"],\"list\":[\"list\"],\"masterlist\":[\"masterlist\"],\"masterprint\":[\"masterprint\"],\"print\":[\"print\"],\"search\":[\"search\"],\"view\":[\"view\"]}" );
$tdataempresas_recicladores[".originalPagesByType"] = $tdataempresas_recicladores[".pagesByType"];
$tdataempresas_recicladores[".pages"] = types2pages( my_json_decode( "{\"add\":[\"add\"],\"edit\":[\"edit\"],\"export\":[\"export\"],\"import\":[\"import\"],\"list\":[\"list\"],\"masterlist\":[\"masterlist\"],\"masterprint\":[\"masterprint\"],\"print\":[\"print\"],\"search\":[\"search\"],\"view\":[\"view\"]}" ) );
$tdataempresas_recicladores[".originalPages"] = $tdataempresas_recicladores[".pages"];
$tdataempresas_recicladores[".defaultPages"] = my_json_decode( "{\"add\":\"add\",\"edit\":\"edit\",\"export\":\"export\",\"import\":\"import\",\"list\":\"list\",\"masterlist\":\"masterlist\",\"masterprint\":\"masterprint\",\"print\":\"print\",\"search\":\"search\",\"view\":\"view\"}" );
$tdataempresas_recicladores[".originalDefaultPages"] = $tdataempresas_recicladores[".defaultPages"];

//	field labels
$fieldLabelsempresas_recicladores = array();
$fieldToolTipsempresas_recicladores = array();
$pageTitlesempresas_recicladores = array();
$placeHoldersempresas_recicladores = array();

if(mlang_getcurrentlang()=="Spanish")
{
	$fieldLabelsempresas_recicladores["Spanish"] = array();
	$fieldToolTipsempresas_recicladores["Spanish"] = array();
	$placeHoldersempresas_recicladores["Spanish"] = array();
	$pageTitlesempresas_recicladores["Spanish"] = array();
	$fieldLabelsempresas_recicladores["Spanish"]["id_empre_recicladora"] = "Código";
	$fieldToolTipsempresas_recicladores["Spanish"]["id_empre_recicladora"] = "";
	$placeHoldersempresas_recicladores["Spanish"]["id_empre_recicladora"] = "";
	$fieldLabelsempresas_recicladores["Spanish"]["ruc_empre_recicladora"] = "R.U.C.";
	$fieldToolTipsempresas_recicladores["Spanish"]["ruc_empre_recicladora"] = "";
	$placeHoldersempresas_recicladores["Spanish"]["ruc_empre_recicladora"] = "";
	$fieldLabelsempresas_recicladores["Spanish"]["nombre_empre_recicladora"] = "Empresa";
	$fieldToolTipsempresas_recicladores["Spanish"]["nombre_empre_recicladora"] = "";
	$placeHoldersempresas_recicladores["Spanish"]["nombre_empre_recicladora"] = "";
	$fieldLabelsempresas_recicladores["Spanish"]["direc_empre_recicladora"] = "Dirección de la empresa";
	$fieldToolTipsempresas_recicladores["Spanish"]["direc_empre_recicladora"] = "";
	$placeHoldersempresas_recicladores["Spanish"]["direc_empre_recicladora"] = "";
	$fieldLabelsempresas_recicladores["Spanish"]["tel_empre_recicladora"] = "Teléfono de la empresa";
	$fieldToolTipsempresas_recicladores["Spanish"]["tel_empre_recicladora"] = "";
	$placeHoldersempresas_recicladores["Spanish"]["tel_empre_recicladora"] = "";
	$pageTitlesempresas_recicladores["Spanish"]["print"] = "Informes Empresas Recicladores";
	if (count($fieldToolTipsempresas_recicladores["Spanish"]))
		$tdataempresas_recicladores[".isUseToolTips"] = true;
}


	$tdataempresas_recicladores[".NCSearch"] = true;



$tdataempresas_recicladores[".shortTableName"] = "empresas_recicladores";
$tdataempresas_recicladores[".nSecOptions"] = 0;

$tdataempresas_recicladores[".mainTableOwnerID"] = "";
$tdataempresas_recicladores[".entityType"] = 0;
$tdataempresas_recicladores[".connId"] = "RealEstate_at_localhost";


$tdataempresas_recicladores[".strOriginalTableName"] = "public.empresas_recicladores";

	



$tdataempresas_recicladores[".showAddInPopup"] = false;

$tdataempresas_recicladores[".showEditInPopup"] = false;

$tdataempresas_recicladores[".showViewInPopup"] = false;

$tdataempresas_recicladores[".listAjax"] = false;
//	temporary
//$tdataempresas_recicladores[".listAjax"] = false;

	$tdataempresas_recicladores[".audit"] = false;

	$tdataempresas_recicladores[".locking"] = false;


$pages = $tdataempresas_recicladores[".defaultPages"];

if( $pages[PAGE_EDIT] ) {
	$tdataempresas_recicladores[".edit"] = true;
	$tdataempresas_recicladores[".afterEditAction"] = 1;
	$tdataempresas_recicladores[".closePopupAfterEdit"] = 1;
	$tdataempresas_recicladores[".afterEditActionDetTable"] = "";
}

if( $pages[PAGE_ADD] ) {
$tdataempresas_recicladores[".add"] = true;
$tdataempresas_recicladores[".afterAddAction"] = 1;
$tdataempresas_recicladores[".closePopupAfterAdd"] = 1;
$tdataempresas_recicladores[".afterAddActionDetTable"] = "";
}

if( $pages[PAGE_LIST] ) {
	$tdataempresas_recicladores[".list"] = true;
}



$tdataempresas_recicladores[".strSortControlSettingsJSON"] = "";




if( $pages[PAGE_VIEW] ) {
$tdataempresas_recicladores[".view"] = true;
}

if( $pages[PAGE_IMPORT] ) {
$tdataempresas_recicladores[".import"] = true;
}

if( $pages[PAGE_EXPORT] ) {
$tdataempresas_recicladores[".exportTo"] = true;
}

if( $pages[PAGE_PRINT] ) {
$tdataempresas_recicladores[".printFriendly"] = true;
}



$tdataempresas_recicladores[".showSimpleSearchOptions"] = true; // temp fix #13449

// Allow Show/Hide Fields in GRID
$tdataempresas_recicladores[".allowShowHideFields"] = true; // temp fix #13449
//

// Allow Fields Reordering in GRID
$tdataempresas_recicladores[".allowFieldsReordering"] = true; // temp fix #13449
//

$tdataempresas_recicladores[".isUseAjaxSuggest"] = true;

$tdataempresas_recicladores[".rowHighlite"] = true;



			

$tdataempresas_recicladores[".ajaxCodeSnippetAdded"] = false;

$tdataempresas_recicladores[".buttonsAdded"] = false;

$tdataempresas_recicladores[".addPageEvents"] = false;

// use timepicker for search panel
$tdataempresas_recicladores[".isUseTimeForSearch"] = false;


$tdataempresas_recicladores[".badgeColor"] = "8FBC8B";


$tdataempresas_recicladores[".allSearchFields"] = array();
$tdataempresas_recicladores[".filterFields"] = array();
$tdataempresas_recicladores[".requiredSearchFields"] = array();

$tdataempresas_recicladores[".googleLikeFields"] = array();
$tdataempresas_recicladores[".googleLikeFields"][] = "id_empre_recicladora";
$tdataempresas_recicladores[".googleLikeFields"][] = "ruc_empre_recicladora";
$tdataempresas_recicladores[".googleLikeFields"][] = "nombre_empre_recicladora";
$tdataempresas_recicladores[".googleLikeFields"][] = "direc_empre_recicladora";
$tdataempresas_recicladores[".googleLikeFields"][] = "tel_empre_recicladora";



$tdataempresas_recicladores[".tableType"] = "list";

$tdataempresas_recicladores[".printerPageOrientation"] = 0;
$tdataempresas_recicladores[".nPrinterPageScale"] = 100;

$tdataempresas_recicladores[".nPrinterSplitRecords"] = 40;

$tdataempresas_recicladores[".geocodingEnabled"] = false;










$tdataempresas_recicladores[".pageSize"] = 20;

$tdataempresas_recicladores[".warnLeavingPages"] = true;



$tstrOrderBy = "";
$tdataempresas_recicladores[".strOrderBy"] = $tstrOrderBy;

$tdataempresas_recicladores[".orderindexes"] = array();


$tdataempresas_recicladores[".sqlHead"] = "SELECT id_empre_recicladora,  	ruc_empre_recicladora,  	nombre_empre_recicladora,  	direc_empre_recicladora,  	tel_empre_recicladora";
$tdataempresas_recicladores[".sqlFrom"] = "FROM \"public\".empresas_recicladores";
$tdataempresas_recicladores[".sqlWhereExpr"] = "";
$tdataempresas_recicladores[".sqlTail"] = "";










//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdataempresas_recicladores[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdataempresas_recicladores[".arrGroupsPerPage"] = $arrGPP;

$tdataempresas_recicladores[".highlightSearchResults"] = true;

$tableKeysempresas_recicladores = array();
$tableKeysempresas_recicladores[] = "id_empre_recicladora";
$tdataempresas_recicladores[".Keys"] = $tableKeysempresas_recicladores;


$tdataempresas_recicladores[".hideMobileList"] = array();




//	id_empre_recicladora
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "id_empre_recicladora";
	$fdata["GoodName"] = "id_empre_recicladora";
	$fdata["ownerTable"] = "public.empresas_recicladores";
	$fdata["Label"] = GetFieldLabel("public_empresas_recicladores","id_empre_recicladora");
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


	$tdataempresas_recicladores["id_empre_recicladora"] = $fdata;
		$tdataempresas_recicladores[".searchableFields"][] = "id_empre_recicladora";
//	ruc_empre_recicladora
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "ruc_empre_recicladora";
	$fdata["GoodName"] = "ruc_empre_recicladora";
	$fdata["ownerTable"] = "public.empresas_recicladores";
	$fdata["Label"] = GetFieldLabel("public_empresas_recicladores","ruc_empre_recicladora");
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


	$tdataempresas_recicladores["ruc_empre_recicladora"] = $fdata;
		$tdataempresas_recicladores[".searchableFields"][] = "ruc_empre_recicladora";
//	nombre_empre_recicladora
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "nombre_empre_recicladora";
	$fdata["GoodName"] = "nombre_empre_recicladora";
	$fdata["ownerTable"] = "public.empresas_recicladores";
	$fdata["Label"] = GetFieldLabel("public_empresas_recicladores","nombre_empre_recicladora");
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


	$tdataempresas_recicladores["nombre_empre_recicladora"] = $fdata;
		$tdataempresas_recicladores[".searchableFields"][] = "nombre_empre_recicladora";
//	direc_empre_recicladora
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "direc_empre_recicladora";
	$fdata["GoodName"] = "direc_empre_recicladora";
	$fdata["ownerTable"] = "public.empresas_recicladores";
	$fdata["Label"] = GetFieldLabel("public_empresas_recicladores","direc_empre_recicladora");
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


	$tdataempresas_recicladores["direc_empre_recicladora"] = $fdata;
		$tdataempresas_recicladores[".searchableFields"][] = "direc_empre_recicladora";
//	tel_empre_recicladora
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 5;
	$fdata["strName"] = "tel_empre_recicladora";
	$fdata["GoodName"] = "tel_empre_recicladora";
	$fdata["ownerTable"] = "public.empresas_recicladores";
	$fdata["Label"] = GetFieldLabel("public_empresas_recicladores","tel_empre_recicladora");
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


	$tdataempresas_recicladores["tel_empre_recicladora"] = $fdata;
		$tdataempresas_recicladores[".searchableFields"][] = "tel_empre_recicladora";


$tables_data["public.empresas_recicladores"]=&$tdataempresas_recicladores;
$field_labels["public_empresas_recicladores"] = &$fieldLabelsempresas_recicladores;
$fieldToolTips["public_empresas_recicladores"] = &$fieldToolTipsempresas_recicladores;
$placeHolders["public_empresas_recicladores"] = &$placeHoldersempresas_recicladores;
$page_titles["public_empresas_recicladores"] = &$pageTitlesempresas_recicladores;

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)

//if !@TABLE.bReportCrossTab

$detailsTablesData["public.empresas_recicladores"] = array();
//	public.ventas
	
	

		$dIndex = 0;
	$detailsParam = array();
	$detailsParam["dDataSourceTable"]="public.ventas";
		$detailsParam["dOriginalTable"] = "public.ventas";



		
		$detailsParam["dType"]=PAGE_LIST;
	$detailsParam["dShortTable"] = "ventas";
	$detailsParam["dCaptionTable"] = GetTableCaption("public_ventas");
	$detailsParam["masterKeys"] =array();
	$detailsParam["detailKeys"] =array();


		
	$detailsTablesData["public.empresas_recicladores"][$dIndex] = $detailsParam;

	
		$detailsTablesData["public.empresas_recicladores"][$dIndex]["masterKeys"] = array();

	$detailsTablesData["public.empresas_recicladores"][$dIndex]["masterKeys"][]="id_empre_recicladora";

				$detailsTablesData["public.empresas_recicladores"][$dIndex]["detailKeys"] = array();

	$detailsTablesData["public.empresas_recicladores"][$dIndex]["detailKeys"][]="id_empre_recicladora";
//endif

// tables which are master tables for current table (detail)
$masterTablesData["public.empresas_recicladores"] = array();



// -----------------end  prepare master-details data arrays ------------------------------//



require_once(getabspath("classes/sql.php"));











function createSqlQuery_empresas_recicladores()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "id_empre_recicladora,  	ruc_empre_recicladora,  	nombre_empre_recicladora,  	direc_empre_recicladora,  	tel_empre_recicladora";
$proto0["m_strFrom"] = "FROM \"public\".empresas_recicladores";
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
	"m_strTable" => "public.empresas_recicladores",
	"m_srcTableName" => "public.empresas_recicladores"
));

$proto6["m_sql"] = "id_empre_recicladora";
$proto6["m_srcTableName"] = "public.empresas_recicladores";
$proto6["m_expr"]=$obj;
$proto6["m_alias"] = "";
$obj = new SQLFieldListItem($proto6);

$proto0["m_fieldlist"][]=$obj;
						$proto8=array();
			$obj = new SQLField(array(
	"m_strName" => "ruc_empre_recicladora",
	"m_strTable" => "public.empresas_recicladores",
	"m_srcTableName" => "public.empresas_recicladores"
));

$proto8["m_sql"] = "ruc_empre_recicladora";
$proto8["m_srcTableName"] = "public.empresas_recicladores";
$proto8["m_expr"]=$obj;
$proto8["m_alias"] = "";
$obj = new SQLFieldListItem($proto8);

$proto0["m_fieldlist"][]=$obj;
						$proto10=array();
			$obj = new SQLField(array(
	"m_strName" => "nombre_empre_recicladora",
	"m_strTable" => "public.empresas_recicladores",
	"m_srcTableName" => "public.empresas_recicladores"
));

$proto10["m_sql"] = "nombre_empre_recicladora";
$proto10["m_srcTableName"] = "public.empresas_recicladores";
$proto10["m_expr"]=$obj;
$proto10["m_alias"] = "";
$obj = new SQLFieldListItem($proto10);

$proto0["m_fieldlist"][]=$obj;
						$proto12=array();
			$obj = new SQLField(array(
	"m_strName" => "direc_empre_recicladora",
	"m_strTable" => "public.empresas_recicladores",
	"m_srcTableName" => "public.empresas_recicladores"
));

$proto12["m_sql"] = "direc_empre_recicladora";
$proto12["m_srcTableName"] = "public.empresas_recicladores";
$proto12["m_expr"]=$obj;
$proto12["m_alias"] = "";
$obj = new SQLFieldListItem($proto12);

$proto0["m_fieldlist"][]=$obj;
						$proto14=array();
			$obj = new SQLField(array(
	"m_strName" => "tel_empre_recicladora",
	"m_strTable" => "public.empresas_recicladores",
	"m_srcTableName" => "public.empresas_recicladores"
));

$proto14["m_sql"] = "tel_empre_recicladora";
$proto14["m_srcTableName"] = "public.empresas_recicladores";
$proto14["m_expr"]=$obj;
$proto14["m_alias"] = "";
$obj = new SQLFieldListItem($proto14);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto16=array();
$proto16["m_link"] = "SQLL_MAIN";
			$proto17=array();
$proto17["m_strName"] = "public.empresas_recicladores";
$proto17["m_srcTableName"] = "public.empresas_recicladores";
$proto17["m_columns"] = array();
$proto17["m_columns"][] = "id_empre_recicladora";
$proto17["m_columns"][] = "ruc_empre_recicladora";
$proto17["m_columns"][] = "nombre_empre_recicladora";
$proto17["m_columns"][] = "direc_empre_recicladora";
$proto17["m_columns"][] = "tel_empre_recicladora";
$obj = new SQLTable($proto17);

$proto16["m_table"] = $obj;
$proto16["m_sql"] = "\"public\".empresas_recicladores";
$proto16["m_alias"] = "";
$proto16["m_srcTableName"] = "public.empresas_recicladores";
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
$proto0["m_srcTableName"]="public.empresas_recicladores";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_empresas_recicladores = createSqlQuery_empresas_recicladores();


	
		;

					

$tdataempresas_recicladores[".sqlquery"] = $queryData_empresas_recicladores;



$tableEvents["public.empresas_recicladores"] = new eventsBase;
$tdataempresas_recicladores[".hasEvents"] = false;

?>