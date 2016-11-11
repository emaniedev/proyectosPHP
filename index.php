<?php require './includes/header.php';?>
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
            <form action="consultaPrimeroNombre.php" method="post" class="form-horizontal">
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
