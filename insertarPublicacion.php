<?php
require_once('conexion.php');
$link = new mysqli($localHost,$user,$pass,$basedatos);

if($_SERVER["REQUEST_METHOD"]=="POST")
{
    registrar();
}

function registrar(){
global $link;
$tituloPublicacion = $_POST["titulo"];
$imagenPublicacion =$_POST["imagen"];
$contenidoPublicacion =$_POST["contenido"];

$query="insert into tb_publicaciones (tituloPublicacion,imagenPublicacion,contenidoPublicacion) values('$tituloPublicacion','$imagenPublicacion','$contenidoPublicacion');";

mysqli_query($link,$query) or die(mysqli_error($link));
mysqli_close($link);
}

?>

<body onload="myFunction()">

<script>
function myFunction() {
  alert("Listo");
   window.location="http|://gruposemedic.mx/publicacionesAdmin.php";
  
}
</script>