<?php

/* 
 * Aqui se establece toda la logica para la carga de sesiones dentro de la capa
 * de presentacion
 */
$user = $_POST['userTxt'];
$pass = $_POST['passTxt'];


//CAMBIAR POR LA VALIDACION EN LA BASE DE DATOS
if($user=='gbarce' && $pass == '1111'){

    session_start();
    $_SESSION['usuario'] = $user;
    
    $_COOKIE[session_name()];
    
    //Agrego y manejo las redirecciones de la url luego del login
    if(!isset($_COOKIE[session_name()])){
        if(strstr($url, "?")){
            header("Location: ".$url."&".session_name()."=".session_id()); //lee el cabezal que llega desde la url de la web, donde se guarda la session abierta y su id
        }else{
            header("Location: ".$url."?".session_name()."=".session_id());
        }
    }
}else{
    session_abort();
}
require_once '../redirect.php';

?>