<html>
    <head>
        <meta charset="UTF-8">
        <title>Gestion Autentificacion</title>
        
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
        <link rel="stylesheet" href="../patata.css"/>
    </head>
    <body >
        <div id="cabecera">
            <h1>Patata is love patata is life FTW</h1>
            <div class="sub-componente" style="position:relative;bottom:75px;left:700px;text-align:center;padding:10px;">
                <?php
                $visitante = rand(500, 200000);
                echo "<h4>Eres el visitante: $visitante</h4>";
                ?>
            </div>
        </div>
        <div class="componente"  >
            
            <h2>Dar de alta usuarios</h2>
            <form action="altaUser.php" method="post" class="form-horizontal">
                <div class="form-group">
                    Nombre: <input type="text" class="form-control" id="nombre" name="nombre" placeholder="Nombre">
                    Password: <input type="password" class="form-control" id="pass" name="pass" placeholder="Contraseña">
                    </div>
                <input type="submit" value="Alta" class="form-control btn btn-default">
            </form>
            
            <h2>Loguear Usuario</h2>
            <form action="consultaPreparada.php" method="post" class="form-horizontal">
                <div class="form-group">
                    Nombre: <input type="text" class="form-control" id="nombre" name="nombre" placeholder="Nombre">
                    Password: <input type="password" class="form-control" id="pass" name="pass" placeholder="Contraseña">
                    </div>
                <input type="submit" value="Login" class="form-control btn btn-default">
            </form>
        
            <?php
/*if ($_SERVER['PHP_AUTH_USER']!= "dwes" || $_SERVER['PHP_AUTH_PW']!= "aaa111!!!") {
header('WWW-Authenticate: Basic Realm="Contenido restringido"');
header('HTTP/1.0 401 Unauthorized');
echo "Usuario no reconocido!";

}*/
?>
        
        
    </body>
</html>
