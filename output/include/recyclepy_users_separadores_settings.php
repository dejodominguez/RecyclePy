<?php



$tdatarecyclepy_users_separadores = array();
$tdatarecyclepy_users_separadores[".searchableFields"] = array();
$tdatarecyclepy_users_separadores[".ShortName"] = "recyclepy_users_separadores";
$tdatarecyclepy_users_separadores[".OwnerID"] = "";
$tdatarecyclepy_users_separadores[".OriginalTable"] = "public.RecyclePy_users_separadores";


$defaultPages = my_json_decode( "{\"search\":\"search\"}" );

$tdatarecyclepy_users_separadores[".pagesByType"] = my_json_decode( "{\"search\":[\"search\"]}" );
$tdatarecyclepy_users_separadores[".pages"] = types2pages( my_json_decode( "{\"search\":[\"search\"]}" ) );
$tdatarecyclepy_users_separadores[".defaultPages"] = $defaultPages;

//	field labels
$fieldLabelsrecyclepy_users_separadores = array();
$fieldToolTipsrecyclepy_users_separadores = array();
$pageTitlesrecyclepy_users_separadores = array();
$placeHoldersrecyclepy_users_separadores = array();

if(mlang_getcurrentlang()=="Spanish")
{
	$fieldLabelsrecyclepy_users_separadores["Spanish"] = array();
	$fieldToolTipsrecyclepy_users_separadores["Spanish"] = array();
	$placeHoldersrecyclepy_users_separadores["Spanish"] = array();
	$pageTitlesrecyclepy_users_separadores["Spanish"] = array();
	$fieldLabelsrecyclepy_users_separadores["Spanish"]["ID"] = "ID";
	$fieldToolTipsrecyclepy_users_separadores["Spanish"]["ID"] = "";
	$placeHoldersrecyclepy_users_separadores["Spanish"]["ID"] = "";
	$fieldLabelsrecyclepy_users_separadores["Spanish"]["username"] = "Username";
	$fieldToolTipsrecyclepy_users_separadores["Spanish"]["username"] = "";
	$placeHoldersrecyclepy_users_separadores["Spanish"]["username"] = "";
	$fieldLabelsrecyclepy_users_separadores["Spanish"]["password"] = "Password";
	$fieldToolTipsrecyclepy_users_separadores["Spanish"]["password"] = "";
	$placeHoldersrecyclepy_users_separadores["Spanish"]["password"] = "";
	$fieldLabelsrecyclepy_users_separadores["Spanish"]["email"] = "Email";
	$fieldToolTipsrecyclepy_users_separadores["Spanish"]["email"] = "";
	$placeHoldersrecyclepy_users_separadores["Spanish"]["email"] = "";
	$fieldLabelsrecyclepy_users_separadores["Spanish"]["fullname"] = "Fullname";
	$fieldToolTipsrecyclepy_users_separadores["Spanish"]["fullname"] = "";
	$placeHoldersrecyclepy_users_separadores["Spanish"]["fullname"] = "";
	$fieldLabelsrecyclepy_users_separadores["Spanish"]["groupid"] = "Groupid";
	$fieldToolTipsrecyclepy_users_separadores["Spanish"]["groupid"] = "";
	$placeHoldersrecyclepy_users_separadores["Spanish"]["groupid"] = "";
	$fieldLabelsrecyclepy_users_separadores["Spanish"]["active"] = "Active";
	$fieldToolTipsrecyclepy_users_separadores["Spanish"]["active"] = "";
	$placeHoldersrecyclepy_users_separadores["Spanish"]["active"] = "";
	$fieldLabelsrecyclepy_users_separadores["Spanish"]["ext_security_id"] = "Ext Security Id";
	$fieldToolTipsrecyclepy_users_separadores["Spanish"]["ext_security_id"] = "";
	$placeHoldersrecyclepy_users_separadores["Spanish"]["ext_security_id"] = "";
	if (count($fieldToolTipsrecyclepy_users_separadores["Spanish"]))
		$tdatarecyclepy_users_separadores[".isUseToolTips"] = true;
}


	$tdatarecyclepy_users_separadores[".NCSearch"] = true;



$tdatarecyclepy_users_separadores[".shortTableName"] = "recyclepy_users_separadores";
$tdatarecyclepy_users_separadores[".nSecOptions"] = 0;

$tdatarecyclepy_users_separadores[".mainTableOwnerID"] = "";
$tdatarecyclepy_users_separadores[".entityType"] = 0;

$tdatarecyclepy_users_separadores[".strOriginalTableName"] = "public.RecyclePy_users_separadores";

	



