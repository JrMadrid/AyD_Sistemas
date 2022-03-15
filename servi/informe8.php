<?php
include_once("encabezadoservi.php");
?>
  <!-- Aqui empieza como tal el reporte -->
  <div class="d-flex w-100" style="height:150vh;">
    <div class="position-absolute text-center divp">
      <center><img class="w-100" src="../img/PNEH.png"><br></center>

      <!--MODIFICAR DESDE ACA!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!-->
      <table width=100% cellspacing=0 cellpadding=0 border=1> 
        <h1>Informe de Fallas Técnicas</h1> 
          <?php 
          //mandar a llamar el  archivo php con la funcion de conexion
           include_once("conexion.php");
           //crear un objeto conexion usando la funcion conexion 
           $con = conexion();
           //hacer la conexion a la base de datos por medio del objeto conexion
          //redactar la consulta sql
          try {
            $sql = "select fa.TipoProblema,fa.Seccion,fa.Descripcion from fallas fa where fa.IDFALLO != 0 order by TipoProblema";
            //ejecutar la consulta sql, el resultado viene viene en un objeto de tipo statement
            $stm = $con->query($sql); 
            //recorrer todos los registros que vienen en el statement
            //crear un objto para depositar cada fila, pero debemos arrancar desde la primer fila 
            $fila = $stm->fetch();
            //ahora movernos fila por fila hasta llegar al final del statement
            while($fila)
            {
              echo "<div style='background-color:gray;'><thead>";
                echo  "<tr><th width=50%>Tipo de Problema: <u>".$fila["TipoProblema"]."</u></th>"; 
                echo  "<th width=50%>Sección del Software: <u>".$fila["Seccion"]."</u></th></tr>";
                echo  "</thead></div>";
                echo  "<tbody>";
                echo "<tr>";
                echo "<td style='height:5em;' colspan=2>" .$fila["Descripcion"]         ."</td>";
                echo "</tr>";
                
                /* MODIFICAR HASTA ACA!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!! */   

                //pasar a la siguiente fila
                $fila = $stm->fetch();

              }
            } catch (Exception $ex) {
            echo $ex.message;
          }      
          
          ?> <!--FIN DE PHP-->
          <br><br>
         </tbody>
        </table>   
    </div>
  </div>
  <!-- Aqui acaba el reporte  -->   
  
 <?php
include_once("pieservi.php");
?>