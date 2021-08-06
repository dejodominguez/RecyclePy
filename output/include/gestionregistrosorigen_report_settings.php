<?php
$tdatagestionregistrosorigen_report = array();
$tdatagestionregistrosorigen_report[".searchableFields"] = array();
$tdatagestionregistrosorigen_report[".ShortName"] = "gestionregistrosorigen_report";
$tdatagestionregistrosorigen_report[".OwnerID"] = "";
$tdatagestionregistrosorigen_report[".OriginalTable"] = "public.GestionRegistrosOrigen";


$tdatagestionregistrosorigen_report[".pagesByType"] = my_json_decode( "{\"report\":[\"report\"],\"rprint\":[\"rprint\"],\"search\":[\"search\"]}" );
$tdatagestionregistrosorigen_report[".originalPagesByType"] = $tdatagestionregistrosorigen_report[".pagesByType"];
$tdatagestionregistrosorigen_report[".pages"] = types2pages( my_json_decode( "{\"report\":[\"report\"],\"rprint\":[\"rprint\"],\"search\":[\"search\"]}" ) );
$tdatagestionregistrosorigen_report[".originalPages"] = $tdatagestionregistrosorigen_report[".pages"];
$tdatagestionregistrosorigen_report[".defaultPages"] = my_json_decode( "{\"report\":\"report\",\"rprint\":\"rprint\",\"search\":\"search\"}" );
$tdatagestionregistrosorigen_report[".originalDefaultPages"] = $tdatagestionregistrosorigen_report[".defaultPages"];

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
	$fieldLabelsgestionregistrosorigen_report["Spanish"]["Lat"] = "Lat";
	$fieldToolTipsgestionregistrosorigen_report["Spanish"]["Lat"] = "";
	$placeHoldersgestionregistrosorigen_report["Spanish"]["Lat"] = "";
	$fieldLabelsgestionregistrosorigen_report["Spanish"]["Lng"] = "Lng";
	$fieldToolTipsgestionregistrosorigen_report["Spanish"]["Lng"] = "";
	$placeHoldersgestionregistrosorigen_report["Spanish"]["Lng"] = "";
	$fieldLabelsgestionregistrosorigen_report["Spanish"]["id_ges_reg_origen"] = "Id Ges Reg Origen";
	$fieldToolTipsgestionregistrosorigen_report["Spanish"]["id_ges_reg_origen"] = "";
	$placeHoldersgestionregistrosorigen_report["Spanish"]["id_ges_reg_origen"] = "";
	$fieldLabelsgestionregistrosorigen_report["Spanish"]["nombre_usuario"] = "Nombre Usuario";
	$fieldToolTipsgestionregistrosorigen_report["Spanish"]["nombre_usuario"] = "";
	$placeHoldersgestionregistrosorigen_report["Spanish"]["nombre_usuario"] = "";
	$fieldLabelsgestionregistrosorigen_report["Spanish"]["nombre_completo"] = "Nombre Completo";
	$fieldToolTipsgestionregistrosorigen_report["Spanish"]["nombre_completo"] = "";
	$placeHoldersgestionregistrosorigen_report["Spanish"]["nombre_completo"] = "";
	$fieldLabelsgestionregistrosorigen_report["Spanish"]["direc_usuario"] = "Direc Usuario";
	$fieldToolTipsgestionregistrosorigen_report["Spanish"]["direc_usuario"] = "";
	$placeHoldersgestionregistrosorigen_report["Spanish"]["direc_usuario"] = "";
	$fieldLabelsgestionregistrosorigen_report["Spanish"]["descri_barrio"] = "Descri Barrio";
	$fieldToolTipsgestionregistrosorigen_report["Spanish"]["descri_barrio"] = "";
	$placeHoldersgestionregistrosorigen_report["Spanish"]["descri_barrio"] = "";
	$fieldLabelsgestionregistrosorigen_report["Spanish"]["cantidad_origen"] = "Cantidad Origen";
	$fieldToolTipsgestionregistrosorigen_report["Spanish"]["cantidad_origen"] = "";
	$placeHoldersgestionregistrosorigen_report["Spanish"]["cantidad_origen"] = "";
	$fieldLabelsgestionregistrosorigen_report["Spanish"]["descri_med_tip_origen"] = "Descri Med Tip Origen";
	$fieldToolTipsgestionregistrosorigen_report["Spanish"]["descri_med_tip_origen"] = "";
	$placeHoldersgestionregistrosorigen_report["Spanish"]["descri_med_tip_origen"] = "";
	$fieldLabelsgestionregistrosorigen_report["Spanish"]["descri_residuo"] = "Descri Residuo";
	$fieldToolTipsgestionregistrosorigen_report["Spanish"]["descri_residuo"] = "";
	$placeHoldersgestionregistrosorigen_report["Spanish"]["descri_residuo"] = "";
	$fieldLabelsgestionregistrosorigen_report["Spanish"]["id_usuario"] = "Id Usuario";
	$fieldToolTipsgestionregistrosorigen_report["Spanish"]["id_usuario"] = "";
	$placeHoldersgestionregistrosorigen_report["Spanish"]["id_usuario"] = "";
	$fieldLabelsgestionregistrosorigen_report["Spanish"]["gps_mapa_goo"] = "Gps Mapa Goo";
	$fieldToolTipsgestionregistrosorigen_report["Spanish"]["gps_mapa_goo"] = "";
	$placeHoldersgestionregistrosorigen_report["Spanish"]["gps_mapa_goo"] = "";
	$fieldLabelsgestionregistrosorigen_report["Spanish"]["foto_origen"] = "Foto Origen";
	$fieldToolTipsgestionregistrosorigen_report["Spanish"]["foto_origen"] = "";
	$placeHoldersgestionregistrosorigen_report["Spanish"]["foto_origen"] = "";
	if (count($fieldToolTipsgestionregistrosorigen_report["Spanish"]))
		$tdatagestionregistrosorigen_report[".isUseToolTips"] = true;
}


	$tdatagestionregistrosorigen_report[".NCSearch"] = true;



