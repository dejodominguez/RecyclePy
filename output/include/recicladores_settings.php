<?php



$tdatarecicladores = array();
$tdatarecicladores[".searchableFields"] = array();
$tdatarecicladores[".ShortName"] = "recicladores";
$tdatarecicladores[".OwnerID"] = "";
$tdatarecicladores[".OriginalTable"] = "public.Recicladores";


$defaultPages = my_json_decode( "{\"add\":\"add\",\"edit\":\"edit\",\"export\":\"export\",\"import\":\"import\",\"list\":\"list\",\"masterlist\":\"masterlist\",\"masterprint\":\"masterprint\",\"print\":\"print\",\"search\":\"search\",\"view\":\"view\"}" );

$tdatarecicladores[".pagesByType"] = my_json_decode( "{\"add\":[\"add\"],\"edit\":[\"edit\"],\"export\":[\"export\"],\"import\":[\"import\"],\"list\":[\"list\"],\"masterlist\":[\"masterlist\"],\"masterprint\":[\"masterprint\"],\"print\":[\"print\"],\"search\":[\"search\"],\"view\":[\"view\"]}" );
$tdatarecicladores[".pages"] = types2pages( my_json_decode( "{\"add\":[\"add\"],\"edit\":[\"edit\"],\"export\":[\"export\"],\"import\":[\"import\"],\"list\":[\"list\"],\"masterlist\":[\"masterlist\"],\"masterprint\":[\"masterprint\"],\"print\":[\"print\"],\"search\":[\"search\"],\"view\":[\"view\"]}" ) );
$tdatarecicladores[".defaultPages"] = $defaultPages;

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
	$fieldLabelsrecicladores["Spanish"]["IdReciclador"] = " = Nº :";
	$fieldToolTipsrecicladores["Spanish"]["IdReciclador"] = "";
	$placeHoldersrecicladores["Spanish"]["IdReciclador"] = "";
	$fieldLabelsrecicladores["Spanish"]["FotoReciclador"] = "Foto de Reciclador:";
	$fieldToolTipsrecicladores["Spanish"]["FotoReciclador"] = "";
	$placeHoldersrecicladores["Spanish"]["FotoReciclador"] = "";
	$fieldLabelsrecicladores["Spanish"]["CIReciclador"] = "C.I. Nº Reciclador:";
	$fieldToolTipsrecicladores["Spanish"]["CIReciclador"] = "";
	$placeHoldersrecicladores["Spanish"]["CIReciclador"] = "";
	$fieldLabelsrecicladores["Spanish"]["NomReciclador"] = "Nombre/s:";
	$fieldToolTipsrecicladores["Spanish"]["NomReciclador"] = "";
	$placeHoldersrecicladores["Spanish"]["NomReciclador"] = "";
	$fieldLabelsrecicladores["Spanish"]["ApeReciclador"] = "Apellido/s:";
	$fieldToolTipsrecicladores["Spanish"]["ApeReciclador"] = "";
	$placeHoldersrecicladores["Spanish"]["ApeReciclador"] = "";
	$fieldLabelsrecicladores["Spanish"]["DirReciclador"] = "Dirección:";
	$fieldToolTipsrecicladores["Spanish"]["DirReciclador"] = "";
	$placeHoldersrecicladores["Spanish"]["DirReciclador"] = "";
	$fieldLabelsrecicladores["Spanish"]["TelReciclador"] = "Teléfono:";
	$fieldToolTipsrecicladores["Spanish"]["TelReciclador"] = "";
	$placeHoldersrecicladores["Spanish"]["TelReciclador"] = "";
	$fieldLabelsrecicladores["Spanish"]["LogoASO"] = "Logo de la ASO:";
	$fieldToolTipsrecicladores["Spanish"]["LogoASO"] = "";
	$placeHoldersrecicladores["Spanish"]["LogoASO"] = "";
	$pageTitlesrecicladores["Spanish"]["edit"] = "Recicladores, Editar/Modificar [{%IdReciclador}]";
	if (count($fieldToolTipsrecicladores["Spanish"]))
		$tdatarecicladores[".isUseToolTips"] = true;
}


	$tdatarecicladores[".NCSearch"] = true;



