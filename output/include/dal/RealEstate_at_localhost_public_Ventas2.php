<?php
$dalTableVentas2 = array();
$dalTableVentas2["IDVenta"] = array("type"=>3,"varname"=>"IDVenta", "name" => "IDVenta");
$dalTableVentas2["FechaVenta"] = array("type"=>7,"varname"=>"FechaVenta", "name" => "FechaVenta");
$dalTableVentas2["Observacion"] = array("type"=>200,"varname"=>"Observacion", "name" => "Observacion");
$dalTableVentas2["IdEmpreRecicladora"] = array("type"=>3,"varname"=>"IdEmpreRecicladora", "name" => "IdEmpreRecicladora");
	$dalTableVentas2["IDVenta"]["key"]=true;

$dal_info["RealEstate_at_localhost_public_Ventas2"] = &$dalTableVentas2;
?>