<?php
$tdatadetalleventas = array();
$tdatadetalleventas[".searchableFields"] = array();
$tdatadetalleventas[".ShortName"] = "detalleventas";
$tdatadetalleventas[".OwnerID"] = "";
$tdatadetalleventas[".OriginalTable"] = "public.DetalleVentas";


$tdatadetalleventas[".pagesByType"] = my_json_decode( "{\"export\":[\"export\"],\"import\":[\"import\"],\"list\":[\"list\"],\"masterlist\":[\"masterlist\"],\"masterprint\":[\"masterprint\"],\"print\":[\"print\"],\"search\":[\"search\"]}" );
$tdatadetalleventas[".originalPagesByType"] = $tdatadetalleventas[".pagesByType"];
$tdatadetalleventas[".pages"] = types2pages( my_json_decode( "{\"export\":[\"export\"],\"import\":[\"import\"],\"list\":[\"list\"],\"masterlist\":[\"masterlist\"],\"masterprint\":[\"masterprint\"],\"print\":[\"print\"],\"search\":[\"search\"]}" ) );
$tdatadetalleventas[".originalPages"] = $tdatadetalleventas[".pages"];
$tdatadetalleventas[".defaultPages"] = my_json_decode( "{\"export\":\"export\",\"import\":\"import\",\"list\":\"list\",\"masterlist\":\"masterlist\",\"masterprint\":\"masterprint\",\"print\":\"print\",\"search\":\"search\"}" );
$tdatadetalleventas[".originalDefaultPages"] = $tdatadetalleventas[".defaultPages"];

//	field labels
$fieldLabelsdetalleventas = array();
$fieldToolTipsdetalleventas = array();
$pageTitlesdetalleventas = array();
$placeHoldersdetalleventas = array();

if(mlang_getcurrentlang()=="Spanish")
{
	$fieldLabelsdetalleventas["Spanish"] = array();
	$fieldToolTipsdetalleventas["Spanish"] = array();
	$placeHoldersdetalleventas["Spanish"] = array();
	$pageTitlesdetalleventas["Spanish"] = array();
	$fieldLabelsdetalleventas["Spanish"]["ID"] = "ID";
	$fieldToolTipsdetalleventas["Spanish"]["ID"] = "";
	$placeHoldersdetalleventas["Spanish"]["ID"] = "";
	$fieldLabelsdetalleventas["Spanish"]["Cantidad"] = "Cantidad en kilos, gramos";
	$fieldToolTipsdetalleventas["Spanish"]["Cantidad"] = "";
	$placeHoldersdetalleventas["Spanish"]["Cantidad"] = "";
	$fieldLabelsdetalleventas["Spanish"]["Precio"] = "Precio";
	$fieldToolTipsdetalleventas["Spanish"]["Precio"] = "";
	$placeHoldersdetalleventas["Spanish"]["Precio"] = "";
	$fieldLabelsdetalleventas["Spanish"]["IdVenta"] = "IDVenta";
	$fieldToolTipsdetalleventas["Spanish"]["IdVenta"] = "";
	$placeHoldersdetalleventas["Spanish"]["IdVenta"] = "";
	$fieldLabelsdetalleventas["Spanish"]["IdGesPesResiduo"] = "Gestión Pesos Residuos";
	$fieldToolTipsdetalleventas["Spanish"]["IdGesPesResiduo"] = "";
	$placeHoldersdetalleventas["Spanish"]["IdGesPesResiduo"] = "";
	if (count($fieldToolTipsdetalleventas["Spanish"]))
		$tdatadetalleventas[".isUseToolTips"] = true;
}


	$tdatadetalleventas[".NCSearch"] = true;



$tdatadetalleventas[".shortTableName"] = "detalleventas";
$tdatadetalleventas[".nSecOptions"] = 0;

$tdatadetalleventas[".mainTableOwnerID"] = "";
$tdatadetalleventas[".entityType"] = 0;
$tdatadetalleventas[".connId"] = "RealEstate_at_localhost";


$tdatadetalleventas[".strOriginalTableName"] = "public.DetalleVentas";

	



$tdatadetalleventas[".showAddInPopup"] = false;

$tdatadetalleventas[".showEditInPopup"] = false;

$tdatadetalleventas[".showViewInPopup"] = false;

