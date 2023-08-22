<?PHP
require_once('conexion.php');
require_once('functionsAPP.php');
echo "INICIANDO...";
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../Contador/estiloContador.css">
    <title>Quejas</title>
</head>
<body>  
    <table>
        <tr>
            <th scope="col">Fecha</th>
            <th scope="col">Queja</th>
            <th scope="col">Indice</th>
            <!-- <th scope="col">Afiliacion</th> -->
            <th scope="col">Incidencias</th>
            <th scope="col">Area</th>
            <th scope="col">Comentario</th>
            <th scope="col">Estatus</th>
            <th scope="col">Respuesta</th>
            
        </tr>
        <tbody>
        <?php
            $quejas = buscaQuejas(); 
            foreach($quejas as $valorQueja){
                echo "<tr>";
                echo "<td>".$valorQueja['Fecha']."</td>";
                echo "<td>". $valorQueja['ID_Queja']."</td>";
                echo "<td>". $valorQueja['Indice']."</td>";
                echo "<td>". $valorQueja['Incidencia']."</td>";
                echo "<td>". $valorQueja['Area']."</td>";
                echo "<td>". $valorQueja['Comentario']."</td>";
                echo '<td><select class="lista" id="estatus" name="estatus">';
                    echo "<option value=".$valorQueja['Estatus_ID'].">".$valorQueja['Estatus']."</option>";
                    //require 'consulta.php';
                    $estatus = buscaEstatus($valorQueja['Estatus_ID']);
                    foreach ($estatus as $valorEstatus){
                        echo "<option value=".$valorEstatus['ID_Estatus'].">".$valorEstatus['Estatus']."</option>";
                    }
                echo '</select>
                </td>
                <td><textarea id="respuesta" type="text" name="respuesta" placehold="Respuesta"></textarea></td>
                </tr>';
            }
        echo '</tbody>
    </table>
    <button value="enviar datos" id="enviar"></button>';
    ?>        

</body>
</html>