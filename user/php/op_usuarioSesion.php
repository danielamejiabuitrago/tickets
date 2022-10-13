<?php
session_start();
if(!isset($_SESSION['usu_codigo'])){
	header("Location: op_usuarioSesionCerrar.php");
	exit;
}
include("../../class/usuario.php");
$usu= new usuario($_SESSION['usu_codigo']);
$usu->consultar();
$conf_titulo = "tickets";
include ("../../php/s_funcionesEspeciales.php");
?>