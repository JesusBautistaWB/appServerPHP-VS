<?php
    require 'login.php';

    function buscaQuejas(){    
        global $bd;
        $query = $bd->prepare("SELECT Fecha,ID_Queja,Indice,(SELECT Tipo FROM tb_incidencia WHERE ID_Incidencia = tb_quejas.Incidencia_ID) AS Incidencia,(SELECT Tipo FROM tb_area WHERE ID_Area = tb_quejas.Area_ID) AS Area,Comentario, Estatus_ID,(SELECT Estatus from tb_estatusqueja WHERE ID_Estatus = tb_quejas.Estatus_ID) as Estatus FROM tb_quejas ORDER BY fecha");
        $query->execute();
        return $query->FetchAll();
    }
   function buscaEstatus($estatus){
        global $bd;
        $query = $bd->prepare("SELECT * FROM tb_estatusqueja WHERE ID_Estatus <> $estatus");
        $query->execute();
        return $query->FetchAll();
    }

 function buscaIncidencias(){    
        global $bd;
        $query = $bd->prepare("SELECT ID_Incidencia,Tipo FROM tb_incidencia");
        $query->execute();
        return $query->FetchAll();
        
    }

   
?>