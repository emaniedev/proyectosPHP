<?php

/* 
 * EDGAR MANIEGA MEDRANO
 * Pregunta 3 examen.
 */

$alumnos = array(array(    
));
$i = 0;

//Creo el array        
while (count($alumnos)< 10){
    $alumnos[$i] = [
        'nota' => rand(1, 10),
        'edad' => rand(18, 25),
        'curso' => rand(1, 2)
    ];
    $i ++;
}

    $notaMedia = 0;
    $edadMedia = 0;
    $cantidad = 0;
    $cantidadAprobados = 0;
    
    $acumuladorEdad = 0;
    $acumuladorNota = 0 ;
    
    //Recorro el array buscando a los que han aprobado
    //y mostrando los datos que he ido randomizando
    //
foreach ($alumnos as $key => $value) {
    $clave = $key+1;
    $edad = $alumnos[$key]['edad'];
    $nota = $alumnos[$key]['nota'];
    $curso = $alumnos[$key]['curso'];
    if ($curso == 1){
        $cursa = "<strong>Daw</strong>";
    }else{
        $cursa = "Asir";
    }
    echo "<p>El alumno $clave que cursa $cursa tiene una edad de $edad y tiene una nota de $nota.</p>";
    
    if ($nota >= 5){
        $acumuladorEdad += $edad;
        $cantidad ++;
    }
    
}


$edadMedia = $acumuladorEdad / $cantidad;


echo "<hr/>";
echo "La edad media de los que superan el 5 es de : $edadMedia";


echo "<br/><hr/>";


$cantidad = 0;
$indiceMenor = 0;
foreach ($alumnos as $key => $value) {
    $clave = $key+1;
    $edad = $alumnos[$key]['edad'];
    $nota = $alumnos[$key]['nota'];
    $curso = $alumnos[$key]['curso'];
    
    //echo "<p>$curso: alumno->$key</p>";
    
    if ($curso == 1){
        echo "<p>El alumno $clave de DAW(1) tiene una edad de $edad y tiene una nota de $nota.</p>";
        $cantidad ++;
        if ($nota >= 5){
            $acumuladorNota += $nota;
            $cantidadAprobados ++;
            
            if ($edad < $alumnos[$indiceMenor]["edad"]){
                $indiceMenor = $key;
            }
        }
    }
    
}
if ($cantidadAprobados != 0){
$notaMedia = $acumuladorNota /$cantidadAprobados;
} else {
    $cantidadAprobados = "(No hay ningun aprobado)";
}

echo "Comprobamos los alumnos de DAW(1) que son: $cantidad.";
echo "<br/>";
echo "<p>Hay una cantidad de aprobados en DAW(1) de $cantidadAprobados</p>";
echo "<p>La media de nota de los aprobados es: $notaMedia</p>";

echo "<p>El alumno de menor edad aprobado es el alumno: ".($indiceMenor+1)."</p>";


echo "<br/><hr/>";









    

