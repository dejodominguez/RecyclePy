<?php
$dalTableGestionPesosResiduos = array();
$dalTableGestionPesosResiduos["IdGesPesResiduo"] = array("type"=>3,"varname"=>"IdGesPesResiduo", "name" => "IdGesPesResiduo");
$dalTableGestionPesosResiduos["IdReciclador"] = array("type"=>3,"varname"=>"IdReciclador", "name" => "IdReciclador");
$dalTableGestionPesosResiduos["IdResiduo"] = array("type"=>3,"varname"=>"IdResiduo", "name" => "IdResiduo");
$dalTableGestionPesosResiduos["FechaGestion"] = array("type"=>7,"varname"=>"FechaGestion", "name" => "FechaGestion");
$dalTableGestionPesosResiduos["KilosResiduos"] = array("type"=>5,"varname"=>"KilosResiduos", "name" => "KilosResiduos");
	$dalTableGestionPesosResiduos["IdGesPesResiduo"]["key"]=true;

$dal_info["RealEstate_at_localhost_public_GestionPesosResiduos"] = &$dalTableGestionPesosResiduos;
?>