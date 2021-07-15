<?php



$tdatagestionregistrosorigen_chart = array();
$tdatagestionregistrosorigen_chart[".searchableFields"] = array();
$tdatagestionregistrosorigen_chart[".ShortName"] = "gestionregistrosorigen_chart";
$tdatagestionregistrosorigen_chart[".OwnerID"] = "";
$tdatagestionregistrosorigen_chart[".OriginalTable"] = "public.GestionRegistrosOrigen";


$defaultPages = my_json_decode( "{\"chart\":\"chart\",\"search\":\"search\"}" );

$tdatagestionregistrosorigen_chart[".pagesByType"] = my_json_decode( "{\"chart\":[\"chart\"],\"search\":[\"search\"]}" );
$tdatagestionregistrosorigen_chart[".pages"] = types2pages( my_json_decode( "{\"chart\":[\"chart\"],\"search\":[\"search\"]}" ) );
$tdatagestionregistrosorigen_chart[".defaultPages"] = $defaultPages;

//	field labels
$fieldLabelsgestionregistrosorigen_chart = array();
$fieldToolTipsgestionregistrosorigen_chart = array();
$pageTitlesgestionregistrosorigen_chart = array();
$placeHoldersgestionregistrosorigen_chart = array();

if(mlang_getcurrentlang()=="Spanish")
{
	$fieldLabelsgestionregistrosorigen_chart["Spanish"] = array();
	$fieldToolTipsgestionregistrosorigen_chart["Spanish"] = array();
	$placeHoldersgestionregistrosorigen_chart["Spanish"] = array();
	$pageTitlesgestionregistrosorigen_chart["Spanish"] = array();
	$fieldLabelsgestionregistrosorigen_chart["Spanish"]["IdGesRegOrigen"] = "Id Ges Reg Origen";
	$fieldToolTipsgestionregistrosorigen_chart["Spanish"]["IdGesRegOrigen"] = "";
	$placeHoldersgestionregistrosorigen_chart["Spanish"]["IdGesRegOrigen"] = "";
	$fieldLabelsgestionregistrosorigen_chart["Spanish"]["IdResiduo"] = "Id Residuo";
	$fieldToolTipsgestionregistrosorigen_chart["Spanish"]["IdResiduo"] = "";
	$placeHoldersgestionregistrosorigen_chart["Spanish"]["IdResiduo"] = "";
	$fieldLabelsgestionregistrosorigen_chart["Spanish"]["IdMedTipOrigen"] = "Id Med Tip Origen";
	$fieldToolTipsgestionregistrosorigen_chart["Spanish"]["IdMedTipOrigen"] = "";
	$placeHoldersgestionregistrosorigen_chart["Spanish"]["IdMedTipOrigen"] = "";
	$fieldLabelsgestionregistrosorigen_chart["Spanish"]["CantidadOrigen"] = "Cantidad Origen";
	$fieldToolTipsgestionregistrosorigen_chart["Spanish"]["CantidadOrigen"] = "";
	$placeHoldersgestionregistrosorigen_chart["Spanish"]["CantidadOrigen"] = "";
	$fieldLabelsgestionregistrosorigen_chart["Spanish"]["IdUsuario"] = "Id Usuario";
	$fieldToolTipsgestionregistrosorigen_chart["Spanish"]["IdUsuario"] = "";
	$placeHoldersgestionregistrosorigen_chart["Spanish"]["IdUsuario"] = "";
	if (count($fieldToolTipsgestionregistrosorigen_chart["Spanish"]))
		$tdatagestionregistrosorigen_chart[".isUseToolTips"] = true;
}


	$tdatagestionregistrosorigen_chart[".NCSearch"] = true;

	$tdatagestionregistrosorigen_chart[".ChartRefreshTime"] = 0;


$tdatagestionregistrosorigen_chart[".shortTableName"] = "gestionregistrosorigen_chart";
$tdatagestionregistrosorigen_chart[".nSecOptions"] = 0;

