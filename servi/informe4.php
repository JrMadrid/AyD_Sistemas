<?php
include_once("encabezadoservi.php");
?>
  <!-- Aqui empieza como tal el reporte -->
  <div class="d-flex w-100" style="height:120vh;">
      <div class="position-absolute text-center divp">
      <center><img class="w-100" src="../img/PNEH.png"><br></center>

        <!--MODIFICAR DESDE ACA!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!-->
        
        <h1>Actualización Solicitud de Empleo</h1> 
          <?php 
          //mandar a llamar el  archivo php con la funcion de conexion
           include_once("conexion.php");
          //crear un objeto conexion usando la funcion conexion 
           $con = conexion();
           //hacer la conexion a la base de datos por medio del objeto conexion
          //redactar la consulta sql
      
          try {
            $sql = "select pos.Nombres, pos.Apellidos,em.Nombre\n"

    . "                from postulante pos\n"

    . "                inner join contrato con on pos.NumeroIdentidad = con.NumeroIdentidad\n"

    . "                inner join vacante va on con.VacanteID = va.VacanteID\n"

    . "                inner join empresa em on va.EmpresaID = em.EmpresaID\n"

    . "                where pos.NumeroIdentidad = '1234-1234-12345'";
            //ejecutar la consulta sql, el resultado viene viene en un objeto de tipo statement
            $stm = $con->query($sql); 
            //recorrer todos los registros que vienen en el statement
            //crear un objto para depositar cada fila, pero debemos arrancar desde la primer fila 
            $fila = $stm->fetch();
            //ahora movernos fila por fila hasta llegar al final del statement
            while($fila)
            {
              echo "<center>";
              echo "<div class='w-75' style='text-align:left;'>";
              echo "<h4><strong>Asunto</strong></h4>";
              echo "<div>";
              echo  "<p>Notificación de solicitud de puesto de trabajo de disponible otorgado por la empresa: <u><strong>".$fila["Nombre"]."</strong></u>
              Así, se hace de su conocimiento que la solicitud que realizo por una plaza disponible de trabajo se ha 
              respondido con una oportunidad de empleo.
              </p>";
              echo "<br>";
              echo "<h5>Estimado: <u>".$fila["Nombres"]." ".$fila["Apellidos"].".</u></h5>";
              echo "<p>La entrevista de trabajo se realizará el día 23-25 de Noviembre en el establecimiento con dirección en 
              Segundo anillo periférico, 20 calle sur este. Ubicado en Plaza San José, con horario de atención de 8:00am-10:00am</p>";
              echo "<h5>Atentamente: <u>Gerencia .</u></h5>";
              echo "</div>";
              echo "</center>";
              /* MODIFICAR HASTA ACA!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!! */   

              //pasar a la siguiente fila
              $fila = $stm->fetch();

            }
          } catch (Exception $ex) {
            echo $ex.message;
          }      
          
          ?> <!--FIN DE PHP-->
        <img src="../img/firma.png" alt="FIRMA" style="height:20vh;">
         <h5 style="opacity:0.7;">De todas las cosas que llevas puestas, tu actitud es la más importante.<h5>
      </div>
    </div>
 <!-- Aqui acaba el reporte  -->   
 <?php
include_once("pieservi.php");
?>