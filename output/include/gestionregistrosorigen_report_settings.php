<?php



$tdatagestionregistrosorigen_report = array();
$tdatagestionregistrosorigen_report[".searchableFields"] = array();
$tdatagestionregistrosorigen_report[".ShortName"] = "gestionregistrosorigen_report";
$tdatagestionregistrosorigen_report[".OwnerID"] = "";
$tdatagestionregistrosorigen_report[".OriginalTable"] = "public.GestionRegistrosOrigen";


$defaultPages = my_json_decode( "{\"report\":\"report\",\"rprint\":\"rprint\",\"search\":\"search\"}" );

$tdatagestionregistrosorigen_report[".pagesByType"] = my_json_decode( "{\"report\":[\"report\"],\"rprint\":[\"rprint\"],\"search\":[\"search\"]}" );
$tdatagestionregistrosorigen_report[".pages"] = types2pages( my_json_decode( "{\"report\":[\"report\"],\"rprint\":[\"rprint\"],\"search\":[\"search\"]}" ) );
$tdatagestionregistrosorigen_report[".defaultPages"] = $defaultPages;

//	field labels
$fieldLabelsgestionregistrosorigen_report = array();
$fieldToolTipsgestionregistrosorigen_report = array();
$pageTitlesgestionregistrosorigen_report = array();
$placeHoldersgestionregistrosorigen_report = array();

if(mlang_getcurrentlang()=="Spanish")
{
	$fieldLabelsgestionregistrosorigen_report["Spanish"] = array();
	$fieldToolTipsgestionregistrosorigen_report["Spanish"] = array();
	$placeHoldersgestionregistrosorigen_report["Spanish"] = array();
	$pageTitlesgestionregistrosorigen_report["Spanish"] = array();
	$fieldLabelsgestionregistrosorigen_report["Spanish"]["IdGesRegOrigen"] = "Cod.";
	$fieldToolTipsgestionregistrosorigen_report["Spanish"]["IdGesRegOrigen"] = "";
	$placeHoldersgestionregistrosorigen_report["Spanish"]["IdGesRegOrigen"] = "";
	$fieldLabelsgestionregistrosorigen_report["Spanish"]["IdUsuario"] = "Id Usuario";
	$fieldToolTipsgestionregistrosorigen_report["Spanish"]["IdUsuario"] = "";
	$placeHoldersgestionregistrosorigen_report["Spanish"]["IdUsuario"] = "";
	$fieldLabelsgestionregistrosorigen_report["Spanish"]["CantidadOrigen"] = "Cantidad";
	$fieldToolTipsgestionregistrosorigen_report["Spanish"]["CantidadOrigen"] = "";
	$placeHoldersgestionregistrosorigen_report["Spanish"]["CantidadOrigen"] = "";
	$fieldLabelsgestionregistrosorigen_report["Spanish"]["FotoOrigen"] = "Foto Origen";
	$fieldToolTipsgestionregistrosorigen_report["Spanish"]["FotoOrigen"] = "";
	$placeHoldersgestionregistrosorigen_report["Spanish"]["FotoOrigen"] = "";
	$fieldLabelsgestionregistrosorigen_report["Spanish"]["GPSMapaGoo"] = "GPSMapa Goo";
	$fieldToolTipsgestionregistrosorigen_report["Spanish"]["GPSMapaGoo"] = "";
	$placeHoldersgestionregistrosorigen_report["Spanish"]["GPSMapaGoo"] = "";
	$fieldLabelsgestionregistrosorigen_report["Spanish"]["NombreUsuario"] = "Usuario";
	$fieldToolTipsgestionregistrosorigen_report["Spanish"]["NombreUsuario"] = "";
	$placeHoldersgestionregistrosorigen_report["Spanish"]["NombreUsuario"] = "";
	$fieldLabelsgestionregistrosorigen_report["Spanish"]["DirecUsuario"] = "Dirección";
	$fieldToolTipsgestionregistrosorigen_report["Spanish"]["DirecUsuario"] = "";
	$placeHoldersgestionregistrosorigen_report["Spanish"]["DirecUsuario"] = "";
	$fieldLabelsgestionregistrosorigen_report["Spanish"]["DescriBarrio"] = "Barrio";
	$fieldToolTipsgestionregistrosorigen_report["Spanish"]["DescriBarrio"] = "";
	$placeHoldersgestionregistrosorigen_report["Spanish"]["DescriBarrio"] = "";
	$fieldLabelsgestionregistrosorigen_report["Spanish"]["DescriMedTipOrigen"] = "Tipo Medida";
	$fieldToolTipsgestionregistrosorigen_report["Spanish"]["DescriMedTipOrigen"] = "";
	$placeHoldersgestionregistrosorigen_report["Spanish"]["DescriMedTipOrigen"] = "";
	$fieldLabelsgestionregistrosorigen_report["Spanish"]["DescriResiduo"] = "Residuo";
	$fieldToolTipsgestionregistrosorigen_report["Spanish"]["DescriResiduo"] = "";
	$placeHoldersgestionregistrosorigen_report["Spanish"]["DescriResiduo"] = "";
	$fieldLabelsgestionregistrosorigen_report["Spanish"]["Lat"] = "Lat";
	$fieldToolTipsgestionregistrosorigen_report["Spanish"]["Lat"] = "";
	$placeHoldersgestionregistrosorigen_report["Spanish"]["Lat"] = "";
	$fieldLabelsgestionregistrosorigen_report["Spanish"]["Lng"] = "Lng";
	$fieldToolTipsgestionregistrosorigen_report["Spanish"]["Lng"] = "";
	$placeHoldersgestionregistrosorigen_report["Spanish"]["Lng"] = "";
	$fieldLabelsgestionregistrosorigen_report["Spanish"]["NombreCompleto"] = "Nombre";
	$fieldToolTipsgestionregistrosorigen_report["Spanish"]["NombreCompleto"] = "";
	$placeHoldersgestionregistrosorigen_report["Spanish"]["NombreCompleto"] = "";
	if (count($fieldToolTipsgestionregistrosorigen_report["Spanish"]))
		$tdatagestionregistrosorigen_report[".isUseToolTips"] = true;
}


	$tdatagestionregistrosorigen_report[".NCSearch"] = true;



