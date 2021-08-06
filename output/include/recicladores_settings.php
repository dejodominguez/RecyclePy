<?php
$tdatarecicladores = array();
$tdatarecicladores[".searchableFields"] = array();
$tdatarecicladores[".ShortName"] = "recicladores";
$tdatarecicladores[".OwnerID"] = "";
$tdatarecicladores[".OriginalTable"] = "public.recicladores";


$tdatarecicladores[".pagesByType"] = my_json_decode( "{\"add\":[\"add\"],\"edit\":[\"edit\"],\"export\":[\"export\"],\"import\":[\"import\"],\"list\":[\"list\"],\"masterlist\":[\"masterlist\"],\"masterprint\":[\"masterprint\"],\"print\":[\"print\"],\"search\":[\"search\"],\"view\":[\"view\"]}" );
$tdatarecicladores[".originalPagesByType"] = $tdatarecicladores[".pagesByType"];
$tdatarecicladores[".pages"] = types2pages( my_json_decode( "{\"add\":[\"add\"],\"edit\":[\"edit\"],\"export\":[\"export\"],\"import\":[\"import\"],\"list\":[\"list\"],\"masterlist\":[\"masterlist\"],\"masterprint\":[\"masterprint\"],\"print\":[\"print\"],\"search\":[\"search\"],\"view\":[\"view\"]}" ) );
$tdatarecicladores[".originalPages"] = $tdatarecicladores[".pages"];
$tdatarecicladores[".defaultPages"] = my_json_decode( "{\"add\":\"add\",\"edit\":\"edit\",\"export\":\"export\",\"import\":\"import\",\"list\":\"list\",\"masterlist\":\"masterlist\",\"masterprint\":\"masterprint\",\"print\":\"print\",\"search\":\"search\",\"view\":\"view\"}" );
$tdatarecicladores[".originalDefaultPages"] = $tdatarecicladores[".defaultPages"];

//	field labels
$fieldLabelsrecicladores = array();
$fieldToolTipsrecicladores = array();
$pageTitlesrecicladores = array();
$placeHoldersrecicladores = array();

if(mlang_getcurrentlang()=="Spanish")
{
	$fieldLabelsrecicladores["Spanish"] = array();
	$fieldToolTipsrecicladores["Spanish"] = array();
	$placeHoldersrecicladores["Spanish"] = array();
	$pageTitlesrecicladores["Spanish"] = array();
	$fieldLabelsrecicladores["Spanish"]["id_reciclador"] = "Perfil Reciclador Nº:";
	$fieldToolTipsrecicladores["Spanish"]["id_reciclador"] = "";
	$placeHoldersrecicladores["Spanish"]["id_reciclador"] = "";
	$fieldLabelsrecicladores["Spanish"]["foto_reciclador"] = "Foto Reciclador";
	$fieldToolTipsrecicladores["Spanish"]["foto_reciclador"] = "";
	$placeHoldersrecicladores["Spanish"]["foto_reciclador"] = "";
	$fieldLabelsrecicladores["Spanish"]["ci_reciclador"] = "C.I. Nº Reciclador:";
	$fieldToolTipsrecicladores["Spanish"]["ci_reciclador"] = "";
	$placeHoldersrecicladores["Spanish"]["ci_reciclador"] = "";
	$fieldLabelsrecicladores["Spanish"]["nombre_reciclador"] = "Nombre/s:";
	$fieldToolTipsrecicladores["Spanish"]["nombre_reciclador"] = "";
	$placeHoldersrecicladores["Spanish"]["nombre_reciclador"] = "";
	$fieldLabelsrecicladores["Spanish"]["apellido_reciclador"] = "Apellido/s:";
	$fieldToolTipsrecicladores["Spanish"]["apellido_reciclador"] = "";
	$placeHoldersrecicladores["Spanish"]["apellido_reciclador"] = "";
	$fieldLabelsrecicladores["Spanish"]["direc_reciclador"] = "Dirección:";
	$fieldToolTipsrecicladores["Spanish"]["direc_reciclador"] = "";
	$placeHoldersrecicladores["Spanish"]["direc_reciclador"] = "";
	$fieldLabelsrecicladores["Spanish"]["tel_reciclador"] = "Teléfono:";
	$fieldToolTipsrecicladores["Spanish"]["tel_reciclador"] = "";
	$placeHoldersrecicladores["Spanish"]["tel_reciclador"] = "";
	$fieldLabelsrecicladores["Spanish"]["logo_aso"] = "Logo Aso";
	$fieldToolTipsrecicladores["Spanish"]["logo_aso"] = "";
	$placeHoldersrecicladores["Spanish"]["logo_aso"] = "";
	$fieldLabelsrecicladores["Spanish"]["id_residuo"] = "Tipo de residuo que recoge:";
	$fieldToolTipsrecicladores["Spanish"]["id_residuo"] = "";
	$placeHoldersrecicladores["Spanish"]["id_residuo"] = "";
	if (count($fieldToolTipsrecicladores["Spanish"]))
		$tdatarecicladores[".isUseToolTips"] = true;
}


	$tdatarecicladores[".NCSearch"] = true;



