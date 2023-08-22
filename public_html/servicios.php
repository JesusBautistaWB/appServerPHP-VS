<?PHP
require_once('conexion.php');

$conn = new  mysqli($servername,$username,$password,$db_name);

if(mysqli_connect_error()){
    echo "fallo al conectar con MySQL: " . mysqli_connect_error();
    die();
    
}

$stmt = $conn->prepare("Select DISTINCT tipoServicio FROM servicios;");

$stmt->execute();

$stmt->bind_result($tipoServicio);

$servicio = array();
$iws = array();
$iws['tipoServicio']='';
array_push($servicio,$iws);
while($stmt->fetch()){
    $temp = array();
    $temp['tipoServicio']=$tipoServicio;
    array_push($servicio, $temp);
}

echo json_encode($servicio);
?>