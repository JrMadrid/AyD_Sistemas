<?php
include_once("conexion.php");
$con = conexion();

try {
    $sql = "INSERT INTO empresausuario(EmpresaID,usuario,password) 
    VALUES(:emid, :nome, :contra)";    
    $parametros = [
        "emid" => $_POST["identidad"], 
        "nome" => $_POST["nombre"], 
        "contra" => $_POST["contra"]
       
    ];
    $stm = $con->prepare($sql);
    $stm->execute( $parametros );
    $con = null;
    header("location: http://devsjobsjr.epizy.com/scripts/registroempresa.php");
    } catch (Exception $ex) {
        echo $ex.message;
    }
    















?>