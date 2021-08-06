<?php
$tdatapublic_gestionpesosresiduosdetven = array();
$tdatapublic_gestionpesosresiduosdetven[".searchableFields"] = array();
$tdatapublic_gestionpesosresiduosdetven[".ShortName"] = "public_gestionpesosresiduosdetven";
$tdatapublic_gestionpesosresiduosdetven[".OwnerID"] = "";
$tdatapublic_gestionpesosresiduosdetven[".OriginalTable"] = "public.GestionPesosResiduos";


$tdatapublic_gestionpesosresiduosdetven[".pagesByType"] = my_json_decode( "{\"add\":[\"add\"],\"edit\":[\"edit\"],\"export\":[\"export\"],\"import\":[\"import\"],\"list\":[\"list\"],\"print\":[\"print\"],\"search\":[\"search\"],\"view\":[\"view\"]}" );
$tdatapublic_gestionpesosresiduosdetven[".originalPagesByType"] = $tdatapublic_gestionpesosresiduosdetven[".pagesByType"];
$tdatapublic_gestionpesosresiduosdetven[".pages"] = types2pages( my_json_decode( "{\"add\":[\"add\"],\"edit\":[\"edit\"],\"export\":[\"export\"],\"import\":[\"import\"],\"list\":[\"list\"],\"print\":[\"print\"],\"search\":[\"search\"],\"view\":[\"view\"]}" ) );
$tdatapublic_gestionpesosresiduosdetven[".originalPages"] = $tdatapublic_gestionpesosresiduosdetven[".pages"];
$tdatapublic_gestionpesosresiduosdetven[".defaultPages"] = my_json_decode( "{\"add\":\"add\",\"edit\":\"edit\",\"export\":\"export\",\"import\":\"import\",\"list\":\"list\",\"print\":\"print\",\"search\":\"search\",\"view\":\"view\"}" );
$tdatapublic_gestionpesosresiduosdetven[".originalDefaultPages"] = $tdatapublic_gestionpesosresiduosdetven[".defaultPages"];

//	field labels
$fieldLabelspublic_gestionpesosresiduosdetven = array();
$fieldToolTipspublic_gestionpesosresiduosdetven = array();
$pageTitlespublic_gestionpesosresiduosdetven = array();
$placeHolderspublic_gestionpesosresiduosdetven = array();

if(mlang_getcurrentlang()=="Spanish")
{
	$fieldLabelspublic_gestionpesosresiduosdetven["Spanish"] = array();
	$fieldToolTipspublic_gestionpesosresiduosdetven["Spanish"] = array();
	$placeHolderspublic_gestionpesosresiduosdetven["Spanish"] = array();
	$pageTitlespublic_gestionpesosresiduosdetven["Spanish"] = array();
	$fieldLabelspublic_gestionpesosresiduosdetven["Spanish"]["IdGesPesResiduo"] = "Id Ges Pes Residuo";
	$fieldToolTipspublic_gestionpesosresiduosdetven["Spanish"]["IdGesPesResiduo"] = "";
	$placeHolderspublic_gestionpesosresiduosdetven["Spanish"]["IdGesPesResiduo"] = "";
	$fieldLabelspublic_gestionpesosresiduosdetven["Spanish"]["concat"] = "Concat";
	$fieldToolTipspublic_gestionpesosresiduosdetven["Spanish"]["concat"] = "";
	$placeHolderspublic_gestionpesosresiduosdetven["Spanish"]["concat"] = "";
	$fieldLabelspublic_gestionpesosresiduosdetven["Spanish"]["KilosResiduos"] = "Kilos Residuos";
	$fieldToolTipspublic_gestionpesosresiduosdetven["Spanish"]["KilosResiduos"] = "";
	$placeHolderspublic_gestionpesosresiduosdetven["Spanish"]["KilosResiduos"] = "";
	$fieldLabelspublic_gestionpesosresiduosdetven["Spanish"]["Estado"] = "Estado";
	$fieldToolTipspublic_gestionpesosresiduosdetven["Spanish"]["Estado"] = "";
	$placeHolderspublic_gestionpesosresiduosdetven["Spanish"]["Estado"] = "";
	if (count($fieldToolTipspublic_gestionpesosresiduosdetven["Spanish"]))
		$tdatapublic_gestionpesosresiduosdetven[".isUseToolTips"] = true;
}


	$tdatapublic_gestionpesosresiduosdetven[".NCSearch"] = true;



