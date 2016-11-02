<?php

function borraDatabase() {
    $conexion = new mysqli("localhost", "root", "", "alumnos");
            $conexion->query("Drop database alumnos");
            return "<h2>Se ha borrado la base de datos alumnos</h2>";
        }
        
        echo borraDatabase();
        echo "<form action=\"index.php\" method=\"POST\">
            <input type=\"submit\" value=\"Volver a crear BD\"/> 
        </form>";

