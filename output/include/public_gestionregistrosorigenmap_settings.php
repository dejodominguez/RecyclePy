<?php



$tdatapublic_gestionregistrosorigenmap = array();
$tdatapublic_gestionregistrosorigenmap[".searchableFields"] = array();
$tdatapublic_gestionregistrosorigenmap[".ShortName"] = "public_gestionregistrosorigenmap";
$tdatapublic_gestionregistrosorigenmap[".OwnerID"] = "IdUsuario";
$tdatapublic_gestionregistrosorigenmap[".OriginalTable"] = "public.GestionRegistrosOrigen";


$defaultPages = my_json_decode( "{\"add\":\"add\",\"edit\":\"edit\",\"export\":\"export\",\"import\":\"import\",\"list\":\"list\",\"print\":\"print\",\"search\":\"search\",\"view\":\"view\"}" );

$tdatapublic_gestionregistrosorigenmap[".pagesByType"] = my_json_decode( "{\"add\":[\"add\"],\"edit\":[\"edit\"],\"export\":[\"export\"],\"import\":[\"import\"],\"list\":[\"list\"],\"print\":[\"print\"],\"search\":[\"search\"],\"view\":[\"view\"]}" );
$tdatapublic_gestionregistrosorigenmap[".pages"] = types2pages( my_json_decode( "{\"add\":[\"add\"],\"edit\":[\"edit\"],\"export\":[\"export\"],\"import\":[\"import\"],\"list\":[\"list\"],\"print\":[\"print\"],\"search\":[\"search\"],\"view\":[\"view\"]}" ) );
$tdatapublic_gestionregistrosorigenmap[".defaultPages"] = $defaultPages;

//	field labels
$fieldLabelspublic_gestionregistrosorigenmap = array();
$fieldToolTipspublic_gestionregistrosorigenmap = array();
$pageTitlespublic_gestionregistrosorigenmap = array();
$placeHolderspublic_gestionregistrosorigenmap = array();

if(mlang_getcurrentlang()=="Spanish")
{
	$fieldLabelspublic_gestionregistrosorigenmap["Spanish"] = array();
	$fieldToolTipspublic_gestionregistrosorigenmap["Spanish"] = array();
	$placeHolderspublic_gestionregistrosorigenmap["Spanish"] = array();
	$pageTitlespublic_gestionregistrosorigenmap["Spanish"] = array();
	$fieldLabelspublic_gestionregistrosorigenmap["Spanish"]["IdGesRegOrigen"] = "Codigo";
	$fieldToolTipspublic_gestionregistrosorigenmap["Spanish"]["IdGesRegOrigen"] = "";
	$placeHolderspublic_gestionregistrosorigenmap["Spanish"]["IdGesRegOrigen"] = "";
	$fieldLabelspublic_gestionregistrosorigenmap["Spanish"]["IdResiduo"] = "Tipo de Residuo";
	$fieldToolTipspublic_gestionregistrosorigenmap["Spanish"]["IdResiduo"] = "";
	$placeHolderspublic_gestionregistrosorigenmap["Spanish"]["IdResiduo"] = "";
	$fieldLabelspublic_gestionregistrosorigenmap["Spanish"]["IdMedTipOrigen"] = "Medida de Residuo";
	$fieldToolTipspublic_gestionregistrosorigenmap["Spanish"]["IdMedTipOrigen"] = "";
	$placeHolderspublic_gestionregistrosorigenmap["Spanish"]["IdMedTipOrigen"] = "";
	$fieldLabelspublic_gestionregistrosorigenmap["Spanish"]["CantidadOrigen"] = "Cantidad Origen";
	$fieldToolTipspublic_gestionregistrosorigenmap["Spanish"]["CantidadOrigen"] = "";
	$placeHolderspublic_gestionregistrosorigenmap["Spanish"]["CantidadOrigen"] = "";
	$fieldLabelspublic_gestionregistrosorigenmap["Spanish"]["IdUsuario"] = "Id Usuario";
	$fieldToolTipspublic_gestionregistrosorigenmap["Spanish"]["IdUsuario"] = "";
	$placeHolderspublic_gestionregistrosorigenmap["Spanish"]["IdUsuario"] = "";
	$fieldLabelspublic_gestionregistrosorigenmap["Spanish"]["NombreUsuario"] = "Nombre de Separador/a";
	$fieldToolTipspublic_gestionregistrosorigenmap["Spanish"]["NombreUsuario"] = "";
	$placeHolderspublic_gestionregistrosorigenmap["Spanish"]["NombreUsuario"] = "";
	$fieldLabelspublic_gestionregistrosorigenmap["Spanish"]["Lat"] = "Lat";
	$fieldToolTipspublic_gestionregistrosorigenmap["Spanish"]["Lat"] = "";
	$placeHolderspublic_gestionregistrosorigenmap["Spanish"]["Lat"] = "";
	$fieldLabelspublic_gestionregistrosorigenmap["Spanish"]["Lng"] = "Lng";
	$fieldToolTipspublic_gestionregistrosorigenmap["Spanish"]["Lng"] = "";
	$placeHolderspublic_gestionregistrosorigenmap["Spanish"]["Lng"] = "";
	if (count($fieldToolTipspublic_gestionregistrosorigenmap["Spanish"]))
		$tdatapublic_gestionregistrosorigenmap[".isUseToolTips"] = true;
}


	$tdatapublic_gestionregistrosorigenmap[".NCSearch"] = true;



