<?php
require_once 'Conexion.php';
$conex = new Conexion();
$consulta = $conex->query("Select * from usuario where email='$_SESSION[email]'");
$object = $consulta->fetch_object();

                    if(isset($_POST['editar'])){

                            $nombreUsu=$_POST['nombre_usuario'];
                            $email=$_POST['email'];
                            $password1=$_POST['password1'];
                            $password2=$_POST['password2'];
                            $nombre=$_POST['nombre'];
                            $apellido1=$_POST['apellido1'];
                            $apellido2=$_POST['apellido2'];
                            $fecha_nacimiento=$_POST['fecha_nacimiento'];
                            $pais=$_POST['pais'];
                            $codigo_postal=$_POST['codigo_postal'];
                            $telefono=$_POST['telefono'];
                            $idU=$object->id;
                            
                            
                            $result=$conex->query("UPDATE usuario SET nombre_usuario = '$nombreUsu', password = '$password1', nombre = '$nombre', apellido1 = '$apellido1', apellido2 = $apellido2, email = '$email', fecha_nacimiento = '$fecha_nacimiento', pais = '$pais', codigo_postal = '$codigo_postal', telefono = '$telefono', rol = 'valorador' WHERE id = '$idU'");
                            
                            $result=$conex->query("Select * from usuario where email='$_SESSION[email]'");
                            
                            $object3 = $result->fetch_object();

                            echo $object3->nombre;
                            
                            
                         /*   
                            echo '<script type="text/javascript">
window.location.assign("index.php");
</script>';*/
                            
                    }else{
                        ?>
                        
                        <div class="container">
    <div class="row text-center">
        <div class="col-md-6 offset-md-3">
            <div class="card">
                <div class="card-body">
                    <div>
                        <h4>Editar Perfil</h4>
                    </div>
                    <div class="login-form mt-4">
                        <form action="" method="POST">
                            <div class="form-row">

                                <div class="form-group col-md-12">
                                    <label for="nombre_usuario">Nombre Usuario</label>
                                    <input name="nombre_usuario" class="form-control" type="text" value='<?php echo $object->nombre_usuario ?>'>
                                </div>

                                <div class="form-group col-md-12">
                                    <label for="email">email</label>
                                    <input type="email" class="form-control" name="email" value='<?php echo $object->email ?>'>
                                </div>

                                <div class="form-group col-md-12">
                                    <label for="password1">Contraseña</label>

                                    <input type="password" class="form-control"  name="password1" value='<?php echo $object->password ?>'>
                                </div>

                                <div class="form-group col-md-12">
                                    <label for="password2">Repetir contraseña</label>

                                    <input type="password" class="form-control"  name="password2" value='<?php echo $object->password ?>'>
                                </div>

                                <div class="form-group col-md-12">
                                    <label for="nombre">Nombre</label>

                                    <input name="nombre" class="form-control" type="text" value='<?php echo $object->nombre ?>'>
                                </div>

                                <div class="form-group col-md-12">
                                    <label for="apellido1">Apellido</label>

                                    <input name="apellido1" class="form-control" type="text" value='<?php echo $object->apellido1 ?>'>
                                </div>

                                <div class="form-group col-md-12">
                                    <label for="apellido2">Segundo Apellido</label>

                                    <input name="apellido2" class="form-control" type="text" value='<?php echo $object->apellido2 ?>'>
                                </div>


                                <div class="form-group col-md-12">
                                    <label for="fecha_nacimiento">Fecha Nacimiento</label>

                                    <input name="fecha_nacimiento" class="form-control" type="date" value='<?php echo $object->fecha_nacimiento ?>'>
                                </div>

                                <div class="form-group col-md-12">
                                    <label for="pais">Pais</label>

                                    <input name="pais"  class="form-control" type="text" value='<?php echo $object->pais ?>'>
                                </div>

                                <div class="form-group col-md-12">
                                    <label for="codigo_postal">Código Postal</label>

                                    <input name="codigo_postal" class="form-control" type="text" value='<?php echo $object->codigo_postal ?>'>
                                </div>

                                <div class="form-group col-md-12">
                                    <label for="telefono">Telefono</label>

                                    <input name="telefono" class="form-control" type="text" value='<?php echo $object->telefono ?>'> 
                                </div>

                            </div>
                            <div class="form-row">
                                <input type="submit" class="btn btn-danger btn-block" name="editar" value="Enviar">
                            </div>
                        </form>

                    </div>
                </div>
            </div>
        </div>
    </div>
                        </div>
                        <?php
                    }
?>





