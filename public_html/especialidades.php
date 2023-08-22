<?PHP
require_once('conexion.php');

$conn = new  mysqli($servername,$username,$password,$db_name);

if(mysqli_connect_error()){
    echo "fallo al conectar con MySQL: " . mysqli_connect_error();
    die();
    
}

$stmt = $conn->prepare("Select DISTINCT medicoEspecialidad FROM medicos;");

$stmt->execute();

$stmt->bind_result($medicoEspecialidad);
$list_medicos = array();

$medicos = array();
$iws = array();
$iws['medicoEspecialidad']='';
array_push($medicos,$iws);
while($stmt->fetch()){
    $temp = array();
    $temp['medicoEspecialidad']=$medicoEspecialidad;
    array_push($medicos, $temp);
}

echo json_encode($medicos);
?>