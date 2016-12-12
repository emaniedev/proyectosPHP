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
        
        <div class="componente">
            <?php
                            include 'Persona.php';
                            session_start();
                            for ($i = 0; $i < count($_SESSION["alumnos"]);$i++){
                                $persona = unserialize($_SESSION["alumnos"][$i]);
                                $persona->visualizar();
                                echo "<hr/>";
                            }
            ?>
        </div>
        <div class="componente">
            <p>Pulse <a href="index.php">aqui</a> para volver al formulario</p>
            <p>Pulse <a href="ver.php">aqui</a> para ver los datos guardados</p>
            <p>Pulse <a href="finPHP.php">aqui</a> cerrar la sesión</p>
        </div>     
        <?php
        // put your code here
        ?>
    </body>
</html>
