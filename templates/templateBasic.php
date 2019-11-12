<?php
/**
 * Cargo variables para el template
 */
include 'frameworkUI/functions.php';
include 'frameworkUI/parametros.php';

if(isset($_GET)){
    
    $mensaje = $_GET['codMen'];
    
    
    //solo para debug 
    echo $mensaje;
}

/* 
 * Ver si es necesario convertir la direccion de inicio o concatenarla con algo aca
 
$inicio = 
*/

?>

<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, user-scalable=no">
        <script src="templates/js/angular.min.js"></script>
        <script src="templates/js/jquery-3.3.1.min.js"></script>
        <script src="templates/js/functionsJs.js"></script>
        <!--script src="templates/js/menu.js"></script-->
        
        <link href="templates/css/style.css" rel="stylesheet" type="text/css" media="all">
        <!--link href="templates/css/menu.css" rel="stylesheet" type="text/css" media="all"-->
        
        <title><?php echo $titlePage ?> - conSalud</title>
        
    </head>
    <body>
        <header id="header">
            <div id="logo">
                <a href="<?php echo $inicio?>"><img src="templates/images/logo.png" alt="Logo de conSalud"></a>
            </div>
            <div id="menu">
                <?php if(sessionAbierta()) 
                    require_once 'panels/menu.php';
                ?>
            </div>
        </header>
        <div id="body"> 
            <div id="leftPanel">
                
            </div>
            <div id="rightPanel">
                
            </div>
            
            
            <?php if(!sessionAbierta()){
                    require_once 'panels/login.php';
            }
                  if(isset($mensaje) && $mensaje==2)
                    require_once 'panels/login.php';
            ?>
        </div>
        <footer>
            
        </footer>
    </body>
    
</html>