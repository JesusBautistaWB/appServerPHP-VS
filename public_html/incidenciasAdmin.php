<?php 
require "conexion.php";
require "functions.php";
menu();
 ?>
 <head>
	<meta charset="UTF-8">
	<title>Incidencias</title>
	<link rel="stylesheet" href="tabla.css">
</head>
<META HTTP-EQUIV="REFRESH" CONTENT="30;URL=incidenciasAdmin.php"> </head>

<body>
 <center>
     <div id="main-container">
	<table border="1">
	   
		<tr>
		     <thead>
			<td>ID </td>
			<td>Usuario</td>
			<td>Tipo</td>
			<td>Asunto</td>
			<td>Estatus</td>
			<td>Fecha</td>
			<td></td>
			<td></td>
			</thead>
		</tr>

		<?php 
		$conexion = mysqli_connect($servername,$username,$password,$db_name);
		$sql="SELECT * from incidencias ORDER BY fechaInc DESC";
		$result=mysqli_query($conexion,$sql);

		while($mostrar=mysqli_fetch_array($result)){
		 ?>

		<tr>
			<td><?php echo $mostrar['idSeguimiento'] ?></td>
			<td><?php echo $mostrar['idUsuario'] ?></td>
			<td><?php echo $mostrar['tipoIncidencia'] ?></td>
			<td><?php echo $mostrar['asuntoIncidencia'] ?></td>
			<td><?php echo $mostrar['respuestaIncidencia'] ?></td>
			<td><?php echo $mostrar['fechaInc'] ?></td>
			<td><button><a href='modificarIncidenciaFormulario.php?idU="<?php echo $mostrar['idSeguimiento'] ?>"' method= "POST">  RESPONDER </a></button></td>
			<td><button> <a href='eliminarIncidenciaFunction.php?idUr="<?php echo $mostrar['idSeguimiento'] ?>"' method= "POST">ELIMINAR</button></td>
		</tr>
	<?php 
	}
	 ?>
	 </center>
	</table>
	