$tdatapublic_gestionpesosresiduosdetven[".shortTableName"] = "public_gestionpesosresiduosdetven";
$tdatapublic_gestionpesosresiduosdetven[".nSecOptions"] = 0;

$tdatapublic_gestionpesosresiduosdetven[".mainTableOwnerID"] = "";
$tdatapublic_gestionpesosresiduosdetven[".entityType"] = 1;
$tdatapublic_gestionpesosresiduosdetven[".connId"] = "RealEstate_at_localhost";


$tdatapublic_gestionpesosresiduosdetven[".strOriginalTableName"] = "public.GestionPesosResiduos";

	



$tdatapublic_gestionpesosresiduosdetven[".showAddInPopup"] = false;

$tdatapublic_gestionpesosresiduosdetven[".showEditInPopup"] = false;

$tdatapublic_gestionpesosresiduosdetven[".showViewInPopup"] = false;

$tdatapublic_gestionpesosresiduosdetven[".listAjax"] = false;
//	temporary
//$tdatapublic_gestionpesosresiduosdetven[".listAjax"] = false;

	$tdatapublic_gestionpesosresiduosdetven[".audit"] = false;

	$tdatapublic_gestionpesosresiduosdetven[".locking"] = false;


$pages = $tdatapublic_gestionpesosresiduosdetven[".defaultPages"];

if( $pages[PAGE_EDIT] ) {
	$tdatapublic_gestionpesosresiduosdetven[".edit"] = true;
	$tdatapublic_gestionpesosresiduosdetven[".afterEditAction"] = 0;
	$tdatapublic_gestionpesosresiduosdetven[".closePopupAfterEdit"] = 1;
	$tdatapublic_gestionpesosresiduosdetven[".afterEditActionDetTable"] = "";
}

if( $pages[PAGE_ADD] ) {
$tdatapublic_gestionpesosresiduosdetven[".add"] = true;
$tdatapublic_gestionpesosresiduosdetven[".afterAddAction"] = 1;
$tdatapublic_gestionpesosresiduosdetven[".closePopupAfterAdd"] = 1;
$tdatapublic_gestionpesosresiduosdetven[".afterAddActionDetTable"] = "";
}

if( $pages[PAGE_LIST] ) {
	$tdatapublic_gestionpesosresiduosdetven[".list"] = true;
}



$tdatapublic_gestionpesosresiduosdetven[".strSortControlSettingsJSON"] = "";




if( $pages[PAGE_VIEW] ) {
$tdatapublic_gestionpesosresiduosdetven[".view"] = true;
}

if( $pages[PAGE_IMPORT] ) {
$tdatapublic_gestionpesosresiduosdetven[".import"] = true;
}

if( $pages[PAGE_EXPORT] ) {
$tdatapublic_gestionpesosresiduosdetven[".exportTo"] = true;
}

if( $pages[PAGE_PRINT] ) {
$tdatapublic_gestionpesosresiduosdetven[".printFriendly"] = true;
}



$tdatapublic_gestionpesosresiduosdetven[".showSimpleSearchOptions"] = true; // temp fix #13449

// Allow Show/Hide Fields in GRID
$tdatapublic_gestionpesosresiduosdetven[".allowShowHideFields"] = true; // temp fix #13449
//

// Allow Fields Reordering in GRID
$tdatapublic_gestionpesosresiduosdetven[".allowFieldsReordering"] = true; // temp fix #13449
//

$tdatapublic_gestionpesosresiduosdetven[".isUseAjaxSuggest"] = true;

$tdatapublic_gestionpesosresiduosdetven[".rowHighlite"] = true;



			

$tdatapublic_gestionpesosresiduosdetven[".ajaxCodeSnippetAdded"] = false;

$tdatapublic_gestionpesosresiduosdetven[".buttonsAdded"] = false;

$tdatapublic_gestionpesosresiduosdetven[".addPageEvents"] = false;

// use timepicker for search panel
$tdatapublic_gestionpesosresiduosdetven[".isUseTimeForSearch"] = false;


$tdatapublic_gestionpesosresiduosdetven[".badgeColor"] = "B22222";


$tdatapublic_gestionpesosresiduosdetven[".allSearchFields"] = array();
$tdatapublic_gestionpesosresiduosdetven[".filterFields"] = array();
$tdatapublic_gestionpesosresiduosdetven[".requiredSearchFields"] = array();

