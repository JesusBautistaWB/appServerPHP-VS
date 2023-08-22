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
<META HTTP-EQUIV="REFRESH" CONTENT="60;URL=urgenciasAdmin.php"> </head>
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

       

	        $conexion = new mysqli($host,$user,$pass,$basedatos);
		$sql="SELECT * FROM semedicbd.tb_avisos_urgencias ORDER BY FechaUrg DESC";
		//$result=mysqli_query($conexion,$sql);
                

                $result = $conexion->query($sql);
//foreach($result as $row){
//print_r($row); }

               while($mostrar=mysqli_fetch_assoc($result)){

               
		 ?>

		<tr>
			<td><?php echo $mostrar['id_Urgencia'] ?></td>
			<td><?php echo $mostrar['Id_Usuario'] ?></td>
			<td><?php echo $mostrar['asuntoUrgencia'] ?></td>
			<td><?php echo $mostrar['ClienteTelefono'] ?></td>
			<td><?php echo $mostrar['FechaUrg'] ?></td>
			<td><?php echo $mostrar['EstatusUrgencia'] ?></td>
			<td><button><a href='modificarUrgenciaFormulario.php?idU="<?php echo $mostrar['id_Urgencia'] ?>"' method= "POST">  RESPONDER </a></button></td>
			<td><button> <a href='eliminarUrgenciaFunction.php?idUr="<?php echo $mostrar['id_Urgencia'] ?>"' method= "POST">ELIMINAR</button></td>
		
			
		</tr>
	<?php 
	}
	 ?>
	</table>
	</center>
	</body>