$tdatarecicladores[".shortTableName"] = "recicladores";
$tdatarecicladores[".nSecOptions"] = 0;

$tdatarecicladores[".mainTableOwnerID"] = "";
$tdatarecicladores[".entityType"] = 0;

$tdatarecicladores[".strOriginalTableName"] = "public.Recicladores";

	



$tdatarecicladores[".showAddInPopup"] = false;

$tdatarecicladores[".showEditInPopup"] = false;

$tdatarecicladores[".showViewInPopup"] = false;

//page's base css files names
$popupPagesLayoutNames = array();
$tdatarecicladores[".popupPagesLayoutNames"] = $popupPagesLayoutNames;


$tdatarecicladores[".listAjax"] = false;
//	temporary
$tdatarecicladores[".listAjax"] = false;

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


$tdatarecicladores[".badgeColor"] = "008b8b";


$tdatarecicladores[".allSearchFields"] = array();
$tdatarecicladores[".filterFields"] = array();
$tdatarecicladores[".requiredSearchFields"] = array();

$tdatarecicladores[".googleLikeFields"] = array();
$tdatarecicladores[".googleLikeFields"][] = "IdReciclador";
$tdatarecicladores[".googleLikeFields"][] = "FotoReciclador";
$tdatarecicladores[".googleLikeFields"][] = "CIReciclador";
$tdatarecicladores[".googleLikeFields"][] = "NomReciclador";
$tdatarecicladores[".googleLikeFields"][] = "ApeReciclador";
$tdatarecicladores[".googleLikeFields"][] = "DirReciclador";
$tdatarecicladores[".googleLikeFields"][] = "TelReciclador";
$tdatarecicladores[".googleLikeFields"][] = "LogoASO";



$tdatarecicladores[".tableType"] = "list";

$tdatarecicladores[".printerPageOrientation"] = 0;
$tdatarecicladores[".nPrinterPageScale"] = 100;

$tdatarecicladores[".nPrinterSplitRecords"] = 40;

$tdatarecicladores[".geocodingEnabled"] = false;










$tdatarecicladores[".pageSize"] = 20;

$tdatarecicladores[".warnLeavingPages"] = true;



$tstrOrderBy = "";
if(strlen($tstrOrderBy) && strtolower(substr($tstrOrderBy,0,8))!="order by")
	$tstrOrderBy = "order by ".$tstrOrderBy;
$tdatarecicladores[".strOrderBy"] = $tstrOrderBy;

$tdatarecicladores[".orderindexes"] = array();

$tdatarecicladores[".sqlHead"] = "SELECT \"IdReciclador\",  	\"FotoReciclador\",  	\"CIReciclador\",  	\"NomReciclador\",  	\"ApeReciclador\",  	\"DirReciclador\",  	\"TelReciclador\",  	\"LogoASO\"";
$tdatarecicladores[".sqlFrom"] = "FROM \"public\".\"Recicladores\"";
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
$tableKeysrecicladores[] = "IdReciclador";
$tdatarecicladores[".Keys"] = $tableKeysrecicladores;


$tdatarecicladores[".hideMobileList"] = array();




//	IdReciclador
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "IdReciclador";
	$fdata["GoodName"] = "IdReciclador";
	$fdata["ownerTable"] = "public.Recicladores";
	$fdata["Label"] = GetFieldLabel("public_Recicladores","IdReciclador");
	$fdata["FieldType"] = 3;

	
		$fdata["AutoInc"] = true;

	
			

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


	$tdatarecicladores["IdReciclador"] = $fdata;
		$tdatarecicladores[".searchableFields"][] = "IdReciclador";
