<?php

if (!isset($conexion)){
    $conexion = new mysqli('localhost', 'root', '', 'colegio');

}

$consulta = $conexion->stmt_init();

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