$tdatapublic_gestionregistrosorigenmap[".shortTableName"] = "public_gestionregistrosorigenmap";
$tdatapublic_gestionregistrosorigenmap[".nSecOptions"] = 0;

$tdatapublic_gestionregistrosorigenmap[".mainTableOwnerID"] = "IdUsuario";
$tdatapublic_gestionregistrosorigenmap[".entityType"] = 1;

$tdatapublic_gestionregistrosorigenmap[".strOriginalTableName"] = "public.GestionRegistrosOrigen";

	



$tdatapublic_gestionregistrosorigenmap[".showAddInPopup"] = false;

$tdatapublic_gestionregistrosorigenmap[".showEditInPopup"] = false;

$tdatapublic_gestionregistrosorigenmap[".showViewInPopup"] = false;

//page's base css files names
$popupPagesLayoutNames = array();
$tdatapublic_gestionregistrosorigenmap[".popupPagesLayoutNames"] = $popupPagesLayoutNames;


$tdatapublic_gestionregistrosorigenmap[".listAjax"] = false;
//	temporary
$tdatapublic_gestionregistrosorigenmap[".listAjax"] = false;

	$tdatapublic_gestionregistrosorigenmap[".audit"] = false;

	$tdatapublic_gestionregistrosorigenmap[".locking"] = false;


$pages = $tdatapublic_gestionregistrosorigenmap[".defaultPages"];

if( $pages[PAGE_EDIT] ) {
	$tdatapublic_gestionregistrosorigenmap[".edit"] = true;
	$tdatapublic_gestionregistrosorigenmap[".afterEditAction"] = 1;
	$tdatapublic_gestionregistrosorigenmap[".closePopupAfterEdit"] = 1;
	$tdatapublic_gestionregistrosorigenmap[".afterEditActionDetTable"] = "";
}

if( $pages[PAGE_ADD] ) {
$tdatapublic_gestionregistrosorigenmap[".add"] = true;
$tdatapublic_gestionregistrosorigenmap[".afterAddAction"] = 1;
$tdatapublic_gestionregistrosorigenmap[".closePopupAfterAdd"] = 1;
$tdatapublic_gestionregistrosorigenmap[".afterAddActionDetTable"] = "";
}

if( $pages[PAGE_LIST] ) {
	$tdatapublic_gestionregistrosorigenmap[".list"] = true;
}



$tdatapublic_gestionregistrosorigenmap[".strSortControlSettingsJSON"] = "";




