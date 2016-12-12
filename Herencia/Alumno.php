<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Alumnos
 *
 * @author alumno
 */
class Alumno extends Persona{
    private $ciclo;
    private $curso;
    
    /*
     * CONSTRUCTOR
     */
    
    function Alumno() {
        parent::Persona();
        $this->ciclo = "";
        $this->curso = "-";
    }
    
    /*
     * METODOS
     */
    function asignarTodos($nom,$ed,$sex,$city,$fech, $ciclo,$curso){
        parent::asignarTodos($nom, $ed, $sex,$city,$fech);
        $this->ciclo= $ciclo;
        $this->curso= $curso;
    }
    
    function visualizar(){
        parent::visualizar();
        echo "<div>";
        echo "<p>Ciclo: $this->ciclo</p>";
        echo "<p>Curso: $this->curso</p>";
        echo "</div>";
    }
    
    function verNombreCiudadCiclo(){
        echo "<div>";
        echo "<p>Nombre: ".parent::getNombre()."</p>";
        echo "<p>Ciudad: ".$this->ciudad."</p>";
        echo "<p>Ciclo: ".$this->ciclo."</p>";
        echo "<p>Fecha nacimiento: ".$this->fechaNacimiento."</p>";
        echo "</div>";
    }
    
    


    /*
     * GETTER & SETTER
     */

    function getCiclo() {
        return $this->ciclo;
    }

    function getCurso() {
        return $this->curso;
    }

    function setCiclo($ciclo) {
        $this->ciclo = $ciclo;
    }

    function setCurso($curso) {
        $this->curso = $curso;
    }


    

}
