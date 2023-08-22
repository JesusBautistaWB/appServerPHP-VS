<?php 
require "conexion.php";
require "functions.php";
menu();
 ?>
 <head>
	<meta charset="UTF-8">
	<title>Urgencias</title>
	<link rel="stylesheet" href="tabla.css">
</head>
<META HTTP-EQUIV="REFRESH" CONTENT="5;URL=urgenciasAdmin.php"> </head>
<body>
 <center>
     <div id="main-container">
	<table border="1" >
	   
		<tr>
		     <thead>
			<td>ID Urgencia</td>
			<td>Usuario</td>
			<td>Asunto</td>
			<td>Telefono</td>
			<td>Fecha</td>
			<td>Estatus</td>
			<td></td>
		   <td></td>
			</thead>
		</tr>

		<?php 
		$conexion = mysqli_connect($servername,$username,$password,$db_name);
		$sql="SELECT * from urgencias ORDER BY fechaUrg DESC";
		$result=mysqli_query($conexion,$sql);

		while($mostrar=mysqli_fetch_array($result)){
		 ?>

		<tr>
			<td><?php echo $mostrar['idUrgencia'] ?></td>
			<td><?php echo $mostrar['idUsuario'] ?></td>
			<td><?php echo $mostrar['asuntoUrgencia'] ?></td>
			<td><?php echo $mostrar['clienteTelefono'] ?></td>
			<td><?php echo $mostrar['fechaUrg'] ?></td>
			<td><?php echo $mostrar['estatusUrgencia'] ?></td>
			<td><button><a href='modificarUrgenciaFormulario.php?idU="<?php echo $mostrar['idUrgencia'] ?>"' method= "POST">  RESPONDER </a></button></td>
			<td><button> <a href='eliminarUrgenciaFunction.php?idUr="<?php echo $mostrar['idUrgencia'] ?>"' method= "POST">ELIMINAR</button></td>
		
			
		</tr>
	<?php 
	}
	 ?>
	</table>
	</center>
	</body>
