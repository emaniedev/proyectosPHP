<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Producto
 *
 * @author alumno
 */
class Producto {
    private $codigo;
    private $nombre;
    private $precio;
    private static $numproductos = 0;
    function Producto($codigo, $nombre, $precio) {
        $this->codigo = $codigo;
        $this->nombre = $nombre;
        $this->precio = $precio;
        self::$numproductos ++;
    }
    
    function __destruct(){
        self::$numproductos --;
    }
    
    function __clone() {
        self::$numproductos++;
    }
    
   
    
    //Metodos
    
    function modificarPvp($nPrecio) {
        if ($nPrecio == $this->precio){
            $this->precio = $this->precio * 1.10; 
        } else {
            $this->precio = $nPrecio;
        }
    }
    
   
            
    function visualizarTodos() {
        return "El producto con codigo $this->codigo, tiene el nombre: $this->nombre y vale: $this->precio. Ahora tenemos ".self::$numproductos." productos.";
    }
    
    private function imprimir() {
        echo $this->visualizarTodos();
    }
    
    
    
    //Getter & Setter
    function setCodigo($codigo) {
        $this->codigo = $codigo;
    }

    function setNombre($nombre) {
        $this->nombre = $nombre;
    }
    
    function setPrecio($precio) {
        $this->precio = $precio;
    }

    function getCodigo() {
    return $this->codigo;
}

    function getNombre() {
    return $this->nombre;
}

    function getPrecio() {
    return $this->precio;
}

}