$tdatagestionregistrosorigen_report[".shortTableName"] = "gestionregistrosorigen_report";
$tdatagestionregistrosorigen_report[".nSecOptions"] = 0;

$tdatagestionregistrosorigen_report[".mainTableOwnerID"] = "";
$tdatagestionregistrosorigen_report[".entityType"] = 2;

$tdatagestionregistrosorigen_report[".strOriginalTableName"] = "public.GestionRegistrosOrigen";

	



$tdatagestionregistrosorigen_report[".showAddInPopup"] = false;

$tdatagestionregistrosorigen_report[".showEditInPopup"] = false;

$tdatagestionregistrosorigen_report[".showViewInPopup"] = false;

//page's base css files names
$popupPagesLayoutNames = array();
$tdatagestionregistrosorigen_report[".popupPagesLayoutNames"] = $popupPagesLayoutNames;


$tdatagestionregistrosorigen_report[".listAjax"] = false;
//	temporary
$tdatagestionregistrosorigen_report[".listAjax"] = false;

	$tdatagestionregistrosorigen_report[".audit"] = false;

	$tdatagestionregistrosorigen_report[".locking"] = false;


$pages = $tdatagestionregistrosorigen_report[".defaultPages"];

if( $pages[PAGE_EDIT] ) {
	$tdatagestionregistrosorigen_report[".edit"] = true;
	$tdatagestionregistrosorigen_report[".afterEditAction"] = 1;
	$tdatagestionregistrosorigen_report[".closePopupAfterEdit"] = 1;
	$tdatagestionregistrosorigen_report[".afterEditActionDetTable"] = "";
}

if( $pages[PAGE_ADD] ) {
$tdatagestionregistrosorigen_report[".add"] = true;
$tdatagestionregistrosorigen_report[".afterAddAction"] = 1;
$tdatagestionregistrosorigen_report[".closePopupAfterAdd"] = 1;
$tdatagestionregistrosorigen_report[".afterAddActionDetTable"] = "";
}

if( $pages[PAGE_LIST] ) {
	$tdatagestionregistrosorigen_report[".list"] = true;
}



$tdatagestionregistrosorigen_report[".strSortControlSettingsJSON"] = "";




if( $pages[PAGE_VIEW] ) {
$tdatagestionregistrosorigen_report[".view"] = true;
}

if( $pages[PAGE_IMPORT] ) {
$tdatagestionregistrosorigen_report[".import"] = true;
}

if( $pages[PAGE_EXPORT] ) {
$tdatagestionregistrosorigen_report[".exportTo"] = true;
}

if( $pages[PAGE_PRINT] ) {
$tdatagestionregistrosorigen_report[".printFriendly"] = true;
}



$tdatagestionregistrosorigen_report[".showSimpleSearchOptions"] = true; // temp fix #13449

// Allow Show/Hide Fields in GRID
$tdatagestionregistrosorigen_report[".allowShowHideFields"] = true; // temp fix #13449
//

// Allow Fields Reordering in GRID
$tdatagestionregistrosorigen_report[".allowFieldsReordering"] = true; // temp fix #13449
//

$tdatagestionregistrosorigen_report[".isUseAjaxSuggest"] = true;




			

$tdatagestionregistrosorigen_report[".ajaxCodeSnippetAdded"] = false;

$tdatagestionregistrosorigen_report[".buttonsAdded"] = false;

$tdatagestionregistrosorigen_report[".addPageEvents"] = false;

// use timepicker for search panel
$tdatagestionregistrosorigen_report[".isUseTimeForSearch"] = false;


$tdatagestionregistrosorigen_report[".badgeColor"] = "CFAE83";


$tdatagestionregistrosorigen_report[".allSearchFields"] = array();
$tdatagestionregistrosorigen_report[".filterFields"] = array();
$tdatagestionregistrosorigen_report[".requiredSearchFields"] = array();

$tdatagestionregistrosorigen_report[".googleLikeFields"] = array();
$tdatagestionregistrosorigen_report[".googleLikeFields"][] = "IdGesRegOrigen";
$tdatagestionregistrosorigen_report[".googleLikeFields"][] = "NombreUsuario";
$tdatagestionregistrosorigen_report[".googleLikeFields"][] = "NombreCompleto";
$tdatagestionregistrosorigen_report[".googleLikeFields"][] = "DirecUsuario";
$tdatagestionregistrosorigen_report[".googleLikeFields"][] = "DescriBarrio";
$tdatagestionregistrosorigen_report[".googleLikeFields"][] = "CantidadOrigen";
$tdatagestionregistrosorigen_report[".googleLikeFields"][] = "DescriMedTipOrigen";
$tdatagestionregistrosorigen_report[".googleLikeFields"][] = "DescriResiduo";
$tdatagestionregistrosorigen_report[".googleLikeFields"][] = "IdUsuario";
$tdatagestionregistrosorigen_report[".googleLikeFields"][] = "GPSMapaGoo";
$tdatagestionregistrosorigen_report[".googleLikeFields"][] = "FotoOrigen";
$tdatagestionregistrosorigen_report[".googleLikeFields"][] = "Lat";
$tdatagestionregistrosorigen_report[".googleLikeFields"][] = "Lng";



$tdatagestionregistrosorigen_report[".tableType"] = "report";

$tdatagestionregistrosorigen_report[".printerPageOrientation"] = 0;
$tdatagestionregistrosorigen_report[".nPrinterPageScale"] = 100;

$tdatagestionregistrosorigen_report[".nPrinterSplitRecords"] = 40;

$tdatagestionregistrosorigen_report[".geocodingEnabled"] = false;

//report settings
$tdatagestionregistrosorigen_report[".printReportLayout"] = 6;

$tdatagestionregistrosorigen_report[".reportPrintPartitionType"] = 1;
$tdatagestionregistrosorigen_report[".reportPrintGroupsPerPage"] = 40;
$tdatagestionregistrosorigen_report[".lowGroup"] = 0;



$tdatagestionregistrosorigen_report[".pageSize"] = 20;


$tdatagestionregistrosorigen_report[".isExistTotalFields"] = true;




$tdatagestionregistrosorigen_report[".repShowDet"] = true;

$tdatagestionregistrosorigen_report[".reportLayout"] = 6;

