<?php
$tdatapublic_detalles_ventas1 = array();
$tdatapublic_detalles_ventas1[".searchableFields"] = array();
$tdatapublic_detalles_ventas1[".ShortName"] = "public_detalles_ventas1";
$tdatapublic_detalles_ventas1[".OwnerID"] = "";
$tdatapublic_detalles_ventas1[".OriginalTable"] = "public.detalles_ventas";


$tdatapublic_detalles_ventas1[".pagesByType"] = my_json_decode( "{\"add\":[\"add\"],\"edit\":[\"edit\"],\"export\":[\"export\"],\"import\":[\"import\"],\"list\":[\"list\"],\"print\":[\"print\"],\"search\":[\"search\"],\"view\":[\"view\"]}" );
$tdatapublic_detalles_ventas1[".originalPagesByType"] = $tdatapublic_detalles_ventas1[".pagesByType"];
$tdatapublic_detalles_ventas1[".pages"] = types2pages( my_json_decode( "{\"add\":[\"add\"],\"edit\":[\"edit\"],\"export\":[\"export\"],\"import\":[\"import\"],\"list\":[\"list\"],\"print\":[\"print\"],\"search\":[\"search\"],\"view\":[\"view\"]}" ) );
$tdatapublic_detalles_ventas1[".originalPages"] = $tdatapublic_detalles_ventas1[".pages"];
$tdatapublic_detalles_ventas1[".defaultPages"] = my_json_decode( "{\"add\":\"add\",\"edit\":\"edit\",\"export\":\"export\",\"import\":\"import\",\"list\":\"list\",\"print\":\"print\",\"search\":\"search\",\"view\":\"view\"}" );
$tdatapublic_detalles_ventas1[".originalDefaultPages"] = $tdatapublic_detalles_ventas1[".defaultPages"];

//	field labels
$fieldLabelspublic_detalles_ventas1 = array();
$fieldToolTipspublic_detalles_ventas1 = array();
$pageTitlespublic_detalles_ventas1 = array();
$placeHolderspublic_detalles_ventas1 = array();

if(mlang_getcurrentlang()=="Spanish")
{
	$fieldLabelspublic_detalles_ventas1["Spanish"] = array();
	$fieldToolTipspublic_detalles_ventas1["Spanish"] = array();
	$placeHolderspublic_detalles_ventas1["Spanish"] = array();
	$pageTitlespublic_detalles_ventas1["Spanish"] = array();
	$fieldLabelspublic_detalles_ventas1["Spanish"]["id_deta_venta"] = "Id Deta Venta";
	$fieldToolTipspublic_detalles_ventas1["Spanish"]["id_deta_venta"] = "";
	$placeHolderspublic_detalles_ventas1["Spanish"]["id_deta_venta"] = "";
	$fieldLabelspublic_detalles_ventas1["Spanish"]["cantidad_venta"] = "Cantidad Venta";
	$fieldToolTipspublic_detalles_ventas1["Spanish"]["cantidad_venta"] = "";
	$placeHolderspublic_detalles_ventas1["Spanish"]["cantidad_venta"] = "";
	$fieldLabelspublic_detalles_ventas1["Spanish"]["precio_venta"] = "Precio Venta";
	$fieldToolTipspublic_detalles_ventas1["Spanish"]["precio_venta"] = "";
	$placeHolderspublic_detalles_ventas1["Spanish"]["precio_venta"] = "";
	$fieldLabelspublic_detalles_ventas1["Spanish"]["id_venta"] = "Id Venta";
	$fieldToolTipspublic_detalles_ventas1["Spanish"]["id_venta"] = "";
	$placeHolderspublic_detalles_ventas1["Spanish"]["id_venta"] = "";
	$fieldLabelspublic_detalles_ventas1["Spanish"]["id_ges_pes_residuo"] = "Gestión Pesos Residuos";
	$fieldToolTipspublic_detalles_ventas1["Spanish"]["id_ges_pes_residuo"] = "";
	$placeHolderspublic_detalles_ventas1["Spanish"]["id_ges_pes_residuo"] = "";
	$fieldLabelspublic_detalles_ventas1["Spanish"]["sub_total"] = "Sub Total";
	$fieldToolTipspublic_detalles_ventas1["Spanish"]["sub_total"] = "";
	$placeHolderspublic_detalles_ventas1["Spanish"]["sub_total"] = "";
	if (count($fieldToolTipspublic_detalles_ventas1["Spanish"]))
		$tdatapublic_detalles_ventas1[".isUseToolTips"] = true;
}


	$tdatapublic_detalles_ventas1[".NCSearch"] = true;



