<?
//Funcion que devuelve un objeto de conexion de la base de datos
//vamos a usar PDOS
function conexion(){
  //hacer bloque de caza de errores
  try {
    //variables de los datos de conexion
    $cadenaConexion ="mysql:host=sql304.epizy.com;dbname=epiz_30481872_pnehdb";
    $usuario ="epiz_30481872"; //"USUARIOAQUI";
    $clave="hSx85mvUJv";//CLAVEAQUI";


    //hacer la conexion
    $conexion = new PDO(  $cadenaConexion,  $usuario,  $clave);
    //habilitar el control de errores de la db
    $conexion->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
    //retornar el objeto creado
    return $conexion;
    // en caso de error
  } catch (Exception $ex) {
    echo $ex.message;
    //retornamos un objeto nulo
    return null;
  }

}
?>
