<html>
    <head>
        <meta charset="UTF-8">
        <title>Gestion cuukies</title>
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
        
        <div class="componente">
        <?php

        if (isset($_COOKIE[$_POST['cookie']])){

        setcookie($_POST['cookie'], null);
        echo "<h2>Se ha borrado la cookie con nombre: ".$_POST['cookie'];

        } else {
            echo "<h2>La cookie ya no se encuentra en la sesion.";
            echo "</br>";
        }



        ?>
            
</br>
<a href="index.php"><button class="btn btn-success btn-block">Volver</button></a>
</div>
    </body>
</html>