if( $pages[PAGE_VIEW] ) {
$tdatapublic_gestionregistrosorigenmap[".view"] = true;
}

if( $pages[PAGE_IMPORT] ) {
$tdatapublic_gestionregistrosorigenmap[".import"] = true;
}

if( $pages[PAGE_EXPORT] ) {
$tdatapublic_gestionregistrosorigenmap[".exportTo"] = true;
}

if( $pages[PAGE_PRINT] ) {
$tdatapublic_gestionregistrosorigenmap[".printFriendly"] = true;
}



$tdatapublic_gestionregistrosorigenmap[".showSimpleSearchOptions"] = true; // temp fix #13449

// Allow Show/Hide Fields in GRID
$tdatapublic_gestionregistrosorigenmap[".allowShowHideFields"] = true; // temp fix #13449
//

// Allow Fields Reordering in GRID
$tdatapublic_gestionregistrosorigenmap[".allowFieldsReordering"] = true; // temp fix #13449
//

$tdatapublic_gestionregistrosorigenmap[".isUseAjaxSuggest"] = true;

$tdatapublic_gestionregistrosorigenmap[".rowHighlite"] = true;



			

$tdatapublic_gestionregistrosorigenmap[".ajaxCodeSnippetAdded"] = false;

$tdatapublic_gestionregistrosorigenmap[".buttonsAdded"] = false;

$tdatapublic_gestionregistrosorigenmap[".addPageEvents"] = false;

// use timepicker for search panel
$tdatapublic_gestionregistrosorigenmap[".isUseTimeForSearch"] = false;

$tdatapublic_gestionregistrosorigenmap[".isUseFieldsMaps"] = true;

$tdatapublic_gestionregistrosorigenmap[".badgeColor"] = "E67349";


$tdatapublic_gestionregistrosorigenmap[".allSearchFields"] = array();
$tdatapublic_gestionregistrosorigenmap[".filterFields"] = array();
$tdatapublic_gestionregistrosorigenmap[".requiredSearchFields"] = array();

$tdatapublic_gestionregistrosorigenmap[".googleLikeFields"] = array();
$tdatapublic_gestionregistrosorigenmap[".googleLikeFields"][] = "IdGesRegOrigen";
$tdatapublic_gestionregistrosorigenmap[".googleLikeFields"][] = "IdResiduo";
$tdatapublic_gestionregistrosorigenmap[".googleLikeFields"][] = "IdMedTipOrigen";
$tdatapublic_gestionregistrosorigenmap[".googleLikeFields"][] = "CantidadOrigen";
$tdatapublic_gestionregistrosorigenmap[".googleLikeFields"][] = "IdUsuario";
$tdatapublic_gestionregistrosorigenmap[".googleLikeFields"][] = "NombreUsuario";
$tdatapublic_gestionregistrosorigenmap[".googleLikeFields"][] = "Lat";
$tdatapublic_gestionregistrosorigenmap[".googleLikeFields"][] = "Lng";



$tdatapublic_gestionregistrosorigenmap[".tableType"] = "list";

$tdatapublic_gestionregistrosorigenmap[".printerPageOrientation"] = 0;
$tdatapublic_gestionregistrosorigenmap[".nPrinterPageScale"] = 100;

$tdatapublic_gestionregistrosorigenmap[".nPrinterSplitRecords"] = 40;

