<?php
$dalTableUsuarios = array();
$dalTableUsuarios["IdUsuario"] = array("type"=>3,"varname"=>"IdUsuario", "name" => "IdUsuario");
$dalTableUsuarios["NombreUsuario"] = array("type"=>200,"varname"=>"NombreUsuario", "name" => "NombreUsuario");
$dalTableUsuarios["Password"] = array("type"=>200,"varname"=>"Password", "name" => "Password");
$dalTableUsuarios["Email"] = array("type"=>200,"varname"=>"Email", "name" => "Email");
$dalTableUsuarios["NombreCompleto"] = array("type"=>200,"varname"=>"NombreCompleto", "name" => "NombreCompleto");
$dalTableUsuarios["Groupid"] = array("type"=>200,"varname"=>"Groupid", "name" => "Groupid");
$dalTableUsuarios["active"] = array("type"=>3,"varname"=>"active", "name" => "active");
$dalTableUsuarios["ext_security_id"] = array("type"=>200,"varname"=>"ext_security_id", "name" => "ext_security_id");
$dalTableUsuarios["DirecUsuario"] = array("type"=>200,"varname"=>"DirecUsuario", "name" => "DirecUsuario");
$dalTableUsuarios["IdBarrio"] = array("type"=>3,"varname"=>"IdBarrio", "name" => "IdBarrio");
$dalTableUsuarios["TelUsuario"] = array("type"=>200,"varname"=>"TelUsuario", "name" => "TelUsuario");
	$dalTableUsuarios["IdUsuario"]["key"]=true;

$dal_info["RealEstate_at_localhost_public_Usuarios"] = &$dalTableUsuarios;
?>