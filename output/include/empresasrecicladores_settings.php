<?php



$tdataempresasrecicladores = array();
$tdataempresasrecicladores[".searchableFields"] = array();
$tdataempresasrecicladores[".ShortName"] = "empresasrecicladores";
$tdataempresasrecicladores[".OwnerID"] = "";
$tdataempresasrecicladores[".OriginalTable"] = "public.EmpresasRecicladores";


$defaultPages = my_json_decode( "{\"add\":\"add\",\"edit\":\"edit\",\"export\":\"export\",\"import\":\"import\",\"list\":\"list\",\"masterlist\":\"masterlist\",\"masterprint\":\"masterprint\",\"print\":\"print\",\"search\":\"search\",\"view\":\"view\"}" );

$tdataempresasrecicladores[".pagesByType"] = my_json_decode( "{\"add\":[\"add\"],\"edit\":[\"edit\"],\"export\":[\"export\"],\"import\":[\"import\"],\"list\":[\"list\"],\"masterlist\":[\"masterlist\"],\"masterprint\":[\"masterprint\"],\"print\":[\"print\"],\"search\":[\"search\"],\"view\":[\"view\"]}" );
$tdataempresasrecicladores[".pages"] = types2pages( my_json_decode( "{\"add\":[\"add\"],\"edit\":[\"edit\"],\"export\":[\"export\"],\"import\":[\"import\"],\"list\":[\"list\"],\"masterlist\":[\"masterlist\"],\"masterprint\":[\"masterprint\"],\"print\":[\"print\"],\"search\":[\"search\"],\"view\":[\"view\"]}" ) );
$tdataempresasrecicladores[".defaultPages"] = $defaultPages;

//	field labels
$fieldLabelsempresasrecicladores = array();
$fieldToolTipsempresasrecicladores = array();
$pageTitlesempresasrecicladores = array();
$placeHoldersempresasrecicladores = array();

if(mlang_getcurrentlang()=="Spanish")
{
	$fieldLabelsempresasrecicladores["Spanish"] = array();
	$fieldToolTipsempresasrecicladores["Spanish"] = array();
	$placeHoldersempresasrecicladores["Spanish"] = array();
	$pageTitlesempresasrecicladores["Spanish"] = array();
	$fieldLabelsempresasrecicladores["Spanish"]["IdEmpreRecicladora"] = "Código";
	$fieldToolTipsempresasrecicladores["Spanish"]["IdEmpreRecicladora"] = "";
	$placeHoldersempresasrecicladores["Spanish"]["IdEmpreRecicladora"] = "";
	$fieldLabelsempresasrecicladores["Spanish"]["RUCEmpre"] = "R.U.C.";
	$fieldToolTipsempresasrecicladores["Spanish"]["RUCEmpre"] = "";
	$placeHoldersempresasrecicladores["Spanish"]["RUCEmpre"] = "Cargue aqui R.U.C.";
	$fieldLabelsempresasrecicladores["Spanish"]["NombreEmpre"] = "Nombre";
	$fieldToolTipsempresasrecicladores["Spanish"]["NombreEmpre"] = "";
	$placeHoldersempresasrecicladores["Spanish"]["NombreEmpre"] = "Cargue aqui Nombre";
	$fieldLabelsempresasrecicladores["Spanish"]["DirecEmpre"] = "Dirección:";
	$fieldToolTipsempresasrecicladores["Spanish"]["DirecEmpre"] = "";
	$placeHoldersempresasrecicladores["Spanish"]["DirecEmpre"] = "Cargue aqui Dirección";
	$fieldLabelsempresasrecicladores["Spanish"]["TelEmpre"] = "Teléfono:";
	$fieldToolTipsempresasrecicladores["Spanish"]["TelEmpre"] = "";
	$placeHoldersempresasrecicladores["Spanish"]["TelEmpre"] = "Cargue aqui Teléfono";
	if (count($fieldToolTipsempresasrecicladores["Spanish"]))
		$tdataempresasrecicladores[".isUseToolTips"] = true;
}


	$tdataempresasrecicladores[".NCSearch"] = true;



