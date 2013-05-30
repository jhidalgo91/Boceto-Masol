<?php require_once 'conf.php'; ?>
<!--
To change this template, choose Tools | Templates
and open the template in the editor.
-->
<!DOCTYPE html>
<html>
    <head>
        <?php meta("Servicios .::Grupo Masol::."); ?>
    </head>
    <body>

        <?php require_once 'head.php'; ?>
        <?php require_once 'menu.php'; ?>
        <div id="contenedor">
            <div id="contenidoPagina">
                <h1>Servicios</h1>
                <div class="divServicio">
                    <div class="divServicioPeq">
                        <img src="<?php echo RUTA_PATH; ?>images/servicios/transporte.jpg" />
                        <h2>Transporte y montaje gratuitos</h2>
                        <p>Te llevamos los muebles a casa y te los montamos gratis. Est&aacute; demostrado que un mueble montado por un profesional dura m&aacute;s.</p>
                    </div>
                    <div class="divServicioPeq right">
                        <img src="<?php echo RUTA_PATH; ?>images/servicios/servicio.jpg" />
                        <h2>Servicio post-venta</h2>
                        <p>Nuestro servicio post-venta te dar&aacute; soluciones y responder&aacute; a todas tus dudas una vez ya hayas adquirido el producto.</p>
                    </div>
                    <div class="divServicioPeq">
                        <img src="<?php echo RUTA_PATH; ?>images/servicios/financiacion.jpg" />
                        <h2>Financiaci&oacute;n</h2>
                        <p>En <b>Grupo Masol</b> financiamos tus muebles en 60 meses sin interes.</p>
                    </div>
                    <div class="divServicioPeq right">
                        <img src="<?php echo RUTA_PATH; ?>images/servicios/atencion.jpg" />
                        <h2>Atenci&oacute;n personalizada</h2>
                        <p>Ponemos a tu disposici&oacute;n todo un equipo de expertos en muebles y decoraci&oacute;n que te atender&aacute; en todo momento.</p>
                    </div>
                    <div class="divServicioPeq">
                        <img src="<?php echo RUTA_PATH; ?>images/servicios/presupuesto.jpg" />
                        <h2>Presupuesto sin compromiso</h2>
                        <p>En <b>Grupo Masol</b> financiamos tus muebles hasta en 60 meses sin interes.</p>
                    </div>
                    <div class="divServicioPeq right">
                        <img src="<?php echo RUTA_PATH; ?>images/servicios/proyectos.jpg" />
                        <h2>Proyectos 3D</h2>
                        <p>Te realizamos un proyecto 3D completamente gratis para que veas c&oacute;mo quedan los muebles en tu espacio.</p>
                    </div>
                    <div class="divServicioPeq">
                        <img src="<?php echo RUTA_PATH; ?>images/servicios/medidas.jpg" />
                        <h2>Te tomamos las medidas en casa</h2>
                        <p>No te vamos a pedir que cojas el metro y el l&aacute;piz, nosotros lo hacemos por ti. Vamos a casa a tomarte las medidas.</p>
                    </div>
                </div>        
            </div>
        </div>
        <?php
        require_once './footer.php';
        ?>

    </body>
</html>
