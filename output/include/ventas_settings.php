<?php



$tdataventas = array();
$tdataventas[".searchableFields"] = array();
$tdataventas[".ShortName"] = "ventas";
$tdataventas[".OwnerID"] = "";
$tdataventas[".OriginalTable"] = "public.Ventas";


$defaultPages = my_json_decode( "{\"add\":\"add\",\"edit\":\"edit\",\"export\":\"export\",\"import\":\"import\",\"list\":\"list\",\"masterlist\":\"masterlist\",\"masterprint\":\"masterprint\",\"print\":\"print\",\"search\":\"search\",\"view\":\"view\"}" );

$tdataventas[".pagesByType"] = my_json_decode( "{\"add\":[\"add\"],\"edit\":[\"edit\"],\"export\":[\"export\"],\"import\":[\"import\"],\"list\":[\"list\"],\"masterlist\":[\"masterlist\"],\"masterprint\":[\"masterprint\"],\"print\":[\"print\"],\"search\":[\"search\"],\"view\":[\"view\"]}" );
$tdataventas[".pages"] = types2pages( my_json_decode( "{\"add\":[\"add\"],\"edit\":[\"edit\"],\"export\":[\"export\"],\"import\":[\"import\"],\"list\":[\"list\"],\"masterlist\":[\"masterlist\"],\"masterprint\":[\"masterprint\"],\"print\":[\"print\"],\"search\":[\"search\"],\"view\":[\"view\"]}" ) );
$tdataventas[".defaultPages"] = $defaultPages;

//	field labels
$fieldLabelsventas = array();
$fieldToolTipsventas = array();
$pageTitlesventas = array();
$placeHoldersventas = array();

if(mlang_getcurrentlang()=="Spanish")
{
	$fieldLabelsventas["Spanish"] = array();
	$fieldToolTipsventas["Spanish"] = array();
	$placeHoldersventas["Spanish"] = array();
	$pageTitlesventas["Spanish"] = array();
	$fieldLabelsventas["Spanish"]["IdVenta"] = "Cod. Ventas";
	$fieldToolTipsventas["Spanish"]["IdVenta"] = "";
	$placeHoldersventas["Spanish"]["IdVenta"] = "";
	$fieldLabelsventas["Spanish"]["FechaVenta"] = "Fecha Venta";
	$fieldToolTipsventas["Spanish"]["FechaVenta"] = "";
	$placeHoldersventas["Spanish"]["FechaVenta"] = "";
	$fieldLabelsventas["Spanish"]["Observaci_n"] = "Observación";
	$fieldToolTipsventas["Spanish"]["Observaci_n"] = "";
	$placeHoldersventas["Spanish"]["Observaci_n"] = "Cargue aquí observaciones";
	$fieldLabelsventas["Spanish"]["IdEmpreRecicladora"] = "Venta Empresa Recicladora";
	$fieldToolTipsventas["Spanish"]["IdEmpreRecicladora"] = "";
	$placeHoldersventas["Spanish"]["IdEmpreRecicladora"] = "";
	if (count($fieldToolTipsventas["Spanish"]))
		$tdataventas[".isUseToolTips"] = true;
}


	$tdataventas[".NCSearch"] = true;



$tdataventas[".shortTableName"] = "ventas";
$tdataventas[".nSecOptions"] = 0;

$tdataventas[".mainTableOwnerID"] = "";
$tdataventas[".entityType"] = 0;

$tdataventas[".strOriginalTableName"] = "public.Ventas";

	



$tdataventas[".showAddInPopup"] = false;

$tdataventas[".showEditInPopup"] = false;

$tdataventas[".showViewInPopup"] = false;

//page's base css files names
$popupPagesLayoutNames = array();
$tdataventas[".popupPagesLayoutNames"] = $popupPagesLayoutNames;


$tdataventas[".listAjax"] = false;
//	temporary
$tdataventas[".listAjax"] = false;

	$tdataventas[".audit"] = false;

	$tdataventas[".locking"] = false;


$pages = $tdataventas[".defaultPages"];

