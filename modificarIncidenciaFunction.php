<?php
$idUr = $_POST['idUr'];
$respuesta = $_POST['respuesta'];

require_once('conexion.php');
require_once('functions.php');
menu();
$link = new mysqli($host,$user,$pass,$basedatos);

$insercion = "UPDATE tb_quejas SET ID_Estatus = '$respuesta' WHERE ID_Queja = '$idUr'";

mysqli_query($link,$insercion) or die (mysqli_error($link));
mysqli_close($link);

?>


<body onload="myFunction()">

<script>
function myFunction() {
  alert("Listo");
   window.location="http://gruposemedic.mx/APP/incidenciasAdmin.php";
  
}
</script>