$tdatarecyclepy_users_separadores[".showAddInPopup"] = false;

$tdatarecyclepy_users_separadores[".showEditInPopup"] = false;

$tdatarecyclepy_users_separadores[".showViewInPopup"] = false;

//page's base css files names
$popupPagesLayoutNames = array();
$tdatarecyclepy_users_separadores[".popupPagesLayoutNames"] = $popupPagesLayoutNames;


$tdatarecyclepy_users_separadores[".listAjax"] = false;
//	temporary
$tdatarecyclepy_users_separadores[".listAjax"] = false;

	$tdatarecyclepy_users_separadores[".audit"] = false;

	$tdatarecyclepy_users_separadores[".locking"] = false;


$pages = $tdatarecyclepy_users_separadores[".defaultPages"];

if( $pages[PAGE_EDIT] ) {
	$tdatarecyclepy_users_separadores[".edit"] = true;
	$tdatarecyclepy_users_separadores[".afterEditAction"] = 1;
	$tdatarecyclepy_users_separadores[".closePopupAfterEdit"] = 1;
	$tdatarecyclepy_users_separadores[".afterEditActionDetTable"] = "";
}

if( $pages[PAGE_ADD] ) {
$tdatarecyclepy_users_separadores[".add"] = true;
$tdatarecyclepy_users_separadores[".afterAddAction"] = 1;
$tdatarecyclepy_users_separadores[".closePopupAfterAdd"] = 1;
$tdatarecyclepy_users_separadores[".afterAddActionDetTable"] = "";
}

if( $pages[PAGE_LIST] ) {
	$tdatarecyclepy_users_separadores[".list"] = true;
}



$tdatarecyclepy_users_separadores[".strSortControlSettingsJSON"] = "";




if( $pages[PAGE_VIEW] ) {
$tdatarecyclepy_users_separadores[".view"] = true;
}

if( $pages[PAGE_IMPORT] ) {
$tdatarecyclepy_users_separadores[".import"] = true;
}

if( $pages[PAGE_EXPORT] ) {
$tdatarecyclepy_users_separadores[".exportTo"] = true;
}

if( $pages[PAGE_PRINT] ) {
$tdatarecyclepy_users_separadores[".printFriendly"] = true;
}



$tdatarecyclepy_users_separadores[".showSimpleSearchOptions"] = true; // temp fix #13449

// Allow Show/Hide Fields in GRID
$tdatarecyclepy_users_separadores[".allowShowHideFields"] = true; // temp fix #13449
//

// Allow Fields Reordering in GRID
$tdatarecyclepy_users_separadores[".allowFieldsReordering"] = true; // temp fix #13449
//

$tdatarecyclepy_users_separadores[".isUseAjaxSuggest"] = true;

$tdatarecyclepy_users_separadores[".rowHighlite"] = true;



			

$tdatarecyclepy_users_separadores[".ajaxCodeSnippetAdded"] = false;

$tdatarecyclepy_users_separadores[".buttonsAdded"] = false;

$tdatarecyclepy_users_separadores[".addPageEvents"] = false;

// use timepicker for search panel
$tdatarecyclepy_users_separadores[".isUseTimeForSearch"] = false;


$tdatarecyclepy_users_separadores[".badgeColor"] = "3CB371";


$tdatarecyclepy_users_separadores[".allSearchFields"] = array();
$tdatarecyclepy_users_separadores[".filterFields"] = array();
$tdatarecyclepy_users_separadores[".requiredSearchFields"] = array();

$tdatarecyclepy_users_separadores[".googleLikeFields"] = array();
$tdatarecyclepy_users_separadores[".googleLikeFields"][] = "ID";
$tdatarecyclepy_users_separadores[".googleLikeFields"][] = "username";
$tdatarecyclepy_users_separadores[".googleLikeFields"][] = "password";
$tdatarecyclepy_users_separadores[".googleLikeFields"][] = "email";
$tdatarecyclepy_users_separadores[".googleLikeFields"][] = "fullname";
$tdatarecyclepy_users_separadores[".googleLikeFields"][] = "groupid";
$tdatarecyclepy_users_separadores[".googleLikeFields"][] = "active";
$tdatarecyclepy_users_separadores[".googleLikeFields"][] = "ext_security_id";



$tdatarecyclepy_users_separadores[".tableType"] = "list";

$tdatarecyclepy_users_separadores[".printerPageOrientation"] = 0;
$tdatarecyclepy_users_separadores[".nPrinterPageScale"] = 100;

$tdatarecyclepy_users_separadores[".nPrinterSplitRecords"] = 40;

