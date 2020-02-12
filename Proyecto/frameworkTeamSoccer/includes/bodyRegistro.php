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
                        <form action="" name="formulario" id="formulario">
                            <div class="form-row">
                                

                                <div class="form-group col-md-12">
                                    
                                    <input name="nombre" id="nombre" placeholder="*Nombre Usuario " class="form-control" type="text">
                                </div>

                                <div class="form-group col-md-12">
                                    <input type="email" class="form-control" placeholder="*Email" name="email" >
                                </div>
                                
                                <input type="hidden" name="coinciden" value="">
                                
                               

                                <div class="form-group col-md-12">
                                    <input type="password" class="form-control"  placeholder="*Contraseña" name="password1" value='<?php if(isset($_POST['coinciden'])) echo $_POST['password1'] ; ?>'>
                                </div>

                                <div class="form-group col-md-12">
                                    <input type="password" class="form-control"  placeholder="*Repetir contraseña" name="password2" value='<?php if(isset($_POST['coinciden'])) echo $_POST['password2'] ; ?>'>
                                </div>

                                <div class="form-group col-md-12">
                                    <input name="nombre2" placeholder="*Nombre" class="form-control" type="text" value='<?php if(isset($_POST['submit']) && $_POST['nombre']!=null) echo $_POST['nombre'] ; ?>'>
                                </div>

                                <div class="form-group col-md-12">
                                    <input name="apellido1" placeholder="*Apellido 1" class="form-control" type="text" value='<?php if(isset($_POST['submit']) && $_POST['apellido1']!=null) echo $_POST['apellido1'] ; ?>'>
                                </div>

                                <div class="form-group col-md-12">
                                    <input name="apellido2" placeholder="Apellido 2(Opcional)" class="form-control" type="text" value='<?php if(isset($_POST['submit']) && $_POST['apellido2']!=null) echo $_POST['apellido2'] ; ?>'>
                                </div>
                                <br>
                                
                                <div class="form-group col-md-12">
                                    <p>*Fecha Nacimiento:</p>
                                    <input name="fecha_nacimiento" placeholder="Fecha Nacimiento" class="form-control" type="date" value='<?php if(isset($_POST['submit']) && $_POST['fecha_nacimiento']!=null) echo $_POST['fecha_nacimiento'] ; ?>'>
                                </div>

                                <div class="form-group col-md-12">
                                    <input name="pais" placeholder="*Pais" class="form-control" type="text" value='<?php if(isset($_POST['submit']) && $_POST['pais']!=null) echo $_POST['pais'] ; ?>'>
                                </div>

                                <div class="form-group col-md-12">
                                    <input name="codigo_postal" placeholder="*Codigo Postal" class="form-control" type="number" value='<?php if(isset($_POST['submit']) && $_POST['codigo_postal']!=null) echo $_POST['codigo_postal'] ; ?>'>
                                </div>

                                <div class="form-group col-md-12">
                                    <input name="telefono" placeholder="*Telefono" class="form-control" type="number" value='<?php if(isset($_POST['submit']) && $_POST['telefono']!=null) echo $_POST['telefono'] ; ?>'> 
                                </div>
                                
                                <div class="mx-auto">
                                <input type="text" name="captcha" id="captcha" maxlength="6" size="6"/>
                                <img src="captcha.php"/><br>
                             
                                
   </div>
                            </div>
                            <div class="form-row">
                                <div class="form-group">
                                   
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
                        
                      
                        
                    </div>
                    <div class="text-right mt-2">
                        <a href="acceso.php">Ya tengo una cuenta </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

