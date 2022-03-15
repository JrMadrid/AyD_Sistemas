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
function calcularEdad()
{
  //obtener las cajas de la fecha y de la edad
  var nacimiento = document.getElementById("nacimiento");
  var edad = document.getElementById("edad");

  //convertir a Date el valor de lca caja fecha
  var fechaNacimiento = new Date( nacimiento.value );

  //sacar la diferencia en milisegundos entre la fecha de nacimiento y la fecha de hoy
  var diferencia_milisegundos = Date.now() - fechaNacimiento.getTime();
  var miedad = new Date(diferencia_milisegundos);

  //a la fecha que esta en miedad le vamos a restar el ultimo EPOCH
  miedad = miedad.getUTCFullYear() - 1970;

  if( miedad < 0 )    //evitar edades en negativo
    edad.value = "";
  else
    edad.value = miedad;
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

  var ape = document.getElementById("apellido");
  if( ape.value.trim().length == 0 )
  {
    alert("El apellido debe llenarse.");
    ape.focus();  //colocar el cursor de escritura en la caja de texto del nombre
    return false; //no procesa el envio del formulario
  }
  
  var dir = document.getElementById("dir");
  if( dir.value.trim().length =0  )
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

  var est = document.getElementById("estado");
  if( est.value.trim().length == 0 )
  {
    alert("El estado debe seleccionarse.");
    est.focus();  //colocar el cursor de escritura en la caja de texto del nombre
    return false; //no procesa el envio del formulario
  }
/* 
  var rtn = document.getElementById("rtn");
  if( rtn.value.trim().length = 0 )
  {
    alert("El RTN no puede ir vacio.");
    rtn.focus();  //colocar el cursor de escritura en la caja de texto del nombre
    return false; //no procesa el envio del formulario
  }
  var empresa = document.getElementById("empresa");
  if( empresa.value.trim().length = 0 )
  {
    alert("Escriba el Nombre de la Empresa.");
    empresa.focus();  //colocar el cursor de escritura en la caja de texto del nombre
    return false; //no procesa el envio del formulario
  }
  var puesto = document.getElementById("puesto");
  if( puesto.value.trim().length = 0 )
  {
    alert("El Puesto no puede ir vacio.");
    puesto.focus();  //colocar el cursor de escritura en la caja de texto del nombre
    return false; //no procesa el envio del formulario
  }
  var hor = document.getElementById("hor");
  if( hor.value.trim().length = 0 )
  {
    alert("El Horario no puede ir Vacio.");
    hor.focus();  //colocar el cursor de escritura en la caja de texto del nombre
    return false; //no procesa el envio del formulario
  }
  /*  Esto sobra pero se puede usar de ejemplo
  //la profesion no puede ir vacia
  var profesion = document.getElementById("prof");
  if( profesion.value.trim().length == 0 )
  {
    alert("Debe digitar la profesion");
    profesion.focus();
    return false; //no sigue
  }

  //debe seleccionar un Rubro
  var rubro = document.getElementById("rubro");
  if( rubro.value.trim().length == 0 )
  {
    alert("Debe seleccionar un rubro.");
    rubro.focus();
    return false; //no sigue
  }

  //salario no puede ir vacio, pero tampoco puede ser un valor negativo o cero
  var salario = document.getElementById("salario");
  if( salario.value.trim().length == 0 || Number( salario.value ) <= 0 )
  {
    alert("Salario no valido");
    salario.focus();
    return false;
  }
 */
  //telefono no puede ser vacio
 
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
