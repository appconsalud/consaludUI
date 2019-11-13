<?php

/* 
 * Pagina pirncipal de la app web
 

$titlePage = 'Inicio';
require_once 'templates/templateBasic.php';*/

require_once 'vendor/autoload.php';
require_once 'templates/frameworkUI/menus.php';
require_once 'templates/frameworkUI/functions.php';


$loader = new \Twig\Loader\FilesystemLoader('templates');
$twig = new \Twig\Environment($loader, [
    'cache' => 'compilation_cache',
]);
$cabecera = "conSalud - Consgresos Medicos";
$titulo = "Pagina principal";

$cargaMenuUsuario = $menuUsuario;

if(sessionAbierta()){
    $cargaMenuUsuario = $menuUsuario;
}else{
    $cargaMenuUsuario = null;
}



echo $twig->render('basic.html', [
    'titulo' => $titulo, 
    'cabecera' => $cabecera, 
    'menu' => $menuPpalSp, 
    'urlHome' => $urlHome,
    'userMenu' => $cargaMenuUsuario]);


?>