<?php
$dalTableusuarios = array();
$dalTableusuarios["id_usuario"] = array("type"=>3,"varname"=>"id_usuario", "name" => "id_usuario");
$dalTableusuarios["nombre_usuario"] = array("type"=>200,"varname"=>"nombre_usuario", "name" => "nombre_usuario");
$dalTableusuarios["password"] = array("type"=>200,"varname"=>"password", "name" => "password");
$dalTableusuarios["email"] = array("type"=>200,"varname"=>"email", "name" => "email");
$dalTableusuarios["nombre_completo"] = array("type"=>200,"varname"=>"nombre_completo", "name" => "nombre_completo");
$dalTableusuarios["id_tipo_usu"] = array("type"=>200,"varname"=>"id_tipo_usu", "name" => "id_tipo_usu");
$dalTableusuarios["active"] = array("type"=>3,"varname"=>"active", "name" => "active");
$dalTableusuarios["ext_security_id"] = array("type"=>200,"varname"=>"ext_security_id", "name" => "ext_security_id");
$dalTableusuarios["direc_usuario"] = array("type"=>200,"varname"=>"direc_usuario", "name" => "direc_usuario");
$dalTableusuarios["id_barrio"] = array("type"=>3,"varname"=>"id_barrio", "name" => "id_barrio");
$dalTableusuarios["tel_usuario"] = array("type"=>200,"varname"=>"tel_usuario", "name" => "tel_usuario");
$dalTableusuarios["two_factor"] = array("type"=>3,"varname"=>"two_factor", "name" => "two_factor");
$dalTableusuarios["totp_secret"] = array("type"=>200,"varname"=>"totp_secret", "name" => "totp_secret");
$dalTableusuarios["userpic"] = array("type"=>128,"varname"=>"userpic", "name" => "userpic");
	$dalTableusuarios["id_usuario"]["key"]=true;

$dal_info["RealEstate_at_localhost_public_usuarios"] = &$dalTableusuarios;
?>