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