<?php
$dalTableGestionPesosResiduos = array();
$dalTableGestionPesosResiduos["IdGesPesResiduo"] = array("type"=>3,"varname"=>"IdGesPesResiduo", "name" => "IdGesPesResiduo");
$dalTableGestionPesosResiduos["id_reciclador"] = array("type"=>3,"varname"=>"id_reciclador", "name" => "id_reciclador");
$dalTableGestionPesosResiduos["id_residuo"] = array("type"=>3,"varname"=>"id_residuo", "name" => "id_residuo");
$dalTableGestionPesosResiduos["FechaGestion"] = array("type"=>7,"varname"=>"FechaGestion", "name" => "FechaGestion");
$dalTableGestionPesosResiduos["KilosResiduos"] = array("type"=>5,"varname"=>"KilosResiduos", "name" => "KilosResiduos");
$dalTableGestionPesosResiduos["Estado"] = array("type"=>14,"varname"=>"Estado", "name" => "Estado");
	$dalTableGestionPesosResiduos["IdGesPesResiduo"]["key"]=true;

$dal_info["RealEstate_at_localhost_public_GestionPesosResiduos"] = &$dalTableGestionPesosResiduos;
?>