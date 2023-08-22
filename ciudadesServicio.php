<?PHP
require_once('conexion.php');

$conn = new  mysqli($servername,$username,$password,$db_name);

if(mysqli_connect_error()){
    echo "fallo al conectar con MySQL: " . mysqli_connect_error();
    die();
    
}

$stmt = $conn->prepare("Select DISTINCT ciudadServicio FROM servicios;");
$stmt->execute();
$stmt->bind_result($ciudadServicio);

$ciudades = array();
$iws = array();
$iws['ciudadServicio']='';
array_push($ciudades,$iws);
while($stmt->fetch()){
    $temp = array();
    $temp['ciudadServicio'] =$ciudadServicio;
    array_push($ciudades, $temp);
}

echo json_encode($ciudades);
?>