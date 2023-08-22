<?php

$tipoServicio = $_REQUEST['tipoServicio'];

$matriz = $_REQUEST['matriz'];

$ciudadServicio = $_REQUEST['ciudadServicio'];

$idEmpresa = $_REQUEST['idEmpresa'];




$host="localHost";
	$basedatos="semedicbd2";
	$user="root";
	$pass="Q1w2e3r4.";
  $puerto="3306";
  
 
if(($ciudadServicio == 'SE IGNORA' OR $ciudadServicio == 'NO APLICA' OR $ciudadServicio == 'NO ESPECIFICADO' )){
$A= "";
} else { $A=" AND Entidad_Federativa = '$ciudadServicio'"; }


	try
	{
		$bd = new PDO("mysql:host=".$host.";dbname=".$basedatos."; charset=UTF8; port=".$puerto, $user, $pass);
		$bd->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);


$res= $bd->query("SELECT DISTINCT S.Sucursal,  S.ID_Proveedor, Nombre_Comercial,
 P.RazonSocial , Nombre_Comercial AS TipoServicioProveedor, P.Matriz, Entidad_Federativa AS Estado, concat(Colonia,' ', Calle, Num_Exterior,' ', Num_interior) AS Direccion,
 Colonia AS Municipio, URL_Maps,  T.Telefono
FROM cat_sucursales S, tb_direcciones D, tb_tel_proveedor T, cat_entidades E, cat_proveedores P, tb_recursos_medicos_empresas R
Where S.ID_Dir = D.ID_Direccion AND S.Sucursal = T.Sucursal AND D.EDO = E.Catalog_Key AND S.ID_Proveedor = P.Num_Proveedor AND P.Estatus = 'A'
AND R.ID_Proveedor = S.ID_Proveedor AND TipoServicio != 'C' AND P.RazonSocial = '$tipoServicio' AND P.Matriz ='$matriz'  ".$A);

      
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