$tdatarecicladores[".shortTableName"] = "recicladores";
$tdatarecicladores[".nSecOptions"] = 0;

$tdatarecicladores[".mainTableOwnerID"] = "";
$tdatarecicladores[".entityType"] = 0;
$tdatarecicladores[".connId"] = "RealEstate_at_localhost";


$tdatarecicladores[".strOriginalTableName"] = "public.recicladores";

	



$tdatarecicladores[".showAddInPopup"] = false;

$tdatarecicladores[".showEditInPopup"] = false;

$tdatarecicladores[".showViewInPopup"] = false;

$tdatarecicladores[".listAjax"] = false;
//	temporary
//$tdatarecicladores[".listAjax"] = false;

	$tdatarecicladores[".audit"] = false;

	$tdatarecicladores[".locking"] = false;


$pages = $tdatarecicladores[".defaultPages"];

if( $pages[PAGE_EDIT] ) {
	$tdatarecicladores[".edit"] = true;
	$tdatarecicladores[".afterEditAction"] = 1;
	$tdatarecicladores[".closePopupAfterEdit"] = 1;
	$tdatarecicladores[".afterEditActionDetTable"] = "";
}

if( $pages[PAGE_ADD] ) {
$tdatarecicladores[".add"] = true;
$tdatarecicladores[".afterAddAction"] = 1;
$tdatarecicladores[".closePopupAfterAdd"] = 1;
$tdatarecicladores[".afterAddActionDetTable"] = "";
}

if( $pages[PAGE_LIST] ) {
	$tdatarecicladores[".list"] = true;
}



$tdatarecicladores[".strSortControlSettingsJSON"] = "";




if( $pages[PAGE_VIEW] ) {
$tdatarecicladores[".view"] = true;
}

if( $pages[PAGE_IMPORT] ) {
$tdatarecicladores[".import"] = true;
}

if( $pages[PAGE_EXPORT] ) {
$tdatarecicladores[".exportTo"] = true;
}

if( $pages[PAGE_PRINT] ) {
$tdatarecicladores[".printFriendly"] = true;
}



$tdatarecicladores[".showSimpleSearchOptions"] = true; // temp fix #13449

// Allow Show/Hide Fields in GRID
$tdatarecicladores[".allowShowHideFields"] = true; // temp fix #13449
//

// Allow Fields Reordering in GRID
$tdatarecicladores[".allowFieldsReordering"] = true; // temp fix #13449
//

$tdatarecicladores[".isUseAjaxSuggest"] = true;

$tdatarecicladores[".rowHighlite"] = true;



						

$tdatarecicladores[".ajaxCodeSnippetAdded"] = false;

$tdatarecicladores[".buttonsAdded"] = false;

$tdatarecicladores[".addPageEvents"] = false;

// use timepicker for search panel
$tdatarecicladores[".isUseTimeForSearch"] = false;


$tdatarecicladores[".badgeColor"] = "e67349";


