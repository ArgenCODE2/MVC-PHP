<?php
require_once ("app\inc\constantes.php");

function __autoload($name) {
      $pathIncludes       = 'app/inc/'.$name.'.php';
      $pathControladores  = 'app/controladores/'.$name.'.php';
      $pathModelos        = 'app/modelos/'.$name.'.php';
      $pathVistas         = 'app/vistas/'.$name.'.php';

      if(file_exists($pathIncludes)) require_once($pathIncludes);
      if(file_exists($pathControladores)) require_once($pathControladores);
      if(file_exists($pathModelos)) require_once($pathModelos);
      if(file_exists($pathVistas)) require_once($pathVistas);

   }

(!empty($_POST['controlador'])) ?  $controlador = $_POST['controlador'] : $controlador = "ControladorPrincipal";   
(!empty($_POST['metodo'])) ?  $metodo = $_POST['metodo'] : $metodo = "bienvenida"; 

if (is_callable(array($controlador, $metodo)) == false) 
    die("<br><br> No se puede ejecutar el metodo <b>$metodo</b> en el controlador <b>$controlador</b>");

$ObjControlador = new $controlador();
$ObjControlador->$metodo();
?>