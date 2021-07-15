<?php



$tdataresiduos = array();
$tdataresiduos[".searchableFields"] = array();
$tdataresiduos[".ShortName"] = "residuos";
$tdataresiduos[".OwnerID"] = "";
$tdataresiduos[".OriginalTable"] = "public.Residuos";


$defaultPages = my_json_decode( "{\"add\":\"add\",\"edit\":\"edit\",\"export\":\"export\",\"import\":\"import\",\"list\":\"list\",\"masterlist\":\"masterlist\",\"masterprint\":\"masterprint\",\"print\":\"print\",\"search\":\"search\",\"view\":\"view\"}" );

$tdataresiduos[".pagesByType"] = my_json_decode( "{\"add\":[\"add\"],\"edit\":[\"edit\"],\"export\":[\"export\"],\"import\":[\"import\"],\"list\":[\"list\"],\"masterlist\":[\"masterlist\"],\"masterprint\":[\"masterprint\"],\"print\":[\"print\"],\"search\":[\"search\"],\"view\":[\"view\"]}" );
$tdataresiduos[".pages"] = types2pages( my_json_decode( "{\"add\":[\"add\"],\"edit\":[\"edit\"],\"export\":[\"export\"],\"import\":[\"import\"],\"list\":[\"list\"],\"masterlist\":[\"masterlist\"],\"masterprint\":[\"masterprint\"],\"print\":[\"print\"],\"search\":[\"search\"],\"view\":[\"view\"]}" ) );
$tdataresiduos[".defaultPages"] = $defaultPages;

//	field labels
$fieldLabelsresiduos = array();
$fieldToolTipsresiduos = array();
$pageTitlesresiduos = array();
$placeHoldersresiduos = array();

if(mlang_getcurrentlang()=="Spanish")
{
	$fieldLabelsresiduos["Spanish"] = array();
	$fieldToolTipsresiduos["Spanish"] = array();
	$placeHoldersresiduos["Spanish"] = array();
	$pageTitlesresiduos["Spanish"] = array();
	$fieldLabelsresiduos["Spanish"]["IdResiduo"] = "Codigo";
	$fieldToolTipsresiduos["Spanish"]["IdResiduo"] = "";
	$placeHoldersresiduos["Spanish"]["IdResiduo"] = "";
	$fieldLabelsresiduos["Spanish"]["DescriResiduo"] = "Descripción";
	$fieldToolTipsresiduos["Spanish"]["DescriResiduo"] = "";
	$placeHoldersresiduos["Spanish"]["DescriResiduo"] = "";
	if (count($fieldToolTipsresiduos["Spanish"]))
		$tdataresiduos[".isUseToolTips"] = true;
}


	$tdataresiduos[".NCSearch"] = true;



$tdataresiduos[".shortTableName"] = "residuos";
$tdataresiduos[".nSecOptions"] = 0;

$tdataresiduos[".mainTableOwnerID"] = "";
$tdataresiduos[".entityType"] = 0;

$tdataresiduos[".strOriginalTableName"] = "public.Residuos";

	



$tdataresiduos[".showAddInPopup"] = false;

$tdataresiduos[".showEditInPopup"] = false;

$tdataresiduos[".showViewInPopup"] = false;

//page's base css files names
$popupPagesLayoutNames = array();
$tdataresiduos[".popupPagesLayoutNames"] = $popupPagesLayoutNames;


$tdataresiduos[".listAjax"] = false;
//	temporary
$tdataresiduos[".listAjax"] = false;

	$tdataresiduos[".audit"] = false;

	$tdataresiduos[".locking"] = false;


$pages = $tdataresiduos[".defaultPages"];

if( $pages[PAGE_EDIT] ) {
	$tdataresiduos[".edit"] = true;
	$tdataresiduos[".afterEditAction"] = 1;
	$tdataresiduos[".closePopupAfterEdit"] = 1;
	$tdataresiduos[".afterEditActionDetTable"] = "";
}

if( $pages[PAGE_ADD] ) {
$tdataresiduos[".add"] = true;
$tdataresiduos[".afterAddAction"] = 1;
$tdataresiduos[".closePopupAfterAdd"] = 1;
$tdataresiduos[".afterAddActionDetTable"] = "";
}