$tdatapublic_gestionpesosresiduosdetven[".googleLikeFields"] = array();
$tdatapublic_gestionpesosresiduosdetven[".googleLikeFields"][] = "IdGesPesResiduo";
$tdatapublic_gestionpesosresiduosdetven[".googleLikeFields"][] = "concat";
$tdatapublic_gestionpesosresiduosdetven[".googleLikeFields"][] = "KilosResiduos";
$tdatapublic_gestionpesosresiduosdetven[".googleLikeFields"][] = "Estado";



$tdatapublic_gestionpesosresiduosdetven[".tableType"] = "list";

$tdatapublic_gestionpesosresiduosdetven[".printerPageOrientation"] = 0;
$tdatapublic_gestionpesosresiduosdetven[".nPrinterPageScale"] = 100;

$tdatapublic_gestionpesosresiduosdetven[".nPrinterSplitRecords"] = 40;

$tdatapublic_gestionpesosresiduosdetven[".geocodingEnabled"] = false;










$tdatapublic_gestionpesosresiduosdetven[".pageSize"] = 20;

$tdatapublic_gestionpesosresiduosdetven[".warnLeavingPages"] = true;



$tstrOrderBy = "";
$tdatapublic_gestionpesosresiduosdetven[".strOrderBy"] = $tstrOrderBy;

$tdatapublic_gestionpesosresiduosdetven[".orderindexes"] = array();


$tdatapublic_gestionpesosresiduosdetven[".sqlHead"] = "SELECT g.\"IdGesPesResiduo\",  concat(\"IdGesPesResiduo\", ' | ', r.\"NomReciclador\", ' | ', re.\"DescriResiduo\", ' | ', \"FechaGestion\", ' | ', \"Estado\"),  g.\"KilosResiduos\",  \"Estado\"";
$tdatapublic_gestionpesosresiduosdetven[".sqlFrom"] = "FROM \"public\".\"GestionPesosResiduos\" AS g  , \"public\".\"Recicladores\" AS r  , \"public\".\"Residuos\" AS re";
$tdatapublic_gestionpesosresiduosdetven[".sqlWhereExpr"] = "(g.\"IdReciclador\" =r.\"IdReciclador\") AND (g.\"IdResiduo\" =re.\"IdResiduo\") and g.\"Estado\" = 1";
$tdatapublic_gestionpesosresiduosdetven[".sqlTail"] = "";

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
$tdatapublic_gestionpesosresiduosdetven[".arrGridTabs"] = $arrGridTabs;









//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdatapublic_gestionpesosresiduosdetven[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdatapublic_gestionpesosresiduosdetven[".arrGroupsPerPage"] = $arrGPP;

$tdatapublic_gestionpesosresiduosdetven[".highlightSearchResults"] = true;

$tableKeyspublic_gestionpesosresiduosdetven = array();
$tableKeyspublic_gestionpesosresiduosdetven[] = "IdGesPesResiduo";
$tdatapublic_gestionpesosresiduosdetven[".Keys"] = $tableKeyspublic_gestionpesosresiduosdetven;


$tdatapublic_gestionpesosresiduosdetven[".hideMobileList"] = array();




//	IdGesPesResiduo
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "IdGesPesResiduo";
	$fdata["GoodName"] = "IdGesPesResiduo";
	$fdata["ownerTable"] = "public.GestionPesosResiduos";
	$fdata["Label"] = GetFieldLabel("public_GestionPesosResiduosDetVen","IdGesPesResiduo");
	$fdata["FieldType"] = 3;


		$fdata["AutoInc"] = true;

	
			

		$fdata["strField"] = "IdGesPesResiduo";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "g.\"IdGesPesResiduo\"";

	
	
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


	$tdatapublic_gestionpesosresiduosdetven["IdGesPesResiduo"] = $fdata;
		$tdatapublic_gestionpesosresiduosdetven[".searchableFields"][] = "IdGesPesResiduo";
//	concat
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "concat";
	$fdata["GoodName"] = "concat";
	$fdata["ownerTable"] = "";
	$fdata["Label"] = GetFieldLabel("public_GestionPesosResiduosDetVen","concat");
	$fdata["FieldType"] = 201;


	
	
			

		$fdata["strField"] = "concat";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "concat(\"IdGesPesResiduo\", ' | ', r.\"NomReciclador\", ' | ', re.\"DescriResiduo\", ' | ', \"FechaGestion\", ' | ', \"Estado\")";

	
	
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


	$tdatapublic_gestionpesosresiduosdetven["concat"] = $fdata;
		$tdatapublic_gestionpesosresiduosdetven[".searchableFields"][] = "concat";
