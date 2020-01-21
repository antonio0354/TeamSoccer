<?php

require_once 'Conexion.php';

class Login {

    public function comprobarUsuario($email, $passw) {
        $conex = new Conexion();

        $consulta = $conex->query("SELECT * from usuario where contrasena='$passw' && email='$email'");
        
         if ($conex->affected_rows > 0){
             echo "<li class='nav-item dropdown'>
                                    <a class='nav-link dropdown-toggle'  href='#' id='navbardrop' data-toggle='dropdown' style='white-space: nowrap '>
                                        Mi Cuenta</a>
                                    <div class='dropdown-menu'>
                                        <a class='dropdown-item' href=''>Cuenta</a>
                                        <a class='dropdown-item' href=''>Cerrar Sesion</a>
                                        
                                    </div>
                                </li>";
        }else{
            echo "error";
        }
    }

}
