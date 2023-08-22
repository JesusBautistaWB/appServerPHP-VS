<?PHP
require_once('conexion.php');

$conn = new  mysqli($servername,$username,$password,$db_name);

$idUsuarioRQ = $_REQUEST['idUsuario'];

if(mysqli_connect_error()){
    echo "fallo al conectar con MySQL: " . mysqli_connect_error();
    die();
}

$stmt = $conn->prepare("Select tipoIncidencia,asuntoIncidencia, respuestaIncidencia, fechaInc FROM incidencias where idUsuario =? ORDER BY fechaInc DESC");

$stmt->bind_param('s',$idUsuarioRQ);

$stmt->execute();

$stmt->bind_result($tipoIncidencia,$asuntoIncidencia, $respuestaIncidencia,$fechaInc);

$list_respuestas = array();

$respuestas = array();
while($stmt->fetch()){
    $temp = array();
    $temp['tipoIncidencia'] = $tipoIncidencia;
    $temp['respuestaIncidencia'] =$respuestaIncidencia;
    $temp['asuntoIncidencia'] = $asuntoIncidencia;
    $temp['fechaInc'] = $fechaInc;
   
    array_push($respuestas, $temp);
}

echo json_encode($respuestas);
?>