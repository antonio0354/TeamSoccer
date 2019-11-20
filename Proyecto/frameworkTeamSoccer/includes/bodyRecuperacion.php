 <form class="form-register" action="" method="post">
  <?php
  if (isset($_POST['enviar'])){
      ?>
  <h5>Hemos enviado una contraseña de recuperación a la dirección de correo: <b><?php echo $_POST['correo']; ?></b></h5>
  <?php
  } else {
      ?>
      <h4>Recuperar contraseña</h4>
  <input class="controls" type="text" name="correo" id="correo" placeholder="Ingrese el correo asociado a su cuenta">
  <input class="boton" name="enviar" type="submit" value="Recuperar contraseña">
  <?php
  }
  ?>
  <p><a href="acceso.php">Volver al Log In</a></p>
  </form>