<?php
require('conexion.php');

$idUsuario = $_REQUEST['idUsuario'];
$asuntoUrgencia = $_REQUEST['asuntoUrgencia'];
$clienteTelefono = $_REQUEST['clienteTelefono'];
$fechaUrg = $_REQUEST['fechaUrg'];



try{


$res= $bdCON->query("INSERT INTO `semedicbd`.`tb_avisos_urgencias` 
(`Id_Usuario`, `asuntoUrgencia`, `ClienteTelefono`, `FechaUrg`, `EstatusUrgencia`) 
VALUES ('$idUsuario', '$asuntoUrgencia', '$clienteTelefono', '$fechaUrg', '0')
");


}
	catch(PDOException $e)
	{
		echo "<br><br>Ocurrio un error:-> ".$e->getMessage();
	}

?>