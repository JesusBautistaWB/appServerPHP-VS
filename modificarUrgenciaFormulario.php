<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Modificar Urgencia</title>
	<link rel="stylesheet" href="boton.css">
	<style>
		body{font-family: Arial; background-color: #18A383; box-sizing: border-box;}

		form{
			background-color: white;
			border-radius: 3px;
			color: #999;
			font-size: 0.8em;
			padding: 20px;
			margin: 0 auto;
			width: 300px;
		}

		input, textarea{
			border: 0;
			outline: none;
		   font-size: 15px;
			width: 280px;
			text-align: center;
		}

		.field{
			border: solid 1px #ccc;
			padding: 10px;

			
		}

		.field:focus{
			border-color: #18A383;
		}

		.center-content{
			text-align: center;
		}

	</style>
</head>
<body>
  
	
	
		<?php 
		require "conexion.php";
	        $id = $_GET['idU']; 

		$conexion = new mysqli($host,$user,$pass,$basedatos);
		$sql="SELECT *FROM semedicbd.tb_avisos_urgencias WHERE id_Urgencia=".$id;
		$result=mysqli_query($conexion,$sql);
		while($mostrar=mysqli_fetch_array($result)){
		
		?>
		<form method="POST" action="modificarUrgenciaFunction.php">
		<p> Id de Urgencia:</p>
	
		<h1></h1><input type="text" name ="idUr" class="field" value="<?php echo $mostrar['id_Urgencia'] ?>" readonly><br/></h1>
		
		<p>Usuario:</p>
		<h1><?php echo $mostrar['id_Usuario'] ?></h1
		
		<p>Fecha de urgencia:</p>
		<h1><?php echo $mostrar['FechaUrg'] ?></h1>
		
		<p>Telefono:</p>
		<h1><?php echo $mostrar['ClienteTelefono'] ?></h1>
		
		<p>Asunto:</p>
		<h1><?php echo $mostrar['asuntoUrgencia'] ?></h1>
		
		<p>A continuacion, describa si la urgencia ya fue atendida, y datos importantes de esta:</p>
		<input type="text" class="field" name="respuesta" value="<?php echo $mostrar['EstatusUrgencia'] ?>" ><br/>
		
	
		
		<?php 	}	?>
		
		<p class="center-content">
		
			<button type="submit">Guardar Cambios</button>
		</p>

	</form>
</body>
</html>