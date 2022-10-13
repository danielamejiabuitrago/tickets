<?php
session_start();
include("../../class/usuario.php");

$usu = new usuario();
$usu->setcedula_usuario($_POST['cedula']);
$usu->setclave_usuario($_POST['clave']);

if($usu->validarSesion()){
	$_SESSION['usu_codigo'] = $usu->getidUsuario();
	header("Location: fm_index.php");
}else{
	header("Location: op_usuarioSesionCerrar.php");
}
?>