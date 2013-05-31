<?php require_once 'conf.php'; ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
    "http://www.w3.org/TR/xhtml1/DTD/xhtml1-Transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" >
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
                    <div><img src="<?php echo RUTA_PATH; ?>images/design/decoracion.jpg" alt="Decoracion" /></div>
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
