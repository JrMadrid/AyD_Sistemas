<?php
  include_once("encabezadojs.php");
?>
<!-- Aqui empieza como tal el reporte -->
<div name=reporte>
  <div class="d-flex w-100" style="height:140vh;">
      <div class="position-absolute text-center divp">
      <center><img class="w-100" id="inicio" src="../img/PNEH.png"><br></center>
      <h1>Detalles de Contrato</h1>
      <center>
        <div class="w-75" style="text-align:left;">
           
          <form onsubmit="return validar()" method="POST" action="agregar/agregarcontrato.php">
            <div>
              <label class="fw-bold" for="idcon">Identificacion de Contrato: </label>
              <input class="w-75" id="idcon" type="text" name="idcon" placeholder="A-0000" maxlength="6"
              style="width:100px;height:2.4em;" title="X-****" pattern="[A-Z]{1}-[0-9]{4}" required/>
            </div>

            <div>
              <label class="fw-bold" for="idvan">Identificacion de Vacante: </label>
              <input class="w-75" id="idvan" type="text" name="idvan" placeholder="AA*****" maxlength="7"
              style="width:100px;height:2.4em;" title="XX#####" pattern="[A-Z]{2}[0-9]{5}" required/>
            </div>

            <div>
              <label class="fw-bold" for="idpos">Identificacion del Postulante: </label>
              <input class="w-75" id="idpos" type="text" name="idpos" placeholder="****-****-*****" maxlength="15"
              style="width:100px;height:2.4em;" title="0000-0000-00000" pattern="[0-9]{4}-[0-9]{4}-[0-9]{5}" required/>
            </div>

            <div>
              <label class="fw-bold" for="ticon">Tipo de Contrato: *</label>
              <input class="w-75" type="text" maxlength="50" id="ticon" name="ticon" required>
            </div>

            <div class="d-flex">
              <label class="fw-bold" for="feini">Fecha de Inicio:*</label>
              <input type="date"  id="feini" name="feini" required>
            </div>

            <div class="d-flex">
              <label class="fw-bold" for="fefin">Fecha de Finalización:*</label>
              <input type="date"  id="fefin" name="fefin" value="31/12/9999">
              <span style="color:gray">&nbspSaltar si es contrato permanente</span>
            </div>

            <div>
              <label class="fw-bold"  for="horar">horario: *</label>
              <input class="w-75" maxlength="50" type="text" id="horar" name="horar" placeholder="00:00am-00:00pm" required>
            </div>

            <div>
              <label class="fw-bold"  for="sueld">Sueldo: *</label>
              <input class="w-75" type="number" maxlength="9" id="sueld" title="Moneda: Lempiras(Lps)"  placeholer="Moneda: Lempiras(Lps)" name="sueld" required>
            </div>

            <div>
              <label class="fw-bold"   for="tipag">Tipo de Pago: *</label>
              <input class="w-75" maxlength="50" type="text" id="tipag" name="tipag" required>
            </div>

            <div>
              <label class="fw-bold"  for="diala">Dias Laborales: *</label>
              <input style="width:5em" maxlength="50" type="number" id="diala" name="diala" required>
            </div>

            <div>
              <label class="fw-bold"  for="diava">Dias Vacacionales: *</label>
              <input style="width:5em" maxlength="50" type="number" id="diava" name="diava"  required>
            </div>

            <div>
              <label class="fw-bold"  maxlength="30" for="depar">Departamento: *</label>
              <input class="w-75" maxlength="50" type="text" id="depar" name="depar" required>
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
<script src="validacion/contrato.js"></script>  
<?php
  include_once("piejs.php");
?>