<?php



$tdatapublic_usuariosview = array();
$tdatapublic_usuariosview[".searchableFields"] = array();
$tdatapublic_usuariosview[".ShortName"] = "public_usuariosview";
$tdatapublic_usuariosview[".OwnerID"] = "active";
$tdatapublic_usuariosview[".OriginalTable"] = "public.Usuarios";


$defaultPages = my_json_decode( "{\"add\":\"add\",\"list\":\"list\",\"masterlist\":\"masterlist\",\"masterprint\":\"masterprint\",\"search\":\"search\"}" );

$tdatapublic_usuariosview[".pagesByType"] = my_json_decode( "{\"add\":[\"add\"],\"list\":[\"list\"],\"masterlist\":[\"masterlist\"],\"masterprint\":[\"masterprint\"],\"search\":[\"search\"]}" );
$tdatapublic_usuariosview[".pages"] = types2pages( my_json_decode( "{\"add\":[\"add\"],\"list\":[\"list\"],\"masterlist\":[\"masterlist\"],\"masterprint\":[\"masterprint\"],\"search\":[\"search\"]}" ) );
$tdatapublic_usuariosview[".defaultPages"] = $defaultPages;

//	field labels
$fieldLabelspublic_usuariosview = array();
$fieldToolTipspublic_usuariosview = array();
$pageTitlespublic_usuariosview = array();
$placeHolderspublic_usuariosview = array();

if(mlang_getcurrentlang()=="Spanish")
{
	$fieldLabelspublic_usuariosview["Spanish"] = array();
	$fieldToolTipspublic_usuariosview["Spanish"] = array();
	$placeHolderspublic_usuariosview["Spanish"] = array();
	$pageTitlespublic_usuariosview["Spanish"] = array();
	$fieldLabelspublic_usuariosview["Spanish"]["IdGesRegOrigen"] = "Id Ges Reg Origen";
	$fieldToolTipspublic_usuariosview["Spanish"]["IdGesRegOrigen"] = "";
	$placeHolderspublic_usuariosview["Spanish"]["IdGesRegOrigen"] = "";
	$fieldLabelspublic_usuariosview["Spanish"]["IdResiduo"] = "Id Residuo";
	$fieldToolTipspublic_usuariosview["Spanish"]["IdResiduo"] = "";
	$placeHolderspublic_usuariosview["Spanish"]["IdResiduo"] = "";
	$fieldLabelspublic_usuariosview["Spanish"]["IdMedTipOrigen"] = "Id Med Tip Origen";
	$fieldToolTipspublic_usuariosview["Spanish"]["IdMedTipOrigen"] = "";
	$placeHolderspublic_usuariosview["Spanish"]["IdMedTipOrigen"] = "";
	$fieldLabelspublic_usuariosview["Spanish"]["CantidadOrigen"] = "Cantidad Origen";
	$fieldToolTipspublic_usuariosview["Spanish"]["CantidadOrigen"] = "";
	$placeHolderspublic_usuariosview["Spanish"]["CantidadOrigen"] = "";
	$fieldLabelspublic_usuariosview["Spanish"]["NombreUsuario"] = "Nombre Usuario";
	$fieldToolTipspublic_usuariosview["Spanish"]["NombreUsuario"] = "";
	$placeHolderspublic_usuariosview["Spanish"]["NombreUsuario"] = "";
	$fieldLabelspublic_usuariosview["Spanish"]["DirecUsuario"] = "Direc Usuario";
	$fieldToolTipspublic_usuariosview["Spanish"]["DirecUsuario"] = "";
	$placeHolderspublic_usuariosview["Spanish"]["DirecUsuario"] = "";
	$fieldLabelspublic_usuariosview["Spanish"]["DescriBarrio"] = "Descri Barrio";
	$fieldToolTipspublic_usuariosview["Spanish"]["DescriBarrio"] = "";
	$placeHolderspublic_usuariosview["Spanish"]["DescriBarrio"] = "";
	if (count($fieldToolTipspublic_usuariosview["Spanish"]))
		$tdatapublic_usuariosview[".isUseToolTips"] = true;
}


	$tdatapublic_usuariosview[".NCSearch"] = true;



$tdatapublic_usuariosview[".shortTableName"] = "public_usuariosview";
$tdatapublic_usuariosview[".nSecOptions"] = 2;

$tdatapublic_usuariosview[".mainTableOwnerID"] = "active";
$tdatapublic_usuariosview[".entityType"] = 1;

