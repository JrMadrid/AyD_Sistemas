<?php
include_once("../../servi/conexion.php");
$con = conexion();


try {
$sql = "INSERT INTO diseno(Interfazintuitiva,Fluidez,Diseno,Colorimetria,Visualizacion,Descripcion) 
VALUES(:inin, :flui, :dise, :colo, :visu, :descr)";    
$parametros = [
    "inin" => $_POST["inin"], 
    "flui" => $_POST["flu"], 
    "dise" => $_POST["dis"], 
    "colo" => $_POST["color"],
    "visu" => $_POST["vis"],
    "descr" => $_POST["desc"]
];
$stm = $con->prepare($sql);
$stm->execute( $parametros );
$con = null;
header("location: ../diseno.php");
} catch (Exception $ex) {
    echo $ex.message;
}















?>