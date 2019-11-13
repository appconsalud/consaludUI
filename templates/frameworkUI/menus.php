<?php

/* 
 * sitio con los parametros de menus del sitio
 */

//Declaración de menús
$menuPpalSp = array();
$menuUsuario = array();

$urlHome = "http://localhost/consalud";
//agrego uno a uno los elementos del menu principal. ACA HAY QUE CAMBIARLO POR DATOS QUE VENGAN DE LA BD
array_push($menuPpalSp, array('item' => 'Inicio', 'url' => $urlHome));
array_push($menuPpalSp, array('item' => 'Próximos congresos', 'url' => "#"));
array_push($menuPpalSp, array('item' => 'Congresos cercanos a mi', 'url' => "#"));
array_push($menuPpalSp, array('item' => 'Congresos por especialidad', 'url' => "#"));
array_push($menuPpalSp, array('item' => 'Comunicación', 'url' => "#"));
array_push($menuPpalSp, array('item' => 'Contacto', 'url' => "#"));

//agrego uno a uno los elementos del menu de usuario
array_push($menuUsuario, array('item' => 'Datos personales', 'url' => "#"));
array_push($menuUsuario, array('item' => 'Especialidades', 'url' => "#"));
array_push($menuUsuario, array('item' => 'Congresos', 'url' => "#"));
array_push($menuUsuario, array('item' => 'Mis pagos', 'url' => "#"));


?>