        <?php include './includes/header.php';?>
        <?php include './includes/nav.php';?>
        
        <?php
        if (!isset($_SESSION['color'])){
            session_start();
            $color = $_POST['color'];
            $_SESSION['color'] = $color;
        } else {
            $color = $_POST['color'];
            $_SESSION['color'] = $color;
        }
        ?>
        
        <main>
            <div class="container">
                <div class="jumbotron">
                    <h3>Se va a establecer el color de fondo a <b><?php echo $_SESSION['color']?></b></h3>
                </div>
            </div>
        </main>

        <?php include './includes/footer.php';?>

        <?php header("Refresh:2; url=index.php") ?>