if( $pages[PAGE_EDIT] ) {
	$tdataventas[".edit"] = true;
	$tdataventas[".afterEditAction"] = 1;
	$tdataventas[".closePopupAfterEdit"] = 1;
	$tdataventas[".afterEditActionDetTable"] = "";
}

if( $pages[PAGE_ADD] ) {
$tdataventas[".add"] = true;
$tdataventas[".afterAddAction"] = 1;
$tdataventas[".closePopupAfterAdd"] = 1;
$tdataventas[".afterAddActionDetTable"] = "";
}

if( $pages[PAGE_LIST] ) {
	$tdataventas[".list"] = true;
}



$tdataventas[".strSortControlSettingsJSON"] = "";




if( $pages[PAGE_VIEW] ) {
$tdataventas[".view"] = true;
}

if( $pages[PAGE_IMPORT] ) {
$tdataventas[".import"] = true;
}

if( $pages[PAGE_EXPORT] ) {
$tdataventas[".exportTo"] = true;
}

if( $pages[PAGE_PRINT] ) {
$tdataventas[".printFriendly"] = true;
}



$tdataventas[".showSimpleSearchOptions"] = true; // temp fix #13449

// Allow Show/Hide Fields in GRID
$tdataventas[".allowShowHideFields"] = true; // temp fix #13449
//

// Allow Fields Reordering in GRID
$tdataventas[".allowFieldsReordering"] = true; // temp fix #13449
//

$tdataventas[".isUseAjaxSuggest"] = true;

$tdataventas[".rowHighlite"] = true;



						

$tdataventas[".ajaxCodeSnippetAdded"] = false;

$tdataventas[".buttonsAdded"] = false;

$tdataventas[".addPageEvents"] = false;

// use timepicker for search panel
$tdataventas[".isUseTimeForSearch"] = false;


$tdataventas[".badgeColor"] = "db7093";


$tdataventas[".allSearchFields"] = array();
$tdataventas[".filterFields"] = array();
$tdataventas[".requiredSearchFields"] = array();

$tdataventas[".googleLikeFields"] = array();
$tdataventas[".googleLikeFields"][] = "IdVenta";
$tdataventas[".googleLikeFields"][] = "FechaVenta";
$tdataventas[".googleLikeFields"][] = "Observación";
$tdataventas[".googleLikeFields"][] = "IdEmpreRecicladora";



$tdataventas[".tableType"] = "list";

$tdataventas[".printerPageOrientation"] = 0;
$tdataventas[".nPrinterPageScale"] = 100;

$tdataventas[".nPrinterSplitRecords"] = 40;

$tdataventas[".geocodingEnabled"] = false;










$tdataventas[".pageSize"] = 20;

$tdataventas[".warnLeavingPages"] = true;



$tstrOrderBy = "";
if(strlen($tstrOrderBy) && strtolower(substr($tstrOrderBy,0,8))!="order by")
	$tstrOrderBy = "order by ".$tstrOrderBy;
$tdataventas[".strOrderBy"] = $tstrOrderBy;

$tdataventas[".orderindexes"] = array();

$tdataventas[".sqlHead"] = "SELECT \"IdVenta\",  	\"FechaVenta\",  	\"Observación\",  	\"IdEmpreRecicladora\"";
$tdataventas[".sqlFrom"] = "FROM \"public\".\"Ventas\"";
$tdataventas[".sqlWhereExpr"] = "";
$tdataventas[".sqlTail"] = "";










//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdataventas[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdataventas[".arrGroupsPerPage"] = $arrGPP;

$tdataventas[".highlightSearchResults"] = true;

$tableKeysventas = array();
$tableKeysventas[] = "IdVenta";
$tdataventas[".Keys"] = $tableKeysventas;


$tdataventas[".hideMobileList"] = array();




//	IdVenta
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "IdVenta";
	$fdata["GoodName"] = "IdVenta";
	$fdata["ownerTable"] = "public.Ventas";
	$fdata["Label"] = GetFieldLabel("public_Ventas","IdVenta");
	$fdata["FieldType"] = 3;

	
		$fdata["AutoInc"] = true;

	
			

		$fdata["strField"] = "IdVenta";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "\"IdVenta\"";

	
	
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


	$tdataventas["IdVenta"] = $fdata;
		$tdataventas[".searchableFields"][] = "IdVenta";
