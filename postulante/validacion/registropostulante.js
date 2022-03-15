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
  var id = document.getElementById("identidad");
  if( id.value.trim().length < 13 )
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

  var con = document.getElementById("contra");
  if( con.value.trim().length == 0 )
  {
    alert("La Contraseña debe llenarse.");
    con.focus();  //colocar el cursor de escritura en la caja de texto del nombre
    return false; //no procesa el envio del formulario
  }
  var ver = document.getElementById("veri");
  if( ver.value.trim().length == 0 )
  {
    alert("La Verificación de Contraseña debe llenarse.");
    ver.focus();  //colocar el cursor de escritura en la caja de texto del nombre
    return false; //no procesa el envio del formulario
  }
 var con1 = con.value;
 var con2 = ver.value;
  if(con1 != con2 ){ 
    alert("La verificación de Contraseña ha fallado Intente de Nuevo");
    return false;}
 
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
