<?php
$tdatadetalles_ventas = array();
$tdatadetalles_ventas[".searchableFields"] = array();
$tdatadetalles_ventas[".ShortName"] = "detalles_ventas";
$tdatadetalles_ventas[".OwnerID"] = "cantidad";
$tdatadetalles_ventas[".OriginalTable"] = "public.detalles_ventas";


$tdatadetalles_ventas[".pagesByType"] = my_json_decode( "{\"edit\":[\"edit\"],\"export\":[\"export\"],\"import\":[\"import\"],\"list\":[\"list\"],\"print\":[\"print\"],\"search\":[\"search\"],\"view\":[\"view\"]}" );
$tdatadetalles_ventas[".originalPagesByType"] = $tdatadetalles_ventas[".pagesByType"];
$tdatadetalles_ventas[".pages"] = types2pages( my_json_decode( "{\"edit\":[\"edit\"],\"export\":[\"export\"],\"import\":[\"import\"],\"list\":[\"list\"],\"print\":[\"print\"],\"search\":[\"search\"],\"view\":[\"view\"]}" ) );
$tdatadetalles_ventas[".originalPages"] = $tdatadetalles_ventas[".pages"];
$tdatadetalles_ventas[".defaultPages"] = my_json_decode( "{\"edit\":\"edit\",\"export\":\"export\",\"import\":\"import\",\"list\":\"list\",\"print\":\"print\",\"search\":\"search\",\"view\":\"view\"}" );
$tdatadetalles_ventas[".originalDefaultPages"] = $tdatadetalles_ventas[".defaultPages"];

//	field labels
$fieldLabelsdetalles_ventas = array();
$fieldToolTipsdetalles_ventas = array();
$pageTitlesdetalles_ventas = array();
$placeHoldersdetalles_ventas = array();

if(mlang_getcurrentlang()=="Spanish")
{
	$fieldLabelsdetalles_ventas["Spanish"] = array();
	$fieldToolTipsdetalles_ventas["Spanish"] = array();
	$placeHoldersdetalles_ventas["Spanish"] = array();
	$pageTitlesdetalles_ventas["Spanish"] = array();
	$fieldLabelsdetalles_ventas["Spanish"]["id_venta"] = "Id Venta";
	$fieldToolTipsdetalles_ventas["Spanish"]["id_venta"] = "";
	$placeHoldersdetalles_ventas["Spanish"]["id_venta"] = "";
	$fieldLabelsdetalles_ventas["Spanish"]["id_deta_venta"] = "Id Deta Venta";
	$fieldToolTipsdetalles_ventas["Spanish"]["id_deta_venta"] = "";
	$placeHoldersdetalles_ventas["Spanish"]["id_deta_venta"] = "";
	$fieldLabelsdetalles_ventas["Spanish"]["cantidad_venta"] = "Cantidad en kilos, gramos";
	$fieldToolTipsdetalles_ventas["Spanish"]["cantidad_venta"] = "";
	$placeHoldersdetalles_ventas["Spanish"]["cantidad_venta"] = "";
	$fieldLabelsdetalles_ventas["Spanish"]["precio_venta"] = "Precio Venta";
	$fieldToolTipsdetalles_ventas["Spanish"]["precio_venta"] = "";
	$placeHoldersdetalles_ventas["Spanish"]["precio_venta"] = "";
	$fieldLabelsdetalles_ventas["Spanish"]["concat"] = "Gestión Pesos Residuos";
	$fieldToolTipsdetalles_ventas["Spanish"]["concat"] = "";
	$placeHoldersdetalles_ventas["Spanish"]["concat"] = "";
	$fieldLabelsdetalles_ventas["Spanish"]["id_ges_pes_residuo"] = "Gestión Pesos Residuos";
	$fieldToolTipsdetalles_ventas["Spanish"]["id_ges_pes_residuo"] = "";
	$placeHoldersdetalles_ventas["Spanish"]["id_ges_pes_residuo"] = "";
	$fieldLabelsdetalles_ventas["Spanish"]["sub_total"] = "Sub Total";
	$fieldToolTipsdetalles_ventas["Spanish"]["sub_total"] = "";
	$placeHoldersdetalles_ventas["Spanish"]["sub_total"] = "";
	if (count($fieldToolTipsdetalles_ventas["Spanish"]))
		$tdatadetalles_ventas[".isUseToolTips"] = true;
}


	$tdatadetalles_ventas[".NCSearch"] = true;



