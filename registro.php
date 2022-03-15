<?php
 include_once("elementos/encabezado.php")
?>

<div class="d-flex w-100" style="height:140vh;">
  <div class="position-absolute text-center divp">
    <center><img class="w-100" src="img\PNEH.png"><br></center>
    <h1>Ingreso al Portal Nacional de Empleos en Honduras</h1> 
    <br>
    <div class="container">
<!-- Empieza el contenedor -->
<div class="row" >
        <div class="col-xl-6">
        <a href="postulante/iniciarsesionpostulante.php" class="btnr" target="_blank">
          <div class="card border-0 shadow">
          <img src="img\postulante.png" class="card-img-top" alt="...">
            <div class="card-body text-center">
            <h5 class="card-title mb-0">Soy un Postulante</h5>
            <div class="card-text text-black-50">Consigue un Empleo</div>
            </div>
        </a>    
          </div>
          <button type="button" class=" btn btnr"><a href="postulante/registropostulante.php" target="_blank">Registrar Usuario postulante</a></button>
        </div>

        <div class="col-xl-6">
        <a href="empresa/iniciarsesionempresa.php" class="btnr" target="_blank">
          <div class="card border-0 shadow">
          <img src="img\empresa.png" class="card-img-top" alt="...">
            <div class="card-body text-center">
            <h5 class="card-title mb-0">Soy una Empresa</h5>
            <div class="card-text text-black-50">Contratar personal</div>
            </div>
        </a>
          </div>
          <button type="button" class=" btn btnr"><a href="empresa/registroempresa.php" target="_blank">Registrar Usuario Empresa</a></button>
        </div>


      </div>
<!-- termina el contenedor -->
    </div>
  </div>
</div> 

<?php
 include_once("elementos/piepagina.php")
?>


 
