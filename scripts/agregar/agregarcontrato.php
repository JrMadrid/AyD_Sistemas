<?php
include_once("../../servi/conexion.php");
$con = conexion();


try {
$sql = "INSERT INTO contrato(ContratoID,VacanteID,NumeroIdentidad,TipoContrato,FechaInicio,FechaVencimiento,Horario,Sueldo,TipoPago,DiasLaborales,DiasVacaciones,Departamento) 
VALUES(:conid, :vanid, :numid, :ticon, :inife, :finfe, :horar, :sueld, :pagti, :ladia, :vadia, :depar)";    
$parametros = [
    "conid" => $_POST["idcon"], 
    "vanid" => $_POST["idvan"], 
    "numid" => $_POST["idpos"], 
    "ticon" => $_POST["ticon"],
    "inife" => date('y-m-d', strtotime($_POST["feini"])), 
    "finfe" => date('y-m-d', strtotime($_POST["fefin"])),
    "horar" => $_POST["horar"],
    "sueld" => $_POST["sueld"],
    "pagti" => $_POST["tipag"],
    "ladia" => $_POST["diala"],
    "vadia" => $_POST["diava"],
    "depar" => $_POST["depar"]
];
$stm = $con->prepare($sql);
$stm->execute( $parametros );
$con = null;
header("location: ../contrato.php");
} catch (Exception $ex) {
    echo $ex.message;
}















?>