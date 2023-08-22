<?php

$numAf = $_REQUEST['numAf'];
$host="localHost";
	$basedatos="semedicbd2";
	$user="root";
	$pass="Q1w2e3r4.";
	$puerto="3306";

	try
	{
		$bd = new PDO("mysql:host=".$host.";dbname=".$basedatos."; charset=UTF8; port=".$puerto, $user, $pass);
		$bd->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
                $res= $bd->query("SELECT avisoPrivacidad
 FROM 
		tb_pacientes P, tb_personas S, cat_empresas E
WHERE P.Folio_Persona=S.Folio 
		AND Num_Afiliacion_Empresa= '$numAf' 
AND P.ID_Empresa_Afiliado=E.ID_Empresa");
           
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