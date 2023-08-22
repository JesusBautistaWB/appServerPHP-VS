<?php

include("conexion.php");

$clienteNombre = $_REQUEST['clienteNombre'];
$clientePassword = $_REQUEST['clientePassword'];

$cnx= new PDO("mysql:host=localhost;dbname=id11286791_semedicapp","id11286791_semedic","semedic00");
$res= $cnx->query("select * FROM clientes where clienteNombre ='$clienteNombre' AND clientePassword='$clientePassword'");

$datos=array();
foreach ($res as $row){
    $datos[]=$row;
    
}
echo json_encode($datos);

?>