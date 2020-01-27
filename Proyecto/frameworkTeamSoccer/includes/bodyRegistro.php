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
                                <div class="form-group col-md-12">
                                    <input name="nombre" placeholder="Nombre" class="form-control" type="text">
                                </div>
                                <div class="form-group col-md-12">
                                    <input type="email" class="form-control" placeholder="Email">
                                </div>
                                <div class="form-group col-md-12">
                                    <input type="password" class="form-control"  placeholder="Contraseña">
                                </div>
                                <div class="form-group col-md-12">
                                    <input type="password" class="form-control"  placeholder="Repetir contraseña">
                                </div>
                                <div class="mx-auto">
  <input type="text" name="captcha" id="captcha" maxlength="6" size="6"/>
  <img src="captcha.php"/><br>

                           
                              <?php if (isset($_POST['submit'])) {
    if ($_POST['captcha'] == $_SESSION['cap_code']) {
        // Captcha verification is Correct. Do something here!
        echo '<p>El captcha introducido es correcto</p>';
    }
    else {
        // Captcha verification is wrong. Take other action
        echo '<p>El captcha introducido no es correcto</p>';
    }
}
?>
   </div>
                            </div>
                            <div class="form-row">
                                <div class="form-group">
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" value="">
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