$tdatagestionregistrosorigen_chart[".mainTableOwnerID"] = "";
$tdatagestionregistrosorigen_chart[".entityType"] = 3;

$tdatagestionregistrosorigen_chart[".strOriginalTableName"] = "public.GestionRegistrosOrigen";

	



$tdatagestionregistrosorigen_chart[".showAddInPopup"] = false;

$tdatagestionregistrosorigen_chart[".showEditInPopup"] = false;

$tdatagestionregistrosorigen_chart[".showViewInPopup"] = false;

//page's base css files names
$popupPagesLayoutNames = array();
$tdatagestionregistrosorigen_chart[".popupPagesLayoutNames"] = $popupPagesLayoutNames;


$tdatagestionregistrosorigen_chart[".listAjax"] = false;
//	temporary
$tdatagestionregistrosorigen_chart[".listAjax"] = false;

	$tdatagestionregistrosorigen_chart[".audit"] = false;

	$tdatagestionregistrosorigen_chart[".locking"] = false;


$pages = $tdatagestionregistrosorigen_chart[".defaultPages"];

if( $pages[PAGE_EDIT] ) {
	$tdatagestionregistrosorigen_chart[".edit"] = true;
	$tdatagestionregistrosorigen_chart[".afterEditAction"] = 1;
	$tdatagestionregistrosorigen_chart[".closePopupAfterEdit"] = 1;
	$tdatagestionregistrosorigen_chart[".afterEditActionDetTable"] = "";
}

if( $pages[PAGE_ADD] ) {
$tdatagestionregistrosorigen_chart[".add"] = true;
$tdatagestionregistrosorigen_chart[".afterAddAction"] = 1;
$tdatagestionregistrosorigen_chart[".closePopupAfterAdd"] = 1;
$tdatagestionregistrosorigen_chart[".afterAddActionDetTable"] = "";
}

if( $pages[PAGE_LIST] ) {
	$tdatagestionregistrosorigen_chart[".list"] = true;
}



$tdatagestionregistrosorigen_chart[".strSortControlSettingsJSON"] = "";




if( $pages[PAGE_VIEW] ) {
$tdatagestionregistrosorigen_chart[".view"] = true;
}

if( $pages[PAGE_IMPORT] ) {
$tdatagestionregistrosorigen_chart[".import"] = true;
}

if( $pages[PAGE_EXPORT] ) {
$tdatagestionregistrosorigen_chart[".exportTo"] = true;
}

if( $pages[PAGE_PRINT] ) {
$tdatagestionregistrosorigen_chart[".printFriendly"] = true;
}



$tdatagestionregistrosorigen_chart[".showSimpleSearchOptions"] = true; // temp fix #13449

// Allow Show/Hide Fields in GRID
$tdatagestionregistrosorigen_chart[".allowShowHideFields"] = true; // temp fix #13449
//

// Allow Fields Reordering in GRID
$tdatagestionregistrosorigen_chart[".allowFieldsReordering"] = true; // temp fix #13449
//

$tdatagestionregistrosorigen_chart[".isUseAjaxSuggest"] = true;




			

$tdatagestionregistrosorigen_chart[".ajaxCodeSnippetAdded"] = false;

$tdatagestionregistrosorigen_chart[".buttonsAdded"] = false;

$tdatagestionregistrosorigen_chart[".addPageEvents"] = false;

// use timepicker for search panel
$tdatagestionregistrosorigen_chart[".isUseTimeForSearch"] = false;


$tdatagestionregistrosorigen_chart[".badgeColor"] = "778899";


$tdatagestionregistrosorigen_chart[".allSearchFields"] = array();
$tdatagestionregistrosorigen_chart[".filterFields"] = array();
$tdatagestionregistrosorigen_chart[".requiredSearchFields"] = array();

