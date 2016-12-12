<html>
    <head>
        <meta charset="UTF-8">
        <title>Autentificacion</title>
        
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

    </head>
    <body>
        <div class="container">
            <h1 class="page-header">
                Entrar <small> Autentificacion</small>
            </h1>
        </div>
        <div class="container">
            <form action="Funciones2.php" method="Post">
                <div class="form-group">
                    <label for="nombre">Nombre de usuario:</label>
                    <input class="form-control" type="text" id="nombre" name="nombre" placeholder="Nombre:">
                </div>

                <div>
                    <label for="contraseña">Contraseña:</label>
                    <input class="form-control" type="password" id="contraseña" name="contraseña" placeholder="Contraseña:">
                </div>

                <button style="margin-top: 5px;" class="btn btn-success" type="submit" name="entrar">Entrar</button>
                <a href="index.php">Registrarse</a>
            </form>
        </div>
    </body>
</html>
