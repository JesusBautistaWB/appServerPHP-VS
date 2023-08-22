<?PHP
require_once('conexion.php');

$conn = new  mysqli($servername,$username,$password,$db_name);

if(mysqli_connect_error()){
    echo "fallo al conectar con MySQL: " . mysqli_connect_error();
    die();
    
}

$stmt = $conn->prepare("Select DISTINCT giroServicio FROM servicios;");

$stmt->execute();

$stmt->bind_result($giroServicio);

$giros = array();
$iws = array();
$iws['giroServicio']='';
array_push($giros,$iws);
while($stmt->fetch()){
    $temp = array();
    $temp['giroServicio']=$giroServicio;
    array_push($giros, $temp);
}

echo json_encode($giros);
?>