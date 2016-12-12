<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Coche
 *
 * @author alumno
 */
class Coche extends VehiculoRuedas{
    
    function Coche($motor,$ruedas,$combustible,$plazas) {
        parent::VehiculoRuedas($motor, $ruedas, $combustible, $plazas);
    }

    
    public function visualizarDatos() {
        echo "Este coche es de ".$this->getRuedas()." ruedas. Tiene ".$this->getPlazas()." plazas"
                . " y su combustible es ".$this->getCombustible().".";
    }

}