$tdatadetalles_ventas[".shortTableName"] = "detalles_ventas";
$tdatadetalles_ventas[".nSecOptions"] = 2;

$tdatadetalles_ventas[".mainTableOwnerID"] = "cantidad";
$tdatadetalles_ventas[".entityType"] = 0;
$tdatadetalles_ventas[".connId"] = "RealEstate_at_localhost";


$tdatadetalles_ventas[".strOriginalTableName"] = "public.detalles_ventas";

	



$tdatadetalles_ventas[".showAddInPopup"] = false;

$tdatadetalles_ventas[".showEditInPopup"] = false;

$tdatadetalles_ventas[".showViewInPopup"] = false;

$tdatadetalles_ventas[".listAjax"] = false;
//	temporary
//$tdatadetalles_ventas[".listAjax"] = false;

	$tdatadetalles_ventas[".audit"] = false;

	$tdatadetalles_ventas[".locking"] = false;


$pages = $tdatadetalles_ventas[".defaultPages"];

if( $pages[PAGE_EDIT] ) {
	$tdatadetalles_ventas[".edit"] = true;
	$tdatadetalles_ventas[".afterEditAction"] = 1;
	$tdatadetalles_ventas[".closePopupAfterEdit"] = 1;
	$tdatadetalles_ventas[".afterEditActionDetTable"] = "";
}

if( $pages[PAGE_ADD] ) {
$tdatadetalles_ventas[".add"] = true;
$tdatadetalles_ventas[".afterAddAction"] = 1;
$tdatadetalles_ventas[".closePopupAfterAdd"] = 1;
$tdatadetalles_ventas[".afterAddActionDetTable"] = "";
}

if( $pages[PAGE_LIST] ) {
	$tdatadetalles_ventas[".list"] = true;
}



$tdatadetalles_ventas[".strSortControlSettingsJSON"] = "";




if( $pages[PAGE_VIEW] ) {
$tdatadetalles_ventas[".view"] = true;
}

if( $pages[PAGE_IMPORT] ) {
$tdatadetalles_ventas[".import"] = true;
}

if( $pages[PAGE_EXPORT] ) {
$tdatadetalles_ventas[".exportTo"] = true;
}

if( $pages[PAGE_PRINT] ) {
$tdatadetalles_ventas[".printFriendly"] = true;
}



$tdatadetalles_ventas[".showSimpleSearchOptions"] = true; // temp fix #13449

// Allow Show/Hide Fields in GRID
$tdatadetalles_ventas[".allowShowHideFields"] = true; // temp fix #13449
//

// Allow Fields Reordering in GRID
$tdatadetalles_ventas[".allowFieldsReordering"] = true; // temp fix #13449
//

$tdatadetalles_ventas[".isUseAjaxSuggest"] = true;

$tdatadetalles_ventas[".rowHighlite"] = true;



									

$tdatadetalles_ventas[".ajaxCodeSnippetAdded"] = false;

$tdatadetalles_ventas[".buttonsAdded"] = false;

$tdatadetalles_ventas[".addPageEvents"] = true;

// use timepicker for search panel
$tdatadetalles_ventas[".isUseTimeForSearch"] = false;


$tdatadetalles_ventas[".badgeColor"] = "e07878";


$tdatadetalles_ventas[".allSearchFields"] = array();
$tdatadetalles_ventas[".filterFields"] = array();
$tdatadetalles_ventas[".requiredSearchFields"] = array();

$tdatadetalles_ventas[".googleLikeFields"] = array();
$tdatadetalles_ventas[".googleLikeFields"][] = "id_ges_pes_residuo";
$tdatadetalles_ventas[".googleLikeFields"][] = "concat";
$tdatadetalles_ventas[".googleLikeFields"][] = "id_deta_venta";
$tdatadetalles_ventas[".googleLikeFields"][] = "cantidad_venta";
$tdatadetalles_ventas[".googleLikeFields"][] = "precio_venta";
$tdatadetalles_ventas[".googleLikeFields"][] = "id_venta";
$tdatadetalles_ventas[".googleLikeFields"][] = "sub_total";



