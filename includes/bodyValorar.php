<?php
require_once 'Conexion.php';
$conex = new Conexion();
if (isset($_POST['valorar2'])) {
    $IDcontenido = $_POST['IDcontenido'];
    $idusuario = $_SESSION['idusuario'];
    $comentario = $_POST['comentario'];
    $estrellas = $_POST['estrellas'];
    $consultaInsert = $conex->query("INSERT INTO valoracion VALUES ('', '$idusuario', '$IDcontenido', '$estrellas', '$comentario')");


    echo '<script type="text/javascript">
window.location.assign("noticias.php");
</script>';
}
$idcontenido = $_POST['idcontenido'];
$consulta = $conex->query("Select * from contenido WHERE id = '$idcontenido' ");
$object = $consulta->fetch_object();
?>

<div class="row mx-auto">
    <div class="col-sm-12" >

        <h1 class="text-center mt-5"><?php echo $object->titulo ?></h1> 
        <img  class="p-3" width="1000" height="600" src="<?php echo $object->imagen ?>">
        <h5 class="text-center mt-5"><?php echo $object->texto ?></h5>
        <br>
        <form action="" method="post">
            <textarea cols="30" name="comentario" placeholder="Introduce el comentario de la noticia"></textarea>
            <br>
            <p class="clasificacion mt-4">
                <input id="radio1" type="radio" name="estrellas" value="5"><!--
                --><label for="radio1">★</label><!--
                --><input id="radio2" type="radio" name="estrellas" value="4"><!--
                --><label for="radio2">★</label><!--
                --><input id="radio3" type="radio" name="estrellas" value="3"><!--
                --><label for="radio3">★</label><!--
                --><input id="radio4" type="radio" name="estrellas" value="2"><!--
                --><label for="radio4">★</label><!--
                --><input id="radio5" type="radio" name="estrellas" value="1"><!--
                --><label for="radio5">★</label>
            </p>
            <br>
            <input type="hidden" name="IDcontenido" value="<?php echo $object->id ?>">
            <input type="submit" name="valorar2" value="Valorar" class="btn btn-success mb-4 mt-4"><br>
        </form>
    </div>
</div>





