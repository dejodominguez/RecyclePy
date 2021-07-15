<?php



$tdatapublic_gesorigenusuarios = array();
$tdatapublic_gesorigenusuarios[".searchableFields"] = array();
$tdatapublic_gesorigenusuarios[".ShortName"] = "public_gesorigenusuarios";
$tdatapublic_gesorigenusuarios[".OwnerID"] = "";
$tdatapublic_gesorigenusuarios[".OriginalTable"] = "public.Usuarios";


$defaultPages = my_json_decode( "{\"add\":\"add\",\"edit\":\"edit\",\"list\":\"list\",\"masterlist\":\"masterlist\",\"masterprint\":\"masterprint\",\"search\":\"search\"}" );

$tdatapublic_gesorigenusuarios[".pagesByType"] = my_json_decode( "{\"add\":[\"add\"],\"edit\":[\"edit\"],\"list\":[\"list\"],\"masterlist\":[\"masterlist\"],\"masterprint\":[\"masterprint\"],\"search\":[\"search\"]}" );
$tdatapublic_gesorigenusuarios[".pages"] = types2pages( my_json_decode( "{\"add\":[\"add\"],\"edit\":[\"edit\"],\"list\":[\"list\"],\"masterlist\":[\"masterlist\"],\"masterprint\":[\"masterprint\"],\"search\":[\"search\"]}" ) );
$tdatapublic_gesorigenusuarios[".defaultPages"] = $defaultPages;

//	field labels
$fieldLabelspublic_gesorigenusuarios = array();
$fieldToolTipspublic_gesorigenusuarios = array();
$pageTitlespublic_gesorigenusuarios = array();
$placeHolderspublic_gesorigenusuarios = array();

if(mlang_getcurrentlang()=="Spanish")
{
	$fieldLabelspublic_gesorigenusuarios["Spanish"] = array();
	$fieldToolTipspublic_gesorigenusuarios["Spanish"] = array();
	$placeHolderspublic_gesorigenusuarios["Spanish"] = array();
	$pageTitlespublic_gesorigenusuarios["Spanish"] = array();
	$fieldLabelspublic_gesorigenusuarios["Spanish"]["IdGesRegOrigen"] = "Id Ges Reg Origen";
	$fieldToolTipspublic_gesorigenusuarios["Spanish"]["IdGesRegOrigen"] = "";
	$placeHolderspublic_gesorigenusuarios["Spanish"]["IdGesRegOrigen"] = "";
	$fieldLabelspublic_gesorigenusuarios["Spanish"]["IdResiduo"] = "Id Residuo";
	$fieldToolTipspublic_gesorigenusuarios["Spanish"]["IdResiduo"] = "";
	$placeHolderspublic_gesorigenusuarios["Spanish"]["IdResiduo"] = "";
	$fieldLabelspublic_gesorigenusuarios["Spanish"]["IdMedTipOrigen"] = "Id Med Tip Origen";
	$fieldToolTipspublic_gesorigenusuarios["Spanish"]["IdMedTipOrigen"] = "";
	$placeHolderspublic_gesorigenusuarios["Spanish"]["IdMedTipOrigen"] = "";
	$fieldLabelspublic_gesorigenusuarios["Spanish"]["CantidadOrigen"] = "Cantidad Origen";
	$fieldToolTipspublic_gesorigenusuarios["Spanish"]["CantidadOrigen"] = "";
	$placeHolderspublic_gesorigenusuarios["Spanish"]["CantidadOrigen"] = "";
	$fieldLabelspublic_gesorigenusuarios["Spanish"]["IdUsuario"] = "Id Usuario";
	$fieldToolTipspublic_gesorigenusuarios["Spanish"]["IdUsuario"] = "";
	$placeHolderspublic_gesorigenusuarios["Spanish"]["IdUsuario"] = "";
	$fieldLabelspublic_gesorigenusuarios["Spanish"]["NombreUsuario"] = "Nombre Usuario";
	$fieldToolTipspublic_gesorigenusuarios["Spanish"]["NombreUsuario"] = "";
	$placeHolderspublic_gesorigenusuarios["Spanish"]["NombreUsuario"] = "";
	if (count($fieldToolTipspublic_gesorigenusuarios["Spanish"]))
		$tdatapublic_gesorigenusuarios[".isUseToolTips"] = true;
}


	$tdatapublic_gesorigenusuarios[".NCSearch"] = true;



