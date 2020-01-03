/* 
 * Contiene funciones en JS para el uso de la aplicacion
 */

/**
 * Muestra un mensaje en el lugar que se indique, con el nivel de criticidad inticada
 * @param {type} mensaje mensaje a mostrar
 * @param {type} lugar etiqueta donde se mostrara
 * @param {type} tipo tipo e mensaje a mostrar (ERROR, ALERT, OK)
 * @returns {undefined}
 */
function mostrarMensaje(mensaje, lugar, tipo){
    switch (tipo){
        case 'ERROR': $(lugar).css('.errorLogin'); break;
        case 'ALERT': $(lugar).css('.alertLogin'); break;
        case 'OK': $(lugar).css('.okLogin'); break;
    }
    $(lugar).append(mensaje);
}

/*
 * Agrega dinámicamente campos del tipo text a un formularios
 * @param {text} nombreBase, es el id basico para crear nuevos campos dinamicamente, se invoca con +1 a lo que tiene originalmente
 * @param {text} idCampo, es el id del tipo de datos que se agregará, ejemplo especialidades, redes sociales, etc. 
 */
function addTextForm(nombreBase, idCampo){
    $("#moreSpeciality").remove();
    var codeTextType = "<label for="+nombreBase+"><input type='text' id='"+nombreBase+"' name='"+nombreBase+"' class='formText'>";
    var especialidadesId = aumentoEspecialidades(nombreBase);
    var OnClickButton = 'onclick="addTextForm(\''+especialidadesId;
        OnClickButton += '\', \'#especialidades\')\"';
    codeTextType += "<button type='button' id='moreSpeciality' class='moreButton' "+OnClickButton+" />";
    $(idCampo).append(codeTextType);
}

/**
 * Retorna el valor de especialidades, para incluir en un id con un valor más
 * @param {string} esp 
 * @returns {string}
 */
function aumentoEspecialidades(esp){
    var temp = esp.substring(14,16);
    esp = esp.substring(0, 14);
    temp ++;
    if(temp <10){
        esp += "0";
    }
    return esp+temp;
}