<?php
include_once("../../servi/conexion.php");
$con = conexion();


try {
$sql = "INSERT INTO postulante(NumeroIdentidad,Nombres,Apellidos,Genero,FechaNacimiento,Direccion,Telefono,CorreoElectronico,Estadop) 
VALUES(:iden, :nom, :ape, :gen, :fn, :dir, :tel, :mail, :ep)";    
$parametros = [
    "iden" => $_POST["identidad"], 
    "nom" => $_POST["nombre"], 
    "ape" => $_POST["apellido"], 
    "gen" => $_POST["genero"],
    "fn" => date('y-m-d', strtotime($_POST["nacimiento"])),
    "dir" => $_POST["dir"], 
    "tel" => $_POST["tel"],
    "mail" => $_POST["correo"],
    "ep" => $_POST["estado"]
];
$stm = $con->prepare($sql);
$stm->execute( $parametros );
$con = null;
header("location: ../registropostulante.php");
} catch (Exception $ex) {
    echo $ex.message;
}















?>