<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
        <link rel="stylesheet" href="../patata.css">;

    </head>
    <body>
        <div id="cabecera">
            <h1>Patata is love patata is life FTW</h1>
            <div class="sub-componente" style="position:relative;bottom:75px;left:700px;text-align:center;padding:10px;">
                <?php
                $visitante = rand(500, 200000);
                echo "<h4>Eres el visitante: $visitante</h4>"
                ?>
            </div>
        </div>
        
        <div class="container">
        <table class="table">
            <tr class="danger">
                <th>Marca</th>
                <th>Modelo</th>
                <th>Matricula</th>
                <th>Precio</th>
            </tr>
            
        <?php
        $conexion = new mysqli('localhost', 'root', '', 'vehiculos');
        $sql = "SELECT * FROM coches";
        $resultado = $conexion->query($sql);
        
  

        while($fila = $resultado->fetch_array(MYSQLI_NUM)){
            
            printf("<tr><td>%s</td> <td>%s</td> <td>%s</td> <td>%s €</td></tr>",$fila[1],$fila[2],$fila[3],$fila[4]);
        }
        $resultado->free();
        ?>
            
        
                
            </table>
        <hr/>
        <table class="table table-striped table-responsive">
            <tr class="info">
                <th>Marca</th>
                <th>Modelo</th>
                <th>Matricula</th>
                <th>Precio</th>
            </tr>
            
        <?php
        $resultado = $conexion->query($sql);
        
        while($fila = $resultado->fetch_array(MYSQLI_ASSOC)){
            
            printf("<tr><td>%s</td> <td>%s</td> <td>%s</td> <td>%s €</td></tr>",$fila['marca'],$fila['modelo'],$fila['matricula'],$fila['precio']);
        }
        $resultado->free();
        ?>
            
        
                
            </table>
        <hr/>
        <table class="table table-bordered table-hover">
            <tr class="warning">
                <th>Marca</th>
                <th>Modelo</th>
                <th>Matricula</th>
                <th>Precio</th>
            </tr>
            
        <?php
        $resultado = $conexion->query($sql);
        while($fila = $resultado->fetch_array(MYSQLI_BOTH)){
            
            printf("<tr><td>%s</td> <td>%s</td> <td>%s</td> <td>%s €</td></tr>",$fila['marca'],$fila[2],$fila['matricula'],$fila[4]);
        }
        $resultado->free();
        ?>
            
        
                
            </table>
        </div>
       </body>
</html>