//	FotoReciclador
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "FotoReciclador";
	$fdata["GoodName"] = "FotoReciclador";
	$fdata["ownerTable"] = "public.Recicladores";
	$fdata["Label"] = GetFieldLabel("public_Recicladores","FotoReciclador");
	$fdata["FieldType"] = 200;

	
	
	
			

		$fdata["strField"] = "FotoReciclador";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "\"FotoReciclador\"";

	
	
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


	$tdatarecicladores["FotoReciclador"] = $fdata;
		$tdatarecicladores[".searchableFields"][] = "FotoReciclador";
//	CIReciclador
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "CIReciclador";
	$fdata["GoodName"] = "CIReciclador";
	$fdata["ownerTable"] = "public.Recicladores";
	$fdata["Label"] = GetFieldLabel("public_Recicladores","CIReciclador");
	$fdata["FieldType"] = 200;

	
	
	
			

		$fdata["strField"] = "CIReciclador";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "\"CIReciclador\"";

	
	
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


	$tdatarecicladores["CIReciclador"] = $fdata;
		$tdatarecicladores[".searchableFields"][] = "CIReciclador";
//	NomReciclador
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "NomReciclador";
	$fdata["GoodName"] = "NomReciclador";
	$fdata["ownerTable"] = "public.Recicladores";
	$fdata["Label"] = GetFieldLabel("public_Recicladores","NomReciclador");
	$fdata["FieldType"] = 200;

	
	
	
			

		$fdata["strField"] = "NomReciclador";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "\"NomReciclador\"";

	
	
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


	$tdatarecicladores["NomReciclador"] = $fdata;
		$tdatarecicladores[".searchableFields"][] = "NomReciclador";
//	ApeReciclador
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 5;
	$fdata["strName"] = "ApeReciclador";
	$fdata["GoodName"] = "ApeReciclador";
	$fdata["ownerTable"] = "public.Recicladores";
	$fdata["Label"] = GetFieldLabel("public_Recicladores","ApeReciclador");
	$fdata["FieldType"] = 200;

	
	
	
			

		$fdata["strField"] = "ApeReciclador";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "\"ApeReciclador\"";

	
	
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


	$tdatarecicladores["ApeReciclador"] = $fdata;
		$tdatarecicladores[".searchableFields"][] = "ApeReciclador";
//	DirReciclador
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 6;
	$fdata["strName"] = "DirReciclador";
	$fdata["GoodName"] = "DirReciclador";
	$fdata["ownerTable"] = "public.Recicladores";
	$fdata["Label"] = GetFieldLabel("public_Recicladores","DirReciclador");
	$fdata["FieldType"] = 200;

	
	
	
			

		$fdata["strField"] = "DirReciclador";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "\"DirReciclador\"";

	
	
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


	$tdatarecicladores["DirReciclador"] = $fdata;
		$tdatarecicladores[".searchableFields"][] = "DirReciclador";
//	TelReciclador
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 7;
	$fdata["strName"] = "TelReciclador";
	$fdata["GoodName"] = "TelReciclador";
	$fdata["ownerTable"] = "public.Recicladores";
	$fdata["Label"] = GetFieldLabel("public_Recicladores","TelReciclador");
	$fdata["FieldType"] = 200;

	
	
	
			

		$fdata["strField"] = "TelReciclador";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "\"TelReciclador\"";

	
	
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


	$tdatarecicladores["TelReciclador"] = $fdata;
		$tdatarecicladores[".searchableFields"][] = "TelReciclador";
//	LogoASO
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 8;
	$fdata["strName"] = "LogoASO";
	$fdata["GoodName"] = "LogoASO";
	$fdata["ownerTable"] = "public.Recicladores";
	$fdata["Label"] = GetFieldLabel("public_Recicladores","LogoASO");
	$fdata["FieldType"] = 200;

	
	
	
			

		$fdata["strField"] = "LogoASO";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "\"LogoASO\"";

	
	
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


	$tdatarecicladores["LogoASO"] = $fdata;
		$tdatarecicladores[".searchableFields"][] = "LogoASO";


