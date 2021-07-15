<?php

/**
* getLookupMainTableSettings - tests whether the lookup link exists between the tables
*
*  returns array with ProjectSettings class for main table if the link exists in project settings.
*  returns NULL otherwise
*/
function getLookupMainTableSettings($lookupTable, $mainTableShortName, $mainField, $desiredPage = "")
{
	global $lookupTableLinks;
	if(!isset($lookupTableLinks[$lookupTable]))
		return null;
	if(!isset($lookupTableLinks[$lookupTable][$mainTableShortName.".".$mainField]))
		return null;
	$arr = &$lookupTableLinks[$lookupTable][$mainTableShortName.".".$mainField];
	$effectivePage = $desiredPage;
	if(!isset($arr[$effectivePage]))
	{
		$effectivePage = PAGE_EDIT;
		if(!isset($arr[$effectivePage]))
		{
			if($desiredPage == "" && 0 < count($arr))
			{
				$effectivePage = $arr[0];
			}
			else
				return null;
		}
	}
	return new ProjectSettings($arr[$effectivePage]["table"], $effectivePage);
}

/** 
* $lookupTableLinks array stores all lookup links between tables in the project
*/
function InitLookupLinks()
{
	global $lookupTableLinks;

	$lookupTableLinks = array();

		if( !isset( $lookupTableLinks["public.Recicladores"] ) ) {
			$lookupTableLinks["public.Recicladores"] = array();
		}
		if( !isset( $lookupTableLinks["public.Recicladores"]["gestionpesosresiduos.IdReciclador"] )) {
			$lookupTableLinks["public.Recicladores"]["gestionpesosresiduos.IdReciclador"] = array();
		}
		$lookupTableLinks["public.Recicladores"]["gestionpesosresiduos.IdReciclador"]["add"] = array("table" => "public.GestionPesosResiduos", "field" => "IdReciclador", "page" => "add");
		if( !isset( $lookupTableLinks["public.Residuos"] ) ) {
			$lookupTableLinks["public.Residuos"] = array();
		}
		if( !isset( $lookupTableLinks["public.Residuos"]["gestionpesosresiduos.IdResiduo"] )) {
			$lookupTableLinks["public.Residuos"]["gestionpesosresiduos.IdResiduo"] = array();
		}
		$lookupTableLinks["public.Residuos"]["gestionpesosresiduos.IdResiduo"]["add"] = array("table" => "public.GestionPesosResiduos", "field" => "IdResiduo", "page" => "add");
		if( !isset( $lookupTableLinks["public.Barrios"] ) ) {
			$lookupTableLinks["public.Barrios"] = array();
		}
		if( !isset( $lookupTableLinks["public.Barrios"]["usuarios.IdBarrio"] )) {
			$lookupTableLinks["public.Barrios"]["usuarios.IdBarrio"] = array();
		}
		$lookupTableLinks["public.Barrios"]["usuarios.IdBarrio"]["edit"] = array("table" => "public.Usuarios", "field" => "IdBarrio", "page" => "edit");
		if( !isset( $lookupTableLinks["public.Barrios"] ) ) {
			$lookupTableLinks["public.Barrios"] = array();
		}
		if( !isset( $lookupTableLinks["public.Barrios"]["usuarios.IdBarrio"] )) {
			$lookupTableLinks["public.Barrios"]["usuarios.IdBarrio"] = array();
		}
		$lookupTableLinks["public.Barrios"]["usuarios.IdBarrio"]["add"] = array("table" => "public.Usuarios", "field" => "IdBarrio", "page" => "add");
		if( !isset( $lookupTableLinks["public.GestionPesosResiduos"] ) ) {
			$lookupTableLinks["public.GestionPesosResiduos"] = array();
		}
		if( !isset( $lookupTableLinks["public.GestionPesosResiduos"]["detalleventas.Cantidad"] )) {
			$lookupTableLinks["public.GestionPesosResiduos"]["detalleventas.Cantidad"] = array();
		}
		$lookupTableLinks["public.GestionPesosResiduos"]["detalleventas.Cantidad"]["add"] = array("table" => "public.DetalleVentas", "field" => "Cantidad", "page" => "add");
		if( !isset( $lookupTableLinks["public.GestionPesosResiduosDetVen"] ) ) {
			$lookupTableLinks["public.GestionPesosResiduosDetVen"] = array();
		}
		if( !isset( $lookupTableLinks["public.GestionPesosResiduosDetVen"]["detalleventas.IdFGesPesResiduo"] )) {
			$lookupTableLinks["public.GestionPesosResiduosDetVen"]["detalleventas.IdFGesPesResiduo"] = array();
		}
		$lookupTableLinks["public.GestionPesosResiduosDetVen"]["detalleventas.IdFGesPesResiduo"]["add"] = array("table" => "public.DetalleVentas", "field" => "IdFGesPesResiduo", "page" => "add");
		if( !isset( $lookupTableLinks["public.EmpresasRecicladores"] ) ) {
			$lookupTableLinks["public.EmpresasRecicladores"] = array();
		}
		if( !isset( $lookupTableLinks["public.EmpresasRecicladores"]["ventas.IdEmpreRecicladora"] )) {
			$lookupTableLinks["public.EmpresasRecicladores"]["ventas.IdEmpreRecicladora"] = array();
		}
		$lookupTableLinks["public.EmpresasRecicladores"]["ventas.IdEmpreRecicladora"]["add"] = array("table" => "public.Ventas", "field" => "IdEmpreRecicladora", "page" => "add");
		if( !isset( $lookupTableLinks["public.Residuos"] ) ) {
			$lookupTableLinks["public.Residuos"] = array();
		}
		if( !isset( $lookupTableLinks["public.Residuos"]["gestionregistrosorigen.IdResiduo"] )) {
			$lookupTableLinks["public.Residuos"]["gestionregistrosorigen.IdResiduo"] = array();
		}
		$lookupTableLinks["public.Residuos"]["gestionregistrosorigen.IdResiduo"]["add"] = array("table" => "public.GestionRegistrosOrigen", "field" => "IdResiduo", "page" => "add");
		if( !isset( $lookupTableLinks["public.MedTipoOrigen"] ) ) {
			$lookupTableLinks["public.MedTipoOrigen"] = array();
		}
		if( !isset( $lookupTableLinks["public.MedTipoOrigen"]["gestionregistrosorigen.IdMedTipOrigen"] )) {
			$lookupTableLinks["public.MedTipoOrigen"]["gestionregistrosorigen.IdMedTipOrigen"] = array();
		}
		$lookupTableLinks["public.MedTipoOrigen"]["gestionregistrosorigen.IdMedTipOrigen"]["add"] = array("table" => "public.GestionRegistrosOrigen", "field" => "IdMedTipOrigen", "page" => "add");
		if( !isset( $lookupTableLinks["public.Usuarios"] ) ) {
			$lookupTableLinks["public.Usuarios"] = array();
		}
		if( !isset( $lookupTableLinks["public.Usuarios"]["gestionregistrosorigen.IdUsuario"] )) {
			$lookupTableLinks["public.Usuarios"]["gestionregistrosorigen.IdUsuario"] = array();
		}
		$lookupTableLinks["public.Usuarios"]["gestionregistrosorigen.IdUsuario"]["add"] = array("table" => "public.GestionRegistrosOrigen", "field" => "IdUsuario", "page" => "add");
}

?>