$tdatapublic_detalles_ventas1[".shortTableName"] = "public_detalles_ventas1";
$tdatapublic_detalles_ventas1[".nSecOptions"] = 0;

$tdatapublic_detalles_ventas1[".mainTableOwnerID"] = "";
$tdatapublic_detalles_ventas1[".entityType"] = 0;
$tdatapublic_detalles_ventas1[".connId"] = "RealEstate_at_localhost";


$tdatapublic_detalles_ventas1[".strOriginalTableName"] = "public.detalles_ventas";

	



$tdatapublic_detalles_ventas1[".showAddInPopup"] = false;

$tdatapublic_detalles_ventas1[".showEditInPopup"] = false;

$tdatapublic_detalles_ventas1[".showViewInPopup"] = false;

$tdatapublic_detalles_ventas1[".listAjax"] = false;
//	temporary
//$tdatapublic_detalles_ventas1[".listAjax"] = false;

	$tdatapublic_detalles_ventas1[".audit"] = false;

	$tdatapublic_detalles_ventas1[".locking"] = false;


$pages = $tdatapublic_detalles_ventas1[".defaultPages"];

if( $pages[PAGE_EDIT] ) {
	$tdatapublic_detalles_ventas1[".edit"] = true;
	$tdatapublic_detalles_ventas1[".afterEditAction"] = 1;
	$tdatapublic_detalles_ventas1[".closePopupAfterEdit"] = 1;
	$tdatapublic_detalles_ventas1[".afterEditActionDetTable"] = "";
}

if( $pages[PAGE_ADD] ) {
$tdatapublic_detalles_ventas1[".add"] = true;
$tdatapublic_detalles_ventas1[".afterAddAction"] = 1;
$tdatapublic_detalles_ventas1[".closePopupAfterAdd"] = 1;
$tdatapublic_detalles_ventas1[".afterAddActionDetTable"] = "";
}

if( $pages[PAGE_LIST] ) {
	$tdatapublic_detalles_ventas1[".list"] = true;
}



$tdatapublic_detalles_ventas1[".strSortControlSettingsJSON"] = "";




if( $pages[PAGE_VIEW] ) {
$tdatapublic_detalles_ventas1[".view"] = true;
}

if( $pages[PAGE_IMPORT] ) {
$tdatapublic_detalles_ventas1[".import"] = true;
}

if( $pages[PAGE_EXPORT] ) {
$tdatapublic_detalles_ventas1[".exportTo"] = true;
}

if( $pages[PAGE_PRINT] ) {
$tdatapublic_detalles_ventas1[".printFriendly"] = true;
}



$tdatapublic_detalles_ventas1[".showSimpleSearchOptions"] = true; // temp fix #13449

// Allow Show/Hide Fields in GRID
$tdatapublic_detalles_ventas1[".allowShowHideFields"] = true; // temp fix #13449
//

// Allow Fields Reordering in GRID
$tdatapublic_detalles_ventas1[".allowFieldsReordering"] = true; // temp fix #13449
//

$tdatapublic_detalles_ventas1[".isUseAjaxSuggest"] = true;

$tdatapublic_detalles_ventas1[".rowHighlite"] = true;



									

$tdatapublic_detalles_ventas1[".ajaxCodeSnippetAdded"] = false;

$tdatapublic_detalles_ventas1[".buttonsAdded"] = false;

$tdatapublic_detalles_ventas1[".addPageEvents"] = false;

// use timepicker for search panel
$tdatapublic_detalles_ventas1[".isUseTimeForSearch"] = false;


$tdatapublic_detalles_ventas1[".badgeColor"] = "e8926f";


$tdatapublic_detalles_ventas1[".allSearchFields"] = array();
$tdatapublic_detalles_ventas1[".filterFields"] = array();
$tdatapublic_detalles_ventas1[".requiredSearchFields"] = array();