$tdatapublic_usuariosview[".strOriginalTableName"] = "public.Usuarios";

	



$tdatapublic_usuariosview[".showAddInPopup"] = false;

$tdatapublic_usuariosview[".showEditInPopup"] = false;

$tdatapublic_usuariosview[".showViewInPopup"] = false;

//page's base css files names
$popupPagesLayoutNames = array();
$tdatapublic_usuariosview[".popupPagesLayoutNames"] = $popupPagesLayoutNames;


$tdatapublic_usuariosview[".listAjax"] = false;
//	temporary
$tdatapublic_usuariosview[".listAjax"] = false;

	$tdatapublic_usuariosview[".audit"] = false;

	$tdatapublic_usuariosview[".locking"] = false;


$pages = $tdatapublic_usuariosview[".defaultPages"];

if( $pages[PAGE_EDIT] ) {
	$tdatapublic_usuariosview[".edit"] = true;
	$tdatapublic_usuariosview[".afterEditAction"] = 1;
	$tdatapublic_usuariosview[".closePopupAfterEdit"] = 1;
	$tdatapublic_usuariosview[".afterEditActionDetTable"] = "";
}

if( $pages[PAGE_ADD] ) {
$tdatapublic_usuariosview[".add"] = true;
$tdatapublic_usuariosview[".afterAddAction"] = 1;
$tdatapublic_usuariosview[".closePopupAfterAdd"] = 1;
$tdatapublic_usuariosview[".afterAddActionDetTable"] = "";
}

if( $pages[PAGE_LIST] ) {
	$tdatapublic_usuariosview[".list"] = true;
}



$tdatapublic_usuariosview[".strSortControlSettingsJSON"] = "";




if( $pages[PAGE_VIEW] ) {
$tdatapublic_usuariosview[".view"] = true;
}

if( $pages[PAGE_IMPORT] ) {
$tdatapublic_usuariosview[".import"] = true;
}

if( $pages[PAGE_EXPORT] ) {
$tdatapublic_usuariosview[".exportTo"] = true;
}

if( $pages[PAGE_PRINT] ) {
$tdatapublic_usuariosview[".printFriendly"] = true;
}



$tdatapublic_usuariosview[".showSimpleSearchOptions"] = true; // temp fix #13449

// Allow Show/Hide Fields in GRID
$tdatapublic_usuariosview[".allowShowHideFields"] = true; // temp fix #13449
//

// Allow Fields Reordering in GRID
$tdatapublic_usuariosview[".allowFieldsReordering"] = true; // temp fix #13449
//

$tdatapublic_usuariosview[".isUseAjaxSuggest"] = true;

$tdatapublic_usuariosview[".rowHighlite"] = true;



			

$tdatapublic_usuariosview[".ajaxCodeSnippetAdded"] = false;

$tdatapublic_usuariosview[".buttonsAdded"] = false;

$tdatapublic_usuariosview[".addPageEvents"] = false;

// use timepicker for search panel
$tdatapublic_usuariosview[".isUseTimeForSearch"] = false;


$tdatapublic_usuariosview[".badgeColor"] = "778899";


$tdatapublic_usuariosview[".allSearchFields"] = array();
$tdatapublic_usuariosview[".filterFields"] = array();
$tdatapublic_usuariosview[".requiredSearchFields"] = array();

$tdatapublic_usuariosview[".googleLikeFields"] = array();
$tdatapublic_usuariosview[".googleLikeFields"][] = "IdGesRegOrigen";
$tdatapublic_usuariosview[".googleLikeFields"][] = "IdResiduo";
$tdatapublic_usuariosview[".googleLikeFields"][] = "IdMedTipOrigen";
$tdatapublic_usuariosview[".googleLikeFields"][] = "CantidadOrigen";
$tdatapublic_usuariosview[".googleLikeFields"][] = "NombreUsuario";
$tdatapublic_usuariosview[".googleLikeFields"][] = "DirecUsuario";
$tdatapublic_usuariosview[".googleLikeFields"][] = "DescriBarrio";



$tdatapublic_usuariosview[".tableType"] = "list";

$tdatapublic_usuariosview[".printerPageOrientation"] = 0;
$tdatapublic_usuariosview[".nPrinterPageScale"] = 100;

$tdatapublic_usuariosview[".nPrinterSplitRecords"] = 40;

$tdatapublic_usuariosview[".geocodingEnabled"] = false;










$tdatapublic_usuariosview[".pageSize"] = 20;