$tdatagestionregistrosorigen_report[".shortTableName"] = "gestionregistrosorigen_report";
$tdatagestionregistrosorigen_report[".nSecOptions"] = 0;

$tdatagestionregistrosorigen_report[".mainTableOwnerID"] = "";
$tdatagestionregistrosorigen_report[".entityType"] = 2;
$tdatagestionregistrosorigen_report[".connId"] = "RealEstate_at_localhost";


$tdatagestionregistrosorigen_report[".strOriginalTableName"] = "public.GestionRegistrosOrigen";

	



$tdatagestionregistrosorigen_report[".showAddInPopup"] = false;

$tdatagestionregistrosorigen_report[".showEditInPopup"] = false;

$tdatagestionregistrosorigen_report[".showViewInPopup"] = false;

$tdatagestionregistrosorigen_report[".listAjax"] = false;
//	temporary
//$tdatagestionregistrosorigen_report[".listAjax"] = false;

	$tdatagestionregistrosorigen_report[".audit"] = false;

	$tdatagestionregistrosorigen_report[".locking"] = false;


$pages = $tdatagestionregistrosorigen_report[".defaultPages"];

if( $pages[PAGE_EDIT] ) {
	$tdatagestionregistrosorigen_report[".edit"] = true;
	$tdatagestionregistrosorigen_report[".afterEditAction"] = 0;
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
$tdatagestionregistrosorigen_report[".googleLikeFields"][] = "id_ges_reg_origen";
$tdatagestionregistrosorigen_report[".googleLikeFields"][] = "nombre_usuario";
$tdatagestionregistrosorigen_report[".googleLikeFields"][] = "nombre_completo";
$tdatagestionregistrosorigen_report[".googleLikeFields"][] = "direc_usuario";
$tdatagestionregistrosorigen_report[".googleLikeFields"][] = "descri_barrio";
$tdatagestionregistrosorigen_report[".googleLikeFields"][] = "cantidad_origen";
$tdatagestionregistrosorigen_report[".googleLikeFields"][] = "descri_med_tip_origen";
$tdatagestionregistrosorigen_report[".googleLikeFields"][] = "descri_residuo";
$tdatagestionregistrosorigen_report[".googleLikeFields"][] = "id_usuario";
$tdatagestionregistrosorigen_report[".googleLikeFields"][] = "gps_mapa_goo";
$tdatagestionregistrosorigen_report[".googleLikeFields"][] = "foto_origen";
$tdatagestionregistrosorigen_report[".googleLikeFields"][] = "Lat";
$tdatagestionregistrosorigen_report[".googleLikeFields"][] = "Lng";



$tdatagestionregistrosorigen_report[".tableType"] = "report";

$tdatagestionregistrosorigen_report[".printerPageOrientation"] = 0;
$tdatagestionregistrosorigen_report[".nPrinterPageScale"] = 100;

$tdatagestionregistrosorigen_report[".nPrinterSplitRecords"] = 40;

$tdatagestionregistrosorigen_report[".geocodingEnabled"] = false;

//report settings

$tdatagestionregistrosorigen_report[".reportPrintGroupsPerPage"] = 3;
$tdatagestionregistrosorigen_report[".reportPrintRecordsPerPage"] = 40;

$tdatagestionregistrosorigen_report[".pageSizeGroups"] = 5;
$tdatagestionregistrosorigen_report[".pageSizeRecords"] = 20;


//end of report settings










$tstrOrderBy = "";
$tdatagestionregistrosorigen_report[".strOrderBy"] = $tstrOrderBy;

$tdatagestionregistrosorigen_report[".orderindexes"] = array();


$tdatagestionregistrosorigen_report[".sqlHead"] = "SELECT gr.id_ges_reg_origen,  u.nombre_usuario,  u.nombre_completo,  u.direc_usuario,  b.descri_barrio,  gr.cantidad_origen,  mt.descri_med_tip_origen,  r.descri_residuo,  gr.id_usuario,  gr.gps_mapa_goo,  gr.foto_origen,  gr.\"Lat\",  gr.\"Lng\"";
$tdatagestionregistrosorigen_report[".sqlFrom"] = "FROM \"public\".gestion_registros_origen AS gr  , public.residuos AS r  , public.med_tipo_origen AS mt  , public.Usuarios AS u  , public.barrios AS b";
$tdatagestionregistrosorigen_report[".sqlWhereExpr"] = "(gr.id_usuario =u.id_usuario) AND (gr.id_residuo =r.id_residuo) AND (gr.id_med_tip_origen =mt.id_med_tip_origen) AND (u.id_barrio =b.id_barrio)";
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
$tdatagestionregistrosorigen_report[".Keys"] = $tableKeysgestionregistrosorigen_report;


$tdatagestionregistrosorigen_report[".hideMobileList"] = array();




//	id_ges_reg_origen
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "id_ges_reg_origen";
	$fdata["GoodName"] = "id_ges_reg_origen";
	$fdata["ownerTable"] = "public.gestion_registros_origen";
	$fdata["Label"] = GetFieldLabel("public_GestionRegistrosOrigen_Report","id_ges_reg_origen");
	$fdata["FieldType"] = 3;


	
	
			

		$fdata["strField"] = "id_ges_reg_origen";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "gr.id_ges_reg_origen";

	
	
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


	$tdatagestionregistrosorigen_report["id_ges_reg_origen"] = $fdata;
		$tdatagestionregistrosorigen_report[".searchableFields"][] = "id_ges_reg_origen";
//	nombre_usuario
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "nombre_usuario";
	$fdata["GoodName"] = "nombre_usuario";
	$fdata["ownerTable"] = "public.usuarios";
	$fdata["Label"] = GetFieldLabel("public_GestionRegistrosOrigen_Report","nombre_usuario");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "nombre_usuario";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "u.nombre_usuario";

	
	
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


	$tdatagestionregistrosorigen_report["nombre_usuario"] = $fdata;
		$tdatagestionregistrosorigen_report[".searchableFields"][] = "nombre_usuario";
//	nombre_completo
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "nombre_completo";
	$fdata["GoodName"] = "nombre_completo";
	$fdata["ownerTable"] = "public.usuarios";
	$fdata["Label"] = GetFieldLabel("public_GestionRegistrosOrigen_Report","nombre_completo");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "nombre_completo";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "u.nombre_completo";

	
	
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


	$tdatagestionregistrosorigen_report["nombre_completo"] = $fdata;
		$tdatagestionregistrosorigen_report[".searchableFields"][] = "nombre_completo";
//	direc_usuario
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "direc_usuario";
	$fdata["GoodName"] = "direc_usuario";
	$fdata["ownerTable"] = "public.usuarios";
	$fdata["Label"] = GetFieldLabel("public_GestionRegistrosOrigen_Report","direc_usuario");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "direc_usuario";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "u.direc_usuario";

	
	
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


	$tdatagestionregistrosorigen_report["direc_usuario"] = $fdata;
		$tdatagestionregistrosorigen_report[".searchableFields"][] = "direc_usuario";
//	descri_barrio
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 5;
	$fdata["strName"] = "descri_barrio";
	$fdata["GoodName"] = "descri_barrio";
	$fdata["ownerTable"] = "public.barrios";
	$fdata["Label"] = GetFieldLabel("public_GestionRegistrosOrigen_Report","descri_barrio");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "descri_barrio";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "b.descri_barrio";

	
	
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


	$tdatagestionregistrosorigen_report["descri_barrio"] = $fdata;
		$tdatagestionregistrosorigen_report[".searchableFields"][] = "descri_barrio";
//	cantidad_origen
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 6;
	$fdata["strName"] = "cantidad_origen";
	$fdata["GoodName"] = "cantidad_origen";
	$fdata["ownerTable"] = "public.gestion_registros_origen";
	$fdata["Label"] = GetFieldLabel("public_GestionRegistrosOrigen_Report","cantidad_origen");
	$fdata["FieldType"] = 14;


	
	
			

		$fdata["strField"] = "cantidad_origen";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "gr.cantidad_origen";

	
	
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "Number");

	
	
	
	
	
	
		$vdata["DecimalDigits"] = 0;

	
	
	
	
		
	
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


	$tdatagestionregistrosorigen_report["cantidad_origen"] = $fdata;
		$tdatagestionregistrosorigen_report[".searchableFields"][] = "cantidad_origen";
