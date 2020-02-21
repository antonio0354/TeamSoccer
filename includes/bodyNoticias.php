<?php
require_once 'Conexion.php';
$conex = new Conexion();
$consulta = $conex->query("Select * from contenido ");

$consultaValoracion = $conex->query("Select * from valoraciones ");

?>
<div class="col-sm-9" >

    <?php
    $contador = 1;
    while ($object = $consulta->fetch_object()) {
        $array[] = $object->id;
        ?>  
        <div class="row">
            <div class="col-sm-12 " >
                <h1 class="text-center mt-5 float-left borde"><?php echo $object->titulo ?></h1> 
            </div>
            <div class="col-sm-6 " >
                <img  class="w-100 p-3" src="<?php echo $object->imagen ?>">
            </div>
            <div  class="col-sm-6 " >
                <h3 class="text-center mt-5"><?php echo $object->texto ?></h3>
            </div>

            <div class="col-sm-6">
                <form method="post" action="valorar.php">
                    <?php
                    if (isset($_SESSION['idusuario'])) {
                        ?>
                        <input type="hidden" name="idcontenido" value="<?php echo $object->id ?>">
                        <input type="submit" name="valorar" value="Valorar" class="btn btn-success mb-4 mt-4"><br>

                    </form>

                    <?php
                } else {
                    ?>
                    <input type="submit" name="valorar" value="Valorar" class="btn btn-success mb-4 mt-4" disabled="true"><br>
                    <p style="color:red; font-family: monospace">DEBES INICIAR SESIÓN PARA VALORAR</p>

                    <?php
                }
                ?>
            </div>
        </div>
        <br>
        <hr width="100%" style="border-width:3px; border-color: red;"/>



        <?php
    }
    ?>

    <?php
    if (isset($_SESSION['rol'])) {
        if ($_SESSION['rol'] == 'editor') {
            ?>
        </div>

        <div class="col-sm-12">
            <form action="nuevaNoticia.php" method="post">
                <input type="submit" class="btn btn-secondary float-right" name="addNoticia" value="Añadir Noticia">
            </form>
        </div>

        <?php
    }
} else {
    ?>
    </div>
    <?php
}



    
        

