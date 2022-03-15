<?php
  include_once("encabezadojs.php");
?>
<!-- Aqui empieza como tal el reporte -->
<div name=reporte>
  <div class="d-flex w-100" style="height:120vh;">
      <div class="position-absolute text-center divp">
      <center><img class="w-100" id="inicio" src="../img/PNEH.png"><br></center>
      <h1>Registro Postulante</h1>
      <center>
        <div class="w-75" style="text-align:left;">
           
          <form onsubmit="return validar()" method="POST" action="agregar/agregarpostulante.php">
            <div>
              <label class="fw-bold" for="identidad">Numero de identidad: </label>
              <input class="w-75" id="identidad" type="text" name="identidad" placeholder="****-****-*****" maxlength="15"
              style="width:100px;height:2.4em;" title="0000-0000-00000" pattern="[0-9]{4}-[0-9]{4}-[0-9]{5}" required/>
            </div>

            <div>
              <label class="fw-bold" for="nombre">Nombres: *</label>
              <input class="w-75" type="text" maxlength="60" id="nombre" name="nombre" placeholder="Completo!" required>
            </div>
            <div>
              <label class="fw-bold" for="apellido">Apellidos: *</label>
              <input class="w-75"  maxlength="60"  type="text" id="apellido" name="apellido" placeholder="Completo!" required>
            </div>
            <div class="d-flex">
              <label class="fw-bold" for="genero">Genero: *</label>
              <select value="" name="genero" id="genero">
                <option value="N">Otros</option>
                <option value="M">Masculino</option>
                <option value="F">Femenino</option>
              </select>
            </div>
            <div class="d-flex">
              <label class="fw-bold" for="nacimiento">Fecha de Nacimiento:*</label>
              <input type="date" id="nacimiento" name="nacimiento" onchange="calcularEdad()" required>
            </div>
            <div class="d-flex">
              <label class="fw-bold"  for="dir">Direccion*</label>
              <input class="w-75" type="text" id="dir" maxlength="200"  name="dir" required>
            </div>
            <div class="d-flex">
              <label class="fw-bold" for="tel">Telefono:*</label>
              <input type="text"  maxlength="15"  id="tel" name="tel" required>
            </div>
            <div class="fw-bold">
              <label  for="correo">Correo Electronico:</label>
              <input class="w-75" maxlength="60" type="email" id="correo" name="correo" required>
            </div>
            <div class="d-flex">
              <label class="fw-bold" for="estado">Estado: *</label>
              <select value="" name="estado" id="estado">
                <option value="">--Estado Postulante--</option>
                <option value="Desempleado">Desempleado</option>
                <option value="Empleado">Empleado</option>
              </select>
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
<script src="validacion/registropostulante.js"></script>  
<?php
  include_once("piejs.php");
?>