//	KilosResiduos
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "KilosResiduos";
	$fdata["GoodName"] = "KilosResiduos";
	$fdata["ownerTable"] = "public.GestionPesosResiduos";
	$fdata["Label"] = GetFieldLabel("public_GestionPesosResiduosDetVen","KilosResiduos");
	$fdata["FieldType"] = 5;


	
	
			

		$fdata["strField"] = "KilosResiduos";

		$fdata["sourceSingle"] = "KilosResiduos";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "g.\"KilosResiduos\"";

	
	
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


	$tdatapublic_gestionpesosresiduosdetven["KilosResiduos"] = $fdata;
		$tdatapublic_gestionpesosresiduosdetven[".searchableFields"][] = "KilosResiduos";
//	Estado
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "Estado";
	$fdata["GoodName"] = "Estado";
	$fdata["ownerTable"] = "public.GestionPesosResiduos";
	$fdata["Label"] = GetFieldLabel("public_GestionPesosResiduosDetVen","Estado");
	$fdata["FieldType"] = 14;


	
	
			

		$fdata["strField"] = "Estado";

		$fdata["sourceSingle"] = "Estado";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "\"Estado\"";

	
	
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


	$tdatapublic_gestionpesosresiduosdetven["Estado"] = $fdata;
		$tdatapublic_gestionpesosresiduosdetven[".searchableFields"][] = "Estado";


$tables_data["public.GestionPesosResiduosDetVen"]=&$tdatapublic_gestionpesosresiduosdetven;
$field_labels["public_GestionPesosResiduosDetVen"] = &$fieldLabelspublic_gestionpesosresiduosdetven;
$fieldToolTips["public_GestionPesosResiduosDetVen"] = &$fieldToolTipspublic_gestionpesosresiduosdetven;
$placeHolders["public_GestionPesosResiduosDetVen"] = &$placeHolderspublic_gestionpesosresiduosdetven;
$page_titles["public_GestionPesosResiduosDetVen"] = &$pageTitlespublic_gestionpesosresiduosdetven;

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)

//if !@TABLE.bReportCrossTab

$detailsTablesData["public.GestionPesosResiduosDetVen"] = array();
//endif

// tables which are master tables for current table (detail)
$masterTablesData["public.GestionPesosResiduosDetVen"] = array();



// -----------------end  prepare master-details data arrays ------------------------------//



require_once(getabspath("classes/sql.php"));











function createSqlQuery_public_gestionpesosresiduosdetven()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "g.\"IdGesPesResiduo\",  concat(\"IdGesPesResiduo\", ' | ', r.\"NomReciclador\", ' | ', re.\"DescriResiduo\", ' | ', \"FechaGestion\", ' | ', \"Estado\"),  g.\"KilosResiduos\",  \"Estado\"";
$proto0["m_strFrom"] = "FROM \"public\".\"GestionPesosResiduos\" AS g  , \"public\".\"Recicladores\" AS r  , \"public\".\"Residuos\" AS re";
$proto0["m_strWhere"] = "(g.\"IdReciclador\" =r.\"IdReciclador\") AND (g.\"IdResiduo\" =re.\"IdResiduo\") and g.\"Estado\" = 1";
$proto0["m_strOrderBy"] = "";
	
		;
			$proto0["cipherer"] = null;
$proto2=array();
$proto2["m_sql"] = "(g.\"IdReciclador\" =r.\"IdReciclador\") AND (g.\"IdResiduo\" =re.\"IdResiduo\") and g.\"Estado\" = 1";
$proto2["m_uniontype"] = "SQLL_AND";
	$obj = new SQLNonParsed(array(
	"m_sql" => "(g.\"IdReciclador\" =r.\"IdReciclador\") AND (g.\"IdResiduo\" =re.\"IdResiduo\") and g.\"Estado\" = 1"
));

$proto2["m_column"]=$obj;
$proto2["m_contained"] = array();
						$proto4=array();
$proto4["m_sql"] = "g.\"IdReciclador\" =r.\"IdReciclador\"";
$proto4["m_uniontype"] = "SQLL_UNKNOWN";
						$obj = new SQLField(array(
	"m_strName" => "IdReciclador",
	"m_strTable" => "g",
	"m_srcTableName" => "public.GestionPesosResiduosDetVen"
));

