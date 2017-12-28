<?php

abstract class Controlador {

    private $modelo = null;
    
    public function getModelo() {
        return $this->modelo;
    }

    public function setModelo($modelo) {
        $this->modelo = $modelo;
    }

}

?>
