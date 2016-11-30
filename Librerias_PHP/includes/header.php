<?php session_start();?>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Librerias PHP</title>
        <link rel="stylesheet" href="normalize.css">
        <!-- Latest compiled and minified CSS -->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

        <!-- Optional theme -->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">
        <link rel="stylesheet" href="style.css">
    </head>
    <body style="background-color: <?php $color = $_SESSION['color'];echo $color;?>">
        
        <header>
            <div class="container">
                <h1>Librerias de PHP<small>Con BootStrap</small></h1>
                <div class="text-right">
                    <form action="" method="post" name="form-busqueda" class="form-inline"> 
                        <input type="text" name="busqueda" class="form-control" placeholder="busqueda...">
                        <input type="submit" name="enviar" class="form-control btn btn-default" value="Buscar">
   
                    </form>
                </div>
            </div>
        </header>