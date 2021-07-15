<?php



$tdatainicio = array();
$tdatainicio[".searchableFields"] = array();
$tdatainicio[".ShortName"] = "inicio";
$tdatainicio[".OwnerID"] = "";
$tdatainicio[".OriginalTable"] = "public.Inicio";


$defaultPages = my_json_decode( "{\"add\":\"add\",\"edit\":\"edit\",\"export\":\"export\",\"import\":\"import\",\"list\":\"list\",\"print\":\"print\",\"search\":\"search\",\"view\":\"view\"}" );

$tdatainicio[".pagesByType"] = my_json_decode( "{\"add\":[\"add\"],\"edit\":[\"edit\"],\"export\":[\"export\"],\"import\":[\"import\"],\"list\":[\"list\"],\"print\":[\"print\"],\"search\":[\"search\"],\"view\":[\"view\"]}" );
$tdatainicio[".pages"] = types2pages( my_json_decode( "{\"add\":[\"add\"],\"edit\":[\"edit\"],\"export\":[\"export\"],\"import\":[\"import\"],\"list\":[\"list\"],\"print\":[\"print\"],\"search\":[\"search\"],\"view\":[\"view\"]}" ) );
$tdatainicio[".defaultPages"] = $defaultPages;

//	field labels
$fieldLabelsinicio = array();
$fieldToolTipsinicio = array();
$pageTitlesinicio = array();
$placeHoldersinicio = array();

if(mlang_getcurrentlang()=="Spanish")
{
	$fieldLabelsinicio["Spanish"] = array();
	$fieldToolTipsinicio["Spanish"] = array();
	$placeHoldersinicio["Spanish"] = array();
	$pageTitlesinicio["Spanish"] = array();
	$fieldLabelsinicio["Spanish"]["ID"] = "ID";
	$fieldToolTipsinicio["Spanish"]["ID"] = "";
	$placeHoldersinicio["Spanish"]["ID"] = "";
	$fieldLabelsinicio["Spanish"]["Nombre"] = "Nombre";
	$fieldToolTipsinicio["Spanish"]["Nombre"] = "";
	$placeHoldersinicio["Spanish"]["Nombre"] = "";
	$fieldLabelsinicio["Spanish"]["Dercripci_n"] = "Dercripción";
	$fieldToolTipsinicio["Spanish"]["Dercripci_n"] = "";
	$placeHoldersinicio["Spanish"]["Dercripci_n"] = "";
	if (count($fieldToolTipsinicio["Spanish"]))
		$tdatainicio[".isUseToolTips"] = true;
}


	$tdatainicio[".NCSearch"] = true;



$tdatainicio[".shortTableName"] = "inicio";
$tdatainicio[".nSecOptions"] = 0;

$tdatainicio[".mainTableOwnerID"] = "";
$tdatainicio[".entityType"] = 0;

$tdatainicio[".strOriginalTableName"] = "public.Inicio";

	



$tdatainicio[".showAddInPopup"] = false;

$tdatainicio[".showEditInPopup"] = false;

$tdatainicio[".showViewInPopup"] = false;

//page's base css files names
$popupPagesLayoutNames = array();
$tdatainicio[".popupPagesLayoutNames"] = $popupPagesLayoutNames;


$tdatainicio[".listAjax"] = false;
//	temporary
$tdatainicio[".listAjax"] = false;

	$tdatainicio[".audit"] = false;

	$tdatainicio[".locking"] = false;


$pages = $tdatainicio[".defaultPages"];

if( $pages[PAGE_EDIT] ) {
	$tdatainicio[".edit"] = true;
	$tdatainicio[".afterEditAction"] = 1;
	$tdatainicio[".closePopupAfterEdit"] = 1;
	$tdatainicio[".afterEditActionDetTable"] = "";
}

if( $pages[PAGE_ADD] ) {
$tdatainicio[".add"] = true;
$tdatainicio[".afterAddAction"] = 1;
$tdatainicio[".closePopupAfterAdd"] = 1;
$tdatainicio[".afterAddActionDetTable"] = "";
}

if( $pages[PAGE_LIST] ) {
	$tdatainicio[".list"] = true;
}



