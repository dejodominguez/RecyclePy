<?php
$tdatapublic_recicladores1 = array();
$tdatapublic_recicladores1[".searchableFields"] = array();
$tdatapublic_recicladores1[".ShortName"] = "public_recicladores1";
$tdatapublic_recicladores1[".OwnerID"] = "";
$tdatapublic_recicladores1[".OriginalTable"] = "public.recicladores";


$tdatapublic_recicladores1[".pagesByType"] = my_json_decode( "{\"add\":[\"add\"],\"export\":[\"export\"],\"import\":[\"import\"],\"list\":[\"list\"],\"masterlist\":[\"masterlist\"],\"masterprint\":[\"masterprint\"],\"print\":[\"print\"],\"search\":[\"search\"]}" );
$tdatapublic_recicladores1[".originalPagesByType"] = $tdatapublic_recicladores1[".pagesByType"];
$tdatapublic_recicladores1[".pages"] = types2pages( my_json_decode( "{\"add\":[\"add\"],\"export\":[\"export\"],\"import\":[\"import\"],\"list\":[\"list\"],\"masterlist\":[\"masterlist\"],\"masterprint\":[\"masterprint\"],\"print\":[\"print\"],\"search\":[\"search\"]}" ) );
$tdatapublic_recicladores1[".originalPages"] = $tdatapublic_recicladores1[".pages"];
$tdatapublic_recicladores1[".defaultPages"] = my_json_decode( "{\"add\":\"add\",\"export\":\"export\",\"import\":\"import\",\"list\":\"list\",\"masterlist\":\"masterlist\",\"masterprint\":\"masterprint\",\"print\":\"print\",\"search\":\"search\"}" );
$tdatapublic_recicladores1[".originalDefaultPages"] = $tdatapublic_recicladores1[".defaultPages"];

//	field labels
$fieldLabelspublic_recicladores1 = array();
$fieldToolTipspublic_recicladores1 = array();
$pageTitlespublic_recicladores1 = array();
$placeHolderspublic_recicladores1 = array();

if(mlang_getcurrentlang()=="Spanish")
{
	$fieldLabelspublic_recicladores1["Spanish"] = array();
	$fieldToolTipspublic_recicladores1["Spanish"] = array();
	$placeHolderspublic_recicladores1["Spanish"] = array();
	$pageTitlespublic_recicladores1["Spanish"] = array();
	$fieldLabelspublic_recicladores1["Spanish"]["foto_reciclador"] = "Foto Reciclador";
	$fieldToolTipspublic_recicladores1["Spanish"]["foto_reciclador"] = "";
	$placeHolderspublic_recicladores1["Spanish"]["foto_reciclador"] = "";
	$fieldLabelspublic_recicladores1["Spanish"]["ci_reciclador"] = "C.I. Nº Reciclador:";
	$fieldToolTipspublic_recicladores1["Spanish"]["ci_reciclador"] = "";
	$placeHolderspublic_recicladores1["Spanish"]["ci_reciclador"] = "";
	$fieldLabelspublic_recicladores1["Spanish"]["nombre_reciclador"] = "Nombre/s:";
	$fieldToolTipspublic_recicladores1["Spanish"]["nombre_reciclador"] = "";
	$placeHolderspublic_recicladores1["Spanish"]["nombre_reciclador"] = "";
	$fieldLabelspublic_recicladores1["Spanish"]["apellido_reciclador"] = "Apellido/s:";
	$fieldToolTipspublic_recicladores1["Spanish"]["apellido_reciclador"] = "";
	$placeHolderspublic_recicladores1["Spanish"]["apellido_reciclador"] = "";
	$fieldLabelspublic_recicladores1["Spanish"]["direc_reciclador"] = "Dirección:";
	$fieldToolTipspublic_recicladores1["Spanish"]["direc_reciclador"] = "";
	$placeHolderspublic_recicladores1["Spanish"]["direc_reciclador"] = "";
	$fieldLabelspublic_recicladores1["Spanish"]["tel_reciclador"] = "Teléfono:";
	$fieldToolTipspublic_recicladores1["Spanish"]["tel_reciclador"] = "";
	$placeHolderspublic_recicladores1["Spanish"]["tel_reciclador"] = "";
	$fieldLabelspublic_recicladores1["Spanish"]["logo_aso"] = "Logo ASO";
	$fieldToolTipspublic_recicladores1["Spanish"]["logo_aso"] = "";
	$placeHolderspublic_recicladores1["Spanish"]["logo_aso"] = "";
	$fieldLabelspublic_recicladores1["Spanish"]["id_residuo"] = "Tipo de residuo que recoge:";
	$fieldToolTipspublic_recicladores1["Spanish"]["id_residuo"] = "";
	$placeHolderspublic_recicladores1["Spanish"]["id_residuo"] = "";
	$fieldLabelspublic_recicladores1["Spanish"]["id_reciclador"] = "Id Reciclador";
	$fieldToolTipspublic_recicladores1["Spanish"]["id_reciclador"] = "";
	$placeHolderspublic_recicladores1["Spanish"]["id_reciclador"] = "";
	if (count($fieldToolTipspublic_recicladores1["Spanish"]))
		$tdatapublic_recicladores1[".isUseToolTips"] = true;
}


	$tdatapublic_recicladores1[".NCSearch"] = true;