//	FechaVenta
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "FechaVenta";
	$fdata["GoodName"] = "FechaVenta";
	$fdata["ownerTable"] = "public.Ventas";
	$fdata["Label"] = GetFieldLabel("public_Ventas","FechaVenta");
	$fdata["FieldType"] = 7;

	
	
	
			

		$fdata["strField"] = "FechaVenta";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "\"FechaVenta\"";

	
	
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "Short Date");

	
	
	
	
	
	
	
	
	
	
	
	
		$vdata["NeedEncode"] = true;

	
		$vdata["truncateText"] = true;
	$vdata["NumberOfChars"] = 80;

	$fdata["ViewFormats"]["view"] = $vdata;
	$vdata = array("ViewFormat" => "Short Date");

	
	
	
	
	
	
	
	
	
	
	
	
		$vdata["NeedEncode"] = true;

	
		$vdata["truncateText"] = true;
	$vdata["NumberOfChars"] = 80;

	$fdata["ViewFormats"]["list"] = $vdata;
	$vdata = array("ViewFormat" => "Short Date");

	
	
	
	
	
	
	
	
	
	
	
	
		$vdata["NeedEncode"] = true;

	
		$vdata["truncateText"] = true;
	$vdata["NumberOfChars"] = 80;

	$fdata["ViewFormats"]["print"] = $vdata;
	$vdata = array("ViewFormat" => "Short Date");

	
	
	
	
	
	
	
	
	
	
	
	
		$vdata["NeedEncode"] = true;

	
		$vdata["truncateText"] = true;
	$vdata["NumberOfChars"] = 80;

	$fdata["ViewFormats"]["export"] = $vdata;
	$vdata = array("ViewFormat" => "Short Date");

	
	
	
	
	
	
	
	
	
	
	
	
		$vdata["NeedEncode"] = true;

	
		$vdata["truncateText"] = true;
	$vdata["NumberOfChars"] = 80;

	$fdata["ViewFormats"]["masterlist"] = $vdata;
	$vdata = array("ViewFormat" => "Short Date");

	
	
	
	
	
	
	
	
	
	
	
	
		$vdata["NeedEncode"] = true;

	
		$vdata["truncateText"] = true;
	$vdata["NumberOfChars"] = 80;

	$fdata["ViewFormats"]["masterprint"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Date");

	
		$edata["weekdayMessage"] = array("message" => "", "messageType" => "Text");
	$edata["weekdays"] = "[]";


	
	



	
	
	
	
			$edata["acceptFileTypes"] = ".+$";
		$edata["acceptFileTypesHtml"] = "";

		$edata["maxNumberOfFiles"] = 1;

	
	
		$edata["DateEditType"] = 13;
	$edata["InitialYearFactor"] = 100;
	$edata["LastYearFactor"] = 10;

	
	
	
		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
	
	
	//	End validation

	
			
	
	
	
	$fdata["EditFormats"]["edit"] = $edata;
	$edata = array("EditFormat" => "Date");

	
		$edata["weekdayMessage"] = array("message" => "Invalid week day", "messageType" => "Text");
	$edata["weekdays"] = "[]";


	
	



		$edata["IsRequired"] = true;

	
	
	
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
						$edata["validateAs"]["basicValidate"][] = "IsRequired";
		
	
	//	End validation

	
			
	
	
	
	$fdata["EditFormats"]["add"] = $edata;
	$edata = array("EditFormat" => "Date");

	
		$edata["weekdayMessage"] = array("message" => "", "messageType" => "Text");
	$edata["weekdays"] = "[]";


	
	



	
	
	
	
			$edata["acceptFileTypes"] = ".+$";
		$edata["acceptFileTypesHtml"] = "";

		$edata["maxNumberOfFiles"] = 1;

	
	
		$edata["DateEditType"] = 13;
	$edata["InitialYearFactor"] = 100;
	$edata["LastYearFactor"] = 10;

	
	
	
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


	$tdataventas["FechaVenta"] = $fdata;
		$tdataventas[".searchableFields"][] = "FechaVenta";
//	Observación
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "Observación";
	$fdata["GoodName"] = "Observaci_n";
	$fdata["ownerTable"] = "public.Ventas";
	$fdata["Label"] = GetFieldLabel("public_Ventas","Observaci_n");
	$fdata["FieldType"] = 200;

	
	
	
			

		$fdata["strField"] = "Observación";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "\"Observación\"";

	
	
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


	$tdataventas["Observación"] = $fdata;
		$tdataventas[".searchableFields"][] = "Observación";
//	IdEmpreRecicladora
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "IdEmpreRecicladora";
	$fdata["GoodName"] = "IdEmpreRecicladora";
	$fdata["ownerTable"] = "public.Ventas";
	$fdata["Label"] = GetFieldLabel("public_Ventas","IdEmpreRecicladora");
	$fdata["FieldType"] = 3;

	
	
	
			

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
	$edata["LookupTable"] = "public.EmpresasRecicladores";
			$edata["autoCompleteFieldsOnEdit"] = 0;
	$edata["autoCompleteFields"] = array();
		$edata["LCType"] = 0;

	
		
	$edata["LinkField"] = "IdEmpreRecicladora";
	$edata["LinkFieldType"] = 0;
	$edata["DisplayField"] = "NombreEmpre";

	

	
	$edata["LookupOrderBy"] = "";

	
	
		$edata["AllowToAdd"] = true;
			$edata["addPageId"] = "add";

	

	
	
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


	$tdataventas["IdEmpreRecicladora"] = $fdata;
		$tdataventas[".searchableFields"][] = "IdEmpreRecicladora";


$tables_data["public.Ventas"]=&$tdataventas;
$field_labels["public_Ventas"] = &$fieldLabelsventas;
$fieldToolTips["public_Ventas"] = &$fieldToolTipsventas;
$placeHolders["public_Ventas"] = &$placeHoldersventas;
$page_titles["public_Ventas"] = &$pageTitlesventas;

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)
$detailsTablesData["public.Ventas"] = array();
//	public.DetalleVentas
	
	

		$dIndex = 0;
	$detailsParam = array();
	$detailsParam["dDataSourceTable"]="public.DetalleVentas";
		$detailsParam["dOriginalTable"] = "public.DetalleVentas";



				$detailsParam["dType"]=PAGE_LIST;
	$detailsParam["dShortTable"] = "detalleventas";
	$detailsParam["dCaptionTable"] = GetTableCaption("public_DetalleVentas");
	$detailsParam["masterKeys"] =array();
	$detailsParam["detailKeys"] =array();


		
	$detailsTablesData["public.Ventas"][$dIndex] = $detailsParam;

	
		$detailsTablesData["public.Ventas"][$dIndex]["masterKeys"] = array();

	$detailsTablesData["public.Ventas"][$dIndex]["masterKeys"][]="IdVenta";

				$detailsTablesData["public.Ventas"][$dIndex]["detailKeys"] = array();

	$detailsTablesData["public.Ventas"][$dIndex]["detailKeys"][]="IDVenta";