$tdatapublic_gesorigenusuarios[".shortTableName"] = "public_gesorigenusuarios";
$tdatapublic_gesorigenusuarios[".nSecOptions"] = 0;

$tdatapublic_gesorigenusuarios[".mainTableOwnerID"] = "";
$tdatapublic_gesorigenusuarios[".entityType"] = 1;

$tdatapublic_gesorigenusuarios[".strOriginalTableName"] = "public.Usuarios";

	



$tdatapublic_gesorigenusuarios[".showAddInPopup"] = false;

$tdatapublic_gesorigenusuarios[".showEditInPopup"] = false;

$tdatapublic_gesorigenusuarios[".showViewInPopup"] = false;

//page's base css files names
$popupPagesLayoutNames = array();
$tdatapublic_gesorigenusuarios[".popupPagesLayoutNames"] = $popupPagesLayoutNames;


$tdatapublic_gesorigenusuarios[".listAjax"] = false;
//	temporary
$tdatapublic_gesorigenusuarios[".listAjax"] = false;

	$tdatapublic_gesorigenusuarios[".audit"] = false;

	$tdatapublic_gesorigenusuarios[".locking"] = false;


$pages = $tdatapublic_gesorigenusuarios[".defaultPages"];

if( $pages[PAGE_EDIT] ) {
	$tdatapublic_gesorigenusuarios[".edit"] = true;
	$tdatapublic_gesorigenusuarios[".afterEditAction"] = 1;
	$tdatapublic_gesorigenusuarios[".closePopupAfterEdit"] = 1;
	$tdatapublic_gesorigenusuarios[".afterEditActionDetTable"] = "";
}

if( $pages[PAGE_ADD] ) {
$tdatapublic_gesorigenusuarios[".add"] = true;
$tdatapublic_gesorigenusuarios[".afterAddAction"] = 1;
$tdatapublic_gesorigenusuarios[".closePopupAfterAdd"] = 1;
$tdatapublic_gesorigenusuarios[".afterAddActionDetTable"] = "";
}

if( $pages[PAGE_LIST] ) {
	$tdatapublic_gesorigenusuarios[".list"] = true;
}



$tdatapublic_gesorigenusuarios[".strSortControlSettingsJSON"] = "";




if( $pages[PAGE_VIEW] ) {
$tdatapublic_gesorigenusuarios[".view"] = true;
}

if( $pages[PAGE_IMPORT] ) {
$tdatapublic_gesorigenusuarios[".import"] = true;
}

if( $pages[PAGE_EXPORT] ) {
$tdatapublic_gesorigenusuarios[".exportTo"] = true;
}

if( $pages[PAGE_PRINT] ) {
$tdatapublic_gesorigenusuarios[".printFriendly"] = true;
}



$tdatapublic_gesorigenusuarios[".showSimpleSearchOptions"] = true; // temp fix #13449

// Allow Show/Hide Fields in GRID
$tdatapublic_gesorigenusuarios[".allowShowHideFields"] = true; // temp fix #13449
//

// Allow Fields Reordering in GRID
$tdatapublic_gesorigenusuarios[".allowFieldsReordering"] = true; // temp fix #13449
//

$tdatapublic_gesorigenusuarios[".isUseAjaxSuggest"] = true;

$tdatapublic_gesorigenusuarios[".rowHighlite"] = true;



			

$tdatapublic_gesorigenusuarios[".ajaxCodeSnippetAdded"] = false;

$tdatapublic_gesorigenusuarios[".buttonsAdded"] = false;

$tdatapublic_gesorigenusuarios[".addPageEvents"] = false;

// use timepicker for search panel
$tdatapublic_gesorigenusuarios[".isUseTimeForSearch"] = false;


$tdatapublic_gesorigenusuarios[".badgeColor"] = "D2691E";


$tdatapublic_gesorigenusuarios[".allSearchFields"] = array();
$tdatapublic_gesorigenusuarios[".filterFields"] = array();
$tdatapublic_gesorigenusuarios[".requiredSearchFields"] = array();

$tdatapublic_gesorigenusuarios[".googleLikeFields"] = array();
$tdatapublic_gesorigenusuarios[".googleLikeFields"][] = "IdGesRegOrigen";
$tdatapublic_gesorigenusuarios[".googleLikeFields"][] = "IdResiduo";
$tdatapublic_gesorigenusuarios[".googleLikeFields"][] = "IdMedTipOrigen";
$tdatapublic_gesorigenusuarios[".googleLikeFields"][] = "CantidadOrigen";
$tdatapublic_gesorigenusuarios[".googleLikeFields"][] = "IdUsuario";
$tdatapublic_gesorigenusuarios[".googleLikeFields"][] = "NombreUsuario";