$tdatapublic_recicladores1[".shortTableName"] = "public_recicladores1";
$tdatapublic_recicladores1[".nSecOptions"] = 0;

$tdatapublic_recicladores1[".mainTableOwnerID"] = "";
$tdatapublic_recicladores1[".entityType"] = 1;
$tdatapublic_recicladores1[".connId"] = "RealEstate_at_localhost";


$tdatapublic_recicladores1[".strOriginalTableName"] = "public.recicladores";

	



$tdatapublic_recicladores1[".showAddInPopup"] = false;

$tdatapublic_recicladores1[".showEditInPopup"] = false;

$tdatapublic_recicladores1[".showViewInPopup"] = false;

$tdatapublic_recicladores1[".listAjax"] = false;
//	temporary
//$tdatapublic_recicladores1[".listAjax"] = false;

	$tdatapublic_recicladores1[".audit"] = false;

	$tdatapublic_recicladores1[".locking"] = false;


$pages = $tdatapublic_recicladores1[".defaultPages"];

if( $pages[PAGE_EDIT] ) {
	$tdatapublic_recicladores1[".edit"] = true;
	$tdatapublic_recicladores1[".afterEditAction"] = 0;
	$tdatapublic_recicladores1[".closePopupAfterEdit"] = 1;
	$tdatapublic_recicladores1[".afterEditActionDetTable"] = "public.GestionPesosResiduos";
}

if( $pages[PAGE_ADD] ) {
$tdatapublic_recicladores1[".add"] = true;
$tdatapublic_recicladores1[".afterAddAction"] = 1;
$tdatapublic_recicladores1[".closePopupAfterAdd"] = 1;
$tdatapublic_recicladores1[".afterAddActionDetTable"] = "";
}

if( $pages[PAGE_LIST] ) {
	$tdatapublic_recicladores1[".list"] = true;
}



$tdatapublic_recicladores1[".strSortControlSettingsJSON"] = "";




if( $pages[PAGE_VIEW] ) {
$tdatapublic_recicladores1[".view"] = true;
}

if( $pages[PAGE_IMPORT] ) {
$tdatapublic_recicladores1[".import"] = true;
}

if( $pages[PAGE_EXPORT] ) {
$tdatapublic_recicladores1[".exportTo"] = true;
}

if( $pages[PAGE_PRINT] ) {
$tdatapublic_recicladores1[".printFriendly"] = true;
}



$tdatapublic_recicladores1[".showSimpleSearchOptions"] = true; // temp fix #13449

// Allow Show/Hide Fields in GRID
$tdatapublic_recicladores1[".allowShowHideFields"] = true; // temp fix #13449
//

// Allow Fields Reordering in GRID
$tdatapublic_recicladores1[".allowFieldsReordering"] = true; // temp fix #13449
//

$tdatapublic_recicladores1[".isUseAjaxSuggest"] = true;

$tdatapublic_recicladores1[".rowHighlite"] = true;



			

$tdatapublic_recicladores1[".ajaxCodeSnippetAdded"] = false;

$tdatapublic_recicladores1[".buttonsAdded"] = false;

$tdatapublic_recicladores1[".addPageEvents"] = false;

// use timepicker for search panel
$tdatapublic_recicladores1[".isUseTimeForSearch"] = false;


$tdatapublic_recicladores1[".badgeColor"] = "008b8b";


$tdatapublic_recicladores1[".allSearchFields"] = array();
$tdatapublic_recicladores1[".filterFields"] = array();
$tdatapublic_recicladores1[".requiredSearchFields"] = array();

