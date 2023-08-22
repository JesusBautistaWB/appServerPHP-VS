<?php
	$host="localHost";
	$basedatos="semedicbd2";
	$user="root";
	$pass="Q1w2e3r4.";
	$puerto="3306";

	try
	{
		$bdCON = new PDO("mysql:host=".$host.";dbname=".$basedatos.";port=".$puerto, $user, $pass);
		//$bdCON->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
                //echo "CONEXION ESTABLECIDA";
	}
	catch(PDOException $e)
	{
		echo "<br><br>Ocurrio un error:-> ".$e->getMessage();
	}

    

?>