$tdatapublic_gestionregistrosorigenmap[".geocodingEnabled"] = true;
$tdatapublic_gestionregistrosorigenmap[".geocodingData"] = array();
$tdatapublic_gestionregistrosorigenmap[".geocodingData"]["latField"] = "Lat";
$tdatapublic_gestionregistrosorigenmap[".geocodingData"]["lngField"] = "Lng";
$tdatapublic_gestionregistrosorigenmap[".geocodingData"]["addressFields"] = array();
	$tdatapublic_gestionregistrosorigenmap[".geocodingData"]["addressFields"][] = "CantidadOrigen";
	$tdatapublic_gestionregistrosorigenmap[".geocodingData"]["addressFields"][] = "IdGesRegOrigen";
	$tdatapublic_gestionregistrosorigenmap[".geocodingData"]["addressFields"][] = "IdMedTipOrigen";
	$tdatapublic_gestionregistrosorigenmap[".geocodingData"]["addressFields"][] = "IdResiduo";
	$tdatapublic_gestionregistrosorigenmap[".geocodingData"]["addressFields"][] = "IdUsuario";
	$tdatapublic_gestionregistrosorigenmap[".geocodingData"]["addressFields"][] = "NombreUsuario";
	$tdatapublic_gestionregistrosorigenmap[".geocodingData"]["addressFields"][] = "Lat";
	$tdatapublic_gestionregistrosorigenmap[".geocodingData"]["addressFields"][] = "Lng";










$tdatapublic_gestionregistrosorigenmap[".pageSize"] = 20;

$tdatapublic_gestionregistrosorigenmap[".warnLeavingPages"] = true;



$tstrOrderBy = "";
if(strlen($tstrOrderBy) && strtolower(substr($tstrOrderBy,0,8))!="order by")
	$tstrOrderBy = "order by ".$tstrOrderBy;
$tdatapublic_gestionregistrosorigenmap[".strOrderBy"] = $tstrOrderBy;

$tdatapublic_gestionregistrosorigenmap[".orderindexes"] = array();

$tdatapublic_gestionregistrosorigenmap[".sqlHead"] = "SELECT gr.\"IdGesRegOrigen\",  gr.\"IdResiduo\",  gr.\"IdMedTipOrigen\",  gr.\"CantidadOrigen\",  u.\"IdUsuario\",  u.\"NombreUsuario\",  gr.\"Lat\",  gr.\"Lng\"";
$tdatapublic_gestionregistrosorigenmap[".sqlFrom"] = "FROM \"public\".\"GestionRegistrosOrigen\" AS gr  , \"public\".\"Usuarios\" AS u";
$tdatapublic_gestionregistrosorigenmap[".sqlWhereExpr"] = "gr.\"IdUsuario\" =u.\"IdUsuario\"";
$tdatapublic_gestionregistrosorigenmap[".sqlTail"] = "";

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
$tdatapublic_gestionregistrosorigenmap[".arrGridTabs"] = $arrGridTabs;









//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdatapublic_gestionregistrosorigenmap[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdatapublic_gestionregistrosorigenmap[".arrGroupsPerPage"] = $arrGPP;

$tdatapublic_gestionregistrosorigenmap[".highlightSearchResults"] = true;

$tableKeyspublic_gestionregistrosorigenmap = array();
$tableKeyspublic_gestionregistrosorigenmap[] = "IdGesRegOrigen";
$tdatapublic_gestionregistrosorigenmap[".Keys"] = $tableKeyspublic_gestionregistrosorigenmap;


$tdatapublic_gestionregistrosorigenmap[".hideMobileList"] = array();




//	IdGesRegOrigen
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "IdGesRegOrigen";
	$fdata["GoodName"] = "IdGesRegOrigen";
	$fdata["ownerTable"] = "public.GestionRegistrosOrigen";
	$fdata["Label"] = GetFieldLabel("public_GestionRegistrosOrigenMap","IdGesRegOrigen");
	$fdata["FieldType"] = 3;

	
		$fdata["AutoInc"] = true;

	
			

		$fdata["strField"] = "IdGesRegOrigen";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "gr.\"IdGesRegOrigen\"";

	
	
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


	$tdatapublic_gestionregistrosorigenmap["IdGesRegOrigen"] = $fdata;
		$tdatapublic_gestionregistrosorigenmap[".searchableFields"][] = "IdGesRegOrigen";
