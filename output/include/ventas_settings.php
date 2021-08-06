<?php
$tdataventas = array();
$tdataventas[".searchableFields"] = array();
$tdataventas[".ShortName"] = "ventas";
$tdataventas[".OwnerID"] = "";
$tdataventas[".OriginalTable"] = "public.ventas";


$tdataventas[".pagesByType"] = my_json_decode( "{\"add\":[\"add\"],\"edit\":[\"edit\"],\"export\":[\"export\"],\"import\":[\"import\"],\"list\":[\"list\"],\"masterlist\":[\"masterlist\"],\"masterprint\":[\"masterprint\"],\"print\":[\"print\"],\"search\":[\"search\"],\"view\":[\"view\"]}" );
$tdataventas[".originalPagesByType"] = $tdataventas[".pagesByType"];
$tdataventas[".pages"] = types2pages( my_json_decode( "{\"add\":[\"add\"],\"edit\":[\"edit\"],\"export\":[\"export\"],\"import\":[\"import\"],\"list\":[\"list\"],\"masterlist\":[\"masterlist\"],\"masterprint\":[\"masterprint\"],\"print\":[\"print\"],\"search\":[\"search\"],\"view\":[\"view\"]}" ) );
$tdataventas[".originalPages"] = $tdataventas[".pages"];
$tdataventas[".defaultPages"] = my_json_decode( "{\"add\":\"add\",\"edit\":\"edit\",\"export\":\"export\",\"import\":\"import\",\"list\":\"list\",\"masterlist\":\"masterlist\",\"masterprint\":\"masterprint\",\"print\":\"print\",\"search\":\"search\",\"view\":\"view\"}" );
$tdataventas[".originalDefaultPages"] = $tdataventas[".defaultPages"];

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
	$fieldLabelsventas["Spanish"]["id_venta"] = "Código";
	$fieldToolTipsventas["Spanish"]["id_venta"] = "";
	$placeHoldersventas["Spanish"]["id_venta"] = "";
	$fieldLabelsventas["Spanish"]["fecha_venta"] = "Fecha Venta";
	$fieldToolTipsventas["Spanish"]["fecha_venta"] = "";
	$placeHoldersventas["Spanish"]["fecha_venta"] = "";
	$fieldLabelsventas["Spanish"]["observacion"] = "Observacion";
	$fieldToolTipsventas["Spanish"]["observacion"] = "";
	$placeHoldersventas["Spanish"]["observacion"] = "";
	$fieldLabelsventas["Spanish"]["id_empre_recichadora"] = "Venta Empresa Recicladora";
	$fieldToolTipsventas["Spanish"]["id_empre_recichadora"] = "";
	$placeHoldersventas["Spanish"]["id_empre_recichadora"] = "";
	$pageTitlesventas["Spanish"]["masterlist"] = "Vistas de Venta {%id_venta}";
	if (count($fieldToolTipsventas["Spanish"]))
		$tdataventas[".isUseToolTips"] = true;
}


	$tdataventas[".NCSearch"] = true;



$tdataventas[".shortTableName"] = "ventas";
$tdataventas[".nSecOptions"] = 0;

$tdataventas[".mainTableOwnerID"] = "";
$tdataventas[".entityType"] = 0;
$tdataventas[".connId"] = "RealEstate_at_localhost";


$tdataventas[".strOriginalTableName"] = "public.ventas";

	



$tdataventas[".showAddInPopup"] = false;

$tdataventas[".showEditInPopup"] = false;

$tdataventas[".showViewInPopup"] = false;

$tdataventas[".listAjax"] = false;
//	temporary
//$tdataventas[".listAjax"] = false;

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
$tdataventas[".afterAddActionDetTable"] = "public.detalles_ventas";
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


$tdataventas[".badgeColor"] = "008b8b";


$tdataventas[".allSearchFields"] = array();
$tdataventas[".filterFields"] = array();
$tdataventas[".requiredSearchFields"] = array();

$tdataventas[".googleLikeFields"] = array();
$tdataventas[".googleLikeFields"][] = "id_venta";
$tdataventas[".googleLikeFields"][] = "fecha_venta";
$tdataventas[".googleLikeFields"][] = "observacion";
$tdataventas[".googleLikeFields"][] = "id_empre_recichadora";



$tdataventas[".tableType"] = "list";