$tdatarecicladores[".allSearchFields"] = array();
$tdatarecicladores[".filterFields"] = array();
$tdatarecicladores[".requiredSearchFields"] = array();

$tdatarecicladores[".googleLikeFields"] = array();
$tdatarecicladores[".googleLikeFields"][] = "id_reciclador";
$tdatarecicladores[".googleLikeFields"][] = "foto_reciclador";
$tdatarecicladores[".googleLikeFields"][] = "ci_reciclador";
$tdatarecicladores[".googleLikeFields"][] = "nombre_reciclador";
$tdatarecicladores[".googleLikeFields"][] = "apellido_reciclador";
$tdatarecicladores[".googleLikeFields"][] = "direc_reciclador";
$tdatarecicladores[".googleLikeFields"][] = "tel_reciclador";
$tdatarecicladores[".googleLikeFields"][] = "logo_aso";
$tdatarecicladores[".googleLikeFields"][] = "id_residuo";



$tdatarecicladores[".tableType"] = "list";

$tdatarecicladores[".printerPageOrientation"] = 0;
$tdatarecicladores[".nPrinterPageScale"] = 100;

$tdatarecicladores[".nPrinterSplitRecords"] = 40;

$tdatarecicladores[".geocodingEnabled"] = false;










$tdatarecicladores[".pageSize"] = 20;

$tdatarecicladores[".warnLeavingPages"] = true;



$tstrOrderBy = "";
$tdatarecicladores[".strOrderBy"] = $tstrOrderBy;

$tdatarecicladores[".orderindexes"] = array();


$tdatarecicladores[".sqlHead"] = "SELECT id_reciclador,  	foto_reciclador,  	ci_reciclador,  	nombre_reciclador,  	apellido_reciclador,  	direc_reciclador,  	tel_reciclador,  	logo_aso,  	id_residuo";
$tdatarecicladores[".sqlFrom"] = "FROM \"public\".recicladores";
$tdatarecicladores[".sqlWhereExpr"] = "";
$tdatarecicladores[".sqlTail"] = "";










//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdatarecicladores[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdatarecicladores[".arrGroupsPerPage"] = $arrGPP;

$tdatarecicladores[".highlightSearchResults"] = true;

$tableKeysrecicladores = array();
$tableKeysrecicladores[] = "id_reciclador";
$tdatarecicladores[".Keys"] = $tableKeysrecicladores;


$tdatarecicladores[".hideMobileList"] = array();




//	id_reciclador
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "id_reciclador";
	$fdata["GoodName"] = "id_reciclador";
	$fdata["ownerTable"] = "public.recicladores";
	$fdata["Label"] = GetFieldLabel("public_recicladores","id_reciclador");
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


	$tdatarecicladores["id_reciclador"] = $fdata;
		$tdatarecicladores[".searchableFields"][] = "id_reciclador";
//	foto_reciclador
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "foto_reciclador";
	$fdata["GoodName"] = "foto_reciclador";
	$fdata["ownerTable"] = "public.recicladores";
	$fdata["Label"] = GetFieldLabel("public_recicladores","foto_reciclador");
	$fdata["FieldType"] = 201;


	
	
			

		$fdata["strField"] = "foto_reciclador";

		$fdata["sourceSingle"] = "foto_reciclador";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "foto_reciclador";

	
	
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


	$tdatarecicladores["foto_reciclador"] = $fdata;
		$tdatarecicladores[".searchableFields"][] = "foto_reciclador";
//	ci_reciclador
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "ci_reciclador";
	$fdata["GoodName"] = "ci_reciclador";
	$fdata["ownerTable"] = "public.recicladores";
	$fdata["Label"] = GetFieldLabel("public_recicladores","ci_reciclador");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "ci_reciclador";

		$fdata["sourceSingle"] = "ci_reciclador";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "ci_reciclador";

	
	
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


	$tdatarecicladores["ci_reciclador"] = $fdata;
		$tdatarecicladores[".searchableFields"][] = "ci_reciclador";