//end of report settings










$tstrOrderBy = "";
if(strlen($tstrOrderBy) && strtolower(substr($tstrOrderBy,0,8))!="order by")
	$tstrOrderBy = "order by ".$tstrOrderBy;
$tdatagestionregistrosorigen_report[".strOrderBy"] = $tstrOrderBy;

$tdatagestionregistrosorigen_report[".orderindexes"] = array();

$tdatagestionregistrosorigen_report[".sqlHead"] = "SELECT gr.\"IdGesRegOrigen\",  u.\"NombreUsuario\",  u.\"NombreCompleto\",  u.\"DirecUsuario\",  b.\"DescriBarrio\",  gr.\"CantidadOrigen\",  mt.\"DescriMedTipOrigen\",  r.\"DescriResiduo\",  gr.\"IdUsuario\",  gr.\"GPSMapaGoo\",  gr.\"FotoOrigen\",  gr.\"Lat\",  gr.\"Lng\"";
$tdatagestionregistrosorigen_report[".sqlFrom"] = "FROM \"public\".\"GestionRegistrosOrigen\" AS gr  , \"public\".\"Residuos\" AS r  , \"public\".\"MedTipoOrigen\" AS mt  , \"public\".\"Usuarios\" AS u  , \"public\".\"Barrios\" AS b";
$tdatagestionregistrosorigen_report[".sqlWhereExpr"] = "(gr.\"IdUsuario\" =u.\"IdUsuario\") AND (gr.\"IdResiduo\" =r.\"IdResiduo\") AND (gr.\"IdMedTipOrigen\" =mt.\"IdMedTipOrigen\") AND (u.\"IdBarrio\" =b.\"IdBarrio\")";
$tdatagestionregistrosorigen_report[".sqlTail"] = "";










//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdatagestionregistrosorigen_report[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdatagestionregistrosorigen_report[".arrGroupsPerPage"] = $arrGPP;

$tdatagestionregistrosorigen_report[".highlightSearchResults"] = true;

$tableKeysgestionregistrosorigen_report = array();
$tableKeysgestionregistrosorigen_report[] = "IdGesRegOrigen";
$tdatagestionregistrosorigen_report[".Keys"] = $tableKeysgestionregistrosorigen_report;


$tdatagestionregistrosorigen_report[".hideMobileList"] = array();




//	IdGesRegOrigen
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "IdGesRegOrigen";
	$fdata["GoodName"] = "IdGesRegOrigen";
	$fdata["ownerTable"] = "public.GestionRegistrosOrigen";
	$fdata["Label"] = GetFieldLabel("public_GestionRegistrosOrigen_Report","IdGesRegOrigen");
	$fdata["FieldType"] = 3;

		// report field settings
					// end of report field settings

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

	$fdata["ViewFormats"]["report"] = $vdata;
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


	$tdatagestionregistrosorigen_report["IdGesRegOrigen"] = $fdata;
		$tdatagestionregistrosorigen_report[".searchableFields"][] = "IdGesRegOrigen";
//	NombreUsuario
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "NombreUsuario";
	$fdata["GoodName"] = "NombreUsuario";
	$fdata["ownerTable"] = "public.Usuarios";
	$fdata["Label"] = GetFieldLabel("public_GestionRegistrosOrigen_Report","NombreUsuario");
	$fdata["FieldType"] = 200;

		// report field settings
					// end of report field settings

	
	
			

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

	$fdata["ViewFormats"]["report"] = $vdata;
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


	$tdatagestionregistrosorigen_report["NombreUsuario"] = $fdata;
		$tdatagestionregistrosorigen_report[".searchableFields"][] = "NombreUsuario";
//	NombreCompleto
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "NombreCompleto";
	$fdata["GoodName"] = "NombreCompleto";
	$fdata["ownerTable"] = "public.Usuarios";
	$fdata["Label"] = GetFieldLabel("public_GestionRegistrosOrigen_Report","NombreCompleto");
	$fdata["FieldType"] = 200;

		// report field settings
		$fdata["isTotalMin"] = true;
				// end of report field settings

	
	
			

		$fdata["strField"] = "NombreCompleto";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "u.\"NombreCompleto\"";

	
	
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "");

	
	
	
	
	
	
	
	
	
	
	
	
		$vdata["NeedEncode"] = true;

	
		$vdata["truncateText"] = true;
	$vdata["NumberOfChars"] = 80;

	$fdata["ViewFormats"]["report"] = $vdata;
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


	$tdatagestionregistrosorigen_report["NombreCompleto"] = $fdata;
		$tdatagestionregistrosorigen_report[".searchableFields"][] = "NombreCompleto";
//	DirecUsuario
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "DirecUsuario";
	$fdata["GoodName"] = "DirecUsuario";
	$fdata["ownerTable"] = "public.Usuarios";
	$fdata["Label"] = GetFieldLabel("public_GestionRegistrosOrigen_Report","DirecUsuario");
	$fdata["FieldType"] = 200;

		// report field settings
					// end of report field settings

	
	
			

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

	$fdata["ViewFormats"]["report"] = $vdata;
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


	$tdatagestionregistrosorigen_report["DirecUsuario"] = $fdata;
		$tdatagestionregistrosorigen_report[".searchableFields"][] = "DirecUsuario";
//	DescriBarrio
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 5;
	$fdata["strName"] = "DescriBarrio";
	$fdata["GoodName"] = "DescriBarrio";
	$fdata["ownerTable"] = "public.Barrios";
	$fdata["Label"] = GetFieldLabel("public_GestionRegistrosOrigen_Report","DescriBarrio");
	$fdata["FieldType"] = 200;

		// report field settings
					// end of report field settings

	
	
			

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

	$fdata["ViewFormats"]["report"] = $vdata;
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


	$tdatagestionregistrosorigen_report["DescriBarrio"] = $fdata;
		$tdatagestionregistrosorigen_report[".searchableFields"][] = "DescriBarrio";
