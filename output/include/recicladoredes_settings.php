<?php



$tdatarecicladoredes = array();
$tdatarecicladoredes[".searchableFields"] = array();
$tdatarecicladoredes[".ShortName"] = "recicladoredes";
$tdatarecicladoredes[".OwnerID"] = "";
$tdatarecicladoredes[".OriginalTable"] = "public.Recicladoredes";


$defaultPages = my_json_decode( "{\"add\":\"add\",\"edit\":\"edit\",\"export\":\"export\",\"import\":\"import\",\"list\":\"list1\",\"print\":\"print\",\"search\":\"search\",\"view\":\"view\"}" );

$tdatarecicladoredes[".pagesByType"] = my_json_decode( "{\"add\":[\"add\"],\"edit\":[\"edit\"],\"export\":[\"export\"],\"import\":[\"import\"],\"list\":[\"list1\"],\"print\":[\"print\"],\"search\":[\"search\"],\"view\":[\"view\"]}" );
$tdatarecicladoredes[".pages"] = types2pages( my_json_decode( "{\"add\":[\"add\"],\"edit\":[\"edit\"],\"export\":[\"export\"],\"import\":[\"import\"],\"list\":[\"list1\"],\"print\":[\"print\"],\"search\":[\"search\"],\"view\":[\"view\"]}" ) );
$tdatarecicladoredes[".defaultPages"] = $defaultPages;

//	field labels
$fieldLabelsrecicladoredes = array();
$fieldToolTipsrecicladoredes = array();
$pageTitlesrecicladoredes = array();
$placeHoldersrecicladoredes = array();

if(mlang_getcurrentlang()=="Spanish")
{
	$fieldLabelsrecicladoredes["Spanish"] = array();
	$fieldToolTipsrecicladoredes["Spanish"] = array();
	$placeHoldersrecicladoredes["Spanish"] = array();
	$pageTitlesrecicladoredes["Spanish"] = array();
	$fieldLabelsrecicladoredes["Spanish"]["IdReciclador"] = "Id Reciclador";
	$fieldToolTipsrecicladoredes["Spanish"]["IdReciclador"] = "";
	$placeHoldersrecicladoredes["Spanish"]["IdReciclador"] = "";
	$fieldLabelsrecicladoredes["Spanish"]["FotoReciclador"] = "Perfil de Reciclador";
	$fieldToolTipsrecicladoredes["Spanish"]["FotoReciclador"] = "";
	$placeHoldersrecicladoredes["Spanish"]["FotoReciclador"] = "";
	$fieldLabelsrecicladoredes["Spanish"]["NomReciclador"] = "Nombre/s:";
	$fieldToolTipsrecicladoredes["Spanish"]["NomReciclador"] = "";
	$placeHoldersrecicladoredes["Spanish"]["NomReciclador"] = "";
	$fieldLabelsrecicladoredes["Spanish"]["ApeReciclador"] = "Apellido/s:";
	$fieldToolTipsrecicladoredes["Spanish"]["ApeReciclador"] = "";
	$placeHoldersrecicladoredes["Spanish"]["ApeReciclador"] = "";
	$fieldLabelsrecicladoredes["Spanish"]["DirReciclador"] = "Dirección:";
	$fieldToolTipsrecicladoredes["Spanish"]["DirReciclador"] = "";
	$placeHoldersrecicladoredes["Spanish"]["DirReciclador"] = "";
	$fieldLabelsrecicladoredes["Spanish"]["TelReciclador"] = "Teléfono:";
	$fieldToolTipsrecicladoredes["Spanish"]["TelReciclador"] = "";
	$placeHoldersrecicladoredes["Spanish"]["TelReciclador"] = "";
	if (count($fieldToolTipsrecicladoredes["Spanish"]))
		$tdatarecicladoredes[".isUseToolTips"] = true;
}


	$tdatarecicladoredes[".NCSearch"] = true;



$tdatarecicladoredes[".shortTableName"] = "recicladoredes";
$tdatarecicladoredes[".nSecOptions"] = 0;

$tdatarecicladoredes[".mainTableOwnerID"] = "";
$tdatarecicladoredes[".entityType"] = 0;

$tdatarecicladoredes[".strOriginalTableName"] = "public.Recicladoredes";

	



$tdatarecicladoredes[".showAddInPopup"] = false;

$tdatarecicladoredes[".showEditInPopup"] = false;

$tdatarecicladoredes[".showViewInPopup"] = false;

//page's base css files names
$popupPagesLayoutNames = array();
$tdatarecicladoredes[".popupPagesLayoutNames"] = $popupPagesLayoutNames;