$tdatagestionregistrosorigen_chart[".googleLikeFields"] = array();
$tdatagestionregistrosorigen_chart[".googleLikeFields"][] = "IdGesRegOrigen";
$tdatagestionregistrosorigen_chart[".googleLikeFields"][] = "IdResiduo";
$tdatagestionregistrosorigen_chart[".googleLikeFields"][] = "IdMedTipOrigen";
$tdatagestionregistrosorigen_chart[".googleLikeFields"][] = "CantidadOrigen";
$tdatagestionregistrosorigen_chart[".googleLikeFields"][] = "IdUsuario";



$tdatagestionregistrosorigen_chart[".tableType"] = "chart";

$tdatagestionregistrosorigen_chart[".printerPageOrientation"] = 0;
$tdatagestionregistrosorigen_chart[".nPrinterPageScale"] = 100;

$tdatagestionregistrosorigen_chart[".nPrinterSplitRecords"] = 40;

$tdatagestionregistrosorigen_chart[".geocodingEnabled"] = false;



// chart settings
$tdatagestionregistrosorigen_chart[".chartType"] = "Combined";
// end of chart settings








$tstrOrderBy = "";
if(strlen($tstrOrderBy) && strtolower(substr($tstrOrderBy,0,8))!="order by")
	$tstrOrderBy = "order by ".$tstrOrderBy;
$tdatagestionregistrosorigen_chart[".strOrderBy"] = $tstrOrderBy;

$tdatagestionregistrosorigen_chart[".orderindexes"] = array();

$tdatagestionregistrosorigen_chart[".sqlHead"] = "SELECT \"IdGesRegOrigen\",  	\"IdResiduo\",  	\"IdMedTipOrigen\",  	\"CantidadOrigen\",  	\"IdUsuario\"";
$tdatagestionregistrosorigen_chart[".sqlFrom"] = "FROM \"public\".\"GestionRegistrosOrigen\"";
$tdatagestionregistrosorigen_chart[".sqlWhereExpr"] = "";
$tdatagestionregistrosorigen_chart[".sqlTail"] = "";










//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdatagestionregistrosorigen_chart[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdatagestionregistrosorigen_chart[".arrGroupsPerPage"] = $arrGPP;

$tdatagestionregistrosorigen_chart[".highlightSearchResults"] = true;

$tableKeysgestionregistrosorigen_chart = array();
$tableKeysgestionregistrosorigen_chart[] = "IdGesRegOrigen";
$tdatagestionregistrosorigen_chart[".Keys"] = $tableKeysgestionregistrosorigen_chart;


$tdatagestionregistrosorigen_chart[".hideMobileList"] = array();




//	IdGesRegOrigen
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "IdGesRegOrigen";
	$fdata["GoodName"] = "IdGesRegOrigen";
	$fdata["ownerTable"] = "public.GestionRegistrosOrigen";
	$fdata["Label"] = GetFieldLabel("public_GestionRegistrosOrigen_Chart","IdGesRegOrigen");
	$fdata["FieldType"] = 3;

	
		$fdata["AutoInc"] = true;

	
			

		$fdata["strField"] = "IdGesRegOrigen";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "\"IdGesRegOrigen\"";

	
	
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "");

	
	
	
	
	
	
	
	
	
	
	
	
		$vdata["NeedEncode"] = true;

	
		$vdata["truncateText"] = true;
	$vdata["NumberOfChars"] = 80;

	$fdata["ViewFormats"]["chart"] = $vdata;
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

	
	
	
	
	
	$fdata["EditFormats"]["search"] = $edata;
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


	$tdatagestionregistrosorigen_chart["IdGesRegOrigen"] = $fdata;
		$tdatagestionregistrosorigen_chart[".searchableFields"][] = "IdGesRegOrigen";