$tdatapublic_detalles_ventas1[".googleLikeFields"] = array();
$tdatapublic_detalles_ventas1[".googleLikeFields"][] = "id_deta_venta";
$tdatapublic_detalles_ventas1[".googleLikeFields"][] = "cantidad_venta";
$tdatapublic_detalles_ventas1[".googleLikeFields"][] = "precio_venta";
$tdatapublic_detalles_ventas1[".googleLikeFields"][] = "sub_total";
$tdatapublic_detalles_ventas1[".googleLikeFields"][] = "id_venta";
$tdatapublic_detalles_ventas1[".googleLikeFields"][] = "id_ges_pes_residuo";



$tdatapublic_detalles_ventas1[".tableType"] = "list";

$tdatapublic_detalles_ventas1[".printerPageOrientation"] = 0;
$tdatapublic_detalles_ventas1[".nPrinterPageScale"] = 100;

$tdatapublic_detalles_ventas1[".nPrinterSplitRecords"] = 40;

$tdatapublic_detalles_ventas1[".geocodingEnabled"] = false;










$tdatapublic_detalles_ventas1[".pageSize"] = 20;

$tdatapublic_detalles_ventas1[".warnLeavingPages"] = true;



$tstrOrderBy = "";
$tdatapublic_detalles_ventas1[".strOrderBy"] = $tstrOrderBy;

$tdatapublic_detalles_ventas1[".orderindexes"] = array();


$tdatapublic_detalles_ventas1[".sqlHead"] = "SELECT id_deta_venta,  	cantidad_venta,  	precio_venta,  	(cantidad_venta*precio_venta) as sub_total,  	id_venta,  	id_ges_pes_residuo";
$tdatapublic_detalles_ventas1[".sqlFrom"] = "FROM \"public\".detalles_ventas";
$tdatapublic_detalles_ventas1[".sqlWhereExpr"] = "";
$tdatapublic_detalles_ventas1[".sqlTail"] = "";










//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdatapublic_detalles_ventas1[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdatapublic_detalles_ventas1[".arrGroupsPerPage"] = $arrGPP;

$tdatapublic_detalles_ventas1[".highlightSearchResults"] = true;

$tableKeyspublic_detalles_ventas1 = array();
$tableKeyspublic_detalles_ventas1[] = "id_deta_venta";
$tdatapublic_detalles_ventas1[".Keys"] = $tableKeyspublic_detalles_ventas1;


$tdatapublic_detalles_ventas1[".hideMobileList"] = array();




//	id_deta_venta
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "id_deta_venta";
	$fdata["GoodName"] = "id_deta_venta";
	$fdata["ownerTable"] = "public.detalles_ventas";
	$fdata["Label"] = GetFieldLabel("public_detalles_ventas","id_deta_venta");
	$fdata["FieldType"] = 3;


		$fdata["AutoInc"] = true;

	
			

		$fdata["strField"] = "id_deta_venta";

		$fdata["sourceSingle"] = "id_deta_venta";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "id_deta_venta";

	
	
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


	$tdatapublic_detalles_ventas1["id_deta_venta"] = $fdata;
		$tdatapublic_detalles_ventas1[".searchableFields"][] = "id_deta_venta";
//	cantidad_venta
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "cantidad_venta";
	$fdata["GoodName"] = "cantidad_venta";
	$fdata["ownerTable"] = "public.detalles_ventas";
	$fdata["Label"] = GetFieldLabel("public_detalles_ventas","cantidad_venta");
	$fdata["FieldType"] = 14;


	
	
			

		$fdata["strField"] = "cantidad_venta";

		$fdata["sourceSingle"] = "cantidad_venta";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "cantidad_venta";

	
	
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
	$vdata = array("ViewFormat" => "Number");

	
	
	
	
	
	
		$vdata["DecimalDigits"] = 0;

	
	
	
	
		
	
		$vdata["NeedEncode"] = true;

	
		$vdata["truncateText"] = true;
	$vdata["NumberOfChars"] = 80;

	$fdata["ViewFormats"]["masterlist"] = $vdata;
	$vdata = array("ViewFormat" => "Number");

	
	
	
	
	
	
		$vdata["DecimalDigits"] = 0;

	
	
	
	
		
	
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
	$edata["LookupTable"] = "public.gestion_pesos_residuos";
			$edata["autoCompleteFieldsOnEdit"] = 0;
	$edata["autoCompleteFields"] = array();
		$edata["LCType"] = 1;

	
		
	$edata["LinkField"] = "id_ges_pes_residuo";
	$edata["LinkFieldType"] = 0;
	$edata["DisplayField"] = "kilo_residuo";

	

	
	$edata["LookupOrderBy"] = "";

	
		$edata["UseCategory"] = true;
	$edata["categoryFields"] = array();
	$edata["categoryFields"][] = array( "main" => "id_ges_pes_residuo", "lookup" => "id_ges_pes_residuo" );

	
	

	
	
	
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


	$tdatapublic_detalles_ventas1["cantidad_venta"] = $fdata;
		$tdatapublic_detalles_ventas1[".searchableFields"][] = "cantidad_venta";
