<?php
$id = $_GET['idUr'];

require_once('conexion.php');
require_once('functions.php');
menu();

?>

<body onload="Confirm()">
<script type="text/javascript">
function Confirm() {
    
//Ingresamos un mensaje a mostrar
var mensaje = confirm("¿Desea eliminar la publicación "+<?php echo $id ?>+" ?");
//Detectamos si el usuario acepto el mensaje
if (mensaje) {
    
window.location="http://gruposemedic.mx/eliminarPostConfirm.php?idUr="+<?php echo $id ?>;

}
//Detectamos si el usuario denegó el mensaje
else {
alert("Eliminacion cancelada");
window.location="http://gruposemedic.mx/APP/publicacionesAdmin.php";
}
}
</script>