//	IdResiduo
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "IdResiduo";
	$fdata["GoodName"] = "IdResiduo";
	$fdata["ownerTable"] = "public.GestionRegistrosOrigen";
	$fdata["Label"] = GetFieldLabel("public_GestionRegistrosOrigen_Chart","IdResiduo");
	$fdata["FieldType"] = 3;

	
	
	
			

		$fdata["strField"] = "IdResiduo";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "\"IdResiduo\"";

	
	
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "");

	
	
	
	
	
	
	
	
	
	
	
	
		$vdata["NeedEncode"] = true;

	
		$vdata["truncateText"] = true;
	$vdata["NumberOfChars"] = 80;

	$fdata["ViewFormats"]["chart"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Lookup wizard");

	
		$edata["weekdayMessage"] = array("message" => "", "messageType" => "Text");
	$edata["weekdays"] = "[]";


	
	

// Begin Lookup settings
				$edata["LookupType"] = 2;
	$edata["LookupTable"] = "public.Residuos";
			$edata["autoCompleteFieldsOnEdit"] = 0;
	$edata["autoCompleteFields"] = array();
		$edata["LCType"] = 0;

	
		
	$edata["LinkField"] = "IdResiduo";
	$edata["LinkFieldType"] = 0;
	$edata["DisplayField"] = "DescriResiduo";

	

	
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

	
	
	
	
	
	$fdata["EditFormats"]["search"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;




// the field's search options settings
		$fdata["defaultSearchOption"] = "Equals";

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


	$tdatagestionregistrosorigen_chart["IdResiduo"] = $fdata;
		$tdatagestionregistrosorigen_chart[".searchableFields"][] = "IdResiduo";
//	IdMedTipOrigen
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "IdMedTipOrigen";
	$fdata["GoodName"] = "IdMedTipOrigen";
	$fdata["ownerTable"] = "public.GestionRegistrosOrigen";
	$fdata["Label"] = GetFieldLabel("public_GestionRegistrosOrigen_Chart","IdMedTipOrigen");
	$fdata["FieldType"] = 3;

	
	
	
			

		$fdata["strField"] = "IdMedTipOrigen";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "\"IdMedTipOrigen\"";

	
	
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "");

	
	
	
	
	
	
	
	
	
	
	
	
		$vdata["NeedEncode"] = true;

	
		$vdata["truncateText"] = true;
	$vdata["NumberOfChars"] = 80;

	$fdata["ViewFormats"]["chart"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Lookup wizard");

	
		$edata["weekdayMessage"] = array("message" => "", "messageType" => "Text");
	$edata["weekdays"] = "[]";


	
	

// Begin Lookup settings
				$edata["LookupType"] = 2;
	$edata["LookupTable"] = "public.MedTipoOrigen";
			$edata["autoCompleteFieldsOnEdit"] = 0;
	$edata["autoCompleteFields"] = array();
		$edata["LCType"] = 0;

	
		
	$edata["LinkField"] = "IdMedTipOrigen";
	$edata["LinkFieldType"] = 0;
	$edata["DisplayField"] = "DescriMedTipOrigen";

	

	
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

	
	
	
	
	
	$fdata["EditFormats"]["search"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;




// the field's search options settings
		$fdata["defaultSearchOption"] = "Equals";

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


	$tdatagestionregistrosorigen_chart["IdMedTipOrigen"] = $fdata;
		$tdatagestionregistrosorigen_chart[".searchableFields"][] = "IdMedTipOrigen";
//	CantidadOrigen
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "CantidadOrigen";
	$fdata["GoodName"] = "CantidadOrigen";
	$fdata["ownerTable"] = "public.GestionRegistrosOrigen";
	$fdata["Label"] = GetFieldLabel("public_GestionRegistrosOrigen_Chart","CantidadOrigen");
	$fdata["FieldType"] = 14;

	
	
	
			

		$fdata["strField"] = "CantidadOrigen";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "\"CantidadOrigen\"";

	
	
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "Number");

	
	
	
	
	
	
		$vdata["DecimalDigits"] = 0;

	
	
	
	
	
		$vdata["NeedEncode"] = true;

	
		$vdata["truncateText"] = true;
	$vdata["NumberOfChars"] = 80;

	$fdata["ViewFormats"]["chart"] = $vdata;
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

	
	
	
	
	
	$fdata["EditFormats"]["search"] = $edata;
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


	$tdatagestionregistrosorigen_chart["CantidadOrigen"] = $fdata;
		$tdatagestionregistrosorigen_chart[".searchableFields"][] = "CantidadOrigen";
//	IdUsuario
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 5;
	$fdata["strName"] = "IdUsuario";
	$fdata["GoodName"] = "IdUsuario";
	$fdata["ownerTable"] = "public.GestionRegistrosOrigen";
	$fdata["Label"] = GetFieldLabel("public_GestionRegistrosOrigen_Chart","IdUsuario");
	$fdata["FieldType"] = 3;

	
	
	
			

		$fdata["strField"] = "IdUsuario";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "\"IdUsuario\"";

	
	
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "");

	
	
	
	
	
	
	
	
	
	
	
	
		$vdata["NeedEncode"] = true;

	
		$vdata["truncateText"] = true;
	$vdata["NumberOfChars"] = 80;

	$fdata["ViewFormats"]["print"] = $vdata;
	$vdata = array("ViewFormat" => "");

	
	
	
	
	
	
	
	
	
	
	
	
		$vdata["NeedEncode"] = true;

	
		$vdata["truncateText"] = true;
	$vdata["NumberOfChars"] = 80;

	$fdata["ViewFormats"]["view"] = $vdata;
	$vdata = array("ViewFormat" => "");

	
	
	
	
	
	
	
	
	
	
	
	
		$vdata["NeedEncode"] = true;

	
		$vdata["truncateText"] = true;
	$vdata["NumberOfChars"] = 80;

	$fdata["ViewFormats"]["chart"] = $vdata;
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

	
	
	
	
	
	$fdata["EditFormats"]["edit"] = $edata;
	$edata = array("EditFormat" => "Lookup wizard");

	
		$edata["weekdayMessage"] = array("message" => "", "messageType" => "Text");
	$edata["weekdays"] = "[]";


	
	

// Begin Lookup settings
				$edata["LookupType"] = 2;
	$edata["LookupTable"] = "public.Usuarios";
			$edata["freeInput"] = true;
	$edata["autoCompleteFieldsOnEdit"] = 0;
	$edata["autoCompleteFields"] = array();
		$edata["LCType"] = 1;

	
		
	$edata["LinkField"] = "IdUsuario";
	$edata["LinkFieldType"] = 0;
	$edata["DisplayField"] = "IdUsuario";

	

	
	$edata["LookupOrderBy"] = "";

	
	
	
	

	
	
	
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


	$tdatagestionregistrosorigen_chart["IdUsuario"] = $fdata;
		$tdatagestionregistrosorigen_chart[".searchableFields"][] = "IdUsuario";

	$tdatagestionregistrosorigen_chart[".chartXml"] = '<chart>
		<attr value="tables">
			<attr value="0">public.GestionRegistrosOrigen Chart</attr>
		</attr>
		<attr value="chart_type">
			<attr value="type">combined</attr>
		</attr>

		<attr value="parameters">';
	$tdatagestionregistrosorigen_chart[".chartXml"] .= '<attr value="0">
			<attr value="name">IdResiduo</attr>';
	$tdatagestionregistrosorigen_chart[".chartXml"] .= '</attr>';
	$tdatagestionregistrosorigen_chart[".chartXml"] .= '<attr value="1">
		<attr value="name">IdResiduo</attr>
	</attr>';
	$tdatagestionregistrosorigen_chart[".chartXml"] .= '</attr>
			<attr value="appearance">';


	$tdatagestionregistrosorigen_chart[".chartXml"] .= '<attr value="head">'.xmlencode("public.GestionRegistrosOrigen Chart").'</attr>
<attr value="foot">'.xmlencode("Legend Title").'</attr>
<attr value="y_axis_label">'.xmlencode("IdResiduo").'</attr>


<attr value="slegend">true</attr>
<attr value="sgrid">false</attr>
<attr value="sname">true</attr>
<attr value="sval">true</attr>
<attr value="sanim">true</attr>
<attr value="sstacked">false</attr>
<attr value="slog">false</attr>
<attr value="aqua">None</attr>
<attr value="cview">Column</attr>
<attr value="is3d">0</attr>
<attr value="isstacked">0</attr>
<attr value="linestyle">0</attr>
<attr value="autoupdate">0</attr>
<attr value="autoupmin">60</attr>';
$tdatagestionregistrosorigen_chart[".chartXml"] .= '</attr>

<attr value="fields">';
	$tdatagestionregistrosorigen_chart[".chartXml"] .= '<attr value="0">
		<attr value="name">IdGesRegOrigen</attr>
		<attr value="label">'.xmlencode(GetFieldLabel("public_GestionRegistrosOrigen_Chart","IdGesRegOrigen")).'</attr>
		<attr value="search"></attr>
	</attr>';
	$tdatagestionregistrosorigen_chart[".chartXml"] .= '<attr value="1">
		<attr value="name">IdResiduo</attr>
		<attr value="label">'.xmlencode(GetFieldLabel("public_GestionRegistrosOrigen_Chart","IdResiduo")).'</attr>
		<attr value="search"></attr>
	</attr>';
	$tdatagestionregistrosorigen_chart[".chartXml"] .= '<attr value="2">
		<attr value="name">IdMedTipOrigen</attr>
		<attr value="label">'.xmlencode(GetFieldLabel("public_GestionRegistrosOrigen_Chart","IdMedTipOrigen")).'</attr>
		<attr value="search"></attr>
	</attr>';
	$tdatagestionregistrosorigen_chart[".chartXml"] .= '<attr value="3">
		<attr value="name">CantidadOrigen</attr>
		<attr value="label">'.xmlencode(GetFieldLabel("public_GestionRegistrosOrigen_Chart","CantidadOrigen")).'</attr>
		<attr value="search"></attr>
	</attr>';
	$tdatagestionregistrosorigen_chart[".chartXml"] .= '<attr value="4">
		<attr value="name">IdUsuario</attr>
		<attr value="label">'.xmlencode(GetFieldLabel("public_GestionRegistrosOrigen_Chart","IdUsuario")).'</attr>
		<attr value="search"></attr>
	</attr>';
$tdatagestionregistrosorigen_chart[".chartXml"] .= '</attr>


<attr value="settings">
<attr value="name">public.GestionRegistrosOrigen Chart</attr>
<attr value="short_table_name">gestionregistrosorigen_chart</attr>
</attr>

</chart>';

$tables_data["public.GestionRegistrosOrigen Chart"]=&$tdatagestionregistrosorigen_chart;
$field_labels["public_GestionRegistrosOrigen_Chart"] = &$fieldLabelsgestionregistrosorigen_chart;
$fieldToolTips["public_GestionRegistrosOrigen_Chart"] = &$fieldToolTipsgestionregistrosorigen_chart;
$placeHolders["public_GestionRegistrosOrigen_Chart"] = &$placeHoldersgestionregistrosorigen_chart;
$page_titles["public_GestionRegistrosOrigen_Chart"] = &$pageTitlesgestionregistrosorigen_chart;

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)
$detailsTablesData["public.GestionRegistrosOrigen Chart"] = array();

