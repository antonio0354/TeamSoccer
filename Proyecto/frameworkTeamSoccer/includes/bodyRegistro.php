<div class="container">
    <div class="row text-center">
        <div class="col-md-6 offset-md-3">
            <div class="card">
                <div class="card-body">
                    <div>
                        <img src="iconos/usuario.png">
                    </div>
                    <div>
                        <h4>Sign Up</h4>
                    </div>
                    <div class="login-form mt-4">
                        <form action="" method="POST">
                            <div class="form-row">
                                
                                    <?php if(isset($_POST['submit']) && empty($_POST['nombre_usuario'])) echo "<span style='color:red'>Debes introducir el nombre</span>"; ?>

                                <div class="form-group col-md-12">
                                   <input name="nombre_usuario" placeholder="*Nombre Usuario " class="form-control" type="text" value='<?php if(isset($_POST['submit']) && $_POST['nombre_usuario']!=null) echo $_POST['nombre_usuario'] ; ?>'>
                                </div>
                                    <?php if(isset($_POST['submit']) && empty($_POST['email'])) echo "<span style='color:red'>Debes introducir el email</span>"; ?>

                                <div class="form-group col-md-12">
                                    <input type="email" class="form-control" placeholder="*Email" name="email" value='<?php if(isset($_POST['submit']) && $_POST['email']!=null) echo $_POST['email'] ; ?>'>
                                </div>
                                <?php 
                                
                                if(isset($_POST['submit']) && empty($_POST['password1'])){
                                     echo "<span style='color:red'>Debes introducir la contraseña</span>";
                                }else{
                                    
                                    if(isset($_POST['submit']) && ($_POST['password1']!=$_POST['password2'])){
                                        echo "<span style='color:red'>Las contraseñas deben coincidir</span>";
                                        ?>
                                <input type="hidden" name="coinciden" value="">
                                <?php
                                    }
                                } ?>
                               

                                <div class="form-group col-md-12">
                                    <input type="password" class="form-control"  placeholder="*Contraseña" name="password1" value='<?php if(isset($_POST['coinciden'])) echo $_POST['password1'] ; ?>'>
                                </div>

                                <div class="form-group col-md-12">
                                    <input type="password" class="form-control"  placeholder="*Repetir contraseña" name="password2" value='<?php if(isset($_POST['coinciden'])) echo $_POST['password2'] ; ?>'>
                                </div>
                                <?php if(isset($_POST['submit']) && empty($_POST['nombre'])) echo "<span style='color:red'>Debes introducir el nombre</span>"; ?>

                                <div class="form-group col-md-12">
                                    <input name="nombre" placeholder="*Nombre" class="form-control" type="text" value='<?php if(isset($_POST['submit']) && $_POST['nombre']!=null) echo $_POST['nombre'] ; ?>'>
                                </div>
                                <?php if(isset($_POST['submit']) && empty($_POST['apellido1'])) echo "<span style='color:red'>Debes introducir el 1er Apellido</span>"; ?>

                                <div class="form-group col-md-12">
                                    <input name="apellido1" placeholder="*Apellido 1" class="form-control" type="text" value='<?php if(isset($_POST['submit']) && $_POST['apellido1']!=null) echo $_POST['apellido1'] ; ?>'>
                                </div>

                                <div class="form-group col-md-12">
                                    <input name="apellido2" placeholder="Apellido 2(Opcional)" class="form-control" type="text" value='<?php if(isset($_POST['submit']) && $_POST['apellido2']!=null) echo $_POST['apellido2'] ; ?>'>
                                </div>
                                <?php if(isset($_POST['submit']) && empty($_POST['fecha_nacimiento'])) echo "<span style='color:red'>Debes introducir una fecha de nacimiento</span>"; ?>
                               
                                
                                <div class="form-group col-md-12">
                                    <span>*Fecha Nacimiento:</span>
                                    <input name="fecha_nacimiento" placeholder="Fecha Nacimiento" class="form-control" type="date" value='<?php if(isset($_POST['submit']) && $_POST['fecha_nacimiento']!=null) echo $_POST['fecha_nacimiento'] ; ?>'>
                                </div>
                                <?php if(isset($_POST['submit']) && empty($_POST['pais'])) echo "<span style='color:red'>Debes introducir un Pais</span>"; ?>

                                <div class="form-group col-md-12">
                                    <input name="pais" placeholder="*Pais" class="form-control" type="text" value='<?php if(isset($_POST['submit']) && $_POST['pais']!=null) echo $_POST['pais'] ; ?>'>
                                </div>
                                <?php if(isset($_POST['submit']) && empty($_POST['codigo_postal'])) echo "<span style='color:red'>Debes introducir el codigo_postal</span>"; ?>

                                <div class="form-group col-md-12">
                                    <input name="codigo_postal" placeholder="*Codigo Postal" class="form-control" type="number" value='<?php if(isset($_POST['submit']) && $_POST['codigo_postal']!=null) echo $_POST['codigo_postal'] ; ?>'>
                                </div>
                                <?php if(isset($_POST['submit']) && empty($_POST['telefono'])) echo "<span style='color:red'>Debes introducir el telefono</span>"; ?>

                                <div class="form-group col-md-12">
                                    <input name="telefono" placeholder="*Telefono" class="form-control" type="number" value='<?php if(isset($_POST['submit']) && $_POST['telefono']!=null) echo $_POST['telefono'] ; ?>'> 
                                </div>
                            
                                <div class="mx-auto">
                                <input type="text" name="captcha" id="captcha" maxlength="6" size="6"/>
                                <img src="captcha.php"/><br>
                          
                                          <?php if (isset($_POST['submit']) && ($_POST['captcha'] != $_SESSION['cap_code'])){
                                    
                                     echo "<span style='color:red'>El captcha no es correcto</span>"; 
                                  }
                                                          
                              ?>
   </div>
                            </div>
                            <div class="form-row">
                                <div class="form-group">
                                 <?php if(isset($_POST['submit']) && (!isset($_POST['terminos']))) echo "<span style='color:red'>Debes aceptar los terminos</span>"; ?>
                                   
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" value="" name="terminos" <?php if(isset($_POST['submit']) && (isset($_POST['terminos']))) echo "checked='terminos'"?>>
                                        <label class="form-check-label" for="updatecheck1">
                                            <small>Acepto todos los <a href="#">terminos y condiciones </a></small>

                                        </label>
                                    </div>
                                </div>
                            </div>                        

                            <div class="form-row">
                                <input type="submit" class="btn btn-danger btn-block" name="submit" value="Enviar">
                            </div>
                        </form>
                        
                        <?php 
                        if(isset($_POST['submit'])){
                            $valida=true;
                            if($_POST['nombre_usuario']==null){
                                $valida=false;
                            }
                            if($_POST['email']==null){
                                $valida=false;
                            }
                            if($_POST['password1']==null || ($_POST['password1'] != $_POST['password2'])){
                                $valida=false;
                            }
                            
                            if($_POST['nombre']==null){
                                $valida=false;
                            }
                            if($_POST['apellido1']==null){
                                $valida=false;
                            }
                           
                            if($_POST['fecha_nacimiento']==null){
                                $valida=false;
                            }
                            if($_POST['pais']==null){
                                $valida=false;
                            }
                            if($_POST['codigo_postal']==null){
                                $valida=false;
                            }
                            if($_POST['telefono']==null){
                                $valida=false;
                            }
                            if(!isset($_POST['terminos'])){
                                $valida=false;
                            }
                            if($_POST['captcha']==null){
                                $valida=false;
                            }
                            
                            
                            
                        }
                        require_once 'Conexion.php';
                        if(isset($_POST['submit']) && $valida==true){
                          
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
                            $conex = new Conexion();
                            $result=$conex->query("INSERT INTO usuario VALUES ('','$nombreUsu','$password1','$nombre','$apellido1','$apellido2','$email','$fecha_nacimiento','$pais','$codigo_postal','$telefono','valorador');");
                            
                            
                                echo '<script type="text/javascript">
window.location.assign("index.php");
</script>';
                            
                        }
                        
                        
                        
                        ?>
                        
                    </div>
                    <div class="text-right mt-2">
                        <a href="acceso.php">Ya tengo una cuenta </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