$tdataempresasrecicladores[".shortTableName"] = "empresasrecicladores";
$tdataempresasrecicladores[".nSecOptions"] = 0;

$tdataempresasrecicladores[".mainTableOwnerID"] = "";
$tdataempresasrecicladores[".entityType"] = 0;

$tdataempresasrecicladores[".strOriginalTableName"] = "public.EmpresasRecicladores";

	



$tdataempresasrecicladores[".showAddInPopup"] = false;

$tdataempresasrecicladores[".showEditInPopup"] = false;

$tdataempresasrecicladores[".showViewInPopup"] = false;

//page's base css files names
$popupPagesLayoutNames = array();
$tdataempresasrecicladores[".popupPagesLayoutNames"] = $popupPagesLayoutNames;


$tdataempresasrecicladores[".listAjax"] = false;
//	temporary
$tdataempresasrecicladores[".listAjax"] = false;

	$tdataempresasrecicladores[".audit"] = false;

	$tdataempresasrecicladores[".locking"] = false;


$pages = $tdataempresasrecicladores[".defaultPages"];

if( $pages[PAGE_EDIT] ) {
	$tdataempresasrecicladores[".edit"] = true;
	$tdataempresasrecicladores[".afterEditAction"] = 1;
	$tdataempresasrecicladores[".closePopupAfterEdit"] = 1;
	$tdataempresasrecicladores[".afterEditActionDetTable"] = "";
}

if( $pages[PAGE_ADD] ) {
$tdataempresasrecicladores[".add"] = true;
$tdataempresasrecicladores[".afterAddAction"] = 1;
$tdataempresasrecicladores[".closePopupAfterAdd"] = 1;
$tdataempresasrecicladores[".afterAddActionDetTable"] = "";
}

if( $pages[PAGE_LIST] ) {
	$tdataempresasrecicladores[".list"] = true;
}



$tdataempresasrecicladores[".strSortControlSettingsJSON"] = "";




if( $pages[PAGE_VIEW] ) {
$tdataempresasrecicladores[".view"] = true;
}

if( $pages[PAGE_IMPORT] ) {
$tdataempresasrecicladores[".import"] = true;
}

if( $pages[PAGE_EXPORT] ) {
$tdataempresasrecicladores[".exportTo"] = true;
}

if( $pages[PAGE_PRINT] ) {
$tdataempresasrecicladores[".printFriendly"] = true;
}



$tdataempresasrecicladores[".showSimpleSearchOptions"] = true; // temp fix #13449

// Allow Show/Hide Fields in GRID
$tdataempresasrecicladores[".allowShowHideFields"] = true; // temp fix #13449
//

// Allow Fields Reordering in GRID
$tdataempresasrecicladores[".allowFieldsReordering"] = true; // temp fix #13449
//

$tdataempresasrecicladores[".isUseAjaxSuggest"] = true;

$tdataempresasrecicladores[".rowHighlite"] = true;



			

$tdataempresasrecicladores[".ajaxCodeSnippetAdded"] = false;

$tdataempresasrecicladores[".buttonsAdded"] = false;

$tdataempresasrecicladores[".addPageEvents"] = false;

// use timepicker for search panel
$tdataempresasrecicladores[".isUseTimeForSearch"] = false;


$tdataempresasrecicladores[".badgeColor"] = "00c2c5";


$tdataempresasrecicladores[".allSearchFields"] = array();
$tdataempresasrecicladores[".filterFields"] = array();
$tdataempresasrecicladores[".requiredSearchFields"] = array();

$tdataempresasrecicladores[".googleLikeFields"] = array();
$tdataempresasrecicladores[".googleLikeFields"][] = "IdEmpreRecicladora";
$tdataempresasrecicladores[".googleLikeFields"][] = "RUCEmpre";
$tdataempresasrecicladores[".googleLikeFields"][] = "NombreEmpre";
$tdataempresasrecicladores[".googleLikeFields"][] = "DirecEmpre";
$tdataempresasrecicladores[".googleLikeFields"][] = "TelEmpre";