// tables which are master tables for current table (detail)
$masterTablesData["public.GestionRegistrosOrigen Chart"] = array();



// -----------------end  prepare master-details data arrays ------------------------------//


require_once(getabspath("classes/sql.php"));










function createSqlQuery_gestionregistrosorigen_chart()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "\"IdGesRegOrigen\",  	\"IdResiduo\",  	\"IdMedTipOrigen\",  	\"CantidadOrigen\",  	\"IdUsuario\"";
$proto0["m_strFrom"] = "FROM \"public\".\"GestionRegistrosOrigen\"";
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
	"m_strName" => "IdGesRegOrigen",
	"m_strTable" => "public.GestionRegistrosOrigen",
	"m_srcTableName" => "public.GestionRegistrosOrigen Chart"
));

$proto6["m_sql"] = "\"IdGesRegOrigen\"";
$proto6["m_srcTableName"] = "public.GestionRegistrosOrigen Chart";
$proto6["m_expr"]=$obj;
$proto6["m_alias"] = "";
$obj = new SQLFieldListItem($proto6);

$proto0["m_fieldlist"][]=$obj;
						$proto8=array();
			$obj = new SQLField(array(
	"m_strName" => "IdResiduo",
	"m_strTable" => "public.GestionRegistrosOrigen",
	"m_srcTableName" => "public.GestionRegistrosOrigen Chart"
));

