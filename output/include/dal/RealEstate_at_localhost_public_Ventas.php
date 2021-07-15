<?php
$dalTableVentas = array();
$dalTableVentas["IdVenta"] = array("type"=>3,"varname"=>"IdVenta", "name" => "IdVenta");
$dalTableVentas["FechaVenta"] = array("type"=>7,"varname"=>"FechaVenta", "name" => "FechaVenta");
$dalTableVentas["Observación"] = array("type"=>200,"varname"=>"Observaci_n", "name" => "Observación");
$dalTableVentas["IdEmpreRecicladora"] = array("type"=>3,"varname"=>"IdEmpreRecicladora", "name" => "IdEmpreRecicladora");
	$dalTableVentas["IdVenta"]["key"]=true;

$dal_info["RealEstate_at_localhost_public_Ventas"] = &$dalTableVentas;
?>