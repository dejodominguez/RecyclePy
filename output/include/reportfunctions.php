<?php
require_once(getabspath("include/xml.php"));
require_once(getabspath("classes/cipherer.php"));
require_once(getabspath("classes/searchclause.php"));


function getReportArray($name)
{
	$arr = array();
	$xml = new xml();
	$rpt_strXML = LoadSelectedReport($name);
	$arr=$xml->xml_to_array($rpt_strXML);
	if(count($arr))
	{
		$_SESSION["webobject"]["table_type"]=$arr["table_type"];
		$_SESSION["object_sql"]=$arr["sql"];
		if($arr["table_type"]=="custom")
		{
			$connection = getWebreportConnection();	// #9875

			$tables_query = $arr["tables"][0];

			$strSQL = "SELECT ". $connection->addFieldWrappers("sqlcontent")." FROM ". $connection->addTableWrappers("webreport_sql")
				." WHERE ". $connection->addFieldWrappers("sqlname")."='".$tables_query."'";

			$row = $connection->query( $strSQL )->fetchNumeric();
			if( $row )
				$_SESSION["object_sql"] = $row[0];
		}
	}
	return $arr;
}

function getChartArray($name)
{
	$arr = array();
	$xml = new xml();
	$chrt_strXML = LoadSelectedChart($name);
	$arr=$xml->xml_to_array($chrt_strXML);
	if(count($arr))
	{
		$_SESSION["webobject"]["table_type"]=$arr["table_type"];
		$_SESSION["object_sql"]=$arr["sql"];
		if($arr["table_type"]=="custom")
		{
			$connection = getWebreportConnection();	// #9875

			$tables_query = $arr["tables"][0];

			$strSQL = "SELECT ".$connection->addFieldWrappers("sqlcontent")." FROM ".$connection->addTableWrappers("webreport_sql")
				." WHERE ".$connection->addFieldWrappers("sqlname")."='".$tables_query."'";

			$row = $connection->query( $strSQL )->fetchNumeric();
			if( $row )
				$_SESSION["object_sql"]=$row[0];
		}
	}
	return $arr;
}

function GetUserGroups() {
	global $wr_is_standalone, $cman;
	$arr = array();
	if(!$wr_is_standalone)
	{
		if ( "2" == "<Guest>" ) {
			$group = "Guest";
		} else {
			$group = "2";
		}
		$arr[]=array($group,"2");
	}
	if(!$wr_is_standalone)
	{
		if ( "1" == "<Guest>" ) {
			$group = "Guest";
		} else {
			$group = "1";
		}
		$arr[]=array($group,"1");
	}
	if(!$wr_is_standalone)
	{
		$arr[]=array("Default","<Default>");
	}
	else
	{
		$connection = getWebreportConnection(); // #9875

		$qResult = $connection->query( "select ".$connection->addFieldWrappers("username")
			." from ".$connection->addTableWrappers("webreport_users")." order by ".$connection->addFieldWrappers("username") );

		$arr[] = array("Guest", "<Guest>");
		while( $data = $qResult->fetchNumeric() )
		{
			$arr[] = array($data[0], $data[0]);
		}
	}
	return $arr;
}

function GetUserGroup()
{
	global $wr_is_standalone;

	if(!$wr_is_standalone)
	{
		if( !Security::isGuest() )
		{
			if ( "2" == @$_SESSION["GroupID"])
				return array(@$_SESSION["GroupID"]);
			if ( "1" == @$_SESSION["GroupID"])
				return array(@$_SESSION["GroupID"]);
			return array("Default");
		}
		else
			return array("Guest");
	}
	else
	{
		if( !Security::isGuest() )
		{
			$connection = getWebreportConnection();	// #9875

			$qResult = $connection->query("select ".$connection->addFieldWrappers("username")." from ".$connection->addTableWrappers("webreport_users")
				." order by ".$connection->addFieldWrappers("username"));
			while( $data = $qResult->fetchNumeric() )
			{
				if ( $data[0] == @$_SESSION["GroupID"] )
					return array($data[0]);
			}
		}
		else
			return array("Guest");
	}
	return array();
}

function CheckLastID($type)
{
	$connection = getWebreportConnection(); // #9875

	$strSQL = "SELECT ".$connection->addFieldWrappers("rpt_id")." FROM ".$connection->addTableWrappers("webreports")
		." WHERE ".$connection->addFieldWrappers("rpt_type")." = '".$type."'";

	$qResult = $connection->query( $strSQL );

	$maxID = 0;
	while( $row = $qResult->fetchNumeric() )
	{
		if ( $maxID < $row[0] )
			$maxID = $row[0];
	}

	return ++$maxID;
}

function GetNumberFieldsList($table) {
	$t = WRGetFieldsList($table);
	$arr=array();
	foreach($t as $f)
	{
		if(!is_wr_custom())
			$ftype=WRGetFieldType($table.".".$f);
		else
			$ftype=WRCustomGetFieldType($table,$f);
		if(IsNumberType($ftype))
			$arr[]=$f;
	}
	return $arr;
}

function WRGetNBFieldsList($table) {
	$t = WRGetFieldsList($table);
	$arr=array();
	foreach($t as $f)
	{
		if(!is_wr_custom())
			$ftype=WRGetFieldType($table.".".$f);
		else
			$ftype=WRCustomGetFieldType($table,$f);
		if(!IsBinaryType($ftype))
			$arr[]=$f;
	}
	return $arr;
}

function GetChartsList()
{
	$xml = new xml();
	$arr = array();

	$arrUserGroup = GetUserGroup();
	$connection = getWebreportConnection();// #9875

	$strSQL = "SELECT ".$connection->addFieldWrappers("rpt_name").", ".$connection->addFieldWrappers("rpt_title").", ".$connection->addFieldWrappers("rpt_owner")
		.", ".$connection->addFieldWrappers("rpt_status").", ".$connection->addFieldWrappers("rpt_content")
		." FROM ".$connection->addTableWrappers("webreports")." WHERE ".$connection->addFieldWrappers("rpt_type")." = 'chart'"
		." order by ".$connection->addFieldWrappers("rpt_title");

	$qResult = $connection->query( $strSQL );
	while( $row = $qResult->fetchNumeric() )
	{
		$chart_arr = $xml->xml_to_array( escapeEntities($row[4]) );
        $view = 0;
		$edit = 0;

		if ( isset($chart_arr['permissions']) ) {
			foreach ( $chart_arr['permissions'] as $arr_prm ) {
				if (in_array($arr_prm['id'], $arrUserGroup)) {
					$view = ( $arr_prm['view'] == "true" ) ? 1 : 0;
					$edit = ( $arr_prm['edit'] == "true" ) ? 1 : 0;
				}
			}
		}
		else
		{
			$view=1;
		}
		if(!$chart_arr["tmp_active"])
		{
			$arr[] = array(
				"name"		=> $row[0],
				"title"		=> $row[1],
				"owner"		=> $row[2],
				"status"	=> $row[3],
				"view"		=> $view,
				"edit"		=> $edit
			);
		}
	}

	return $arr;
}

function LoadSelectedChart($report)
{
	$connection = getWebreportConnection();// #9875

	$strSQL = "SELECT ".$connection->addFieldWrappers("rpt_content")." FROM ".$connection->addTableWrappers("webreports")
		." WHERE ".$connection->addFieldWrappers("rpt_name")."=".$connection->prepareString($report)." and ".$connection->addFieldWrappers("rpt_type")."='chart'";

	$rptContent = $connection->query( $strSQL )->fetchNumeric();
	return escapeEntities( $rptContent[0] );
}

function SaveChart($reportname, $report, $rtitle, $rstatus, $strXML, $saveas)
{
	$connection = getWebreportConnection();// #9875

	// ?????
	// if( !Security::getUserName() )
	// 	$_SESSION["UserID"] = " ";


	$reportname = GoodFieldName($reportname);
	$report = GoodFieldName($report);

	$strSQL = "SELECT ".$connection->addFieldWrappers("rpt_id")." FROM ".$connection->addTableWrappers("webreports")
		." WHERE ".$connection->addFieldWrappers("rpt_name")."=".$connection->prepareString($reportname)." and ".$connection->addFieldWrappers("rpt_type")."='chart'";

	$data =  $connection->query( $strSQL )->fetchAssoc();
	if ( $data && (!$saveas || $reportname == $report) )
	{
		$strSQL = "UPDATE ".$connection->addTableWrappers("webreports")." SET ".$connection->addFieldWrappers("rpt_name")."=".$connection->prepareString($report)
			.",".$connection->addFieldWrappers("rpt_title")."=".$connection->prepareString($rtitle)
			.", ".$connection->addFieldWrappers("rpt_content")."=".$connection->prepareString($strXML)
			.", ".$connection->addFieldWrappers("rpt_status")."=".$connection->prepareString($rstatus).", ".$connection->addFieldWrappers("rpt_mdate")."='".now()
			."' WHERE ".$connection->addFieldWrappers("rpt_name")."=".$connection->prepareString($reportname)." and ".$connection->addFieldWrappers("rpt_type")."='chart'";

		$connection->exec( $strSQL );
	}
	else
	{
		$strSQL = "INSERT INTO ".$connection->addTableWrappers("webreports")." ( ".$connection->addFieldWrappers("rpt_name")
			.", ".$connection->addFieldWrappers("rpt_title").", ".$connection->addFieldWrappers("rpt_cdate").", ".$connection->addFieldWrappers("rpt_mdate")
			.", ".$connection->addFieldWrappers("rpt_content").", ".$connection->addFieldWrappers("rpt_owner").", ".$connection->addFieldWrappers("rpt_status")
			.", ".$connection->addFieldWrappers("rpt_type")." )";

		$strSQL .= " VALUES(".$connection->prepareString($report).", ".$connection->prepareString($rtitle).", '".now()."', '".now()."'"
			.", ".$connection->prepareString($strXML).", ".$connection->prepareString( Security::getUserName() ).", ".$connection->prepareString($rstatus).", 'chart')";

		$connection->exec( $strSQL );
	}
}