//	precio_venta
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "precio_venta";
	$fdata["GoodName"] = "precio_venta";
	$fdata["ownerTable"] = "public.detalles_ventas";
	$fdata["Label"] = GetFieldLabel("public_detalles_ventas","precio_venta");
	$fdata["FieldType"] = 14;


	
	
			

		$fdata["strField"] = "precio_venta";

		$fdata["sourceSingle"] = "precio_venta";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "precio_venta";

	
	
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "Number");

	
	
	
	
	
	
		$vdata["DecimalDigits"] = 0;

	
	
	
	
		
	
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


	$tdatapublic_detalles_ventas1["precio_venta"] = $fdata;
		$tdatapublic_detalles_ventas1[".searchableFields"][] = "precio_venta";
//	sub_total
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "sub_total";
	$fdata["GoodName"] = "sub_total";
	$fdata["ownerTable"] = "";
	$fdata["Label"] = GetFieldLabel("public_detalles_ventas","sub_total");
	$fdata["FieldType"] = 14;


	
	
			

		$fdata["strField"] = "sub_total";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "(cantidad_venta*precio_venta)";

	
	
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "Number");

	
	
	
	
	
	
		$vdata["DecimalDigits"] = 0;

	
	
	
	
		
	
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


	$tdatapublic_detalles_ventas1["sub_total"] = $fdata;
		$tdatapublic_detalles_ventas1[".searchableFields"][] = "sub_total";
//	id_venta
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 5;
	$fdata["strName"] = "id_venta";
	$fdata["GoodName"] = "id_venta";
	$fdata["ownerTable"] = "public.detalles_ventas";
	$fdata["Label"] = GetFieldLabel("public_detalles_ventas","id_venta");
	$fdata["FieldType"] = 3;


	
	
			

		$fdata["strField"] = "id_venta";

		$fdata["sourceSingle"] = "id_venta";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "id_venta";

	
	
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


	$tdatapublic_detalles_ventas1["id_venta"] = $fdata;
		$tdatapublic_detalles_ventas1[".searchableFields"][] = "id_venta";
//	id_ges_pes_residuo
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 6;
	$fdata["strName"] = "id_ges_pes_residuo";
	$fdata["GoodName"] = "id_ges_pes_residuo";
	$fdata["ownerTable"] = "public.detalles_ventas";
	$fdata["Label"] = GetFieldLabel("public_detalles_ventas","id_ges_pes_residuo");
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
	$vdata = array("ViewFormat" => "Custom");

	
	
	
	
	
	
	
	
	
	
	
		
	
	
	
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
	$edata["LookupTable"] = "public.gestion_pesos_residuos_ven";
			$edata["autoCompleteFieldsOnEdit"] = 0;
	$edata["autoCompleteFields"] = array();
		$edata["LCType"] = 0;

	
		
	$edata["LinkField"] = "id_ges_pes_residuo";
	$edata["LinkFieldType"] = 0;
	$edata["DisplayField"] = "concat";

	

	
	$edata["LookupOrderBy"] = "";

	
	
	
	
				//dependent dropdowns @deprecated data ?
	$edata["DependentLookups"] = array();
	$edata["DependentLookups"][] = "cantidad_venta";

	
	
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
	$edata["LookupTable"] = "public.gestion_pesos_residuos_det_ven";
			$edata["autoCompleteFieldsOnEdit"] = 0;
	$edata["autoCompleteFields"] = array();
		$edata["LCType"] = 0;

	
		
	$edata["LinkField"] = "id_ges_pes_residuo";
	$edata["LinkFieldType"] = 0;
	$edata["DisplayField"] = "concat";

	

	
	$edata["LookupOrderBy"] = "";

	
	
	
	
				//dependent dropdowns @deprecated data ?
	$edata["DependentLookups"] = array();
	$edata["DependentLookups"][] = "cantidad_venta";

	
	
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
		$fdata["filterTotalFields"] = "id_deta_venta";
		$fdata["filterFormat"] = "Values list";
		$fdata["showCollapsed"] = false;

		$fdata["sortValueType"] = 0;
		$fdata["numberOfVisibleItems"] = 10;

		$fdata["filterBy"] = 0;

	

	
	
