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
        <link rel="stylesheet" href="../patata.css"/>
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
            
            <?php            
            //se inicia la sesion
                session_start();
                //Comprobamos si la variable ya esta declarada, en tal caso se aumenta en uno, sino se inicia a 0.
                if (isset($_SESSION["contador"])){
                    $_SESSION["contador"]++;
                } else {
                    $_SESSION["contador"] = 0;
                }
            ?>
            <form name="input" action="procesoDatos.php" method="post">
            <label>Nombre: <input type="text" name="nombre"></label>
            <p>Elige un modulo</p>
                <label><input type="radio" name="modulo" value="DWEC"/>DWEC</br></label>
                <label><input type="radio" name="modulo" value="DWES"/>DWES</br></label>
                <label><input type="radio" name="modulo" value="DAW"/>DAW</br></label>
                <label><input type="radio" name="modulo" value="DIW"/>DIW</br></label>
                <label><input type="radio" name="modulo" value="Empresa"/>Empresa</br></label>
                <input type="hidden" name="codigo" value=""/>
                </br>
                <label>Nota del alumno:<input type="text" name="nota" placeholder="nota" /></br></label>
                </br>
                <input type="submit" value="Enviar"/>
                <!--<input type="submit" value="Mostrar"-->
            </form>
            
           
            
        </div>
        
        
        <?php
        
        ?>
    </body>
</html>
