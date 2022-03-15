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

//funcion para calcular la edad cuando se selecciona la fecha de nacimiento

function validar()
{
  var ti = document.getElementById("tipo");
  if( ti.value.trim().length == 0 )
  {
    alert("Debe seleccionar el Tipo de Problema.");
    ti.focus();
    return false; //no procesa el envio del formulario
  }
  var se = document.getElementById("seccion");
  if( se.value.trim().length == 0 )
  {
    alert("Debe seleccionar la Seccion del Software.");
    se.focus();
    return false; //no procesa el envio del formulario
  }
  var de = document.getElementById("desc");
  if( de.value.trim().length == 0 )
  {
    alert("Debe describir el error del Software.");
    de.focus();
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
