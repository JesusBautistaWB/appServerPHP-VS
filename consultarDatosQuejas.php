<?php


$RFC = $_REQUEST['RFC'];


$host="localHost";
	$basedatos="semedicbd2";
	$user="root";
	$pass="Q1w2e3r4.";
	$puerto="3306";

	try
	{
		$bd = new PDO("mysql:host=".$host.";dbname=".$basedatos."; charset=UTF8; port=".$puerto, $user, $pass);
		$bd->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
                $res= $bd->query("SELECT ID_Queja, Comentario, Estatus,  A.Tipo, Fecha 
		FROM tb_quejas Q, tb_estatusqueja E, tb_area A
		WHERE Folio_Persona='$RFC' AND Q.ID_Estatus=E.ID_Estatus AND A.ID_Area = Q.ID_Area ORDER BY Fecha DESC");
           
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