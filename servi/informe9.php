<?php
include_once("encabezadoservi.php");
?>

<body>
<div class="d-flex w-100" style="height:150vh;">
    <div class="position-absolute text-center divp">
      <center><img class="w-100" src="../img/PNEH.png"><br></center>  
    <div class="container" style="margin-top: 10px;padding: 5px">
    <table id="tablax" class="table table-striped table-bordered" style="width:100%">
        <thead>
            <th><h1>Informe de Sugerencia de Diseño</h1></th>
        </thead>
        <tbody>

                <?php 
          //mandar a llamar el  archivo php con la funcion de conexion
          include_once("conexion.php");
          //crear un objeto conexion usando la funcion conexion 
          $con = conexion();
          //hacer la conexion a la base de datos por medio del objeto conexion
          //redactar la consulta sql
          
          try {
              $sql = "select Interfazintuitiva, Fluidez, Diseno, Colorimetria, Visualizacion, Descripcion from diseno where IDDISENO != 0";
              //ejecutar la consulta sql, el resultado viene viene en un objeto de tipo statement
              $stm = $con->query($sql); 
              //recorrer todos los registros que vienen en el statement
              //crear un objto para depositar cada fila, pero debemos arrancar desde la primer fila 
              $fila = $stm->fetch();
              //ahora movernos fila por fila hasta llegar al final del statement
              while($fila)
              {
               echo "<tr>";
               echo "<td>";
                    echo "<table width=100% cellspacing=0 cellpadding=0 border=1 >"; 
                    echo "<thead>";
                    echo "<tr><th colspan=2>Diseño de Interfaz <br> Describa de forma detallada su opinión acerca de la plataforma.</th></tr>";
                    echo "</thead>";
                    echo "<tbody>";
                    echo "</tr><td width='30%'><strong>Interfaz Intuitiva: </strong></td><td>".$fila["Interfazintuitiva"]."</td></tr>";
                    echo "</tr><td width='30%'><strong>Fluidez: </strong></td><td>".$fila["Fluidez"]."</td></tr>";
                    echo "</tr><td width='30%'><strong>Diseño: </strong></td><td>".$fila["Diseno"]."</td></tr>";
                    echo "</tr><td width='30%'><strong>Colorimetria: </strong></td><td>".$fila["Colorimetria"]."</td></tr>";
                    echo "</tr><td width='30%'><strong>Visualización: </strong></td><td>".$fila["Visualizacion"]."</td></tr>";
                    echo "<tr><th colspan=2><strong>Describa que cambios realizar a mejora de la interacción con el programa</strong></th></tr>";
                    echo "<tr> <td style='height:5em;' colspan=2>" .$fila["Descripcion"]."</td>";
                    echo "</tr>";
                    echo "</tbody>";
                    echo "</table>"; 
               echo "</td>";     
               echo "</tr>";
              $fila = $stm->fetch();
            }
          } catch (Exception $ex) {
            echo $ex.message;
          }      
          ?>
        </tbody>
    </table>
</div></div></div>
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
        <a href="../scripts/falla.php " style="color:gray;"><i class="bi bi-bug"></i>
        Falla Tecnica
        </a>
        <a href="informes.php" style="color:gray;position:absolute; right:15px;"><i class="bi bi-flag"></i>
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
 <!-- JQUERY -->
 <script src="https://code.jquery.com/jquery-3.4.1.js"
        integrity="sha256-WpOohJOqMqqyKL9FccASB9O0KwACQJpFTUBLTYOVvVU=" crossorigin="anonymous">
        </script>
    <!-- DATATABLES -->
    <script src="https://cdn.datatables.net/1.11.3/js/jquery.dataTables.min.js">
    </script>
    <!-- BOOTSTRAP -->
    <script src="https://cdn.datatables.net/1.11.3/js/dataTables.bootstrap4.min.js">
    </script>
    <script>
        $(document).ready(function () {
            $('#tablax').DataTable({
                language: {
                    processing: "Tratamiento en curso...",
                    search: "Buscar&nbsp;:",
                    lengthMenu: "Agrupar de _MENU_ items",
                    info: "Mostrando del item _START_ al _END_ de un total de _TOTAL_ items",
                    infoEmpty: "No existen datos.",
                    infoFiltered: "(filtrado de _MAX_ elementos en total)",
                    infoPostFix: "",
                    loadingRecords: "Cargando...",
                    zeroRecords: "No se encontraron datos con tu busqueda",
                    emptyTable: "No hay datos disponibles en la tabla.",
                    paginate: {
                        first: "Primero",
                        previous: "Anterior",
                        next: "Siguiente",
                        last: "Ultimo"
                    },
                },
                scrollY: 405,
                lengthMenu: [ [1, 5, 15, -1], ["__01__","__05__", "__15__", "__All__"] ],
            });
        });
    </script>
    <script src="../bootstrap/js/bootstrap.min.js"></script> <!-- IMPORTANTEEEEEEEEEEE -->
    <script src="../logica.js"></script>
  </body>
</html>