//	CantidadOrigen
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 6;
	$fdata["strName"] = "CantidadOrigen";
	$fdata["GoodName"] = "CantidadOrigen";
	$fdata["ownerTable"] = "public.GestionRegistrosOrigen";
	$fdata["Label"] = GetFieldLabel("public_GestionRegistrosOrigen_Report","CantidadOrigen");
	$fdata["FieldType"] = 14;

		// report field settings
					// end of report field settings

	
	
			

		$fdata["strField"] = "CantidadOrigen";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "gr.\"CantidadOrigen\"";

	
	
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "Number");

	
	
	
	
	
	
		$vdata["DecimalDigits"] = 3;

	
	
	
	
	
		$vdata["NeedEncode"] = true;

	
		$vdata["truncateText"] = true;
	$vdata["NumberOfChars"] = 80;

	$fdata["ViewFormats"]["report"] = $vdata;
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


	$tdatagestionregistrosorigen_report["CantidadOrigen"] = $fdata;
		$tdatagestionregistrosorigen_report[".searchableFields"][] = "CantidadOrigen";
//	DescriMedTipOrigen
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 7;
	$fdata["strName"] = "DescriMedTipOrigen";
	$fdata["GoodName"] = "DescriMedTipOrigen";
	$fdata["ownerTable"] = "public.MedTipoOrigen";
	$fdata["Label"] = GetFieldLabel("public_GestionRegistrosOrigen_Report","DescriMedTipOrigen");
	$fdata["FieldType"] = 200;

		// report field settings
					// end of report field settings

	
	
			

		$fdata["strField"] = "DescriMedTipOrigen";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "mt.\"DescriMedTipOrigen\"";

	
	
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "");

	
	
	
	
	
	
	
	
	
	
	
	
		$vdata["NeedEncode"] = true;

	
		$vdata["truncateText"] = true;
	$vdata["NumberOfChars"] = 80;

	$fdata["ViewFormats"]["report"] = $vdata;
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


	$tdatagestionregistrosorigen_report["DescriMedTipOrigen"] = $fdata;
		$tdatagestionregistrosorigen_report[".searchableFields"][] = "DescriMedTipOrigen";
//	DescriResiduo
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 8;
	$fdata["strName"] = "DescriResiduo";
	$fdata["GoodName"] = "DescriResiduo";
	$fdata["ownerTable"] = "public.Residuos";
	$fdata["Label"] = GetFieldLabel("public_GestionRegistrosOrigen_Report","DescriResiduo");
	$fdata["FieldType"] = 200;

		// report field settings
					// end of report field settings

	
	
			

		$fdata["strField"] = "DescriResiduo";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "r.\"DescriResiduo\"";

	
	
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "");

	
	
	
	
	
	
	
	
	
	
	
	
		$vdata["NeedEncode"] = true;

	
		$vdata["truncateText"] = true;
	$vdata["NumberOfChars"] = 80;

	$fdata["ViewFormats"]["report"] = $vdata;
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


	$tdatagestionregistrosorigen_report["DescriResiduo"] = $fdata;
		$tdatagestionregistrosorigen_report[".searchableFields"][] = "DescriResiduo";
//	IdUsuario
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 9;
	$fdata["strName"] = "IdUsuario";
	$fdata["GoodName"] = "IdUsuario";
	$fdata["ownerTable"] = "public.GestionRegistrosOrigen";
	$fdata["Label"] = GetFieldLabel("public_GestionRegistrosOrigen_Report","IdUsuario");
	$fdata["FieldType"] = 3;

		// report field settings
					// end of report field settings

	
	
			

		$fdata["strField"] = "IdUsuario";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "gr.\"IdUsuario\"";

	
	
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

	$fdata["ViewFormats"]["export"] = $vdata;
	$vdata = array("ViewFormat" => "");

	
	
	
	
	
	
	
	
	
	
	
	
		$vdata["NeedEncode"] = true;

	
		$vdata["truncateText"] = true;
	$vdata["NumberOfChars"] = 80;

	$fdata["ViewFormats"]["view"] = $vdata;
	$vdata = array("ViewFormat" => "");

	
	
	
	
	
	
	
	
	
	
	
	
		$vdata["NeedEncode"] = true;

	
		$vdata["truncateText"] = true;
	$vdata["NumberOfChars"] = 80;

	$fdata["ViewFormats"]["report"] = $vdata;
	$vdata = array("ViewFormat" => "");

	
	
	
	
	
	
	
	
	
	
	
	
		$vdata["NeedEncode"] = true;

	
		$vdata["truncateText"] = true;
	$vdata["NumberOfChars"] = 80;

	$fdata["ViewFormats"]["rprint"] = $vdata;
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


	$tdatagestionregistrosorigen_report["IdUsuario"] = $fdata;
		$tdatagestionregistrosorigen_report[".searchableFields"][] = "IdUsuario";
//	GPSMapaGoo
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 10;
	$fdata["strName"] = "GPSMapaGoo";
	$fdata["GoodName"] = "GPSMapaGoo";
	$fdata["ownerTable"] = "public.GestionRegistrosOrigen";
	$fdata["Label"] = GetFieldLabel("public_GestionRegistrosOrigen_Report","GPSMapaGoo");
	$fdata["FieldType"] = 201;

		// report field settings
					// end of report field settings

	
	
			

		$fdata["strField"] = "GPSMapaGoo";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "gr.\"GPSMapaGoo\"";

	
	
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "Hyperlink");

	
		$vdata["LinkPrefix"] ="https://www.google.com/maps?q=";

	
	
				$vdata["hlType"] = 0;
	$vdata["hlLinkWordNameType"] = "Text";
	$vdata["hlLinkWordText"] = "Link";
	$vdata["hlTitleField"] = "";

	
	
	
	
	
	
	
	
	
		$vdata["truncateText"] = true;
	$vdata["NumberOfChars"] = 80;

	$fdata["ViewFormats"]["report"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Text area");

	
		$edata["weekdayMessage"] = array("message" => "", "messageType" => "Text");
	$edata["weekdays"] = "[]";


	
	



	
	
	
	
			$edata["acceptFileTypes"] = ".+$";
		$edata["acceptFileTypesHtml"] = "";

		$edata["maxNumberOfFiles"] = 0;

	
	
	
				$edata["nRows"] = 100;
			$edata["nCols"] = 200;

	
	
		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
	
	
	//	End validation

		$edata["CreateThumbnail"] = true;
	$edata["StrThumbnail"] = "th";
			$edata["ThumbnailSize"] = 600;

	
	
	
	
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


	$tdatagestionregistrosorigen_report["GPSMapaGoo"] = $fdata;
		$tdatagestionregistrosorigen_report[".searchableFields"][] = "GPSMapaGoo";
//	FotoOrigen
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 11;
	$fdata["strName"] = "FotoOrigen";
	$fdata["GoodName"] = "FotoOrigen";
	$fdata["ownerTable"] = "public.GestionRegistrosOrigen";
	$fdata["Label"] = GetFieldLabel("public_GestionRegistrosOrigen_Report","FotoOrigen");
	$fdata["FieldType"] = 200;

		// report field settings
					// end of report field settings

	
	
			

		$fdata["strField"] = "FotoOrigen";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "gr.\"FotoOrigen\"";

	
	
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "File-based Image");

	
	
				$vdata["ImageWidth"] = 200;
	$vdata["ImageHeight"] = 170;

			$vdata["multipleImgMode"] = 1;
	$vdata["maxImages"] = 0;

			$vdata["showGallery"] = true;
	$vdata["galleryMode"] = 2;
	$vdata["captionMode"] = 2;
	$vdata["captionField"] = "";

	$vdata["imageBorder"] = 1;
	$vdata["imageFullWidth"] = 1;


	
	
	
	
	
	
	
	
	
	
	
		$vdata["truncateText"] = true;
	$vdata["NumberOfChars"] = 80;

	$fdata["ViewFormats"]["report"] = $vdata;
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


	$tdatagestionregistrosorigen_report["FotoOrigen"] = $fdata;
		$tdatagestionregistrosorigen_report[".searchableFields"][] = "FotoOrigen";