$tdatapublic_recicladores1[".googleLikeFields"] = array();
$tdatapublic_recicladores1[".googleLikeFields"][] = "id_reciclador";
$tdatapublic_recicladores1[".googleLikeFields"][] = "foto_reciclador";
$tdatapublic_recicladores1[".googleLikeFields"][] = "ci_reciclador";
$tdatapublic_recicladores1[".googleLikeFields"][] = "nombre_reciclador";
$tdatapublic_recicladores1[".googleLikeFields"][] = "apellido_reciclador";
$tdatapublic_recicladores1[".googleLikeFields"][] = "direc_reciclador";
$tdatapublic_recicladores1[".googleLikeFields"][] = "tel_reciclador";
$tdatapublic_recicladores1[".googleLikeFields"][] = "logo_aso";
$tdatapublic_recicladores1[".googleLikeFields"][] = "id_residuo";



$tdatapublic_recicladores1[".tableType"] = "list";

$tdatapublic_recicladores1[".printerPageOrientation"] = 0;
$tdatapublic_recicladores1[".nPrinterPageScale"] = 100;

$tdatapublic_recicladores1[".nPrinterSplitRecords"] = 40;

$tdatapublic_recicladores1[".geocodingEnabled"] = false;










$tdatapublic_recicladores1[".pageSize"] = 20;

$tdatapublic_recicladores1[".warnLeavingPages"] = true;



$tstrOrderBy = "";
$tdatapublic_recicladores1[".strOrderBy"] = $tstrOrderBy;

$tdatapublic_recicladores1[".orderindexes"] = array();


$tdatapublic_recicladores1[".sqlHead"] = "SELECT id_reciclador,  	foto_reciclador,  	ci_reciclador,  	nombre_reciclador,  	apellido_reciclador,  	direc_reciclador,  	tel_reciclador,  	logo_aso,  	id_residuo";
$tdatapublic_recicladores1[".sqlFrom"] = "FROM \"public\".recicladores";
$tdatapublic_recicladores1[".sqlWhereExpr"] = "";
$tdatapublic_recicladores1[".sqlTail"] = "";










//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdatapublic_recicladores1[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdatapublic_recicladores1[".arrGroupsPerPage"] = $arrGPP;

$tdatapublic_recicladores1[".highlightSearchResults"] = true;

$tableKeyspublic_recicladores1 = array();
$tdatapublic_recicladores1[".Keys"] = $tableKeyspublic_recicladores1;


$tdatapublic_recicladores1[".hideMobileList"] = array();




//	id_reciclador
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "id_reciclador";
	$fdata["GoodName"] = "id_reciclador";
	$fdata["ownerTable"] = "public.recicladores";
	$fdata["Label"] = GetFieldLabel("public_recicladores1","id_reciclador");
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


	$tdatapublic_recicladores1["id_reciclador"] = $fdata;
		$tdatapublic_recicladores1[".searchableFields"][] = "id_reciclador";
//	foto_reciclador
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "foto_reciclador";
	$fdata["GoodName"] = "foto_reciclador";
	$fdata["ownerTable"] = "public.recicladores";
	$fdata["Label"] = GetFieldLabel("public_recicladores1","foto_reciclador");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "foto_reciclador";

		$fdata["sourceSingle"] = "foto_reciclador";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "foto_reciclador";

	
	
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "Document Download");

	
	
	
								$vdata["ShowIcon"] = true;
		
	
	
	
	
	
	
	
		
	
	
	
		$vdata["truncateText"] = true;
	$vdata["NumberOfChars"] = 80;

	$fdata["ViewFormats"]["view"] = $vdata;
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
	$vdata = array("ViewFormat" => "Document Download");

	
	
	
								$vdata["ShowIcon"] = true;
		
	
	
	
	
	
	
	
		
	
	
	
		$vdata["truncateText"] = true;
	$vdata["NumberOfChars"] = 80;

	$fdata["ViewFormats"]["masterlist"] = $vdata;
	$vdata = array("ViewFormat" => "Document Download");

	
	
	
								$vdata["ShowIcon"] = true;
		
	
	
	
	
	
	
	
		
	
	
	
		$vdata["truncateText"] = true;
	$vdata["NumberOfChars"] = 80;

	$fdata["ViewFormats"]["masterprint"] = $vdata;
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


	$tdatapublic_recicladores1["foto_reciclador"] = $fdata;
		$tdatapublic_recicladores1[".searchableFields"][] = "foto_reciclador";
