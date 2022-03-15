<?php
include_once("../../servi/conexion.php");
$con = conexion();


try {
$sql = "INSERT INTO vacante(VacanteID,EmpresaID,FechaPublicacion,Estado,Puesto,Jornada,Descripcion,Lugar,Genero,Edad,GradoAcademico,Experiencia,Conocimientos,Idiomas,Responsabilidades,DisponibilidadViajar,DocumentosRequeridos) 
VALUES(:idvac, :idem, :fepub, :estad, :pues, :jorna, :descr, :lugar, :gener, :edad, :graca, :exper, :conoc, :idiom, :respon, :dispo, :docre)";    
$parametros = [
    "idvac" => $_POST["idvac"], 
    "idem" => $_POST["idem"], 
    "fepub" => date('y-m-d', strtotime($_POST["fepub"])), 
    "estad" => $_POST["estad"],
    "pues" => $_POST["pues"],
    "jorna" => $_POST["jorna"],
    "descr" => $_POST["descr"],
    "lugar" => $_POST["lugar"],
    "gener" => $_POST["gener"],
    "edad" => $_POST["edad"],
    "graca" => $_POST["graca"],
    "exper" => $_POST["exper"],
    "conoc" => $_POST["conoc"],
    "idiom" => $_POST["idiom"],
    "respon" => $_POST["respon"],
    "dispo" => $_POST["dispo"],
    "docre" => $_POST["docre"]
    
];
$stm = $con->prepare($sql);
$stm->execute( $parametros );
$con = null;
header("location: ../vacante.php");
} catch (Exception $ex) {
    echo $ex.message;
}















?>