<!DOCTYPE html>
<?php require '../includes/header.php'; ?>
        
        <div class="componente" style="display:true">
            <h3>Formulario</h3>
            
            <?php            
            //se inicia la sesion
                session_start();
                //Comprobamos si la variable ya esta declarada, en tal caso se aumenta en uno, sino se inicia a 0.
                if (isset($_SESSION["contador"])){
                    $_SESSION["contador"]++;
                } else {
                    $_SESSION["contador"] = 0;
                }
            ?>
            <form name="input" action="procesoDatos.php" method="post" class="form">
                <label>Nombre: <input type="text" name="nombre" class="form-control" placeholder="Nombre"></label>
            <p>Elige un modulo</p>
                <label><input type="radio" name="modulo" value="DWEC" class="radio"/>DWEC</br></label>
                <label><input type="radio" name="modulo" value="DWES" class="radio"/>DWES</br></label>
                <label><input type="radio" name="modulo" value="DAW" class="radio"/>DAW</br></label>
                <label><input type="radio" name="modulo" value="DIW" class="radio"/>DIW</br></label>
                <label><input type="radio" name="modulo" value="Empresa" class="radio"/>Empresa</br></label>
                <input type="hidden" name="codigo" value=""/>
                </br>
                <label>Nota del alumno:<input type="text" name="nota" placeholder="nota" class="form-control"/></br></label>
                </br>
                <input type="submit" value="Enviar" class="form-control btn btn-default"/>
                <!--<input type="submit" value="Mostrar"-->
            </form>
            
           
            
        </div>
        
        
        <?php
        
        ?>
    </body>
</html>