//	ci_reciclador
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "ci_reciclador";
	$fdata["GoodName"] = "ci_reciclador";
	$fdata["ownerTable"] = "public.recicladores";
	$fdata["Label"] = GetFieldLabel("public_recicladores1","ci_reciclador");
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


	$tdatapublic_recicladores1["ci_reciclador"] = $fdata;
		$tdatapublic_recicladores1[".searchableFields"][] = "ci_reciclador";
//	nombre_reciclador
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "nombre_reciclador";
	$fdata["GoodName"] = "nombre_reciclador";
	$fdata["ownerTable"] = "public.recicladores";
	$fdata["Label"] = GetFieldLabel("public_recicladores1","nombre_reciclador");
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


	$tdatapublic_recicladores1["nombre_reciclador"] = $fdata;
		$tdatapublic_recicladores1[".searchableFields"][] = "nombre_reciclador";
//	apellido_reciclador
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 5;
	$fdata["strName"] = "apellido_reciclador";
	$fdata["GoodName"] = "apellido_reciclador";
	$fdata["ownerTable"] = "public.recicladores";
	$fdata["Label"] = GetFieldLabel("public_recicladores1","apellido_reciclador");
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


	$tdatapublic_recicladores1["apellido_reciclador"] = $fdata;
		$tdatapublic_recicladores1[".searchableFields"][] = "apellido_reciclador";
//	direc_reciclador
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 6;
	$fdata["strName"] = "direc_reciclador";
	$fdata["GoodName"] = "direc_reciclador";
	$fdata["ownerTable"] = "public.recicladores";
	$fdata["Label"] = GetFieldLabel("public_recicladores1","direc_reciclador");
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


	$tdatapublic_recicladores1["direc_reciclador"] = $fdata;
		$tdatapublic_recicladores1[".searchableFields"][] = "direc_reciclador";
//	tel_reciclador
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 7;
	$fdata["strName"] = "tel_reciclador";
	$fdata["GoodName"] = "tel_reciclador";
	$fdata["ownerTable"] = "public.recicladores";
	$fdata["Label"] = GetFieldLabel("public_recicladores1","tel_reciclador");
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


	$tdatapublic_recicladores1["tel_reciclador"] = $fdata;
		$tdatapublic_recicladores1[".searchableFields"][] = "tel_reciclador";
//	logo_aso
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 8;
	$fdata["strName"] = "logo_aso";
	$fdata["GoodName"] = "logo_aso";
	$fdata["ownerTable"] = "public.recicladores";
	$fdata["Label"] = GetFieldLabel("public_recicladores1","logo_aso");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "logo_aso";

		$fdata["sourceSingle"] = "logo_ASO";

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


	$tdatapublic_recicladores1["logo_aso"] = $fdata;
		$tdatapublic_recicladores1[".searchableFields"][] = "logo_aso";
//	id_residuo
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 9;
	$fdata["strName"] = "id_residuo";
	$fdata["GoodName"] = "id_residuo";
	$fdata["ownerTable"] = "public.recicladores";
	$fdata["Label"] = GetFieldLabel("public_recicladores1","id_residuo");
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

	
		
	$edata["LinkField"] = "";
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


	$tdatapublic_recicladores1["id_residuo"] = $fdata;
		$tdatapublic_recicladores1[".searchableFields"][] = "id_residuo";


$tables_data["public.recicladores1"]=&$tdatapublic_recicladores1;
$field_labels["public_recicladores1"] = &$fieldLabelspublic_recicladores1;
$fieldToolTips["public_recicladores1"] = &$fieldToolTipspublic_recicladores1;
$placeHolders["public_recicladores1"] = &$placeHolderspublic_recicladores1;
$page_titles["public_recicladores1"] = &$pageTitlespublic_recicladores1;

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)

//if !@TABLE.bReportCrossTab

$detailsTablesData["public.recicladores1"] = array();
//endif

// tables which are master tables for current table (detail)
$masterTablesData["public.recicladores1"] = array();



// -----------------end  prepare master-details data arrays ------------------------------//



require_once(getabspath("classes/sql.php"));











function createSqlQuery_public_recicladores1()
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
	"m_srcTableName" => "public.recicladores1"
));

$proto6["m_sql"] = "id_reciclador";
$proto6["m_srcTableName"] = "public.recicladores1";
$proto6["m_expr"]=$obj;
$proto6["m_alias"] = "";
$obj = new SQLFieldListItem($proto6);

$proto0["m_fieldlist"][]=$obj;
						$proto8=array();
			$obj = new SQLField(array(
	"m_strName" => "foto_reciclador",
	"m_strTable" => "public.recicladores",
	"m_srcTableName" => "public.recicladores1"
));