$tables_data["public.Recicladores"]=&$tdatarecicladores;
$field_labels["public_Recicladores"] = &$fieldLabelsrecicladores;
$fieldToolTips["public_Recicladores"] = &$fieldToolTipsrecicladores;
$placeHolders["public_Recicladores"] = &$placeHoldersrecicladores;
$page_titles["public_Recicladores"] = &$pageTitlesrecicladores;

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)
$detailsTablesData["public.Recicladores"] = array();
//	public.GestionPesosResiduos
	
	

		$dIndex = 0;
	$detailsParam = array();
	$detailsParam["dDataSourceTable"]="public.GestionPesosResiduos";
		$detailsParam["dOriginalTable"] = "public.GestionPesosResiduos";



				$detailsParam["dType"]=PAGE_LIST;
	$detailsParam["dShortTable"] = "gestionpesosresiduos";
	$detailsParam["dCaptionTable"] = GetTableCaption("public_GestionPesosResiduos");
	$detailsParam["masterKeys"] =array();
	$detailsParam["detailKeys"] =array();


		
	$detailsTablesData["public.Recicladores"][$dIndex] = $detailsParam;

	
		$detailsTablesData["public.Recicladores"][$dIndex]["masterKeys"] = array();

	$detailsTablesData["public.Recicladores"][$dIndex]["masterKeys"][]="IdReciclador";

				$detailsTablesData["public.Recicladores"][$dIndex]["detailKeys"] = array();

	$detailsTablesData["public.Recicladores"][$dIndex]["detailKeys"][]="IdReciclador";

// tables which are master tables for current table (detail)
$masterTablesData["public.Recicladores"] = array();



// -----------------end  prepare master-details data arrays ------------------------------//


require_once(getabspath("classes/sql.php"));










function createSqlQuery_recicladores()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "\"IdReciclador\",  	\"FotoReciclador\",  	\"CIReciclador\",  	\"NomReciclador\",  	\"ApeReciclador\",  	\"DirReciclador\",  	\"TelReciclador\",  	\"LogoASO\"";
$proto0["m_strFrom"] = "FROM \"public\".\"Recicladores\"";
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
	"m_strName" => "IdReciclador",
	"m_strTable" => "public.Recicladores",
	"m_srcTableName" => "public.Recicladores"
));

$proto6["m_sql"] = "\"IdReciclador\"";
$proto6["m_srcTableName"] = "public.Recicladores";
$proto6["m_expr"]=$obj;
$proto6["m_alias"] = "";
$obj = new SQLFieldListItem($proto6);

$proto0["m_fieldlist"][]=$obj;
						$proto8=array();
			$obj = new SQLField(array(
	"m_strName" => "FotoReciclador",
	"m_strTable" => "public.Recicladores",
	"m_srcTableName" => "public.Recicladores"
));

$proto8["m_sql"] = "\"FotoReciclador\"";
$proto8["m_srcTableName"] = "public.Recicladores";
$proto8["m_expr"]=$obj;
$proto8["m_alias"] = "";
$obj = new SQLFieldListItem($proto8);

$proto0["m_fieldlist"][]=$obj;
						$proto10=array();
			$obj = new SQLField(array(
	"m_strName" => "CIReciclador",
	"m_strTable" => "public.Recicladores",
	"m_srcTableName" => "public.Recicladores"
));

$proto10["m_sql"] = "\"CIReciclador\"";
$proto10["m_srcTableName"] = "public.Recicladores";
$proto10["m_expr"]=$obj;
$proto10["m_alias"] = "";
$obj = new SQLFieldListItem($proto10);

$proto0["m_fieldlist"][]=$obj;
						$proto12=array();
			$obj = new SQLField(array(
	"m_strName" => "NomReciclador",
	"m_strTable" => "public.Recicladores",
	"m_srcTableName" => "public.Recicladores"
));

$proto12["m_sql"] = "\"NomReciclador\"";
$proto12["m_srcTableName"] = "public.Recicladores";
$proto12["m_expr"]=$obj;
$proto12["m_alias"] = "";
$obj = new SQLFieldListItem($proto12);