$tdatarecicladoredes[".listAjax"] = false;
//	temporary
$tdatarecicladoredes[".listAjax"] = false;

	$tdatarecicladoredes[".audit"] = false;

	$tdatarecicladoredes[".locking"] = false;


$pages = $tdatarecicladoredes[".defaultPages"];

if( $pages[PAGE_EDIT] ) {
	$tdatarecicladoredes[".edit"] = true;
	$tdatarecicladoredes[".afterEditAction"] = 0;
	$tdatarecicladoredes[".closePopupAfterEdit"] = 1;
	$tdatarecicladoredes[".afterEditActionDetTable"] = "Detail tables not found!";
}

if( $pages[PAGE_ADD] ) {
$tdatarecicladoredes[".add"] = true;
$tdatarecicladoredes[".afterAddAction"] = 1;
$tdatarecicladoredes[".closePopupAfterAdd"] = 1;
$tdatarecicladoredes[".afterAddActionDetTable"] = "";
}

if( $pages[PAGE_LIST] ) {
	$tdatarecicladoredes[".list"] = true;
}



$tdatarecicladoredes[".strSortControlSettingsJSON"] = "";




if( $pages[PAGE_VIEW] ) {
$tdatarecicladoredes[".view"] = true;
}

if( $pages[PAGE_IMPORT] ) {
$tdatarecicladoredes[".import"] = true;
}

if( $pages[PAGE_EXPORT] ) {
$tdatarecicladoredes[".exportTo"] = true;
}

if( $pages[PAGE_PRINT] ) {
$tdatarecicladoredes[".printFriendly"] = true;
}



$tdatarecicladoredes[".showSimpleSearchOptions"] = true; // temp fix #13449

// Allow Show/Hide Fields in GRID
$tdatarecicladoredes[".allowShowHideFields"] = true; // temp fix #13449
//

// Allow Fields Reordering in GRID
$tdatarecicladoredes[".allowFieldsReordering"] = true; // temp fix #13449
//

$tdatarecicladoredes[".isUseAjaxSuggest"] = true;

$tdatarecicladoredes[".rowHighlite"] = true;





$tdatarecicladoredes[".ajaxCodeSnippetAdded"] = false;

$tdatarecicladoredes[".buttonsAdded"] = false;

$tdatarecicladoredes[".addPageEvents"] = false;

// use timepicker for search panel
$tdatarecicladoredes[".isUseTimeForSearch"] = false;


$tdatarecicladoredes[".badgeColor"] = "CD853F";


$tdatarecicladoredes[".allSearchFields"] = array();
$tdatarecicladoredes[".filterFields"] = array();
$tdatarecicladoredes[".requiredSearchFields"] = array();

$tdatarecicladoredes[".googleLikeFields"] = array();
$tdatarecicladoredes[".googleLikeFields"][] = "IdReciclador";
$tdatarecicladoredes[".googleLikeFields"][] = "FotoReciclador";
$tdatarecicladoredes[".googleLikeFields"][] = "NomReciclador";
$tdatarecicladoredes[".googleLikeFields"][] = "ApeReciclador";
$tdatarecicladoredes[".googleLikeFields"][] = "DirReciclador";
$tdatarecicladoredes[".googleLikeFields"][] = "TelReciclador";



$tdatarecicladoredes[".tableType"] = "list";

$tdatarecicladoredes[".printerPageOrientation"] = 0;
$tdatarecicladoredes[".nPrinterPageScale"] = 100;

$tdatarecicladoredes[".nPrinterSplitRecords"] = 40;

$tdatarecicladoredes[".geocodingEnabled"] = false;










$tdatarecicladoredes[".pageSize"] = 20;

$tdatarecicladoredes[".warnLeavingPages"] = true;



$tstrOrderBy = "";
if(strlen($tstrOrderBy) && strtolower(substr($tstrOrderBy,0,8))!="order by")
	$tstrOrderBy = "order by ".$tstrOrderBy;
$tdatarecicladoredes[".strOrderBy"] = $tstrOrderBy;

$tdatarecicladoredes[".orderindexes"] = array();

$tdatarecicladoredes[".sqlHead"] = "SELECT \"IdReciclador\",  	\"FotoReciclador\",  	\"NomReciclador\",  	\"ApeReciclador\",  	\"DirReciclador\",  	\"TelReciclador\"";
$tdatarecicladoredes[".sqlFrom"] = "FROM \"public\".\"Recicladoredes\"";
$tdatarecicladoredes[".sqlWhereExpr"] = "";
$tdatarecicladoredes[".sqlTail"] = "";










