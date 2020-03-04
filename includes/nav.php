<?php
session_start();


require_once 'Conexion.php';
$conex = new Conexion();
if (isset($_POST['boton'])) {
    $consulta = $conex->query("Select  rol,email, password from usuario where email='$_POST[em]' && password='$_POST[contra]'");
    $object=$consulta->fetch_object();
    if ($conex->affected_rows > 0) {
             
        @$_SESSION['email'] = $_POST[em];
        @$_SESSION['contrasena'] = $_POST[contra];
        @$_SESSION['rol'] = $object->rol;

        
    } else {
        echo 'Usuario o contraseña incorrectos';
    }
   
}
?>

<div class="col-sm-12 mb-3 rounded shadow bg-danger p-0 mt-3">



    <nav class="navbar navbar-expand-lg navbar-dark ">
        <div class="container">
            <a class="navbar-brand" href="index.php"><img width="60" alt="pelota" src="pelotqa.png"></a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav mr-auto text-center">
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbardrop" data-toggle="dropdown">
                            Competiciones</a>
                        <div class="dropdown-menu">
                            <a class="dropdown-item" href="champions.php">Champions League</a>
                            <a class="dropdown-item" href="Europaleague.php">Europa League</a>
                            <a class="dropdown-item" href="copaAmerica.php">Copa América</a>
                            <a class="dropdown-item" href="mundial.php">Mundial</a>
                            <a class="dropdown-item" href="eurocopa.php">Eurocopa</a>
                        </div>
                    </li>
                    <li class="nav-item ">
                        <a class="nav-link" href="noticias.php" style="white-space: nowrap ">Noticias</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="tienda.php" style="white-space: nowrap ">Tienda</a>
                    </li>   

                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle"  href="#" id="navbardrop" data-toggle="dropdown" style="white-space: nowrap ">
                            Ligas</a>
                        <div class="dropdown-menu">
                            <a class="dropdown-item" href="clasificacion.php">Clasificacion</a>
                            <a class="dropdown-item" href="equipos.php">Equipos</a>
                            <a class="dropdown-item" href="resultados.php">Resultados</a>
                        </div>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="entretenimiento.php" style="white-space: nowrap ">
                            Entretenimiento</a>
                    </li>
                    <li class="nav-item ">
                        <a class="nav-link" href="contacto.php" style="white-space: nowrap ">Contacto</a>
                    </li>
                    <li class="nav-item ml-4">
                        <a class="nav-link"  style="color: white;" href="registro.php"><span
                                class="glyphicon glyphicon-user"></span>Registrar</a>

                    </li>


                    <li id="dropdownLoginLI" class="nav-item ml-4">
                        <button type="button" id="dropdownMenu1" data-toggle="dropdown" class="btn btn-outline-secondary dropdown-toggle "><?php if(isset($_SESSION['email'])) { echo $_SESSION['email']; }else echo 'Login';?> <span class="caret"></span></button>
                        <ul class="dropdown-menu dropdown-menu-right mt-2">
                            <li class="px-3 py-2">
                                  <div class="card">
                                    <div class="card-body">
                                        <?php
                                        if (!isset($_SESSION['email'])) {
                                            ?>
                                            <div>
                                                  <center><img alt="iconousuario" src="iconos/usuario.png"></center>
                                            </div>
                                            <div>
                                                <center>  <h4>Log In</h4></center>
                                            </div>

                                           <center> <button class="btn btn-success btn-lg" data-toggle="modal" data-target="#formularioModal">
                                                Haz click para iniciar sesión
                                               </button></center>
                                            <?php
                                        } else {
                                            ?>
                                            <div>
                                                <img alt="iconousuario" src="iconos/usuario.png">
                                            </div>
                                            <div>
                                                <a href=""><?php echo $_SESSION['email']?></a><br>
                                                <hr>
                                                <a href="editarperfil.php">Mi Perfil</a><br>
                                                <a href="cerrar_sesion.php">Cerrar Sesion</a>
                                            </div>
                                            <?php
                                        }
                                        ?>





                                    </div>
                                </div>
                                <?php if (!isset($_SESSION['email'])) { ?>
                                <form class="form" role="form" method="post">

                                    <div class="text-center">
                                        <small>or</small>
                                    </div>

                                    <div class="form-group">
                                        <center><submit id="googleSignInBtn" class="btn-google" >SIGN IN WITH GOOGLE</submit></center>
                                    </div>

                                    <div class="form-group text-center">
                                        <small><a href="#" data-toggle="modal" data-target="#modalPassword">Forgot password?</a></small>
                                    </div>
                                </form>
                                <?php } ?>
                            </li>
                        </ul>
                    </li>
                    <li id="dropdownLogoutLI" class="nav-item" style="display:none;">
                        <button type="button" id="dropdownLogoutMenu1" data-toggle="dropdown" class="btn btn-outline-secondary dropdown-toggle">Name: <span class="caret"></span></button>
                        <ul class="dropdown-menu dropdown-menu-right mt-2">
                            <li class="px-3 py-2">
                                <form class="form" role="form">
                                    <div class="form-group">
                                        <button  type="submit"  class="dropdown-item btn btn-primary btn-block"><a href="editarperfil.php">Edit profile</a></button>
                                    </div>
                                    <div class="text-center">
                                        <small>or</small>
                                    </div>

                                    <div class="form-group">
                                        <button id="googleSignoutBtn" onclick="signOut()" class="btn-google">SIGN OUT</button>
                                    </div>

                                </form>
                            </li>
                        </ul>
                </ul>

                </li>
                <script>startApp();</script>
               
                </ul>
                <div id="modalPassword" class="modal fade" tabindex="-1" role="dialog" >
                    <div class="modal-dialog">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h3>Forgot password</h3>
                                <button type="button" class="close font-weight-light" data-dismiss="modal" aria-hidden="true">×</button>
                            </div>
                            <div class="modal-body">
                                <p>Reset your password..</p>
                            </div>
                            <div class="modal-footer">
                                <button class="btn" data-dismiss="modal" aria-hidden="true">Close</button>
                                <button class="btn btn-primary">Save changes</button>
                            </div>
                        </div>
                    </div>
                </div>



            </div>
        </div>
    </nav>
    <div class="modal fade" id="formularioModal" role="dialog">
        <div class="modal-dialog">
            <div class="modal-content">

                <div class="modal-header">
                    <img alt="iconousuario" src="iconos/usuario.png">
                    <button type="button" class="close" data-dismiss="modal">
                        <span aria-hidden="true">X</span>
                    </button>
                </div>


                <div class="modal-body">
                    <p class="statusMsg"></p>
                    <form role="form" method="post">
                        <div class="form-group">
                            <label for="inputEmail">Email</label>
                            <input type="email" class="form-control" id="inputEmail" name="em" placeholder="Introduce tu correo"/>
                        </div>
                        <div class="form-group">
                            <label for="inputContrasena">Contraseña</label>
                            <input type="password" class="form-control" id="inputContrasena" name="contra" placeholder="Introduce tu contraseña"/>
                        </div>

                        <div class="modal-footer">
                            <a href="#">Olvidé la contraseña</a>

                            <button type="button" class="btn btn-default" data-dismiss="modal">Cerrar</button>
                            <input type="submit" class="btn btn-primary submitBtn" name="boton" value="Acceder">

                        </div>
                    </form>

                </div>
            </div>
        </div>
    </div>




</div>
