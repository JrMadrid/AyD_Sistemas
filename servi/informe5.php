<?php
include_once("encabezadoservi.php");
?>
  <!-- Aqui empieza como tal el reporte -->
  <div class="d-flex w-100" style="height:120vh;">
      <div class="position-absolute text-center divp">
      <center><img class="w-100" src="../img/PNEH.png"><br></center>

        <!--MODIFICAR DESDE ACA!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!-->
        
        <h1>Uso del Software</h1> 
          <p>Tiempo promedio de interacción del usuario con el Portal Nacional de Empleos en Honduras, propiedad de la Secretaria de 
        Trabajo y Seguridad Social durante el mes de octubre del año 2021
          </p>
          <?php 
          //mandar a llamar el  archivo php con la funcion de conexion
           include_once("conexion.php");
          //crear un objeto conexion usando la funcion conexion 
           $con = conexion();
           //hacer la conexion a la base de datos por medio del objeto conexion
          //redactar la consulta sql
      
          try {
            $sql = "select pos.Nombres, pos.Apellidos\n"
    . "            from postulante pos\n"
    . "            where pos.NumeroIdentidad = '1234-1234-12345'";
            //ejecutar la consulta sql, el resultado viene viene en un objeto de tipo statement
            $stm = $con->query($sql); 
            //recorrer todos los registros que vienen en el statement
            //crear un objto para depositar cada fila, pero debemos arrancar desde la primer fila 
            $fila = $stm->fetch();
            //ahora movernos fila por fila hasta llegar al final del statement
            while($fila)
            {
              
              echo "<table style='border:1px solid black;'>";
              echo "<tr><th><strong> Nombre Usuario: ".$fila["Nombres"]." ".$fila["Apellidos"]."</strong></th></tr>";
              echo "<tr><th><strong>Mes:<u>Octubre</u></strong></th></tr>";      
              echo "</table>";
              echo "</br>";
              echo " <br> <img src='../img/gra1.png' alt='Grafico de Uso del Software'>";
             
              /* MODIFICAR HASTA ACA!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!! */   

              //pasar a la siguiente fila
              $fila = $stm->fetch();

            }
          } catch (Exception $ex) {
            echo $ex.message;
          }      
          
          ?> <!--FIN DE PHP-->
         
      </div>
    </div>
 <!-- Aqui acaba el reporte  -->   
 <?php
include_once("pieservi.php");
?>