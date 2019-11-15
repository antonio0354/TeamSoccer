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
  }

  .form-register h4{
    font-size: 22px;
    margin-bottom: 20px;
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

        

<section class="form-register">
    <h4>Formulario de registro</h4>
  <input class="controls" type="text" name="nombres" id="nombres" placeholder="Ingrese su nombre de usuario">
  <input class="controls" type="email" name="correo" id="correo" placeholder="Ingrese su correo">
  <input class="controls" type="password" name="contraseña" id="contraseña" placeholder="Ingrese su contraseña">
  <input class="controls" type="password" name="contraseña2" id="contraseña2" placeholder="Repita la contraseña">
  <p>Estoy de acuerdo con <a href="#"> Terminos y Condiciones</a></p>
  <input class="boton" type="submit" value="Registrar">
  <p><a href="acceso.php">Ya tengo cuenta</a></p>
</section>


        <?php include("includes/footer.php"); ?>

    </body>
</html>
