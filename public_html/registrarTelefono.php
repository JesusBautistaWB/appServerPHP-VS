<?php
require_once('conexion.php');
$link = new mysqli($servername,$username,$password,$db_name);

$idUsuario = $_REQUEST['idUsuario'];
$clienteTelefono = $_REQUEST['clienteTelefono'];

$insercion = "UPDATE clientes SET telefonoCliente = '$clienteTelefono' WHERE clienteNombre = '$idUsuario'";

mysqli_query($link,$insercion) or die (mysqli_error($link));
mysqli_close($link);

?>