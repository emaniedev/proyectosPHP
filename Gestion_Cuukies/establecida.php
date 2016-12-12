<html>
    <head>
        <meta charset="UTF-8">
        <title>Gestion cuukies</title>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
        <link rel="stylesheet" href="../patata.css"/> </head>
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
        <div class="componente">
<?php

$opcion = $_POST['expiracion'];
switch ($opcion) {
    case 'a':
        $expiracion = 24*60*60;
        break;
    case 'b':
        $expiracion = 7*24*60*60;
        break;
    case 'c':
        $expiracion = 30*24*60*60;
        break;
}
$contenido = $_POST['contenido'];
$nombre = $_POST['nombre'];

setcookie($nombre, $contenido, time() + $expiracion);


echo "<h2>Se ha establecido la cookie con nombre $nombre.</br>Contenido: $contenido </br>Y expiracion: $expiracion</br>";

?>
<a href="index.php"><button class="btn btn-success btn-block">Volver</button></a>
        </div>
    </body>
</html>


