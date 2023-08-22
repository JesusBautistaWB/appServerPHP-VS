<?php
$id = $_POST['id'];
$titulo = $_POST['titulo'];
$imagen = $_POST['imagen'];
$contenido = $_POST['contenido'];

require_once('conexion.php');
require_once('functions.php');
menu();
$link = new mysqli($localHost,$user,$pass,$basedatos);

$insercion = "UPDATE tb_publicaciones SET tituloPublicacion = '$titulo', imagenPublicacion = '$imagen', contenidoPublicacion = '$contenido' WHERE idPublicacion = '$id'";

mysqli_query($link,$insercion) or die (mysqli_error($link));
mysqli_close($link);

?>


<body onload="myFunction()">

<script>
function myFunction() {
  alert("Listo");

   window.location="http://gruposemedic.mx/APP/publicacionesAdmin.php";
  
}
</script>