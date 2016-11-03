<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title>Proyecto de Arrays Patata</title>
        <link rel="Stylesheet" href="../patata.css">
    </head>
    <body>
        <div id="cabecera">
            <h1>Patata is love patata is life FTW</h1>
            <div class="sub-componente" style="position:relative;bottom:75px;left:700px;text-align:center;padding:10px;">
                <?php
                $visitante = rand(500, 200000);
                echo "<h4>Eres el visitante: $visitante</h4>"
                ?>
            </div>
        </div>
        <div class="componente" style="display: none;">
            <h3>Ej 1: Arrays</h3>
            <?php
                $notas = array(0=>5, 1=>7, 2=>2, 3=>4, 4=> "Patata!!!");
                
                print_r($notas);
                echo "<hr>";
                echo "<hr>";
                var_dump($notas);
                echo "<hr>"; 
                echo "<hr>";
                for ($i = 0; $i < count($notas);$i++){
                    $indice = $i + 1;
                    $nota = $notas [$i];
                    echo "<p>Nota $indice: $nota.</p>";
                }
                $nota = NULL;
                $i=null;
                echo "<hr>";
                echo "<hr>";
                foreach ($notas as $i=>$nota ){
                    echo "<p>Nota $i: $nota </p>";
                }
                
            ?>
        </div>
        <div class="componente" style="height: 500px; overflow: scroll; display: none;">
            <h3>Ej 2: Lectura Arrays</h3>
            <p class="compact">
            <?php
            foreach ($_SERVER AS $variable => $valor){
                echo "VARIABLE: ".$variable."</br>DATOS: ".$valor."</br>";
            }
            ?>
            </p>
            
        </div>
        <!--Array de Notas-->
        <div style="display:none">
            <div class="componente-grande">
            <h3>Ej 3: Array de notas</h3>
            <?php
            $nalumnos = 100;
            $alumnos = array();
            
            for ($i = 0;$i < $nalumnos; $i++){
                $alumnos [$i] = rand(1, 10);
            }
            
            foreach ($alumnos as $var => $value) {
                $var = $var + 1;
                echo "<p>Alumno $var, tiene una nota de $value</p>";
            }
             
            ?>
        </div>
        <div class="sub-componente-grande">
            <h4>Calculo notas</h4>
            <?php
            $acumulador = 0;
            $media = 0;
            $cantidad = 0;
                foreach ($alumnos as $value) {
                    $acumulador = $acumulador + $value;
                    $cantidad ++;
                }
            $media = $acumulador / $cantidad;
            echo "<h5>Media:</h5>";
            
            echo "<p>La media de estos $cantidad alumnos es:</br>-$media-</p>";
            echo "<h5>Aprobados:</h5>";
            $aprobados = 0;
            foreach ($alumnos as $value) {
                    if ($value >= $media ){
                        $aprobados ++;
                        echo "Esta nota pasa la media: $value </br>";
                    }
                }
            echo "<p>Los que superan la media de $media son:</br>-$aprobados-</p>";
            echo "<h5>Buscar:</h5>";
            ?>
        </div>
        <div class="sub-componente">
            <h5>Buscando numeros</h5>
            
            <?php
            $buscar = 7;
            $buscados = 0;
            foreach ($alumnos as $indice => $value) {
                    if ($value == $buscar ){
                        $buscados ++;
                        echo "La nota en la posicion $indice </br>";
                    }
            }
            echo "<p>Se cuentan $buscados notas con valor igual a $buscar";
            
            ?>
            
            
        </div>
        </div>
        <!--Arrays asociativos-->
        <div style="clear:both"></div>
        <div style="display:none">
            <div class="componente">
            <h3>Arrays asociativos</h3>            
        </div>
        <div class="sub-componente">
            <h5>Muestra:</h5>
            <?php
            $notasCursoAlumnos = array (
                "daw1" => 18, "daw2" => 8, "smr1" => 25, "smr2" => 20, "asir1" => 8, "asir2" => 7
                );
                
                foreach ($notasCursoAlumnos as $key => $value) {
                    echo "En el curso $key hay $value alumnos.</br>";
                }                
                
            ?>
        </div>
        <div class="sub-componente">
            <h5>In array;</h5>
            <?php
            $buscaArray = 20;
                     if (in_array($buscaArray, $notasCursoAlumnos)){
                         echo "El numero $buscaArray exite en el array";
                     } else {
                         echo "El numero $buscaArray no exite en el array";
                     }
                     echo "<h5>In array serch:</h5>";
                     if (in_array($buscaArray, $notasCursoAlumnos)){
                         $position = array_search($buscaArray, $notasCursoAlumnos);
                         echo "El numero $buscaArray exite en el array y tiene posicion $position";
                     } else {
                         echo "El numero $buscaArray no exite en el array y tiene posicion $position";
                     }
            ?>
        </div>
        </div>
        <!--Array de Arrays--->
        <div style="display:true">
            <div class="componente">
                <h3>Array de Arrays</h3>
                <p>Definimos el array</p>
                <?php
                $notas = null;
                $rangoMax = 10;
                $rangoMin = 0 ;
                $arrayNotas = array (
                    array(rand(0, 10),rand(0, 10),rand(0, 10),rand(0, 10)),
                    array(rand(0, 10),rand(0, 10),rand(0, 10),rand(0, 10)),
                    array(rand(0, 10),rand(0, 10),rand(0, 10),rand(0, 10)),
                    array(rand(0, 10),rand(0, 10),rand(0, 10),rand(0, 10))
                    );
                
            for ($i = 0; $i < count($arrayNotas); $i++){
                $n = $i+1;
                echo "El alumno $n tiene las siguientes notas: </br>";
                for ($j = 0 ; $j < count ($arrayNotas[$i]); $j++){
                    echo "Alumno $n => ".$arrayNotas[$i][$j]."</br>";
                }
                echo "</br>";
            }
                ?>
            </div>
            <div class="sub-componente">
                <h5>Con Foreach</h5>
                <?php
                $i = 0;
                $j = 0;
                $n = 0;
                foreach ($arrayNotas as $i => $valuei) {
                    $n = $i+1;
                    echo "El alumno $n tiene las siguientes notas</br>";
                    foreach ($arrayNotas[$i] as $j => $valuej) {
                        echo "Nota $j: => ".$arrayNotas[$i][$j]."</br>";
                    }
                    echo "</br>";
                }
                ?>
                
            </div>
            <div class="sub-componente">
                <h5>Salarios</h5>
                <p>Llenamos el array</p>
                <?php
                $sueldos = null;
                for ($i = 0;$i < 3; $i++){
                    $categoria = $i + 1;
                    
                    if ($categoria == 1){
                        $sueldomax =3000 ;
                        $sueldomin = 2000;
                    }else if ($categoria == 2){
                            $sueldomax =1999 ;
                            $sueldomin = 1500;
                            }else{
                                $sueldomax =1499 ;
                                $sueldomin = 800;
                            }
                        
                    for ($j = 0 ; $j < 10 ; $j++){
                        $sueldos [$i][$j] = rand($sueldomin,$sueldomax);
                    }                        
                }
                //La media de los sueldos.
                $acumuladorTot = 0;
                $acumulador = 0;
                $i = 0;
                $j= 0;
                $contador=0;
                $contadorTot=0;
                echo "<table><tr><th>Categoria</th><th>Media</th></tr>";
                foreach ($sueldos as $i => $valuei) {
                    foreach ($sueldos[$i] as $j => $valuej) {
                        $contador ++;
                        $contadorTot ++;
                        $acumulador = $acumulador + $sueldos[$i][$j];
                        $acumuladorTot = $acumuladorTot + $sueldos[$i][$j];
                    }
                    $media = 0;
                $media = $acumulador / $contador;
                $contador = 0;
                $acumulador = 0;
                printf("<p>La media de la categoria $i los sueldos es: %.2f </p>",$media);
                echo "<tr><td>$i</td><td>$media</td></tr>";
                }
                $mediaTot = $acumuladorTot / $contadorTot;
                echo "<tr><td>Total</td><td>$mediaTot</td></tr>";
                echo "</table>";
                printf("<p>La media de todos los sueldos es: %.2f </p>",$mediaTot);
                
                
                
                
                ?>
            </div>
        </div>
        
        
    </body>
</html>
