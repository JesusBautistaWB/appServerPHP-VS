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
                $res= $bd->query("SELECT DISTINCT P.Matriz AS matriz
				FROM cat_sucursales S, tb_direcciones D, tb_tel_proveedor T, cat_entidades E, cat_proveedores P, tb_recursos_medicos_empresas R
				Where S.ID_Dir = D.ID_Direccion AND S.Sucursal = T.Sucursal AND D.EDO = E.Catalog_Key AND S.ID_Proveedor = P.Num_Proveedor
				AND R.ID_Proveedor = S.ID_Proveedor AND TipoServicio != 'C' AND R.ID_Empresa = '$ID_Empresa'");
           
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