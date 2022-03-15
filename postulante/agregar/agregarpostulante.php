<?php
include_once("conexion.php");
$con = conexion();


try {
$sql = "INSERT INTO postulanteusuario(NumeroIdentidad,usuario,password) 
VALUES(:iden, :nom, :contra)";    
$parametros = [
    "iden" => $_POST["identidad"], 
    "nom" => $_POST["nombre"], 
    "contra" => $_POST["contra"]
    
];
$stm = $con->prepare($sql);
$stm->execute( $parametros );
$con = null;
header("location: http://devsjobsjr.epizy.com/scripts/registropostulante.php");
} catch (Exception $ex) {
    echo $ex.message;
}















?>