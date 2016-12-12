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
    private $modulo;
    private $nota;
    
    function Persona($nom,$modulo,$nota){
        $this->nombre = $nom;
        $this->modulo = $modulo;
        $this->nota = $nota;
    }
    
    function visualizar(){
        echo "<p>Nombre: $this->nombre</p>";
        echo "<p>Modulo: $this->modulo</p>";
        echo "<p>Nota: $this->nota</p>";
        echo "<hr/>";
        
    }
}