//	nombre_reciclador
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "nombre_reciclador";
	$fdata["GoodName"] = "nombre_reciclador";
	$fdata["ownerTable"] = "public.recicladores";
	$fdata["Label"] = GetFieldLabel("public_recicladores","nombre_reciclador");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "nombre_reciclador";

		$fdata["sourceSingle"] = "nombre_reciclador";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "nombre_reciclador";

	
	
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


	$tdatarecicladores["nombre_reciclador"] = $fdata;
		$tdatarecicladores[".searchableFields"][] = "nombre_reciclador";
//	apellido_reciclador
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 5;
	$fdata["strName"] = "apellido_reciclador";
	$fdata["GoodName"] = "apellido_reciclador";
	$fdata["ownerTable"] = "public.recicladores";
	$fdata["Label"] = GetFieldLabel("public_recicladores","apellido_reciclador");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "apellido_reciclador";

		$fdata["sourceSingle"] = "apellido_reciclador";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "apellido_reciclador";

	
	
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


	$tdatarecicladores["apellido_reciclador"] = $fdata;
		$tdatarecicladores[".searchableFields"][] = "apellido_reciclador";
//	direc_reciclador
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 6;
	$fdata["strName"] = "direc_reciclador";
	$fdata["GoodName"] = "direc_reciclador";
	$fdata["ownerTable"] = "public.recicladores";
	$fdata["Label"] = GetFieldLabel("public_recicladores","direc_reciclador");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "direc_reciclador";

		$fdata["sourceSingle"] = "direc_reciclador";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "direc_reciclador";

	
	
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


	$tdatarecicladores["direc_reciclador"] = $fdata;
		$tdatarecicladores[".searchableFields"][] = "direc_reciclador";
//	tel_reciclador
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 7;
	$fdata["strName"] = "tel_reciclador";
	$fdata["GoodName"] = "tel_reciclador";
	$fdata["ownerTable"] = "public.recicladores";
	$fdata["Label"] = GetFieldLabel("public_recicladores","tel_reciclador");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "tel_reciclador";

		$fdata["sourceSingle"] = "tel_reciclador";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "tel_reciclador";

	
	
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


	$tdatarecicladores["tel_reciclador"] = $fdata;
		$tdatarecicladores[".searchableFields"][] = "tel_reciclador";
//	logo_aso
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 8;
	$fdata["strName"] = "logo_aso";
	$fdata["GoodName"] = "logo_aso";
	$fdata["ownerTable"] = "public.recicladores";
	$fdata["Label"] = GetFieldLabel("public_recicladores","logo_aso");
	$fdata["FieldType"] = 201;


	
	
			

		$fdata["strField"] = "logo_aso";

		$fdata["sourceSingle"] = "logo_aso";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "logo_aso";

	
	
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


	$tdatarecicladores["logo_aso"] = $fdata;
		$tdatarecicladores[".searchableFields"][] = "logo_aso";
//	id_residuo
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 9;
	$fdata["strName"] = "id_residuo";
	$fdata["GoodName"] = "id_residuo";
	$fdata["ownerTable"] = "public.recicladores";
	$fdata["Label"] = GetFieldLabel("public_recicladores","id_residuo");
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


	$tdatarecicladores["id_residuo"] = $fdata;
		$tdatarecicladores[".searchableFields"][] = "id_residuo";


$tables_data["public.recicladores"]=&$tdatarecicladores;
$field_labels["public_recicladores"] = &$fieldLabelsrecicladores;
$fieldToolTips["public_recicladores"] = &$fieldToolTipsrecicladores;
$placeHolders["public_recicladores"] = &$placeHoldersrecicladores;
$page_titles["public_recicladores"] = &$pageTitlesrecicladores;

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)

//if !@TABLE.bReportCrossTab

