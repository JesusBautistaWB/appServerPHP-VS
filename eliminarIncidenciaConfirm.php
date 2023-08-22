<?php
$idUr = $_GET['idUr'];

require_once('conexion.php');
require_once('functions.php');
menu();

$link = new mysqli($host,$user,$pass,$basedatos);
$borrar = "DELETE FROM tb_quejas WHERE ID_Queja=".$idUr;

if(mysqli_query($link, $borrar)){
    ?>
    <script type="text/javascript">
    
        alert("REGISTRO ELIMINADO");
        window.location="http://gruposemedic.mx/APP/incidenciasAdmin.php";
</script>
    
    <?php
}else{
    ?>
     <script type="text/javascript">
    
        alert("NO SE ELIMINO EL REGISTRO");
        window.location="http://gruposemedic.mx/APP/incidenciasAdmin.php";
</script>  
    
    
    
<?php
}
?>

