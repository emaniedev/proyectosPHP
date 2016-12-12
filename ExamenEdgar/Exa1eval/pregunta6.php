<?php

/* 
Edgar Maniega Medrano
 * 
 * Pregunta 6 examen
 */


$conexion = new mysqli('localhost', 'root', '');

$DBname = 'colegio';
$borrarBD = "DROP DATABASE `colegio`;?";
$crearBD = "CREATE DATABASE `colegio`;";
$crearTabla = "CREATE TABLE `colegio`.`alumnos` ( `nombre` VARCHAR(20) NOT NULL , `edad` VARCHAR(2) NOT NULL , `sexo` VARCHAR(10) NOT NULL ) ENGINE = MyISAM; ";

$conexion->query($borrarBD);

$conexion->query($crearBD);

$conexion->select_db($DBname);

$conexion->query($crearTabla);

