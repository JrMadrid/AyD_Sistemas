//funcion para generar numeros al azar y ponerlos en las cajas del captcha
function generarAzar()
{
  //recuperar la cajas y ponerlas en variables
  var n1 = document.getElementById("n1");
  var n2 = document.getElementById("n2");

  //generar primer numero al azar (entre 10 y 99)
  n1.value = Math.round( Math.random()*(99-10)+10 );

  //generar segundo numero al azar (entre 10 y 99)
  n2.value = Math.round( Math.random()*(99-10)+10 );
}

//funcion para validar el formulario WEB
function validar()
{
  var idcon = document.getElementById("idcon");
  if( idcon.value.trim().length == 0 )
  {
    alert("La Identidad de Contrato debe llenarse.");
    idcon.focus();  //colocar el cursor de escritura en la caja de texto del nombre
    return false; //no procesa el envio del formulario
  }

  var idvan = document.getElementById("idvan");
  if( idvan.value.trim().length == 0 )
  {
    alert("La Identidad de Vacante debe llenarse.");
    idvan.focus();  //colocar el cursor de escritura en la caja de texto del nombre
    return false; //no procesa el envio del formulario
  }
  
  var idpos = document.getElementById("idpos");
  if( idpos.value.trim().length == 0 )
  {
    alert("La Identidad del Postulante debe llenarse.");
    idpos.focus();  //colocar el cursor de escritura en la caja de texto del nombre
    return false; //no procesa el envio del formulario
  }

  var ticon = document.getElementById("ticon");
  if( ticon.value.trim().length == 0 )
  {
    alert("El tipo de contrato no puede ir vacio.");
    ticon.focus();
    return false; //no sigue
  }

  var feiniv = document.getElementById("feini");
  var fefinv = document.getElementById("fefin");
  //convertir a Date el valor de lca caja fecha
  var fechainicio = new Date( feiniv.value );
  var fechafin = new Date( fefinv.value );
  
  var diferencia = fechafin.getTime() - fechainicio.getTime();
    if( diferencia <= 0 )    //evitar edades en negativo
  {alert("Las fechas no tienen sentido");
  document.getElementById("fefin").value = null;
  return false;
  }
  else
  document.getElementById("fefin").value = fechafin;

  var horar = document.getElementById("horar");
  if( horar.value.trim().length == 0 )
  {
    alert("El horarario debe llenarse.");
    horar.focus();  //colocar el cursor de escritura en la caja de texto del nombre
    return false; //no procesa el envio del formulario
  }

  var sueld = document.getElementById("sueld");
  if( sueld.value.trim().length == 0 )
  {
    alert("El sueldo debe llenarse.");
    sueld.focus();  //colocar el cursor de escritura en la caja de texto del nombre
    return false; //no procesa el envio del formulario
  }

  var tipag = document.getElementById("tipag");
  if( tipag.value.trim().length == 0 )
  {
    alert("El tipo de pago debe llenarse.");
    tipag.focus();  //colocar el cursor de escritura en la caja de texto del nombre
    return false; //no procesa el envio del formulario
  }

  var diala = document.getElementById("diala");
  if( diala.value.trim().length == 0 )
  {
    alert("Los dias laborales deben llenarse.");
    diala.focus();  //colocar el cursor de escritura en la caja de texto del nombre
    return false; //no procesa el envio del formulario
  }

  var diava = document.getElementById("diava");
  if( diava.value.trim().length == 0 )
  {
    alert("Los dias vacacionales deben llenarse.");
    diava.focus();  //colocar el cursor de escritura en la caja de texto del nombre
    return false; //no procesa el envio del formulario
  }

var labo = Number(document.getElementById("diala").value);
var vaca = Number(document.getElementById("diava").value);
var sumad = labo + vaca;
if(labo<=0 || labo > 7 || vaca<=0 || vaca > 7 || sumad>7 || sumad<7){
    alert("Los dias deben ser congruentes con los dias de la semana");
    diala.focus();
    return false; 
}

  var depar = document.getElementById("depar");
  if( depar.value.trim().length == 0 )
  {
    alert("El Departamento debe escribirse.");
    depar.focus();  //colocar el cursor de escritura en la caja de texto del nombre
    return false; //no procesa el envio del formulario
  }

  //verificar que el captcha es correcto
  var n1 = document.getElementById("n1");
  var n2 = document.getElementById("n2");
  //sumar los valores de ambas cajas
  var suma = Number(n1.value)+Number(n2.value);
  //comparar con lo que digito el usuario
  if( suma != Number(document.getElementById("suma").value) )
  {
    alert("Captcha incorrecto, la suma no es correcta.");
    return false;
  }

  alert("Sus datos han sido guardados correctamente");
  return true;  //si llego hasta aqui todo se proceso bien
}
