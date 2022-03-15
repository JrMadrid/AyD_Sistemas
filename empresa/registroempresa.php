<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">  <!-- IMPORTANTEEEEEEEEEEE -->
    <link rel="shortcut icon" href="../img/HN.png">
    <title>Devs&Jobs</title>
    <link rel="stylesheet" href="../bootstrap/css/bootstrap.css"> <!-- IMPORTANTEEEEEEEEEEE -->
    <link rel="stylesheet" href="../bootstrap/icons-1.6.1/font/bootstrap-icons.css"> <!-- IMPORTANTEEEEEEEEEEE -->
    <link rel="stylesheet" href="../estilo.css"> <!-- IMPORTANTEEEEEEEEEEE -->
    <link rel="stylesheet" href="../css/styles.css">

  </head>
  <body style="margin-top: 90px;" onload="generarAzar()">

<nav class="navbar navbar-expand-xl navbar-dark fixed-top pnavbar" > <!-- IMPORTANTEEEEEEEEEEE fixed-top -->
      <div class="container-fluid">
        <a class="navbar-brand" target="_blank" href="http://www.trabajo.gob.hn/"> <img src="../img/STmini.jpg" height=40> </a> <!-- IMPORTANTEEEEEEEEEEE -->
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarDark" aria-controls="navbarDark" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse " id="navbarDark">  <!-- IMPORTANTEEEEEEEEEEE show por hide-->
          <ul class="navbar-nav me-auto mb-2 mb-xl-0">
            <li class="nav-item botonnav">
              <a class="nav-link active" target="_blank" aria-current="page" href="http://devsjobsjr.epizy.com/">Inicio</a>
            </li>
            </ul>
        </div>
        <!-- Example split danger button -->
        <div class="btn-group botonnav">
          <button type="button" class="btn dropdown-toggle-split botonnav binicio" data-bs-toggle="dropdown" aria-expanded="false"><i class="bi bi-file-earmark-person-fill"></i>&nbspRegistrar&nbsp
            <span class="visually-hidden">Toggle Dropdown</span>
          </button>
          <ul class="dropdown-menu dropdown-menu-dark">
            <li class="botonnav" ><a class="dropdown-item" href="../postulante/registropostulante.php">Postulante</a></li>
            <li class="botonnav" ><hr class="dropdown-divider"></li>
            <li class="botonnav" ><a class="dropdown-item" href="registroempresa.php">Empresa</a></li>
          </ul>
        </div>
        <div class="btn-group botonnav">
          <button type="button" class="btn dropdown-toggle-split botonnav binicio" data-bs-toggle="dropdown" aria-expanded="false"><i class="bi bi-person-circle "></i>&nbspIniciar Sesión&nbsp
            <span class="visually-hidden">Toggle Dropdown</span>
          </button>
          <ul class="dropdown-menu dropdown-menu-dark">
            <li class="botonnav" ><a class="dropdown-item" href="../postulante/iniciarsesionpostulante.php">Postulante</a></li>
            <li class="botonnav" ><hr class="dropdown-divider"></li>
            <li class="botonnav" ><a class="dropdown-item" href="iniciarsesionempresa.php">Empresa</a></li>
          </ul>
        </div>

        </div>
</nav>      
<a name=inicio></a>
<!-- Aqui empieza como tal el reporte -->
<div name=reporte>
  <div class="d-flex w-100" style="height:105vh;">
      <div class="position-absolute text-center divp">
      <center><img class="w-100" id="inicio" src="../img/PNEH.png"><br></center>
      <h1>Registro Usuario Empresa</h1>
      <center>
        <div class="w-75" style="text-align:left;">
          <form onsubmit="return validar()" method="POST" action="agregar/agregarempresa.php">
            <div>
              <label class="fw-bold" for="identidad">Identidad de la empresa: </label>
              <input class="w-75" maxlength="12" id="identidad" name="identidad" type="text" placeholder="AA-####-####" pattern="[A-Z]{2}-[0-9]{4}-[0-9]{4}"
              style="width:100px;height:2.4em;"  required/> 
            </div>

            <div>
              <label class="fw-bold" for="nombre">Nombre Empresa Usuario: </label>
              <input class="w-75" type="text" maxlength="20" id="nombre" placeholder="Completo!" name="nombre" required>
            </div>
            <div>
            <div>
              <label class="fw-bold" for="contra">Contraseña: *</label>
              <input class="w-75" type="password" id="contra" maxlength="20" placeholder="Completo!" name="contra" required>
            </div>
            <div>
              <label class="fw-bold" for="veri">Confirme Contraseña: *</label>
              <input class="w-75" type="password" id="veri" maxlength="20" placeholder="Completo!" name="veri" required>
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

<footer style="background-color: rgb(33,37,41);">
    <div class="container-fluid bg-dark text-white text-center p-2 fs-6">
      <h5>Información</h5>
      <div style="text-align: left;margin-left: 20px; ">
        <i class="bi bi-telephone-fill" style="margin-bottom:5px"></i>&nbsp;+504 9636-4564
        <br>
        <i class="bi bi-envelope-fill"></i>&nbsp;devsandjobs@trabajohn.com
        <br>
        <i class="bi bi-facebook"></i>&nbsp;Devs&Jobs 
        <br>
        <br>
        <button style="color:gray;background-color:inherit;"><a href="http://devsjobsjr.epizy.com/registro.php" style="margin:10px" >Registrarse</a> </button>
      </div>
      <a href="#inicio" style="position:relative;bottom:0em;right:0;width:50px;height:50px">
        <i class="bi bi-arrow-bar-up" style="color:white;width:50px;"></i>
      </a>
    </div>
    <div style="background-color:black; color: white; padding-left: 15px; border-top:1px solid gray;">
      <marquee behavior="" direction="">Desarrollado por Devs & Jobs 2021 © Todos los derechos reservados.</marquee> 
    </div>
  </footer>

    <script src="../bootstrap/js/bootstrap.min.js"></script> <!-- IMPORTANTEEEEEEEEEEE -->
<script src="assets/jquery-1.12.4-jquery.min.js"></script> 
<script src="assets/jquery.validate.min.js"></script> 
<script src="assets/ValidarRegistro.js"></script> 
<!-- Bootstrap core JavaScript
    ================================================== --> 
<!-- Placed at the end of the document so the pages load faster --> 

<script>window.jQuery || document.write('<script src="assets/js/vendor/jquery-slim.min.js"><\/script>')</script> 
<script src="assets/js/vendor/popper.min.js"></script> 
<script src="dist/js/bootstrap.min.js"></script>
</html>