//	IdResiduo
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "IdResiduo";
	$fdata["GoodName"] = "IdResiduo";
	$fdata["ownerTable"] = "public.GestionRegistrosOrigen";
	$fdata["Label"] = GetFieldLabel("public_GestionRegistrosOrigenMap","IdResiduo");
	$fdata["FieldType"] = 3;

	
	
	
			

		$fdata["strField"] = "IdResiduo";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "gr.\"IdResiduo\"";

	
	
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

	
			
	
	
	
	$fdata["EditFormats"]["edit"] = $edata;
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


	$tdatapublic_gestionregistrosorigenmap["IdResiduo"] = $fdata;
		$tdatapublic_gestionregistrosorigenmap[".searchableFields"][] = "IdResiduo";
//	IdMedTipOrigen
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "IdMedTipOrigen";
	$fdata["GoodName"] = "IdMedTipOrigen";
	$fdata["ownerTable"] = "public.GestionRegistrosOrigen";
	$fdata["Label"] = GetFieldLabel("public_GestionRegistrosOrigenMap","IdMedTipOrigen");
	$fdata["FieldType"] = 3;

	
	
	
			

		$fdata["strField"] = "IdMedTipOrigen";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "gr.\"IdMedTipOrigen\"";

	
	
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

	
			
	
	
	
	$fdata["EditFormats"]["edit"] = $edata;
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


	$tdatapublic_gestionregistrosorigenmap["IdMedTipOrigen"] = $fdata;
		$tdatapublic_gestionregistrosorigenmap[".searchableFields"][] = "IdMedTipOrigen";
//	CantidadOrigen
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "CantidadOrigen";
	$fdata["GoodName"] = "CantidadOrigen";
	$fdata["ownerTable"] = "public.GestionRegistrosOrigen";
	$fdata["Label"] = GetFieldLabel("public_GestionRegistrosOrigenMap","CantidadOrigen");
	$fdata["FieldType"] = 14;

	
	
	
			

		$fdata["strField"] = "CantidadOrigen";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "gr.\"CantidadOrigen\"";

	
	
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


	$tdatapublic_gestionregistrosorigenmap["CantidadOrigen"] = $fdata;
		$tdatapublic_gestionregistrosorigenmap[".searchableFields"][] = "CantidadOrigen";
//	IdUsuario
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 5;
	$fdata["strName"] = "IdUsuario";
	$fdata["GoodName"] = "IdUsuario";
	$fdata["ownerTable"] = "public.Usuarios";
	$fdata["Label"] = GetFieldLabel("public_GestionRegistrosOrigenMap","IdUsuario");
	$fdata["FieldType"] = 3;

	
	
	
			

		$fdata["strField"] = "IdUsuario";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "u.\"IdUsuario\"";

	
	
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

	
			
	
	
	
	$fdata["EditFormats"]["edit"] = $edata;
	$edata = array("EditFormat" => "Lookup wizard");

	
		$edata["weekdayMessage"] = array("message" => "", "messageType" => "Text");
	$edata["weekdays"] = "[]";


	
	

// Begin Lookup settings
				$edata["LookupType"] = 2;
	$edata["LookupTable"] = "public.Usuarios";
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

	
			
	
	
	
	$fdata["EditFormats"]["add"] = $edata;
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


	$tdatapublic_gestionregistrosorigenmap["IdUsuario"] = $fdata;
		$tdatapublic_gestionregistrosorigenmap[".searchableFields"][] = "IdUsuario";
//	NombreUsuario
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 6;
	$fdata["strName"] = "NombreUsuario";
	$fdata["GoodName"] = "NombreUsuario";
	$fdata["ownerTable"] = "public.Usuarios";
	$fdata["Label"] = GetFieldLabel("public_GestionRegistrosOrigenMap","NombreUsuario");
	$fdata["FieldType"] = 200;

	
	
	
			

		$fdata["strField"] = "NombreUsuario";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "u.\"NombreUsuario\"";

	
	
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "Map");

	
	
	
	
	
	
	
	
	
	
	
		$vdata["mapData"] = array();
	$vdata["mapData"]['width'] = 300;
	$vdata["mapData"]['height'] = 225;
	$vdata["mapData"]['address'] = "";
	$vdata["mapData"]['lat'] = "Lat";
	$vdata["mapData"]['lng'] = "Lng";
	$vdata["mapData"]['desc'] = "";
	$vdata["mapData"]['mapIcon'] = "";
	$vdata["mapData"]['isMapIconCustom'] = 0;
		$vdata["mapData"]['zoom'] = 15;

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


	$tdatapublic_gestionregistrosorigenmap["NombreUsuario"] = $fdata;
		$tdatapublic_gestionregistrosorigenmap[".searchableFields"][] = "NombreUsuario";