function DeleteChart($report)
{
	$connection = getWebreportConnection(); // #9875

	$strSQL = "DELETE FROM ".$connection->addTableWrappers("webreports")
		." WHERE ".$connection->addFieldWrappers("rpt_name")."=".$connection->prepareString($report)." and ".$connection->addFieldWrappers("rpt_type")."='chart'";
	$connection->exec( $strSQL );
}

function GetReportsList()
{
	$connection = getWebreportConnection();// #9875

	$xml = new xml();
	$arr = array();
	$arrUserGroup = GetUserGroup();

	$strSQL = "SELECT ".$connection->addFieldWrappers("rpt_name").", ".$connection->addFieldWrappers("rpt_title").", ".$connection->addFieldWrappers("rpt_owner")
		.", ".$connection->addFieldWrappers("rpt_status").", ".$connection->addFieldWrappers("rpt_content")." FROM ".$connection->addTableWrappers("webreports")
		." WHERE ".$connection->addFieldWrappers("rpt_type")." = 'report' order by ".$connection->addFieldWrappers("rpt_title");

	$qResult = $connection->query( $strSQL );
	while( $row = $qResult->fetchNumeric() )
	{
		$report_arr = $xml->xml_to_array( escapeEntities($row[4]) );
        $view = 0;
		$edit = 0;

		if ( isset($report_arr['permissions']) ) {
			foreach ( $report_arr['permissions'] as $arr_prm ) {
				if (in_array($arr_prm['id'], $arrUserGroup)) {
					$view = ( $arr_prm['view'] == "true" ) ? 1 : 0;
					$edit = ( $arr_prm['edit'] == "true" ) ? 1 : 0;
				}
			}
		}
		else
		{
			$view=1;
		}

		if(!$report_arr["tmp_active"])
		{
			$arr[] = array(
				"name"		=> $row[0],
				"title"		=> $row[1],
				"owner"		=> $row[2],
				"status"	=> $row[3],
				"view"		=> $view,
				"edit"		=> $edit
			);
		}
	}

	return $arr;
}

function LoadSelectedReport($report)
{
	$connection = getWebreportConnection();// #9875

	$strSQL = "SELECT ".$connection->addFieldWrappers("rpt_content")." FROM ".$connection->addTableWrappers("webreports")
		." WHERE ".$connection->addFieldWrappers("rpt_name")."=".$connection->prepareString($report)." and ".$connection->addFieldWrappers("rpt_type")."='report'";

	$rptContent = $connection->query( $strSQL )->fetchNumeric();
	return escapeEntities($rptContent[0]);
}

function SaveReport($reportname, $report, $rtitle, $rstatus, $strXML, $saveas)
{
	$reportname = GoodFieldName($reportname);
	$report = GoodFieldName($report);

	// ?????
	// if( !Security::getUserName() )
	// 	$_SESSION["UserID"] = " ";

	// #9875 It's expected that webreports, webreport_style tables belong to the same db connection
	$connection = getWebreportConnection();

	$strSQL = "SELECT ".$connection->addFieldWrappers("rpt_id")." FROM ".$connection->addTableWrappers("webreports")
		." WHERE ".$connection->addFieldWrappers("rpt_name")."=".$connection->prepareString($reportname)." and ".$connection->addFieldWrappers("rpt_type")."='report'";

	$data = $connection->query( $strSQL )->fetchAssoc();
	if ( $data && (!$saveas || $reportname == $report) )
	{
		$strSQL = "UPDATE ".$connection->addTableWrappers("webreports")." SET ".$connection->addFieldWrappers("rpt_name")."=".$connection->prepareString($report)
			.", ".$connection->addFieldWrappers("rpt_title")."=".$connection->prepareString($rtitle)
			.", ".$connection->addFieldWrappers("rpt_content")."=".PrepareString4DB($strXML, $connection)
			.", ".$connection->addFieldWrappers("rpt_status")."=".$connection->prepareString($rstatus)
			.", ".$connection->addFieldWrappers("rpt_mdate")."='".now()."' WHERE ".$connection->addFieldWrappers("rpt_name")."=".$connection->prepareString($reportname)
			." and ".$connection->addFieldWrappers("rpt_type")."='report'";

		$connection->exec( $strSQL );
	}
	else
	{
		$strSQL = "INSERT INTO ".$connection->addTableWrappers("webreports")." ( ".$connection->addFieldWrappers("rpt_name")
			.", ".$connection->addFieldWrappers("rpt_title").", ".$connection->addFieldWrappers("rpt_cdate").", ".$connection->addFieldWrappers("rpt_mdate")
			.", ".$connection->addFieldWrappers("rpt_content").", ".$connection->addFieldWrappers("rpt_owner").", ".$connection->addFieldWrappers("rpt_status")
			.", ".$connection->addFieldWrappers("rpt_type")." )";
		$strSQL .= " VALUES(".$connection->prepareString($report).", ".$connection->prepareString($rtitle).", '".now()."', '".now()."', ".PrepareString4DB($strXML, $connection)
			.", ".$connection->prepareString( Security::getUserName() ).", ".$connection->prepareString($rstatus).", 'report')";

		$connection->exec( $strSQL );
	}

	$strSQL = "UPDATE ".$connection->addTableWrappers("webreport_style")." set ".$connection->addFieldWrappers("repname")."=".$connection->prepareString($report)
		." where ".$connection->addFieldWrappers("repname")."='".$_SESSION['webreports_oldname']."'";
	$connection->exec( $strSQL );
}

function DeleteReport($report)
{
	$connection = getWebreportConnection();// #9875

	$strSQL = "DELETE FROM ".$connection->addTableWrappers("webreports")." WHERE ".$connection->addFieldWrappers("rpt_name")."=".$connection->prepareString($report)
		." and ".$connection->addFieldWrappers("rpt_type")."='report'";
	$connection->exec( $strSQL );
}

function testAdvSearch($table)
{
	if(is_wr_project())
	{
		if($table=="public.MedTipoOrigen")
		{
			return 1;
		}
		if($table=="public.GestionRegistrosOrigen")
		{
			return 1;
		}
		if($table=="public.GestionRegistrosOrigen Report")
		{
			return 1;
		}
		if($table=="public.barrios")
		{
			return 1;
		}
		if($table=="public.tipos_usuarios")
		{
			return 1;
		}
		if($table=="public.residuos")
		{
			return 1;
		}
		if($table=="public.recicladores")
		{
			return 1;
		}
		if($table=="public.usuarios")
		{
			return 1;
		}
		if($table=="public.empresas_recicladoras")
		{
			return 1;
		}
		if($table=="public.gestion_pesos_residuos")
		{
			return 1;
		}
		if($table=="public.ventas")
		{
			return 1;
		}
		if($table=="public.detalles_ventas")
		{
			return 1;
		}
		if($table=="public.gestion_pesos_residuos_ven")
		{
			return 1;
		}
	}
	elseif(is_wr_db())
	{
		global $dal;
		$table_list=WRGetTablesList();
		foreach($table_list as $key=>$value)
		{
			if($table==$value)
			{
				return 1;
			}
		}
	}
	elseif(is_wr_custom())
	{
		return 1;
	}
	return 0;
}

/**
 * convert cars.Make to [cars].[Make]
 */
function WRAddFieldWrappers($field)
{
	//The default connection is temporary used #9875
	$connection = getDefaultConnection();

	$t = "";
	$f = "";
	WRSplitFieldName($field, $t, $f);

	if(!$t)
	{
		return $connection->addFieldWrappers($f);
	}
	return $connection->addTableWrappers($t).".".$connection->addFieldWrappers($f);
}

function WRSplitFieldName($str, &$table, &$field)
{
	$table="";
	$field=$str;
	$pos=strrpos($field,".");
	if($pos===false)
		return;
	$table=substr($str,0,$pos);
	$field=substr($str,$pos+1);
}

function is_groupby_chart()
{
	if(!count(@$_SESSION['webcharts']))
		return false;
	$root=&$_SESSION['webcharts'];
	if(!is_array($root["group_by_condition"]))
		return false;
	return ($root["group_by_condition"]["group_by_toggle"]=="true");
}

function WRChartLabel($str)
{
	$table="";
	$field="";
	WRSplitFieldName($str,$table,$field);
	return $field;
	if(!$table)
		return $field;
	return $table.".".$field;
}

function is_wr_db()
{
	if(@$_SESSION["webobject"]["table_type"]=="db")
		return true;
	else
		return false;
}

function is_wr_project()
{
	if(@$_SESSION["webobject"]["table_type"]=="project")
		return true;
	else
		return false;
}

function is_wr_custom()
{
	if(@$_SESSION["webobject"]["table_type"]=="custom")
		return true;
	else
		return false;
}

function WRGetTablesList()
{
	if(!isset($_SESSION["WRTableList"]))
	{
		//The default connection is temporary used #9875
		$connection = getDefaultConnection();
		$_SESSION["WRTableList"] = $connection->getTableList();
	}
	return $_SESSION["WRTableList"];
}

