<?php // login.php
    /*$db_hostname = 'localhost';
    $db_database = 'semedicbd';
    $db_username = 'root';
    $db_password = '';*/
	$host="localhost";
	$basedatos="semedicbd";
	$user="root";
	$pass="Q1w2e3r4.";
	$puerto="3306";

	try
	{
		$bd = new PDO("mysql:host=".$host.";dbname=".$basedatos.";port=".$puerto, $user, $pass);
		$bd->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
	}
	catch(PDOException $e)
	{
		echo "<br><br>Ocurrio un error:-> ".$e->getMessage();
	}

?>
