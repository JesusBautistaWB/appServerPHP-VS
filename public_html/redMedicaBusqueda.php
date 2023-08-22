<?PHP
require_once('conexion.php');
$json=array();

$conexion = mysqli_connect($servername,$username,$password,$db_name);
$consulta= "select *from medicos";
$resultado=mysqli_query($conexion,$consulta);

while($registro=mysqli_fetch_array($resultado)){
    $json['medico'][]=$registro;
    
    
}
mysqli_close($conexion);
echo json_encode($json);


?>