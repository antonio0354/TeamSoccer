<?php

class Conexion extends mysqli {

    private $host = "localhost";
    private $usu = "dwes";
    private $pass = "abc123.";
    private $bd = "loginusuarios";

    public function __construct() {
        parent::__construct($this->host, $this->usu, $this->pass, $this->bd);
        parent::set_charset("UTF8");
    }

}