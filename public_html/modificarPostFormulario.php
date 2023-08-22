<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Editar Post</title>
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
		$sql="SELECT *FROM publicaciones WHERE idPublicacion=".$id;
		$result=mysqli_query($conexion,$sql);
		while($mostrar=mysqli_fetch_array($result)){
		
		?>
		<form method="POST" action="modificarPostFunction.php">
		<p> Id Publicación:</p>
	
		<h1></h1><input type="text" name ="id" class="field" value="<?php echo $mostrar['idPublicacion'] ?>" readonly><br/></h1>
		
		<p>Titulo:</p>
		<input type="text" class="field" name="titulo" value="<?php echo $mostrar['tituloPublicacion'] ?>" ><br/>
		
		
		<p>Ruta de imagen:</p>
		<input type="text" class="field" name="imagen" value="<?php echo $mostrar['imagenPublicacion'] ?>" ><br/>
		

		
		<p>Contenido:</p>
		<input type="text" class="field" name="contenido" value="<?php echo $mostrar['contenidoPublicacion'] ?>" ><br/>
		
		
		<?php 	}	?>
		
		<p class="center-content">
		
			<button type="submit">Guardar Cambios</button>
		</p>

	</form>
</body>
</html>