$tdatapublic_gesorigenusuarios[".tableType"] = "list";

$tdatapublic_gesorigenusuarios[".printerPageOrientation"] = 0;
$tdatapublic_gesorigenusuarios[".nPrinterPageScale"] = 100;

$tdatapublic_gesorigenusuarios[".nPrinterSplitRecords"] = 40;

$tdatapublic_gesorigenusuarios[".geocodingEnabled"] = false;










$tdatapublic_gesorigenusuarios[".pageSize"] = 20;

$tdatapublic_gesorigenusuarios[".warnLeavingPages"] = true;



$tstrOrderBy = "";
if(strlen($tstrOrderBy) && strtolower(substr($tstrOrderBy,0,8))!="order by")
	$tstrOrderBy = "order by ".$tstrOrderBy;
$tdatapublic_gesorigenusuarios[".strOrderBy"] = $tstrOrderBy;

$tdatapublic_gesorigenusuarios[".orderindexes"] = array();

$tdatapublic_gesorigenusuarios[".sqlHead"] = "SELECT gr.\"IdGesRegOrigen\",  gr.\"IdResiduo\",  gr.\"IdMedTipOrigen\",  gr.\"CantidadOrigen\",  u.\"IdUsuario\",  u.\"NombreUsuario\"";
$tdatapublic_gesorigenusuarios[".sqlFrom"] = "FROM \"public\".\"GestionRegistrosOrigen\" AS gr  , \"public\".\"Usuarios\" AS u";
$tdatapublic_gesorigenusuarios[".sqlWhereExpr"] = "(gr.\"IdUsuario\" =u.\"IdUsuario\")";
$tdatapublic_gesorigenusuarios[".sqlTail"] = "";










//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdatapublic_gesorigenusuarios[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdatapublic_gesorigenusuarios[".arrGroupsPerPage"] = $arrGPP;

$tdatapublic_gesorigenusuarios[".highlightSearchResults"] = true;

$tableKeyspublic_gesorigenusuarios = array();
$tableKeyspublic_gesorigenusuarios[] = "IdUsuario";
$tdatapublic_gesorigenusuarios[".Keys"] = $tableKeyspublic_gesorigenusuarios;


$tdatapublic_gesorigenusuarios[".hideMobileList"] = array();




//	IdGesRegOrigen
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "IdGesRegOrigen";
	$fdata["GoodName"] = "IdGesRegOrigen";
	$fdata["ownerTable"] = "public.GestionRegistrosOrigen";
	$fdata["Label"] = GetFieldLabel("public_GesOrigenUsuarios","IdGesRegOrigen");
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


	$tdatapublic_gesorigenusuarios["IdGesRegOrigen"] = $fdata;
		$tdatapublic_gesorigenusuarios[".searchableFields"][] = "IdGesRegOrigen";
//	IdResiduo
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "IdResiduo";
	$fdata["GoodName"] = "IdResiduo";
	$fdata["ownerTable"] = "public.GestionRegistrosOrigen";
	$fdata["Label"] = GetFieldLabel("public_GesOrigenUsuarios","IdResiduo");
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


	$tdatapublic_gesorigenusuarios["IdResiduo"] = $fdata;
		$tdatapublic_gesorigenusuarios[".searchableFields"][] = "IdResiduo";
//	IdMedTipOrigen
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "IdMedTipOrigen";
	$fdata["GoodName"] = "IdMedTipOrigen";
	$fdata["ownerTable"] = "public.GestionRegistrosOrigen";
	$fdata["Label"] = GetFieldLabel("public_GesOrigenUsuarios","IdMedTipOrigen");
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


	$tdatapublic_gesorigenusuarios["IdMedTipOrigen"] = $fdata;
		$tdatapublic_gesorigenusuarios[".searchableFields"][] = "IdMedTipOrigen";
//	CantidadOrigen
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "CantidadOrigen";
	$fdata["GoodName"] = "CantidadOrigen";
	$fdata["ownerTable"] = "public.GestionRegistrosOrigen";
	$fdata["Label"] = GetFieldLabel("public_GesOrigenUsuarios","CantidadOrigen");
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


	$tdatapublic_gesorigenusuarios["CantidadOrigen"] = $fdata;
		$tdatapublic_gesorigenusuarios[".searchableFields"][] = "CantidadOrigen";
