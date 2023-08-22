<?php
require_once('conexion.php');
$link = new mysqli($servername,$username,$password,$db_name);

$idUsuario = $_REQUEST['idUsuario'];
$asuntoUrgencia = $_REQUEST['asuntoUrgencia'];
$clienteTelefono = $_REQUEST['clienteTelefono'];
$fechaUrg = $_REQUEST['fechaUrg'];

$insercion = "insert into urgencias(idUsuario,asuntoUrgencia,clienteTelefono,fechaUrg) values('$idUsuario','$asuntoUrgencia','$clienteTelefono','$fechaUrg');";

mysqli_query($link,$insercion) or die (mysqli_error($link));
mysqli_close($link);

?>