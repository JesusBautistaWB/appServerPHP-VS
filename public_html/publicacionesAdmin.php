<?php 
require "conexion.php";
require "functions.php";
menu();
 ?>
 <head>
	<meta charset="UTF-8">
	<title>Publicaciones</title>
	<link rel="stylesheet" href="tabla.css">
</head>
<body>
 <center>
     <div id="main-container">
	<table border="1" >
	   
		<tr>
		     <thead>
			<td>ID</td>
			<td>Titulo</td>
			<td>Ruta de Imagen</td>
			<td>Contenido</td>
			<td></td>
		   <td></td>
			</thead>
		</tr>

		<?php 
		$conexion = mysqli_connect($servername,$username,$password,$db_name);
		$sql="SELECT * from publicaciones ORDER BY idPublicacion DESC";
		$result=mysqli_query($conexion,$sql);

		while($mostrar=mysqli_fetch_array($result)){
		 ?>

		<tr>
			<td><?php echo $mostrar['idPublicacion'] ?></td>
			<td><?php echo $mostrar['tituloPublicacion'] ?></td>
			<td><?php echo $mostrar['imagenPublicacion'] ?></td>
			<td><?php echo $mostrar['contenidoPublicacion'] ?></td>
			<td><button><a href='modificarPostFormulario.php?idU="<?php echo $mostrar['idPublicacion'] ?>"' method= "POST">  EDITAR </a></button></td>
			<td><button> <a href='eliminarPostFunction.php?idUr="<?php echo $mostrar['idPublicacion'] ?>"' method= "POST">ELIMINAR</button></td>
		
			
		</tr>
	<?php 
	}
	 ?>
	</table>
	</center>
	</body>