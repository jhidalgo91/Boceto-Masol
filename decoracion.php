<?php require_once 'conf.php'; ?>
<!--
To change this template, choose Tools | Templates
and open the template in the editor.
-->
<!DOCTYPE html>
<html>
    <head>
        <?php meta("Servicio de decoraci&oacute;n .::Grupo Masol::."); ?>
    </head>
    <body>

        <?php require_once 'head.php'; ?>
        <?php require_once 'menu.php'; ?>
        <div id="contenedor">
            <div id="contenidoPagina">
                <h1>Servicio de decoraci&oacute;n</h1>
                <div class="divDecoracion">
                    <div><img src="funciones/thumb/phpThumb.php?src=<?php echo RUTA_PATH; ?>images/design/empresa.jpg&h=375&w=960&zc=1&f=png" width="960" /></div>
                    <h2>
                        ¿Quiere decorar su casa o local?
                    </h2>
                    <p>
                        Masol pone a su disposici&oacute;n un equipo de decoradores para 
                        ayudarle a encontrar la soluci&oacute;n m&aacute;s adecuada a su espacio. 
                        Pida m&aacute;s informaci&oacute;n sobre nuestro servicio o m&aacute;ndenos fotos 
                        del espacio que quiere decorar: Correo Masol /Tel&eacute;fonos Masol. 
                        Nosotros nos ocupamos del resto: asesoramiento en decoraci&oacute;n, 
                        atenci&oacute;n personalizada, transporte.
                        Le asesoramos en la selecci&oacute;n de mobiliario y complementos de diseño, en las medidas y 
                        acabados que m&aacute;s se adapten a sus necesidades.
                    </p>
                </div>        
            </div>
        </div>
        <?php
        require_once './footer.php';
        ?>

    </body>
</html>
