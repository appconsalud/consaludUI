<?php

/* 
 * Pagina pirncipal de la app web
 

$titlePage = 'Inicio';
require_once 'templates/templateBasic.php';*/

require_once 'vendor/autoload.php';
require_once 'templates/frameworkUI/menus.php';
require_once 'templates/frameworkUI/functions.php';


$loader = new \Twig\Loader\FilesystemLoader('templates');
$loader1 = new \Twig\Loader\FilesystemLoader('templates/panels');
$twig = new \Twig\Environment($loader, [
   // 'cache' => 'compilation_cache',  DESCOMENTAR CUANDO ESTÉ EN PRODUCCIÓN PARA CREAR CACHE
], 
        $loader1, [
   //Cargar acá lo que se necesite para hacer caché*/
]);




$cabecera = "conSalud - Consgresos Medicos";
$titulo = "Pagina principal";

//$cargaMenuUsuario = true;

if(sessionAbierta()){
    $cargaMenuUsuario = $menuUsuario;
    $cargarLogin = false;
}else{
    $cargaMenuUsuario = null;
    $cargarLogin = 'panels/login.html';
}

echo $twig->render('basic.html', [
    'titulo' => $titulo, 
    'cabecera' => $cabecera, 
    'menu' => $menuPpalSp, 
    'urlHome' => $urlHome,
    'panelMenuUsuario' => 'panels/menuUsuario.html',
    'menuUsuario' => $menuUsuario,
    'login' => $cargarLogin,
    'menuUsuarioCargar' => true]);


?>