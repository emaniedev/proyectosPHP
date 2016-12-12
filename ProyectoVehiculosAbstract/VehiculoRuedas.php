<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of VehiculosRuedas
 *
 * @author alumno
 */
abstract class VehiculoRuedas {
    private $motor;
    private $ruedas;
    private $combustible;
    private $pasajeros;
    private $plazas;
    
    function VehiculoRuedas($motor, $ruedas, $combustible, $plazas) {
        $this->motor = $motor;
        $this->ruedas = $ruedas;
        $this->combustible = $combustible;
        $this->plazas = $plazas;
        $this->pasajeros = 0;
    }
    
    
    function visualizarRuedas(){
        echo "Este vehiculo tiene $this->ruedas ruedas.";
    }
    
    function modificarPasajeros($cant){
        $this->pasajeros += $cant;
    }
    
    function visualizarPasajeros(){
        echo "Este vehiculo tiene $this->pasajeros pasajeros";
    }
    
    function modificarPlazas($cant){
        $this->plazas += $cant;
    }
    
    abstract function visualizarDatos();
    
    
    
    
    function getMotor() {
        return $this->motor;
    }

    function getRuedas() {
        return $this->ruedas;
    }

    function getCombustible() {
        return $this->combustible;
    }

    function getPasajeros() {
        return $this->pasajeros;
    }

    function getPlazas() {
        return $this->plazas;
    }

    function setMotor($motor) {
        $this->motor = $motor;
    }

    function setRuedas($ruedas) {
        $this->ruedas = $ruedas;
    }

    function setCombustible($combustible) {
        $this->combustible = $combustible;
    }

    function setPasajeros($pasajeros) {
        $this->pasajeros = $pasajeros;
    }

    function setPlazas($plazas) {
        $this->plazas = $plazas;
    }


}
