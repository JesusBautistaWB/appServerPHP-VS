<?php
require_once('conexion.php');
$link = new mysqli($servername,$username,$password,$db_name);


global $link;
$clienteNombre = $_REQUEST["clienteNombre"];
$satisfaccion =$_REQUEST["satisfaccion"];
$servicio = $_REQUEST["servicio"];
$medios = $_REQUEST["medios"];
$comentarios = $_REQUEST["comentarios"];
$correo = $_REQUEST["correo"];

$query="insert into encuestaSatisfaccion (clienteNombre,satisfaccion,servicio,medios,comentarios,correoCliente) values('$clienteNombre','$satisfaccion','$servicio','$medios','$comentarios','$correo');";

mysqli_query($link,$query) or die(mysqli_error($link));
mysqli_close($link);


?>