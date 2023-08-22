<?php
require('conexion.php');


$Indice = $_REQUEST['Indice'];
$Folio_Persona = $_REQUEST['numAf'];
$ID_Incidencia = $_REQUEST['ID_Incidencia'];
$ID_Area = $_REQUEST['area'];
$Comentario = $_REQUEST['Comentario'];
$ID_Estatus = $_REQUEST['ID_Estatus'];
$Fecha = $_REQUEST['fechaIncidencia'];

try{

$res= $bdCON->query("INSERT INTO `semedicbd2`.`tb_quejas`
 ( `Indice`, `Folio_Persona`, `ID_Incidencia`, `ID_Area`, `Comentario`, `ID_Estatus`, `Fecha`) 
VALUES ('0','$Folio_Persona', '$ID_Incidencia','$ID_Area', '$Comentario','0', '$Fecha')");
}
	catch(PDOException $e)
	{
		echo "<br><br>Ocurrio un error:-> ".$e->getMessage();
	}

?>