//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdatarecicladoredes[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdatarecicladoredes[".arrGroupsPerPage"] = $arrGPP;

$tdatarecicladoredes[".highlightSearchResults"] = true;

$tableKeysrecicladoredes = array();
$tableKeysrecicladoredes[] = "IdReciclador";
$tdatarecicladoredes[".Keys"] = $tableKeysrecicladoredes;


$tdatarecicladoredes[".hideMobileList"] = array();




//	IdReciclador
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "IdReciclador";
	$fdata["GoodName"] = "IdReciclador";
	$fdata["ownerTable"] = "public.Recicladoredes";
	$fdata["Label"] = GetFieldLabel("public_Recicladoredes","IdReciclador");
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


	$tdatarecicladoredes["IdReciclador"] = $fdata;
		$tdatarecicladoredes[".searchableFields"][] = "IdReciclador";
//	FotoReciclador
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "FotoReciclador";
	$fdata["GoodName"] = "FotoReciclador";
	$fdata["ownerTable"] = "public.Recicladoredes";
	$fdata["Label"] = GetFieldLabel("public_Recicladoredes","FotoReciclador");
	$fdata["FieldType"] = 200;

	
	
	
			

		$fdata["strField"] = "FotoReciclador";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "\"FotoReciclador\"";

	
	
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "File-based Image");

	
	
				$vdata["ImageWidth"] = 300;
	$vdata["ImageHeight"] = 200;

			$vdata["multipleImgMode"] = 2;
	$vdata["maxImages"] = 0;

			$vdata["showGallery"] = true;
	$vdata["galleryMode"] = 1;
	$vdata["captionMode"] = 2;
	$vdata["captionField"] = "";

	$vdata["imageBorder"] = 1;
	$vdata["imageFullWidth"] = 0;


	
	
	
	
	
	
	
	
	
	
	
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


	$tdatarecicladoredes["FotoReciclador"] = $fdata;
		$tdatarecicladoredes[".searchableFields"][] = "FotoReciclador";
//	NomReciclador
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "NomReciclador";
	$fdata["GoodName"] = "NomReciclador";
	$fdata["ownerTable"] = "public.Recicladoredes";
	$fdata["Label"] = GetFieldLabel("public_Recicladoredes","NomReciclador");
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


	$tdatarecicladoredes["NomReciclador"] = $fdata;
		$tdatarecicladoredes[".searchableFields"][] = "NomReciclador";
//	ApeReciclador
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "ApeReciclador";
	$fdata["GoodName"] = "ApeReciclador";
	$fdata["ownerTable"] = "public.Recicladoredes";
	$fdata["Label"] = GetFieldLabel("public_Recicladoredes","ApeReciclador");
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


	$tdatarecicladoredes["ApeReciclador"] = $fdata;
		$tdatarecicladoredes[".searchableFields"][] = "ApeReciclador";
//	DirReciclador
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 5;
	$fdata["strName"] = "DirReciclador";
	$fdata["GoodName"] = "DirReciclador";
	$fdata["ownerTable"] = "public.Recicladoredes";
	$fdata["Label"] = GetFieldLabel("public_Recicladoredes","DirReciclador");
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


	$tdatarecicladoredes["DirReciclador"] = $fdata;
		$tdatarecicladoredes[".searchableFields"][] = "DirReciclador";
//	TelReciclador
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 6;
	$fdata["strName"] = "TelReciclador";
	$fdata["GoodName"] = "TelReciclador";
	$fdata["ownerTable"] = "public.Recicladoredes";
	$fdata["Label"] = GetFieldLabel("public_Recicladoredes","TelReciclador");
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


	$tdatarecicladoredes["TelReciclador"] = $fdata;
		$tdatarecicladoredes[".searchableFields"][] = "TelReciclador";


$tables_data["public.Recicladoredes"]=&$tdatarecicladoredes;
$field_labels["public_Recicladoredes"] = &$fieldLabelsrecicladoredes;
$fieldToolTips["public_Recicladoredes"] = &$fieldToolTipsrecicladoredes;
$placeHolders["public_Recicladoredes"] = &$placeHoldersrecicladoredes;
$page_titles["public_Recicladoredes"] = &$pageTitlesrecicladoredes;

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)
$detailsTablesData["public.Recicladoredes"] = array();

// tables which are master tables for current table (detail)
$masterTablesData["public.Recicladoredes"] = array();



// -----------------end  prepare master-details data arrays ------------------------------//


require_once(getabspath("classes/sql.php"));