$tdatainicio[".strSortControlSettingsJSON"] = "";




if( $pages[PAGE_VIEW] ) {
$tdatainicio[".view"] = true;
}

if( $pages[PAGE_IMPORT] ) {
$tdatainicio[".import"] = true;
}

if( $pages[PAGE_EXPORT] ) {
$tdatainicio[".exportTo"] = true;
}

if( $pages[PAGE_PRINT] ) {
$tdatainicio[".printFriendly"] = true;
}



$tdatainicio[".showSimpleSearchOptions"] = true; // temp fix #13449

// Allow Show/Hide Fields in GRID
$tdatainicio[".allowShowHideFields"] = true; // temp fix #13449
//

// Allow Fields Reordering in GRID
$tdatainicio[".allowFieldsReordering"] = true; // temp fix #13449
//

$tdatainicio[".isUseAjaxSuggest"] = true;

$tdatainicio[".rowHighlite"] = true;



			

$tdatainicio[".ajaxCodeSnippetAdded"] = false;

$tdatainicio[".buttonsAdded"] = false;

$tdatainicio[".addPageEvents"] = false;

// use timepicker for search panel
$tdatainicio[".isUseTimeForSearch"] = false;


$tdatainicio[".badgeColor"] = "E07878";


$tdatainicio[".allSearchFields"] = array();
$tdatainicio[".filterFields"] = array();
$tdatainicio[".requiredSearchFields"] = array();

$tdatainicio[".googleLikeFields"] = array();
$tdatainicio[".googleLikeFields"][] = "ID";
$tdatainicio[".googleLikeFields"][] = "Nombre";
$tdatainicio[".googleLikeFields"][] = "Dercripción";



$tdatainicio[".tableType"] = "list";

$tdatainicio[".printerPageOrientation"] = 0;
$tdatainicio[".nPrinterPageScale"] = 100;

$tdatainicio[".nPrinterSplitRecords"] = 40;

$tdatainicio[".geocodingEnabled"] = false;










$tdatainicio[".pageSize"] = 20;

$tdatainicio[".warnLeavingPages"] = true;



$tstrOrderBy = "";
if(strlen($tstrOrderBy) && strtolower(substr($tstrOrderBy,0,8))!="order by")
	$tstrOrderBy = "order by ".$tstrOrderBy;
$tdatainicio[".strOrderBy"] = $tstrOrderBy;

$tdatainicio[".orderindexes"] = array();

$tdatainicio[".sqlHead"] = "SELECT \"ID\",  	\"Nombre\",  	\"Dercripción\"";
$tdatainicio[".sqlFrom"] = "FROM \"public\".\"Inicio\"";
$tdatainicio[".sqlWhereExpr"] = "";
$tdatainicio[".sqlTail"] = "";










//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdatainicio[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdatainicio[".arrGroupsPerPage"] = $arrGPP;

$tdatainicio[".highlightSearchResults"] = true;

$tableKeysinicio = array();
$tableKeysinicio[] = "ID";
$tdatainicio[".Keys"] = $tableKeysinicio;


$tdatainicio[".hideMobileList"] = array();




//	ID
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "ID";
	$fdata["GoodName"] = "ID";
	$fdata["ownerTable"] = "public.Inicio";
	$fdata["Label"] = GetFieldLabel("public_Inicio","ID");
	$fdata["FieldType"] = 3;

	
		$fdata["AutoInc"] = true;

	
			

		$fdata["strField"] = "ID";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "\"ID\"";

	
	
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


	$tdatainicio["ID"] = $fdata;
		$tdatainicio[".searchableFields"][] = "ID";
//	Nombre
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "Nombre";
	$fdata["GoodName"] = "Nombre";
	$fdata["ownerTable"] = "public.Inicio";
	$fdata["Label"] = GetFieldLabel("public_Inicio","Nombre");
	$fdata["FieldType"] = 200;

	
	
	
			

		$fdata["strField"] = "Nombre";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "\"Nombre\"";

	
	
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


	$tdatainicio["Nombre"] = $fdata;
		$tdatainicio[".searchableFields"][] = "Nombre";
