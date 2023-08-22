<?php
require_once('conexion.php');

$conn = new  mysqli($servername,$username,$password,$db_name);

$tipoServicioRQ = $_REQUEST['tipoServicio'];
$giroServicioRQ = $_REQUEST['giroServicio'];
$ciudadServicioRQ = $_REQUEST['ciudadServicio'];

if(mysqli_connect_error()){
    echo "fallo al conectar con MySQL: " . mysqli_connect_error();
    die();
}
$eq = "";
if(strcmp($giroServicioRQ,$eq) === 0 and strcmp($ciudadServicioRQ,$eq) === 0){
    $stmt = $conn->prepare("Select nombreServicio,tipoServicio,giroServicio,ciudadServicio,direccionServicio,telefonoServicio FROM servicios where  tipoServicio =?");

$stmt->bind_param('s', $tipoServicioRQ);

$stmt->execute();

$stmt->bind_result($nombreServicio,$tipoServicio,$giroServicio,$ciudadServicio,$direccionServicio,$telefonoServicio);

$servicios = array();
while($stmt->fetch()){
    $temp = array();
    $temp['nombreServicio'] = $nombreServicio;
    $temp['tipoServicio'] =$tipoServicio;
    $temp['giroServicio'] =$giroServicio;
    $temp['ciudadServicio'] = $ciudadServicio;
    $temp['direccionServicio'] =$direccionServicio;
    $temp['telefonoServicio']=$telefonoServicio;
    array_push($servicios, $temp);
}

echo json_encode($servicios);
    
}

if(strcmp($giroServicioRQ,$eq) === 0 and strcmp($ciudadServicioRQ,$eq) >1){
    $stmt = $conn->prepare("Select nombreServicio,tipoServicio,giroServicio,ciudadServicio,direccionServicio,telefonoServicio FROM servicios where  tipoServicio =? AND ciudadServicio = ?");

$stmt->bind_param('ss', $tipoServicioRQ, $ciudadServicioRQ);

$stmt->execute();

$stmt->bind_result($nombreServicio,$tipoServicio,$giroServicio,$ciudadServicio,$direccionServicio,$telefonoServicio);

$servicios = array();
while($stmt->fetch()){
    $temp = array();
    $temp['nombreServicio'] = $nombreServicio;
    $temp['tipoServicio'] =$tipoServicio;
    $temp['giroServicio'] =$giroServicio;
    $temp['ciudadServicio'] = $ciudadServicio;
    $temp['direccionServicio'] =$direccionServicio;
    $temp['telefonoServicio']=$telefonoServicio;
    array_push($servicios, $temp);
}

echo json_encode($servicios);
    
}

if(strcmp($giroServicioRQ,$eq) > 1 and strcmp($ciudadServicioRQ,$eq) === 0){
    $stmt = $conn->prepare("Select nombreServicio,tipoServicio,giroServicio,ciudadServicio,direccionServicio,telefonoServicio FROM servicios where  giroServicio =? AND tipoServicio = ?");

$stmt->bind_param('ss', $giroServicioRQ, $tipoServicioRQ);

$stmt->execute();

$stmt->bind_result($nombreServicio,$tipoServicio,$giroServicio,$ciudadServicio,$direccionServicio,$telefonoServicio);

$servicios = array();
while($stmt->fetch()){
    $temp = array();
    $temp['nombreServicio'] = $nombreServicio;
    $temp['tipoServicio'] =$tipoServicio;
    $temp['giroServicio'] =$giroServicio;
    $temp['ciudadServicio'] = $ciudadServicio;
    $temp['direccionServicio'] =$direccionServicio;
    $temp['telefonoServicio']=$telefonoServicio;
    array_push($servicios, $temp);
}

echo json_encode($servicios);
    
}


?>