$tdataempresasrecicladores[".tableType"] = "list";

$tdataempresasrecicladores[".printerPageOrientation"] = 0;
$tdataempresasrecicladores[".nPrinterPageScale"] = 100;

$tdataempresasrecicladores[".nPrinterSplitRecords"] = 40;

$tdataempresasrecicladores[".geocodingEnabled"] = false;










$tdataempresasrecicladores[".pageSize"] = 20;

$tdataempresasrecicladores[".warnLeavingPages"] = true;



$tstrOrderBy = "";
if(strlen($tstrOrderBy) && strtolower(substr($tstrOrderBy,0,8))!="order by")
	$tstrOrderBy = "order by ".$tstrOrderBy;
$tdataempresasrecicladores[".strOrderBy"] = $tstrOrderBy;

$tdataempresasrecicladores[".orderindexes"] = array();

$tdataempresasrecicladores[".sqlHead"] = "SELECT \"IdEmpreRecicladora\",  	\"RUCEmpre\",  	\"NombreEmpre\",  	\"DirecEmpre\",  	\"TelEmpre\"";
$tdataempresasrecicladores[".sqlFrom"] = "FROM \"public\".\"EmpresasRecicladores\"";
$tdataempresasrecicladores[".sqlWhereExpr"] = "";
$tdataempresasrecicladores[".sqlTail"] = "";










//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdataempresasrecicladores[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdataempresasrecicladores[".arrGroupsPerPage"] = $arrGPP;

$tdataempresasrecicladores[".highlightSearchResults"] = true;

$tableKeysempresasrecicladores = array();
$tableKeysempresasrecicladores[] = "IdEmpreRecicladora";
$tdataempresasrecicladores[".Keys"] = $tableKeysempresasrecicladores;


$tdataempresasrecicladores[".hideMobileList"] = array();




//	IdEmpreRecicladora
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "IdEmpreRecicladora";
	$fdata["GoodName"] = "IdEmpreRecicladora";
	$fdata["ownerTable"] = "public.EmpresasRecicladores";
	$fdata["Label"] = GetFieldLabel("public_EmpresasRecicladores","IdEmpreRecicladora");
	$fdata["FieldType"] = 3;

	
		$fdata["AutoInc"] = true;

	
			

		$fdata["strField"] = "IdEmpreRecicladora";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "\"IdEmpreRecicladora\"";

	
	
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


	$tdataempresasrecicladores["IdEmpreRecicladora"] = $fdata;
		$tdataempresasrecicladores[".searchableFields"][] = "IdEmpreRecicladora";
//	RUCEmpre
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "RUCEmpre";
	$fdata["GoodName"] = "RUCEmpre";
	$fdata["ownerTable"] = "public.EmpresasRecicladores";
	$fdata["Label"] = GetFieldLabel("public_EmpresasRecicladores","RUCEmpre");
	$fdata["FieldType"] = 200;

	
	
	
			

		$fdata["strField"] = "RUCEmpre";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "\"RUCEmpre\"";

	
	
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
	
	
	//	End validation

	
			
	
	
	
	$fdata["EditFormats"]["edit"] = $edata;
	$edata = array("EditFormat" => "Text field");

	
		$edata["weekdayMessage"] = array("message" => "", "messageType" => "Text");
	$edata["weekdays"] = "[]";


	
	



	
	
	
	
			$edata["acceptFileTypes"] = ".+$";
		$edata["acceptFileTypesHtml"] = "";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
	
			$edata["HTML5InuptType"] = "text";

		$edata["EditParams"] = "";
			$edata["EditParams"].= " maxlength=20";

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


	$tdataempresasrecicladores["RUCEmpre"] = $fdata;
		$tdataempresasrecicladores[".searchableFields"][] = "RUCEmpre";