$tdatapublic_usuariosview[".warnLeavingPages"] = true;



$tstrOrderBy = "";
if(strlen($tstrOrderBy) && strtolower(substr($tstrOrderBy,0,8))!="order by")
	$tstrOrderBy = "order by ".$tstrOrderBy;
$tdatapublic_usuariosview[".strOrderBy"] = $tstrOrderBy;

$tdatapublic_usuariosview[".orderindexes"] = array();

$tdatapublic_usuariosview[".sqlHead"] = "SELECT \"IdGesRegOrigen\",  	\"IdResiduo\",  	\"IdMedTipOrigen\",  	\"CantidadOrigen\",  	u.\"NombreUsuario\",   	u.\"DirecUsuario\",   	b.\"DescriBarrio\"";
$tdatapublic_usuariosview[".sqlFrom"] = "FROM \"public\".\"GestionRegistrosOrigen\" gr, \"public\".\"Usuarios\" u, \"public\".\"Barrios\" b";
$tdatapublic_usuariosview[".sqlWhereExpr"] = "gr.\"IdUsuario\"=u.\"IdUsuario\" and  u.\"IdBarrio\"=b.\"IdBarrio\"";
$tdatapublic_usuariosview[".sqlTail"] = "";










//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdatapublic_usuariosview[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdatapublic_usuariosview[".arrGroupsPerPage"] = $arrGPP;

$tdatapublic_usuariosview[".highlightSearchResults"] = true;

$tableKeyspublic_usuariosview = array();
$tdatapublic_usuariosview[".Keys"] = $tableKeyspublic_usuariosview;


$tdatapublic_usuariosview[".hideMobileList"] = array();




//	IdGesRegOrigen
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "IdGesRegOrigen";
	$fdata["GoodName"] = "IdGesRegOrigen";
	$fdata["ownerTable"] = "public.GestionRegistrosOrigen";
	$fdata["Label"] = GetFieldLabel("public_UsuariosView","IdGesRegOrigen");
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


	$tdatapublic_usuariosview["IdGesRegOrigen"] = $fdata;
		$tdatapublic_usuariosview[".searchableFields"][] = "IdGesRegOrigen";
//	IdResiduo
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "IdResiduo";
	$fdata["GoodName"] = "IdResiduo";
	$fdata["ownerTable"] = "public.GestionRegistrosOrigen";
	$fdata["Label"] = GetFieldLabel("public_UsuariosView","IdResiduo");
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


	$tdatapublic_usuariosview["IdResiduo"] = $fdata;
		$tdatapublic_usuariosview[".searchableFields"][] = "IdResiduo";
//	IdMedTipOrigen
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "IdMedTipOrigen";
	$fdata["GoodName"] = "IdMedTipOrigen";
	$fdata["ownerTable"] = "public.GestionRegistrosOrigen";
	$fdata["Label"] = GetFieldLabel("public_UsuariosView","IdMedTipOrigen");
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


	$tdatapublic_usuariosview["IdMedTipOrigen"] = $fdata;
		$tdatapublic_usuariosview[".searchableFields"][] = "IdMedTipOrigen";
//	CantidadOrigen
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "CantidadOrigen";
	$fdata["GoodName"] = "CantidadOrigen";
	$fdata["ownerTable"] = "public.GestionRegistrosOrigen";
	$fdata["Label"] = GetFieldLabel("public_UsuariosView","CantidadOrigen");
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


	$tdatapublic_usuariosview["CantidadOrigen"] = $fdata;
		$tdatapublic_usuariosview[".searchableFields"][] = "CantidadOrigen";
//	NombreUsuario
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 5;
	$fdata["strName"] = "NombreUsuario";
	$fdata["GoodName"] = "NombreUsuario";
	$fdata["ownerTable"] = "public.Usuarios";
	$fdata["Label"] = GetFieldLabel("public_UsuariosView","NombreUsuario");
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


	$tdatapublic_usuariosview["NombreUsuario"] = $fdata;
		$tdatapublic_usuariosview[".searchableFields"][] = "NombreUsuario";
//	DirecUsuario
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 6;
	$fdata["strName"] = "DirecUsuario";
	$fdata["GoodName"] = "DirecUsuario";
	$fdata["ownerTable"] = "public.Usuarios";
	$fdata["Label"] = GetFieldLabel("public_UsuariosView","DirecUsuario");
	$fdata["FieldType"] = 200;

	
	
	
			

		$fdata["strField"] = "DirecUsuario";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "u.\"DirecUsuario\"";

	
	
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


	$tdatapublic_usuariosview["DirecUsuario"] = $fdata;
		$tdatapublic_usuariosview[".searchableFields"][] = "DirecUsuario";
