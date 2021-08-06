<?php
$dalTableDetalleVentas = array();
$dalTableDetalleVentas["ID"] = array("type"=>3,"varname"=>"ID", "name" => "ID");
$dalTableDetalleVentas["Cantidad"] = array("type"=>14,"varname"=>"Cantidad", "name" => "Cantidad");
$dalTableDetalleVentas["Precio"] = array("type"=>14,"varname"=>"Precio", "name" => "Precio");
$dalTableDetalleVentas["IdVenta"] = array("type"=>3,"varname"=>"IdVenta", "name" => "IdVenta");
$dalTableDetalleVentas["IdGesPesResiduo"] = array("type"=>3,"varname"=>"IdGesPesResiduo", "name" => "IdGesPesResiduo");
	$dalTableDetalleVentas["ID"]["key"]=true;

$dal_info["RealEstate_at_localhost_public_DetalleVentas"] = &$dalTableDetalleVentas;
?>