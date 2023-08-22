<?php
$idUr = $_GET['idUr'];

require_once('conexion.php');
require_once('functions.php');
menu();

$link = new mysqli($servername,$username,$password,$db_name);
$borrar = "DELETE FROM publicaciones WHERE idPublicacion=".$idUr;

if(mysqli_query($link, $borrar)){
    ?>
    <script type="text/javascript">
    
        alert("PUBLICACION ELIMINADA");
        window.location="https://semedic.000webhostapp.com/publicacionesAdmin.php";
</script>
    
    <?php
}else{
    ?>
     <script type="text/javascript">
    
        alert("NO SE ELIMINO EL REGISTRO");
        window.location="https://semedic.000webhostapp.com/publicacionesAdmin.php";
</script>  
    
    
    
<?php
}
?>
