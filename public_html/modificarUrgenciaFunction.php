<?php
$idUr = $_POST['idUr'];
$respuesta = $_POST['respuesta'];

require_once('conexion.php');
require_once('functions.php');
menu();
$link = new mysqli($servername,$username,$password,$db_name);

$insercion = "UPDATE urgencias SET estatusUrgencia = '$respuesta' WHERE idUrgencia = '$idUr'";

mysqli_query($link,$insercion) or die (mysqli_error($link));
mysqli_close($link);

?>


<body onload="myFunction()">

<script>
function myFunction() {
  alert("Listo");
   window.location="https://semedic.000webhostapp.com/urgenciasAdmin.php";
  
}
</script>