$tdataventas[".printerPageOrientation"] = 0;
$tdataventas[".nPrinterPageScale"] = 100;

$tdataventas[".nPrinterSplitRecords"] = 40;

$tdataventas[".geocodingEnabled"] = false;










$tdataventas[".pageSize"] = 20;

$tdataventas[".warnLeavingPages"] = true;



$tstrOrderBy = "";
$tdataventas[".strOrderBy"] = $tstrOrderBy;

$tdataventas[".orderindexes"] = array();


$tdataventas[".sqlHead"] = "SELECT id_venta,  	fecha_venta,  	observacion,  	id_empre_recichadora";
$tdataventas[".sqlFrom"] = "FROM \"public\".ventas";
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
$tableKeysventas[] = "id_venta";
$tdataventas[".Keys"] = $tableKeysventas;


$tdataventas[".hideMobileList"] = array();




//	id_venta
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "id_venta";
	$fdata["GoodName"] = "id_venta";
	$fdata["ownerTable"] = "public.ventas";
	$fdata["Label"] = GetFieldLabel("public_ventas","id_venta");
	$fdata["FieldType"] = 3;


		$fdata["AutoInc"] = true;

	
			

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


	$tdataventas["id_venta"] = $fdata;
		$tdataventas[".searchableFields"][] = "id_venta";
//	fecha_venta
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "fecha_venta";
	$fdata["GoodName"] = "fecha_venta";
	$fdata["ownerTable"] = "public.ventas";
	$fdata["Label"] = GetFieldLabel("public_ventas","fecha_venta");
	$fdata["FieldType"] = 7;


	
	
			

		$fdata["strField"] = "fecha_venta";

		$fdata["sourceSingle"] = "fecha_venta";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "fecha_venta";

	
	
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


	$tdataventas["fecha_venta"] = $fdata;
		$tdataventas[".searchableFields"][] = "fecha_venta";
//	observacion
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "observacion";
	$fdata["GoodName"] = "observacion";
	$fdata["ownerTable"] = "public.ventas";
	$fdata["Label"] = GetFieldLabel("public_ventas","observacion");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "observacion";

		$fdata["sourceSingle"] = "observacion";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "observacion";

	
	
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


	$tdataventas["observacion"] = $fdata;
		$tdataventas[".searchableFields"][] = "observacion";
//	id_empre_recichadora
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "id_empre_recichadora";
	$fdata["GoodName"] = "id_empre_recichadora";
	$fdata["ownerTable"] = "public.ventas";
	$fdata["Label"] = GetFieldLabel("public_ventas","id_empre_recichadora");
	$fdata["FieldType"] = 3;


	
	
			

		$fdata["strField"] = "id_empre_recichadora";

		$fdata["sourceSingle"] = "id_empre_recichadora";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "id_empre_recichadora";

	
	
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
	$edata["LookupTable"] = "public.empresas_recicladoras";
			$edata["autoCompleteFieldsOnEdit"] = 0;
	$edata["autoCompleteFields"] = array();
		$edata["LCType"] = 0;

	
		
	$edata["LinkField"] = "id_empre_recicladora";
	$edata["LinkFieldType"] = 0;
	$edata["DisplayField"] = "nombre_empre_recicladora";

	

	
	$edata["LookupOrderBy"] = "";

	
	
	
	

	
	
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
	$edata["LookupTable"] = "public.empresas_recicladoras";
			$edata["autoCompleteFieldsOnEdit"] = 0;
	$edata["autoCompleteFields"] = array();
		$edata["LCType"] = 0;

	
		
	$edata["LinkField"] = "id_empre_recicladora";
	$edata["LinkFieldType"] = 0;
	$edata["DisplayField"] = "nombre_empre_recicladora";

	

	
	$edata["LookupOrderBy"] = "";

	
	
	
	

	
	
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


	$tdataventas["id_empre_recichadora"] = $fdata;
		$tdataventas[".searchableFields"][] = "id_empre_recichadora";


$tables_data["public.ventas"]=&$tdataventas;
$field_labels["public_ventas"] = &$fieldLabelsventas;
$fieldToolTips["public_ventas"] = &$fieldToolTipsventas;
$placeHolders["public_ventas"] = &$placeHoldersventas;
$page_titles["public_ventas"] = &$pageTitlesventas;

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)

//if !@TABLE.bReportCrossTab

