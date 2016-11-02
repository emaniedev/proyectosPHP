<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title>Consulta SQL</title>
        <link rel="stylesheet" href="../patata.css"/>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
    </head>
    <body>
        <div id="cabecera">
            <h1>Patata is love patata is life FTW</h1>
            <div class="sub-componente" style="position:relative;bottom:75px;left:700px;text-align:center;padding:10px;">
                <?php
                $visitante = rand(500, 200000);
                echo "<h4>Eres el visitante: $visitante</h4>";
                ?>
            </div>
        </div>
        
        <div class="componente" style="display:true">
            <h3>Formulario</h3>
            
         
            <form class="form-horizontal" name="input" action="consultaSQL.php" method="post">
                <div class="form-group">
                    
                    <label>Introduce criterio de busqueda: <textarea class="form-control has-error" type="text" name="criterio"></textarea>
                 
                
                </div>
                
                </br>
                
                </br>
                <input class="btn btn-info form-control"type="submit" value="Buscar"/>
                <!--<input type="submit" value="Mostrar"-->
            </form>
            <a class="" href="index.php"><button class="btn btn-success">Volver al indice</button></a> 
            
           
            
        </div>
       
    </body>
</html>

