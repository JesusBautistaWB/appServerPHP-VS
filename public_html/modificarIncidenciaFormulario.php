<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Modificar Incidencia</title>
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

		$conexion = mysqli_connect($servername,$username,$password,$db_name);
		$sql="SELECT *FROM incidencias WHERE idSeguimiento=".$id;
		$result=mysqli_query($conexion,$sql);
		while($mostrar=mysqli_fetch_array($result)){
		
		?>
		<form method="POST" action="modificarIncidenciaFunction.php">
		<p> Id de Segumiento a la incidencia:</p>
	
		<h1></h1><input type="text" name ="idUr" class="field" value="<?php echo $mostrar['idSeguimiento'] ?>" readonly><br/></h1>
		
		<p>Usuario:</p>
		<h1><?php echo $mostrar['idUsuario'] ?></h1
		
		<p>Tipo incidencia:</p>
		<h1><?php echo $mostrar['tipoIncidencia'] ?></h1>
		
		<p>Fecha:</p>
		<h1><?php echo $mostrar['fechaInc'] ?></h1>
		
		<p>Asunto:</p>
		<h1><?php echo $mostrar['asuntoIncidencia'] ?></h1>
		
	
		
		<p>A continuacion, describa si la urgencia ya fue atendida, y datos importantes de esta:</p>
		<input type="text" class="field" name="respuesta" value="<?php echo $mostrar['respuestaIncidencia'] ?>" ><br/>
		
		<?php 	}	?>
		
		<p class="center-content">
		
			<button type="submit">Guardar Cambios</button>
		</p>

	</form>
</body>
</html>