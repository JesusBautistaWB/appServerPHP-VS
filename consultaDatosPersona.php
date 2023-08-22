<?php


$RFC = $_REQUEST['RFC'];


$host="localHost";
	$basedatos="semedicbd";
	$user="root";
	$pass="Q1w2e3r4.";
	$puerto="3306";

	try
	{
		$bd = new PDO("mysql:host=".$host.";dbname=".$basedatos."; charset=UTF8; port=".$puerto, $user, $pass);
		$bd->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
                $res= $bd->query("SELECT Nombre, Primer_Apellido, Segundo_Apellido FROM tb_personas WHERE RFC= '$RFC'");
           
                $datos= array();
                foreach($res as $row){
                $datos[]= $row;
                } 


                
                echo json_encode($datos);
                       

              
	}
	catch(PDOException $e)
	{
		echo "<br><br>Ocurrio un error:-> ".$e->getMessage();
	}
         




?>