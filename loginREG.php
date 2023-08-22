<?php
require_once('conexion.php');
$link = new mysqli($servername,$username,$password,$db_name);

if($_SERVER["REQUEST_METHOD"]=="POST")
{
    registrar();
}

function registrar(){
global $link;
$clienteNombre = $_POST["clienteNombre"];
$clientePassword =$_POST["clientePassword"];

$query="insert into clientes (clienteNombre,clientePassword) values('$clienteNombre','$clientePassword');";

mysqli_query($link,$query) or die(mysqli_error($link));
mysqli_close($link);
}

?>