<html>
    <head>
        <meta charset="UTF-8">
        <title>Gestion Autentificacion</title>
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/5.0.0/normalize.css" />
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
        <link rel="stylesheet" href="../includes/patata.css"/>
    </head>
    <body >
        <header>
            <div id="cabecera">
                <h1>Patata is love patata is life FTW</h1>
                <div class="sub-componente" style="position:relative;bottom:75px;left:700px;text-align:center;padding:10px;">
                    <?php
                    $visitante = rand(500, 200000);
                    echo "<h4>Eres el visitante: $visitante</h4>";
                    ?>
                </div>
            </div>
        </header>
        <div class="container">
            <nav class="navbar navbar-inverse">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse"
                            data-target="#minavbar" aria-expanded="false">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <a class="navbar-brand" href="../Home/index.php">PHP</a>
                </div>

                <div class="collapse navbar-collapse" id="minavbar">
                    <ul class="nav navbar-nav">
                        <li><a href="../ProyectoArrays/index.php">Arrays</a></li>
                        <li ><a href="../ProyectoFormulario/index.php">Formularios</a></li>
                        <li ><a href="#">Cookies</a></li>


                        <li ><a href="#">Acceso a datos</a></li>
                    </ul>
                </div>
            </nav>