// tables which are master tables for current table (detail)
$masterTablesData["public.Ventas"] = array();



	
				$strOriginalDetailsTable="public.EmpresasRecicladores";
	$masterParams = array();
	$masterParams["mDataSourceTable"]="public.EmpresasRecicladores";
	$masterParams["mOriginalTable"]= $strOriginalDetailsTable;
	$masterParams["mShortTable"]= "empresasrecicladores";
	$masterParams["masterKeys"]= array();
	$masterParams["detailKeys"]= array();

	$masterParams["type"] = PAGE_LIST;
					$masterTablesData["public.Ventas"][0] = $masterParams;
				$masterTablesData["public.Ventas"][0]["masterKeys"] = array();
	$masterTablesData["public.Ventas"][0]["masterKeys"][]="IdEmpreRecicladora";
				$masterTablesData["public.Ventas"][0]["detailKeys"] = array();
	$masterTablesData["public.Ventas"][0]["detailKeys"][]="IdEmpreRecicladora";
		
// -----------------end  prepare master-details data arrays ------------------------------//


require_once(getabspath("classes/sql.php"));










function createSqlQuery_ventas()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "\"IdVenta\",  	\"FechaVenta\",  	\"Observación\",  	\"IdEmpreRecicladora\"";
$proto0["m_strFrom"] = "FROM \"public\".\"Ventas\"";
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
	"m_strName" => "IdVenta",
	"m_strTable" => "public.Ventas",
	"m_srcTableName" => "public.Ventas"
));

