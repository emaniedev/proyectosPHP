<html>
    <head>
        <meta charset="UTF-8">
        <title>ConsultasAvanzadas</title>
        <link rel="stylesheet" href="../patata.css"/>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
    </head>
    <body>
        <div class="container-fluid">
            <table class="table table-striped table-hover table-bordered">
                <tr class="success">
                    <th>Nombre</th>
                    <th>Edad</th>
                    <th>Sexo</th>
                    <th>Provincia</th>
                    <th>Ciclo</th>
                </tr>
                
<?php

if (!isset($conexion)){
    
    $conexion1 = new mysqli("localhost", "root", "", "colegio");

}

$campo = $_POST["campo"];
$contenido = $_POST["criterio"];

$resultado = $conexion1->query("SELECT * FROM alumnos WHERE $campo = '$contenido'");

while ($fila = $resultado->fetch_array()){
    
    ?>

     <?php
        echo "<tr>";
        echo  "<td>".$fila['nombre']."</td>";
        echo  "<td>".$fila['edad']."</td>";
        echo  "<td>".$fila['sexo']."</td>";
        echo  "<td>".$fila['provincia']."</td>";
        echo  "<td>".$fila['ciclo']."</td>";
        echo "</tr>";
}
    if ($resultado->num_rows == 0){
        echo "<tr>";
        echo "<td class=\"no-encontrado warning text-danger text-center\" colspan=\"5\">No se han encontrado coincidencias</td>";
    }
    ?>       
        
    </table>
</div>
        <div class="container-fluid">
            <a href="busqueda.php" ><button class="btn btn-success">Volver a Busqueda avanzada</button></a>
        </div>
    </body>
</html>