$tdatadetalleventas[".listAjax"] = false;
//	temporary
//$tdatadetalleventas[".listAjax"] = false;

	$tdatadetalleventas[".audit"] = false;

	$tdatadetalleventas[".locking"] = false;


$pages = $tdatadetalleventas[".defaultPages"];

if( $pages[PAGE_EDIT] ) {
	$tdatadetalleventas[".edit"] = true;
	$tdatadetalleventas[".afterEditAction"] = 0;
	$tdatadetalleventas[".closePopupAfterEdit"] = 1;
	$tdatadetalleventas[".afterEditActionDetTable"] = "";
}

if( $pages[PAGE_ADD] ) {
$tdatadetalleventas[".add"] = true;
$tdatadetalleventas[".afterAddAction"] = 1;
$tdatadetalleventas[".closePopupAfterAdd"] = 1;
$tdatadetalleventas[".afterAddActionDetTable"] = "";
}

if( $pages[PAGE_LIST] ) {
	$tdatadetalleventas[".list"] = true;
}



$tdatadetalleventas[".strSortControlSettingsJSON"] = "";




if( $pages[PAGE_VIEW] ) {
$tdatadetalleventas[".view"] = true;
}

if( $pages[PAGE_IMPORT] ) {
$tdatadetalleventas[".import"] = true;
}

if( $pages[PAGE_EXPORT] ) {
$tdatadetalleventas[".exportTo"] = true;
}

if( $pages[PAGE_PRINT] ) {
$tdatadetalleventas[".printFriendly"] = true;
}



$tdatadetalleventas[".showSimpleSearchOptions"] = true; // temp fix #13449

// Allow Show/Hide Fields in GRID
$tdatadetalleventas[".allowShowHideFields"] = true; // temp fix #13449
//

// Allow Fields Reordering in GRID
$tdatadetalleventas[".allowFieldsReordering"] = true; // temp fix #13449
//

$tdatadetalleventas[".isUseAjaxSuggest"] = true;

$tdatadetalleventas[".rowHighlite"] = true;



			

$tdatadetalleventas[".ajaxCodeSnippetAdded"] = false;

$tdatadetalleventas[".buttonsAdded"] = false;

$tdatadetalleventas[".addPageEvents"] = false;

// use timepicker for search panel
$tdatadetalleventas[".isUseTimeForSearch"] = false;


$tdatadetalleventas[".badgeColor"] = "e07878";


$tdatadetalleventas[".allSearchFields"] = array();
$tdatadetalleventas[".filterFields"] = array();
$tdatadetalleventas[".requiredSearchFields"] = array();

$tdatadetalleventas[".googleLikeFields"] = array();
$tdatadetalleventas[".googleLikeFields"][] = "ID";
$tdatadetalleventas[".googleLikeFields"][] = "Cantidad";
$tdatadetalleventas[".googleLikeFields"][] = "Precio";
$tdatadetalleventas[".googleLikeFields"][] = "IdVenta";
$tdatadetalleventas[".googleLikeFields"][] = "IdGesPesResiduo";



$tdatadetalleventas[".tableType"] = "list";

$tdatadetalleventas[".printerPageOrientation"] = 0;
$tdatadetalleventas[".nPrinterPageScale"] = 100;

$tdatadetalleventas[".nPrinterSplitRecords"] = 40;

$tdatadetalleventas[".geocodingEnabled"] = false;










$tdatadetalleventas[".pageSize"] = 20;

$tdatadetalleventas[".warnLeavingPages"] = true;



$tstrOrderBy = "";
$tdatadetalleventas[".strOrderBy"] = $tstrOrderBy;

$tdatadetalleventas[".orderindexes"] = array();


$tdatadetalleventas[".sqlHead"] = "SELECT \"ID\",  	\"Cantidad\",  	\"Precio\",  	\"IdVenta\",  	\"IdGesPesResiduo\"";
$tdatadetalleventas[".sqlFrom"] = "FROM \"public\".\"DetalleVentas\"";
$tdatadetalleventas[".sqlWhereExpr"] = "";
$tdatadetalleventas[".sqlTail"] = "";

//fill array of tabs for list page
$arrGridTabs = array();
$arrGridTabs[] = array(
	'tabId' => "",
	'name' => "All data",
	'nameType' => 'Text',
	'where' => "",
	'showRowCount' => 0,
	'hideEmpty' => 0,
);
$tdatadetalleventas[".arrGridTabs"] = $arrGridTabs;