//	Lat
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 12;
	$fdata["strName"] = "Lat";
	$fdata["GoodName"] = "Lat";
	$fdata["ownerTable"] = "public.GestionRegistrosOrigen";
	$fdata["Label"] = GetFieldLabel("public_GestionRegistrosOrigen_Report","Lat");
	$fdata["FieldType"] = 14;

		// report field settings
					// end of report field settings

	
	
			

		$fdata["strField"] = "Lat";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "gr.\"Lat\"";

	
	
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "Number");

	
	
	
	
	
	
		$vdata["DecimalDigits"] = 3;

	
	
	
	
	
		$vdata["NeedEncode"] = true;

	
		$vdata["truncateText"] = true;
	$vdata["NumberOfChars"] = 80;

	$fdata["ViewFormats"]["report"] = $vdata;
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


	$tdatagestionregistrosorigen_report["Lat"] = $fdata;
		$tdatagestionregistrosorigen_report[".searchableFields"][] = "Lat";
//	Lng
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 13;
	$fdata["strName"] = "Lng";
	$fdata["GoodName"] = "Lng";
	$fdata["ownerTable"] = "public.GestionRegistrosOrigen";
	$fdata["Label"] = GetFieldLabel("public_GestionRegistrosOrigen_Report","Lng");
	$fdata["FieldType"] = 14;

		// report field settings
					// end of report field settings

	
	
			

		$fdata["strField"] = "Lng";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "gr.\"Lng\"";

	
	
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "Number");

	
	
	
	
	
	
		$vdata["DecimalDigits"] = 3;

	
	
	
	
	
		$vdata["NeedEncode"] = true;

	
		$vdata["truncateText"] = true;
	$vdata["NumberOfChars"] = 80;

	$fdata["ViewFormats"]["report"] = $vdata;
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


	$tdatagestionregistrosorigen_report["Lng"] = $fdata;
		$tdatagestionregistrosorigen_report[".searchableFields"][] = "Lng";


$tables_data["public.GestionRegistrosOrigen Report"]=&$tdatagestionregistrosorigen_report;
$field_labels["public_GestionRegistrosOrigen_Report"] = &$fieldLabelsgestionregistrosorigen_report;
$fieldToolTips["public_GestionRegistrosOrigen_Report"] = &$fieldToolTipsgestionregistrosorigen_report;
$placeHolders["public_GestionRegistrosOrigen_Report"] = &$placeHoldersgestionregistrosorigen_report;
$page_titles["public_GestionRegistrosOrigen_Report"] = &$pageTitlesgestionregistrosorigen_report;

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)
$detailsTablesData["public.GestionRegistrosOrigen Report"] = array();

// tables which are master tables for current table (detail)
$masterTablesData["public.GestionRegistrosOrigen Report"] = array();



// -----------------end  prepare master-details data arrays ------------------------------//


require_once(getabspath("classes/sql.php"));










function createSqlQuery_gestionregistrosorigen_report()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "gr.\"IdGesRegOrigen\",  u.\"NombreUsuario\",  u.\"NombreCompleto\",  u.\"DirecUsuario\",  b.\"DescriBarrio\",  gr.\"CantidadOrigen\",  mt.\"DescriMedTipOrigen\",  r.\"DescriResiduo\",  gr.\"IdUsuario\",  gr.\"GPSMapaGoo\",  gr.\"FotoOrigen\",  gr.\"Lat\",  gr.\"Lng\"";
$proto0["m_strFrom"] = "FROM \"public\".\"GestionRegistrosOrigen\" AS gr  , \"public\".\"Residuos\" AS r  , \"public\".\"MedTipoOrigen\" AS mt  , \"public\".\"Usuarios\" AS u  , \"public\".\"Barrios\" AS b";
$proto0["m_strWhere"] = "(gr.\"IdUsuario\" =u.\"IdUsuario\") AND (gr.\"IdResiduo\" =r.\"IdResiduo\") AND (gr.\"IdMedTipOrigen\" =mt.\"IdMedTipOrigen\") AND (u.\"IdBarrio\" =b.\"IdBarrio\")";
$proto0["m_strOrderBy"] = "";
	
		;
			$proto0["cipherer"] = null;
$proto2=array();
$proto2["m_sql"] = "(gr.\"IdUsuario\" =u.\"IdUsuario\") AND (gr.\"IdResiduo\" =r.\"IdResiduo\") AND (gr.\"IdMedTipOrigen\" =mt.\"IdMedTipOrigen\") AND (u.\"IdBarrio\" =b.\"IdBarrio\")";
$proto2["m_uniontype"] = "SQLL_AND";
	$obj = new SQLNonParsed(array(
	"m_sql" => "(gr.\"IdUsuario\" =u.\"IdUsuario\") AND (gr.\"IdResiduo\" =r.\"IdResiduo\") AND (gr.\"IdMedTipOrigen\" =mt.\"IdMedTipOrigen\") AND (u.\"IdBarrio\" =b.\"IdBarrio\")"
));

