<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title>Primer programa patata y pepino</title>
        <link rel="stylesheet" href="../patata.css">
        
    </head>
    <body>
        <div style="background-color: orange">
            <h1>Patata is love patata is life</h1>
        </div>
            
        <!Primer dia>
        <div id="componente" style="display: none">
            <?php
            $numero1 = 20;
            $numero2 = 50.5;
            $res = $numero1 + $numero2;
            $res2 = $numero1 + (int) $numero2;

            echo "<h1>El resultado de sumar $numero1 y $numero2 es : $res</h1>";
            echo "<h1>El resultado de sumar $numero1 y $numero2 casteado a entero es : $res2</h1>";
            ?>
            <p>patata</p>
            <?php
            $print = print "<h1>El resultado de sumar $numero1 y $numero2 es : $res</h1>";
            echo "<p>$print</p>";

            printf("<p>el resultado de sumar %o y %.2f es : %x</p>", $numero1, $numero2, $res);
            echo "<hr/>";
            $num = 85;
            printf("<h1>El numero $num en decimal es el numero %b en binario y %o en octal y %x en hexadecimal<h1>", $num, $num, $num);
            $numg = 25419849819849846519879498498798169849;
            $patata = sprintf("<p>%e patata %E</p>", $numg, $numg);
            echo $patata;
            echo "<hr/>";
            echo 'a patata le llaman \'patata\'';
            datos
            ?>
            <?php
            echo datos;

            $datos = <<<NOMBRES
                Edgar Maniega</br>
                Cosa</br>
                Pataton
NOMBRES;
            $datos .="</br> Curso 2016-2017";
            echo "<p>$datos</p>";

            $tipo = gettype($datos);
            echo "<p>La variable \$datos es de tipo: $tipo<p/>";
            echo "<p>$tipo</p>";
            echo "<hr/>";
            $resultado = <<<PATATA
                $datos <br/>
                El tipo de \$datos es:<br/>
                $tipo