$tdatarecyclepy_users_separadores[".geocodingEnabled"] = false;










$tdatarecyclepy_users_separadores[".pageSize"] = 20;

$tdatarecyclepy_users_separadores[".warnLeavingPages"] = true;



$tstrOrderBy = "";
if(strlen($tstrOrderBy) && strtolower(substr($tstrOrderBy,0,8))!="order by")
	$tstrOrderBy = "order by ".$tstrOrderBy;
$tdatarecyclepy_users_separadores[".strOrderBy"] = $tstrOrderBy;

$tdatarecyclepy_users_separadores[".orderindexes"] = array();

$tdatarecyclepy_users_separadores[".sqlHead"] = "SELECT \"ID\",  	username,  	password,  	email,  	fullname,  	groupid,  	active,  	ext_security_id";
$tdatarecyclepy_users_separadores[".sqlFrom"] = "FROM \"public\".\"RecyclePy_users_separadores\"";
$tdatarecyclepy_users_separadores[".sqlWhereExpr"] = "";
$tdatarecyclepy_users_separadores[".sqlTail"] = "";










//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdatarecyclepy_users_separadores[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdatarecyclepy_users_separadores[".arrGroupsPerPage"] = $arrGPP;

$tdatarecyclepy_users_separadores[".highlightSearchResults"] = true;

$tableKeysrecyclepy_users_separadores = array();
$tableKeysrecyclepy_users_separadores[] = "ID";
$tdatarecyclepy_users_separadores[".Keys"] = $tableKeysrecyclepy_users_separadores;


$tdatarecyclepy_users_separadores[".hideMobileList"] = array();




//	ID
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "ID";
	$fdata["GoodName"] = "ID";
	$fdata["ownerTable"] = "public.RecyclePy_users_separadores";
	$fdata["Label"] = GetFieldLabel("public_RecyclePy_users_separadores","ID");
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


	$tdatarecyclepy_users_separadores["ID"] = $fdata;
		$tdatarecyclepy_users_separadores[".searchableFields"][] = "ID";
//	username
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "username";
	$fdata["GoodName"] = "username";
	$fdata["ownerTable"] = "public.RecyclePy_users_separadores";
	$fdata["Label"] = GetFieldLabel("public_RecyclePy_users_separadores","username");
	$fdata["FieldType"] = 200;

	
	
	
			

		$fdata["strField"] = "username";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "username";

	
	
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
	
	
				if(count($edata["validateAs"]) && !in_array('IsRequired', $edata["validateAs"]['basicValidate']))
		$edata["validateAs"]['basicValidate'][] = 'IsRequired';
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


	$tdatarecyclepy_users_separadores["username"] = $fdata;
		$tdatarecyclepy_users_separadores[".searchableFields"][] = "username";
//	password
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "password";
	$fdata["GoodName"] = "password";
	$fdata["ownerTable"] = "public.RecyclePy_users_separadores";
	$fdata["Label"] = GetFieldLabel("public_RecyclePy_users_separadores","password");
	$fdata["FieldType"] = 200;

	
	
	
			

		$fdata["strField"] = "password";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "password";

	
	
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

	$edata = array("EditFormat" => "Password");

	
		$edata["weekdayMessage"] = array("message" => "", "messageType" => "Text");
	$edata["weekdays"] = "[]";


	
	



	
	
	
	
			$edata["acceptFileTypes"] = ".+$";
		$edata["acceptFileTypesHtml"] = "";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
	
	
		$edata["EditParams"] = "";
		
		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
	
	
				if(count($edata["validateAs"]) && !in_array('IsRequired', $edata["validateAs"]['basicValidate']))
		$edata["validateAs"]['basicValidate'][] = 'IsRequired';
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


	$tdatarecyclepy_users_separadores["password"] = $fdata;
		$tdatarecyclepy_users_separadores[".searchableFields"][] = "password";
//	email
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "email";
	$fdata["GoodName"] = "email";
	$fdata["ownerTable"] = "public.RecyclePy_users_separadores";
	$fdata["Label"] = GetFieldLabel("public_RecyclePy_users_separadores","email");
	$fdata["FieldType"] = 200;

	
	
	
			

		$fdata["strField"] = "email";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "email";

	
	
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
	
	
						if(count($edata["validateAs"]) && !in_array('IsEmail', $edata["validateAs"]['basicValidate']))
		$edata["validateAs"]['basicValidate'][] = 'IsEmail';
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


	$tdatarecyclepy_users_separadores["email"] = $fdata;
		$tdatarecyclepy_users_separadores[".searchableFields"][] = "email";
