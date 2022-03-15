<?php  
 session_start();  
include("../servi/conexion.php");
 try  
 {   
    $connect = conexion();
      if(isset($_POST["login"]))  
      {  
           if(empty($_POST["usuario"]) || empty($_POST["password"]))  
           {  
                $message = '<label>Todos los campos son requeridos</label>';  
           }  
           else  
           {  
                $query = "SELECT * FROM postulanteusuario WHERE usuario = :usuario AND password = :password";  
                $statement = $connect->prepare($query);  
                $statement->execute(  
                     array(  
                          'usuario'     =>     $_POST["usuario"],  
                          'password'     =>     $_POST["password"]  
                     )  
                );  
                $count = $statement->rowCount();  
                if($count > 0)  
                {  
                     $_SESSION["usuario"] = $_POST["usuario"];  
                  
                     header("location:panelpostulante.php");  
                }  
                else  
                {  
                     $message = '<label>Usuario o contraseña incorrectos</label>';  
                }  
           }  
      }  
 }  
 catch(PDOException $error)  
 {  
      $message = $error->getMessage();  
 }  
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
            <li class="botonnav" ><a class="dropdown-item" href="registropostulante.php">Postulante</a></li>
            <li class="botonnav" ><hr class="dropdown-divider"></li>
            <li class="botonnav" ><a class="dropdown-item" href="../empresa/registroempresa.php">Empresa</a></li>
          </ul>
        </div>

        <div class="btn-group botonnav">
          <button type="button" class="btn dropdown-toggle-split botonnav binicio" data-bs-toggle="dropdown" aria-expanded="false"><i class="bi bi-person-circle "></i>&nbspIniciar Sesión&nbsp
            <span class="visually-hidden">Toggle Dropdown</span>
          </button>
          <ul class="dropdown-menu dropdown-menu-dark">
            <li class="botonnav" ><a class="dropdown-item" href="iniciarsesionpostulante.php">Postulante</a></li>
            <li class="botonnav" ><hr class="dropdown-divider"></li>
            <li class="botonnav" ><a class="dropdown-item" href="../empresa/iniciarsesionempresa.php">Empresa</a></li>
          </ul>
        </div>

        </div>
</nav>      
<a name=inicio></a>


<!-- Begin page content -->

<div class="d-flex w-100" style="height:100vh;">
      <div class="position-absolute text-center divp">
        <center><img class="w-100" src="../img/PNEH.png"><br></center>
        <h1>Iniciar Sesion Postulante</h1>

              <!-- Contenido -->
       
              <br>  
                <?php  
                if(isset($message))  
                {  
                     echo '<label class="text-danger">'.$message.'</label>';  
                }  
                ?>  
             
                <form method="post">  
                <div class="form-group">
                <label for="Usuario">Usuario</label>
               <center><input class="w-60" type="text" name="usuario" class="form-control" placeholder="Ingrese usuario" style=" padding: 5px;"/>  </center> 
				</div>
  
                     <div class="form-group">
                    <label for="Contraseña">Contraseña</label>
                <center><input class="w-60" type="password" name="password" class="form-control" placeholder="Ingrese Contraseña" style=" padding: 5px;" />  </center>    
				</div>
                      
                     <br />  
                     <input type="submit" name="login" class="btn btn-primary" value="Iniciar Sesion" />  
                     <br>
                </form>  
            
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
