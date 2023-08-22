<?PHP
require_once('conexion.php');

$conn = new  mysqli($servername,$username,$password,$db_name);

$medicoCiudadRQ = $_REQUEST['medicoCiudad'];
$medicoEspecialidadRQ = $_REQUEST['medicoEspecialidad'];
$medicoGeneroRQ = $_REQUEST['medicoGenero'];
$empresaClienteRQ = $_REQUEST['empresaCliente'];

if(mysqli_connect_error()){
    echo "fallo al conectar con MySQL: " . mysqli_connect_error();
    die();
}


$eq = "";
 if(strcmp($medicoGeneroRQ,$eq) === 0 and strcmp($medicoCiudadRQ,$eq) === 0){
        
            $stmt = $conn->prepare("Select medicoCedula,medicoNombre,medicoLocalidad,medicoDomicilio,medicoEspecialidad,medicoCiudad,medicoTelefono,medicoHorario,medicoEmpresa,medicoGenero,medicoTipoServicio FROM medicos WHERE medicoEspecialidad =?  AND medicoEmpresa= ?");

$stmt->bind_param('ss',$medicoEspecialidadRQ, $empresaClienteRQ);

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
        
    } 
    
 if(strcmp($medicoGeneroRQ,$eq) === 0 and strcmp($medicoCiudadRQ,$eq) > 1){
            $stmt = $conn->prepare("Select medicoCedula,medicoNombre,medicoLocalidad,medicoDomicilio,medicoEspecialidad,medicoCiudad,medicoTelefono,medicoHorario,medicoEmpresa,medicoGenero,medicoTipoServicio FROM medicos WHERE medicoEspecialidad =?  AND medicoEmpresa= ? AND medicoCiudad = ?");

$stmt->bind_param('sss',$medicoEspecialidadRQ, $empresaClienteRQ,$medicoCiudadRQ);

$stmt->execute();

$stmt->bind_result($medicoCedula,$medicoNombre,$medicoLocalidad,$medicoDomicilio,$medicoEspecialidad,$medicoCiudad,$medicoTelefono,$medicoHorario,$medicoEmpresa,$medicoGenero,$medicoTipoServicio);

$medicos2 = array();
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
    array_push($medicos2, $temp);
}

echo json_encode($medicos2);
        
    } 
    
    
    if(strcmp($medicoGeneroRQ,$eq) >1 and strcmp($medicoCiudadRQ,$eq) === 0){
    $stmt = $conn->prepare("Select medicoCedula,medicoNombre,medicoLocalidad,medicoDomicilio,medicoEspecialidad,medicoCiudad,medicoTelefono,medicoHorario,medicoEmpresa,medicoGenero,medicoTipoServicio FROM medicos WHERE medicoEspecialidad =?  AND medicoEmpresa= ? AND medicoGenero = ?");

$stmt->bind_param('sss',$medicoEspecialidadRQ, $empresaClienteRQ,$medicoGeneroRQ);

$stmt->execute();

$stmt->bind_result($medicoCedula,$medicoNombre,$medicoLocalidad,$medicoDomicilio,$medicoEspecialidad,$medicoCiudad,$medicoTelefono,$medicoHorario,$medicoEmpresa,$medicoGenero,$medicoTipoServicio);

$medicos2 = array();
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
    array_push($medicos2, $temp);
}

echo json_encode($medicos2);
        
    } 
?>