//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdatadetalleventas[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdatadetalleventas[".arrGroupsPerPage"] = $arrGPP;

$tdatadetalleventas[".highlightSearchResults"] = true;

$tableKeysdetalleventas = array();
$tdatadetalleventas[".Keys"] = $tableKeysdetalleventas;


$tdatadetalleventas[".hideMobileList"] = array();




//	ID
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "ID";
	$fdata["GoodName"] = "ID";
	$fdata["ownerTable"] = "public.DetalleVentas";
	$fdata["Label"] = GetFieldLabel("public_DetalleVentas","ID");
	$fdata["FieldType"] = 3;


		$fdata["AutoInc"] = true;

	
			

		$fdata["strField"] = "ID";

		$fdata["sourceSingle"] = "ID";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "\"ID\"";

	
	
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


	$tdatadetalleventas["ID"] = $fdata;
		$tdatadetalleventas[".searchableFields"][] = "ID";
//	Cantidad
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "Cantidad";
	$fdata["GoodName"] = "Cantidad";
	$fdata["ownerTable"] = "public.DetalleVentas";
	$fdata["Label"] = GetFieldLabel("public_DetalleVentas","Cantidad");
	$fdata["FieldType"] = 14;


	
	
			

		$fdata["strField"] = "Cantidad";

		$fdata["sourceSingle"] = "Cantidad";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "\"Cantidad\"";

	
	
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "Number");

	
	
	
	
	
	
		$vdata["DecimalDigits"] = 0;

	
	
	
	
		
	
		$vdata["NeedEncode"] = true;

	
		$vdata["truncateText"] = true;
	$vdata["NumberOfChars"] = 80;

	$fdata["ViewFormats"]["view"] = $vdata;
	$vdata = array("ViewFormat" => "Number");

	
	
	
	
	
	
		$vdata["DecimalDigits"] = 3;

	
	
	
	
		
	
		$vdata["NeedEncode"] = true;

	
		$vdata["truncateText"] = true;
	$vdata["NumberOfChars"] = 80;

	$fdata["ViewFormats"]["list"] = $vdata;
	$vdata = array("ViewFormat" => "Number");

	
	
	
	
	
	
		$vdata["DecimalDigits"] = 0;

	
	
	
	
		
	
		$vdata["NeedEncode"] = true;

	
		$vdata["truncateText"] = true;
	$vdata["NumberOfChars"] = 80;

	$fdata["ViewFormats"]["print"] = $vdata;
	$vdata = array("ViewFormat" => "Number");

	
	
	
	
	
	
		$vdata["DecimalDigits"] = 0;

	
	
	
	
		
	
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
				$edata["LookupType"] = 1;
	$edata["LookupTable"] = "";
	$edata["LookupConnId"] = "";
		$edata["listPageId"] = "list";
		$edata["autoCompleteFieldsOnEdit"] = 0;
	$edata["autoCompleteFields"] = array();
		$edata["LCType"] = 1;

	
		
	$edata["LinkField"] = "IdGesPesResiduo";
	$edata["LinkFieldType"] = 0;
	$edata["DisplayField"] = "IdGesPesResiduo";

	

	
	$edata["LookupOrderBy"] = "";

	
		$edata["UseCategory"] = true;
	$edata["categoryFields"] = array();
	$edata["categoryFields"][] = array( "main" => "IdGesPesResiduo", "lookup" => "IdGesPesResiduo" );

	
		$edata["SimpleAdd"] = true;


	
	
	
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


	$tdatadetalleventas["Cantidad"] = $fdata;
		$tdatadetalleventas[".searchableFields"][] = "Cantidad";
