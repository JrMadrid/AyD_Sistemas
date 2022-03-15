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
