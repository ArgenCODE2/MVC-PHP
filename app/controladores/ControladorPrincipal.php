<?php

final class ControladorPrincipal extends Controlador {

    public function bienvenida($msg = null, $err = null) {

        $template = file_get_contents('web/principal.html');
        $V = new Bienvenida($template);

        $V->mostrarHTML();
    }

    public function login ($msg = null, $err = null){
    	$usu = $_POST["frmLoginUsu"];
        $pass = $_POST["frmLoginClave"]; 

        $scripts = '<script src="web/js/funciones.js"></script>';
    	$template = file_get_contents('web/principal.html');
        $V = new Inicio($template, $scripts);

        $M = new ModeloPrincipal();
        $res = $M->login($usu, $pass);
        if ($res== "err"){
            $V->setError("Usuario o clave incorrectos!");
        }
        else {
        	$V->setMensaje("<br>Ingreso al sistema!<br><br>");
        }
        
        $V->mostrarHTML();

    }

}

?>