//	fullname
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 5;
	$fdata["strName"] = "fullname";
	$fdata["GoodName"] = "fullname";
	$fdata["ownerTable"] = "public.RecyclePy_users_separadores";
	$fdata["Label"] = GetFieldLabel("public_RecyclePy_users_separadores","fullname");
	$fdata["FieldType"] = 200;

	
	
	
			

		$fdata["strField"] = "fullname";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "fullname";

	
	
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


	$tdatarecyclepy_users_separadores["fullname"] = $fdata;
		$tdatarecyclepy_users_separadores[".searchableFields"][] = "fullname";
//	groupid
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 6;
	$fdata["strName"] = "groupid";
	$fdata["GoodName"] = "groupid";
	$fdata["ownerTable"] = "public.RecyclePy_users_separadores";
	$fdata["Label"] = GetFieldLabel("public_RecyclePy_users_separadores","groupid");
	$fdata["FieldType"] = 200;

	
	
	
			

		$fdata["strField"] = "groupid";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "groupid";

	
	
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


	$tdatarecyclepy_users_separadores["groupid"] = $fdata;
		$tdatarecyclepy_users_separadores[".searchableFields"][] = "groupid";
//	active
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 7;
	$fdata["strName"] = "active";
	$fdata["GoodName"] = "active";
	$fdata["ownerTable"] = "public.RecyclePy_users_separadores";
	$fdata["Label"] = GetFieldLabel("public_RecyclePy_users_separadores","active");
	$fdata["FieldType"] = 3;

	
	
	
			

		$fdata["strField"] = "active";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "active";

	
	
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


	$tdatarecyclepy_users_separadores["active"] = $fdata;
		$tdatarecyclepy_users_separadores[".searchableFields"][] = "active";
//	ext_security_id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 8;
	$fdata["strName"] = "ext_security_id";
	$fdata["GoodName"] = "ext_security_id";
	$fdata["ownerTable"] = "public.RecyclePy_users_separadores";
	$fdata["Label"] = GetFieldLabel("public_RecyclePy_users_separadores","ext_security_id");
	$fdata["FieldType"] = 200;

	
	
	
			

		$fdata["strField"] = "ext_security_id";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "ext_security_id";

	
	
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


	$tdatarecyclepy_users_separadores["ext_security_id"] = $fdata;
		$tdatarecyclepy_users_separadores[".searchableFields"][] = "ext_security_id";


$tables_data["public.RecyclePy_users_separadores"]=&$tdatarecyclepy_users_separadores;
$field_labels["public_RecyclePy_users_separadores"] = &$fieldLabelsrecyclepy_users_separadores;
$fieldToolTips["public_RecyclePy_users_separadores"] = &$fieldToolTipsrecyclepy_users_separadores;
$placeHolders["public_RecyclePy_users_separadores"] = &$placeHoldersrecyclepy_users_separadores;
$page_titles["public_RecyclePy_users_separadores"] = &$pageTitlesrecyclepy_users_separadores;

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)
$detailsTablesData["public.RecyclePy_users_separadores"] = array();

// tables which are master tables for current table (detail)
$masterTablesData["public.RecyclePy_users_separadores"] = array();



// -----------------end  prepare master-details data arrays ------------------------------//


require_once(getabspath("classes/sql.php"));










function createSqlQuery_recyclepy_users_separadores()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "\"ID\",  	username,  	password,  	email,  	fullname,  	groupid,  	active,  	ext_security_id";
$proto0["m_strFrom"] = "FROM \"public\".\"RecyclePy_users_separadores\"";
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
	"m_strTable" => "public.RecyclePy_users_separadores",
	"m_srcTableName" => "public.RecyclePy_users_separadores"
));

$proto6["m_sql"] = "\"ID\"";
$proto6["m_srcTableName"] = "public.RecyclePy_users_separadores";
$proto6["m_expr"]=$obj;
$proto6["m_alias"] = "";
$obj = new SQLFieldListItem($proto6);

$proto0["m_fieldlist"][]=$obj;
						$proto8=array();
			$obj = new SQLField(array(
	"m_strName" => "username",
	"m_strTable" => "public.RecyclePy_users_separadores",
	"m_srcTableName" => "public.RecyclePy_users_separadores"
));

$proto8["m_sql"] = "username";
$proto8["m_srcTableName"] = "public.RecyclePy_users_separadores";
$proto8["m_expr"]=$obj;
$proto8["m_alias"] = "";
$obj = new SQLFieldListItem($proto8);

