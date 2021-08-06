<?php
$dalTablegestion_pesos_residuos = array();
$dalTablegestion_pesos_residuos["id_ges_pes_residuo"] = array("type"=>3,"varname"=>"id_ges_pes_residuo", "name" => "id_ges_pes_residuo");
$dalTablegestion_pesos_residuos["id_reciclador"] = array("type"=>3,"varname"=>"id_reciclador", "name" => "id_reciclador");
$dalTablegestion_pesos_residuos["id_residuo"] = array("type"=>3,"varname"=>"id_residuo", "name" => "id_residuo");
$dalTablegestion_pesos_residuos["fecha_gestion_pesos"] = array("type"=>7,"varname"=>"fecha_gestion_pesos", "name" => "fecha_gestion_pesos");
$dalTablegestion_pesos_residuos["kilo_residuo"] = array("type"=>5,"varname"=>"kilo_residuo", "name" => "kilo_residuo");
$dalTablegestion_pesos_residuos["estado"] = array("type"=>14,"varname"=>"estado", "name" => "estado");
	$dalTablegestion_pesos_residuos["id_ges_pes_residuo"]["key"]=true;

$dal_info["RealEstate_at_localhost_public_gestion_pesos_residuos"] = &$dalTablegestion_pesos_residuos;
?>