$proto8["m_sql"] = "\"IdResiduo\"";
$proto8["m_srcTableName"] = "public.GestionRegistrosOrigen Chart";
$proto8["m_expr"]=$obj;
$proto8["m_alias"] = "";
$obj = new SQLFieldListItem($proto8);

$proto0["m_fieldlist"][]=$obj;
						$proto10=array();
			$obj = new SQLField(array(
	"m_strName" => "IdMedTipOrigen",
	"m_strTable" => "public.GestionRegistrosOrigen",
	"m_srcTableName" => "public.GestionRegistrosOrigen Chart"
));

$proto10["m_sql"] = "\"IdMedTipOrigen\"";
$proto10["m_srcTableName"] = "public.GestionRegistrosOrigen Chart";
$proto10["m_expr"]=$obj;
$proto10["m_alias"] = "";
$obj = new SQLFieldListItem($proto10);

$proto0["m_fieldlist"][]=$obj;
						$proto12=array();
			$obj = new SQLField(array(
	"m_strName" => "CantidadOrigen",
	"m_strTable" => "public.GestionRegistrosOrigen",
	"m_srcTableName" => "public.GestionRegistrosOrigen Chart"
));

$proto12["m_sql"] = "\"CantidadOrigen\"";
$proto12["m_srcTableName"] = "public.GestionRegistrosOrigen Chart";
$proto12["m_expr"]=$obj;
$proto12["m_alias"] = "";
$obj = new SQLFieldListItem($proto12);

