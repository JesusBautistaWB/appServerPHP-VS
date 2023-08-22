<?php
$idUr = $_GET['idUr'];

require_once('conexion.php');
require_once('functions.php');
menu();

?>

<body onload="Confirm()">
<script type="text/javascript">
function Confirm() {
    
//Ingresamos un mensaje a mostrar
var mensaje = confirm("¿Desea eliminar el registro "+<?php echo $idUr ?>+" ?");
//Detectamos si el usuario acepto el mensaje
if (mensaje) {
    
window.location="https://semedic.000webhostapp.com/eliminarUrgenciaConfirm.php?idUr="+<?php echo $idUr ?>;

}
//Detectamos si el usuario denegó el mensaje
else {
alert("Eliminacion cancelada");
window.location="https://semedic.000webhostapp.com/urgenciasAdmin.php";
}
}
</script>







  