//	DescriBarrio
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 7;
	$fdata["strName"] = "DescriBarrio";
	$fdata["GoodName"] = "DescriBarrio";
	$fdata["ownerTable"] = "public.Barrios";
	$fdata["Label"] = GetFieldLabel("public_UsuariosView","DescriBarrio");
	$fdata["FieldType"] = 200;

	
	
	
			

		$fdata["strField"] = "DescriBarrio";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "b.\"DescriBarrio\"";

	
	
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


	$tdatapublic_usuariosview["DescriBarrio"] = $fdata;
		$tdatapublic_usuariosview[".searchableFields"][] = "DescriBarrio";


$tables_data["public.UsuariosView"]=&$tdatapublic_usuariosview;
$field_labels["public_UsuariosView"] = &$fieldLabelspublic_usuariosview;
$fieldToolTips["public_UsuariosView"] = &$fieldToolTipspublic_usuariosview;
$placeHolders["public_UsuariosView"] = &$placeHolderspublic_usuariosview;
$page_titles["public_UsuariosView"] = &$pageTitlespublic_usuariosview;

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)
$detailsTablesData["public.UsuariosView"] = array();

// tables which are master tables for current table (detail)
$masterTablesData["public.UsuariosView"] = array();



// -----------------end  prepare master-details data arrays ------------------------------//


require_once(getabspath("classes/sql.php"));










function createSqlQuery_public_usuariosview()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "\"IdGesRegOrigen\",  	\"IdResiduo\",  	\"IdMedTipOrigen\",  	\"CantidadOrigen\",  	u.\"NombreUsuario\",   	u.\"DirecUsuario\",   	b.\"DescriBarrio\"";
$proto0["m_strFrom"] = "FROM \"public\".\"GestionRegistrosOrigen\" gr, \"public\".\"Usuarios\" u, \"public\".\"Barrios\" b";
$proto0["m_strWhere"] = "gr.\"IdUsuario\"=u.\"IdUsuario\" and  u.\"IdBarrio\"=b.\"IdBarrio\"";
$proto0["m_strOrderBy"] = "";
	
		;
			$proto0["cipherer"] = null;
$proto2=array();
$proto2["m_sql"] = "gr.\"IdUsuario\"=u.\"IdUsuario\" and  u.\"IdBarrio\"=b.\"IdBarrio\"";
$proto2["m_uniontype"] = "SQLL_AND";
	$obj = new SQLNonParsed(array(
	"m_sql" => "gr.\"IdUsuario\"=u.\"IdUsuario\" and  u.\"IdBarrio\"=b.\"IdBarrio\""
));

$proto2["m_column"]=$obj;
$proto2["m_contained"] = array();
						$proto4=array();
$proto4["m_sql"] = "gr.\"IdUsuario\"=u.\"IdUsuario\"";
$proto4["m_uniontype"] = "SQLL_UNKNOWN";
						$obj = new SQLField(array(
	"m_strName" => "IdUsuario",
	"m_strTable" => "gr",
	"m_srcTableName" => "public.UsuariosView"
));

