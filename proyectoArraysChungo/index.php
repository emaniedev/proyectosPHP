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
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
        <link rel="stylesheet" href="../patata.css">;
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
        
        <div class="container">
            <div class="componente">
                
                
                
                <?php
                $numeros = array(10,20,30,40,50,60,70,80,90,100);
                
                do {
                    
                    echo current($numeros)."</br>";
                    next($numeros);
                }
                while (key($numeros)!= null);
                
                
                echo "</br></br></br>";
                
                reset ($numeros);
                echo current($numeros)."  key:::::-: ".  key($numeros)."</br></br></br></br>";
                //next($numeros);
                
                while (key($numeros)!= NULL){
                    echo current($numeros);
                    next($numeros);
                    echo "   KEY DESPUES DE NEXT".key($numeros);
                    
                }
                
                ?>
                
            </div>
            
        
        
            
            
            
        </div>
        
        
        
    </body>
</html>