if( $pages[PAGE_LIST] ) {
	$tdataresiduos[".list"] = true;
}



$tdataresiduos[".strSortControlSettingsJSON"] = "";




if( $pages[PAGE_VIEW] ) {
$tdataresiduos[".view"] = true;
}

if( $pages[PAGE_IMPORT] ) {
$tdataresiduos[".import"] = true;
}

if( $pages[PAGE_EXPORT] ) {
$tdataresiduos[".exportTo"] = true;
}

if( $pages[PAGE_PRINT] ) {
$tdataresiduos[".printFriendly"] = true;
}



$tdataresiduos[".showSimpleSearchOptions"] = true; // temp fix #13449

// Allow Show/Hide Fields in GRID
$tdataresiduos[".allowShowHideFields"] = true; // temp fix #13449
//

// Allow Fields Reordering in GRID
$tdataresiduos[".allowFieldsReordering"] = true; // temp fix #13449
//

$tdataresiduos[".isUseAjaxSuggest"] = true;

$tdataresiduos[".rowHighlite"] = true;



			

$tdataresiduos[".ajaxCodeSnippetAdded"] = false;

$tdataresiduos[".buttonsAdded"] = false;

$tdataresiduos[".addPageEvents"] = false;

// use timepicker for search panel
$tdataresiduos[".isUseTimeForSearch"] = false;


$tdataresiduos[".badgeColor"] = "4169E1";


$tdataresiduos[".allSearchFields"] = array();
$tdataresiduos[".filterFields"] = array();
$tdataresiduos[".requiredSearchFields"] = array();

$tdataresiduos[".googleLikeFields"] = array();
$tdataresiduos[".googleLikeFields"][] = "IdResiduo";
$tdataresiduos[".googleLikeFields"][] = "DescriResiduo";



$tdataresiduos[".tableType"] = "list";

$tdataresiduos[".printerPageOrientation"] = 0;
$tdataresiduos[".nPrinterPageScale"] = 100;

$tdataresiduos[".nPrinterSplitRecords"] = 40;

$tdataresiduos[".geocodingEnabled"] = false;










$tdataresiduos[".pageSize"] = 20;

$tdataresiduos[".warnLeavingPages"] = true;



$tstrOrderBy = "";
if(strlen($tstrOrderBy) && strtolower(substr($tstrOrderBy,0,8))!="order by")
	$tstrOrderBy = "order by ".$tstrOrderBy;
$tdataresiduos[".strOrderBy"] = $tstrOrderBy;

$tdataresiduos[".orderindexes"] = array();

$tdataresiduos[".sqlHead"] = "SELECT \"IdResiduo\",  	\"DescriResiduo\"";
$tdataresiduos[".sqlFrom"] = "FROM \"public\".\"Residuos\"";
$tdataresiduos[".sqlWhereExpr"] = "";
$tdataresiduos[".sqlTail"] = "";










//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdataresiduos[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdataresiduos[".arrGroupsPerPage"] = $arrGPP;

$tdataresiduos[".highlightSearchResults"] = true;

$tableKeysresiduos = array();
$tableKeysresiduos[] = "IdResiduo";
$tdataresiduos[".Keys"] = $tableKeysresiduos;


$tdataresiduos[".hideMobileList"] = array();




//	IdResiduo
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "IdResiduo";
	$fdata["GoodName"] = "IdResiduo";
	$fdata["ownerTable"] = "public.Residuos";
	$fdata["Label"] = GetFieldLabel("public_Residuos","IdResiduo");
	$fdata["FieldType"] = 3;

	
		$fdata["AutoInc"] = true;

	
			

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


	$tdataresiduos["IdResiduo"] = $fdata;
		$tdataresiduos[".searchableFields"][] = "IdResiduo";
//	DescriResiduo
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "DescriResiduo";
	$fdata["GoodName"] = "DescriResiduo";
	$fdata["ownerTable"] = "public.Residuos";
	$fdata["Label"] = GetFieldLabel("public_Residuos","DescriResiduo");
	$fdata["FieldType"] = 200;

	
	
	
			

		$fdata["strField"] = "DescriResiduo";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "\"DescriResiduo\"";

	
	
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


	$tdataresiduos["DescriResiduo"] = $fdata;
		$tdataresiduos[".searchableFields"][] = "DescriResiduo";


