<?php
	$host="localHost";
	$basedatos="semedicbd";
	$user="root";
	$pass="Q1w2e3r4.";
	$puerto="3306";

	try
	{
		$bd = new PDO("mysql:host=".$host.";dbname=".$basedatos.";port=".$puerto, $user, $pass);
		$bd->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
                echo "CONEXION ESTABLECIDA";
	}
	catch(PDOException $e)
	{
		echo "<br><br>Ocurrio un error:-> ".$e->getMessage();
	}

    //127.0.0.1
?>