//	descri_med_tip_origen
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 7;
	$fdata["strName"] = "descri_med_tip_origen";
	$fdata["GoodName"] = "descri_med_tip_origen";
	$fdata["ownerTable"] = "public.med_tipo_origen";
	$fdata["Label"] = GetFieldLabel("public_GestionRegistrosOrigen_Report","descri_med_tip_origen");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "descri_med_tip_origen";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "mt.descri_med_tip_origen";

	
	
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


	$tdatagestionregistrosorigen_report["descri_med_tip_origen"] = $fdata;
		$tdatagestionregistrosorigen_report[".searchableFields"][] = "descri_med_tip_origen";
//	descri_residuo
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 8;
	$fdata["strName"] = "descri_residuo";
	$fdata["GoodName"] = "descri_residuo";
	$fdata["ownerTable"] = "public.residuos";
	$fdata["Label"] = GetFieldLabel("public_GestionRegistrosOrigen_Report","descri_residuo");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "descri_residuo";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "r.descri_residuo";

	
	
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


	$tdatagestionregistrosorigen_report["descri_residuo"] = $fdata;
		$tdatagestionregistrosorigen_report[".searchableFields"][] = "descri_residuo";
//	id_usuario
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 9;
	$fdata["strName"] = "id_usuario";
	$fdata["GoodName"] = "id_usuario";
	$fdata["ownerTable"] = "public.gestion_registros_origen";
	$fdata["Label"] = GetFieldLabel("public_GestionRegistrosOrigen_Report","id_usuario");
	$fdata["FieldType"] = 3;


	
	
			

		$fdata["strField"] = "id_usuario";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "gr.id_usuario";

	
	
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


	$tdatagestionregistrosorigen_report["id_usuario"] = $fdata;
		$tdatagestionregistrosorigen_report[".searchableFields"][] = "id_usuario";
