<?php

/*
 * Constructor con nombre edad y sexo.
 * el constructor genera 5 notas aleatorias al construirse
 * 
 * metodos:
 * visualizar()
 * modificarEdad() llama a un metodo privado validarEdad(La edad tiene que ser entre 18 y 25 ) que es privado.
 * 
 */

/**
 * Description of Alumno
 *
 * @author alumno
 */
class Alumno {
    
    private static $numAlum = 0; //Cuenta los alumnos que hay en total.
    
    private $nombre;
    private $edad;
    private $sexo;
    private $notas; //array numerico de 5 notas.
    
    public function Alumno($nom,$edad,$sexo) {
        $this->nombre = $nom;
        $this->edad = $edad;
        $array;
        for ($i = 0;$i< 5;$i++){
            $array[$i]= rand(0, 10);
        }
        $this->notas = $array;
        $this->sexo = $sexo;
        self::$numAlum ++;
       
    }
    
    public function __destruct() {
        self::$numAlum--;
    }
    
    public function __clone() {
        
        self::$numAlum++;
    }


    public function visualizar(){
        echo "<p>".$this->nombre." con una edad de ".$this->edad." y de genero ".$this->sexo." tiene las siguientes notas:</p>";
        foreach ($this->notas as $key => $value) {
            $num = $key+1;
            echo "<p>Nota ".$num.": ".$value.".</p>";
        }
    }
    
    public function modificarEdad($nEdad){
        if ($this->validarEdad($nEdad)){
            $this->edad = $nEdad;
        }
    }
    
    public function modificarNota($nNota,$pos){
        if ($this->validarNota($nNota)){
            $this->notas[$pos] = $nNota;
        }
    }
    
    public function contarAlumnos(){
        return self::$numAlum;
    }
    
    private function validarEdad($edad){
        $bandera = true;
        if ($edad < 18 || $edad > 25){
            $bandera = false;
        }
        return $bandera;
    }
    
    private function validarNota($nota){
        $bandera = true;
        if ($nota > 10 || $nota < 0){
            $bandera = false;
        }
        return $bandera;
    }
    
    
    
    
}
