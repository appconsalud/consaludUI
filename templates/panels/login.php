<?php

/* 
 * Panel que contine el bloque con el login dentro del sitio
 * developed by gbarce
 */

?>

<div id="login">
    <form name="login" action="logicaUI/altaSession.php" autocomplete="on" id="loginForm" method="post">
        <div id="userDiv">
            <label id="userLabel"> Usuario o numero de movil </label>
            <input type="text" name="userTxt" value="" />
        </div>
        <div id="passDiv">
            <label id="passLabel"> Contrase&ntilde;a</label>
            <input type="password" name="passTxt" value="" />
        </div>
        <input type="submit" value="Entrar" name="entrarBt" />
        <div id="mensaje">
            <?php
                if(isset($mensaje)){
                    if($mensaje==1){
                        echo '<span class="error">Usuario o contrase&ntilde;a incorrectos</span>';
                    }
                }
            ?>            
        </div>
    </form>
</div>