//	IdUsuario
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 5;
	$fdata["strName"] = "IdUsuario";
	$fdata["GoodName"] = "IdUsuario";
	$fdata["ownerTable"] = "public.Usuarios";
	$fdata["Label"] = GetFieldLabel("public_GesOrigenUsuarios","IdUsuario");
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


	$tdatapublic_gesorigenusuarios["IdUsuario"] = $fdata;
		$tdatapublic_gesorigenusuarios[".searchableFields"][] = "IdUsuario";
//	NombreUsuario
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 6;
	$fdata["strName"] = "NombreUsuario";
	$fdata["GoodName"] = "NombreUsuario";
	$fdata["ownerTable"] = "public.Usuarios";
	$fdata["Label"] = GetFieldLabel("public_GesOrigenUsuarios","NombreUsuario");
	$fdata["FieldType"] = 200;

	
	
	
			

		$fdata["strField"] = "NombreUsuario";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "u.\"NombreUsuario\"";

	
	
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


	$tdatapublic_gesorigenusuarios["NombreUsuario"] = $fdata;
		$tdatapublic_gesorigenusuarios[".searchableFields"][] = "NombreUsuario";


$tables_data["public.GesOrigenUsuarios"]=&$tdatapublic_gesorigenusuarios;
$field_labels["public_GesOrigenUsuarios"] = &$fieldLabelspublic_gesorigenusuarios;
$fieldToolTips["public_GesOrigenUsuarios"] = &$fieldToolTipspublic_gesorigenusuarios;
$placeHolders["public_GesOrigenUsuarios"] = &$placeHolderspublic_gesorigenusuarios;
$page_titles["public_GesOrigenUsuarios"] = &$pageTitlespublic_gesorigenusuarios;

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)
$detailsTablesData["public.GesOrigenUsuarios"] = array();

// tables which are master tables for current table (detail)
$masterTablesData["public.GesOrigenUsuarios"] = array();



// -----------------end  prepare master-details data arrays ------------------------------//


require_once(getabspath("classes/sql.php"));










function createSqlQuery_public_gesorigenusuarios()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "gr.\"IdGesRegOrigen\",  gr.\"IdResiduo\",  gr.\"IdMedTipOrigen\",  gr.\"CantidadOrigen\",  u.\"IdUsuario\",  u.\"NombreUsuario\"";
$proto0["m_strFrom"] = "FROM \"public\".\"GestionRegistrosOrigen\" AS gr  , \"public\".\"Usuarios\" AS u";
$proto0["m_strWhere"] = "(gr.\"IdUsuario\" =u.\"IdUsuario\")";
$proto0["m_strOrderBy"] = "";
	
		;
			$proto0["cipherer"] = null;
$proto2=array();
$proto2["m_sql"] = "gr.\"IdUsuario\" =u.\"IdUsuario\"";
$proto2["m_uniontype"] = "SQLL_UNKNOWN";
						$obj = new SQLField(array(
	"m_strName" => "IdUsuario",
	"m_strTable" => "gr",
	"m_srcTableName" => "public.GesOrigenUsuarios"
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
	"m_srcTableName" => "public.GesOrigenUsuarios"
));

$proto6["m_sql"] = "gr.\"IdGesRegOrigen\"";
$proto6["m_srcTableName"] = "public.GesOrigenUsuarios";
$proto6["m_expr"]=$obj;
$proto6["m_alias"] = "";
$obj = new SQLFieldListItem($proto6);

$proto0["m_fieldlist"][]=$obj;
						$proto8=array();
			$obj = new SQLField(array(
	"m_strName" => "IdResiduo",
	"m_strTable" => "gr",
	"m_srcTableName" => "public.GesOrigenUsuarios"
));

$proto8["m_sql"] = "gr.\"IdResiduo\"";
$proto8["m_srcTableName"] = "public.GesOrigenUsuarios";
$proto8["m_expr"]=$obj;
$proto8["m_alias"] = "";
$obj = new SQLFieldListItem($proto8);

$proto0["m_fieldlist"][]=$obj;
						$proto10=array();
			$obj = new SQLField(array(
	"m_strName" => "IdMedTipOrigen",
	"m_strTable" => "gr",
	"m_srcTableName" => "public.GesOrigenUsuarios"
));