//	NombreEmpre
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "NombreEmpre";
	$fdata["GoodName"] = "NombreEmpre";
	$fdata["ownerTable"] = "public.EmpresasRecicladores";
	$fdata["Label"] = GetFieldLabel("public_EmpresasRecicladores","NombreEmpre");
	$fdata["FieldType"] = 200;

	
	
	
			

		$fdata["strField"] = "NombreEmpre";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "\"NombreEmpre\"";

	
	
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


	$tdataempresasrecicladores["NombreEmpre"] = $fdata;
		$tdataempresasrecicladores[".searchableFields"][] = "NombreEmpre";
//	DirecEmpre
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "DirecEmpre";
	$fdata["GoodName"] = "DirecEmpre";
	$fdata["ownerTable"] = "public.EmpresasRecicladores";
	$fdata["Label"] = GetFieldLabel("public_EmpresasRecicladores","DirecEmpre");
	$fdata["FieldType"] = 200;

	
	
	
			

		$fdata["strField"] = "DirecEmpre";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "\"DirecEmpre\"";

	
	
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


	$tdataempresasrecicladores["DirecEmpre"] = $fdata;
		$tdataempresasrecicladores[".searchableFields"][] = "DirecEmpre";
//	TelEmpre
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 5;
	$fdata["strName"] = "TelEmpre";
	$fdata["GoodName"] = "TelEmpre";
	$fdata["ownerTable"] = "public.EmpresasRecicladores";
	$fdata["Label"] = GetFieldLabel("public_EmpresasRecicladores","TelEmpre");
	$fdata["FieldType"] = 200;

	
	
	
			

		$fdata["strField"] = "TelEmpre";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "\"TelEmpre\"";

	
	
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

	
	
	
	
			$edata["HTML5InuptType"] = "tel";

		$edata["EditParams"] = "";
		
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


	$tdataempresasrecicladores["TelEmpre"] = $fdata;
		$tdataempresasrecicladores[".searchableFields"][] = "TelEmpre";


$tables_data["public.EmpresasRecicladores"]=&$tdataempresasrecicladores;
$field_labels["public_EmpresasRecicladores"] = &$fieldLabelsempresasrecicladores;
$fieldToolTips["public_EmpresasRecicladores"] = &$fieldToolTipsempresasrecicladores;
$placeHolders["public_EmpresasRecicladores"] = &$placeHoldersempresasrecicladores;
$page_titles["public_EmpresasRecicladores"] = &$pageTitlesempresasrecicladores;

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)
$detailsTablesData["public.EmpresasRecicladores"] = array();
//	public.Ventas
	
	

		$dIndex = 0;
	$detailsParam = array();
	$detailsParam["dDataSourceTable"]="public.Ventas";
		$detailsParam["dOriginalTable"] = "public.Ventas";



				$detailsParam["dType"]=PAGE_LIST;
	$detailsParam["dShortTable"] = "ventas";
	$detailsParam["dCaptionTable"] = GetTableCaption("public_Ventas");
	$detailsParam["masterKeys"] =array();
	$detailsParam["detailKeys"] =array();


		
	$detailsTablesData["public.EmpresasRecicladores"][$dIndex] = $detailsParam;

	
		$detailsTablesData["public.EmpresasRecicladores"][$dIndex]["masterKeys"] = array();

	$detailsTablesData["public.EmpresasRecicladores"][$dIndex]["masterKeys"][]="IdEmpreRecicladora";

				$detailsTablesData["public.EmpresasRecicladores"][$dIndex]["detailKeys"] = array();

	$detailsTablesData["public.EmpresasRecicladores"][$dIndex]["detailKeys"][]="IdEmpreRecicladora";

// tables which are master tables for current table (detail)
$masterTablesData["public.EmpresasRecicladores"] = array();



// -----------------end  prepare master-details data arrays ------------------------------//


require_once(getabspath("classes/sql.php"));










function createSqlQuery_empresasrecicladores()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "\"IdEmpreRecicladora\",  	\"RUCEmpre\",  	\"NombreEmpre\",  	\"DirecEmpre\",  	\"TelEmpre\"";
$proto0["m_strFrom"] = "FROM \"public\".\"EmpresasRecicladores\"";
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
	"m_strName" => "IdEmpreRecicladora",
	"m_strTable" => "public.EmpresasRecicladores",
	"m_srcTableName" => "public.EmpresasRecicladores"
));