$proto0["m_fieldlist"][]=$obj;
						$proto14=array();
			$obj = new SQLField(array(
	"m_strName" => "ApeReciclador",
	"m_strTable" => "public.Recicladores",
	"m_srcTableName" => "public.Recicladores"
));

$proto14["m_sql"] = "\"ApeReciclador\"";
$proto14["m_srcTableName"] = "public.Recicladores";
$proto14["m_expr"]=$obj;
$proto14["m_alias"] = "";
$obj = new SQLFieldListItem($proto14);

$proto0["m_fieldlist"][]=$obj;
						$proto16=array();
			$obj = new SQLField(array(
	"m_strName" => "DirReciclador",
	"m_strTable" => "public.Recicladores",
	"m_srcTableName" => "public.Recicladores"
));

$proto16["m_sql"] = "\"DirReciclador\"";
$proto16["m_srcTableName"] = "public.Recicladores";
$proto16["m_expr"]=$obj;
$proto16["m_alias"] = "";
$obj = new SQLFieldListItem($proto16);

$proto0["m_fieldlist"][]=$obj;
						$proto18=array();
			$obj = new SQLField(array(
	"m_strName" => "TelReciclador",
	"m_strTable" => "public.Recicladores",
	"m_srcTableName" => "public.Recicladores"
));

$proto18["m_sql"] = "\"TelReciclador\"";
$proto18["m_srcTableName"] = "public.Recicladores";
$proto18["m_expr"]=$obj;
$proto18["m_alias"] = "";
$obj = new SQLFieldListItem($proto18);

$proto0["m_fieldlist"][]=$obj;
						$proto20=array();
			$obj = new SQLField(array(
	"m_strName" => "LogoASO",
	"m_strTable" => "public.Recicladores",
	"m_srcTableName" => "public.Recicladores"
));

$proto20["m_sql"] = "\"LogoASO\"";
$proto20["m_srcTableName"] = "public.Recicladores";
$proto20["m_expr"]=$obj;
$proto20["m_alias"] = "";
$obj = new SQLFieldListItem($proto20);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto22=array();
$proto22["m_link"] = "SQLL_MAIN";
			$proto23=array();
$proto23["m_strName"] = "public.Recicladores";
$proto23["m_srcTableName"] = "public.Recicladores";
$proto23["m_columns"] = array();
$proto23["m_columns"][] = "IdReciclador";
$proto23["m_columns"][] = "FotoReciclador";
$proto23["m_columns"][] = "CIReciclador";
$proto23["m_columns"][] = "NomReciclador";
$proto23["m_columns"][] = "ApeReciclador";
$proto23["m_columns"][] = "DirReciclador";
$proto23["m_columns"][] = "TelReciclador";
$proto23["m_columns"][] = "LogoASO";
$obj = new SQLTable($proto23);

$proto22["m_table"] = $obj;
$proto22["m_sql"] = "\"public\".\"Recicladores\"";
$proto22["m_alias"] = "";
$proto22["m_srcTableName"] = "public.Recicladores";
$proto24=array();
$proto24["m_sql"] = "";
$proto24["m_uniontype"] = "SQLL_UNKNOWN";
	$obj = new SQLNonParsed(array(
	"m_sql" => ""
));

$proto24["m_column"]=$obj;
$proto24["m_contained"] = array();
$proto24["m_strCase"] = "";
$proto24["m_havingmode"] = false;
$proto24["m_inBrackets"] = false;
$proto24["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto24);

$proto22["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto22);

$proto0["m_fromlist"][]=$obj;
$proto0["m_groupby"] = array();
$proto0["m_orderby"] = array();
$proto0["m_srcTableName"]="public.Recicladores";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_recicladores = createSqlQuery_recicladores();


	
		;

								

$tdatarecicladores[".sqlquery"] = $queryData_recicladores;

$tableEvents["public.Recicladores"] = new eventsBase;
$tdatarecicladores[".hasEvents"] = false;

?>