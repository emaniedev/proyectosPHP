<?php

/* 
 * EDGAR MANIEGA MEDRANO
 * Pregunta 2 examen.
 */
$uno = 10;
$dos = 2;
echo "se van a operar $uno y $dos.";
echo "</br>";
//Se pasan por referencia los parametros con el (&) delante del parametro en la 
//definicion de la funcion, de esta forma modificamos las variables
//que hemos pasado en parametro.
function calcular(&$nuno,&$ndos) {
    $multiplicacion = $nuno * $ndos;
    $suma = $nuno + $ndos;
    $resta = $nuno - $ndos;
    $nuno = $suma;
    $ndos = $resta;
    return $multiplicacion;
    
}

$multi = calcular($uno, $dos);

echo "suma: $uno, resta: $dos, multiplicacion: $multi";


