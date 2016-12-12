<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        
        <?php
        require 'Producto.php';
        
        $producto = new Producto(20, "Cosita",100);
        
        
        
        echo "<h1>".$producto->visualizarTodos()."</h1>";
        
        $producto->modificarPvp(100);
        
        echo "<h1>".$producto->visualizarTodos()."</h1>";
        
        $producto->modificarPvp(100);
        
        echo "<h1>".$producto->visualizarTodos()."</h1>";
        
        echo "<hr/>";
        
        echo $producto->visualizarTodos();
        echo "<hr/>";
        $producto1 = new Producto(25, "Cosota", 200);
        
        echo $producto1->visualizarTodos();
        
        echo "<hr/>";
        $producto2 = new Producto(30, "Paco", 300);
        
        echo $producto2->visualizarTodos();
        
        echo "<hr/>";
        
        echo "Destruimos un producto.";
        
        echo "<hr/>";
        unset($producto1);
        
        
        echo "<hr/>";
        
        $producto1 = new Producto(40, "nuevo", 500);
        
        echo "<hr/>";
        
        echo $producto1->visualizarTodos();
        
        echo "<hr/>";
        
        echo "Creamos un producto nuevo a partir de uno existente</br>";
        
        $productoTemp = $producto;
        
        echo $productoTemp->visualizarTodos();
        
        echo "<hr/>";
        
        echo "Clonamos un objetos:</br>";
        
        $productoTemp = clone $producto1;
        
        echo $productoTemp->visualizarTodos();
        
        ?>
    </body>
</html>