$proto6["m_sql"] = "\"IdEmpreRecicladora\"";
$proto6["m_srcTableName"] = "public.EmpresasRecicladores";
$proto6["m_expr"]=$obj;
$proto6["m_alias"] = "";
$obj = new SQLFieldListItem($proto6);

$proto0["m_fieldlist"][]=$obj;
						$proto8=array();
			$obj = new SQLField(array(
	"m_strName" => "RUCEmpre",
	"m_strTable" => "public.EmpresasRecicladores",
	"m_srcTableName" => "public.EmpresasRecicladores"
));

$proto8["m_sql"] = "\"RUCEmpre\"";
$proto8["m_srcTableName"] = "public.EmpresasRecicladores";
$proto8["m_expr"]=$obj;
$proto8["m_alias"] = "";
$obj = new SQLFieldListItem($proto8);

$proto0["m_fieldlist"][]=$obj;
						$proto10=array();
			$obj = new SQLField(array(
	"m_strName" => "NombreEmpre",
	"m_strTable" => "public.EmpresasRecicladores",
	"m_srcTableName" => "public.EmpresasRecicladores"
));

$proto10["m_sql"] = "\"NombreEmpre\"";
$proto10["m_srcTableName"] = "public.EmpresasRecicladores";
$proto10["m_expr"]=$obj;
$proto10["m_alias"] = "";
$obj = new SQLFieldListItem($proto10);

$proto0["m_fieldlist"][]=$obj;
						$proto12=array();
			$obj = new SQLField(array(
	"m_strName" => "DirecEmpre",
	"m_strTable" => "public.EmpresasRecicladores",
	"m_srcTableName" => "public.EmpresasRecicladores"
));

$proto12["m_sql"] = "\"DirecEmpre\"";
$proto12["m_srcTableName"] = "public.EmpresasRecicladores";
$proto12["m_expr"]=$obj;
$proto12["m_alias"] = "";
$obj = new SQLFieldListItem($proto12);

$proto0["m_fieldlist"][]=$obj;
						$proto14=array();
			$obj = new SQLField(array(
	"m_strName" => "TelEmpre",
	"m_strTable" => "public.EmpresasRecicladores",
	"m_srcTableName" => "public.EmpresasRecicladores"
));

$proto14["m_sql"] = "\"TelEmpre\"";
$proto14["m_srcTableName"] = "public.EmpresasRecicladores";
$proto14["m_expr"]=$obj;
$proto14["m_alias"] = "";
$obj = new SQLFieldListItem($proto14);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto16=array();
$proto16["m_link"] = "SQLL_MAIN";
			$proto17=array();
$proto17["m_strName"] = "public.EmpresasRecicladores";
$proto17["m_srcTableName"] = "public.EmpresasRecicladores";
$proto17["m_columns"] = array();
$proto17["m_columns"][] = "IdEmpreRecicladora";
$proto17["m_columns"][] = "RUCEmpre";
$proto17["m_columns"][] = "NombreEmpre";
$proto17["m_columns"][] = "DirecEmpre";
$proto17["m_columns"][] = "TelEmpre";
$obj = new SQLTable($proto17);

$proto16["m_table"] = $obj;
$proto16["m_sql"] = "\"public\".\"EmpresasRecicladores\"";
$proto16["m_alias"] = "";
$proto16["m_srcTableName"] = "public.EmpresasRecicladores";
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
$proto0["m_srcTableName"]="public.EmpresasRecicladores";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_empresasrecicladores = createSqlQuery_empresasrecicladores();


	
		;

					

$tdataempresasrecicladores[".sqlquery"] = $queryData_empresasrecicladores;

$tableEvents["public.EmpresasRecicladores"] = new eventsBase;
$tdataempresasrecicladores[".hasEvents"] = false;

?>