


        <nav>
            <div class="container">
                <ul>
                    <?php
                        include './includes/arrays.php';
                        foreach ($navItems as $item ){

                            echo "<li><a href=\"$item[link]\"<button class=\"btn btn-default\" >$item[nombre]</button></a></li>";
                        }
                    ?>
                </ul>
            </div>
            
        </nav>