//	gps_mapa_goo
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 10;
	$fdata["strName"] = "gps_mapa_goo";
	$fdata["GoodName"] = "gps_mapa_goo";
	$fdata["ownerTable"] = "public.gestion_registros_origen";
	$fdata["Label"] = GetFieldLabel("public_GestionRegistrosOrigen_Report","gps_mapa_goo");
	$fdata["FieldType"] = 201;


	
	
			

		$fdata["strField"] = "gps_mapa_goo";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "gr.gps_mapa_goo";

	
	
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

	$edata = array("EditFormat" => "Text area");

	
		$edata["weekdayMessage"] = array("message" => "", "messageType" => "Text");
	$edata["weekdays"] = "[]";


	
	



	
	
	
	
			$edata["acceptFileTypes"] = ".+$";
		$edata["acceptFileTypesHtml"] = "";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
				$edata["nRows"] = 100;
			$edata["nCols"] = 200;

	
	
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


	$tdatagestionregistrosorigen_report["gps_mapa_goo"] = $fdata;
		$tdatagestionregistrosorigen_report[".searchableFields"][] = "gps_mapa_goo";
//	foto_origen
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 11;
	$fdata["strName"] = "foto_origen";
	$fdata["GoodName"] = "foto_origen";
	$fdata["ownerTable"] = "public.gestion_registros_origen";
	$fdata["Label"] = GetFieldLabel("public_GestionRegistrosOrigen_Report","foto_origen");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "foto_origen";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "gr.foto_origen";

	
	
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


	$tdatagestionregistrosorigen_report["foto_origen"] = $fdata;
		$tdatagestionregistrosorigen_report[".searchableFields"][] = "foto_origen";
