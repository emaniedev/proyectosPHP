<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <?php
        $expiracion = 30*24*60*60;
        setcookie("cache1","CIFP Palencia", time()+$expiracion);
        
        ?>
    </body>
</html>