$proto6["m_sql"] = "\"IdVenta\"";
$proto6["m_srcTableName"] = "public.Ventas";
$proto6["m_expr"]=$obj;
$proto6["m_alias"] = "";
$obj = new SQLFieldListItem($proto6);

$proto0["m_fieldlist"][]=$obj;
						$proto8=array();
			$obj = new SQLField(array(
	"m_strName" => "FechaVenta",
	"m_strTable" => "public.Ventas",
	"m_srcTableName" => "public.Ventas"
));

$proto8["m_sql"] = "\"FechaVenta\"";
$proto8["m_srcTableName"] = "public.Ventas";
$proto8["m_expr"]=$obj;
$proto8["m_alias"] = "";
$obj = new SQLFieldListItem($proto8);

$proto0["m_fieldlist"][]=$obj;
						$proto10=array();
			$obj = new SQLField(array(
	"m_strName" => "Observación",
	"m_strTable" => "public.Ventas",
	"m_srcTableName" => "public.Ventas"
));

$proto10["m_sql"] = "\"Observación\"";
$proto10["m_srcTableName"] = "public.Ventas";
$proto10["m_expr"]=$obj;
$proto10["m_alias"] = "";
$obj = new SQLFieldListItem($proto10);

$proto0["m_fieldlist"][]=$obj;
						$proto12=array();
			$obj = new SQLField(array(
	"m_strName" => "IdEmpreRecicladora",
	"m_strTable" => "public.Ventas",
	"m_srcTableName" => "public.Ventas"
));

$proto12["m_sql"] = "\"IdEmpreRecicladora\"";
$proto12["m_srcTableName"] = "public.Ventas";
$proto12["m_expr"]=$obj;
$proto12["m_alias"] = "";
$obj = new SQLFieldListItem($proto12);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto14=array();
$proto14["m_link"] = "SQLL_MAIN";
			$proto15=array();
$proto15["m_strName"] = "public.Ventas";
$proto15["m_srcTableName"] = "public.Ventas";
$proto15["m_columns"] = array();
$proto15["m_columns"][] = "IdVenta";
$proto15["m_columns"][] = "FechaVenta";
$proto15["m_columns"][] = "Observación";
$proto15["m_columns"][] = "IdEmpreRecicladora";
$obj = new SQLTable($proto15);

$proto14["m_table"] = $obj;
$proto14["m_sql"] = "\"public\".\"Ventas\"";
$proto14["m_alias"] = "";
$proto14["m_srcTableName"] = "public.Ventas";
$proto16=array();
$proto16["m_sql"] = "";
$proto16["m_uniontype"] = "SQLL_UNKNOWN";
	$obj = new SQLNonParsed(array(
	"m_sql" => ""
));

$proto16["m_column"]=$obj;
$proto16["m_contained"] = array();
$proto16["m_strCase"] = "";
$proto16["m_havingmode"] = false;
$proto16["m_inBrackets"] = false;
$proto16["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto16);

$proto14["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto14);

$proto0["m_fromlist"][]=$obj;
$proto0["m_groupby"] = array();
$proto0["m_orderby"] = array();
$proto0["m_srcTableName"]="public.Ventas";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_ventas = createSqlQuery_ventas();


	
		;

				

$tdataventas[".sqlquery"] = $queryData_ventas;

$tableEvents["public.Ventas"] = new eventsBase;
$tdataventas[".hasEvents"] = false;

?>