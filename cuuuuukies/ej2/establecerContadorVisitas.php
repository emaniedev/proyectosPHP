<?php
$expiracion = 30*24*60*60;
if (isset($_COOKIE['visita'])){
    $numvisita = $_COOKIE["visita"];
    $numvisita ++;
} else {
    $numvisita = 1;
        
}
setcookie("visita",$numvisita, time()+$expiracion);




?>