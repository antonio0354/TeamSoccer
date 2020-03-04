<?php include("includes/a_config.php"); ?>
<!DOCTYPE html>
<html lang="es">
    <head>
        <?php include("includes/head-tag-contents.php"); ?>
    </head>
    <body>
        <div class="container">
            <header>
                <div class="row" >
                    <?php include("includes/design-top.php"); ?>
                </div>

                <div class="row" >
                    <?php include("includes/nav.php"); ?>
                </div>
            </header>
            <main>
                <h1 style="visibility: hidden">Champions</h1>
                <div class="row" >
                    <?php include("includes/bodyChampions.php"); ?>
                </div>
            </main>
            <footer>
                <div class="row" >
                    <?php include("includes/footer.php"); ?>
                </div>
            </footer>
        </div>
    </body>
</html>