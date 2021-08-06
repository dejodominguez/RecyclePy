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

		if( !isset( $lookupTableLinks["public.residuos"] ) ) {
			$lookupTableLinks["public.residuos"] = array();
		}
		if( !isset( $lookupTableLinks["public.residuos"]["recicladores.id_residuo"] )) {
			$lookupTableLinks["public.residuos"]["recicladores.id_residuo"] = array();
		}
		$lookupTableLinks["public.residuos"]["recicladores.id_residuo"]["edit"] = array("table" => "public.recicladores", "field" => "id_residuo", "page" => "edit");
		if( !isset( $lookupTableLinks["public.residuos"] ) ) {
			$lookupTableLinks["public.residuos"] = array();
		}
		if( !isset( $lookupTableLinks["public.residuos"]["recicladores.id_residuo"] )) {
			$lookupTableLinks["public.residuos"]["recicladores.id_residuo"] = array();
		}
		$lookupTableLinks["public.residuos"]["recicladores.id_residuo"]["add"] = array("table" => "public.recicladores", "field" => "id_residuo", "page" => "add");
		if( !isset( $lookupTableLinks["public.tipos_usuarios"] ) ) {
			$lookupTableLinks["public.tipos_usuarios"] = array();
		}
		if( !isset( $lookupTableLinks["public.tipos_usuarios"]["usuarios.id_tipo_usu"] )) {
			$lookupTableLinks["public.tipos_usuarios"]["usuarios.id_tipo_usu"] = array();
		}
		$lookupTableLinks["public.tipos_usuarios"]["usuarios.id_tipo_usu"]["edit"] = array("table" => "public.usuarios", "field" => "id_tipo_usu", "page" => "edit");
		if( !isset( $lookupTableLinks["public.tipos_usuarios"] ) ) {
			$lookupTableLinks["public.tipos_usuarios"] = array();
		}
		if( !isset( $lookupTableLinks["public.tipos_usuarios"]["usuarios.id_tipo_usu"] )) {
			$lookupTableLinks["public.tipos_usuarios"]["usuarios.id_tipo_usu"] = array();
		}
		$lookupTableLinks["public.tipos_usuarios"]["usuarios.id_tipo_usu"]["add"] = array("table" => "public.usuarios", "field" => "id_tipo_usu", "page" => "add");
		if( !isset( $lookupTableLinks["public.barrios"] ) ) {
			$lookupTableLinks["public.barrios"] = array();
		}
		if( !isset( $lookupTableLinks["public.barrios"]["usuarios.id_barrio"] )) {
			$lookupTableLinks["public.barrios"]["usuarios.id_barrio"] = array();
		}
		$lookupTableLinks["public.barrios"]["usuarios.id_barrio"]["edit"] = array("table" => "public.usuarios", "field" => "id_barrio", "page" => "edit");
		if( !isset( $lookupTableLinks["public.barrios"] ) ) {
			$lookupTableLinks["public.barrios"] = array();
		}
		if( !isset( $lookupTableLinks["public.barrios"]["usuarios.id_barrio"] )) {
			$lookupTableLinks["public.barrios"]["usuarios.id_barrio"] = array();
		}
		$lookupTableLinks["public.barrios"]["usuarios.id_barrio"]["add"] = array("table" => "public.usuarios", "field" => "id_barrio", "page" => "add");
		if( !isset( $lookupTableLinks["public.residuos"] ) ) {
			$lookupTableLinks["public.residuos"] = array();
		}
		if( !isset( $lookupTableLinks["public.residuos"]["public_empresas_recicladoras1.id_residuo"] )) {
			$lookupTableLinks["public.residuos"]["public_empresas_recicladoras1.id_residuo"] = array();
		}
		$lookupTableLinks["public.residuos"]["public_empresas_recicladoras1.id_residuo"]["edit"] = array("table" => "public.empresas_recicladoras", "field" => "id_residuo", "page" => "edit");
		if( !isset( $lookupTableLinks["public.residuos"] ) ) {
			$lookupTableLinks["public.residuos"] = array();
		}
		if( !isset( $lookupTableLinks["public.residuos"]["public_empresas_recicladoras1.id_residuo"] )) {
			$lookupTableLinks["public.residuos"]["public_empresas_recicladoras1.id_residuo"] = array();
		}
		$lookupTableLinks["public.residuos"]["public_empresas_recicladoras1.id_residuo"]["add"] = array("table" => "public.empresas_recicladoras", "field" => "id_residuo", "page" => "add");
		if( !isset( $lookupTableLinks["public.recicladores"] ) ) {
			$lookupTableLinks["public.recicladores"] = array();
		}
		if( !isset( $lookupTableLinks["public.recicladores"]["gestion_pesos_residuos.id_reciclador"] )) {
			$lookupTableLinks["public.recicladores"]["gestion_pesos_residuos.id_reciclador"] = array();
		}
		$lookupTableLinks["public.recicladores"]["gestion_pesos_residuos.id_reciclador"]["edit"] = array("table" => "public.gestion_pesos_residuos", "field" => "id_reciclador", "page" => "edit");
		if( !isset( $lookupTableLinks["public.recicladores"] ) ) {
			$lookupTableLinks["public.recicladores"] = array();
		}
		if( !isset( $lookupTableLinks["public.recicladores"]["gestion_pesos_residuos.id_reciclador"] )) {
			$lookupTableLinks["public.recicladores"]["gestion_pesos_residuos.id_reciclador"] = array();
		}
		$lookupTableLinks["public.recicladores"]["gestion_pesos_residuos.id_reciclador"]["add"] = array("table" => "public.gestion_pesos_residuos", "field" => "id_reciclador", "page" => "add");
		if( !isset( $lookupTableLinks["public.residuos"] ) ) {
			$lookupTableLinks["public.residuos"] = array();
		}
		if( !isset( $lookupTableLinks["public.residuos"]["gestion_pesos_residuos.id_residuo"] )) {
			$lookupTableLinks["public.residuos"]["gestion_pesos_residuos.id_residuo"] = array();
		}
		$lookupTableLinks["public.residuos"]["gestion_pesos_residuos.id_residuo"]["edit"] = array("table" => "public.gestion_pesos_residuos", "field" => "id_residuo", "page" => "edit");
		if( !isset( $lookupTableLinks["public.residuos"] ) ) {
			$lookupTableLinks["public.residuos"] = array();
		}
		if( !isset( $lookupTableLinks["public.residuos"]["gestion_pesos_residuos.id_residuo"] )) {
			$lookupTableLinks["public.residuos"]["gestion_pesos_residuos.id_residuo"] = array();
		}
		$lookupTableLinks["public.residuos"]["gestion_pesos_residuos.id_residuo"]["add"] = array("table" => "public.gestion_pesos_residuos", "field" => "id_residuo", "page" => "add");
		if( !isset( $lookupTableLinks["public.empresas_recicladoras"] ) ) {
			$lookupTableLinks["public.empresas_recicladoras"] = array();
		}
		if( !isset( $lookupTableLinks["public.empresas_recicladoras"]["ventas.id_empre_recichadora"] )) {
			$lookupTableLinks["public.empresas_recicladoras"]["ventas.id_empre_recichadora"] = array();
		}
		$lookupTableLinks["public.empresas_recicladoras"]["ventas.id_empre_recichadora"]["edit"] = array("table" => "public.ventas", "field" => "id_empre_recichadora", "page" => "edit");
		if( !isset( $lookupTableLinks["public.empresas_recicladoras"] ) ) {
			$lookupTableLinks["public.empresas_recicladoras"] = array();
		}
		if( !isset( $lookupTableLinks["public.empresas_recicladoras"]["ventas.id_empre_recichadora"] )) {
			$lookupTableLinks["public.empresas_recicladoras"]["ventas.id_empre_recichadora"] = array();
		}
		$lookupTableLinks["public.empresas_recicladoras"]["ventas.id_empre_recichadora"]["add"] = array("table" => "public.ventas", "field" => "id_empre_recichadora", "page" => "add");
		if( !isset( $lookupTableLinks["public.gestion_pesos_residuos_ven"] ) ) {
			$lookupTableLinks["public.gestion_pesos_residuos_ven"] = array();
		}
		if( !isset( $lookupTableLinks["public.gestion_pesos_residuos_ven"]["detalles_ventas.id_ges_pes_residuo"] )) {
			$lookupTableLinks["public.gestion_pesos_residuos_ven"]["detalles_ventas.id_ges_pes_residuo"] = array();
		}
		$lookupTableLinks["public.gestion_pesos_residuos_ven"]["detalles_ventas.id_ges_pes_residuo"]["edit"] = array("table" => "public.detalles_ventas", "field" => "id_ges_pes_residuo", "page" => "edit");
		if( !isset( $lookupTableLinks["public.gestion_pesos_residuos_ven"] ) ) {
			$lookupTableLinks["public.gestion_pesos_residuos_ven"] = array();
		}
		if( !isset( $lookupTableLinks["public.gestion_pesos_residuos_ven"]["detalles_ventas.id_ges_pes_residuo"] )) {
			$lookupTableLinks["public.gestion_pesos_residuos_ven"]["detalles_ventas.id_ges_pes_residuo"] = array();
		}
		$lookupTableLinks["public.gestion_pesos_residuos_ven"]["detalles_ventas.id_ges_pes_residuo"]["add"] = array("table" => "public.detalles_ventas", "field" => "id_ges_pes_residuo", "page" => "add");
		if( !isset( $lookupTableLinks["public.gestion_pesos_residuos_ven"] ) ) {
			$lookupTableLinks["public.gestion_pesos_residuos_ven"] = array();
		}
		if( !isset( $lookupTableLinks["public.gestion_pesos_residuos_ven"]["detalles_ventas.concat"] )) {
			$lookupTableLinks["public.gestion_pesos_residuos_ven"]["detalles_ventas.concat"] = array();
		}
		$lookupTableLinks["public.gestion_pesos_residuos_ven"]["detalles_ventas.concat"]["add"] = array("table" => "public.detalles_ventas", "field" => "concat", "page" => "add");
		if( !isset( $lookupTableLinks["public.gestion_pesos_residuos_ven"] ) ) {
			$lookupTableLinks["public.gestion_pesos_residuos_ven"] = array();
		}
		if( !isset( $lookupTableLinks["public.gestion_pesos_residuos_ven"]["detalles_ventas.cantidad_venta"] )) {
			$lookupTableLinks["public.gestion_pesos_residuos_ven"]["detalles_ventas.cantidad_venta"] = array();
		}
		$lookupTableLinks["public.gestion_pesos_residuos_ven"]["detalles_ventas.cantidad_venta"]["edit"] = array("table" => "public.detalles_ventas", "field" => "cantidad_venta", "page" => "edit");
		if( !isset( $lookupTableLinks["public.gestion_pesos_residuos_ven"] ) ) {
			$lookupTableLinks["public.gestion_pesos_residuos_ven"] = array();
		}
		if( !isset( $lookupTableLinks["public.gestion_pesos_residuos_ven"]["detalles_ventas.cantidad_venta"] )) {
			$lookupTableLinks["public.gestion_pesos_residuos_ven"]["detalles_ventas.cantidad_venta"] = array();
		}
		$lookupTableLinks["public.gestion_pesos_residuos_ven"]["detalles_ventas.cantidad_venta"]["add"] = array("table" => "public.detalles_ventas", "field" => "cantidad_venta", "page" => "add");
		if( !isset( $lookupTableLinks["public.residuos"] ) ) {
			$lookupTableLinks["public.residuos"] = array();
		}
		if( !isset( $lookupTableLinks["public.residuos"]["gestion_registros_origen.id_residuo"] )) {
			$lookupTableLinks["public.residuos"]["gestion_registros_origen.id_residuo"] = array();
		}
		$lookupTableLinks["public.residuos"]["gestion_registros_origen.id_residuo"]["edit"] = array("table" => "public.gestion_registros_origen", "field" => "id_residuo", "page" => "edit");
		if( !isset( $lookupTableLinks["public.med_tipo_origen"] ) ) {
			$lookupTableLinks["public.med_tipo_origen"] = array();
		}
		if( !isset( $lookupTableLinks["public.med_tipo_origen"]["gestion_registros_origen.id_med_tip_origen"] )) {
			$lookupTableLinks["public.med_tipo_origen"]["gestion_registros_origen.id_med_tip_origen"] = array();
		}
		$lookupTableLinks["public.med_tipo_origen"]["gestion_registros_origen.id_med_tip_origen"]["add"] = array("table" => "public.gestion_registros_origen", "field" => "id_med_tip_origen", "page" => "add");
		if( !isset( $lookupTableLinks["public.usuarios"] ) ) {
			$lookupTableLinks["public.usuarios"] = array();
		}
		if( !isset( $lookupTableLinks["public.usuarios"]["gestion_registros_origen.id_usuario"] )) {
			$lookupTableLinks["public.usuarios"]["gestion_registros_origen.id_usuario"] = array();
		}
		$lookupTableLinks["public.usuarios"]["gestion_registros_origen.id_usuario"]["add"] = array("table" => "public.gestion_registros_origen", "field" => "id_usuario", "page" => "add");
}

?>