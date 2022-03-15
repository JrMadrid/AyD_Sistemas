<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">  <!-- IMPORTANTEEEEEEEEEEE -->
    <link rel="shortcut icon" href="../img/HN.png">
    <style>
        th,td {
            padding: 0.4rem !important;
        }
        .dataTables_filter, .dataTables_info { display: none; }
    </style>
    <title>Devs&Jobs</title>
    <link rel="stylesheet" href="../bootstrap/icons-1.6.1/font/bootstrap-icons.css"> <!-- IMPORTANTEEEEEEEEEEE -->
    <link rel="stylesheet" href="../css/styles.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.3/css/bootstrap.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/1.11.3/css/dataTables.bootstrap4.min.css">
    <link rel="stylesheet" href="../bootstrap/css/bootstrap.css"> <!-- IMPORTANTEEEEEEEEEEE -->
    <link rel="stylesheet" href="../estilo.css"> <!-- IMPORTANTEEEEEEEEEEE -->

  </head>
  <body style="margin-top: 90px; background-color:#ABCDEF;">

<nav class="navbar navbar-expand-xl navbar-dark fixed-top pnavbar" > <!-- IMPORTANTEEEEEEEEEEE fixed-top -->
      <div class="container-fluid">
        <a class="navbar-brand" target="_blank" href="http://www.trabajo.gob.hn/"> <img src="../img/STmini.jpg" height=40> </a> <!-- IMPORTANTEEEEEEEEEEE -->
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarDark" aria-controls="navbarDark" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarDark">  <!-- IMPORTANTEEEEEEEEEEE show por hide-->
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
                        <li class="botonnav" style="width:18em"><a class="dropdown-item" href="informe1.php" style="color:white;">&nbsp1) Informe Detalles de Contrato</a></li>
                        <li class="botonnav" style="width:18em"><a class="dropdown-item" href="informe2.php" style="color:white;">&nbsp2) Informe Solicitudes de Vacantes</a></li>
                        <li class="botonnav" style="width:18em"><a class="dropdown-item" href="informe3.php" style="color:white;">&nbsp3) Informe Actividad de Usuarios</a></li>
                        <li class="botonnav" style="width:18em"><a class="dropdown-item" href="informe4.php" style="color:white;">&nbsp4) Informe Actualización de Empleo</a></li>
                        <li><center style="font-family:verdana;background-color:black">Informes Sintetizados</center></li>
                        <li class="botonnav" style="width:18em"><a class="dropdown-item" href="informe5.php" style="color:white;">&nbsp5) Informe Uso del Software</a></li>
                        <li class="botonnav" style="width:18em"><a class="dropdown-item" href="informe6.php" style="color:white;">&nbsp6) Informe Transparencia Anual</a></li>
                        <li class="botonnav" style="width:18em"><a class="dropdown-item" href="informe7.php" style="color:white;">&nbsp7) Informe Demanda de Trabajo</a></li>
                        <li><center style="font-family:verdana;background-color:black">Informes Por Excepción</center></li>
                        <li class="botonnav" style="width:18em"><a class="dropdown-item" href="informe8.php" style="color:white;">&nbsp8) Informe Reporte Fallos Técnicos</a></li>
                        <li class="botonnav" style="width:18em"><a class="dropdown-item" href="informe9.php" style="color:white;">&nbsp9) Informe Sugerencia de Diseño</a></li>
                        </ul>
                </li>
            </ul>
        </div>
        
        <div ><php><a href="../registro.php"><div class="btn btn-dark">Cerrar Sesion</div></a></php></a></div>
    </div>
</nav>      
<a name=inicio></a>