<?PHP
require_once('conexion.php');
require_once('functionsAPP.php');
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Quejas</title>
</head>
<body>  
    <table>
        <tr>
            <th scope="col">ID_Incidencia</th>
            <th scope="col">TIPO</th>
            
        </tr>
        <tbody>
        <?php
            $incidencias = buscaIncidencias(); 
            $inci = array(); //ARREGLO INICIAL

            foreach($incidencias as $valorIncidencia){
            $inc = array(); // ARREGLO QUE CONTENDRA LOS REGISTROS
                echo "<tr>";
                echo "<td>".$valorIncidencia['ID_Incidencia']."</td>";
                $inc['ID_Incidencia'] = $valorIncidencia['ID_Incidencia'];
                echo "<td>". utf8_encode($valorIncidencia['Tipo'])."</td>"; //SE CONDIFICA A UTF8 PARA PERMITIR ACENTOS
                $inc['Tipo'] = utf8_encode($valorIncidencia['Tipo']);
                array_push($inci,$inc); // SE REGISTRA CADA REGISTRO EN UN ESPACIO DEL ARREGLO INICIAL
            }
        echo '</tbody> </table>';
     
              print_r($inci); //SE IMPRIME EL ARREGLO FINAL
              echo json_encode($inci); SE IMPRIME EL ARREGLO FINAL EN FORMATO JSON
      
    ?>        

</body>
</html>