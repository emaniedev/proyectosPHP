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
        <h1>Hola?</h1>
        <p>
        <?php
        $divisor = 2;
        $dividendo = 4;
        $resultado;
        try {
           if ($divisor == 0)
               throw new Exception("División por cero.");
               $resultado = $dividendo / $divisor;
               echo "el resultado de dividir $dividendo entre $divisor es: $resultado"."</br>";
           
               
           }
           catch (Exception $ex) {
               echo "Se ha producido el siguiente error: ". $ex->getMessage()."</br>";
               echo "El codigo del error es: ".$ex->getCode()."</br>";
            
        }
        
        
        function inverso ($numero){
            if ($numero == 0){
                throw new Exception("<b>División por cero.</b></br>");
            } else {
                return 1 / $numero;
            }
        }
        
        try {
            echo "El inverso de 5 es: ".inverso(5)."</br>";
            echo "El inverso de 0 es: ".inverso(0);
            
            } catch (Exception $ex) {
            echo "Se ha producido el siguiente error: ". $ex->getMessage()."</br>";
            echo "El codigo del error es: ".$ex->getCode()."</br>";
            }
            
            $val = 500;
            echo "</br>";
            echo "</br>";
            echo "</hr>";
            try {
                if ($val == 0){
                    throw new Exception("<b>División por cero.</b></br>");
                }
                if ($val > 800){
                    throw new Exception("<b>División por mas de 800.</b></br>");
                }
                echo "El valor $val es valido"."</br>";
            } catch (Exception $ex) {
                echo "Se ha producido el siguiente error: ". $ex->getMessage()."</br>";
            echo "El codigo del error es: ".$ex->getCode()."</br>";
            }
        ?>
        </p>
    </body>
</html>
