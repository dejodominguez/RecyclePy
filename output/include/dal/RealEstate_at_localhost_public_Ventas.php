<?php
$dalTableventas = array();
$dalTableventas["id_venta"] = array("type"=>3,"varname"=>"id_venta", "name" => "id_venta");
$dalTableventas["fecha_venta"] = array("type"=>7,"varname"=>"fecha_venta", "name" => "fecha_venta");
$dalTableventas["observacion"] = array("type"=>200,"varname"=>"observacion", "name" => "observacion");
$dalTableventas["id_empre_recichadora"] = array("type"=>3,"varname"=>"id_empre_recichadora", "name" => "id_empre_recichadora");
	$dalTableventas["id_venta"]["key"]=true;

$dal_info["RealEstate_at_localhost_public_ventas"] = &$dalTableventas;
?>