<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title>Clases</title>
         <link rel="stylesheet" href="../patata.css">
    </head>
    <body>
        <div id="cabecera">
            <h1>PHP y los OBJETOS FTW</h1>
            <div class="sub-componente" style="position:relative;bottom:75px;left:700px;text-align:center;padding:10px;">
                <?php
                $visitante = rand(500, 200000);
                echo "<h4>Eres el visitante: $visitante</h4>"
                ?>
            </div>
        </div>
        
        <?php
        class ALUMNO {
            private $nombre;
            private $edad;
            private $sexo;
            private $provincia;
            
            // <editor-fold defaultstate="collapsed" desc="Getter and Setter">
            // 
            function getNombre() {
                return $this->nombre;
            }

            function getEdad() {
                return $this->edad;
            }

            function getSexo() {
                return $this->sexo;
            }

            function getProvincia() {
                return $this->provincia;
            }

            function setNombre($nombre) {
                $this->nombre = $nombre;
            }

            function setEdad($edad) {
                $this->edad = $edad;
            }

            function setSexo($sexo) {
                $this->sexo = $sexo;
            }
            function setProvincia($provincia) {
                $this->provincia = $provincia;
            }
// </editor-fold>

                function ALUMNO() {
                    $this ->nombre = "No asignado.";
                    $this ->edad = 0;
                    $this ->sexo = "No asignado.";
                    $this ->provincia = "Palencia.";
                }
                public function visualizar() {
                    print("Nombre: ".$this->nombre).".";
                    echo "<br>";
                    print ("Edad: ".$this->edad);
                    echo "<br>";
                    print ("Sexo: ".$this->sexo).".";
                    echo "<br>";
                    print ("Provincia: ".$this->provincia).".";
                }
                public function asignarTodos($nom, $edad, $sex, $prov) {
                    $this ->nombre = $nom;
                    $this ->edad = $edad;
                    $this ->sexo = $sex;
                    $this ->provincia = $prov;
                    
                }
                public function conseguirNombre() {
                    return $this->nombre;
                }
                
                
                
        }?>
        <div class="componente">
        <?php
        $a1 = new ALUMNO();
        $a1->visualizar();
        echo "<p>Usando metodo asignarTodos:</p>";
        echo "<br>";
        $a1->asignarTodos("Edgar", 27, "Varon", "Palencia");
        $a1->visualizar();
        echo "<br>";
        echo "<p>El alumno es: ".$a1->getNombre().".</p>";
        echo "<br>";
        ?>
            </div>
    </body>
</html>
