<?php
require_once 'Conexion.php';
$conex = new Conexion();
$consulta = $conex->query("Select * from contenido");



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
?>
<div class="col-sm-9" >

    <?php
    while ($object = $consulta->fetch_object()) {
        $id = $object->id;
        $consultaValoracion1 = $conex->query("Select * from valoracion where id_contenido = '$id'");
        
        

        
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
                    <p style="color:red; font-family: monospace">DEBES INICIAR SESIÓN PARA VALORAR</p><br><br>

                    <?php
                }
                ?>
            </div>
        </div>
    
    <?php
    
                if ($consultaValoracion1->fetch_object() == NULL){
                    
                } else{
                    
    ?>
    <table  class="table">
        <tr class="thead-dark">
        <th>Usuario</th>
        <th>Comentario</th>
        <th>Estrellas</th>
        </tr>
    <?php
                }
        $consultaValoracion = $conex->query("Select * from valoracion where id_contenido = '$id'");

        while($object2 = $consultaValoracion->fetch_object()){
                  $idUsuario=$object2->id_usuario;
        
        $consultaUsuario = $conex->query("Select * from usuario where id = '$idUsuario'");
        ?>
    
    
    
        
        <?php
        while($objectUsu = $consultaUsuario->fetch_object()) {
            ?>
                <tr>
                    <td><?php echo $objectUsu->nombre_usuario?></td>
                    <td><?php echo $object2->comentario?></td>
                    <td><?php echo $object2->valoracion?></td>
                </tr>
               
        
                <?php
        }
        }
        
  


        ?>
    

       </table>
        <br>
        <hr width="100%" style="border-width:3px; border-color: red;"/>



        <?php
    }
    ?>




    
        

