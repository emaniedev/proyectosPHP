<!DOCTYPE html>
<!--
Edgar Maniega Medrano

pregunta 6 examen
-->

<?php
$conexion = new mysqli('localhost', 'root', '', 'colegio');

$sql = "SELECT * FROM alumnos";

$resultado = $conexion->query($sql);

$alumnos = array(array());
$mediaEdad = 0;
$acumuladorEdad = 0;
$cuenta=0;
$mayores = array(array());
    
foreach ($resultado as $value) {
    $acumuladorEdad += $value['edad'];
    $cuenta++;
    
}

$mediaEdad = $acumuladorEdad / $cuenta;

$indice = 0;
foreach ($resultado as $value) {
    
    if ($value['edad'] > $mediaEdad){
        $mayores[$indice] = $value;
        $indice++;
            
    }

};

var_dump($acumuladorEdad);
var_dump($mayores)
?>
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        
        <table>
            <tr>
                <th>Nombre</th>
                <th>Edad </th>
                <th>Sexo</th>
            </tr>
            
                <?php 
                foreach ($mayores as $item){
                    echo "<tr></tr>";
                    echo "<td>".$item['nombre']."</td>";
                    echo "<td>".$item['edad']."</td>";
                    echo "<td>".$item['sexo']."</td>";
                    echo "<tr></tr>";
                }
                ?>
            <tr>
                <td colspan="3">
                    La media de edad es: <?php echo $mediaEdad?>
                </td>
            </tr>
        </table>
        <?php
        // put your code here
        ?>
    </body>
</html>
