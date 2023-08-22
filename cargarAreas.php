<?php

$ID_Empresa = $_REQUEST['idEmpresa'];
$host="localHost";
	$basedatos="semedicbd2";
	$user="root";
	$pass="Q1w2e3r4.";
	$puerto="3306";

	try
	{
		$bd = new PDO("mysql:host=".$host.";dbname=".$basedatos."; charset=UTF8; port=".$puerto, $user, $pass);
		$bd->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
                $res= $bd->query("SELECT Concat(ID_Area,' ', Tipo) AS Tipo From tb_area");
           
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