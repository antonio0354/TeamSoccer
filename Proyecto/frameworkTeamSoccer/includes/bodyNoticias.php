<?php
require_once 'Conexion.php';
$conex = new Conexion();
$consulta = $conex->query("Select * from contenido ");
?>
<div class="col-sm-9" >

    <?php
    while ($object = $consulta->fetch_object()) {
        ?>  
        <div class="row"  >
            <div class="col-sm-6 " >
                <img  class="w-100 p-3" src="<?php echo $object->imagen ?>">
            </div>
            <div  class="col-sm-6 " >
                <h3 class="text-center mt-5"><?php echo $object->texto ?></h3>
            </div>

        </div>

        <?php
    }
    
    if(isset($_SESSION['rol'])){
       if($_SESSION['rol']=='editor'){
        ?>
    <form action="nuevaNoticia.php" method="post">
        <input type="submit" name="addNoticia" value="Añadir Noticia">
    </form>
        <?php
    } 
    }
    
    ?>

