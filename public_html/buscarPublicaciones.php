<?PHP
require_once('conexion.php');

$conn = new  mysqli($servername,$username,$password,$db_name);
if(mysqli_connect_error()){
    echo "fallo al conectar con MySQL: " . mysqli_connect_error();
    die();
}

$stmt = $conn->prepare("Select  tituloPublicacion, imagenPublicacion, contenidoPublicacion FROM publicaciones ORDER BY idPublicacion desc");
$stmt->execute();
?>
<head meta name="viewport" content="width=device-width, initial-scale=1.0"> 
</head>
<center> 
<body color="white">
<img src="logo.png" style= width:350px height:350px />
<br>
<FONT FACE=arial SIZE=2 COLOR=#5D73B3>Aqui puede enterarse de las ultimas noticias 
<br> que Grupo Semedic tiene para usted.</FONT> <p>
<br><br><br>

<?php
$stmt->bind_result($tituloPublicacion, $imagenPublicacion, $contenidoPublicacion);
$post = array();
while($stmt->fetch()){
    $temp = array();
    $temp['tituloPublicacion'] = $tituloPublicacion;
    echo "<FONT FACE=verdana SIZE=2 COLOR=#405696><strong>".$tituloPublicacion."</strong></FONT> <p>";
    $temp['imagenPublicacion'] =$imagenPublicacion;
    echo "<img src=".$imagenPublicacion." style=width:350px height:350px />";
    $temp['contenidoPublicacion'] = $contenidoPublicacion;
    echo "<center>". $contenidoPublicacion."<br><br><br></center>";
    echo "<p><p><p>";
   
    array_push($post, $temp);
}


?>