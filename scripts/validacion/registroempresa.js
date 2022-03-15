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


//funcion para validar el formulario WEB
function validar()
{
  var id = document.getElementById("identidad");
  if( id.value.trim().length == 0 )
  {
    alert("El numero de indentidad esta incompleto.");
    id.focus();
    return false; //no procesa el envio del formulario
  }
  //validar las cajas de texto
  //el nombre completo debe tener al menos 15 caracteres
  //recuperar la caja de texto cuyo id es nombre

  var nom = document.getElementById("nombre");
  if( nom.value.trim().length == 0 )
  {
    alert("El nombre debe llenarse.");
    nom.focus();  //colocar el cursor de escritura en la caja de texto del nombre
    return false; //no procesa el envio del formulario
  }
  var rtn = document.getElementById("rtn");
  if( rtn.value.trim().length == 0 || rtn.value.trim().length<14 )
  {
    alert("El RTN debe llenarse.");
    rtn.focus();  //colocar el cursor de escritura en la caja de texto del nombre
    return false; //no procesa el envio del formulario
  }
  
  var dir = document.getElementById("dir");
  if( dir.value.trim().length ==0  )
  {
    alert("Deber escribir la dirección");
    dir.focus();  //colocar el cursor de escritura en la caja de texto del nombre
    return false; //no procesa el envio del formulario
  }

  var telefono = document.getElementById("tel");
  if( telefono.value.trim().length == 0 )
  {
    alert("Telefono no puede ir vacio.");
    telefono.focus();
    return false; //no sigue
  }
   
  var cor = document.getElementById("correo");
  if( cor.value.trim().length == 0 )
  {
    alert("El correo debe llenarse.");
    cor.focus();  //colocar el cursor de escritura en la caja de texto del nombre
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
