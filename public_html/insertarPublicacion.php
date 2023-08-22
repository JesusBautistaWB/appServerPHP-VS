<?php
require_once('conexion.php');
$link = new mysqli($servername,$username,$password,$db_name);

if($_SERVER["REQUEST_METHOD"]=="POST")
{
    registrar();
}

function registrar(){
global $link;
$tituloPublicacion = $_POST["titulo"];
$imagenPublicacion =$_POST["imagen"];
$contenidoPublicacion =$_POST["contenido"];

$query="insert into publicaciones (tituloPublicacion,imagenPublicacion,contenidoPublicacion) values('$tituloPublicacion','$imagenPublicacion','$contenidoPublicacion');";

mysqli_query($link,$query) or die(mysqli_error($link));
mysqli_close($link);
}

?>

<body onload="myFunction()">

<script>
function myFunction() {
  alert("Listo");
   window.location="https://semedic.000webhostapp.com/publicacionesAdmin.php";
  
}
</script>