<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

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

$cabecera = "Nuevo usuario | conSalud - Consgresos Medicos";
$titulo = "Nuevo usuario";
$cargaMenuAdmin = $menuAdmin;
$cargarform = 'panels/formNewUser.html';

echo $twig->render('basic.html', [
        'titulo' => $titulo, 
        'cabecera' => $cabecera, 
        'menu' => $menuPpalSp, 
        'urlHome' => $urlHome,
        'panelMenuUsuario' => 'panels/menuUsuario.html',
        'panelMenuAdmin' => 'panels/menuAdmin.html',
        'menuUsuario' => $menuUsuario,
        'menuAdmin' => $cargaMenuAdmin,
        'cargarBody' => 'panels/formNewUser.html'
        //'login' => $cargarLogin,
     ])
?>