//	Lat
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 7;
	$fdata["strName"] = "Lat";
	$fdata["GoodName"] = "Lat";
	$fdata["ownerTable"] = "public.GestionRegistrosOrigen";
	$fdata["Label"] = GetFieldLabel("public_GestionRegistrosOrigenMap","Lat");
	$fdata["FieldType"] = 14;

	
	
	
			

		$fdata["strField"] = "Lat";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "gr.\"Lat\"";

	
	
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "Number");

	
	
	
	
	
	
		$vdata["DecimalDigits"] = 10;

	
	
	
	
	
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


	$tdatapublic_gestionregistrosorigenmap["Lat"] = $fdata;
		$tdatapublic_gestionregistrosorigenmap[".searchableFields"][] = "Lat";
//	Lng
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 8;
	$fdata["strName"] = "Lng";
	$fdata["GoodName"] = "Lng";
	$fdata["ownerTable"] = "public.GestionRegistrosOrigen";
	$fdata["Label"] = GetFieldLabel("public_GestionRegistrosOrigenMap","Lng");
	$fdata["FieldType"] = 14;

	
	
	
			

		$fdata["strField"] = "Lng";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "gr.\"Lng\"";

	
	
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "Number");

	
	
	
	
	
	
		$vdata["DecimalDigits"] = 10;

	
	
	
	
	
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


	$tdatapublic_gestionregistrosorigenmap["Lng"] = $fdata;
		$tdatapublic_gestionregistrosorigenmap[".searchableFields"][] = "Lng";


$tables_data["public.GestionRegistrosOrigenMap"]=&$tdatapublic_gestionregistrosorigenmap;
$field_labels["public_GestionRegistrosOrigenMap"] = &$fieldLabelspublic_gestionregistrosorigenmap;
$fieldToolTips["public_GestionRegistrosOrigenMap"] = &$fieldToolTipspublic_gestionregistrosorigenmap;
$placeHolders["public_GestionRegistrosOrigenMap"] = &$placeHolderspublic_gestionregistrosorigenmap;
$page_titles["public_GestionRegistrosOrigenMap"] = &$pageTitlespublic_gestionregistrosorigenmap;

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)
$detailsTablesData["public.GestionRegistrosOrigenMap"] = array();

// tables which are master tables for current table (detail)
$masterTablesData["public.GestionRegistrosOrigenMap"] = array();



// -----------------end  prepare master-details data arrays ------------------------------//


require_once(getabspath("classes/sql.php"));










function createSqlQuery_public_gestionregistrosorigenmap()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "gr.\"IdGesRegOrigen\",  gr.\"IdResiduo\",  gr.\"IdMedTipOrigen\",  gr.\"CantidadOrigen\",  u.\"IdUsuario\",  u.\"NombreUsuario\",  gr.\"Lat\",  gr.\"Lng\"";
$proto0["m_strFrom"] = "FROM \"public\".\"GestionRegistrosOrigen\" AS gr  , \"public\".\"Usuarios\" AS u";
$proto0["m_strWhere"] = "gr.\"IdUsuario\" =u.\"IdUsuario\"";
$proto0["m_strOrderBy"] = "";
	
		;
			$proto0["cipherer"] = null;