$proto4["m_column"]=$obj;
$proto4["m_contained"] = array();
$proto4["m_strCase"] = "=r.\"IdReciclador\"";
$proto4["m_havingmode"] = false;
$proto4["m_inBrackets"] = true;
$proto4["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto4);

			$proto2["m_contained"][]=$obj;
						$proto6=array();
$proto6["m_sql"] = "g.\"IdResiduo\" =re.\"IdResiduo\"";
$proto6["m_uniontype"] = "SQLL_UNKNOWN";
						$obj = new SQLField(array(
	"m_strName" => "IdResiduo",
	"m_strTable" => "g",
	"m_srcTableName" => "public.GestionPesosResiduosDetVen"
));

$proto6["m_column"]=$obj;
$proto6["m_contained"] = array();
$proto6["m_strCase"] = "=re.\"IdResiduo\"";
$proto6["m_havingmode"] = false;
$proto6["m_inBrackets"] = true;
$proto6["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto6);

			$proto2["m_contained"][]=$obj;
						$proto8=array();
$proto8["m_sql"] = "g.\"Estado\" = 1";
$proto8["m_uniontype"] = "SQLL_UNKNOWN";
						$obj = new SQLField(array(
	"m_strName" => "Estado",
	"m_strTable" => "g",
	"m_srcTableName" => "public.GestionPesosResiduosDetVen"
));

$proto8["m_column"]=$obj;
$proto8["m_contained"] = array();
$proto8["m_strCase"] = "= 1";
$proto8["m_havingmode"] = false;
$proto8["m_inBrackets"] = false;
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
	"m_strName" => "IdGesPesResiduo",
	"m_strTable" => "g",
	"m_srcTableName" => "public.GestionPesosResiduosDetVen"
));

$proto12["m_sql"] = "g.\"IdGesPesResiduo\"";
$proto12["m_srcTableName"] = "public.GestionPesosResiduosDetVen";
$proto12["m_expr"]=$obj;
$proto12["m_alias"] = "";
$obj = new SQLFieldListItem($proto12);

$proto0["m_fieldlist"][]=$obj;
						$proto14=array();
			$proto15=array();
$proto15["m_functiontype"] = "SQLF_CUSTOM";
$proto15["m_arguments"] = array();
						$obj = new SQLNonParsed(array(
	"m_sql" => "\"IdGesPesResiduo\""
));

$proto15["m_arguments"][]=$obj;
						$obj = new SQLNonParsed(array(
	"m_sql" => "' | '"
));

$proto15["m_arguments"][]=$obj;
						$obj = new SQLNonParsed(array(
	"m_sql" => "r.\"NomReciclador\""
));

$proto15["m_arguments"][]=$obj;
						$obj = new SQLNonParsed(array(
	"m_sql" => "' | '"
));

$proto15["m_arguments"][]=$obj;
						$obj = new SQLNonParsed(array(
	"m_sql" => "re.\"DescriResiduo\""
));

$proto15["m_arguments"][]=$obj;
						$obj = new SQLNonParsed(array(
	"m_sql" => "' | '"
));

$proto15["m_arguments"][]=$obj;
						$obj = new SQLNonParsed(array(
	"m_sql" => "\"FechaGestion\""
));

$proto15["m_arguments"][]=$obj;
						$obj = new SQLNonParsed(array(
	"m_sql" => "' | '"
));

$proto15["m_arguments"][]=$obj;
						$obj = new SQLNonParsed(array(
	"m_sql" => "\"Estado\""
));

$proto15["m_arguments"][]=$obj;
$proto15["m_strFunctionName"] = "concat";
$obj = new SQLFunctionCall($proto15);

$proto14["m_sql"] = "concat(\"IdGesPesResiduo\", ' | ', r.\"NomReciclador\", ' | ', re.\"DescriResiduo\", ' | ', \"FechaGestion\", ' | ', \"Estado\")";
$proto14["m_srcTableName"] = "public.GestionPesosResiduosDetVen";
$proto14["m_expr"]=$obj;
$proto14["m_alias"] = "";
$obj = new SQLFieldListItem($proto14);

$proto0["m_fieldlist"][]=$obj;
						$proto25=array();
			$obj = new SQLField(array(
	"m_strName" => "KilosResiduos",
	"m_strTable" => "g",
	"m_srcTableName" => "public.GestionPesosResiduosDetVen"
));