$detailsTablesData["public.recicladores"] = array();
//	public.gestion_pesos_residuos
	
	

		$dIndex = 0;
	$detailsParam = array();
	$detailsParam["dDataSourceTable"]="public.gestion_pesos_residuos";
		$detailsParam["dOriginalTable"] = "public.gestion_pesos_residuos";



		
		$detailsParam["dType"]=PAGE_LIST;
	$detailsParam["dShortTable"] = "gestion_pesos_residuos";
	$detailsParam["dCaptionTable"] = GetTableCaption("public_gestion_pesos_residuos");
	$detailsParam["masterKeys"] =array();
	$detailsParam["detailKeys"] =array();


		
	$detailsTablesData["public.recicladores"][$dIndex] = $detailsParam;

	
		$detailsTablesData["public.recicladores"][$dIndex]["masterKeys"] = array();

	$detailsTablesData["public.recicladores"][$dIndex]["masterKeys"][]="id_reciclador";

				$detailsTablesData["public.recicladores"][$dIndex]["detailKeys"] = array();

	$detailsTablesData["public.recicladores"][$dIndex]["detailKeys"][]="id_reciclador";
//endif

// tables which are master tables for current table (detail)
$masterTablesData["public.recicladores"] = array();



	
	//if !@t.bReportCrossTab
			$strOriginalDetailsTable="public.residuos";
	$masterParams = array();
	$masterParams["mDataSourceTable"]="public.residuos";
	$masterParams["mOriginalTable"]= $strOriginalDetailsTable;
	$masterParams["mShortTable"]= "residuos";
	$masterParams["masterKeys"]= array();
	$masterParams["detailKeys"]= array();

	$masterParams["type"] = PAGE_LIST;
					$masterTablesData["public.recicladores"][0] = $masterParams;
				$masterTablesData["public.recicladores"][0]["masterKeys"] = array();
	$masterTablesData["public.recicladores"][0]["masterKeys"][]="id_residuo";
				$masterTablesData["public.recicladores"][0]["detailKeys"] = array();
	$masterTablesData["public.recicladores"][0]["detailKeys"][]="id_residuo";
		
	//endif
// -----------------end  prepare master-details data arrays ------------------------------//



require_once(getabspath("classes/sql.php"));











function createSqlQuery_recicladores()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "id_reciclador,  	foto_reciclador,  	ci_reciclador,  	nombre_reciclador,  	apellido_reciclador,  	direc_reciclador,  	tel_reciclador,  	logo_aso,  	id_residuo";
$proto0["m_strFrom"] = "FROM \"public\".recicladores";
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
	"m_strName" => "id_reciclador",
	"m_strTable" => "public.recicladores",
	"m_srcTableName" => "public.recicladores"
));

$proto6["m_sql"] = "id_reciclador";
$proto6["m_srcTableName"] = "public.recicladores";
$proto6["m_expr"]=$obj;
$proto6["m_alias"] = "";
$obj = new SQLFieldListItem($proto6);

$proto0["m_fieldlist"][]=$obj;
						$proto8=array();
			$obj = new SQLField(array(
	"m_strName" => "foto_reciclador",
	"m_strTable" => "public.recicladores",
	"m_srcTableName" => "public.recicladores"
));

$proto8["m_sql"] = "foto_reciclador";
$proto8["m_srcTableName"] = "public.recicladores";
$proto8["m_expr"]=$obj;
$proto8["m_alias"] = "";
$obj = new SQLFieldListItem($proto8);

$proto0["m_fieldlist"][]=$obj;
						$proto10=array();
			$obj = new SQLField(array(
	"m_strName" => "ci_reciclador",
	"m_strTable" => "public.recicladores",
	"m_srcTableName" => "public.recicladores"
));

$proto10["m_sql"] = "ci_reciclador";
$proto10["m_srcTableName"] = "public.recicladores";
$proto10["m_expr"]=$obj;
$proto10["m_alias"] = "";
$obj = new SQLFieldListItem($proto10);

$proto0["m_fieldlist"][]=$obj;
						$proto12=array();
			$obj = new SQLField(array(
	"m_strName" => "nombre_reciclador",
	"m_strTable" => "public.recicladores",
	"m_srcTableName" => "public.recicladores"
));

