<!DOCTYPE html>
<!--
Edgar Maniega Medrano

pregunta 6 examen
-->

<html>
    <head>
        <meta charset="UTF-8">
        <title>Formulario BD</title>
    </head>
    <body>
        <form method="post" action="pregunta62.php">
            nombre:<input type="text" name="nombre"></br>
            edad:<input type="text" name="edad"></br>
            sexo:</br>
            hombre<input type="radio" name="sexo" value="hombre"></br>
            mujer<input type="radio" name="sexo" value="mujer"></br>
            <input type="hidden" name="minombre" value="EdgarManiega"></br>
            
            <input type="submit" value="Enviar">
            <input type="reset" value="Resetear">
        </form>
        <a href="pregunta63.php"> Ver alumnos mayores</a>
        
        
        <?php
        // put your code here
        ?>
    </body>
</html>
