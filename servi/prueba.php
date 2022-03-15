<?php
include_once("encabezadoservi.php");
?>
  <!-- Aqui empieza como tal el reporte -->
  <div class="d-flex w-100" style="height:120vh;">
      <div class="position-absolute text-center divp">
        <center><img class="w-70" src="../img/PNEH.png"><br></center>

        <!--MODIFICAR DESDE ACA!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!-->
        
        <h1>prueba</h1> 
          
          <?php 
          //mandar a llamar el  archivo php con la funcion de conexion
           include_once("conexion.php");
          //crear un objeto conexion usando la funcion conexion 
           $con = conexion();
           //hacer la conexion a la base de datos por medio del objeto conexion
          //redactar la consulta sql
      
          try {
            $sql = "select codigo from prueba where codigo = 1";
            //ejecutar la consulta sql, el resultado viene viene en un objeto de tipo statement
            $stm = $con->query($sql); 
            //recorrer todos los registros que vienen en el statement
            //crear un objto para depositar cada fila, pero debemos arrancar desde la primer fila 
            $fila = $stm->fetch();
            //ahora movernos fila por fila hasta llegar al final del statement
            while($fila)
            {
              
      
              echo "<br> Codigo: ".$fila["codigo"];
             
             
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
