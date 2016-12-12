<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Persona
 *
 * @author alumno
 */
class Persona {
    
    private $nombre;
    private $edad;
    private $sexo;
    public $ciudad;
    protected $fechaNacimiento;


    /*
     * CONSTRUCTOR
     */
    function Persona() {
        $this->nombre = "";
        $this->edad = 0;
        $this->sexo = "no asignado";
        $this->ciudad = "sin localidad";
        $this->fechaNacimiento= "non-nato";
    }
    
    /*
     * METODOS
     */
    
    function visualizar(){
        echo "<div>";
        echo "<p>Nombre: $this->nombre</p>";
        echo "<p>Edad: $this->edad</p>";
        echo "<p>Sexo: $this->sexo</p>";
        echo "</div>";
    }
    
    final function visualizarNombre(){
        echo "<div>";
        echo 'El nombre del alumno es: '.$this->nombre;
        echo "</div>";
    }
    
    function asignarTodos($nom,$ed,$sex,$city,$fech){
        $this->nombre = $nom;
        $this->edad = $ed;
        $this->sexo = $sex;
        $this->ciudad = $city;
        $this->fechaNacimiento = $fech;
    }




    /*
     * GETTER & SETTER
     */
    function getNombre() {
        return $this->nombre;
    }

    function getEdad() {
        return $this->edad;
    }

    function getSexo() {
        return $this->sexo;
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

    
    
    
    
}
