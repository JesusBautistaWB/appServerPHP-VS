<?php
$id = $_POST['id'];
$titulo = $_POST['titulo'];
$imagen = $_POST['imagen'];
$contenido = $_POST['contenido'];

require_once('conexion.php');
require_once('functions.php');
menu();
$link = new mysqli($servername,$username,$password,$db_name);

$insercion = "UPDATE publicaciones SET tituloPublicacion = '$titulo', imagenPublicacion = '$imagen', contenidoPublicacion = '$contenido' WHERE idPublicacion = '$id'";

mysqli_query($link,$insercion) or die (mysqli_error($link));
mysqli_close($link);

?>


<body onload="myFunction()">

<script>
function myFunction() {
  alert("Listo");
   window.location="https://semedic.000webhostapp.com/publicacionesAdmin.php";
  
}
</script>