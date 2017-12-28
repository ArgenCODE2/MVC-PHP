<?php

abstract class Modelo {
    
    protected $server = null;
    protected $bd = null;
    protected $usr =null;
    protected $pass = null;

    public function __construct() {
        $this->server = SERVERDB;
        $this->bd = DB;
        $this->usr = USUDB;
        $this->pass = CLAVEUSUDB;

    }
    public function conectarBD(){
        $conn = new mysqli($this->server, $this->usr, $this->pass, $this->bd);
        if (mysqli_connect_errno()) {
            printf("Falló la conexión: %s\n", mysqli_connect_error());
            exit();
        }
        if (!$conn->set_charset("utf8")) {
            printf("Error cargando el conjunto de caracteres utf8: %s\n", $mysqli->error);
            exit();
        }
        return $conn;
    }

    public function desconectarBD($mysqli){
        $mysqli->close();
    }
}
?>