$proto0["m_fieldlist"][]=$obj;
						$proto14=array();
			$obj = new SQLField(array(
	"m_strName" => "IdUsuario",
	"m_strTable" => "public.GestionRegistrosOrigen",
	"m_srcTableName" => "public.GestionRegistrosOrigen Chart"
));

$proto14["m_sql"] = "\"IdUsuario\"";
$proto14["m_srcTableName"] = "public.GestionRegistrosOrigen Chart";
$proto14["m_expr"]=$obj;
$proto14["m_alias"] = "";
$obj = new SQLFieldListItem($proto14);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto16=array();
$proto16["m_link"] = "SQLL_MAIN";
			$proto17=array();
$proto17["m_strName"] = "public.GestionRegistrosOrigen";
$proto17["m_srcTableName"] = "public.GestionRegistrosOrigen Chart";
$proto17["m_columns"] = array();
$proto17["m_columns"][] = "IdGesRegOrigen";
$proto17["m_columns"][] = "IdResiduo";
$proto17["m_columns"][] = "IdMedTipOrigen";
$proto17["m_columns"][] = "CantidadOrigen";
$proto17["m_columns"][] = "IdUsuario";
$obj = new SQLTable($proto17);

$proto16["m_table"] = $obj;
$proto16["m_sql"] = "\"public\".\"GestionRegistrosOrigen\"";
$proto16["m_alias"] = "";
$proto16["m_srcTableName"] = "public.GestionRegistrosOrigen Chart";
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
$proto0["m_srcTableName"]="public.GestionRegistrosOrigen Chart";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_gestionregistrosorigen_chart = createSqlQuery_gestionregistrosorigen_chart();


	
		;

					

$tdatagestionregistrosorigen_chart[".sqlquery"] = $queryData_gestionregistrosorigen_chart;

$tableEvents["public.GestionRegistrosOrigen Chart"] = new eventsBase;
$tdatagestionregistrosorigen_chart[".hasEvents"] = false;

?>