$proto12["m_sql"] = "nombre_reciclador";
$proto12["m_srcTableName"] = "public.recicladores";
$proto12["m_expr"]=$obj;
$proto12["m_alias"] = "";
$obj = new SQLFieldListItem($proto12);

$proto0["m_fieldlist"][]=$obj;
						$proto14=array();
			$obj = new SQLField(array(
	"m_strName" => "apellido_reciclador",
	"m_strTable" => "public.recicladores",
	"m_srcTableName" => "public.recicladores"
));

$proto14["m_sql"] = "apellido_reciclador";
$proto14["m_srcTableName"] = "public.recicladores";
$proto14["m_expr"]=$obj;
$proto14["m_alias"] = "";
$obj = new SQLFieldListItem($proto14);

$proto0["m_fieldlist"][]=$obj;
						$proto16=array();
			$obj = new SQLField(array(
	"m_strName" => "direc_reciclador",
	"m_strTable" => "public.recicladores",
	"m_srcTableName" => "public.recicladores"
));

$proto16["m_sql"] = "direc_reciclador";
$proto16["m_srcTableName"] = "public.recicladores";
$proto16["m_expr"]=$obj;
$proto16["m_alias"] = "";
$obj = new SQLFieldListItem($proto16);

$proto0["m_fieldlist"][]=$obj;
						$proto18=array();
			$obj = new SQLField(array(
	"m_strName" => "tel_reciclador",
	"m_strTable" => "public.recicladores",
	"m_srcTableName" => "public.recicladores"
));

$proto18["m_sql"] = "tel_reciclador";
$proto18["m_srcTableName"] = "public.recicladores";
$proto18["m_expr"]=$obj;
$proto18["m_alias"] = "";
$obj = new SQLFieldListItem($proto18);

$proto0["m_fieldlist"][]=$obj;
						$proto20=array();
			$obj = new SQLField(array(
	"m_strName" => "logo_aso",
	"m_strTable" => "public.recicladores",
	"m_srcTableName" => "public.recicladores"
));

$proto20["m_sql"] = "logo_aso";
$proto20["m_srcTableName"] = "public.recicladores";
$proto20["m_expr"]=$obj;
$proto20["m_alias"] = "";
$obj = new SQLFieldListItem($proto20);

$proto0["m_fieldlist"][]=$obj;
						$proto22=array();
			$obj = new SQLField(array(
	"m_strName" => "id_residuo",
	"m_strTable" => "public.recicladores",
	"m_srcTableName" => "public.recicladores"
));

$proto22["m_sql"] = "id_residuo";
$proto22["m_srcTableName"] = "public.recicladores";
$proto22["m_expr"]=$obj;
$proto22["m_alias"] = "";
$obj = new SQLFieldListItem($proto22);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto24=array();
$proto24["m_link"] = "SQLL_MAIN";
			$proto25=array();
$proto25["m_strName"] = "public.recicladores";
$proto25["m_srcTableName"] = "public.recicladores";
$proto25["m_columns"] = array();
$proto25["m_columns"][] = "id_reciclador";
$proto25["m_columns"][] = "foto_reciclador";
$proto25["m_columns"][] = "ci_reciclador";
$proto25["m_columns"][] = "nombre_reciclador";
$proto25["m_columns"][] = "apellido_reciclador";
$proto25["m_columns"][] = "direc_reciclador";
$proto25["m_columns"][] = "tel_reciclador";
$proto25["m_columns"][] = "logo_aso";
$proto25["m_columns"][] = "id_residuo";
$obj = new SQLTable($proto25);

$proto24["m_table"] = $obj;
$proto24["m_sql"] = "\"public\".recicladores";
$proto24["m_alias"] = "";
$proto24["m_srcTableName"] = "public.recicladores";
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
$proto0["m_srcTableName"]="public.recicladores";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_recicladores = createSqlQuery_recicladores();


	
		;

									

$tdatarecicladores[".sqlquery"] = $queryData_recicladores;



$tableEvents["public.recicladores"] = new eventsBase;
$tdatarecicladores[".hasEvents"] = false;

?>