<?php
include_once("../../servi/conexion.php");
$con = conexion();


try {
$sql = "INSERT INTO fallas(TipoProblema,Seccion,Descripcion) 
VALUES(:tipr, :secc, :descr)";    
$parametros = [
    "tipr" => $_POST["tipo"], 
    "secc" => $_POST["seccion"], 
    "descr" => $_POST["desc"]
];
$stm = $con->prepare($sql);
$stm->execute( $parametros );
$con = null;
header("location: ../falla.php");
} catch (Exception $ex) {
    echo $ex.message;
}















?>