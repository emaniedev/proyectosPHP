<?php


$nombre= $_POST['nombre'];
$modulo= $_POST['modulo'];
$nota= $_POST['nota'];
$deportes = $_POST['deporte'];
$oculto = $_POST['provincia'];

echo "</br>";
echo "Nombre: ".$nombre."</br>";
echo "Modulo: ".$modulo."</br>";
echo "Nota: ".$nota."</br>";
echo "Provincia: ".$oculto."</br>";
echo "</br>";
echo $_SERVER['PHP_SELF']."</br>";

if (empty($deportes)){
    echo "El alumno no ha elegido ningun deporte.";
} else {
    echo "El alumno ha elegido los siguientes deportes:</br>";
    foreach ($deportes as $value) {
        echo "-".$value."</br>";
    }
}
?>



