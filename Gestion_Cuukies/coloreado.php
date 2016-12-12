<html>
    <head>
        <meta charset="UTF-8">
        <title>Gestion cuukies</title>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
        <link rel="stylesheet" href="../patata.css"/></head>
    <body style="background-color:<?php echo $_COOKIE['color']?>">
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
        $contenido = $_POST['color'];
        $nombre = "color";
        $expiracion = 7 * 24 * 60 * 60;

        setcookie($nombre, $contenido, time() + $expiracion);

        echo "<h2>Se ha establecido el color de la sesion a $contenido.</h2>"
        ?>
        
            <a href="index.php"><button class="btn btn-success btn-block">Ver Resultado</button></a>
        </div>