$tdatadetalles_ventas[".tableType"] = "list";

$tdatadetalles_ventas[".printerPageOrientation"] = 0;
$tdatadetalles_ventas[".nPrinterPageScale"] = 100;

$tdatadetalles_ventas[".nPrinterSplitRecords"] = 40;

$tdatadetalles_ventas[".geocodingEnabled"] = false;










$tdatadetalles_ventas[".pageSize"] = 20;

$tdatadetalles_ventas[".warnLeavingPages"] = true;



$tstrOrderBy = "";
$tdatadetalles_ventas[".strOrderBy"] = $tstrOrderBy;

$tdatadetalles_ventas[".orderindexes"] = array();


$tdatadetalles_ventas[".sqlHead"] = "SELECT dt.id_ges_pes_residuo,  concat(dt.id_ges_pes_residuo, ' | ', r.nombre_reciclador, ' | ', re.descri_residuo, ' | ', fecha_gestion_pesos),  dt.id_deta_venta,  dt.cantidad_venta,  dt.precio_venta,  dt.id_venta,  dt.sub_total";
$tdatadetalles_ventas[".sqlFrom"] = "FROM \"public\".detalles_ventas AS dt  , \"public\".gestion_pesos_residuos AS gp  , \"public\".recicladores AS r  , \"public\".residuos AS re";
$tdatadetalles_ventas[".sqlWhereExpr"] = "(dt.id_ges_pes_residuo =gp.id_ges_pes_residuo) AND (gp.id_reciclador =r.id_reciclador) AND (gp.id_residuo =re.id_residuo)";
$tdatadetalles_ventas[".sqlTail"] = "";

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
$tdatadetalles_ventas[".arrGridTabs"] = $arrGridTabs;









//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdatadetalles_ventas[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdatadetalles_ventas[".arrGroupsPerPage"] = $arrGPP;

$tdatadetalles_ventas[".highlightSearchResults"] = true;

$tableKeysdetalles_ventas = array();
$tableKeysdetalles_ventas[] = "id_deta_venta";
$tdatadetalles_ventas[".Keys"] = $tableKeysdetalles_ventas;


$tdatadetalles_ventas[".hideMobileList"] = array();




//	id_ges_pes_residuo
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "id_ges_pes_residuo";
	$fdata["GoodName"] = "id_ges_pes_residuo";
	$fdata["ownerTable"] = "public.detalles_ventas";
	$fdata["Label"] = GetFieldLabel("public_detalles_ventas","id_ges_pes_residuo");
	$fdata["FieldType"] = 3;


	
	
			

		$fdata["strField"] = "id_ges_pes_residuo";

		$fdata["sourceSingle"] = "id_ges_pes_residuo";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "dt.id_ges_pes_residuo";

	
	
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "Custom");

	
	
	
	
	
	
	
	
	
	
	
		
	
	
	
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

	
			
	
	
	
	$fdata["EditFormats"]["edit"] = $edata;
	$edata = array("EditFormat" => "Lookup wizard");

	
		$edata["weekdayMessage"] = array("message" => "", "messageType" => "Text");
	$edata["weekdays"] = "[]";


	
	

// Begin Lookup settings
				$edata["LookupType"] = 2;
	$edata["LookupTable"] = "public.gestion_pesos_residuos_ven";
			$edata["autoCompleteFieldsOnEdit"] = 0;
	$edata["autoCompleteFields"] = array();
		$edata["LCType"] = 0;

	
			$edata["LookupUnique"] = true;

	$edata["LinkField"] = "id_ges_pes_residuo";
	$edata["LinkFieldType"] = 0;
	$edata["DisplayField"] = "concat";

	

	
	$edata["LookupOrderBy"] = "";

	
	
	
	
				//dependent dropdowns @deprecated data ?
	$edata["DependentLookups"] = array();
	$edata["DependentLookups"][] = "cantidad_venta";
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


	$tdatadetalles_ventas["id_ges_pes_residuo"] = $fdata;
		$tdatadetalles_ventas[".searchableFields"][] = "id_ges_pes_residuo";
