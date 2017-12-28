<?php

final class ModeloPrincipal extends Modelo {

    public function login($usu,$pass) {
       
       // $conn = $this->conectarBD(); 
       // validar login
        if (($usu == "demo") && ($pass == "1234")){
            return "ok";
        }
        else {
            return "err";
        }

       //$this->desconectarBD($conn);
              
    }
  
}

?>