$tables_data["public.Residuos"]=&$tdataresiduos;
$field_labels["public_Residuos"] = &$fieldLabelsresiduos;
$fieldToolTips["public_Residuos"] = &$fieldToolTipsresiduos;
$placeHolders["public_Residuos"] = &$placeHoldersresiduos;
$page_titles["public_Residuos"] = &$pageTitlesresiduos;

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)
$detailsTablesData["public.Residuos"] = array();
//	public.GestionPesosResiduos
	
	

		$dIndex = 0;
	$detailsParam = array();
	$detailsParam["dDataSourceTable"]="public.GestionPesosResiduos";
		$detailsParam["dOriginalTable"] = "public.GestionPesosResiduos";



				$detailsParam["dType"]=PAGE_LIST;
	$detailsParam["dShortTable"] = "gestionpesosresiduos";
	$detailsParam["dCaptionTable"] = GetTableCaption("public_GestionPesosResiduos");
	$detailsParam["masterKeys"] =array();
	$detailsParam["detailKeys"] =array();


		
	$detailsTablesData["public.Residuos"][$dIndex] = $detailsParam;

	
		$detailsTablesData["public.Residuos"][$dIndex]["masterKeys"] = array();

	$detailsTablesData["public.Residuos"][$dIndex]["masterKeys"][]="IdResiduo";

				$detailsTablesData["public.Residuos"][$dIndex]["detailKeys"] = array();

	$detailsTablesData["public.Residuos"][$dIndex]["detailKeys"][]="IdResiduo";

// tables which are master tables for current table (detail)
$masterTablesData["public.Residuos"] = array();



// -----------------end  prepare master-details data arrays ------------------------------//


require_once(getabspath("classes/sql.php"));










function createSqlQuery_residuos()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "\"IdResiduo\",  	\"DescriResiduo\"";
$proto0["m_strFrom"] = "FROM \"public\".\"Residuos\"";
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
	"m_strName" => "IdResiduo",
	"m_strTable" => "public.Residuos",
	"m_srcTableName" => "public.Residuos"
));

$proto6["m_sql"] = "\"IdResiduo\"";
$proto6["m_srcTableName"] = "public.Residuos";
$proto6["m_expr"]=$obj;
$proto6["m_alias"] = "";
$obj = new SQLFieldListItem($proto6);

$proto0["m_fieldlist"][]=$obj;
						$proto8=array();
			$obj = new SQLField(array(
	"m_strName" => "DescriResiduo",
	"m_strTable" => "public.Residuos",
	"m_srcTableName" => "public.Residuos"
));

$proto8["m_sql"] = "\"DescriResiduo\"";
$proto8["m_srcTableName"] = "public.Residuos";
$proto8["m_expr"]=$obj;
$proto8["m_alias"] = "";
$obj = new SQLFieldListItem($proto8);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto10=array();
$proto10["m_link"] = "SQLL_MAIN";
			$proto11=array();
$proto11["m_strName"] = "public.Residuos";
$proto11["m_srcTableName"] = "public.Residuos";
$proto11["m_columns"] = array();
$proto11["m_columns"][] = "IdResiduo";
$proto11["m_columns"][] = "DescriResiduo";
$obj = new SQLTable($proto11);

$proto10["m_table"] = $obj;
$proto10["m_sql"] = "\"public\".\"Residuos\"";
$proto10["m_alias"] = "";
$proto10["m_srcTableName"] = "public.Residuos";
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

$proto10["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto10);

$proto0["m_fromlist"][]=$obj;
$proto0["m_groupby"] = array();
$proto0["m_orderby"] = array();
$proto0["m_srcTableName"]="public.Residuos";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_residuos = createSqlQuery_residuos();


	
		;

		

$tdataresiduos[".sqlquery"] = $queryData_residuos;

$tableEvents["public.Residuos"] = new eventsBase;
$tdataresiduos[".hasEvents"] = false;

?>