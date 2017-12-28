<?php
final class Bienvenida extends Vista {

public function mostrarHTML() {
        $diccionario = array(
            'areaTrabajo' => '
                     <div id="contenido">
                        Ejemplo de implementación MVC en php 
                    </div>
                    <div id="frm">
                    <h2>Ingreso al sistema:</h2> 
                    <div class="msgError">{mensajeError} </div>                                
                     <form id="frmlogin" name="frmlogin" method="post" action="index.php" class="form-style-1">
                      <ul class="form-style-1">
                       <li>
                           <input type="text" id="frmLoginUsu" name="frmLoginUsu" class="field-long" placeholder = "Usuario" required/>
                        </li>
                        <li>
                           <input type="password" id="frmLoginClave" name="frmLoginClave" class="field-long" placeholder = "Clave"  required/>
                        </li>
                        <li>
                            <input type="submit" value="Ingresar" id="frmLoginEnviar">
                        </li>
                        <input type="hidden" id="metodo" name="metodo" value="login" >
                        <input type="hidden" id="controlador" name="controlador" value="controladorPrincipal" >
                     </ul>
                    </form>
                        Usuario: <b>demo</b> - Clave: <b>1234</b>
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