//	concat
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "concat";
	$fdata["GoodName"] = "concat";
	$fdata["ownerTable"] = "";
	$fdata["Label"] = GetFieldLabel("public_detalles_ventas","concat");
	$fdata["FieldType"] = 201;


	
	
			

		$fdata["strField"] = "concat";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "concat(dt.id_ges_pes_residuo, ' | ', r.nombre_reciclador, ' | ', re.descri_residuo, ' | ', fecha_gestion_pesos)";

	
	
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

	
			
	
	
	
	$fdata["EditFormats"]["edit"] = $edata;
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

	
			
	
	
	
	$fdata["EditFormats"]["add"] = $edata;
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


	$tdatadetalles_ventas["concat"] = $fdata;
		$tdatadetalles_ventas[".searchableFields"][] = "concat";
//	id_deta_venta
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "id_deta_venta";
	$fdata["GoodName"] = "id_deta_venta";
	$fdata["ownerTable"] = "public.detalles_ventas";
	$fdata["Label"] = GetFieldLabel("public_detalles_ventas","id_deta_venta");
	$fdata["FieldType"] = 3;


		$fdata["AutoInc"] = true;

	
			

		$fdata["strField"] = "id_deta_venta";

		$fdata["sourceSingle"] = "id_deta_venta";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "dt.id_deta_venta";

	
	
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


	$tdatadetalles_ventas["id_deta_venta"] = $fdata;
		$tdatadetalles_ventas[".searchableFields"][] = "id_deta_venta";
//	cantidad_venta
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "cantidad_venta";
	$fdata["GoodName"] = "cantidad_venta";
	$fdata["ownerTable"] = "public.detalles_ventas";
	$fdata["Label"] = GetFieldLabel("public_detalles_ventas","cantidad_venta");
	$fdata["FieldType"] = 5;


	
	
			

		$fdata["strField"] = "cantidad_venta";

		$fdata["sourceSingle"] = "cantidad_venta";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "dt.cantidad_venta";

	
	
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

	$edata = array("EditFormat" => "Lookup wizard");

	
		$edata["weekdayMessage"] = array("message" => "", "messageType" => "Text");
	$edata["weekdays"] = "[]";


	
	

// Begin Lookup settings
				$edata["LookupType"] = 2;
	$edata["LookupTable"] = "public.gestion_pesos_residuos_ven";
			$edata["autoCompleteFieldsOnEdit"] = 0;
	$edata["autoCompleteFields"] = array();
		$edata["LCType"] = 1;

	
		
	$edata["LinkField"] = "kilo_residuo";
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

	
			
	
	
	
	$fdata["EditFormats"]["edit"] = $edata;
	$edata = array("EditFormat" => "Lookup wizard");

	
		$edata["weekdayMessage"] = array("message" => "", "messageType" => "Text");
	$edata["weekdays"] = "[]";


	
	

// Begin Lookup settings
				$edata["LookupType"] = 2;
	$edata["LookupTable"] = "public.gestion_pesos_residuos_ven";
			$edata["autoCompleteFieldsOnEdit"] = 0;
	$edata["autoCompleteFields"] = array();
		$edata["LCType"] = 1;

	
		
	$edata["LinkField"] = "kilo_residuo";
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


	$tdatadetalles_ventas["cantidad_venta"] = $fdata;
		$tdatadetalles_ventas[".searchableFields"][] = "cantidad_venta";
//	precio_venta
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 5;
	$fdata["strName"] = "precio_venta";
	$fdata["GoodName"] = "precio_venta";
	$fdata["ownerTable"] = "public.detalles_ventas";
	$fdata["Label"] = GetFieldLabel("public_detalles_ventas","precio_venta");
	$fdata["FieldType"] = 14;


	
	
			

		$fdata["strField"] = "precio_venta";

		$fdata["sourceSingle"] = "precio_venta";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "dt.precio_venta";

	
	
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


	$tdatadetalles_ventas["precio_venta"] = $fdata;
		$tdatadetalles_ventas[".searchableFields"][] = "precio_venta";
