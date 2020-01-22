

<div class="col-sm-12 mb-3 rounded shadow bg-danger p-0 mt-3">



    <nav class="navbar navbar-expand-lg navbar-dark ">
        <div class="container">
            <a class="navbar-brand" href="index.php"><img width="60" src="pelotqa.png"></a>
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
                    <li class="nav-item">
                        <a class="nav-link"  style="color: white;" href="acceso.php">
                            Acceder</a>
                    </li>


                </ul>



            </div>
            <div class="container">

                <a class="navbar-brand" href="#">
                </a>
                <button class="navbar-toggler border-0" type="button" data-toggle="collapse" data-target="#exCollapsingNavbar">
                    &#9776;
                </button>
                <div class="collapse navbar-collapse" id="exCollapsingNavbar">

                    <ul class="nav navbar-nav flex-row justify-content-between ml-auto">
                        <li class="nav-item order-2 order-md-1"><a href="#" class="nav-link" title="settings"><i class="fa fa-cog fa-fw fa-lg"></i></a></li>
                        <li id="dropdownLoginLI" class="dropdown order-1">
                            <button type="button" id="dropdownMenu1" data-toggle="dropdown" class="btn btn-outline-secondary dropdown-toggle ">Login <span class="caret"></span></button>
                            <ul class="dropdown-menu dropdown-menu-right mt-2">
                                <li class="px-3 py-2">
                                    <div class="card">
                                        <div class="card-body">
                                            <div>
                                                <img src="iconos/usuario.png">
                                            </div>
                                            <div>
                                                <h4>Log In</h4>
                                            </div>

                                            <button class="btn btn-success btn-lg" data-toggle="modal" data-target="#formularioModal">
                                                Haz click para iniciar sesión
                                            </button>

                                            


                                        </div>
                                    </div>
                                    <form class="form" role="form" method="post">

                                        <div class="text-center">
                                            <small>or</small>
                                        </div>

                                        <div class="form-group">
                                            <button id="googleSignInBtn" class="btn-google">SIGN IN WITH GOOGLE</button>
                                        </div>

                                        <div class="form-group text-center">
                                            <small><a href="#" data-toggle="modal" data-target="#modalPassword">Forgot password?</a></small>
                                        </div>
                                    </form>
                                </li>
                            </ul>
                        </li>
                        <li id="dropdownLogoutLI" class="dropdown order-1" style="display:none;">
                            <button type="button" id="dropdownLogoutMenu1" data-toggle="dropdown" class="btn btn-outline-secondary dropdown-toggle">Name: <span class="caret"></span></button>
                            <ul class="dropdown-menu dropdown-menu-right mt-2">
                                <li class="px-3 py-2">
                                    <form class="form" role="form">
                                        <div class="form-group">
                                            <button type="submit" class="btn btn-primary btn-block">Edit profile</button>
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
                        </li>
                        <script>startApp();</script>
                        <?php
                        require_once 'Login.php';
                        if (isset($_POST['boton'])) {
                            Login::comprobarUsuario($_POST['email'], $_POST['contra']);
                            session_start();
                        }
                        ?>

                    </ul>
                    <div id="modalPassword" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
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

        </div>
    </nav>
    <div class="modal fade" id="formularioModal" role="dialog">
                                                <div class="modal-dialog">
                                                    <div class="modal-content">

                                                        <div class="modal-header">
                                                            <img src="iconos/usuario.png">
                                                            <button type="button" class="close" data-dismiss="modal">
                                                                <span aria-hidden="true">X</span>
                                                            </button>
                                                        </div>


                                                        <div class="modal-body">
                                                            <p class="statusMsg"></p>
                                                            <form role="form">
                                                                <div class="form-group">
                                                                    <label for="inputEmail">Email</label>
                                                                    <input type="email" class="form-control" id="inputEmail" placeholder="Introduce tu correo"/>
                                                                </div>
                                                                <div class="form-group">
                                                                    <label for="inputContrasena">Contraseña</label>
                                                                    <input type="password" class="form-control" id="inputContrasena" placeholder="Introduce tu contraseña"/>
                                                                </div>
                                                            </form>
                                                        </div>


                                                        <div class="modal-footer">
                                                            <a href="#">Olvidé la contraseña</a>
                                                            <button type="button" class="btn btn-default" data-dismiss="modal">Cerrar</button>
                                                            <button type="button" class="btn btn-primary submitBtn">Acceder</button>

                                                        </div>
                                                    </div>
                                                </div>
                                            </div>




</div>