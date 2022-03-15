<?php
include_once("../../servi/conexion.php");
$con = conexion();

try {
    $sql = "INSERT INTO empresa(EmpresaID,Nombre,RTN,Direccion,Telefono,CorreoElectronico) 
    VALUES(:emid, :nome, :rtne, :dire, :tele, :mail)";    
    $parametros = [
        "emid" => $_POST["identidad"], 
        "nome" => $_POST["nombre"], 
        "rtne" => $_POST["rtn"], 
        "dire" => $_POST["dir"],
        "tele" => $_POST["tel"],
        "mail" => $_POST["correo"],
    ];
    $stm = $con->prepare($sql);
    $stm->execute( $parametros );
    $con = null;
    header("location: ../registroempresa.php");
    } catch (Exception $ex) {
        echo $ex.message;
    }
    















?>