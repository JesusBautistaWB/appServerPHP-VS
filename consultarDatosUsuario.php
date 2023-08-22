<?PHP
require_once('conexion.php');

$conn = new  mysqli($servername,$username,$password,$db_name);

$clienteNombre = $_REQUEST['clienteNombre'];
$clientePassword = $_REQUEST['clientePassword'];

if(mysqli_connect_error()){
    echo "fallo al conectar con MySQL: " . mysqli_connect_error();
    die();
}

$stmt = $conn->prepare("Select clienteID,clienteNombre,clientePassword, telefonoCliente, empresaCliente,clienteNombres,clienteApellidos FROM clientes where clienteNombre =?  AND clientePassword =?");

$stmt->bind_param('ss',$clienteNombre, $clientePassword);

$stmt->execute();

$stmt->bind_result($clienteID,$clienteNombre,$clientePassword,$telefonoCliente,$empresaCliente,$clienteNombres,$clienteApellidos);


$datos = array();
while($stmt->fetch()){
    $temp = array();
    $temp['clienteID'] = $clienteID;
    $temp['clienteNombre'] =$clienteNombre;
    $temp['clientePassword'] = $clientePassword;
    $temp['telefonoCliente'] =$telefonoCliente;
    $temp['empresaCliente']=$empresaCliente;
    $temp['clienteNombres'] =$clienteNombres;
    $temp['clienteApellidos'] =$clienteApellidos;
    array_push($datos, $temp);
}

echo json_encode($datos);
?>