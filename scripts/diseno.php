<?php
include_once("encabezadojs.php");
?>
<!-- Aqui empieza como tal el reporte -->
<div name=reporte>
  <div class="d-flex w-100" style="height:200vh;">
      <div class="position-absolute text-center divp">
      <center><img class="w-100" id="inicio" src="../img/PNEH.png"><br></center>
      <h1>Formulario Sugerencia de Diseño</h1>
      <center>
        <div class="w-75" style="text-align:left;">
           
          <form onsubmit="return validar()" method="POST" action="agregar/agregarsugerencia.php">
           
          <table width=100% cellspacing=0 cellpadding=0 border=1> 
             <thead>
                <tr><th colspan=2>Diseño de Interfaz <br> Describa de forma detallada su opinión acerca de la plataforma.</th></tr>
            </thead>
            <tbody> 
                </tr><td width="30%" style="font-family:bold"><label for="inin">Interfaz Intuitiva: </label></td>
                <td><input style="width:100%;border:1px solid whitesmoke;" type="text" id="inin" name="inin" value="Todo Perfecto!"></td></tr>
                </tr><td width="30%" style="font-family:bold"><label for="flu">Fluidez: </label></td>
                <td><input style="width:100%;border:1px solid whitesmoke;" type="text" id="flu" name="flu" value="Todo Perfecto!"></td></tr>
                </tr><td width="30%" style="font-family:bold"><label for="dis">Diseño: </label></td>
                <td><input style="width:100%;border:1px solid whitesmoke;" type="text" id="dis" name="dis" value="Todo Perfecto!"></td></tr>
                </tr><td width="30%" style="font-family:bold"><label for="color">Colorimetria: </label></td>
                <td><input style="width:100%;border:1px solid whitesmoke;" type="text" id="color" name="color" value="Todo Perfecto!"></td></tr>
                </tr><td width="30%" style="font-family:bold"><label for="vis">Visualización: </label></td>
                <td><input style="width:100%;border:1px solid whitesmoke;" type="text" id="vis" name="vis" value="Todo Perfecto!"></td></tr>
                <tr><th colspan=2><label style="width:100%" for="desc">Describa que cambios realizar a mejora de la interacción con el programa</label></th></tr>
                <tr><td colspan=2><textarea style="width:100%;border:1px solid whitesmoke;" name="desc" id="desc" cols="30" rows="10" required></textarea></td></tr>
            </tbody>
            </table> 

            <div class="fw-bold">
              <label class="fw-bold" for="n1">Captcha, Responde a la suma siguiente:*</label><br>
              <input type="number" id="n1" style="width:4em;" readonly>+
              <input type="number" id="n2" style="width:4em;" readonly>=
              <input type="number" id="suma" style="width:4em;">
            </div>

            <center>
              <input class="btn btn-primary fs-5 p-2 boton" type="submit" value="Enviar formulario">
              <input class="btn btn-danger fs-5 p-2 boton" type="reset" value="Borrar">
              <br></br>
            </center>
          </form>

        </div>
      </center>
    </div>
  </div>
</div>
<!-- Aqui acaba el reporte  -->  
<script src="validacion/diseno.js"></script>  

<?php
include_once("piejs.php");
?>