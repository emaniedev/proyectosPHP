<?php include './includes/header.php'; ?>
<?php include './includes/nav.php'; ?>
<?php include './includes/arrays.php';?>


<main>
    <div class="container">
        <div class="jumbotron">
            <form method="post" action="coloreado.php" class="form-inline">
                Selecciona el color:
                <select name="color" id="color" class="form-control">
                    
                    <?php
                        foreach ($colorItem as $item) {
                            echo "<option value=\"$item[color]\" >$item[nombre]</option>";
                        }
                    ?>
                </select>
                <input type="submit" class="btn btn-default" value="Establecer">
            </form>
        </div>
    </div>
</main>

<?php include './includes/footer.php'; ?>