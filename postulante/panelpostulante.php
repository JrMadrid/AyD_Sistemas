<?php   //PanelControl.php  
 session_start(); 
?>
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
  <body style="margin-top: 90px;" >

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

            <li class="nav-item dropdown botonnav">
            <a class="nav-link dropdown-toggle active" id="navbarDarkDropdownMenuLink" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                    Registro 
                </a>
                    <ul class="dropdown-menu dropdown-menu-dark" aaria-labelledby="navbarDarkDropdownMenuLink">
                        <li class="botonnav"><a class="dropdown-item" href="../scripts/registropostulante.php">Postulantes</a></li>
                        <li><hr class="dropdown-divider"></li>
                        <li class="botonnav"><a class="dropdown-item" href="../scripts/registroempresa.php">Empresas</a></li>
                    </ul>
            </li>
            
            <li class="nav-item dropdown botonnav">
            <a class="nav-link dropdown-toggle active" id="navbarDarkDropdownMenuLink" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                    Trabajo 
                </a>
                    <ul class="dropdown-menu dropdown-menu-dark" aaria-labelledby="navbarDarkDropdownMenuLink">
                        <li class="botonnav"><a class="dropdown-item" href="../scripts/vacante.php">Vacante</a></li>
                        <li><hr class="dropdown-divider"></li>
                        <li class="botonnav"><a class="dropdown-item" href="../scripts/contrato.php">Contrato</a></li>
                    </ul>
            </li>
            
            <li class="nav-item dropdown botonnav">
                    <a class="nav-link dropdown-toggle active" id="navbarDarkDropdownMenuLink" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                        informes 
                    </a>
                    <ul class="dropdown-menu dropdown-menu-dark" aaria-labelledby="navbarDarkDropdownMenuLink">
                        <li><center style="font-family:verdana;background-color:black">Informes Detallados</center></li>
                        <li class="botonnav" style="width:18em"><a class="dropdown-item" href="../servi/informe1.php" style="color:white;">&nbsp1) Informe Detalles de Contrato</a></li>
                        <li class="botonnav" style="width:18em"><a class="dropdown-item" href="../servi/informe2.php" style="color:white;">&nbsp2) Informe Solicitudes de Vacantes</a></li>
                        <li class="botonnav" style="width:18em"><a class="dropdown-item" href="../servi/informe3.php" style="color:white;">&nbsp3) Informe Actividad de Usuarios</a></li>
                        <li class="botonnav" style="width:18em"><a class="dropdown-item" href="../servi/informe4.php" style="color:white;">&nbsp4) Informe Actualización de Empleo</a></li>
                        <li><center style="font-family:verdana;background-color:black">Informes Sintetizados</center></li>
                        <li class="botonnav" style="width:18em"><a class="dropdown-item" href="../servi/informe5.php" style="color:white;">&nbsp5) Informe Uso del Software</a></li>
                        <li class="botonnav" style="width:18em"><a class="dropdown-item" href="../servi/informe6.php" style="color:white;">&nbsp6) Informe Transparencia Anual</a></li>
                        <li class="botonnav" style="width:18em"><a class="dropdown-item" href="../servi/informe7.php" style="color:white;">&nbsp7) Informe Demanda de Trabajo</a></li>
                        <li><center style="font-family:verdana;background-color:black">Informes Por Excepción</center></li>
                        <li class="botonnav" style="width:18em"><a class="dropdown-item" href="../servi/informe8.php" style="color:white;">&nbsp8) Informe Reporte Fallos Técnicos</a></li>
                        <li class="botonnav" style="width:18em"><a class="dropdown-item" href="../servi/informe9.php" style="color:white;">&nbsp9) Informe Sugerencia de Diseño</a></li>
                        </ul>
                </li>
            </ul>
        </div>

        <div ><php><a href="cerrarsesionpostulante.php"><div class="btn btn-dark">Cerrar Sesion</div></a></php></a></div>

    


      </div>
</nav>      
<a name=inicio></a>


<!-- Begin page content -->
<div class="d-flex w-100" style="height:120vh;">
      <div class="position-absolute text-center divp">
        <center><img class="w-100" src="../img/PNEH.png"><br></center>
        <h1>Panel de Control Postulante</h1>

         <!-- Contenido -->
<?php 
 if(isset($_SESSION["usuario"]))  
 {  
      echo '<h3>Bienvenido, '.$_SESSION["usuario"].'</h3>';  
        
 }  
 else  
 {  
      header("location:iniciarsesion.php");  
 }  
 ?>
             
      <!-- Fin Contenido --> 
      </div>
</div>
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
      </div>
      <a href="#inicio" style="position:relative;bottom:0em;right:0;width:50px;height:50px">
        <i class="bi bi-arrow-bar-up" style="color:white;width:50px;"></i>
      </a>
    </div>
    <div style="background-color:black; color: white; padding-left: 15px;">
        <a href="../scripts/falla.php" style="color:gray;"><i class="bi bi-bug"></i>
        Falla Tecnica
        </a>
        <a href="../servi/informes.php" style="color:gray;position:absolute; right:15px;"><i class="bi bi-flag"></i>
         Centro de Informes 
        </a>
        <br>
        <a href="../scripts/diseno.php" style="color:gray;"><i class="bi bi-layout-text-window-reverse"></i>
         Sugerir Diseño
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
