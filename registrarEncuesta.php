<?php
require_once('conexion.php');

global $link;
$numAf = $_REQUEST["numAf"];
$satisfaccion =$_REQUEST["satisfaccion"];
$servicio = $_REQUEST["servicio"];
$medios = $_REQUEST["medios"];
$comentarios = $_REQUEST["comentarios"];
$correo = $_REQUEST["correo"];
$fechaEncuesta = $_REQUEST["fechaEncuesta"];



$res= $bdCON->query("INSERT INTO `semedicbd`.`tb_encuesta` 
(`numAf`, `satisfaccion`, `servicio`, `medios`, `comentarios`,`correo`,`fechaEncuesta`) 
VALUES ('$numAf', '$satisfaccion', '$servicio', '$medios', '$comentarios', '$correo', '$fechaEncuesta')
");


?>