function WRGetFieldsList($table)
{
	if(is_wr_project()){
		$pSet = new ProjectSettings($table);
		return $pSet->getFieldsList();
	}

	if(is_wr_db())
	{
		global $wr_is_standalone;
		if(!$wr_is_standalone)
		{
			global $dal;
			if($dal->Table($table))
				return $dal->GetFieldsList($table);
		}
		return dbinfoFieldsList($table);
	}

	if(is_wr_custom())
	{
		$res = array();
		$sql = $_SESSION["object_sql"];

		//The default connection is temporary used #9875
		$connection = getDefaultConnection();
		$arr = $connection->getFieldsList($sql);

		foreach($arr as $val)
		{
			$res[] = $val["fieldname"];
		}
		return $res;
	}
}

function dbinfoFieldsList($table)
{
	if( isset($_SESSION["WRFieldList"][$table]) )
		return $_SESSION["WRFieldList"][$table];

	//The default connection is temporary used #9875
	$connection = getDefaultConnection();
	$arr = $connection->getFieldsList("select * from ".$connection->addTableWrappers($table)." where 1=0");

	$res = array();
	foreach($arr as $val)
	{
		$res[] = $val["fieldname"];
	}

	$_SESSION["WRFieldList"][$table] = $res;
	return $res;
}

function WRCustomGetFieldType($table,$field)
{
	global $conn;
	if(is_wr_project())
	{
		$pSet = new ProjectSettings($_SESSION['webreports']['tables'][0]);
		$type = $pSet->getFieldType($field);
		if($type)
			return $type;
	}
	if(is_wr_db())
	{
		global $wr_is_standalone;
		if(!$wr_is_standalone)
		{
			global $dal;
			if($dal->Table($table))
				return $dal->GetFieldType($table,$field);
		}
		return dbinfoFieldsType($table,$field);
	}

	if(is_wr_custom())
	{
		$res = "";
		$sql = $_SESSION["object_sql"];
		if($sql)
		{
			//The default connection is temporary used #9875
			$connection = getDefaultConnection();

			$arr = $connection->getFieldsList( $sql );
			foreach($arr as $val)
			{
				if($val["fieldname"] == $field)
					$res = $val["type"];
			}
		}
		return $res;
	}
}

function WRGetAllCustomFieldType()
{
	//The default connection is temporary used #9875
	$connection = getDefaultConnection();

	$res = array();
	$sql = $_SESSION["object_sql"];
	$arr = $connection->getFieldsList($sql);
	foreach($arr as $val)
	{
		$res[ $val["fieldname"] ] = $val["type"];
	}
	return $res;
}

function WRGetFieldType($fld)
{
	$table="";
	$field="";
	WRSplitFieldName($fld,$table,$field);
	return WRCustomGetFieldType($table,$field);
}

function dbinfoFieldsType($table,$field)
{
	if( isset($_SESSION["WRFieldType"][ $table ][ $field ]) )
		return $_SESSION["WRFieldType"][ $table ][ $field ];

	//The default connection is temporary used #9875
	$connection = getDefaultConnection();
	$arr = $connection->getFieldsList("select * from ".$connection->addTableWrappers($table)." where 1=0");

	$res = "";
	foreach($arr as $val)
	{
		if( $val["fieldname"] == $field )
			$res = $val["type"];

		$_SESSION["WRFieldType"][$table][$val["fieldname"]]=$val["type"]   ;
	}
	return $res;
}

function WRUseTimepicker($table,$field)
{
	return false;
}

function WRUseListLookup($table,$field)
{
	return false;
}

function getCaptionTable($table)
{
	global $strTableName;
	if(!$table)
		$table=$strTableName;
	if($table=="public.MedTipoOrigen")
	{
		return "Med Tipo Origen";
	}
	if($table=="public.GestionRegistrosOrigen")
	{
		return "Gestion Registros Origen";
	}
	if($table=="public.GestionRegistrosOrigen Report")
	{
		return "GestionRegistrosOrigen Report";
	}
	if($table=="public.barrios")
	{
		return "Barrios";
	}
	if($table=="public.tipos_usuarios")
	{
		return "Tipos Usuarios";
	}
	if($table=="public.residuos")
	{
		return "Residuos";
	}
	if($table=="public.recicladores")
	{
		return "Recicladores";
	}
	if($table=="public.usuarios")
	{
		return "Usuarios";
	}
	if($table=="public.empresas_recicladoras")
	{
		return "Empresas Recicladoras";
	}
	if($table=="public.gestion_pesos_residuos")
	{
		return "Gestion Pesos Residuos";
	}
	if($table=="public.ventas")
	{
		return "Ventas";
	}
	if($table=="public.detalles_ventas")
	{
		return "Detalles Ventas";
	}
	if($table=="public.gestion_pesos_residuos_ven")
	{
		return "Gestion Pesos Residuos Ven";
	}
	return $table;
}


function getChartTablesList()
{
	return WRGetQueryTables('webcharts');
}

function getReportTablesList()
{
	return WRGetQueryTables('webreports');
}

function WRGetQueryTables($type)
{
	$root=&$_SESSION[$type];
	$ret=array($root['tables'][0]);
	if (strlen(@$root['table_relations']["relations"]) && strpos($root['table_relations']['join_tables'], ",") !== false)
	{
		$joined = explode(",", $root['table_relations']['join_tables']);
		foreach($joined as $t)
		{
			if(strlen($t))
				$ret[]=$t;
		}
	}
	return $ret;
}

function GetDefaultViewFormat($type)
{
	if(IsBinaryType($type))
		return FORMAT_DATABASE_IMAGE;
	elseif(IsDateFieldType($type))
		return FORMAT_DATE_SHORT;
	else
		return FORMAT_NONE;
}

function GetDefaultEditFormat($type)
{
	if(IsBinaryType($type))
		return EDIT_FORMAT_DATABASE_IMAGE;
	elseif(IsDateFieldType($type))
		return EDIT_FORMAT_DATE;
	else
		return EDIT_FORMAT_TEXT_FIELD;
}

function GetGenericViewFormat($table,$field)
{
	return GetDefaultViewFormat(WRGetFieldType($table.".".$field));
}


function GetGenericEditFormat($table,$field)
{
	return GetDefaultEditFormat(WRGetFieldType($table.".".$field));
}

function GenericStrWhereAdv($strTable, $strField, $SearchFor, $strSearchOption, $SearchFor2, $etype)
{
	global $dal;
	$sfield=$strField;
	$stable="";
	if(is_wr_db())
	{
		WRSplitFieldName($strField,$stable,$sfield);
		$type=WRGetFieldType($strField);
	}
	else
		$type=WRCustomGetFieldType($strTable,$strField);

	if(GetDatabaseType() != nDATABASE_MSSQLServer)
		$ismssql=false;
	else
		$ismssql=true;

		$btexttype=IsTextType($type);
	if(GetDatabaseType() == nDATABASE_MySQL)
		$btexttype=false;

	if(IsBinaryType($type))
		return "";

	if(GetDatabaseType() == nDATABASE_MSSQLServer)
	{
		if($btexttype && $strSearchOption!="Contains" && $strSearchOption!="Starts with ..." )
			return "";
	}
	if($strSearchOption=='Empty')
	{
		if(IsCharType($type) && (!$ismssql || !$btexttype))
			return "(".WRAddFieldWrappers($strField)." is null or ".WRAddFieldWrappers($strField)."='')";
		elseif ($ismssql && $btexttype)
			return "(".WRAddFieldWrappers($strField)." is null or ".WRAddFieldWrappers($strField)." LIKE '')";
		else
			return WRAddFieldWrappers($strField)." is null";
	}
	if(GetDatabaseType() == nDATABASE_PostgreSQL)
		$like="ilike";
	else
		$like="like";
	if(GetGenericEditFormat($strTable,$sfield)==EDIT_FORMAT_LOOKUP_WIZARD)
	{
		$pSet = new ProjectSettings($strTable);
		if($pSet->multiSelect($sfield))
			$SearchFor=splitLookupValues($SearchFor);
		else
			$SearchFor=array($SearchFor);
		$ret="";
		foreach($SearchFor as $searchItem)
		{
			$value = $searchItem;
			if(!($value=="null" || $value=="Null" || $value==""))
			{
				if(strlen($ret))
					$ret.=" or ";
				if($strSearchOption=="Equals")
				{
					$value=WRmake_db_value($sfield,$value,$strTable);
					if(!($value=="null" || $value=="Null"))
						$ret.=WRAddFieldWrappers($strField).'='.$value;
				}
				else
				{
					$connection = getWebreportConnection();
					if(strpos($value,",")!==false || strpos($value,'"')!==false)
						$value = '"'.str_replace('"','""',$value).'"';
					$ret.=WRAddFieldWrappers($strField)." = ".$connection->prepareString($value);
					$ret.=" or ".WRAddFieldWrappers($strField)." ".$like." ".$connection->prepareString("%,".$value.",%");
					$ret.=" or ".WRAddFieldWrappers($strField)." ".$like." ".$connection->prepareString("%,".$value);
					$ret.=" or ".WRAddFieldWrappers($strField)." ".$like." ".$connection->prepareString($value.",%");
				}
			}
		}
		if(strlen($ret))
			$ret="(".$ret.")";
		return $ret;
	}
	if(GetGenericEditFormat($strTable,$sfield)==EDIT_FORMAT_CHECKBOX)
	{
		if($SearchFor=="none")
			return "";
		if(NeedQuotes($type))
		{
			if($SearchFor=="on")
				return "(".WRAddFieldWrappers($strField)."<>'0' and ".WRAddFieldWrappers($strField)."<>'' and ".WRAddFieldWrappers($strField)." is not null)";
			else
				return "(".WRAddFieldWrappers($strField)."='0' or ".WRAddFieldWrappers($strField)."='' or ".WRAddFieldWrappers($strField)." is null)";
		}
		else
		{
			if($SearchFor=="on")
				return "(".WRAddFieldWrappers($strField)."<>0 and ".WRAddFieldWrappers($strField)." is not null)";
			else
				return "(".WRAddFieldWrappers($strField)."=0 or ".WRAddFieldWrappers($strField)." is null)";
		}
	}
	$value1=WRmake_db_value($sfield,$SearchFor,$strTable);
	$value2=false;
	if($strSearchOption=="Between")
		$value2=WRmake_db_value($sfield,$SearchFor2,$strTable);
	if($strSearchOption!="Contains" && $strSearchOption!="Starts with ..." && ($value1==="null" || $value2==="null" ))
		return "";

	$connection = getWebreportConnection();
	if(IsCharType($type) && !$btexttype)
	{
		$value1=$connection->upper($value1);
		$value2=$connection->upper($value2);
		$strField=$connection->upper(WRAddFieldWrappers($strField));
	}
	elseif ($ismssql && !$btexttype && ($strSearchOption=="Contains" || $strSearchOption=="Starts with ..."))
		$strField="convert(varchar,".WRAddFieldWrappers($strField).")";
	elseif(GetDatabaseType() == nDATABASE_PostgreSQL && !$btexttype && ($strSearchOption=="Contains" || $strSearchOption=="Starts with ..."))
		$strField = "CAST(".WRAddFieldWrappers($strField)." AS TEXT)";
	else
		$strField=WRAddFieldWrappers($strField);
	$ret="";
	if($strSearchOption=="Contains")
	{
		if(IsCharType($type) && !$btexttype)
			return $strField." ".$like." ".$connection->upper($connection->prepareString("%".$SearchFor."%"));
		else
			return $strField." ".$like." ".$connection->prepareString("%".$SearchFor."%");
	}
	else if($strSearchOption=="Equals")
	{
		return $strField."=".$value1;
	}
	else if($strSearchOption=="Starts with ...")
	{
		if(IsCharType($type) && !$btexttype)
			return $strField." ".$like." ".$connection->upper($connection->prepareString($SearchFor."%"));
		else
			return $strField." ".$like." ".$connection->prepareString($SearchFor."%");
	}
	else if($strSearchOption=="More than ...") return $strField.">".$value1;
	else if($strSearchOption=="Less than ...") return $strField."<".$value1;
	else if($strSearchOption=="Equal or more than ...") return $strField.">=".$value1;
	else if($strSearchOption=="Equal or less than ...") return $strField."<=".$value1;
	else if($strSearchOption=="Between")
	{
		$ret=$strField.">=".$value1;
		$ret.=" and ".$strField."<=".$value2;
		return $ret;
	}
	return "";
}