//end of Filters settings


	$tdatapublic_detalles_ventas1["id_ges_pes_residuo"] = $fdata;
		$tdatapublic_detalles_ventas1[".searchableFields"][] = "id_ges_pes_residuo";


$tables_data["public.detalles_ventas"]=&$tdatapublic_detalles_ventas1;
$field_labels["public_detalles_ventas"] = &$fieldLabelspublic_detalles_ventas1;
$fieldToolTips["public_detalles_ventas"] = &$fieldToolTipspublic_detalles_ventas1;
$placeHolders["public_detalles_ventas"] = &$placeHolderspublic_detalles_ventas1;
$page_titles["public_detalles_ventas"] = &$pageTitlespublic_detalles_ventas1;

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)

//if !@TABLE.bReportCrossTab

$detailsTablesData["public.detalles_ventas"] = array();
//endif

// tables which are master tables for current table (detail)
$masterTablesData["public.detalles_ventas"] = array();



	
	//if !@t.bReportCrossTab
			$strOriginalDetailsTable="public.ventas";
	$masterParams = array();
	$masterParams["mDataSourceTable"]="public.ventas";
	$masterParams["mOriginalTable"]= $strOriginalDetailsTable;
	$masterParams["mShortTable"]= "ventas";
	$masterParams["masterKeys"]= array();
	$masterParams["detailKeys"]= array();

	$masterParams["type"] = PAGE_LIST;
					$masterTablesData["public.detalles_ventas"][0] = $masterParams;
				$masterTablesData["public.detalles_ventas"][0]["masterKeys"] = array();
	$masterTablesData["public.detalles_ventas"][0]["masterKeys"][]="id_venta";
				$masterTablesData["public.detalles_ventas"][0]["detailKeys"] = array();
	$masterTablesData["public.detalles_ventas"][0]["detailKeys"][]="id_venta";
		
	//endif
	
	//if !@t.bReportCrossTab
			$strOriginalDetailsTable="public.gestion_pesos_residuos";
	$masterParams = array();
	$masterParams["mDataSourceTable"]="public.gestion_pesos_residuos";
	$masterParams["mOriginalTable"]= $strOriginalDetailsTable;
	$masterParams["mShortTable"]= "gestion_pesos_residuos";
	$masterParams["masterKeys"]= array();
	$masterParams["detailKeys"]= array();

	$masterParams["type"] = PAGE_LIST;
					$masterTablesData["public.detalles_ventas"][1] = $masterParams;
				$masterTablesData["public.detalles_ventas"][1]["masterKeys"] = array();
	$masterTablesData["public.detalles_ventas"][1]["masterKeys"][]="id_ges_pes_residuo";
				$masterTablesData["public.detalles_ventas"][1]["detailKeys"] = array();
	$masterTablesData["public.detalles_ventas"][1]["detailKeys"][]="id_ges_pes_residuo";
		
	//endif
// -----------------end  prepare master-details data arrays ------------------------------//



require_once(getabspath("classes/sql.php"));











function createSqlQuery_public_detalles_ventas1()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "id_deta_venta,  	cantidad_venta,  	precio_venta,  	(cantidad_venta*precio_venta) as sub_total,  	id_venta,  	id_ges_pes_residuo";
$proto0["m_strFrom"] = "FROM \"public\".detalles_ventas";
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
	"m_strName" => "id_deta_venta",
	"m_strTable" => "public.detalles_ventas",
	"m_srcTableName" => "public.detalles_ventas"
));