$proto25["m_sql"] = "g.\"KilosResiduos\"";
$proto25["m_srcTableName"] = "public.GestionPesosResiduosDetVen";
$proto25["m_expr"]=$obj;
$proto25["m_alias"] = "";
$obj = new SQLFieldListItem($proto25);

$proto0["m_fieldlist"][]=$obj;
						$proto27=array();
			$obj = new SQLField(array(
	"m_strName" => "Estado",
	"m_strTable" => "g",
	"m_srcTableName" => "public.GestionPesosResiduosDetVen"
));

$proto27["m_sql"] = "\"Estado\"";
$proto27["m_srcTableName"] = "public.GestionPesosResiduosDetVen";
$proto27["m_expr"]=$obj;
$proto27["m_alias"] = "";
$obj = new SQLFieldListItem($proto27);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto29=array();
$proto29["m_link"] = "SQLL_MAIN";
			$proto30=array();
$proto30["m_strName"] = "public.GestionPesosResiduos";
$proto30["m_srcTableName"] = "public.GestionPesosResiduosDetVen";
$proto30["m_columns"] = array();
$proto30["m_columns"][] = "IdGesPesResiduo";
$proto30["m_columns"][] = "IdReciclador";
$proto30["m_columns"][] = "IdResiduo";
$proto30["m_columns"][] = "FechaGestion";
$proto30["m_columns"][] = "KilosResiduos";
$proto30["m_columns"][] = "Estado";
$obj = new SQLTable($proto30);

$proto29["m_table"] = $obj;
$proto29["m_sql"] = "\"public\".\"GestionPesosResiduos\" AS g";
$proto29["m_alias"] = "g";
$proto29["m_srcTableName"] = "public.GestionPesosResiduosDetVen";
$proto31=array();
$proto31["m_sql"] = "";
$proto31["m_uniontype"] = "SQLL_UNKNOWN";
	$obj = new SQLNonParsed(array(
	"m_sql" => ""
));

$proto31["m_column"]=$obj;
$proto31["m_contained"] = array();
$proto31["m_strCase"] = "";
$proto31["m_havingmode"] = false;
$proto31["m_inBrackets"] = false;
$proto31["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto31);

$proto29["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto29);

$proto0["m_fromlist"][]=$obj;
												$proto33=array();
$proto33["m_link"] = "SQLL_CROSSJOIN";
			$proto34=array();
$proto34["m_strName"] = "public.Recicladores";
$proto34["m_srcTableName"] = "public.GestionPesosResiduosDetVen";
$proto34["m_columns"] = array();
$proto34["m_columns"][] = "IdReciclador";
$proto34["m_columns"][] = "FotoReciclador";
$proto34["m_columns"][] = "CIReciclador";
$proto34["m_columns"][] = "NomReciclador";
$proto34["m_columns"][] = "ApeReciclador";
$proto34["m_columns"][] = "DirReciclador";
$proto34["m_columns"][] = "TelReciclador";
$proto34["m_columns"][] = "LogoASO";
$obj = new SQLTable($proto34);

$proto33["m_table"] = $obj;
$proto33["m_sql"] = "\"public\".\"Recicladores\" AS r";
$proto33["m_alias"] = "r";
$proto33["m_srcTableName"] = "public.GestionPesosResiduosDetVen";
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
$proto38["m_strName"] = "public.Residuos";
$proto38["m_srcTableName"] = "public.GestionPesosResiduosDetVen";
$proto38["m_columns"] = array();
$proto38["m_columns"][] = "IdResiduo";
$proto38["m_columns"][] = "DescriResiduo";
$obj = new SQLTable($proto38);

$proto37["m_table"] = $obj;
$proto37["m_sql"] = "\"public\".\"Residuos\" AS re";
$proto37["m_alias"] = "re";
$proto37["m_srcTableName"] = "public.GestionPesosResiduosDetVen";
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
$proto0["m_groupby"] = array();
$proto0["m_orderby"] = array();
$proto0["m_srcTableName"]="public.GestionPesosResiduosDetVen";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_public_gestionpesosresiduosdetven = createSqlQuery_public_gestionpesosresiduosdetven();


	
		;

				

$tdatapublic_gestionpesosresiduosdetven[".sqlquery"] = $queryData_public_gestionpesosresiduosdetven;



$tableEvents["public.GestionPesosResiduosDetVen"] = new eventsBase;
$tdatapublic_gestionpesosresiduosdetven[".hasEvents"] = false;

?>