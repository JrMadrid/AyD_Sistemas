<?php
include_once("encabezadoservi.php");
?>

  
  <!-- Aqui empieza como tal el reporte -->
  <div class="d-flex w-100" style="height:120vh;">
      <div class="position-absolute text-center divp">
        <center><img class="w-100" src="../img/PNEH.png"><br></center>

        <!--MODIFICAR DESDE ACA!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!-->
        
        <h1>Informe de Detalles de Contrato</h1> 
          <?php 
          //mandar a llamar el  archivo php con la funcion de conexion
           include_once("conexion.php");
          //crear un objeto conexion usando la funcion conexion 
           $con = conexion();
           //hacer la conexion a la base de datos por medio del objeto conexion
          //redactar la consulta sql
      
          try {
            $sql = "select pos.NumeroIdentidad,pos.Nombres, pos.Apellidos,pos.Telefono,pos.CorreoElectronico,\n"
    . "                                em.RTN,em.Nombre,va.Puesto,con.Horario\n"
    . "            from postulante pos\n"
    . "            inner join contrato con on pos.NumeroIdentidad = con.NumeroIdentidad\n"
    . "            inner join vacante va on con.VacanteID = va.VacanteID\n"
    . "            inner join empresa em on va.EmpresaID = em.EmpresaID\n"
    . "            where pos.NumeroIdentidad = '1234-1234-12345'";
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
              echo "<h4><strong>Datos del Empleado</strong></h4>";
              echo "<div><h5> Numero de identidad: ".$fila["NumeroIdentidad"]."</h5></div>"; 
              echo "<div><h5> Nombre Completo: ".$fila["Nombres"]." ".$fila["Apellidos"]."</h5></div>";         
              echo "<div><h5> Teléfono: ".$fila["Telefono"]."</h5></div>";          
              echo "<div><h5> Correo Electronico: ".$fila["CorreoElectronico"]."</h5></div>"; 
              echo "</br>";
              echo "<h4><strong>Datos de la Empresa</strong></h4>";
              echo "<div><h5> RTN: ".$fila["RTN"]."</h5></div>";
              echo "<div><h5> Nombre: ".$fila["Nombre"]."</h5></div>";  
              echo "<div><h5> Puesto Laboral: ".$fila["Puesto"]."</h5></div>";  
              echo "<div><h5> Horario de Trabajo: ".$fila["Horario"]."</h5></div>"; 
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
      </div>
    </div>
 <!-- Aqui acaba el reporte  -->   


 <?php
include_once("pieservi.php");
?>