function GetAdvSearchOptions($table,$field)
{
	$format=GetGenericEditFormat($table,$field);
	$options=array();
	if($format==EDIT_FORMAT_DATE)
	{
		$options[]=array("type"=>"Equals","label"=>"Equivale");
		$options[]=array("type"=>"More than ...","label"=>"Más que");
		$options[]=array("type"=>"Less than ...","label"=>"Menos que");
		$options[]=array("type"=>"Equal or more than ...","label"=>"Igual o más");
		$options[]=array("type"=>"Equal or less than ...","label"=>"Igual o menos");
		$options[]=array("type"=>"Between","label"=>"Entre");
		$options[]=array("type"=>"Empty","label"=>"Vacio");
	}
	elseif($format==EDIT_FORMAT_LOOKUP_WIZARD)
	{
		$pSet = new ProjectSettings($table, PAGE_REPORT);
		if($pSet->multiSelect($field))
			$options[]=array("type"=>"Contains","label"=>"Contiene");
		else
			$options[]=array("type"=>"Equals","label"=>"Equivale");
	}
	elseif($format==EDIT_FORMAT_TEXT_FIELD
	|| $format==EDIT_FORMAT_TEXT_AREA
	|| $format==EDIT_FORMAT_PASSWORD
	|| $format==EDIT_FORMAT_HIDDEN
	|| $format==EDIT_FORMAT_READONLY	)
	{
		$options[]=array("type"=>"Contains","label"=>"Contiene");
		$options[]=array("type"=>"Equals","label"=>"Equivale");
		$options[]=array("type"=>"Starts with ...","label"=>"Empieza con");
		$options[]=array("type"=>"More than ...","label"=>"Más que");
		$options[]=array("type"=>"Less than ...","label"=>"Menos que");
		$options[]=array("type"=>"Equal or more than ...","label"=>"Igual o más");
		$options[]=array("type"=>"Equal or less than ...","label"=>"Igual o menos");
		$options[]=array("type"=>"Between","label"=>"Entre");
		$options[]=array("type"=>"Empty","label"=>"Vacio");
	}
	else
	{
		$options[]=array("type"=>"Equals","label"=>"Equivale");
}
	return $options;
}

function CalcSearchParam( $sessPrefix )
{
	$sWhere = "";

	if(@$_SESSION[$sessPrefix."_search"]==2)
//	 advanced search
	{
		foreach(@$_SESSION[$sessPrefix."_asearchfor"] as $f => $sfor)
		{
			$strSearchFor=trim($sfor);
			$strSearchFor2="";
			$type=@$_SESSION[$sessPrefix."_asearchfortype"][$f];
			if(array_key_exists($f,@$_SESSION[$sessPrefix."_asearchfor2"]))
				$strSearchFor2=trim(@$_SESSION[$sessPrefix."_asearchfor2"][$f]);
			if($strSearchFor!="" || true)
			{
				if (!$sWhere)
				{
					if($_SESSION[$sessPrefix."_asearchtype"]=="and")
						$sWhere="1=1";
					else
						$sWhere="1=0";
				}
				$strSearchOption=trim($_SESSION[$sessPrefix."_asearchopt"][$f]);
				$where = GenericStrWhereAdv(@$_SESSION[$sessPrefix."_asearchtable"][$f], $f, $strSearchFor, $strSearchOption, $strSearchFor2,$type);
				if($where)
				{
					if($_SESSION[$sessPrefix."_asearchnot"][$f])
						$where="not (".$where.")";
					if($_SESSION[$sessPrefix."_asearchtype"]=="and")
	   					$sWhere .= " and ".$where;
					else
	   					$sWhere .= " or ".$where;
				}
			}
		}
	}
	return $sWhere;
}

function WRViewFormat($field,$table="")
{
	$pSet = new ProjectSettings($table);
	return $pSet->getViewFormat($field);
}

function get_chart_series_fields(&$arr_data_series,&$arr_label_series)
{
	if(is_groupby_chart())
		return get_chart_groupbyseries_fields($arr_data_series,$arr_label_series);
	$root=&$_SESSION['webcharts'];
	$arr_data_series=array();
	$arr_label_series=array();

	$arr_join_tables = getChartTablesList();

	for ($i=0; $i < count($arr_join_tables); $i++ )
	{
		$t = $arr_join_tables[$i];
		$arr_fields = GetNumberFieldsList($t);
		for ($j=0; $j < count($arr_fields); $j++)
		{
			if(!is_wr_custom())
				$arr_data_series[] = array("field" => $t.".".$arr_fields[$j], "label" => WRChartLabel($t.".".$arr_fields[$j]));
			else
				$arr_data_series[] = array("field" => $arr_fields[$j], "label" => WRChartLabel($arr_fields[$j]));
		}
		$arr_fields = WRGetNBFieldsList($t);
		for ($j=0; $j < count($arr_fields); $j++)
		{
			if(!is_wr_custom())
				$arr_label_series[] = array("field" => $t.".".$arr_fields[$j], "label" => WRChartLabel($t.".".$arr_fields[$j]));
			else
				$arr_label_series[] = array("field" => $arr_fields[$j], "label" => WRChartLabel($arr_fields[$j]));
		}
	}
	if(!count($arr_data_series))
		$arr_data_series = $arr_label_series;
}

function get_chart_groupbyseries_fields(&$arr_data_series,&$arr_label_series)
{
	$root=&$_SESSION['webcharts'];
	$arr_data_series=array();
	$arr_label_series=array();
	for ($i=0; $i < count($root['group_by_condition'])-1; $i++)
	{
		$arr = &$root['group_by_condition'][$i];
		$field=$arr["field_opt"];
		$strLabel=WRChartLabel($field);
		$isLabel=false;
		$isData=false;
		if($arr["group_by_value"]!="-1" && $arr["group_by_value"]!="GROUP BY")
		{
			$field=$arr["group_by_value"]."(".$field.")";
			$isData=true;
			$isLabel=true;
		}
		else if($arr["group_by_value"]=="GROUP BY")
		{
			$type = WRGetFieldType($field);
			if(IsNumberType($type))
				$isData=true;
			$isLabel=true;
		}

		$ret = array("field"=>$field,"label"=>$strLabel);
		if($isLabel)
			$arr_label_series[]=$ret;
		if($isData)
			$arr_data_series[]=$ret;
	}
	if(!count($arr_data_series))
		$arr_data_series = $arr_label_series;
}