PATATA;
            echo $resultado;
        
            
            
            ?>
            </div>
        <p>Segundo dia</p>
        <!Segundo dia>
        <div style="display: none">
            <hr>
            <?php
            $a = $b = "3.1416";
            settype($b, "float");
            print "\$a vale $a y es de tipo " . gettype($a);
            echo "<br/>";
            print "\$b vale $b y es de tipo " . gettype($b);
            ?>
            <hr>
            <?php
            $a = "3.1416";
            if (isset($a) == true)
                unset($a);
            
            ?>
            
            <?php
            $a = 0;
            $b = "";
            $c;
            
            if (empty($a)==true)
                echo "la variable \$a esta vacia";
            else {
                echo "la variable \$a no esta vacia";
            }
            if (empty($b)==true)
                echo "la variable \$b esta vacia";
            if (empty($c)==true)
                echo "la variabe \$c esta vacia"
            ?>
            
            <?php 
            define("IVA", "21");
            $coste = 200;
            $precio = $coste + $coste*IVA/100;
            echo "<p>El precio con iva de: ".$coste."<br> es: ".$precio;
            ?>
            
            <?php
            date_default_timezone_set("Europe/Madrid");
            $formatoF = "d/m/Y";
            $fromatoH = "h:i.s A";
            $fromatoLargo = "l d de F de Y";
            echo "<br>";
            
            echo "<h1>Fecha de hoy: ".date($formatoF)."</h1>";
            echo "<h1>Hoy es ".date("l d")." de ".date("F")." de ".date("Y").".</h1>";
            echo "<h1>La hora: ".  date($fromatoH)."</h1>";
            echo "<h1>La hora: ".  date("H:i.s")."</h1>";
            
            ?>
            <hr>
            <?php 
            $hoy = getdate();
            $dia = $hoy [mday];
            $diatexto = $hoy [wday];
            $mes = $hoy [mon];
            $año = $hoy [year];
            
            switch ($mes){
            case 1: $mes = "Enero";
                                break;
            case 2: $mes = "Febrero";
                                break;
            case 3: $mes = "Marzo";
                                break;
            case 4: $mes = "Abril";
                                break;
            case 5: $mes = "Mayo";
                                break;
            case 6: $mes = "Junio";
                                break;
            case 7: $mes = "Julio";
                                break;
            case 8: $mes = "Agosto";
                                break;
            case 9: $mes = "Septiembre";
                                break;
            case 10: $mes = "Octubre";
                                break;
            case 11: $mes = "Noviembre";
                                break;
            case 12: $mes = "Diciembre";
                                break;                
            }
            
            switch ($diatexto){
            case 1: $diatexto = "Lunes";
                                break;
            case 2: $diatexto = "Martes";
                                break;
            case 3: $diatexto = "Miercoles";
                                break;
            case 4: $diatexto = "Jueves";
                                break;
            case 5: $diatexto = "Viernes";
                                break;
            case 6: $diatexto = "Sabado";
                                break;                
            case 7: $diatexto = "Domingo";
                                break;
            }
            
            echo "<p>Calendario con variables</p>";
            echo "<h1>Hoy es $diatexto, $dia de $mes del $año.</h1>";
            ?>
        </div>
        
        <p>Tercer dia</p>
        <!Tercer dia>
        <div style="display: none">
    
            
            <div style="float: left;margin-left: 50px;border: solid 2px black;margin: 20px;padding: 25px">
                <h1 style="text-align: center">Multiplicaciones</h1>
                <?php
            $resultado;
            $a = 1;
                while ($a <= 10){
                    $multiplicando = 10;
                    $resultado = $a*$multiplicando;
                    echo "<p style=\"float: left;margin-left: 50px;border: solid 2px black;margin: 20px;padding: 25px\">$a por $multiplicando es: $resultado</p>";
                    $a = $a + 1;
                }
            ?></div>
            
            
            <div style="float: left;margin-left: 50px;border: solid 2px black;margin: 20px;padding: 25px">
                <h1 style="text-align: center;color: chartreuse">Divisiones</h1>
            <?php
            $resultado;
            $dividendo = 5347;
            $divisor = 1;
                do {
                    $resultado = $dividendo / $divisor;
                    printf("<p style=\"float: left;margin-left: 50px;border: solid 2px black;margin: 20px;padding: 25px\">El resultado de dividir $dividendo entre $divisor es: %.2f</p>",$resultado);
                    $divisor ++;
                } while ($divisor <=11);
            ?></div>
            
            <?php
            
            ?>
            
            
        </div>
        <p>Cuarto dia</p>
        <!Cuarto dia>
        <div style="display: none; padding: 10px;float: start">
            <div style="padding: 15px; border: solid 1px;float: left;margin: 25px;border-color: blue">
            <?php
            include "funcionesPHP.php";
            function sum ($param,$param2){
                return $param+$param2;
            }
            echo myName();
            hi("patata");
            hi("Persiana");
            hi(myName());
            hi("");hi("");
            echo "<p>La suma de 2 mas 7 es:</p>";
            echo sum (2, 7);           
            ?>
            </div>
            
            <br/>
            
            <div style="padding: 15px;border: solid 1px;float: left; margin: 25px;border-color: orange">
            <?php 
            include 'funcgestion.php';
            echo "El 21% iva de 200 es: ".calculoIva(200,0.21)." Euros.";
            echo "<h3>El iva predeterminado de 200 es: ".  calculoIvaCompleto(200)." Euros</h3>";
            echo "<h3>El iva supereducido de 200 es: ".  calculoIvaCompleto(200,0.04)." Euros</h3>";
            ?>
            </div>
        </div>
        <p>Quinto dia</p>
        <!Quinto dia>
        <div class="container" style="">
            <div class="componente">
                <h3>Paso por Valor o referencia</h3>
            <?php
            $precio = 1000;
                function una ($var){
                    $var = $var + 7;
                    return $var;
                } 
                echo "<p>Paso por valor de variable: ".una($precio)."</p>";
                echo "<p>Valor de variable despues de la funcion: $precio</p>";
                
                function dos (&$var){
                    $var = $var + 7;
                    return $var;
                }
                echo "<p>Paso por referencia de variable: ".dos ($precio)."</p>";
                echo "<p>Valor de variable despues de la funcion: $precio</p>";
            ?>     
            </div>
            <div class="componente">
                <h3>Paso por referencia</h3>
                <?php
                $coord1 = 17;
                $coord2 = 33;
                
                function intercambio (&$cor1,&$cor2){
                    $varcam1 = $cor1;
                    $varcam2 = $cor2;
                    $cor1 = $varcam2;
                    $cor2 = $varcam1;
                }
                echo "<p>Tenemos estas dos coordenadas: X-$coord1 e Y-$coord2</p>";
                intercambio($coord1, $coord2);
                echo "<p>Despues de la funcion de intercambio las variables valen: X-$coord1 e Y-$coord2 </p>";
                ?>
            </div>
            <div class="componente">
                <h3>Variables Staticas</h3>
                <?php
                    function contador (){
                        static $cuenta=0;
                        $cuenta ++;
                        return $cuenta;
                    }
                    $i = 0;
                    while ($i <5){
                        echo "<p>El valor de \$cuenta es: ".contador()."</p>";
                        $i++;
                    }
                ?>
            </div>
            <div style="clear:both"></div>
            <div class="componente">
                <h3>Arrays</h3>
                <?php
                
                ?>
            </div>
            
        </div>
            </body>
            </html>