$proto2=array();
$proto2["m_sql"] = "gr.\"IdUsuario\" =u.\"IdUsuario\"";
$proto2["m_uniontype"] = "SQLL_UNKNOWN";
						$obj = new SQLField(array(
	"m_strName" => "IdUsuario",
	"m_strTable" => "gr",
	"m_srcTableName" => "public.GestionRegistrosOrigenMap"
));

$proto2["m_column"]=$obj;
$proto2["m_contained"] = array();
$proto2["m_strCase"] = "=u.\"IdUsuario\"";
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
	"m_strTable" => "gr",
	"m_srcTableName" => "public.GestionRegistrosOrigenMap"
));

$proto6["m_sql"] = "gr.\"IdGesRegOrigen\"";
$proto6["m_srcTableName"] = "public.GestionRegistrosOrigenMap";
$proto6["m_expr"]=$obj;
$proto6["m_alias"] = "";
$obj = new SQLFieldListItem($proto6);

$proto0["m_fieldlist"][]=$obj;
						$proto8=array();
			$obj = new SQLField(array(
	"m_strName" => "IdResiduo",
	"m_strTable" => "gr",
	"m_srcTableName" => "public.GestionRegistrosOrigenMap"
));

$proto8["m_sql"] = "gr.\"IdResiduo\"";
$proto8["m_srcTableName"] = "public.GestionRegistrosOrigenMap";
$proto8["m_expr"]=$obj;
$proto8["m_alias"] = "";
$obj = new SQLFieldListItem($proto8);

$proto0["m_fieldlist"][]=$obj;
						$proto10=array();
			$obj = new SQLField(array(
	"m_strName" => "IdMedTipOrigen",
	"m_strTable" => "gr",
	"m_srcTableName" => "public.GestionRegistrosOrigenMap"
));

$proto10["m_sql"] = "gr.\"IdMedTipOrigen\"";
$proto10["m_srcTableName"] = "public.GestionRegistrosOrigenMap";
$proto10["m_expr"]=$obj;
$proto10["m_alias"] = "";
$obj = new SQLFieldListItem($proto10);

$proto0["m_fieldlist"][]=$obj;
						$proto12=array();
			$obj = new SQLField(array(
	"m_strName" => "CantidadOrigen",
	"m_strTable" => "gr",
	"m_srcTableName" => "public.GestionRegistrosOrigenMap"
));

$proto12["m_sql"] = "gr.\"CantidadOrigen\"";
$proto12["m_srcTableName"] = "public.GestionRegistrosOrigenMap";
$proto12["m_expr"]=$obj;
$proto12["m_alias"] = "";
$obj = new SQLFieldListItem($proto12);

$proto0["m_fieldlist"][]=$obj;
						$proto14=array();
			$obj = new SQLField(array(
	"m_strName" => "IdUsuario",
	"m_strTable" => "u",
	"m_srcTableName" => "public.GestionRegistrosOrigenMap"
));

$proto14["m_sql"] = "u.\"IdUsuario\"";
$proto14["m_srcTableName"] = "public.GestionRegistrosOrigenMap";
$proto14["m_expr"]=$obj;
$proto14["m_alias"] = "";
$obj = new SQLFieldListItem($proto14);

$proto0["m_fieldlist"][]=$obj;
						$proto16=array();
			$obj = new SQLField(array(
	"m_strName" => "NombreUsuario",
	"m_strTable" => "u",
	"m_srcTableName" => "public.GestionRegistrosOrigenMap"
));

$proto16["m_sql"] = "u.\"NombreUsuario\"";
$proto16["m_srcTableName"] = "public.GestionRegistrosOrigenMap";
$proto16["m_expr"]=$obj;
$proto16["m_alias"] = "";
$obj = new SQLFieldListItem($proto16);

$proto0["m_fieldlist"][]=$obj;
						$proto18=array();
			$obj = new SQLField(array(
	"m_strName" => "Lat",
	"m_strTable" => "gr",
	"m_srcTableName" => "public.GestionRegistrosOrigenMap"
));