function createSqlQuery_recicladoredes()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "\"IdReciclador\",  	\"FotoReciclador\",  	\"NomReciclador\",  	\"ApeReciclador\",  	\"DirReciclador\",  	\"TelReciclador\"";
$proto0["m_strFrom"] = "FROM \"public\".\"Recicladoredes\"";
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
	"m_strTable" => "public.Recicladoredes",
	"m_srcTableName" => "public.Recicladoredes"
));

$proto6["m_sql"] = "\"IdReciclador\"";
$proto6["m_srcTableName"] = "public.Recicladoredes";
$proto6["m_expr"]=$obj;
$proto6["m_alias"] = "";
$obj = new SQLFieldListItem($proto6);

$proto0["m_fieldlist"][]=$obj;
						$proto8=array();
			$obj = new SQLField(array(
	"m_strName" => "FotoReciclador",
	"m_strTable" => "public.Recicladoredes",
	"m_srcTableName" => "public.Recicladoredes"
));

$proto8["m_sql"] = "\"FotoReciclador\"";
$proto8["m_srcTableName"] = "public.Recicladoredes";
$proto8["m_expr"]=$obj;
$proto8["m_alias"] = "";
$obj = new SQLFieldListItem($proto8);

$proto0["m_fieldlist"][]=$obj;
						$proto10=array();
			$obj = new SQLField(array(
	"m_strName" => "NomReciclador",
	"m_strTable" => "public.Recicladoredes",
	"m_srcTableName" => "public.Recicladoredes"
));

$proto10["m_sql"] = "\"NomReciclador\"";
$proto10["m_srcTableName"] = "public.Recicladoredes";
$proto10["m_expr"]=$obj;
$proto10["m_alias"] = "";
$obj = new SQLFieldListItem($proto10);

$proto0["m_fieldlist"][]=$obj;
						$proto12=array();
			$obj = new SQLField(array(
	"m_strName" => "ApeReciclador",
	"m_strTable" => "public.Recicladoredes",
	"m_srcTableName" => "public.Recicladoredes"
));

$proto12["m_sql"] = "\"ApeReciclador\"";
$proto12["m_srcTableName"] = "public.Recicladoredes";
$proto12["m_expr"]=$obj;
$proto12["m_alias"] = "";
$obj = new SQLFieldListItem($proto12);

$proto0["m_fieldlist"][]=$obj;
						$proto14=array();
			$obj = new SQLField(array(
	"m_strName" => "DirReciclador",
	"m_strTable" => "public.Recicladoredes",
	"m_srcTableName" => "public.Recicladoredes"
));

$proto14["m_sql"] = "\"DirReciclador\"";
$proto14["m_srcTableName"] = "public.Recicladoredes";
$proto14["m_expr"]=$obj;
$proto14["m_alias"] = "";
$obj = new SQLFieldListItem($proto14);

$proto0["m_fieldlist"][]=$obj;
						$proto16=array();
			$obj = new SQLField(array(
	"m_strName" => "TelReciclador",
	"m_strTable" => "public.Recicladoredes",
	"m_srcTableName" => "public.Recicladoredes"
));

$proto16["m_sql"] = "\"TelReciclador\"";
$proto16["m_srcTableName"] = "public.Recicladoredes";
$proto16["m_expr"]=$obj;
$proto16["m_alias"] = "";
$obj = new SQLFieldListItem($proto16);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto18=array();
$proto18["m_link"] = "SQLL_MAIN";
			$proto19=array();
$proto19["m_strName"] = "public.Recicladoredes";
$proto19["m_srcTableName"] = "public.Recicladoredes";
$proto19["m_columns"] = array();
$proto19["m_columns"][] = "IdReciclador";
$proto19["m_columns"][] = "FotoReciclador";
$proto19["m_columns"][] = "NomReciclador";
$proto19["m_columns"][] = "ApeReciclador";
$proto19["m_columns"][] = "DirReciclador";
$proto19["m_columns"][] = "TelReciclador";
$obj = new SQLTable($proto19);

$proto18["m_table"] = $obj;
$proto18["m_sql"] = "\"public\".\"Recicladoredes\"";
$proto18["m_alias"] = "";
$proto18["m_srcTableName"] = "public.Recicladoredes";
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
$proto0["m_srcTableName"]="public.Recicladoredes";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_recicladoredes = createSqlQuery_recicladoredes();


	
		;

						

$tdatarecicladoredes[".sqlquery"] = $queryData_recicladoredes;

$tableEvents["public.Recicladoredes"] = new eventsBase;
$tdatarecicladoredes[".hasEvents"] = false;

?>