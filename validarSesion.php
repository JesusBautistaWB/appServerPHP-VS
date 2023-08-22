<?php
$NumAf = $_REQUEST['numAf'];
$Pass = $_REQUEST['pass'];
$host="localHost";
	$basedatos="semedicbd2";
	$user="root";
	$pass="Q1w2e3r4.";
	$puerto="3306";
	try
	{
		$bd = new PDO("mysql:host=".$host.";dbname=".$basedatos."; charset=UTF8; port=".$puerto, $user, $pass);
		$bd->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
        $res= $bd->query("SELECT S.Nombre, Primer_Apellido, Segundo_Apellido, ID_Empresa_Afiliado, E.Nombre as NombreEmpresa, E.telefonoEmpresa
FROM semedicbd2.tb_pacientes P, semedicbd2.tb_personas S, semedicbd2.cat_empresas E
WHERE P.Folio_Persona=S.Folio AND P.Num_Afiliacion_Empresa= '$NumAf' AND P.ClaveApp = '$Pass' 
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