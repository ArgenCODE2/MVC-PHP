<?php

abstract class Vista {

    protected $template = null;
    protected $mensaje = "";
    protected $error = "";
    protected $data = null;

    public function __construct($template, $scripts = null) {
        $this->template = $template;
        if(!is_null($scripts) ) {
            $this->template = str_replace('<!-- Scripts -->',$scripts,  $this->template);
        }

    }

    public function getMensaje() {
        return $this->mensaje;
    }

    public function setMensaje($mensaje) {
        $this->mensaje = $mensaje;
    }

    public function getError() {
        return $this->error;
    }

    public function setError($error) {
        $this->error = $error;
    }

    public function getTemplate() {
        return $this->template;
    }

    public function setTemplate($template) {
        $this->template = $template;
    }
     public function getData() {
        return $this->data;
    }

    public function setData($data) {
        $this->data = $data;
    }


    abstract public function mostrarHTML();
}

?>
