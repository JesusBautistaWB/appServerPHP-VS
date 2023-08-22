<?php
require_once('conexion.php');
$link = new mysqli($servername,$username,$password,$db_name);


$idUsuario = $_POST['idUsuario'];
$tipoIncidencia = $_POST['tipoIncidencia'];
$asuntoIncidencia = $_POST['asuntoIncidencia'];
$fechaInc = $_POST['fechaInc'];


$insercion = "insert into incidencias(idUsuario,tipoIncidencia,asuntoIncidencia,respuestaIncidencia,fechaInc) values('$idUsuario','$tipoIncidencia','$asuntoIncidencia','REVISANDO','$fechaInc');";


mysqli_query($link,$insercion) or die (mysqli_error($link));
mysqli_close($link);

?>