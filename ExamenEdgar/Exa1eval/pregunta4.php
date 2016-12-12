<!DOCTYPE html>
<!--
Edgar Maniega Medrano

Pregunta 4 examen
-->

<?php
session_start();

if (isset($_SESSION['contador'])){
    $_SESSION['contador']++;
}else {
    $_SESSION['contador'] = 0;
}


?>
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        
        <form method="post" action="pregunta41.php">
            nombre:<input type="text" name="nombre"></br>
            edad:<input type="text" name="edad"></br>
            sexo:</br>
            hombre<input type="radio" name="sexo" value="hombre"></br>
            mujer<input type="radio" name="sexo" value="mujer"></br>
            <input type="hidden" name="minombre" value="EdgarManiega"></br>
            
            <input type="submit" value="Enviar">
            <input type="reset" value="Resetear">
        </form>
        
        <a href="pregunta42.php">Ver array.</a>
        
        <?php
        // put your code here
        ?>
    </body>
</html>