$proto4["m_column"]=$obj;
$proto4["m_contained"] = array();
$proto4["m_strCase"] = "=u.\"IdUsuario\"";
$proto4["m_havingmode"] = false;
$proto4["m_inBrackets"] = false;
$proto4["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto4);

			$proto2["m_contained"][]=$obj;
						$proto6=array();
$proto6["m_sql"] = "u.\"IdBarrio\"=b.\"IdBarrio\"";
$proto6["m_uniontype"] = "SQLL_UNKNOWN";
						$obj = new SQLField(array(
	"m_strName" => "IdBarrio",
	"m_strTable" => "u",
	"m_srcTableName" => "public.UsuariosView"
));

$proto6["m_column"]=$obj;
$proto6["m_contained"] = array();
$proto6["m_strCase"] = "=b.\"IdBarrio\"";
$proto6["m_havingmode"] = false;
$proto6["m_inBrackets"] = false;
$proto6["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto6);

			$proto2["m_contained"][]=$obj;
$proto2["m_strCase"] = "";
$proto2["m_havingmode"] = false;
$proto2["m_inBrackets"] = false;
$proto2["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto2);

$proto0["m_where"] = $obj;
$proto8=array();
$proto8["m_sql"] = "";
$proto8["m_uniontype"] = "SQLL_UNKNOWN";
	$obj = new SQLNonParsed(array(
	"m_sql" => ""
));

$proto8["m_column"]=$obj;
$proto8["m_contained"] = array();
$proto8["m_strCase"] = "";
$proto8["m_havingmode"] = false;
$proto8["m_inBrackets"] = false;
$proto8["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto8);

$proto0["m_having"] = $obj;
$proto0["m_fieldlist"] = array();
						$proto10=array();
			$obj = new SQLField(array(
	"m_strName" => "IdGesRegOrigen",
	"m_strTable" => "gr",
	"m_srcTableName" => "public.UsuariosView"
));

$proto10["m_sql"] = "\"IdGesRegOrigen\"";
$proto10["m_srcTableName"] = "public.UsuariosView";
$proto10["m_expr"]=$obj;
$proto10["m_alias"] = "";
$obj = new SQLFieldListItem($proto10);

$proto0["m_fieldlist"][]=$obj;
						$proto12=array();
			$obj = new SQLField(array(
	"m_strName" => "IdResiduo",
	"m_strTable" => "gr",
	"m_srcTableName" => "public.UsuariosView"
));

$proto12["m_sql"] = "\"IdResiduo\"";
$proto12["m_srcTableName"] = "public.UsuariosView";
$proto12["m_expr"]=$obj;
$proto12["m_alias"] = "";
$obj = new SQLFieldListItem($proto12);

$proto0["m_fieldlist"][]=$obj;
						$proto14=array();
			$obj = new SQLField(array(
	"m_strName" => "IdMedTipOrigen",
	"m_strTable" => "gr",
	"m_srcTableName" => "public.UsuariosView"
));

$proto14["m_sql"] = "\"IdMedTipOrigen\"";
$proto14["m_srcTableName"] = "public.UsuariosView";
$proto14["m_expr"]=$obj;
$proto14["m_alias"] = "";
$obj = new SQLFieldListItem($proto14);

$proto0["m_fieldlist"][]=$obj;
						$proto16=array();
			$obj = new SQLField(array(
	"m_strName" => "CantidadOrigen",
	"m_strTable" => "gr",
	"m_srcTableName" => "public.UsuariosView"
));

$proto16["m_sql"] = "\"CantidadOrigen\"";
$proto16["m_srcTableName"] = "public.UsuariosView";
$proto16["m_expr"]=$obj;
$proto16["m_alias"] = "";
$obj = new SQLFieldListItem($proto16);

$proto0["m_fieldlist"][]=$obj;
						$proto18=array();
			$obj = new SQLField(array(
	"m_strName" => "NombreUsuario",
	"m_strTable" => "u",
	"m_srcTableName" => "public.UsuariosView"
));

$proto18["m_sql"] = "u.\"NombreUsuario\"";
$proto18["m_srcTableName"] = "public.UsuariosView";
$proto18["m_expr"]=$obj;
$proto18["m_alias"] = "";
$obj = new SQLFieldListItem($proto18);

$proto0["m_fieldlist"][]=$obj;
						$proto20=array();
			$obj = new SQLField(array(
	"m_strName" => "DirecUsuario",
	"m_strTable" => "u",
	"m_srcTableName" => "public.UsuariosView"
));

$proto20["m_sql"] = "u.\"DirecUsuario\"";
$proto20["m_srcTableName"] = "public.UsuariosView";
$proto20["m_expr"]=$obj;
$proto20["m_alias"] = "";
$obj = new SQLFieldListItem($proto20);

$proto0["m_fieldlist"][]=$obj;
						$proto22=array();
			$obj = new SQLField(array(
	"m_strName" => "DescriBarrio",
	"m_strTable" => "b",
	"m_srcTableName" => "public.UsuariosView"
));

$proto22["m_sql"] = "b.\"DescriBarrio\"";
$proto22["m_srcTableName"] = "public.UsuariosView";
$proto22["m_expr"]=$obj;
$proto22["m_alias"] = "";
$obj = new SQLFieldListItem($proto22);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto24=array();
$proto24["m_link"] = "SQLL_MAIN";
			$proto25=array();
$proto25["m_strName"] = "public.GestionRegistrosOrigen";
$proto25["m_srcTableName"] = "public.UsuariosView";
$proto25["m_columns"] = array();
$proto25["m_columns"][] = "IdGesRegOrigen";
$proto25["m_columns"][] = "IdResiduo";
$proto25["m_columns"][] = "IdMedTipOrigen";
$proto25["m_columns"][] = "CantidadOrigen";
$proto25["m_columns"][] = "IdUsuario";
$proto25["m_columns"][] = "Lat";
$proto25["m_columns"][] = "Lng";
$proto25["m_columns"][] = "mapa";
$obj = new SQLTable($proto25);

$proto24["m_table"] = $obj;
$proto24["m_sql"] = "\"public\".\"GestionRegistrosOrigen\" gr";
$proto24["m_alias"] = "gr";
$proto24["m_srcTableName"] = "public.UsuariosView";
$proto26=array();
$proto26["m_sql"] = "";
$proto26["m_uniontype"] = "SQLL_UNKNOWN";
	$obj = new SQLNonParsed(array(
	"m_sql" => ""
));

$proto26["m_column"]=$obj;
$proto26["m_contained"] = array();
$proto26["m_strCase"] = "";
$proto26["m_havingmode"] = false;
$proto26["m_inBrackets"] = false;
$proto26["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto26);

$proto24["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto24);

$proto0["m_fromlist"][]=$obj;
												$proto28=array();
$proto28["m_link"] = "SQLL_CROSSJOIN";
			$proto29=array();
$proto29["m_strName"] = "public.Usuarios";
$proto29["m_srcTableName"] = "public.UsuariosView";
$proto29["m_columns"] = array();
$proto29["m_columns"][] = "IdUsuario";
$proto29["m_columns"][] = "NombreUsuario";
$proto29["m_columns"][] = "Password";
$proto29["m_columns"][] = "Email";
$proto29["m_columns"][] = "NombreCompleto";
$proto29["m_columns"][] = "Groupid";
$proto29["m_columns"][] = "active";
$proto29["m_columns"][] = "ext_security_id";
$proto29["m_columns"][] = "DirecUsuario";
$proto29["m_columns"][] = "IdBarrio";
$proto29["m_columns"][] = "TelUsuario";
$obj = new SQLTable($proto29);

$proto28["m_table"] = $obj;
$proto28["m_sql"] = "\"public\".\"Usuarios\" u";
$proto28["m_alias"] = "u";
$proto28["m_srcTableName"] = "public.UsuariosView";
$proto30=array();
$proto30["m_sql"] = "";
$proto30["m_uniontype"] = "SQLL_UNKNOWN";
	$obj = new SQLNonParsed(array(
	"m_sql" => ""
));

$proto30["m_column"]=$obj;
$proto30["m_contained"] = array();
$proto30["m_strCase"] = "";
$proto30["m_havingmode"] = false;
$proto30["m_inBrackets"] = false;
$proto30["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto30);

$proto28["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto28);

$proto0["m_fromlist"][]=$obj;
												$proto32=array();
$proto32["m_link"] = "SQLL_CROSSJOIN";
			$proto33=array();
$proto33["m_strName"] = "public.Barrios";
$proto33["m_srcTableName"] = "public.UsuariosView";
$proto33["m_columns"] = array();
$proto33["m_columns"][] = "IdBarrio";
$proto33["m_columns"][] = "DescriBarrio";
$obj = new SQLTable($proto33);

$proto32["m_table"] = $obj;
$proto32["m_sql"] = "\"public\".\"Barrios\" b";
$proto32["m_alias"] = "b";
$proto32["m_srcTableName"] = "public.UsuariosView";
$proto34=array();
$proto34["m_sql"] = "";
$proto34["m_uniontype"] = "SQLL_UNKNOWN";
	$obj = new SQLNonParsed(array(
	"m_sql" => ""
));

$proto34["m_column"]=$obj;
$proto34["m_contained"] = array();
$proto34["m_strCase"] = "";
$proto34["m_havingmode"] = false;
$proto34["m_inBrackets"] = false;
$proto34["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto34);

$proto32["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto32);

$proto0["m_fromlist"][]=$obj;
$proto0["m_groupby"] = array();
$proto0["m_orderby"] = array();
$proto0["m_srcTableName"]="public.UsuariosView";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_public_usuariosview = createSqlQuery_public_usuariosview();


	
		;

							

$tdatapublic_usuariosview[".sqlquery"] = $queryData_public_usuariosview;

$tableEvents["public.UsuariosView"] = new eventsBase;
$tdatapublic_usuariosview[".hasEvents"] = false;

?>