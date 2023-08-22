<?PHP
require_once('conexion.php');

$conn = new  mysqli($servername,$username,$password,$db_name);

$medicoNombreRQ = $_REQUEST['medicoNombre'];

if(mysqli_connect_error()){
    echo "fallo al conectar con MySQL: " . mysqli_connect_error();
    die();
}


$stmt = $conn->prepare("Select medicoCedula,medicoNombre,medicoLocalidad,medicoDomicilio,medicoEspecialidad,medicoCiudad,medicoTelefono,medicoHorario,medicoEmpresa,medicoGenero,medicoTipoServicio FROM medicos where medicoNombre LIKE ?");

$stmt->bind_param('s',$medicoNombreRQ);

$stmt->execute();

$stmt->bind_result($medicoCedula,$medicoNombre,$medicoLocalidad,$medicoDomicilio,$medicoEspecialidad,$medicoCiudad,$medicoTelefono,$medicoHorario,$medicoEmpresa,$medicoGenero,$medicoTipoServicio);

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
    $temp['medicoEmpresa'] =$medicoEmpresa;
    $temp['medicoGenero'] = $medicoGenero;
    $temp['medicoEmpresa'] = $medicoEmpresa;
    $temp['medicoTipoServicio'] = $medicoTipoServicio;
    array_push($medicos, $temp);
}
echo json_encode($medicos);
?>