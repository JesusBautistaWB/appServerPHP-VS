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
		$conexion = new mysqli($host,$user,$pass,$basedatos);
               
		$sql="SELECT ID_Queja,Folio_Persona,Comentario,ID_Estatus,Fecha, Q.ID_Incidencia, Tipo 
                FROM semedicbd.tb_quejas Q, semedicbd.tb_incidencia I WHERE Q.ID_Incidencia = I.ID_Incidencia 
                ORDER BY ID_Queja DESC";
		$result=mysqli_query($conexion,$sql);

		while($mostrar=mysqli_fetch_array($result)){
		 ?>

		<tr>
			<td><?php echo $mostrar['ID_Queja'] ?></td>
			<td><?php echo $mostrar['Folio_Persona'] ?></td>
			<td><?php echo utf8_encode($mostrar['Tipo']) ?></td>
			<td><?php echo utf8_encode($mostrar ['Comentario']) ?></td>
			<td><?php echo $mostrar['ID_Estatus'] ?></td>
			<td><?php echo $mostrar['Fecha'] ?></td>
			<td><button><a href='modificarIncidenciaFormulario.php?idU="<?php echo $mostrar['ID_Queja'] ?>"' method= "POST">  RESPONDER </a></button></td>
			<td><button> <a href='eliminarIncidenciaFunction.php?idUr="<?php echo $mostrar['ID_Queja'] ?>"' method= "POST">ELIMINAR</button></td>
		</tr>
	<?php 
	}
	 ?>
	 </center>
	</table>
	