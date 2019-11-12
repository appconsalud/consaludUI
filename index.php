<?php

/* 
 * Pagina pirncipal de la app web
 * developed by gbarce
 */


/*
require_once 'templates/templateBasic.php';*/

//titulo la página
$titlePage = 'Inicio';


//Instancio Twig
require_once "vendor/autoload.php";

$loader = new \Twig\Loader\FilesystemLoader('templates');
$twig = new \Twig\Environment($loader, [
    'cache' => '/compilation_cache',
]);

//llamo el template a usar de base
$template = $twig->load('templateBasic.php');


//hago el render
echo $twig->render($template, ['name' => "conSalud"]);

?>