//	id_venta
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 6;
	$fdata["strName"] = "id_venta";
	$fdata["GoodName"] = "id_venta";
	$fdata["ownerTable"] = "public.detalles_ventas";
	$fdata["Label"] = GetFieldLabel("public_detalles_ventas","id_venta");
	$fdata["FieldType"] = 3;


	
	
			

		$fdata["strField"] = "id_venta";

		$fdata["sourceSingle"] = "id_venta";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "dt.id_venta";

	
	
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


	$tdatadetalles_ventas["id_venta"] = $fdata;
		$tdatadetalles_ventas[".searchableFields"][] = "id_venta";
//	sub_total
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 7;
	$fdata["strName"] = "sub_total";
	$fdata["GoodName"] = "sub_total";
	$fdata["ownerTable"] = "public.detalles_ventas";
	$fdata["Label"] = GetFieldLabel("public_detalles_ventas","sub_total");
	$fdata["FieldType"] = 5;


	
	
			

		$fdata["strField"] = "sub_total";

		$fdata["sourceSingle"] = "sub_total";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "dt.sub_total";

	
	
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

	
			
	
	
	
	$fdata["EditFormats"]["add"] = $edata;
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


	$tdatadetalles_ventas["sub_total"] = $fdata;
		$tdatadetalles_ventas[".searchableFields"][] = "sub_total";


$tables_data["public.detalles_ventas"]=&$tdatadetalles_ventas;
$field_labels["public_detalles_ventas"] = &$fieldLabelsdetalles_ventas;
$fieldToolTips["public_detalles_ventas"] = &$fieldToolTipsdetalles_ventas;
$placeHolders["public_detalles_ventas"] = &$placeHoldersdetalles_ventas;
$page_titles["public_detalles_ventas"] = &$pageTitlesdetalles_ventas;

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











function createSqlQuery_detalles_ventas()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "dt.id_ges_pes_residuo,  concat(dt.id_ges_pes_residuo, ' | ', r.nombre_reciclador, ' | ', re.descri_residuo, ' | ', fecha_gestion_pesos),  dt.id_deta_venta,  dt.cantidad_venta,  dt.precio_venta,  dt.id_venta,  dt.sub_total";
$proto0["m_strFrom"] = "FROM \"public\".detalles_ventas AS dt  , \"public\".gestion_pesos_residuos AS gp  , \"public\".recicladores AS r  , \"public\".residuos AS re";
$proto0["m_strWhere"] = "(dt.id_ges_pes_residuo =gp.id_ges_pes_residuo) AND (gp.id_reciclador =r.id_reciclador) AND (gp.id_residuo =re.id_residuo)";
$proto0["m_strOrderBy"] = "";
	
		;
			$proto0["cipherer"] = null;
$proto2=array();
$proto2["m_sql"] = "(dt.id_ges_pes_residuo =gp.id_ges_pes_residuo) AND (gp.id_reciclador =r.id_reciclador) AND (gp.id_residuo =re.id_residuo)";
$proto2["m_uniontype"] = "SQLL_AND";
	$obj = new SQLNonParsed(array(
	"m_sql" => "(dt.id_ges_pes_residuo =gp.id_ges_pes_residuo) AND (gp.id_reciclador =r.id_reciclador) AND (gp.id_residuo =re.id_residuo)"
));

$proto2["m_column"]=$obj;
$proto2["m_contained"] = array();
						$proto4=array();
$proto4["m_sql"] = "dt.id_ges_pes_residuo =gp.id_ges_pes_residuo";
$proto4["m_uniontype"] = "SQLL_UNKNOWN";
						$obj = new SQLField(array(
	"m_strName" => "id_ges_pes_residuo",
	"m_strTable" => "dt",
	"m_srcTableName" => "public.detalles_ventas"
));

