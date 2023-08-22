<?PHP
require_once('conexion.php');

$conn = new  mysqli($servername,$username,$password,$db_name);

if(mysqli_connect_error()){
    echo "fallo al conectar con MySQL: " . mysqli_connect_error();
    die();
    
}

$stmt = $conn->prepare("Select medicoCedula,medicoNombre,medicoLocalidad,medicoEspecialidad,medicoCiudad,medicoDomicilio,medicoTelefono,medicoHorario FROM medicos;");

$stmt->execute();

$stmt->bind_result($medicoCedula,$medicoNombre,$medicoLocalidad,$medicoEspecialidad,$medicoCiudad,$medicoDomicilio,$medicoTelefono,$medicoHorario);
$list_medicos = array();

$medicos = array();
while($stmt->fetch()){
    $temp = array();
    $temp['medicoCedula'] = $medicoCedula;
    $temp['medicoNombre'] =$medicoNombre;
    $temp['medicoLocalidad'] = $medicoLocalidad;
    $temp['medicoDomicilio'] =$medicoDomicilio;
    $temp['medicoEspecialidad']=$medicoEspecialidad;
    $temp['medicoCiudad'] =$medicoCiudad;
    $temp['medicoTelefono'] =$medicoTelefono;
    $temp['medicoHorario'] =$medicoHorario;
    array_push($medicos, $temp);
}

echo json_encode($medicos);
?>