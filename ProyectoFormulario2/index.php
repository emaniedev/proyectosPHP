
<html>
    <head>
        <meta charset="UTF-8">
        <title>Proyecto Formularios 2</title>
        <link rel="stylesheet" href="../patata.css"/>
    </head>
    <body>
        <div id="cabecera">
            <h1>Patata is love patata is life FTW</h1>
            <div class="sub-componente" style="position:relative;bottom:75px;left:700px;text-align:center;padding:10px;">
                <?php
                $visitante = rand(500, 200000);
                echo "<h4>Eres el visitante: $visitante</h4>"
                ?>
            </div>
        </div>
        
        <!--
        Formularios
        -->
        <div class="componente" style="display: true">
            <h3>Ej: Formularios y proceso Datos</h3>
            <?php
            if (isset($_POST["Enviar"])){
                $nombre= $_POST['nombre'];
                $modulo= $_POST['modulo'];
                $nota= $_POST['nota'];
                $deportes = $_POST['deporte'];

                echo "</br>";
                echo "Nombre: ".$nombre."</br>";
                echo "Modulo: ".$modulo."</br>";
                echo "Nota: ".$nota."</br>";
                echo "</br>";
                echo $_SERVER['PHP_SELF']."</br>";

                if (empty($deportes)){
                    echo "El alumno no ha elegido ningun deporte.";
                } else {
                    echo "El alumno ha elegido los siguientes deportes:</br>";
                    foreach ($deportes as $value) {
                        echo "-".$value."</br>";
                    }
                }
            } else {
            ?>
            
            <p>Datos del alumno</p>
            
            
            <form name="input" action="<?php echo $_SERVER['PHP_SELF'];?>" method="post">
                Nombre del alumno<input type="text" name="nombre"/></br>
                <p>Elige un modulo</p>
                <input type="radio" name="modulo" value="DWEC"/>DWEC</br>
                <input type="radio" name="modulo" value="DWES"/>DWES</br>
                <input type="radio" name="modulo" value="DAW"/>DAW</br>
                <input type="radio" name="modulo" value="DIW"/>DIW</br>
                <input type="radio" name="modulo" value="Empresa"/>Empresa</br>
                </br>
                <label>Nota del alumno:</label><input type="text" name="nota" placeholder="nota" /></br>
                
                <p>Elige deportes</p>
                <input type="checkbox" name="deporte[]" value="Futbol"/>Futbol</br>
                <input type="checkbox" name="deporte[]" value="Baloncesto"/>Baloncesto</br>
                <input type="checkbox" name="deporte[]" value="Tenis"/>Tenis</br>
                <input type="checkbox" name="deporte[]" value="Boxeo"/>Boxeo</br>
                <input type="checkbox" name="deporte[]" value="F1"/>F1</br>
                </br>
                <input type="submit" name="Enviar" value="Enviar"/>
                
                
            </form>
             
        </div>
        <?php
            }
        ?>
    </body>
</html>
