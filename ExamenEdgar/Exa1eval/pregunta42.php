<?php

/* 
 Edgar Maniega Medrano
 * 
 * Pregunta 4 examen
 */

session_start();


foreach ($_SESSION['array'] as $key => $valor) {
    $registro = $key + 1;
    echo "Registro: ".$registro."</br>";
    if (isset( $_SESSION['array'][$key])){
        foreach ($_SESSION['array'][$key] as $clave => $value) {
            echo $clave.": ".$value."</br>";
        }
        echo "<hr/>";
    }
}

?>