//	Lat
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 12;
	$fdata["strName"] = "Lat";
	$fdata["GoodName"] = "Lat";
	$fdata["ownerTable"] = "public.gestion_registros_origen";
	$fdata["Label"] = GetFieldLabel("public_GestionRegistrosOrigen_Report","Lat");
	$fdata["FieldType"] = 14;


	
	
			

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
	$fdata["ownerTable"] = "public.gestion_registros_origen";
	$fdata["Label"] = GetFieldLabel("public_GestionRegistrosOrigen_Report","Lng");
	$fdata["FieldType"] = 14;


	
	
			

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

//if !@TABLE.bReportCrossTab

$detailsTablesData["public.GestionRegistrosOrigen Report"] = array();
//endif

// tables which are master tables for current table (detail)
$masterTablesData["public.GestionRegistrosOrigen Report"] = array();



// -----------------end  prepare master-details data arrays ------------------------------//



require_once(getabspath("classes/sql.php"));











function createSqlQuery_gestionregistrosorigen_report()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "gr.id_ges_reg_origen,  u.nombre_usuario,  u.nombre_completo,  u.direc_usuario,  b.descri_barrio,  gr.cantidad_origen,  mt.descri_med_tip_origen,  r.descri_residuo,  gr.id_usuario,  gr.gps_mapa_goo,  gr.foto_origen,  gr.\"Lat\",  gr.\"Lng\"";
$proto0["m_strFrom"] = "FROM \"public\".gestion_registros_origen AS gr  , public.residuos AS r  , public.med_tipo_origen AS mt  , public.Usuarios AS u  , public.barrios AS b";
$proto0["m_strWhere"] = "(gr.id_usuario =u.id_usuario) AND (gr.id_residuo =r.id_residuo) AND (gr.id_med_tip_origen =mt.id_med_tip_origen) AND (u.id_barrio =b.id_barrio)";
$proto0["m_strOrderBy"] = "";
	
		;
			$proto0["cipherer"] = null;
