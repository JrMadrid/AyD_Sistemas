<?php
  include_once("encabezadojs.php");
?>
<!-- Aqui empieza como tal el reporte -->
<div name=reporte>
  <div class="d-flex w-100" style="height:105vh;">
      <div class="position-absolute text-center divp">
      <center><img class="w-100" id="inicio" src="../img/PNEH.png"><br></center>
      <h1>Registro Empresas</h1>
      <center>
        <div class="w-75" style="text-align:left;">
          <form onsubmit="return validar()" method="POST" action="agregar/agregarempresa.php">
            <div>
              <label class="fw-bold" for="identidad">Identidad de la empresa: </label>
              <input class="w-75" maxlength="12" id="identidad" name="identidad" type="text" placeholder="AA-####-####" pattern="[A-Z]{2}-[0-9]{4}-[0-9]{4}"
              style="width:100px;height:2.4em;"  required/> 
            </div>

            <div>
              <label class="fw-bold" for="nombre">Nombre: *</label>
              <input class="w-75" type="text" maxlength="60" id="nombre" placeholder="Completo!" name="nombre" required>
            </div>
            <div>
            <div>
              <label class="fw-bold" for="rtn">RTN: *</label>
              <input class="w-75" type="text" id="rtn" maxlength="14" placeholder="Completo!" name="rtn" required>
            </div>
            <div>
            <div class="d-flex">
              <label class="fw-bold" for="dir">Direccion*</label>
              <input class="w-75" type="text" id="dir" maxlength="200" placeholder="Completo!" name="dir" required>
            </div>
            <div class="d-flex">
              <label class="fw-bold" for="tel">Telefono:*</label>
              <input type="text" maxlength="15" id="tel" name="tel" required>
            </div>
            <div class="fw-bold">
              <label for="correo">Correo Electronico:</label>
              <input class="w-75" maxlength="100" type="email" id="correo" name="correo" required>
            </div>
          
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
<script src="validacion/registroempresa.js"></script>  
<?php
  include_once("piejs.php");
?>