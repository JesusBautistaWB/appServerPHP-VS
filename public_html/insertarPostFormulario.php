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
  
	
		<form method="POST" action="insertarPublicacion.php">
		
		<p>Inserte Titulo de publicación:</p>
		<input type="text" class="field" required name="titulo" value="" ><br/>
		
		
		<p>Inserte Ruta de imagen:</p>
		<input type="text" class="field" name="imagen" value="" ><br/>
		

		
		<p>Inserte Contenido:</p>
		<input type="text" class="field" name="contenido" value="" ><br/>
		
		
		
		<p class="center-content">
		
			<button type="submit">Guardar Cambios</button>
		</p>

	</form>
</body>
</html>