$proto18["m_sql"] = "gr.\"Lat\"";
$proto18["m_srcTableName"] = "public.GestionRegistrosOrigenMap";
$proto18["m_expr"]=$obj;
$proto18["m_alias"] = "";
$obj = new SQLFieldListItem($proto18);

$proto0["m_fieldlist"][]=$obj;
						$proto20=array();
			$obj = new SQLField(array(
	"m_strName" => "Lng",
	"m_strTable" => "gr",
	"m_srcTableName" => "public.GestionRegistrosOrigenMap"
));

$proto20["m_sql"] = "gr.\"Lng\"";
$proto20["m_srcTableName"] = "public.GestionRegistrosOrigenMap";
$proto20["m_expr"]=$obj;
$proto20["m_alias"] = "";
$obj = new SQLFieldListItem($proto20);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto22=array();
$proto22["m_link"] = "SQLL_MAIN";
			$proto23=array();
$proto23["m_strName"] = "public.GestionRegistrosOrigen";
$proto23["m_srcTableName"] = "public.GestionRegistrosOrigenMap";
$proto23["m_columns"] = array();
$proto23["m_columns"][] = "IdGesRegOrigen";
$proto23["m_columns"][] = "IdResiduo";
$proto23["m_columns"][] = "IdMedTipOrigen";
$proto23["m_columns"][] = "CantidadOrigen";
$proto23["m_columns"][] = "IdUsuario";
$proto23["m_columns"][] = "Lat";
$proto23["m_columns"][] = "Lng";
$obj = new SQLTable($proto23);

$proto22["m_table"] = $obj;
$proto22["m_sql"] = "\"public\".\"GestionRegistrosOrigen\" AS gr";
$proto22["m_alias"] = "gr";
$proto22["m_srcTableName"] = "public.GestionRegistrosOrigenMap";
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
												$proto26=array();
$proto26["m_link"] = "SQLL_CROSSJOIN";
			$proto27=array();
$proto27["m_strName"] = "public.Usuarios";
$proto27["m_srcTableName"] = "public.GestionRegistrosOrigenMap";
$proto27["m_columns"] = array();
$proto27["m_columns"][] = "IdUsuario";
$proto27["m_columns"][] = "NombreUsuario";
$proto27["m_columns"][] = "password";
$proto27["m_columns"][] = "email";
$proto27["m_columns"][] = "fullname";
$proto27["m_columns"][] = "groupid";
$proto27["m_columns"][] = "active";
$proto27["m_columns"][] = "ext_security_id";
$proto27["m_columns"][] = "DirecUsuario";
$proto27["m_columns"][] = "IdBarrio";
$obj = new SQLTable($proto27);

$proto26["m_table"] = $obj;
$proto26["m_sql"] = "\"public\".\"Usuarios\" AS u";
$proto26["m_alias"] = "u";
$proto26["m_srcTableName"] = "public.GestionRegistrosOrigenMap";
$proto28=array();
$proto28["m_sql"] = "";
$proto28["m_uniontype"] = "SQLL_UNKNOWN";
	$obj = new SQLNonParsed(array(
	"m_sql" => ""
));

$proto28["m_column"]=$obj;
$proto28["m_contained"] = array();
$proto28["m_strCase"] = "";
$proto28["m_havingmode"] = false;
$proto28["m_inBrackets"] = false;
$proto28["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto28);

$proto26["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto26);

$proto0["m_fromlist"][]=$obj;
$proto0["m_groupby"] = array();
$proto0["m_orderby"] = array();
$proto0["m_srcTableName"]="public.GestionRegistrosOrigenMap";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_public_gestionregistrosorigenmap = createSqlQuery_public_gestionregistrosorigenmap();


	
		;

								

$tdatapublic_gestionregistrosorigenmap[".sqlquery"] = $queryData_public_gestionregistrosorigenmap;

$tableEvents["public.GestionRegistrosOrigenMap"] = new eventsBase;
$tdatapublic_gestionregistrosorigenmap[".hasEvents"] = false;

?>