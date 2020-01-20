            
<div class="col-md-6 offset-md-3">
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
    </div>
</div>