$detailsTablesData["public.ventas"] = array();
//	public.detalles_ventas
	
	

		$dIndex = 0;
	$detailsParam = array();
	$detailsParam["dDataSourceTable"]="public.detalles_ventas";
		$detailsParam["dOriginalTable"] = "public.detalles_ventas";



		
		$detailsParam["dType"]=PAGE_LIST;
	$detailsParam["dShortTable"] = "detalles_ventas";
	$detailsParam["dCaptionTable"] = GetTableCaption("public_detalles_ventas");
	$detailsParam["masterKeys"] =array();
	$detailsParam["detailKeys"] =array();


		
	$detailsTablesData["public.ventas"][$dIndex] = $detailsParam;

	
		$detailsTablesData["public.ventas"][$dIndex]["masterKeys"] = array();

	$detailsTablesData["public.ventas"][$dIndex]["masterKeys"][]="id_venta";

				$detailsTablesData["public.ventas"][$dIndex]["detailKeys"] = array();

	$detailsTablesData["public.ventas"][$dIndex]["detailKeys"][]="id_venta";
//endif

// tables which are master tables for current table (detail)
$masterTablesData["public.ventas"] = array();



// -----------------end  prepare master-details data arrays ------------------------------//



require_once(getabspath("classes/sql.php"));











function createSqlQuery_ventas()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "id_venta,  	fecha_venta,  	observacion,  	id_empre_recichadora";
$proto0["m_strFrom"] = "FROM \"public\".ventas";
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
	"m_strName" => "id_venta",
	"m_strTable" => "public.ventas",
	"m_srcTableName" => "public.ventas"
));

$proto6["m_sql"] = "id_venta";
$proto6["m_srcTableName"] = "public.ventas";
$proto6["m_expr"]=$obj;
$proto6["m_alias"] = "";
$obj = new SQLFieldListItem($proto6);

$proto0["m_fieldlist"][]=$obj;
						$proto8=array();
			$obj = new SQLField(array(
	"m_strName" => "fecha_venta",
	"m_strTable" => "public.ventas",
	"m_srcTableName" => "public.ventas"
));

$proto8["m_sql"] = "fecha_venta";
$proto8["m_srcTableName"] = "public.ventas";
$proto8["m_expr"]=$obj;
$proto8["m_alias"] = "";
$obj = new SQLFieldListItem($proto8);

$proto0["m_fieldlist"][]=$obj;
						$proto10=array();
			$obj = new SQLField(array(
	"m_strName" => "observacion",
	"m_strTable" => "public.ventas",
	"m_srcTableName" => "public.ventas"
));

$proto10["m_sql"] = "observacion";
$proto10["m_srcTableName"] = "public.ventas";
$proto10["m_expr"]=$obj;
$proto10["m_alias"] = "";
$obj = new SQLFieldListItem($proto10);

$proto0["m_fieldlist"][]=$obj;
						$proto12=array();
			$obj = new SQLField(array(
	"m_strName" => "id_empre_recichadora",
	"m_strTable" => "public.ventas",
	"m_srcTableName" => "public.ventas"
));

$proto12["m_sql"] = "id_empre_recichadora";
$proto12["m_srcTableName"] = "public.ventas";
$proto12["m_expr"]=$obj;
$proto12["m_alias"] = "";
$obj = new SQLFieldListItem($proto12);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto14=array();
$proto14["m_link"] = "SQLL_MAIN";
			$proto15=array();
$proto15["m_strName"] = "public.ventas";
$proto15["m_srcTableName"] = "public.ventas";
$proto15["m_columns"] = array();
$proto15["m_columns"][] = "id_venta";
$proto15["m_columns"][] = "fecha_venta";
$proto15["m_columns"][] = "observacion";
$proto15["m_columns"][] = "id_empre_recichadora";
$obj = new SQLTable($proto15);

$proto14["m_table"] = $obj;
$proto14["m_sql"] = "\"public\".ventas";
$proto14["m_alias"] = "";
$proto14["m_srcTableName"] = "public.ventas";
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
$proto0["m_srcTableName"]="public.ventas";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_ventas = createSqlQuery_ventas();


	
		;

				

$tdataventas[".sqlquery"] = $queryData_ventas;



$tableEvents["public.ventas"] = new eventsBase;
$tdataventas[".hasEvents"] = false;

?>