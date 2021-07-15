<?php
$dalTableDetalleVentas = array();
$dalTableDetalleVentas["ID"] = array("type"=>3,"varname"=>"ID", "name" => "ID");
$dalTableDetalleVentas["Cantidad"] = array("type"=>14,"varname"=>"Cantidad", "name" => "Cantidad");
$dalTableDetalleVentas["Precio"] = array("type"=>14,"varname"=>"Precio", "name" => "Precio");
$dalTableDetalleVentas["IDVenta"] = array("type"=>3,"varname"=>"IDVenta", "name" => "IDVenta");
$dalTableDetalleVentas["IdFGesPesResiduo"] = array("type"=>3,"varname"=>"IdFGesPesResiduo", "name" => "IdFGesPesResiduo");
	$dalTableDetalleVentas["ID"]["key"]=true;

$dal_info["RealEstate_at_localhost_public_DetalleVentas"] = &$dalTableDetalleVentas;
?>