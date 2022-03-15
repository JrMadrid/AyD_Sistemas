<?php
  include_once("encabezadojs.php");
?>
<!-- Aqui empieza como tal el reporte -->
<div name=reporte>
  <div class="d-flex w-100" style="height:170vh;">
      <div class="position-absolute text-center divp">
      <center><img class="w-100" id="inicio" src="../img/PNEH.png"><br></center>
      <h1>Detalles de Vacante</h1>
      <center>
        <div class="w-75" style="text-align:left;">
           
          <form onsubmit="return validar()" method="POST" action="agregar/agregarvacante.php">
    
            <div>
              <label class="fw-bold" for="idvac">Identificacion de Vacante: </label>
              <input class="w-75" id="idvac" type="text" name="idvac" placeholder="AA*****"  maxlength="7"
              style="width:100px;height:2.4em;" title="XX#####" pattern="[A-Z]{2}[0-9]{5}" required/>
            </div>

            <div>
              <label class="fw-bold" for="idem">Identidad de la empresa: </label>
              <input class="w-75" id="idem" name="idem" type="text" maxlength="12" placeholder="AA-####-####" pattern="[A-Z]{2}-[0-9]{4}-[0-9]{4}"
              style="width:100px;height:2.4em;"  required/> 
            </div>

            <div class="d-flex">
              <label class="fw-bold" for="fepub">Fecha de Publicacion:*</label>
              <input type="date"  id="fepub" name="fepub" required>
            </div>

            <div class="d-flex">
              <label class="fw-bold" for="estad">Estado: *</label>
              <select value="" name="estad" id="estad">
                <option value="">--Estado Vacante--</option>
                <option value="Desempleado">Disponible</option>
                <option value="Empleado">Disponibilidad Inmediata</option>
                <option value="Empleado">Disponible hasta 1 mes</option>
              </select>
            </div>
            
            <div class="fw-bold">
              <label for="pues">Puesto: *</label>
              <input class="w-75"  maxlength="200" type="text" id="pues" name="pues" required>
            </div>

            <div class="d-flex">
              <label class="fw-bold" for="jorna">Jornada: *</label>
              <select value="" name="jorna" id="jorna">
                <option value="Mixta">Mixta</option>
                <option value="Matutina">Matutina</option>
                <option value="Verpertina">Verpertina</option>
                <option value="Nocturna">Nocturna</option>
                <option value="Distancia">Distancia</option>
              </select>
            </div>

            <div class="fw-bold">
              <label for="descr">Descripción: *</label>
              <input class="w-75"  maxlength="500" type="text" id="descr" name="descr" required>
            </div>

            <div class="fw-bold">
              <label for="lugar">Lugar: *</label>
              <input class="w-75"  maxlength="100" type="text" id="lugar" name="lugar" required>
            </div>

            <div class="d-flex">
              <label class="fw-bold" for="gener">Genero: *</label>
              <select value="" name="gener" id="gener">
              <option value="U">Cualquier</option> 
              <option value="M">Masculino</option>
              <option value="F">Femenino</option>
              <option value="N">Otros</option>
              </select>
            </div>

            <div class="fw-bold">
              <label for="edad">Edad: *</label>
              <input class="w-75"  maxlength="15" type="text" id="edad" name="edad" required>
            </div>

            
            <div class="fw-bold">
              <label for="graca">Grado Academico: *</label>
              <input class="w-75"  maxlength="200" type="text" id="graca" name="graca" required>
            </div>

            <div class="fw-bold">
              <label for="exper">Experiencia: *</label>
              <input class="w-75"  maxlength="300" type="text" id="exper" name="exper" required>
            </div>  

            <div class="fw-bold">
              <label for="conoc">Conocimientos: *</label>
              <input class="w-75"  maxlength="500" type="text" id="conoc" name="conoc" required>
            </div>

            
            <div class="fw-bold">
              <label for="idiom">Idiomas: *</label>
              <input class="w-75"  maxlength="100" type="text" id="idiom" name="idiom" required>
            </div>

            <div class="fw-bold">
              <label for="respon">Responsabilidades: *</label>
              <input class="w-75"  maxlength="500" type="text" id="respon" name="respon" required>
            </div>

            <div class="fw-bold">
              <label for="dispo">Disponibilidad de Viaje: *</label>
              <select value="" name="dispo" id="dispo">
                <option value="">--Seleccione--</option>
                <option value="Si">Si</option>
                <option value="So">No</option>
                </select> 
            </div>
            <div class="fw-bold">
              <label for="docre">Documentos Requiridos: *</label>
              <input class="w-75" maxlength="300" type="text" id="docre" name="docre" required>
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
<script src="validacion/vacante.js"></script>  
<?php
  include_once("piejs.php");
?>