$proto2["m_column"]=$obj;
$proto2["m_contained"] = array();
						$proto4=array();
$proto4["m_sql"] = "gr.\"IdUsuario\" =u.\"IdUsuario\"";
$proto4["m_uniontype"] = "SQLL_UNKNOWN";
						$obj = new SQLField(array(
	"m_strName" => "IdUsuario",
	"m_strTable" => "gr",
	"m_srcTableName" => "public.GestionRegistrosOrigen Report"
));

$proto4["m_column"]=$obj;
$proto4["m_contained"] = array();
$proto4["m_strCase"] = "=u.\"IdUsuario\"";
$proto4["m_havingmode"] = false;
$proto4["m_inBrackets"] = true;
$proto4["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto4);

			$proto2["m_contained"][]=$obj;
						$proto6=array();
$proto6["m_sql"] = "gr.\"IdResiduo\" =r.\"IdResiduo\"";
$proto6["m_uniontype"] = "SQLL_UNKNOWN";
						$obj = new SQLField(array(
	"m_strName" => "IdResiduo",
	"m_strTable" => "gr",
	"m_srcTableName" => "public.GestionRegistrosOrigen Report"
));

$proto6["m_column"]=$obj;
$proto6["m_contained"] = array();
$proto6["m_strCase"] = "=r.\"IdResiduo\"";
$proto6["m_havingmode"] = false;
$proto6["m_inBrackets"] = true;
$proto6["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto6);

			$proto2["m_contained"][]=$obj;
						$proto8=array();
$proto8["m_sql"] = "gr.\"IdMedTipOrigen\" =mt.\"IdMedTipOrigen\"";
$proto8["m_uniontype"] = "SQLL_UNKNOWN";
						$obj = new SQLField(array(
	"m_strName" => "IdMedTipOrigen",
	"m_strTable" => "gr",
	"m_srcTableName" => "public.GestionRegistrosOrigen Report"
));

$proto8["m_column"]=$obj;
$proto8["m_contained"] = array();
$proto8["m_strCase"] = "=mt.\"IdMedTipOrigen\"";
$proto8["m_havingmode"] = false;
$proto8["m_inBrackets"] = true;
$proto8["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto8);

			$proto2["m_contained"][]=$obj;
						$proto10=array();
$proto10["m_sql"] = "u.\"IdBarrio\" =b.\"IdBarrio\"";
$proto10["m_uniontype"] = "SQLL_UNKNOWN";
						$obj = new SQLField(array(
	"m_strName" => "IdBarrio",
	"m_strTable" => "u",
	"m_srcTableName" => "public.GestionRegistrosOrigen Report"
));

$proto10["m_column"]=$obj;
$proto10["m_contained"] = array();
$proto10["m_strCase"] = "=b.\"IdBarrio\"";
$proto10["m_havingmode"] = false;
$proto10["m_inBrackets"] = true;
$proto10["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto10);

			$proto2["m_contained"][]=$obj;
$proto2["m_strCase"] = "";
$proto2["m_havingmode"] = false;
$proto2["m_inBrackets"] = false;
$proto2["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto2);

$proto0["m_where"] = $obj;
$proto12=array();
$proto12["m_sql"] = "";
$proto12["m_uniontype"] = "SQLL_UNKNOWN";
	$obj = new SQLNonParsed(array(
	"m_sql" => ""
));

$proto12["m_column"]=$obj;
$proto12["m_contained"] = array();
$proto12["m_strCase"] = "";
$proto12["m_havingmode"] = false;
$proto12["m_inBrackets"] = false;
$proto12["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto12);

$proto0["m_having"] = $obj;
$proto0["m_fieldlist"] = array();
						$proto14=array();
			$obj = new SQLField(array(
	"m_strName" => "IdGesRegOrigen",
	"m_strTable" => "gr",
	"m_srcTableName" => "public.GestionRegistrosOrigen Report"
));

$proto14["m_sql"] = "gr.\"IdGesRegOrigen\"";
$proto14["m_srcTableName"] = "public.GestionRegistrosOrigen Report";
$proto14["m_expr"]=$obj;
$proto14["m_alias"] = "";
$obj = new SQLFieldListItem($proto14);

$proto0["m_fieldlist"][]=$obj;
						$proto16=array();
			$obj = new SQLField(array(
	"m_strName" => "NombreUsuario",
	"m_strTable" => "u",
	"m_srcTableName" => "public.GestionRegistrosOrigen Report"
));

$proto16["m_sql"] = "u.\"NombreUsuario\"";
$proto16["m_srcTableName"] = "public.GestionRegistrosOrigen Report";
$proto16["m_expr"]=$obj;
$proto16["m_alias"] = "";
$obj = new SQLFieldListItem($proto16);

$proto0["m_fieldlist"][]=$obj;
						$proto18=array();
			$obj = new SQLField(array(
	"m_strName" => "NombreCompleto",
	"m_strTable" => "u",
	"m_srcTableName" => "public.GestionRegistrosOrigen Report"
));

$proto18["m_sql"] = "u.\"NombreCompleto\"";
$proto18["m_srcTableName"] = "public.GestionRegistrosOrigen Report";
$proto18["m_expr"]=$obj;
$proto18["m_alias"] = "";
$obj = new SQLFieldListItem($proto18);

$proto0["m_fieldlist"][]=$obj;
						$proto20=array();
			$obj = new SQLField(array(
	"m_strName" => "DirecUsuario",
	"m_strTable" => "u",
	"m_srcTableName" => "public.GestionRegistrosOrigen Report"
));

$proto20["m_sql"] = "u.\"DirecUsuario\"";
$proto20["m_srcTableName"] = "public.GestionRegistrosOrigen Report";
$proto20["m_expr"]=$obj;
$proto20["m_alias"] = "";
$obj = new SQLFieldListItem($proto20);

$proto0["m_fieldlist"][]=$obj;
						$proto22=array();
			$obj = new SQLField(array(
	"m_strName" => "DescriBarrio",
	"m_strTable" => "b",
	"m_srcTableName" => "public.GestionRegistrosOrigen Report"
));

$proto22["m_sql"] = "b.\"DescriBarrio\"";
$proto22["m_srcTableName"] = "public.GestionRegistrosOrigen Report";
$proto22["m_expr"]=$obj;
$proto22["m_alias"] = "";
$obj = new SQLFieldListItem($proto22);

$proto0["m_fieldlist"][]=$obj;
						$proto24=array();
			$obj = new SQLField(array(
	"m_strName" => "CantidadOrigen",
	"m_strTable" => "gr",
	"m_srcTableName" => "public.GestionRegistrosOrigen Report"
));

$proto24["m_sql"] = "gr.\"CantidadOrigen\"";
$proto24["m_srcTableName"] = "public.GestionRegistrosOrigen Report";
$proto24["m_expr"]=$obj;
$proto24["m_alias"] = "";
$obj = new SQLFieldListItem($proto24);

$proto0["m_fieldlist"][]=$obj;
						$proto26=array();
			$obj = new SQLField(array(
	"m_strName" => "DescriMedTipOrigen",
	"m_strTable" => "mt",
	"m_srcTableName" => "public.GestionRegistrosOrigen Report"
));

$proto26["m_sql"] = "mt.\"DescriMedTipOrigen\"";
$proto26["m_srcTableName"] = "public.GestionRegistrosOrigen Report";
$proto26["m_expr"]=$obj;
$proto26["m_alias"] = "";
$obj = new SQLFieldListItem($proto26);

$proto0["m_fieldlist"][]=$obj;
						$proto28=array();
			$obj = new SQLField(array(
	"m_strName" => "DescriResiduo",
	"m_strTable" => "r",
	"m_srcTableName" => "public.GestionRegistrosOrigen Report"
));

$proto28["m_sql"] = "r.\"DescriResiduo\"";
$proto28["m_srcTableName"] = "public.GestionRegistrosOrigen Report";
$proto28["m_expr"]=$obj;
$proto28["m_alias"] = "";
$obj = new SQLFieldListItem($proto28);

$proto0["m_fieldlist"][]=$obj;
						$proto30=array();
			$obj = new SQLField(array(
	"m_strName" => "IdUsuario",
	"m_strTable" => "gr",
	"m_srcTableName" => "public.GestionRegistrosOrigen Report"
));

$proto30["m_sql"] = "gr.\"IdUsuario\"";
$proto30["m_srcTableName"] = "public.GestionRegistrosOrigen Report";
$proto30["m_expr"]=$obj;
$proto30["m_alias"] = "";
$obj = new SQLFieldListItem($proto30);

$proto0["m_fieldlist"][]=$obj;
						$proto32=array();
			$obj = new SQLField(array(
	"m_strName" => "GPSMapaGoo",
	"m_strTable" => "gr",
	"m_srcTableName" => "public.GestionRegistrosOrigen Report"
));

$proto32["m_sql"] = "gr.\"GPSMapaGoo\"";
$proto32["m_srcTableName"] = "public.GestionRegistrosOrigen Report";
$proto32["m_expr"]=$obj;
$proto32["m_alias"] = "";
$obj = new SQLFieldListItem($proto32);

$proto0["m_fieldlist"][]=$obj;
						$proto34=array();
			$obj = new SQLField(array(
	"m_strName" => "FotoOrigen",
	"m_strTable" => "gr",
	"m_srcTableName" => "public.GestionRegistrosOrigen Report"
));

$proto34["m_sql"] = "gr.\"FotoOrigen\"";
$proto34["m_srcTableName"] = "public.GestionRegistrosOrigen Report";
$proto34["m_expr"]=$obj;
$proto34["m_alias"] = "";
$obj = new SQLFieldListItem($proto34);

$proto0["m_fieldlist"][]=$obj;
						$proto36=array();
			$obj = new SQLField(array(
	"m_strName" => "Lat",
	"m_strTable" => "gr",
	"m_srcTableName" => "public.GestionRegistrosOrigen Report"
));

$proto36["m_sql"] = "gr.\"Lat\"";
$proto36["m_srcTableName"] = "public.GestionRegistrosOrigen Report";
$proto36["m_expr"]=$obj;
$proto36["m_alias"] = "";
$obj = new SQLFieldListItem($proto36);

$proto0["m_fieldlist"][]=$obj;
						$proto38=array();
			$obj = new SQLField(array(
	"m_strName" => "Lng",
	"m_strTable" => "gr",
	"m_srcTableName" => "public.GestionRegistrosOrigen Report"
));

$proto38["m_sql"] = "gr.\"Lng\"";
$proto38["m_srcTableName"] = "public.GestionRegistrosOrigen Report";
$proto38["m_expr"]=$obj;
$proto38["m_alias"] = "";
$obj = new SQLFieldListItem($proto38);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto40=array();
$proto40["m_link"] = "SQLL_MAIN";
			$proto41=array();
$proto41["m_strName"] = "public.GestionRegistrosOrigen";
$proto41["m_srcTableName"] = "public.GestionRegistrosOrigen Report";
$proto41["m_columns"] = array();
$proto41["m_columns"][] = "IdGesRegOrigen";
$proto41["m_columns"][] = "IdResiduo";
$proto41["m_columns"][] = "IdMedTipOrigen";
$proto41["m_columns"][] = "IdUsuario";
$proto41["m_columns"][] = "CantidadOrigen";
$proto41["m_columns"][] = "FotoOrigen";
$proto41["m_columns"][] = "GPSMapaGoo";
$proto41["m_columns"][] = "Lat";
$proto41["m_columns"][] = "Lng";
$obj = new SQLTable($proto41);

$proto40["m_table"] = $obj;
$proto40["m_sql"] = "\"public\".\"GestionRegistrosOrigen\" AS gr";
$proto40["m_alias"] = "gr";
$proto40["m_srcTableName"] = "public.GestionRegistrosOrigen Report";
$proto42=array();
$proto42["m_sql"] = "";
$proto42["m_uniontype"] = "SQLL_UNKNOWN";
	$obj = new SQLNonParsed(array(
	"m_sql" => ""
));

$proto42["m_column"]=$obj;
$proto42["m_contained"] = array();
$proto42["m_strCase"] = "";
$proto42["m_havingmode"] = false;
$proto42["m_inBrackets"] = false;
$proto42["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto42);

$proto40["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto40);

$proto0["m_fromlist"][]=$obj;
												$proto44=array();
$proto44["m_link"] = "SQLL_CROSSJOIN";
			$proto45=array();
$proto45["m_strName"] = "public.Residuos";
$proto45["m_srcTableName"] = "public.GestionRegistrosOrigen Report";
$proto45["m_columns"] = array();
$proto45["m_columns"][] = "IdResiduo";
$proto45["m_columns"][] = "DescriResiduo";
$obj = new SQLTable($proto45);

$proto44["m_table"] = $obj;
$proto44["m_sql"] = "\"public\".\"Residuos\" AS r";
$proto44["m_alias"] = "r";
$proto44["m_srcTableName"] = "public.GestionRegistrosOrigen Report";
$proto46=array();
$proto46["m_sql"] = "";
$proto46["m_uniontype"] = "SQLL_UNKNOWN";
	$obj = new SQLNonParsed(array(
	"m_sql" => ""
));

$proto46["m_column"]=$obj;
$proto46["m_contained"] = array();
$proto46["m_strCase"] = "";
$proto46["m_havingmode"] = false;
$proto46["m_inBrackets"] = false;
$proto46["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto46);

$proto44["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto44);

$proto0["m_fromlist"][]=$obj;
												$proto48=array();
$proto48["m_link"] = "SQLL_CROSSJOIN";
			$proto49=array();
$proto49["m_strName"] = "public.MedTipoOrigen";
$proto49["m_srcTableName"] = "public.GestionRegistrosOrigen Report";
$proto49["m_columns"] = array();
$proto49["m_columns"][] = "IdMedTipOrigen";
$proto49["m_columns"][] = "DescriMedTipOrigen";
$obj = new SQLTable($proto49);

$proto48["m_table"] = $obj;
$proto48["m_sql"] = "\"public\".\"MedTipoOrigen\" AS mt";
$proto48["m_alias"] = "mt";
$proto48["m_srcTableName"] = "public.GestionRegistrosOrigen Report";
$proto50=array();
$proto50["m_sql"] = "";
$proto50["m_uniontype"] = "SQLL_UNKNOWN";
	$obj = new SQLNonParsed(array(
	"m_sql" => ""
));

$proto50["m_column"]=$obj;
$proto50["m_contained"] = array();
$proto50["m_strCase"] = "";
$proto50["m_havingmode"] = false;
$proto50["m_inBrackets"] = false;
$proto50["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto50);

$proto48["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto48);

$proto0["m_fromlist"][]=$obj;
												$proto52=array();
$proto52["m_link"] = "SQLL_CROSSJOIN";
			$proto53=array();
$proto53["m_strName"] = "public.Usuarios";
$proto53["m_srcTableName"] = "public.GestionRegistrosOrigen Report";
$proto53["m_columns"] = array();
$proto53["m_columns"][] = "IdUsuario";
$proto53["m_columns"][] = "NombreUsuario";
$proto53["m_columns"][] = "Password";
$proto53["m_columns"][] = "Email";
$proto53["m_columns"][] = "NombreCompleto";
$proto53["m_columns"][] = "Groupid";
$proto53["m_columns"][] = "active";
$proto53["m_columns"][] = "ext_security_id";
$proto53["m_columns"][] = "DirecUsuario";
$proto53["m_columns"][] = "IdBarrio";
$proto53["m_columns"][] = "TelUsuario";
$obj = new SQLTable($proto53);

$proto52["m_table"] = $obj;
$proto52["m_sql"] = "\"public\".\"Usuarios\" AS u";
$proto52["m_alias"] = "u";
$proto52["m_srcTableName"] = "public.GestionRegistrosOrigen Report";
$proto54=array();
$proto54["m_sql"] = "";
$proto54["m_uniontype"] = "SQLL_UNKNOWN";
	$obj = new SQLNonParsed(array(
	"m_sql" => ""
));

$proto54["m_column"]=$obj;
$proto54["m_contained"] = array();
$proto54["m_strCase"] = "";
$proto54["m_havingmode"] = false;
$proto54["m_inBrackets"] = false;
$proto54["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto54);

$proto52["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto52);

$proto0["m_fromlist"][]=$obj;
												$proto56=array();
$proto56["m_link"] = "SQLL_CROSSJOIN";
			$proto57=array();
$proto57["m_strName"] = "public.Barrios";
$proto57["m_srcTableName"] = "public.GestionRegistrosOrigen Report";
$proto57["m_columns"] = array();
$proto57["m_columns"][] = "IdBarrio";
$proto57["m_columns"][] = "DescriBarrio";
$obj = new SQLTable($proto57);

$proto56["m_table"] = $obj;
$proto56["m_sql"] = "\"public\".\"Barrios\" AS b";
$proto56["m_alias"] = "b";
$proto56["m_srcTableName"] = "public.GestionRegistrosOrigen Report";
$proto58=array();
$proto58["m_sql"] = "";
$proto58["m_uniontype"] = "SQLL_UNKNOWN";
	$obj = new SQLNonParsed(array(
	"m_sql" => ""
));

$proto58["m_column"]=$obj;
$proto58["m_contained"] = array();
$proto58["m_strCase"] = "";
$proto58["m_havingmode"] = false;
$proto58["m_inBrackets"] = false;
$proto58["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto58);

$proto56["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto56);

$proto0["m_fromlist"][]=$obj;
$proto0["m_groupby"] = array();
$proto0["m_orderby"] = array();
$proto0["m_srcTableName"]="public.GestionRegistrosOrigen Report";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_gestionregistrosorigen_report = createSqlQuery_gestionregistrosorigen_report();


	
		;

													

$tdatagestionregistrosorigen_report[".sqlquery"] = $queryData_gestionregistrosorigen_report;

$tableEvents["public.GestionRegistrosOrigen Report"] = new eventsBase;
$tdatagestionregistrosorigen_report[".hasEvents"] = false;

?>