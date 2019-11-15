<!DOCTYPE html>
<html>
    <head>
        <?php include("includes/head-tag-contents.php"); ?>
    </head>
    <style>
  * {
    margin: 0;
    padding: 0;
    box-sizing: border-box;
  }

  .form-register{
    width: 400px;
    background: #24303c;
    padding: 30px;
    margin: auto;
    margin-top: 100px;
    margin-bottom: 100px;
    border-radius: 4px;
    font-family: 'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif;
    color: white;
    box-shadow: 10px 16px 40px #000;
    text-align: center;
  }

  .form-register h4{
    font-size: 22px;
    margin-bottom: 20px;
  }
  
 .form-register h5{
    font-size: 18px;
    margin-bottom: 20px;
    color: white;
  }

  .controls{
    width: 100%;
    padding: 10px;
    border-radius: 4px;
    margin-bottom: 16px;
    border: 1px solid red;
    font-family: 'calibri';
    font-size: 18px;
    background-color: #24303c;
    color: white;
  }

  .form-register p{
    height: 40px;
    text-align: center;
    font-size: 16px;
    line-height: 40px;
  }

  .form-register a {
    color:white;
    text-decoration: none;

  }

  .form-register a:hover {
    color:white;
    text-decoration: underline;
  }

  .form-register .boton {
    width: 100%;
    background: red;
    border: none;
    padding: 12px;
    color: white;
    margin: 16px 0;
    font-size: 16px;
  }
    </style>
    <script></script>
    <body>

        <?php include("includes/design-top.php"); ?>
        <?php include("includes/nav.php"); ?>

        

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


        <?php include("includes/footer.php"); ?>

    </body>
</html>


