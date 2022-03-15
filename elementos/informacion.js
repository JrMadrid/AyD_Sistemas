function informacion(){
    var histo = document.getElementById("historia");
    var mivi = document.getElementById("misvis");
    var del = document.getElementById("borrar");
    var Historia = "El 5 de Abril de 1930 a través del Decreto No. 200, se creó la Secretaria de Trabajo como una dependencia indiferente adscrita a la entonces Secretaria de Fomento y Agricultura. Es hasta el 19 de Diciembre de 1951, con el Decreto Legislativo No. 14, que se desliga de la Secretaria de Fomento y Agricultura y pasa a llamarse Secretaria de Fomento y Trabajo, atribuyéndosele la Función principal de atender los asuntos relativos al trabajo y la previsión Social.<br><br>";
    var miYvi = " <strong style='text-align:center'>Misión</strong><br><p>“Somos una institución que desarrolla procesos de mejora continua; que rectora las políticas y estrategias del mercado laboral, los sistemas de previsión y seguridad social, que promueve una cultura de diálogo y concertación en las relaciones obrero-patronales, contribuyendo a la paz y desarrollo nacional.”</p><br><strong style='text-align:center'>Visión</strong><br><p>“Para el 2038 seremos una institución posicionada que goza de credibilidad y respeto por parte de patronos y trabajadores, que garantiza: el empleo decente, una adecuada formación profesional, las buenas relaciones entre los sectores, la protección social en materia de previsión y seguridad social, para el logro del desarrollo del ser humano.”</p>";
    var dele = "";
    if(histo.checked == true){
        document.getElementById("info").innerHTML=Historia;
    }
    if(mivi.checked == true){
        document.getElementById("info").innerHTML=miYvi;
    }
    if(borrar.checked == true){
        document.getElementById("info").innerHTML=dele;
    }
    }