//	Dercripción
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "Dercripción";
	$fdata["GoodName"] = "Dercripci_n";
	$fdata["ownerTable"] = "public.Inicio";
	$fdata["Label"] = GetFieldLabel("public_Inicio","Dercripci_n");
	$fdata["FieldType"] = 200;

	
	
	
			

		$fdata["strField"] = "Dercripción";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "\"Dercripción\"";

	
	
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


	$tdatainicio["Dercripción"] = $fdata;
		$tdatainicio[".searchableFields"][] = "Dercripción";


$tables_data["public.Inicio"]=&$tdatainicio;
$field_labels["public_Inicio"] = &$fieldLabelsinicio;
$fieldToolTips["public_Inicio"] = &$fieldToolTipsinicio;
$placeHolders["public_Inicio"] = &$placeHoldersinicio;
$page_titles["public_Inicio"] = &$pageTitlesinicio;

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)
$detailsTablesData["public.Inicio"] = array();

// tables which are master tables for current table (detail)
$masterTablesData["public.Inicio"] = array();



// -----------------end  prepare master-details data arrays ------------------------------//


require_once(getabspath("classes/sql.php"));










function createSqlQuery_inicio()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "\"ID\",  	\"Nombre\",  	\"Dercripción\"";
$proto0["m_strFrom"] = "FROM \"public\".\"Inicio\"";
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
	"m_strName" => "ID",
	"m_strTable" => "public.Inicio",
	"m_srcTableName" => "public.Inicio"
));

$proto6["m_sql"] = "\"ID\"";
$proto6["m_srcTableName"] = "public.Inicio";
$proto6["m_expr"]=$obj;
$proto6["m_alias"] = "";
$obj = new SQLFieldListItem($proto6);

$proto0["m_fieldlist"][]=$obj;
						$proto8=array();
			$obj = new SQLField(array(
	"m_strName" => "Nombre",
	"m_strTable" => "public.Inicio",
	"m_srcTableName" => "public.Inicio"
));

$proto8["m_sql"] = "\"Nombre\"";
$proto8["m_srcTableName"] = "public.Inicio";
$proto8["m_expr"]=$obj;
$proto8["m_alias"] = "";
$obj = new SQLFieldListItem($proto8);

$proto0["m_fieldlist"][]=$obj;
						$proto10=array();
			$obj = new SQLField(array(
	"m_strName" => "Dercripción",
	"m_strTable" => "public.Inicio",
	"m_srcTableName" => "public.Inicio"
));

$proto10["m_sql"] = "\"Dercripción\"";
$proto10["m_srcTableName"] = "public.Inicio";
$proto10["m_expr"]=$obj;
$proto10["m_alias"] = "";
$obj = new SQLFieldListItem($proto10);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto12=array();
$proto12["m_link"] = "SQLL_MAIN";
			$proto13=array();
$proto13["m_strName"] = "public.Inicio";
$proto13["m_srcTableName"] = "public.Inicio";
$proto13["m_columns"] = array();
$proto13["m_columns"][] = "ID";
$proto13["m_columns"][] = "Nombre";
$proto13["m_columns"][] = "Dercripción";
$obj = new SQLTable($proto13);

$proto12["m_table"] = $obj;
$proto12["m_sql"] = "\"public\".\"Inicio\"";
$proto12["m_alias"] = "";
$proto12["m_srcTableName"] = "public.Inicio";
$proto14=array();
$proto14["m_sql"] = "";
$proto14["m_uniontype"] = "SQLL_UNKNOWN";
	$obj = new SQLNonParsed(array(
	"m_sql" => ""
));

$proto14["m_column"]=$obj;
$proto14["m_contained"] = array();
$proto14["m_strCase"] = "";
$proto14["m_havingmode"] = false;
$proto14["m_inBrackets"] = false;
$proto14["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto14);

$proto12["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto12);

$proto0["m_fromlist"][]=$obj;
$proto0["m_groupby"] = array();
$proto0["m_orderby"] = array();
$proto0["m_srcTableName"]="public.Inicio";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_inicio = createSqlQuery_inicio();


	
		;

			

$tdatainicio[".sqlquery"] = $queryData_inicio;

$tableEvents["public.Inicio"] = new eventsBase;
$tdatainicio[".hasEvents"] = false;

?>