//	Precio
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "Precio";
	$fdata["GoodName"] = "Precio";
	$fdata["ownerTable"] = "public.DetalleVentas";
	$fdata["Label"] = GetFieldLabel("public_DetalleVentas","Precio");
	$fdata["FieldType"] = 14;


	
	
			

		$fdata["strField"] = "Precio";

		$fdata["sourceSingle"] = "Precio";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "\"Precio\"";

	
	
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "Number");

	
	
	
	
	
	
		$vdata["DecimalDigits"] = 0;

	
	
	
	
		
	
		$vdata["NeedEncode"] = true;

	
		$vdata["truncateText"] = true;
	$vdata["NumberOfChars"] = 80;

	$fdata["ViewFormats"]["view"] = $vdata;
	$vdata = array("ViewFormat" => "Number");

	
	
	
	
	
	
		$vdata["DecimalDigits"] = 0;

	
	
	
	
		
	
		$vdata["NeedEncode"] = true;

	
		$vdata["truncateText"] = true;
	$vdata["NumberOfChars"] = 80;

	$fdata["ViewFormats"]["list"] = $vdata;
	$vdata = array("ViewFormat" => "Number");

	
	
	
	
	
	
		$vdata["DecimalDigits"] = 0;

	
	
	
	
		
	
		$vdata["NeedEncode"] = true;

	
		$vdata["truncateText"] = true;
	$vdata["NumberOfChars"] = 80;

	$fdata["ViewFormats"]["print"] = $vdata;
	$vdata = array("ViewFormat" => "Number");

	
	
	
	
	
	
		$vdata["DecimalDigits"] = 0;

	
	
	
	
		
	
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
	$edata = array("EditFormat" => "Text field");

	
		$edata["weekdayMessage"] = array("message" => "", "messageType" => "Text");
	$edata["weekdays"] = "[]";


	
	



	
	
	
	
			$edata["acceptFileTypes"] = ".+$";
		$edata["acceptFileTypesHtml"] = "";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
	
			$edata["HTML5InuptType"] = "number";

		$edata["EditParams"] = "";
		
		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
				$edata["validateAs"]["basicValidate"][] = getJsValidatorName("Number");
							
	
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


	$tdatadetalleventas["Precio"] = $fdata;
		$tdatadetalleventas[".searchableFields"][] = "Precio";
//	IdVenta
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "IdVenta";
	$fdata["GoodName"] = "IdVenta";
	$fdata["ownerTable"] = "public.DetalleVentas";
	$fdata["Label"] = GetFieldLabel("public_DetalleVentas","IdVenta");
	$fdata["FieldType"] = 3;


	
	
			

		$fdata["strField"] = "IdVenta";

		$fdata["sourceSingle"] = "IdVenta";

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


	$tdatadetalleventas["IdVenta"] = $fdata;
		$tdatadetalleventas[".searchableFields"][] = "IdVenta";
//	IdGesPesResiduo
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 5;
	$fdata["strName"] = "IdGesPesResiduo";
	$fdata["GoodName"] = "IdGesPesResiduo";
	$fdata["ownerTable"] = "public.DetalleVentas";
	$fdata["Label"] = GetFieldLabel("public_DetalleVentas","IdGesPesResiduo");
	$fdata["FieldType"] = 3;


	
	
			

		$fdata["strField"] = "IdGesPesResiduo";

		$fdata["sourceSingle"] = "IdGesPesResiduo";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "\"IdGesPesResiduo\"";

	
	
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
				$edata["LookupType"] = 1;
	$edata["LookupTable"] = "public.GestionPesosResiduosDetVen";
	$edata["LookupConnId"] = "RealEstate_at_localhost";
			$edata["autoCompleteFieldsOnEdit"] = 0;
	$edata["autoCompleteFields"] = array();
		$edata["LCType"] = 0;

	
		
	$edata["LinkField"] = "IdGesPesResiduo";
	$edata["LinkFieldType"] = 0;
	$edata["DisplayField"] = "concat";

	

	
	$edata["LookupOrderBy"] = "";

	
	
	
		$edata["SimpleAdd"] = true;

				//dependent dropdowns @deprecated data ?
	$edata["DependentLookups"] = array();
	$edata["DependentLookups"][] = "Cantidad";

	
	
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
								$edata["validateAs"]["basicValidate"][] = "DenyDuplicated";
	$edata["validateAs"]["customMessages"]["DenyDuplicated"] = array("message" => "Value %value% already exists", "messageType" => "Text");

	
	//	End validation

	
			
	
		$edata["denyDuplicates"] = true;

	
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


	$tdatadetalleventas["IdGesPesResiduo"] = $fdata;
		$tdatadetalleventas[".searchableFields"][] = "IdGesPesResiduo";


$tables_data["public.DetalleVentas"]=&$tdatadetalleventas;
$field_labels["public_DetalleVentas"] = &$fieldLabelsdetalleventas;
$fieldToolTips["public_DetalleVentas"] = &$fieldToolTipsdetalleventas;
$placeHolders["public_DetalleVentas"] = &$placeHoldersdetalleventas;
$page_titles["public_DetalleVentas"] = &$pageTitlesdetalleventas;

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)

