<?php
require_once 'Conexion.php';
$conex = new Conexion();
$consulta = $conex->query("Select * from usuario where email='$_SESSION[email]'");
$object = $consulta->fetch_object();
?>
<div class="container">
    <br>
    <br>
    <div class="row" id="main">
        <div class="col-md-4 well" id="leftPanel">
            <div class="row">
                <div class="col-md-12">
                    <div>
                        <img src="imagenes/perfil.jpg" alt="Texto Alternativo" class="img-circle img-thumbnail">
                        <h2></h2>
                        <p></p>

                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-8 well" id="rightPanel">
            <div class="row">
                <div class="col-md-12">
                    <form role="form">
                        <h2>Mi Perfil</h2>
                        <hr class="colorgraph">
                        <div class="row">
                            <div class="col-xs-12 col-sm-6 col-md-6">
                                <div class="form-group">
                                    <strong> Nombre:</strong> <?php echo $object->nombre ?>
                                </div>
                            </div>
                            <div class="col-xs-12 col-sm-6 col-md-6">
                                <div class="form-group">
                                    <strong>Apellidos:</strong> <?php echo $object->apellido1 . " " . $object->apellido2 ?>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-xs-12 col-sm-6 col-md-6">
                                <div class="form-group">
                                    <strong> Email:</strong> <?php echo $object->email ?>
                                </div>
                            </div>
                            <div class="col-xs-12 col-sm-6 col-md-6">
                                <div class="form-group">
                                    <strong>Pais:</strong> <?php echo $object->pais ?>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-xs-12 col-sm-6 col-md-6">
                                <div class="form-group">
                                    <strong> Nombre_usuario:</strong> <?php echo $object->nombre_usuario ?>
                                </div>
                            </div>
                            <div class="col-xs-12 col-sm-6 col-md-6">
                                <div class="form-group">
                                    <strong>Codigo Postal:</strong> <?php echo $object->codigo_postal ?>
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-xs-12 col-sm-6 col-md-6">
                                <div class="form-group">
                                    <strong>Contraseña:</strong> <?php echo $object->password ?>
                                </div>
                            </div>
                            <div class="col-xs-12 col-sm-6 col-md-6">
                                <div class="form-group">
                                    <strong> Telefono:</strong> <?php echo $object->telefono ?>
                                </div>
                            </div>
                        </div>
                        <hr class="colorgraph">
                        <div class="row">
                            <div class="col-xs-12 col-md-6"></div>
                            <div class="col-xs-12 col-md-6"><a href="#" class="btn btn-success btn-block btn-lg">Editar perfil</a></div>
                        </div>
                    </form>
                </div>
                
                
            </div>
        
            <form method="post" action="">
                 
                <p class="clasificacion">
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
                    <input type="submit" name="valorar" value="Valorar">
                </p>
          
           
               
       
                
            </form>
            
            

        </div>
    </div>
</div>       
</div>

