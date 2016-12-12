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




<?php
//Incluimos la clase persona
include 'Persona.php';

//iniciamos la sesion.
session_start();
$nombre = $_POST["nombre"];
$modulo = $_POST["modulo"];
$nota = $_POST["nota"];

$persona = new Persona($nombre, $modulo, $nota);
   
    //utilizamos la variable local mas el contador de sesion para añadir un nuevo elemento.
    $_SESSION["alumnos"][$_SESSION["contador"]] = serialize($persona);
   




echo "<p>Contador = ".$_SESSION["contador"]."</p>";
print_r($_SESSION["alumnos"]);

//header("refresh:5;url= index.php");
?>
        <div class="componente">
            <p>Pulse <a href="index.php">aqui</a> para volver al formulario</p>
            <p>Pulse <a href="ver.php">aqui</a> para ver los datos guardados</p>
    <p>Pulse <a href="finPHP.php">aqui</a> cerrar la sesión</p>
        </div>        
     </body>
</html>


