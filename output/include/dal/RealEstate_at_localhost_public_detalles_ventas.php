<?php
$dalTabledetalles_ventas = array();
$dalTabledetalles_ventas["id_deta_venta"] = array("type"=>3,"varname"=>"id_deta_venta", "name" => "id_deta_venta");
$dalTabledetalles_ventas["cantidad_venta"] = array("type"=>5,"varname"=>"cantidad_venta", "name" => "cantidad_venta");
$dalTabledetalles_ventas["precio_venta"] = array("type"=>14,"varname"=>"precio_venta", "name" => "precio_venta");
$dalTabledetalles_ventas["id_venta"] = array("type"=>3,"varname"=>"id_venta", "name" => "id_venta");
$dalTabledetalles_ventas["id_ges_pes_residuo"] = array("type"=>3,"varname"=>"id_ges_pes_residuo", "name" => "id_ges_pes_residuo");
$dalTabledetalles_ventas["sub_total"] = array("type"=>5,"varname"=>"sub_total", "name" => "sub_total");
	$dalTabledetalles_ventas["id_deta_venta"]["key"]=true;

$dal_info["RealEstate_at_localhost_public_detalles_ventas"] = &$dalTabledetalles_ventas;
?>