function WRProcessLargeText($text,$field,$recid,$chars,$mode,$strLabel, $isProgectTable = false)
{
	if(!$chars)
		return $text;
	if($mode!=MODE_LIST && $mode!=MODE_PRINT || strlen($text)<$chars+10)
		return $text;

	if($isProgectTable)
		$shortening = GetShorteningForLargeText($text, $cNumberOfChars);
	else
		$shortening = substr($text,0,$chars);

	if($mode==MODE_PRINT)
	{
		return $shortening."...";
	}
//	List page
	$id="textbox_".GoodFieldName($field).$recid;
	$textbox="<span style=\"display:none\" id=\"".$id."\">".$text."</span>";
	$link="<a href=# onclick=\"

	var offset = $(this).offset();
	offset.left -= $(window).scrollLeft();
	offset.top -= $(window).scrollTop();
	$('#".$id."').clone().dialog(
	{
title: '".jsreplace($strLabel)."',
		draggable: true,
		resizable: true,
		bgiframe: true,
		modal: false,
		minheight:400,
		position:[offset.left-50,offset.top-50]
	}
	);
	return false;
	\">&nbsp;"."Más"."...</a>";
	return $shortening.$link.$textbox;
}

function JumpTo()
{
	return "$(\"#jumpto\").mouseover(function(){
		if(closetimer) {
			window.clearTimeout(closetimer);
			closetimer = null;
		}
		var jumpto = $(\"#jumpto\"), menujump = $(\"#menujump\"), framejump = $(\"#framejump\");
		if (jumpto.top + jumpto.height() + menujump.height() + $(window).scrollTop() > $(window).height()) {
			if(menujump.height() - jumpto.offset().top + $(window).scrollTop()>0)
			{
				menujump.css(\"top\", $(window).scrollTop()+\"px\");
				menujump.css(\"left\", ($(this).offset().left - 6) + \"px\");
				framejump.css(\"width\", menujump.width());
				framejump.css(\"height\", menujump.height());
				framejump.css(\"top\", $(window).scrollTop()+\"px\");
				framejump.css(\"left\", ($(this).offset().left - 1) + \"px\");
			}
			else
			{
				menujump.css(\"top\", ($(this).offset().top - menujump.height()) + \"px\");
				menujump.css(\"left\", ($(this).offset().left - 6) + \"px\");
				framejump.css(\"width\", menujump.width());
				framejump.css(\"height\", menujump.height());
				framejump.css(\"top\", ($(this).offset().top - framejump.height()) + \"px\");
				framejump.css(\"left\", ($(this).offset().left - 1) + \"px\");
			}
		} else {
			menujump.css(\"top\", ($(this).offset().top + $(this).height()) + \"px\");
			menujump.css(\"left\", ($(this).offset().left - 6) + \"px\");
			framejump.css(\"width\", menujump.width());
			framejump.css(\"height\", menujump.height());
			framejump.css(\"top\", ($(this).offset().top + $(this).height()) + \"px\");
			framejump.css(\"left\", ($(this).offset().left - 1) + \"px\");
		}
		framejump.show();
		menujump.show();
	});

	$(\"#jumpto\").mouseout(function(){
		closetimer = window.setTimeout(\"$('#menujump').hide();$('#framejump').hide();\", timeout);
	});

	$(\"#menujump td\").mouseover(function(){
		if(closetimer) {
			window.clearTimeout(closetimer);
			closetimer = null;
		}
	});

	$(\"#menujump td\").mouseout(function(){
		closetimer = window.setTimeout(\"$('#menujump').hide();$('#framejump').hide();\", timeout);
	});

	$(document.body).click(function(){
		$(\"#menujump\").hide();
		$(\"#framejump\").hide();
	});	";
}

function alertDialog()
{
return	"$(\"#alert\").dialog({
		open: function(event,ui){
			var alertParent = $(\"#alert\").parent(\".ui-dialog\"), aframe = $(\"#aframe\");
			w = alertParent.width();
			h = alertParent.height();
			t = alertParent.offset().top;
			l = alertParent.offset().left;
			aframe.css(\"width\",w+6);
			aframe.css(\"height\",h+6);
			aframe.css(\"top\",t + \"px\");
			aframe.css(\"left\",l + \"px\");
			aframe.show();
		},
		beforeclose: function(event,ui){
			$(\"#aframe\").hide();
		},
		title: \"Message\",
		draggable: false,
		resizable: false,
		bgiframe: true,
		autoOpen: false,
		modal: true,
		buttons: {
			Ok: function() {
				$(this).dialog(\"close\");
			}
		}
	});";
}

function DBGetTableKeys($table)
{
	global $dal,$wr_is_standalone;
	if(!$wr_is_standalone)
	{
		if($dal->Table($table))
			return $dal->GetDBTableKeys($table);
		return array();
	}
	else
		return array();
}

function colorPickerMouse()
{
return "

function GiveDec(Hex)
{
   if(Hex == \"A\")
	  Value = 10;
   else
   if(Hex == \"B\")
	  Value = 11;
   else
   if(Hex == \"C\")
	  Value = 12;
   else
   if(Hex == \"D\")
	  Value = 13;
   else
   if(Hex == \"E\")
	  Value = 14;
   else
   if(Hex == \"F\")
	  Value = 15;
   else
	  Value = eval(Hex);

   return Value;
}

function GiveHex(Dec)
{
   if(Dec == 10)
	  Value = \"A\";
   else
   if(Dec == 11)
	  Value = \"B\";
   else
   if(Dec == 12)
	  Value = \"C\";
   else
   if(Dec == 13)
	  Value = \"D\";
   else
   if(Dec == 14)
	  Value = \"E\";
   else
   if(Dec == 15)
	  Value = \"F\";
   else
	  Value = \"\" + Dec;

   return Value;
}

function HexToDec(value)
{
   Input = value.toUpperCase();

   a = GiveDec(Input.substring(0, 1));
   b = GiveDec(Input.substring(1, 2));
   c = GiveDec(Input.substring(2, 3));
   d = GiveDec(Input.substring(3, 4));
   e = GiveDec(Input.substring(4, 5));
   f = GiveDec(Input.substring(5, 6));

   x = (a * 16) + b; // Red
   y = (c * 16) + d; // Green
   z = (e * 16) + f; // Blue

	return [x,y,z]
}

function DecToHex(Red, Green, Blue)
{
   a = GiveHex(Math.floor(Red / 16));
   b = GiveHex(Red % 16);
   c = GiveHex(Math.floor(Green / 16));
   d = GiveHex(Green % 16);
   e = GiveHex(Math.floor(Blue / 16));
   f = GiveHex(Blue % 16);

   z = a + b + c + d + e + f;

	return z;
}

function rgbToHex(str)
{
	if(str==undefined)
		return \"\";
	if(str.substr(0,1)==\"#\")
		return str.substr(1);
	str=str.substring(4);
	str=str.replace(\")\",\"\");
	arr = new Array();
	arr=str.split(\",\");
	return DecToHex(arr[0],arr[1],arr[2]);
}

	$(\".ColorPickerDivSample\").css(\"cursor\",\"pointer\");

	$(\"#colorPickerVtd td\").each(function(){
        $(this).css(\"border\",\"1px solid \" + $(this).css(\"backgroundColor\"));
    })
		.css(\"cursor\",\"pointer\");

	$(\".selector,.ColorPickerDivSample\").click(function(){
	    click_color_event(this);
	});

	$(\"#colorPickerVtd\").mouseover(function(){
		if(closetimerpicker) {
			window.clearTimeout(closetimerpicker);
			closetimerpicker = null;
		}
	}).mouseout(function(){
		closetimerpicker = window.setTimeout(function (){
				$('#colorPickerVtd').hide();
				$(\"div.ColorPickerDivSample.active\").css(\"background-color\", $(\"div.ColorPickerDivSample.active\").attr(\"color1\"));
			}, timeoutpicker);
	});

	$(\"#colorPickerVtd td\").mouseover(function(){
		if(closetimerpicker) {
			window.clearTimeout(closetimerpicker);
			closetimerpicker = null;
		}
		$(this).css(\"border\", \"1px dotted #fff\");
		$(\"div.ColorPickerDivSample.active\").css(\"background-color\", $(this).css(\"background-color\"));
	});

	$(\"#colorPickerVtd td\").mouseout(function(){
		$(this).css(\"border\", \"1px solid \"+$(\"div.ColorPickerDivSample.active\").css(\"background-color\"));
	});

	$(\"#colorPickerVtd td\").click(function(){
		if ( this.id == \"nocolor\" ) {
			$(\"div.ColorPickerDivSample.active\").attr(\"color1\", \"\");
			$(\"div.ColorPickerDivSample.active\").attr(\"color2\", \"\");
		} else {
			bgcol=$(this).css(\"backgroundColor\");
			if(bgcol.substring(0,1)!=\"#\")
				bgcol=rgbToHex(bgcol);
			else
				bgcol=bgcol.substring(1);
			$(\"div.ColorPickerDivSample.active\").attr(\"color1\", bgcol);
			arr = HexToDec(bgcol);
			red = parseInt( arr[0] * 0.85 );
			green = parseInt( arr[1] * 0.85 );
			blue = parseInt( arr[2] * 0.85 );
			hex = DecToHex( red, green, blue );
			$(\"div.ColorPickerDivSample.active\").attr(\"color2\", hex);
		}
		$(\"#colorPickerVtd\").hide();
	});

	function click_color_event(th)
	{
		if($(th).css(\"cursor\")==\"pointer\")
	    {
			if(closetimerpicker) {
				window.clearTimeout(closetimerpicker);
				closetimerpicker = null;
		}
		if($(th).attr(\"class\")==\"selector\")
			bc=$(th).parents(\"td:first\").prev(\"td\").find(\"div.ColorPickerDivSample\").css(\"background-color\");
		else
			bc=$(th).parents(\"td:first\").find(\"div.ColorPickerDivSample\").css(\"background-color\");

		var activeDiv = $(\"div.ColorPickerDivSample.active\"), colorPicker = $(\"#colorPickerVtd\");
		if(activeDiv.length){
			activeDiv.css(\"background-color\", activeDiv.attr(\"color1\"));
			activeDiv.removeClass(\"active\");
		}

		if($(th).attr(\"class\")==\"selector\")
			$(th).parents(\"td:first\").prev(\"td\").find(\"div.ColorPickerDivSample\").addClass(\"active\");
		else
			$(th).parents(\"td:first\").find(\"div.ColorPickerDivSample\").addClass(\"active\");


		colorPicker.css(\"top\", $(th).offset().top + \"px\");
		colorPicker.css(\"left\", $(th).offset().left + $(th).width() + 3 + \"px\");
		colorPicker.show();
		$(\"td\", colorPicker).each(function(){
			$(this).css(\"border\", \"1px solid \"+$(this).css(\"background-color\"));
			if(bc==$(this).css(\"background-color\"))
				$(this).css(\"border\", \"1px dotted #fff\");
		});
	    }
	}

	";
}

function MoveTdTotal()
{
return "
function total_td_move(th,direct)
{
	tr=$(th).parent().parent().parent();

	if(direct==\"up\")
		tr2=$(tr).prev();
	else
		tr2=$(tr).next();
	// || $(tr2).find(\"td\").eq(3).find(\"input\").get(0).type=='checkbox'
	if(!$(tr2).find(\"td\").eq(3).find(\"input\").get(0) || $(tr2).find(\"td\").eq(3).find(\"input\").get(0).disabled)
		tr2=\"\";
	if(tr2!=\"\")
	{
		if(direct==\"up\")
			$(tr).insertBefore(tr2);
		else
			$(tr).insertAfter(tr2);
	}
}";
}

/**
 * @param String str
 * @param Connection connection
 * @return String
 */
function PrepareString4DB($str, $connection)
{
	if($connection->dbType != nDATABASE_Oracle)
	{
		return $connection->prepareString($str);
	}

	if( strlen($str) < 4000 )
		return $connection->prepareString($str);

	$chunklen = 3900;
	$chunks = floor(strlen($str) / $chunklen);
	if( strlen($str) % $chunklen != 0 )
		$chunks++;

	$out = "";
	for($i = 0; $i < $chunks; $i++)
	{
		if(strlen($out))
			$out.="||";

		$out.="to_clob(";
		$out.= $connection->prepareString( substr($str, $i*$chunklen, $chunklen) );
		$out.=")";
	}
	return $out;
}

function WRmake_db_value($field,$value,$table="")
{
	$ret=WRprepare_for_db($field,$value,$table);

	if($ret===false)
		return $ret;
	return WRadd_db_quotes($field,$ret,$table);
}

function WRadd_db_quotes($field,$value,$table="")
{
	$connection = getWebreportConnection();

	$type = WRGetFieldType($table.".".$field);
	if(IsBinaryType($type))
	{
		return $connection->addSlashesBinary($value);
	}
	if(($value==="" || $value===FALSE) && !IsCharType($type))
		return "null";
	if(NeedQuotes($type))
	{
		if(!IsDateFieldType($type))
			$value=$connection->prepareString($value);
		else
			$value=$connection->addDateQuotes($value);
	}
	else
	{
		$strvalue = (string)$value;
		$strvalue = str_replace(",",".",$strvalue);
		if(is_numeric($strvalue))
			$value=$strvalue;
		else
			$value=0;
	}
	return $value;
}

function WRprepare_for_db($field,$value,$table="")
{
	$type=WRGetFieldType($table.".".$field);
	if(is_array($value))
		$value=combinevalues($value);
	if(($value==="" || $value===FALSE) && !IsCharType($type))
		return "";
	if(IsDateFieldType($type))
		$value=localdatetime2db($value);
	return $value;
}

function DBGetTablesList()
{
	global $dal;
	$tables = WRGetTablesList();
	$ret=array();

	foreach($tables as $value)
	{
		$val_lower=wr_getTableName(strtolower($value));
		if(substr($val_lower,-6)!="_audit" && substr($val_lower,-8)!="_locking" && substr($val_lower,-9)!="_ugrights" && substr($val_lower,-9)!="_uggroups"
		&& substr($val_lower,-10)!="_ugmembers" && $val_lower!="admin_rights" && $val_lower!="admin_users"
		&& $val_lower!="admin_members" && $val_lower!="webreports" && $val_lower!="webreport_style"
		&& $val_lower!="webreport_admin" && $val_lower!="webreport_settings" && $val_lower!="webreport_sql")
			$ret[]=$value;
	}
	return $ret;
}

function WRGetTableListAdmin($db_type)
{
	$connection = getWebreportConnection();// #9875

	$ret = array();
	$sql = "select ".$connection->addFieldWrappers("tablename").",".$connection->addFieldWrappers("group_name")
		." from ".$connection->addTableWrappers("webreport_admin")." where ".$connection->addFieldWrappers("db_type")."='".$db_type."'" ;

	$qResult = $connection->query( $sql );
	while( $data = $qResult->fetchNumeric() )
	{
		$ret[] = array("tablename" => $data[0], "group" => $data[1]);
	}
	return $ret;
}

function GetTablesListReport()
{
	$arr=array();
	$securityFlag = true;
	$strPerm = GetUserPermissions("public.MedTipoOrigen");
	$securityFlag = strpos($strPerm, "P") !== false || strpos($strPerm, "S") !== false;
	if($securityFlag)
	{
		$value="public.MedTipoOrigen";
		if(substr($value,-6)!="_audit" && substr($value,-8)!="_locking" && substr($value,-9)!="_ugrights" && substr($value,-9)!="_uggroups"
		&& substr($value,-10)!="_ugmembers" && $value!="admin_rights" && $value!="admin_users"
		&& $value!="admin_members" && $value!="webreports" && $value!="webreport_style" && $value!="webreport_settings" && $value!="webreport_admin" && $value!="webreport_sql")
			$arr[]="public.MedTipoOrigen";
	}
	$strPerm = GetUserPermissions("public.GestionRegistrosOrigen");
	$securityFlag = strpos($strPerm, "P") !== false || strpos($strPerm, "S") !== false;
	if($securityFlag)
	{
		$value="public.GestionRegistrosOrigen";
		if(substr($value,-6)!="_audit" && substr($value,-8)!="_locking" && substr($value,-9)!="_ugrights" && substr($value,-9)!="_uggroups"
		&& substr($value,-10)!="_ugmembers" && $value!="admin_rights" && $value!="admin_users"
		&& $value!="admin_members" && $value!="webreports" && $value!="webreport_style" && $value!="webreport_settings" && $value!="webreport_admin" && $value!="webreport_sql")
			$arr[]="public.GestionRegistrosOrigen";
	}
	$strPerm = GetUserPermissions("public.barrios");
	$securityFlag = strpos($strPerm, "P") !== false || strpos($strPerm, "S") !== false;
	if($securityFlag)
	{
		$value="public.barrios";
		if(substr($value,-6)!="_audit" && substr($value,-8)!="_locking" && substr($value,-9)!="_ugrights" && substr($value,-9)!="_uggroups"
		&& substr($value,-10)!="_ugmembers" && $value!="admin_rights" && $value!="admin_users"
		&& $value!="admin_members" && $value!="webreports" && $value!="webreport_style" && $value!="webreport_settings" && $value!="webreport_admin" && $value!="webreport_sql")
			$arr[]="public.barrios";
	}
	$strPerm = GetUserPermissions("public.tipos_usuarios");
	$securityFlag = strpos($strPerm, "P") !== false || strpos($strPerm, "S") !== false;
	if($securityFlag)
	{
		$value="public.tipos_usuarios";
		if(substr($value,-6)!="_audit" && substr($value,-8)!="_locking" && substr($value,-9)!="_ugrights" && substr($value,-9)!="_uggroups"
		&& substr($value,-10)!="_ugmembers" && $value!="admin_rights" && $value!="admin_users"
		&& $value!="admin_members" && $value!="webreports" && $value!="webreport_style" && $value!="webreport_settings" && $value!="webreport_admin" && $value!="webreport_sql")
			$arr[]="public.tipos_usuarios";
	}
	$strPerm = GetUserPermissions("public.residuos");
	$securityFlag = strpos($strPerm, "P") !== false || strpos($strPerm, "S") !== false;
	if($securityFlag)
	{
		$value="public.residuos";
		if(substr($value,-6)!="_audit" && substr($value,-8)!="_locking" && substr($value,-9)!="_ugrights" && substr($value,-9)!="_uggroups"
		&& substr($value,-10)!="_ugmembers" && $value!="admin_rights" && $value!="admin_users"
		&& $value!="admin_members" && $value!="webreports" && $value!="webreport_style" && $value!="webreport_settings" && $value!="webreport_admin" && $value!="webreport_sql")
			$arr[]="public.residuos";
	}
	$strPerm = GetUserPermissions("public.recicladores");
	$securityFlag = strpos($strPerm, "P") !== false || strpos($strPerm, "S") !== false;
	if($securityFlag)
	{
		$value="public.recicladores";
		if(substr($value,-6)!="_audit" && substr($value,-8)!="_locking" && substr($value,-9)!="_ugrights" && substr($value,-9)!="_uggroups"
		&& substr($value,-10)!="_ugmembers" && $value!="admin_rights" && $value!="admin_users"
		&& $value!="admin_members" && $value!="webreports" && $value!="webreport_style" && $value!="webreport_settings" && $value!="webreport_admin" && $value!="webreport_sql")
			$arr[]="public.recicladores";
	}
	$strPerm = GetUserPermissions("public.usuarios");
	$securityFlag = strpos($strPerm, "P") !== false || strpos($strPerm, "S") !== false;
	if($securityFlag)
	{
		$value="public.usuarios";
		if(substr($value,-6)!="_audit" && substr($value,-8)!="_locking" && substr($value,-9)!="_ugrights" && substr($value,-9)!="_uggroups"
		&& substr($value,-10)!="_ugmembers" && $value!="admin_rights" && $value!="admin_users"
		&& $value!="admin_members" && $value!="webreports" && $value!="webreport_style" && $value!="webreport_settings" && $value!="webreport_admin" && $value!="webreport_sql")
			$arr[]="public.usuarios";
	}
	$strPerm = GetUserPermissions("public.empresas_recicladoras");
	$securityFlag = strpos($strPerm, "P") !== false || strpos($strPerm, "S") !== false;
	if($securityFlag)
	{
		$value="public.empresas_recicladoras";
		if(substr($value,-6)!="_audit" && substr($value,-8)!="_locking" && substr($value,-9)!="_ugrights" && substr($value,-9)!="_uggroups"
		&& substr($value,-10)!="_ugmembers" && $value!="admin_rights" && $value!="admin_users"
		&& $value!="admin_members" && $value!="webreports" && $value!="webreport_style" && $value!="webreport_settings" && $value!="webreport_admin" && $value!="webreport_sql")
			$arr[]="public.empresas_recicladoras";
	}
	$strPerm = GetUserPermissions("public.gestion_pesos_residuos");
	$securityFlag = strpos($strPerm, "P") !== false || strpos($strPerm, "S") !== false;
	if($securityFlag)
	{
		$value="public.gestion_pesos_residuos";
		if(substr($value,-6)!="_audit" && substr($value,-8)!="_locking" && substr($value,-9)!="_ugrights" && substr($value,-9)!="_uggroups"
		&& substr($value,-10)!="_ugmembers" && $value!="admin_rights" && $value!="admin_users"
		&& $value!="admin_members" && $value!="webreports" && $value!="webreport_style" && $value!="webreport_settings" && $value!="webreport_admin" && $value!="webreport_sql")
			$arr[]="public.gestion_pesos_residuos";
	}
	$strPerm = GetUserPermissions("public.ventas");
	$securityFlag = strpos($strPerm, "P") !== false || strpos($strPerm, "S") !== false;
	if($securityFlag)
	{
		$value="public.ventas";
		if(substr($value,-6)!="_audit" && substr($value,-8)!="_locking" && substr($value,-9)!="_ugrights" && substr($value,-9)!="_uggroups"
		&& substr($value,-10)!="_ugmembers" && $value!="admin_rights" && $value!="admin_users"
		&& $value!="admin_members" && $value!="webreports" && $value!="webreport_style" && $value!="webreport_settings" && $value!="webreport_admin" && $value!="webreport_sql")
			$arr[]="public.ventas";
	}
	$strPerm = GetUserPermissions("public.detalles_ventas");
	$securityFlag = strpos($strPerm, "P") !== false || strpos($strPerm, "S") !== false;
	if($securityFlag)
	{
		$value="public.detalles_ventas";
		if(substr($value,-6)!="_audit" && substr($value,-8)!="_locking" && substr($value,-9)!="_ugrights" && substr($value,-9)!="_uggroups"
		&& substr($value,-10)!="_ugmembers" && $value!="admin_rights" && $value!="admin_users"
		&& $value!="admin_members" && $value!="webreports" && $value!="webreport_style" && $value!="webreport_settings" && $value!="webreport_admin" && $value!="webreport_sql")
			$arr[]="public.detalles_ventas";
	}
	$strPerm = GetUserPermissions("public.gestion_pesos_residuos_ven");
	$securityFlag = strpos($strPerm, "P") !== false || strpos($strPerm, "S") !== false;
	if($securityFlag)
	{
		$value="public.gestion_pesos_residuos_ven";
		if(substr($value,-6)!="_audit" && substr($value,-8)!="_locking" && substr($value,-9)!="_ugrights" && substr($value,-9)!="_uggroups"
		&& substr($value,-10)!="_ugmembers" && $value!="admin_rights" && $value!="admin_users"
		&& $value!="admin_members" && $value!="webreports" && $value!="webreport_style" && $value!="webreport_settings" && $value!="webreport_admin" && $value!="webreport_sql")
			$arr[]="public.gestion_pesos_residuos_ven";
	}
	return $arr;
}

function GetTablesListCustom()
{
	$connection = getWebreportConnection();// #9875
	$arr = array();

	$qResult = $connection->query( "select * from ".$connection->addTableWrappers("webreport_sql")." order by ".$connection->addFieldWrappers("sqlname") );
	while( $data = $qResult->fetchAssoc() )
	{
		$arr[] = array("sqlname" => $data["sqlname"], "isStorProc" => IsStoredProcedure($data["sqlcontent"]));
	}
	return $arr;
}

function DBGetTablesListByGroup($db="db")
{
	if($db=="db")
		$tables = DBGetTablesList();
	elseif($db=="project")
		$tables = GetTablesListReport();
	else
		$tables = GetTablesListCustom();
	$ret=array();
	if($db=="db")
		$tables_admin = WRGetTableListAdmin("db");
	elseif($db=="project")
		$tables_admin = WRGetTableListAdmin("project");
	else
		$tables_admin = WRGetTableListAdmin("custom");

	$userGroups = GetUserGroup();

//	all tables
	foreach($tables as $table_name)
	{
		if($db=="custom")
			$tablename=$table_name["sqlname"];
		else
			$tablename=$table_name;
//	permissions
		foreach($tables_admin as $tablerights)
		{
			if($tablerights["tablename"]!=$tablename)
				continue;
//	user groups
			$found=false;
			if(!count($userGroups))
			{
//	no groups at all
				$found=true;
			}
			elseif($tablerights["group"]=="")
			{
//	initial table initialization
				$found=true;
			}
			else
			{
				foreach($userGroups as $group)
				{
					if((string)$group == $tablerights["group"])
					{
						$found=true;
						break;
					}
				}
			}
			if($found)
			{
				$ret[]=$table_name;
				break;
			}
		}
	}
	return $ret;
}

function isWRAdmin()
{
	$sUserGroup=@$_SESSION["GroupID"];
	if($sUserGroup=="2")
	{
				return false;
	}
	if($sUserGroup=="1")
	{
				return true;
	}
}

function sortUserGroup($a,$b)
{
	if($a[1]<$b[1])
		return -1;
	else
		return 1;
}

function Convert_Old_Chart($arr)
{
	switch($arr["chart_type"]["type"])
	{
		case "3d_column":
			$arr["chart_type"]["type"]="2d_column";
			$arr["appearance"]["is3d"]="true";
			$arr["appearance"]["isstacked"]="false";
			break;
		case "3d_bar":
			$arr["chart_type"]["type"]="2d_bar";
			$arr["appearance"]["is3d"]="true";
			$arr["appearance"]["isstacked"]="false";
			break;
		case "3d_column_stacked":
			$arr["chart_type"]["type"]="2d_column";
			$arr["appearance"]["is3d"]="true";
			$arr["appearance"]["isstacked"]="true";
			break;
		case "3d_bar_stacked":
			$arr["chart_type"]["type"]="2d_bar";
			$arr["appearance"]["is3d"]="true";
			$arr["appearance"]["isstacked"]="true";
			break;
		case "2d_column_stacked":
			$arr["chart_type"]["type"]="2d_column";
			$arr["appearance"]["isstacked"]="true";
			$arr["appearance"]["is3d"]="false";
			break;
		case "2d_column":
			$arr["chart_type"]["type"]="2d_column";
			if(!isset($arr["appearance"]["isstacked"]))
				$arr["appearance"]["isstacked"]="false";
			if(!isset($arr["appearance"]["is3d"]))
				$arr["appearance"]["is3d"]="false";
			break;
		case "2d_bar_stacked":
			$arr["chart_type"]["type"]="2d_bar";
			$arr["appearance"]["isstacked"]="true";
			$arr["appearance"]["is3d"]="false";
			break;
		case "2d_bar":
			$arr["chart_type"]["type"]="2d_bar";
			if(!isset($arr["appearance"]["isstacked"]))
				$arr["appearance"]["isstacked"]="false";
			if(!isset($arr["appearance"]["is3d"]))
				$arr["appearance"]["is3d"]="false";
			break;
		case "line":
			$arr["chart_type"]["type"]="line";
			if(!isset($arr["appearance"]["linestyle"]))
				$arr["appearance"]["linestyle"]=0;
			break;
		case "spline":
			$arr["chart_type"]["type"]="line";
			$arr["appearance"]["linestyle"]=1;
			break;
		case "step_line":
			$arr["chart_type"]["type"]="line";
			$arr["appearance"]["linestyle"]=2;
			break;
		case "area_stacked":
			$arr["chart_type"]["type"]="area";
			$arr["appearance"]["isstacked"]="true";
			break;
	}
	if(!isset($arr['appearance']["cscroll"]))
	{
		$arr['appearance']["cscroll"]="true";
		$arr['appearance']["autoupdate"]="false";
		$arr['appearance']["maxbarscroll"]="10";
		$arr['appearance']["update_interval"]="5";
	}

	for($i=0;$i<4;$i++)
	{
		if(isset($arr['appearance']['color'.($i+1).'1']))
			$arr['parameters'][$i]['series_color']=$arr['appearance']['color'.($i+1).'1'];
	}
	return $arr;
}

function WRGetListCustomSQL()
{
	$connection = getWebreportConnection();// #9875

	$arr = array();

	$qResult = $connection->query( "select * from ".$connection->addTableWrappers("webreport_sql")." order by ".$connection->addFieldWrappers("sqlname") );
	while( $data = $qResult->fetchAssoc() )
	{
		$arr[] = array("id" => $data["id"], "sqlname" => $data["sqlname"], "sqlcontent" => $data["sqlcontent"]);
	}
	return $arr;
}

function WRgetCurrentCustomSQL($id)
{
	if( !$id )
		return array(0, "", "");

	$connection = getWebreportConnection();	// #9875

	$sql = "select * from ".$connection->addTableWrappers("webreport_sql")." where ".$connection->addFieldWrappers("id")."=".$id;
	$data = $connection->query( $sql )->fetchAssoc();
	if( count($data) )
		return array($data["id"], $data["sqlname"], $data["sqlcontent"]);

	return "";
}

function getCustomSQLbyName($sqlname)
{
	$connection = getWebreportConnection();// #9875

	$sql = "select * from ".$connection->addTableWrappers("webreport_sql")." where ".$connection->addFieldWrappers("sqlname")."='".$sqlname."'";
	$data = $connection->query( $sql )->fetchAssoc();
	if( count($data) )
		return array($data["id"], $data["sqlname"], $data["sqlcontent"]);

	return "";
}

function update_report_totals()
{
	$root=&$_SESSION["webreports"];
//	ensure all fields in reports are listed in the tables
	$tables=getReportTablesList();
	if(is_wr_custom())
		$fields = WRGetFieldsList('');
	$arr_unset=array();
	foreach($root["totals"] as $idx=>$fld)
	{
		if(array_search($fld["table"],$tables)!==false || is_null($fld["table"]) && is_wr_custom())
		{
			if(!is_wr_custom())
				$fields = WRGetFieldsList($fld["table"]);
			if(array_search($fld["name"], $fields)!==false)
				continue;
		}
//	remove $total if found
		$arr_unset[]=$idx;
	}
	foreach($arr_unset as $idx=>$fld)
	{
		unset($root["totals"][$fld]);
	}

//	ensure all fields appear in the totals
	$all_fields=array();
	foreach($tables as $t)
	{
		$fields=WRGetFieldsList($t);
		foreach($fields as $f)
		{
			if(is_wr_db())
				$all_fields[]=$t.".".$f;
			else
				$all_fields[]=$f;
		}
	}

//	ensure all series  fields appear in the totals
	foreach($all_fields as $fieldItem)
	{
		$f = $fieldItem;
		$table="";
		$fld="";
		if(is_wr_db())
			WRSplitFieldName($f,$table,$fld);
		else
		{
			$table=$tables[0];
			$fld=$f;
			$f=$table."_".$f;
		}
		if(array_key_exists(GoodFieldName($f),$root["totals"]))
			continue;
		$pSet = new ProjectSettings($table, PAGE_LIST);
        $root['totals'][GoodFieldName($f)] = array();
        $root['totals'][GoodFieldName($f)]["name"] = $fld;
        $root['totals'][GoodFieldName($f)]["table"] = $table;
		$root['totals'][GoodFieldName($f)]["label"] = $pSet->label($fld);
        $root['totals'][GoodFieldName($f)]["show"] = "true";
        $root['totals'][GoodFieldName($f)]["min"] = "false";
        $root['totals'][GoodFieldName($f)]["max"] = "false";
        $root['totals'][GoodFieldName($f)]["sum"] = "false";
        $root['totals'][GoodFieldName($f)]["avg"] = "false";
		$root['totals'][GoodFieldName($f)]["curr"] = "false";
        $root['totals'][GoodFieldName($f)]["search"] = "";
        $root['totals'][GoodFieldName($f)]["view_format"] = GetGenericViewFormat($table, $fld);
        $root['totals'][GoodFieldName($f)]["edit_format"] = GetGenericEditFormat($table, $fld);
        $root['totals'][GoodFieldName($f)]["display_field"] = $pSet->getDisplayField($fld);
        $root['totals'][GoodFieldName($f)]["linkfield"] = $pSet->getLinkField($fld);
        $root['totals'][GoodFieldName($f)]["show_thumbnail"] = $pSet->showThumbnail($fld);
        $root['totals'][GoodFieldName($f)]["need_encode"] = $pSet->NeedEncode($fld);
        $root['totals'][GoodFieldName($f)]["thumbnail"] = $pSet->getStrThumbnail($fld);
        $root['totals'][GoodFieldName($f)]["listformatobj_imgwidth"] = $pSet->getImageWidth($fld);
        $root['totals'][GoodFieldName($f)]["listformatobj_imgheight"] = $pSet->getImageHeight($fld);
        $root['totals'][GoodFieldName($f)]["hlprefix"] = $pSet->getLinkPrefix($fld);
        $root['totals'][GoodFieldName($f)]["listformatobj_filename"] = $pSet->getFilenameField($fld);
        $root['totals'][GoodFieldName($f)]["lookupobj_lookuptype"] = $pSet->getLookupType($fld);
        $root['totals'][GoodFieldName($f)]["editformatobj_lookupobj_customdispaly"] = $pSet->getDisplayField($fld);
        $root['totals'][GoodFieldName($f)]["editformatobj_lookupobj_table"] = $pSet->getLookupTable($fld);
        $root['totals'][GoodFieldName($f)]["editformatobj_lookupobj_where"] = prepareLookupWhere( $fld, $pSet );
	}
	$_SESSION["webreports"]=$root;
}

function Reload_Report($name)
{
	if(!$name)
	{
		if(isset($_SESSION['webreports']))
			return true;
		else
			HeaderRedirect("webreport");
	}
	if(postvalue("edit")=="style" && isset($_SESSION['webreports']))
		return true;
	$arr=getReportArray($name);
	if(!count($arr))
		HeaderRedirect("webreport");
	if(!$arr["table_type"])
		if($arr["db_based"])
			$arr["table_type"]="db";
		else
			$arr["table_type"]="project";
	$_SESSION['webreports'] = $arr;
	$_SESSION["webobject"]["table_type"]=$_SESSION['webreports']["table_type"];
	$_SESSION["webobject"]["name"]=$_SESSION['webreports']['settings']['name'];
}

function Reload_Chart($name)
{
	if(!$name)
	{
		if(isset($_SESSION['webcharts']))
			return true;
		else
			HeaderRedirect("webreport");
	}
	$arr=getChartArray($name);
	if(!count($arr))
		HeaderRedirect("webreport");
	if(!$arr["table_type"])
		if($arr["db_based"])
			$arr["table_type"]="db";
		else
			$arr["table_type"]="project";
	$_SESSION['webcharts'] = $arr;
	$_SESSION["webobject"]["table_type"]=$_SESSION['webcharts']["table_type"];
	$_SESSION["webobject"]["name"]=$_SESSION['webcharts']['settings']['name'];
}

function wr_getTableName($name)
{
	$pos = strrpos($name,".");
	if($pos !== false)
		$name = substr($name, $pos+1);
	return $name;
}

/**
 * Get the conneciton object corresponding to the wizard werbreport tables
 * @return Connetion
 */
function getWebreportConnection()
{
	global $cman;
	return $cman->getForWebReports();
}

/**
 * @param xTempl xt
 * @param String prefix
 */
function SetWRLangVars($xt, $prefix)
{
	$xt->assign("lang_label", true);

	$var = GoodFieldName( mlang_getcurrentlang() )."_langattrs";
	$xt->assign($var, "selected");

	$is508 = isEnableSection508();
	if($is508)
		$xt->assign_section("lang_label","<label for=\"lang\">","</label>");

	$xt->assign("langselector_attrs","name=lang ".($is508==true ? "id=\"lang\" " : "")
		."onchange=\"javascript: window.location='".GetTableLink($prefix)."?language='+this.options[this.selectedIndex].value\"");
}

/**
 * @param String tName
 * @param Array sortFields
 * @param ProjectSettings pSet
 * @param Boolean editmode
 * @return DsCommand
 */
function getProjectWRSubsetDataCommand( $tName, &$sortFields, $pSet, $editmode = false ) {
	$subsetDataCommand = new DsCommand();

	$subsetDataCommand->order = array();
	foreach ( $sortFields as $field ) {
		$subsetDataCommand->order[] = array( "column" => $field['name'], "dir" => $field['desc'] ? "DESC" : "ASC" );
	}

	$subsetDataCommand->filter = Security::SelectCondition( "S", $pSet );

	if ( !$editmode ) {
		/*$cipherer = new RunnerCipherer( $tName );

		$params = array();
		$params['tName'] = $tName;
		$params['cipherer'] = $cipherer;
		$params['searchFieldsArr'] = WRGetFieldsList( $tName );

		$searchClauseObj = new SearchClause( $params );
		$searchClauseObj->parseRequest();*/
		;

		$searchClauseObj = SearchClause::getSearchObject( $tName );
		$searchClauseObj->searchFieldsArr = WRGetFieldsList( $tName );

		$subsetDataCommand->filter = DataCondition::_And( array(
			$subsetDataCommand->filter,
			$searchClauseObj->getSearchDataCondition()
		));
	}

	return $subsetDataCommand;
}
?>