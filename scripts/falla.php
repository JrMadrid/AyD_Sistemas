<?php
include_once("encabezadojs.php");
?>
<!-- Aqui empieza como tal el reporte -->
<div name=reporte>
  <div class="d-flex w-100" style="height:200vh;">
      <div class=" text-center divp">
      <center><img class="w-100" id="inicio" src="../img/PNEH.png"><br></center>
      <h1>Formulario Falla Técnica</h1>
      <center>
        <div class="w-75" style="text-align:left;">
           
          <form onsubmit="return validar()" method="POST" action="agregar/agregarfallo.php">
           
          <table width="100%" cellspacing=0 cellpadding=0 border=1> 
             <thead>
                <tr>
                  <th width="50%"><label>Tipo de Problema:&nbsp</label>
                      <select value="" name="tipo" id="tipo">
                      <option value="">--Seleccione--</option>
                        <option value="Programacion">Programacion</option>
                        <option value="Datos">Datos</option>
                        <option value="Validacion">Validacion</option>
              </select></th>
                  <th width="50%"><label>Seccion del Software:&nbsp</label>
                      <select value="" name="seccion" id="seccion">
                      <option value="">--Seleccione--</option>
                        <option value="Inicio">Inicio</option>
                        <option value="Vacantes">Vacantes</option>
                        <option value="Registro">Registro</option>
                        <option value="Informes">Informes</option>
                        <option value="Iniciar Sesion">Iniciar Sesion</option>
              </select></th>
                </tr>
            </thead>
            <tbody> 
                <tr><td colspan=2><textarea placeholder="Describa el Fallo Técnico" style="width:100%;border:1px solid whitesmoke;" name="desc" cols="30" rows="10" required></textarea></td></tr>
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
<script src="validacion/falla.js"></script>  

<?php
include_once("piejs.php");
?>