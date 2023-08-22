<?php


function menu(){
    ?>
    <head meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta charset="utf-8">
   <title>Administrador de Aplicación Semedic</title>
   	<link rel="stylesheet" href="estilos.css">
  </head>
     <body>
	    <center>
	        <br>
	        <img src= "https://semedic.000webhostapp.com/logo.png" width="550" height="241">
		<nav class="navegacion">
			<ul class="menu">
			   
				<li><a href="urgenciasAdmin.php">Atender Urgencias</a></li>
				<li><a href="incidenciasAdmin.php">Atender Incidencias</a></li>
				<li><a href="#">Publicaciones</a>
				<ul class="submenu">
						<li><a href="https://semedic.000webhostapp.com/buscarPublicaciones.php" target="_blank">Ver publicaciones</a></li>
						<li><a href="publicacionesAdmin.php">Administrar publicaciones</a></li>
						<li><a href="insertarPostFormulario.php">Insertar publicacion</a></li>
					</ul>
				</li>
			</ul>
		</nav>
		</center>
		</body>
<?php
}
?>