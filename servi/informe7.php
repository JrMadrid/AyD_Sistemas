<?php
include_once("encabezadoservi.php");
?>

  <!-- Aqui empieza como tal el reporte -->
  <div class="d-flex w-100" style="height:120vh;">
      <div class="position-absolute text-center divp">
      <center><img class="w-100" src="../img/PNEH.png"><br></center>

        <!--MODIFICAR DESDE ACA!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!-->
        <table width=100% cellspacing=0 cellpadding=0  > 
        <h1>Informe Demanda de Trabajo</h1> 
        <thead style="border:2px solid black;">
        <tr><th> Lugar</th>
       
        <th> Demanda</th></tr>
        </thead>
          <?php 
          //mandar a llamar el  archivo php con la funcion de conexion
           include_once("conexion.php");
          //crear un objeto conexion usando la funcion conexion 
           $con = conexion();
           //hacer la conexion a la base de datos por medio del objeto conexion
          //redactar la consulta sql

          try {
            $sql = "select Lugar, Demanda from demandatrabajo";
            //ejecutar la consulta sql, el resultado viene viene en un objeto de tipo statement
            $stm = $con->query($sql); 
            //recorrer todos los registros que vienen en el statement
            //crear un objto para depositar cada fila, pero debemos arrancar desde la primer fila 
            $fila = $stm->fetch();
            //ahora movernos fila por fila hasta llegar al final del statement
            while($fila)
            {
                echo  "<tbody>";
                
                echo  "</tr>";
                echo  "<td>".$fila["Lugar"]."</td>";
                echo  "<td>".$fila["Demanda"]."</td>";
                
                echo  "</tr>";
              /* MODIFICAR HASTA ACA!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!! */   

              //pasar a la siguiente fila
              $fila = $stm->fetch();

            }
          } catch (Exception $ex) {
            echo $ex.message;
          }      
          
          ?> <!--FIN DE PHP-->
         </tbody>
        </table>
        <br><br>
        <img src="../img/gra7.png" alt="Grafico de Demanda de Trabajo">   
    </div>
    </div>
 <!-- Aqui acaba el reporte  -->   
 <?php
include_once("pieservi.php");
?>