<?php

$Sexo = $_REQUEST['medicoGenero'];
$SX = "";
$Especialidad = $_REQUEST['medicoEspecialidad'];

$Estado = $_REQUEST['medicoCiudad'];
$ID_Empresa = $_REQUEST['medicoEmpresa'];

$host="localHost";
	$basedatos="semedicbd2";
	$user="root";
	$pass="Q1w2e3r4.";
   $puerto="3306";
   
   if(($Estado == 'SE IGNORA' OR $Estado == 'NO APLICA' OR $Estado == 'NO ESPECIFICADO' )){
      $A = "";
}else{
    $A = "AND P.Estado ='$Estado'";  
       }
 
       if(($Sexo == 'NO ESPECIFICADO')){
       $B = "";
        }else{

         if(($Sexo == 'MASCULINO')){
            $SX = "M";
            $B = "AND P.SEXO ='$SX'";   
             }
             else if(($Sexo == 'FEMENINO')){
               $SX = "F";
               $B = "AND P.SEXO ='$SX'";   
                }   
        }

  

try
	{
		$bd = new PDO("mysql:host=".$host.";dbname=".$basedatos."; charset=UTF8; port=".$puerto, $user, $pass);
      $bd->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);


$res= $bd->query("SELECT DISTINCT  P.RazonSocial, 
ES.Especialidad, Colonia AS Municipio, concat(Colonia,' ', Calle, Num_Exterior,' ', Num_interior) AS Direccion,
Entidad_Federativa AS Estado, URL_Maps,  T.Telefono
FROM cat_sucursales S, tb_direcciones D, tb_tel_proveedor T, cat_entidades E, cat_proveedores P, tb_recursos_medicos_empresas R, 
cat_especialidades ES, tb_recursosmedicos RM  Where S.ID_Dir = D.ID_Direccion AND S.Sucursal = T.Sucursal AND D.EDO = E.Catalog_Key 
AND S.ID_Proveedor = P.Num_Proveedor AND R.ID_Especialidad = ES.ID_Especialidad AND RM.ID_Proveedor = S.ID_Proveedor 
 AND R.ID_Empresa='$ID_Empresa' AND S.ID_Proveedor = RM.ID_Proveedor AND RM.Estatus = 'A' AND P.Estatus = 'A'
AND P.TipoServicio='C' AND ES.Especialidad = '$Especialidad' ".$A. " ". $B);

           
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