//if !@TABLE.bReportCrossTab

$detailsTablesData["public.DetalleVentas"] = array();
//endif

// tables which are master tables for current table (detail)
$masterTablesData["public.DetalleVentas"] = array();



// -----------------end  prepare master-details data arrays ------------------------------//



require_once(getabspath("classes/sql.php"));











function createSqlQuery_detalleventas()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "\"ID\",  	\"Cantidad\",  	\"Precio\",  	\"IdVenta\",  	\"IdGesPesResiduo\"";
$proto0["m_strFrom"] = "FROM \"public\".\"DetalleVentas\"";
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
	"m_strName" => "ID",
	"m_strTable" => "public.DetalleVentas",
	"m_srcTableName" => "public.DetalleVentas"
));

$proto6["m_sql"] = "\"ID\"";
$proto6["m_srcTableName"] = "public.DetalleVentas";
$proto6["m_expr"]=$obj;
$proto6["m_alias"] = "";
$obj = new SQLFieldListItem($proto6);

$proto0["m_fieldlist"][]=$obj;
						$proto8=array();
			$obj = new SQLField(array(
	"m_strName" => "Cantidad",
	"m_strTable" => "public.DetalleVentas",
	"m_srcTableName" => "public.DetalleVentas"
));

$proto8["m_sql"] = "\"Cantidad\"";
$proto8["m_srcTableName"] = "public.DetalleVentas";
$proto8["m_expr"]=$obj;
$proto8["m_alias"] = "";
$obj = new SQLFieldListItem($proto8);

$proto0["m_fieldlist"][]=$obj;
						$proto10=array();
			$obj = new SQLField(array(
	"m_strName" => "Precio",
	"m_strTable" => "public.DetalleVentas",
	"m_srcTableName" => "public.DetalleVentas"
));

$proto10["m_sql"] = "\"Precio\"";
$proto10["m_srcTableName"] = "public.DetalleVentas";
$proto10["m_expr"]=$obj;
$proto10["m_alias"] = "";
$obj = new SQLFieldListItem($proto10);

$proto0["m_fieldlist"][]=$obj;
						$proto12=array();
			$obj = new SQLField(array(
	"m_strName" => "IdVenta",
	"m_strTable" => "public.DetalleVentas",
	"m_srcTableName" => "public.DetalleVentas"
));

$proto12["m_sql"] = "\"IdVenta\"";
$proto12["m_srcTableName"] = "public.DetalleVentas";
$proto12["m_expr"]=$obj;
$proto12["m_alias"] = "";
$obj = new SQLFieldListItem($proto12);

$proto0["m_fieldlist"][]=$obj;
						$proto14=array();
			$obj = new SQLField(array(
	"m_strName" => "IdGesPesResiduo",
	"m_strTable" => "public.DetalleVentas",
	"m_srcTableName" => "public.DetalleVentas"
));

$proto14["m_sql"] = "\"IdGesPesResiduo\"";
$proto14["m_srcTableName"] = "public.DetalleVentas";
$proto14["m_expr"]=$obj;
$proto14["m_alias"] = "";
$obj = new SQLFieldListItem($proto14);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto16=array();
$proto16["m_link"] = "SQLL_MAIN";
			$proto17=array();
$proto17["m_strName"] = "public.DetalleVentas";
$proto17["m_srcTableName"] = "public.DetalleVentas";
$proto17["m_columns"] = array();
$proto17["m_columns"][] = "ID";
$proto17["m_columns"][] = "Cantidad";
$proto17["m_columns"][] = "Precio";
$proto17["m_columns"][] = "IdVenta";
$proto17["m_columns"][] = "IdGesPesResiduo";
$obj = new SQLTable($proto17);

$proto16["m_table"] = $obj;
$proto16["m_sql"] = "\"public\".\"DetalleVentas\"";
$proto16["m_alias"] = "";
$proto16["m_srcTableName"] = "public.DetalleVentas";
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
$proto0["m_srcTableName"]="public.DetalleVentas";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_detalleventas = createSqlQuery_detalleventas();


	
		;

					

$tdatadetalleventas[".sqlquery"] = $queryData_detalleventas;



include_once(getabspath("include/detalleventas_events.php"));
$tableEvents["public.DetalleVentas"] = new eventclass_detalleventas;
$tdatadetalleventas[".hasEvents"] = true;

?>