$proto2=array();
$proto2["m_sql"] = "(gr.id_usuario =u.id_usuario) AND (gr.id_residuo =r.id_residuo) AND (gr.id_med_tip_origen =mt.id_med_tip_origen) AND (u.id_barrio =b.id_barrio)";
$proto2["m_uniontype"] = "SQLL_AND";
	$obj = new SQLNonParsed(array(
	"m_sql" => "(gr.id_usuario =u.id_usuario) AND (gr.id_residuo =r.id_residuo) AND (gr.id_med_tip_origen =mt.id_med_tip_origen) AND (u.id_barrio =b.id_barrio)"
));

$proto2["m_column"]=$obj;
$proto2["m_contained"] = array();
						$proto4=array();
$proto4["m_sql"] = "gr.id_usuario =u.id_usuario";
$proto4["m_uniontype"] = "SQLL_UNKNOWN";
						$obj = new SQLField(array(
	"m_strName" => "id_usuario",
	"m_strTable" => "gr",
	"m_srcTableName" => "public.GestionRegistrosOrigen Report"
));

$proto4["m_column"]=$obj;
$proto4["m_contained"] = array();
$proto4["m_strCase"] = "=u.id_usuario";
$proto4["m_havingmode"] = false;
$proto4["m_inBrackets"] = true;
$proto4["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto4);

			$proto2["m_contained"][]=$obj;
						$proto6=array();
$proto6["m_sql"] = "gr.id_residuo =r.id_residuo";
$proto6["m_uniontype"] = "SQLL_UNKNOWN";
						$obj = new SQLField(array(
	"m_strName" => "id_residuo",
	"m_strTable" => "gr",
	"m_srcTableName" => "public.GestionRegistrosOrigen Report"
));

$proto6["m_column"]=$obj;
$proto6["m_contained"] = array();
$proto6["m_strCase"] = "=r.id_residuo";
$proto6["m_havingmode"] = false;
$proto6["m_inBrackets"] = true;
$proto6["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto6);

			$proto2["m_contained"][]=$obj;
						$proto8=array();
$proto8["m_sql"] = "gr.id_med_tip_origen =mt.id_med_tip_origen";
$proto8["m_uniontype"] = "SQLL_UNKNOWN";
						$obj = new SQLField(array(
	"m_strName" => "id_med_tip_origen",
	"m_strTable" => "gr",
	"m_srcTableName" => "public.GestionRegistrosOrigen Report"
));

$proto8["m_column"]=$obj;
$proto8["m_contained"] = array();
$proto8["m_strCase"] = "=mt.id_med_tip_origen";
$proto8["m_havingmode"] = false;
$proto8["m_inBrackets"] = true;
$proto8["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto8);

			$proto2["m_contained"][]=$obj;
						$proto10=array();
$proto10["m_sql"] = "u.id_barrio =b.id_barrio";
$proto10["m_uniontype"] = "SQLL_UNKNOWN";
						$obj = new SQLField(array(
	"m_strName" => "id_barrio",
	"m_strTable" => "u",
	"m_srcTableName" => "public.GestionRegistrosOrigen Report"
));

$proto10["m_column"]=$obj;
$proto10["m_contained"] = array();
$proto10["m_strCase"] = "=b.id_barrio";
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
	"m_strName" => "id_ges_reg_origen",
	"m_strTable" => "gr",
	"m_srcTableName" => "public.GestionRegistrosOrigen Report"
));

$proto14["m_sql"] = "gr.id_ges_reg_origen";
$proto14["m_srcTableName"] = "public.GestionRegistrosOrigen Report";
$proto14["m_expr"]=$obj;
$proto14["m_alias"] = "";
$obj = new SQLFieldListItem($proto14);

$proto0["m_fieldlist"][]=$obj;
						$proto16=array();
			$obj = new SQLField(array(
	"m_strName" => "nombre_usuario",
	"m_strTable" => "u",
	"m_srcTableName" => "public.GestionRegistrosOrigen Report"
));

$proto16["m_sql"] = "u.nombre_usuario";
$proto16["m_srcTableName"] = "public.GestionRegistrosOrigen Report";
$proto16["m_expr"]=$obj;
$proto16["m_alias"] = "";
$obj = new SQLFieldListItem($proto16);

$proto0["m_fieldlist"][]=$obj;
						$proto18=array();
			$obj = new SQLField(array(
	"m_strName" => "nombre_completo",
	"m_strTable" => "u",
	"m_srcTableName" => "public.GestionRegistrosOrigen Report"
));

$proto18["m_sql"] = "u.nombre_completo";
$proto18["m_srcTableName"] = "public.GestionRegistrosOrigen Report";
$proto18["m_expr"]=$obj;
$proto18["m_alias"] = "";
$obj = new SQLFieldListItem($proto18);

$proto0["m_fieldlist"][]=$obj;
						$proto20=array();
			$obj = new SQLField(array(
	"m_strName" => "direc_usuario",
	"m_strTable" => "u",
	"m_srcTableName" => "public.GestionRegistrosOrigen Report"
));

$proto20["m_sql"] = "u.direc_usuario";
$proto20["m_srcTableName"] = "public.GestionRegistrosOrigen Report";
$proto20["m_expr"]=$obj;
$proto20["m_alias"] = "";
$obj = new SQLFieldListItem($proto20);

$proto0["m_fieldlist"][]=$obj;
						$proto22=array();
			$obj = new SQLField(array(
	"m_strName" => "descri_barrio",
	"m_strTable" => "b",
	"m_srcTableName" => "public.GestionRegistrosOrigen Report"
));

$proto22["m_sql"] = "b.descri_barrio";
$proto22["m_srcTableName"] = "public.GestionRegistrosOrigen Report";
$proto22["m_expr"]=$obj;
$proto22["m_alias"] = "";
$obj = new SQLFieldListItem($proto22);

$proto0["m_fieldlist"][]=$obj;
						$proto24=array();
			$obj = new SQLField(array(
	"m_strName" => "cantidad_origen",
	"m_strTable" => "gr",
	"m_srcTableName" => "public.GestionRegistrosOrigen Report"
));

$proto24["m_sql"] = "gr.cantidad_origen";
$proto24["m_srcTableName"] = "public.GestionRegistrosOrigen Report";
$proto24["m_expr"]=$obj;
$proto24["m_alias"] = "";
$obj = new SQLFieldListItem($proto24);

$proto0["m_fieldlist"][]=$obj;
						$proto26=array();
			$obj = new SQLField(array(
	"m_strName" => "descri_med_tip_origen",
	"m_strTable" => "mt",
	"m_srcTableName" => "public.GestionRegistrosOrigen Report"
));

$proto26["m_sql"] = "mt.descri_med_tip_origen";
$proto26["m_srcTableName"] = "public.GestionRegistrosOrigen Report";
$proto26["m_expr"]=$obj;
$proto26["m_alias"] = "";
$obj = new SQLFieldListItem($proto26);

$proto0["m_fieldlist"][]=$obj;
						$proto28=array();
			$obj = new SQLField(array(
	"m_strName" => "descri_residuo",
	"m_strTable" => "r",
	"m_srcTableName" => "public.GestionRegistrosOrigen Report"
));

$proto28["m_sql"] = "r.descri_residuo";
$proto28["m_srcTableName"] = "public.GestionRegistrosOrigen Report";
$proto28["m_expr"]=$obj;
$proto28["m_alias"] = "";
$obj = new SQLFieldListItem($proto28);

$proto0["m_fieldlist"][]=$obj;
						$proto30=array();
			$obj = new SQLField(array(
	"m_strName" => "id_usuario",
	"m_strTable" => "gr",
	"m_srcTableName" => "public.GestionRegistrosOrigen Report"
));

$proto30["m_sql"] = "gr.id_usuario";
$proto30["m_srcTableName"] = "public.GestionRegistrosOrigen Report";
$proto30["m_expr"]=$obj;
$proto30["m_alias"] = "";
$obj = new SQLFieldListItem($proto30);

$proto0["m_fieldlist"][]=$obj;
						$proto32=array();
			$obj = new SQLField(array(
	"m_strName" => "gps_mapa_goo",
	"m_strTable" => "gr",
	"m_srcTableName" => "public.GestionRegistrosOrigen Report"
));

$proto32["m_sql"] = "gr.gps_mapa_goo";
$proto32["m_srcTableName"] = "public.GestionRegistrosOrigen Report";
$proto32["m_expr"]=$obj;
$proto32["m_alias"] = "";
$obj = new SQLFieldListItem($proto32);

$proto0["m_fieldlist"][]=$obj;
						$proto34=array();
			$obj = new SQLField(array(
	"m_strName" => "foto_origen",
	"m_strTable" => "gr",
	"m_srcTableName" => "public.GestionRegistrosOrigen Report"
));

$proto34["m_sql"] = "gr.foto_origen";
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
$proto41["m_strName"] = "public.gestion_registros_origen";
$proto41["m_srcTableName"] = "public.GestionRegistrosOrigen Report";
$proto41["m_columns"] = array();
$proto41["m_columns"][] = "id_ges_reg_origen";
$proto41["m_columns"][] = "id_residuo";
$proto41["m_columns"][] = "id_med_tip_origen";
$proto41["m_columns"][] = "id_usuario";
$proto41["m_columns"][] = "cantidad_origen";
$proto41["m_columns"][] = "foto_origen";
$proto41["m_columns"][] = "gps_mapa_goo";
$proto41["m_columns"][] = "Lat";
$proto41["m_columns"][] = "Lng";
$obj = new SQLTable($proto41);

$proto40["m_table"] = $obj;
$proto40["m_sql"] = "\"public\".gestion_registros_origen AS gr";
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
$proto45["m_strName"] = "public.residuos";
$proto45["m_srcTableName"] = "public.GestionRegistrosOrigen Report";
$proto45["m_columns"] = array();
$proto45["m_columns"][] = "id_residuo";
$proto45["m_columns"][] = "descri_residuo";
$obj = new SQLTable($proto45);

$proto44["m_table"] = $obj;
$proto44["m_sql"] = "public.residuos AS r";
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
$proto49["m_strName"] = "public.med_tipo_origen";
$proto49["m_srcTableName"] = "public.GestionRegistrosOrigen Report";
$proto49["m_columns"] = array();
$proto49["m_columns"][] = "id_med_tip_origen";
$proto49["m_columns"][] = "descri_med_tip_origen";
$obj = new SQLTable($proto49);

$proto48["m_table"] = $obj;
$proto48["m_sql"] = "public.med_tipo_origen AS mt";
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
$proto53["m_strName"] = "public.usuarios";
$proto53["m_srcTableName"] = "public.GestionRegistrosOrigen Report";
$proto53["m_columns"] = array();
$proto53["m_columns"][] = "id_usuario";
$proto53["m_columns"][] = "nombre_usuario";
$proto53["m_columns"][] = "password";
$proto53["m_columns"][] = "email";
$proto53["m_columns"][] = "nombre_completo";
$proto53["m_columns"][] = "id_tipo_usu";
$proto53["m_columns"][] = "active";
$proto53["m_columns"][] = "ext_security_id";
$proto53["m_columns"][] = "direc_usuario";
$proto53["m_columns"][] = "id_barrio";
$proto53["m_columns"][] = "tel_usuario";
$proto53["m_columns"][] = "two_factor";
$proto53["m_columns"][] = "totp_secret";
$proto53["m_columns"][] = "userpic";
$obj = new SQLTable($proto53);

$proto52["m_table"] = $obj;
$proto52["m_sql"] = "public.Usuarios AS u";
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
$proto57["m_strName"] = "public.barrios";
$proto57["m_srcTableName"] = "public.GestionRegistrosOrigen Report";
$proto57["m_columns"] = array();
$proto57["m_columns"][] = "id_barrio";
$proto57["m_columns"][] = "descri_barrio";
$obj = new SQLTable($proto57);

$proto56["m_table"] = $obj;
$proto56["m_sql"] = "public.barrios AS b";
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