$proto6["m_sql"] = "id_deta_venta";
$proto6["m_srcTableName"] = "public.detalles_ventas";
$proto6["m_expr"]=$obj;
$proto6["m_alias"] = "";
$obj = new SQLFieldListItem($proto6);

$proto0["m_fieldlist"][]=$obj;
						$proto8=array();
			$obj = new SQLField(array(
	"m_strName" => "cantidad_venta",
	"m_strTable" => "public.detalles_ventas",
	"m_srcTableName" => "public.detalles_ventas"
));

$proto8["m_sql"] = "cantidad_venta";
$proto8["m_srcTableName"] = "public.detalles_ventas";
$proto8["m_expr"]=$obj;
$proto8["m_alias"] = "";
$obj = new SQLFieldListItem($proto8);

$proto0["m_fieldlist"][]=$obj;
						$proto10=array();
			$obj = new SQLField(array(
	"m_strName" => "precio_venta",
	"m_strTable" => "public.detalles_ventas",
	"m_srcTableName" => "public.detalles_ventas"
));

$proto10["m_sql"] = "precio_venta";
$proto10["m_srcTableName"] = "public.detalles_ventas";
$proto10["m_expr"]=$obj;
$proto10["m_alias"] = "";
$obj = new SQLFieldListItem($proto10);

$proto0["m_fieldlist"][]=$obj;
						$proto12=array();
			$obj = new SQLNonParsed(array(
	"m_sql" => "(cantidad_venta*precio_venta)"
));

$proto12["m_sql"] = "(cantidad_venta*precio_venta)";
$proto12["m_srcTableName"] = "public.detalles_ventas";
$proto12["m_expr"]=$obj;
$proto12["m_alias"] = "sub_total";
$obj = new SQLFieldListItem($proto12);

$proto0["m_fieldlist"][]=$obj;
						$proto14=array();
			$obj = new SQLField(array(
	"m_strName" => "id_venta",
	"m_strTable" => "public.detalles_ventas",
	"m_srcTableName" => "public.detalles_ventas"
));

$proto14["m_sql"] = "id_venta";
$proto14["m_srcTableName"] = "public.detalles_ventas";
$proto14["m_expr"]=$obj;
$proto14["m_alias"] = "";
$obj = new SQLFieldListItem($proto14);

$proto0["m_fieldlist"][]=$obj;
						$proto16=array();
			$obj = new SQLField(array(
	"m_strName" => "id_ges_pes_residuo",
	"m_strTable" => "public.detalles_ventas",
	"m_srcTableName" => "public.detalles_ventas"
));

$proto16["m_sql"] = "id_ges_pes_residuo";
$proto16["m_srcTableName"] = "public.detalles_ventas";
$proto16["m_expr"]=$obj;
$proto16["m_alias"] = "";
$obj = new SQLFieldListItem($proto16);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto18=array();
$proto18["m_link"] = "SQLL_MAIN";
			$proto19=array();
$proto19["m_strName"] = "public.detalles_ventas";
$proto19["m_srcTableName"] = "public.detalles_ventas";
$proto19["m_columns"] = array();
$proto19["m_columns"][] = "id_deta_venta";
$proto19["m_columns"][] = "cantidad_venta";
$proto19["m_columns"][] = "precio_venta";
$proto19["m_columns"][] = "id_venta";
$proto19["m_columns"][] = "id_ges_pes_residuo";
$obj = new SQLTable($proto19);

$proto18["m_table"] = $obj;
$proto18["m_sql"] = "\"public\".detalles_ventas";
$proto18["m_alias"] = "";
$proto18["m_srcTableName"] = "public.detalles_ventas";
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
$proto0["m_srcTableName"]="public.detalles_ventas";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_public_detalles_ventas1 = createSqlQuery_public_detalles_ventas1();


	
		;

						

$tdatapublic_detalles_ventas1[".sqlquery"] = $queryData_public_detalles_ventas1;



include_once(getabspath("include/public_detalles_ventas1_events.php"));
$tableEvents["public.detalles_ventas"] = new eventclass_public_detalles_ventas1;
$tdatapublic_detalles_ventas1[".hasEvents"] = true;

?>