<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title>ConsultasPreparadas</title>
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
            
         
            <form class="form-horizontal" name="input" action="procesoDatos.php" method="post">
                <div class="form-group">
                    <label>Nombre: <input class="form-control"type="text" name="nombre"></label>
                <label>Edad: <input class="form-control" type="text" name="edad"></label>
                 Selecciona sexo:</br>
                <label><input class="radio" type="radio" name="sexo" value="hombre"/>Hombre</label>
                <label><input class="radio" type="radio" name="sexo" value="mujer"/>Mujer</label>
            
                <label>Provincia: <input class="form-control" type="text" name="provincia"></label>
            <p>Elige un modulo</p>
                <label><input class="radio" type="radio" name="modulo" value="DWEC"/>DWEC</br></label>
                <label><input class="radio" type="radio" name="modulo" value="DWES"/>DWES</br></label>
                <label><input class="radio" type="radio" name="modulo" value="DAW"/>DAW</br></label>
                <label><input class="radio" type="radio" name="modulo" value="DIW"/>DIW</br></label>
                <label><input class="radio" type="radio" name="modulo" value="Empresa"/>Empresa</br></label>
                
                </div>
                
                </br>
                
                </br>
                <input class="btn btn-info form-control"type="submit" value="Enviar"/>
                <!--<input type="submit" value="Mostrar"-->
            </form>
            <a class="" href="mostrar.php"><button class="btn btn-success">visualizar</button></a> 
            
           
            
        </div>
       
    </body>
</html>