$proto0["m_fieldlist"][]=$obj;
						$proto10=array();
			$obj = new SQLField(array(
	"m_strName" => "password",
	"m_strTable" => "public.RecyclePy_users_separadores",
	"m_srcTableName" => "public.RecyclePy_users_separadores"
));

$proto10["m_sql"] = "password";
$proto10["m_srcTableName"] = "public.RecyclePy_users_separadores";
$proto10["m_expr"]=$obj;
$proto10["m_alias"] = "";
$obj = new SQLFieldListItem($proto10);

$proto0["m_fieldlist"][]=$obj;
						$proto12=array();
			$obj = new SQLField(array(
	"m_strName" => "email",
	"m_strTable" => "public.RecyclePy_users_separadores",
	"m_srcTableName" => "public.RecyclePy_users_separadores"
));

$proto12["m_sql"] = "email";
$proto12["m_srcTableName"] = "public.RecyclePy_users_separadores";
$proto12["m_expr"]=$obj;
$proto12["m_alias"] = "";
$obj = new SQLFieldListItem($proto12);

$proto0["m_fieldlist"][]=$obj;
						$proto14=array();
			$obj = new SQLField(array(
	"m_strName" => "fullname",
	"m_strTable" => "public.RecyclePy_users_separadores",
	"m_srcTableName" => "public.RecyclePy_users_separadores"
));

$proto14["m_sql"] = "fullname";
$proto14["m_srcTableName"] = "public.RecyclePy_users_separadores";
$proto14["m_expr"]=$obj;
$proto14["m_alias"] = "";
$obj = new SQLFieldListItem($proto14);

$proto0["m_fieldlist"][]=$obj;
						$proto16=array();
			$obj = new SQLField(array(
	"m_strName" => "groupid",
	"m_strTable" => "public.RecyclePy_users_separadores",
	"m_srcTableName" => "public.RecyclePy_users_separadores"
));

$proto16["m_sql"] = "groupid";
$proto16["m_srcTableName"] = "public.RecyclePy_users_separadores";
$proto16["m_expr"]=$obj;
$proto16["m_alias"] = "";
$obj = new SQLFieldListItem($proto16);

$proto0["m_fieldlist"][]=$obj;
						$proto18=array();
			$obj = new SQLField(array(
	"m_strName" => "active",
	"m_strTable" => "public.RecyclePy_users_separadores",
	"m_srcTableName" => "public.RecyclePy_users_separadores"
));

$proto18["m_sql"] = "active";
$proto18["m_srcTableName"] = "public.RecyclePy_users_separadores";
$proto18["m_expr"]=$obj;
$proto18["m_alias"] = "";
$obj = new SQLFieldListItem($proto18);

$proto0["m_fieldlist"][]=$obj;
						$proto20=array();
			$obj = new SQLField(array(
	"m_strName" => "ext_security_id",
	"m_strTable" => "public.RecyclePy_users_separadores",
	"m_srcTableName" => "public.RecyclePy_users_separadores"
));

$proto20["m_sql"] = "ext_security_id";
$proto20["m_srcTableName"] = "public.RecyclePy_users_separadores";
$proto20["m_expr"]=$obj;
$proto20["m_alias"] = "";
$obj = new SQLFieldListItem($proto20);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto22=array();
$proto22["m_link"] = "SQLL_MAIN";
			$proto23=array();
$proto23["m_strName"] = "public.RecyclePy_users_separadores";
$proto23["m_srcTableName"] = "public.RecyclePy_users_separadores";
$proto23["m_columns"] = array();
$proto23["m_columns"][] = "ID";
$proto23["m_columns"][] = "username";
$proto23["m_columns"][] = "password";
$proto23["m_columns"][] = "email";
$proto23["m_columns"][] = "fullname";
$proto23["m_columns"][] = "groupid";
$proto23["m_columns"][] = "active";
$proto23["m_columns"][] = "ext_security_id";
$obj = new SQLTable($proto23);

$proto22["m_table"] = $obj;
$proto22["m_sql"] = "\"public\".\"RecyclePy_users_separadores\"";
$proto22["m_alias"] = "";
$proto22["m_srcTableName"] = "public.RecyclePy_users_separadores";
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
$proto0["m_srcTableName"]="public.RecyclePy_users_separadores";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_recyclepy_users_separadores = createSqlQuery_recyclepy_users_separadores();


	
		;

								

$tdatarecyclepy_users_separadores[".sqlquery"] = $queryData_recyclepy_users_separadores;

$tableEvents["public.RecyclePy_users_separadores"] = new eventsBase;
$tdatarecyclepy_users_separadores[".hasEvents"] = false;

?>