$proto8["m_sql"] = "foto_reciclador";
$proto8["m_srcTableName"] = "public.recicladores1";
$proto8["m_expr"]=$obj;
$proto8["m_alias"] = "";
$obj = new SQLFieldListItem($proto8);

$proto0["m_fieldlist"][]=$obj;
						$proto10=array();
			$obj = new SQLField(array(
	"m_strName" => "ci_reciclador",
	"m_strTable" => "public.recicladores",
	"m_srcTableName" => "public.recicladores1"
));

$proto10["m_sql"] = "ci_reciclador";
$proto10["m_srcTableName"] = "public.recicladores1";
$proto10["m_expr"]=$obj;
$proto10["m_alias"] = "";
$obj = new SQLFieldListItem($proto10);

$proto0["m_fieldlist"][]=$obj;
						$proto12=array();
			$obj = new SQLField(array(
	"m_strName" => "nombre_reciclador",
	"m_strTable" => "public.recicladores",
	"m_srcTableName" => "public.recicladores1"
));

$proto12["m_sql"] = "nombre_reciclador";
$proto12["m_srcTableName"] = "public.recicladores1";
$proto12["m_expr"]=$obj;
$proto12["m_alias"] = "";
$obj = new SQLFieldListItem($proto12);

$proto0["m_fieldlist"][]=$obj;
						$proto14=array();
			$obj = new SQLField(array(
	"m_strName" => "apellido_reciclador",
	"m_strTable" => "public.recicladores",
	"m_srcTableName" => "public.recicladores1"
));

$proto14["m_sql"] = "apellido_reciclador";
$proto14["m_srcTableName"] = "public.recicladores1";
$proto14["m_expr"]=$obj;
$proto14["m_alias"] = "";
$obj = new SQLFieldListItem($proto14);

$proto0["m_fieldlist"][]=$obj;
						$proto16=array();
			$obj = new SQLField(array(
	"m_strName" => "direc_reciclador",
	"m_strTable" => "public.recicladores",
	"m_srcTableName" => "public.recicladores1"
));

$proto16["m_sql"] = "direc_reciclador";
$proto16["m_srcTableName"] = "public.recicladores1";
$proto16["m_expr"]=$obj;
$proto16["m_alias"] = "";
$obj = new SQLFieldListItem($proto16);

$proto0["m_fieldlist"][]=$obj;
						$proto18=array();
			$obj = new SQLField(array(
	"m_strName" => "tel_reciclador",
	"m_strTable" => "public.recicladores",
	"m_srcTableName" => "public.recicladores1"
));

$proto18["m_sql"] = "tel_reciclador";
$proto18["m_srcTableName"] = "public.recicladores1";
$proto18["m_expr"]=$obj;
$proto18["m_alias"] = "";
$obj = new SQLFieldListItem($proto18);

$proto0["m_fieldlist"][]=$obj;
						$proto20=array();
			$obj = new SQLField(array(
	"m_strName" => "logo_aso",
	"m_strTable" => "public.recicladores",
	"m_srcTableName" => "public.recicladores1"
));

$proto20["m_sql"] = "logo_aso";
$proto20["m_srcTableName"] = "public.recicladores1";
$proto20["m_expr"]=$obj;
$proto20["m_alias"] = "";
$obj = new SQLFieldListItem($proto20);

$proto0["m_fieldlist"][]=$obj;
						$proto22=array();
			$obj = new SQLField(array(
	"m_strName" => "id_residuo",
	"m_strTable" => "public.recicladores",
	"m_srcTableName" => "public.recicladores1"
));

$proto22["m_sql"] = "id_residuo";
$proto22["m_srcTableName"] = "public.recicladores1";
$proto22["m_expr"]=$obj;
$proto22["m_alias"] = "";
$obj = new SQLFieldListItem($proto22);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto24=array();
$proto24["m_link"] = "SQLL_MAIN";
			$proto25=array();
$proto25["m_strName"] = "public.recicladores";
$proto25["m_srcTableName"] = "public.recicladores1";
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
$proto24["m_srcTableName"] = "public.recicladores1";
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
$proto0["m_srcTableName"]="public.recicladores1";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_public_recicladores1 = createSqlQuery_public_recicladores1();


	
		;

									

$tdatapublic_recicladores1[".sqlquery"] = $queryData_public_recicladores1;



$tableEvents["public.recicladores1"] = new eventsBase;
$tdatapublic_recicladores1[".hasEvents"] = false;

?>