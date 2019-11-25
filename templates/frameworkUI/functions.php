<?php

/* 
 * Repositorio de funciones necesarias para el trabajo con los templates de la UI
 */

/**
 * funcion que se ejecuta al comienzo de la ejecucion de la pagina
 */
function arranque(){
    
}

/**
 * Da de alta una session en el navegador.
 * @param type $usuario nombre de usuario que da de alta la session
 */
function altaSession($usuario){
    //QUTTAR
    if($usuario == 'gbarce'){
        session_start();
        $_SESSION[$usuario];
    }else{
        
    }
}

/** 
 * Retorna true sii hay una sesion abierta en el sistema
 */
function sessionAbierta() {
    if(session_status()== 2){
        return TRUE;
    }else{
    	return FALSE;
    }
    
}

?>