<?php
final class Inicio extends Vista {

public function mostrarHTML() {
        $diccionario = array(
            'areaTrabajo' => '
                     <div id="contenido">
                        Ejemplo de implementación MVC en php
                    </div>
                  <div id="frm">
                    <h2>Ingreso al sistema:</h2> 
                    <div class="msgError">{mensajeError} </div> 
                    <div class="msgAviso">{mensaje} </div> 
                    <form id="frmlogin" name="frmlogin" method="post" action="index.php" class="form-style-1">                               
                        <li>
                            <input type="submit" value="Volver" id="frmVolver">
                        </li>
                        <input type="hidden" id="metodo" name="metodo" value="Bienvenida" >
                        <input type="hidden" id="controlador" name="controlador" value="controladorPrincipal" >
                     </ul>
                    </form>
                    ',
            'nombre' => APPNAME,
            'mensaje' => $this->getMensaje(),
            'mensajeError' => $this->getError(),
        );
        foreach ($diccionario as $clave=>$valor){
            $this->template = str_replace('{'.$clave.'}', $valor, $this->template);
        }
        print $this->template;
    } 

}
?>