$proto10["m_sql"] = "gr.\"IdMedTipOrigen\"";
$proto10["m_srcTableName"] = "public.GesOrigenUsuarios";
$proto10["m_expr"]=$obj;
$proto10["m_alias"] = "";
$obj = new SQLFieldListItem($proto10);

$proto0["m_fieldlist"][]=$obj;
						$proto12=array();
			$obj = new SQLField(array(
	"m_strName" => "CantidadOrigen",
	"m_strTable" => "gr",
	"m_srcTableName" => "public.GesOrigenUsuarios"
));

$proto12["m_sql"] = "gr.\"CantidadOrigen\"";
$proto12["m_srcTableName"] = "public.GesOrigenUsuarios";
$proto12["m_expr"]=$obj;
$proto12["m_alias"] = "";
$obj = new SQLFieldListItem($proto12);

$proto0["m_fieldlist"][]=$obj;
						$proto14=array();
			$obj = new SQLField(array(
	"m_strName" => "IdUsuario",
	"m_strTable" => "u",
	"m_srcTableName" => "public.GesOrigenUsuarios"
));

$proto14["m_sql"] = "u.\"IdUsuario\"";
$proto14["m_srcTableName"] = "public.GesOrigenUsuarios";
$proto14["m_expr"]=$obj;
$proto14["m_alias"] = "";
$obj = new SQLFieldListItem($proto14);

$proto0["m_fieldlist"][]=$obj;
						$proto16=array();
			$obj = new SQLField(array(
	"m_strName" => "NombreUsuario",
	"m_strTable" => "u",
	"m_srcTableName" => "public.GesOrigenUsuarios"
));

$proto16["m_sql"] = "u.\"NombreUsuario\"";
$proto16["m_srcTableName"] = "public.GesOrigenUsuarios";
$proto16["m_expr"]=$obj;
$proto16["m_alias"] = "";
$obj = new SQLFieldListItem($proto16);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto18=array();
$proto18["m_link"] = "SQLL_MAIN";
			$proto19=array();
$proto19["m_strName"] = "public.GestionRegistrosOrigen";
$proto19["m_srcTableName"] = "public.GesOrigenUsuarios";
$proto19["m_columns"] = array();
$proto19["m_columns"][] = "IdGesRegOrigen";
$proto19["m_columns"][] = "IdResiduo";
$proto19["m_columns"][] = "IdMedTipOrigen";
$proto19["m_columns"][] = "CantidadOrigen";
$proto19["m_columns"][] = "IdUsuario";
$obj = new SQLTable($proto19);

$proto18["m_table"] = $obj;
$proto18["m_sql"] = "\"public\".\"GestionRegistrosOrigen\" AS gr";
$proto18["m_alias"] = "gr";
$proto18["m_srcTableName"] = "public.GesOrigenUsuarios";
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
												$proto22=array();
$proto22["m_link"] = "SQLL_CROSSJOIN";
			$proto23=array();
$proto23["m_strName"] = "public.Usuarios";
$proto23["m_srcTableName"] = "public.GesOrigenUsuarios";
$proto23["m_columns"] = array();
$proto23["m_columns"][] = "IdUsuario";
$proto23["m_columns"][] = "NombreUsuario";
$proto23["m_columns"][] = "password";
$proto23["m_columns"][] = "email";
$proto23["m_columns"][] = "fullname";
$proto23["m_columns"][] = "groupid";
$proto23["m_columns"][] = "active";
$proto23["m_columns"][] = "ext_security_id";
$proto23["m_columns"][] = "DirecUsuario";
$proto23["m_columns"][] = "IdBarrio";
$obj = new SQLTable($proto23);

$proto22["m_table"] = $obj;
$proto22["m_sql"] = "\"public\".\"Usuarios\" AS u";
$proto22["m_alias"] = "u";
$proto22["m_srcTableName"] = "public.GesOrigenUsuarios";
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
$proto0["m_srcTableName"]="public.GesOrigenUsuarios";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_public_gesorigenusuarios = createSqlQuery_public_gesorigenusuarios();


	
		;

						

$tdatapublic_gesorigenusuarios[".sqlquery"] = $queryData_public_gesorigenusuarios;

$tableEvents["public.GesOrigenUsuarios"] = new eventsBase;
$tdatapublic_gesorigenusuarios[".hasEvents"] = false;

?>