$proto4["m_column"]=$obj;
$proto4["m_contained"] = array();
$proto4["m_strCase"] = "=gp.id_ges_pes_residuo";
$proto4["m_havingmode"] = false;
$proto4["m_inBrackets"] = true;
$proto4["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto4);

			$proto2["m_contained"][]=$obj;
						$proto6=array();
$proto6["m_sql"] = "gp.id_reciclador =r.id_reciclador";
$proto6["m_uniontype"] = "SQLL_UNKNOWN";
						$obj = new SQLField(array(
	"m_strName" => "id_reciclador",
	"m_strTable" => "gp",
	"m_srcTableName" => "public.detalles_ventas"
));

$proto6["m_column"]=$obj;
$proto6["m_contained"] = array();
$proto6["m_strCase"] = "=r.id_reciclador";
$proto6["m_havingmode"] = false;
$proto6["m_inBrackets"] = true;
$proto6["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto6);

			$proto2["m_contained"][]=$obj;
						$proto8=array();
$proto8["m_sql"] = "gp.id_residuo =re.id_residuo";
$proto8["m_uniontype"] = "SQLL_UNKNOWN";
						$obj = new SQLField(array(
	"m_strName" => "id_residuo",
	"m_strTable" => "gp",
	"m_srcTableName" => "public.detalles_ventas"
));

$proto8["m_column"]=$obj;
$proto8["m_contained"] = array();
$proto8["m_strCase"] = "=re.id_residuo";
$proto8["m_havingmode"] = false;
$proto8["m_inBrackets"] = true;
$proto8["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto8);

			$proto2["m_contained"][]=$obj;
$proto2["m_strCase"] = "";
$proto2["m_havingmode"] = false;
$proto2["m_inBrackets"] = false;
$proto2["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto2);

$proto0["m_where"] = $obj;
$proto10=array();
$proto10["m_sql"] = "";
$proto10["m_uniontype"] = "SQLL_UNKNOWN";
	$obj = new SQLNonParsed(array(
	"m_sql" => ""
));

$proto10["m_column"]=$obj;
$proto10["m_contained"] = array();
$proto10["m_strCase"] = "";
$proto10["m_havingmode"] = false;
$proto10["m_inBrackets"] = false;
$proto10["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto10);

$proto0["m_having"] = $obj;
$proto0["m_fieldlist"] = array();
						$proto12=array();
			$obj = new SQLField(array(
	"m_strName" => "id_ges_pes_residuo",
	"m_strTable" => "dt",
	"m_srcTableName" => "public.detalles_ventas"
));

$proto12["m_sql"] = "dt.id_ges_pes_residuo";
$proto12["m_srcTableName"] = "public.detalles_ventas";
$proto12["m_expr"]=$obj;
$proto12["m_alias"] = "";
$obj = new SQLFieldListItem($proto12);

$proto0["m_fieldlist"][]=$obj;
						$proto14=array();
			$proto15=array();
$proto15["m_functiontype"] = "SQLF_CUSTOM";
$proto15["m_arguments"] = array();
						$obj = new SQLNonParsed(array(
	"m_sql" => "dt.id_ges_pes_residuo"
));

$proto15["m_arguments"][]=$obj;
						$obj = new SQLNonParsed(array(
	"m_sql" => "' | '"
));

$proto15["m_arguments"][]=$obj;
						$obj = new SQLNonParsed(array(
	"m_sql" => "r.nombre_reciclador"
));

$proto15["m_arguments"][]=$obj;
						$obj = new SQLNonParsed(array(
	"m_sql" => "' | '"
));

$proto15["m_arguments"][]=$obj;
						$obj = new SQLNonParsed(array(
	"m_sql" => "re.descri_residuo"
));

$proto15["m_arguments"][]=$obj;
						$obj = new SQLNonParsed(array(
	"m_sql" => "' | '"
));

$proto15["m_arguments"][]=$obj;
						$obj = new SQLNonParsed(array(
	"m_sql" => "fecha_gestion_pesos"
));

$proto15["m_arguments"][]=$obj;
$proto15["m_strFunctionName"] = "concat";
$obj = new SQLFunctionCall($proto15);

$proto14["m_sql"] = "concat(dt.id_ges_pes_residuo, ' | ', r.nombre_reciclador, ' | ', re.descri_residuo, ' | ', fecha_gestion_pesos)";
$proto14["m_srcTableName"] = "public.detalles_ventas";
$proto14["m_expr"]=$obj;
$proto14["m_alias"] = "";
$obj = new SQLFieldListItem($proto14);

$proto0["m_fieldlist"][]=$obj;
						$proto23=array();
			$obj = new SQLField(array(
	"m_strName" => "id_deta_venta",
	"m_strTable" => "dt",
	"m_srcTableName" => "public.detalles_ventas"
));

$proto23["m_sql"] = "dt.id_deta_venta";
$proto23["m_srcTableName"] = "public.detalles_ventas";
$proto23["m_expr"]=$obj;
$proto23["m_alias"] = "";
$obj = new SQLFieldListItem($proto23);

$proto0["m_fieldlist"][]=$obj;
						$proto25=array();
			$obj = new SQLField(array(
	"m_strName" => "cantidad_venta",
	"m_strTable" => "dt",
	"m_srcTableName" => "public.detalles_ventas"
));

$proto25["m_sql"] = "dt.cantidad_venta";
$proto25["m_srcTableName"] = "public.detalles_ventas";
$proto25["m_expr"]=$obj;
$proto25["m_alias"] = "";
$obj = new SQLFieldListItem($proto25);

$proto0["m_fieldlist"][]=$obj;
						$proto27=array();
			$obj = new SQLField(array(
	"m_strName" => "precio_venta",
	"m_strTable" => "dt",
	"m_srcTableName" => "public.detalles_ventas"
));

$proto27["m_sql"] = "dt.precio_venta";
$proto27["m_srcTableName"] = "public.detalles_ventas";
$proto27["m_expr"]=$obj;
$proto27["m_alias"] = "";
$obj = new SQLFieldListItem($proto27);

$proto0["m_fieldlist"][]=$obj;
						$proto29=array();
			$obj = new SQLField(array(
	"m_strName" => "id_venta",
	"m_strTable" => "dt",
	"m_srcTableName" => "public.detalles_ventas"
));

$proto29["m_sql"] = "dt.id_venta";
$proto29["m_srcTableName"] = "public.detalles_ventas";
$proto29["m_expr"]=$obj;
$proto29["m_alias"] = "";
$obj = new SQLFieldListItem($proto29);

$proto0["m_fieldlist"][]=$obj;
						$proto31=array();
			$obj = new SQLField(array(
	"m_strName" => "sub_total",
	"m_strTable" => "dt",
	"m_srcTableName" => "public.detalles_ventas"
));

$proto31["m_sql"] = "dt.sub_total";
$proto31["m_srcTableName"] = "public.detalles_ventas";
$proto31["m_expr"]=$obj;
$proto31["m_alias"] = "";
$obj = new SQLFieldListItem($proto31);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto33=array();
$proto33["m_link"] = "SQLL_MAIN";
			$proto34=array();
$proto34["m_strName"] = "public.detalles_ventas";
$proto34["m_srcTableName"] = "public.detalles_ventas";
$proto34["m_columns"] = array();
$proto34["m_columns"][] = "id_deta_venta";
$proto34["m_columns"][] = "cantidad_venta";
$proto34["m_columns"][] = "precio_venta";
$proto34["m_columns"][] = "id_venta";
$proto34["m_columns"][] = "id_ges_pes_residuo";
$proto34["m_columns"][] = "sub_total";
$obj = new SQLTable($proto34);

$proto33["m_table"] = $obj;
$proto33["m_sql"] = "\"public\".detalles_ventas AS dt";
$proto33["m_alias"] = "dt";
$proto33["m_srcTableName"] = "public.detalles_ventas";
$proto35=array();
$proto35["m_sql"] = "";
$proto35["m_uniontype"] = "SQLL_UNKNOWN";
	$obj = new SQLNonParsed(array(
	"m_sql" => ""
));

$proto35["m_column"]=$obj;
$proto35["m_contained"] = array();
$proto35["m_strCase"] = "";
$proto35["m_havingmode"] = false;
$proto35["m_inBrackets"] = false;
$proto35["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto35);

$proto33["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto33);

$proto0["m_fromlist"][]=$obj;
												$proto37=array();
$proto37["m_link"] = "SQLL_CROSSJOIN";
			$proto38=array();
$proto38["m_strName"] = "public.gestion_pesos_residuos";
$proto38["m_srcTableName"] = "public.detalles_ventas";
$proto38["m_columns"] = array();
$proto38["m_columns"][] = "id_ges_pes_residuo";
$proto38["m_columns"][] = "id_reciclador";
$proto38["m_columns"][] = "id_residuo";
$proto38["m_columns"][] = "fecha_gestion_pesos";
$proto38["m_columns"][] = "kilo_residuo";
$proto38["m_columns"][] = "estado";
$obj = new SQLTable($proto38);

$proto37["m_table"] = $obj;
$proto37["m_sql"] = "\"public\".gestion_pesos_residuos AS gp";
$proto37["m_alias"] = "gp";
$proto37["m_srcTableName"] = "public.detalles_ventas";
$proto39=array();
$proto39["m_sql"] = "";
$proto39["m_uniontype"] = "SQLL_UNKNOWN";
	$obj = new SQLNonParsed(array(
	"m_sql" => ""
));

$proto39["m_column"]=$obj;
$proto39["m_contained"] = array();
$proto39["m_strCase"] = "";
$proto39["m_havingmode"] = false;
$proto39["m_inBrackets"] = false;
$proto39["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto39);

$proto37["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto37);

$proto0["m_fromlist"][]=$obj;
												$proto41=array();
$proto41["m_link"] = "SQLL_CROSSJOIN";
			$proto42=array();
$proto42["m_strName"] = "public.recicladores";
$proto42["m_srcTableName"] = "public.detalles_ventas";
$proto42["m_columns"] = array();
$proto42["m_columns"][] = "id_reciclador";
$proto42["m_columns"][] = "foto_reciclador";
$proto42["m_columns"][] = "ci_reciclador";
$proto42["m_columns"][] = "nombre_reciclador";
$proto42["m_columns"][] = "apellido_reciclador";
$proto42["m_columns"][] = "direc_reciclador";
$proto42["m_columns"][] = "tel_reciclador";
$proto42["m_columns"][] = "logo_aso";
$proto42["m_columns"][] = "id_residuo";
$obj = new SQLTable($proto42);

$proto41["m_table"] = $obj;
$proto41["m_sql"] = "\"public\".recicladores AS r";
$proto41["m_alias"] = "r";
$proto41["m_srcTableName"] = "public.detalles_ventas";
$proto43=array();
$proto43["m_sql"] = "";
$proto43["m_uniontype"] = "SQLL_UNKNOWN";
	$obj = new SQLNonParsed(array(
	"m_sql" => ""
));

$proto43["m_column"]=$obj;
$proto43["m_contained"] = array();
$proto43["m_strCase"] = "";
$proto43["m_havingmode"] = false;
$proto43["m_inBrackets"] = false;
$proto43["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto43);

$proto41["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto41);

$proto0["m_fromlist"][]=$obj;
												$proto45=array();
$proto45["m_link"] = "SQLL_CROSSJOIN";
			$proto46=array();
$proto46["m_strName"] = "public.residuos";
$proto46["m_srcTableName"] = "public.detalles_ventas";
$proto46["m_columns"] = array();
$proto46["m_columns"][] = "id_residuo";
$proto46["m_columns"][] = "descri_residuo";
$obj = new SQLTable($proto46);

$proto45["m_table"] = $obj;
$proto45["m_sql"] = "\"public\".residuos AS re";
$proto45["m_alias"] = "re";
$proto45["m_srcTableName"] = "public.detalles_ventas";
$proto47=array();
$proto47["m_sql"] = "";
$proto47["m_uniontype"] = "SQLL_UNKNOWN";
	$obj = new SQLNonParsed(array(
	"m_sql" => ""
));

$proto47["m_column"]=$obj;
$proto47["m_contained"] = array();
$proto47["m_strCase"] = "";
$proto47["m_havingmode"] = false;
$proto47["m_inBrackets"] = false;
$proto47["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto47);

$proto45["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto45);

$proto0["m_fromlist"][]=$obj;
$proto0["m_groupby"] = array();
$proto0["m_orderby"] = array();
$proto0["m_srcTableName"]="public.detalles_ventas";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_detalles_ventas = createSqlQuery_detalles_ventas();


	
		;

							

$tdatadetalles_ventas[".sqlquery"] = $queryData_detalles_ventas;



include_once(getabspath("include/detalles_ventas_events.php"));
$tableEvents["public.detalles_ventas"] = new eventclass_detalles_ventas;
$tdatadetalles_ventas[".hasEvents"] = true;

?>