<?php
$idUr = $_POST['idUr'];
$respuesta = $_POST['respuesta'];

require_once('conexion.php');
require_once('functions.php');
menu();
$link = new mysqli($host,$user,$pass,$basedatos);

$insercion = "UPDATE semedicbd.tb_avisos_urgencias SET EstatusUrgencia = '$respuesta' WHERE id_Urgencia = '$idUr'";

mysqli_query($link,$insercion) or die (mysqli_error($link));
mysqli_close($link);

?>


<body onload="myFunction()">

<script>
function myFunction() {
  alert("Listo");
   window.location="http://gruposemedic.mx/APP/urgenciasAdmin.php";
  
}
</script>