<?php require_once 'conf.php'; ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
    "http://www.w3.org/TR/xhtml1/DTD/xhtml1-Transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" >
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
                        <img src="<?php echo RUTA_PATH; ?>images/servicios/transporte.jpg" alt="Transporte" />
                        <h2>Transporte y montaje gratuito</h2>
                        <p>Te llevamos los muebles a casa y te los montamos gratis.</p>
                    </div>
                    <div class="divServicioPeq right">
                        <img src="<?php echo RUTA_PATH; ?>images/servicios/servicio.jpg" alt="Servicio" />
                        <h2>Postventa</h2>
                        <p>Nuestro servicio al cliente se lo daremos en todo momento, no solo durante el proceso de venta, sino tambi&eacute;n, despu&eacute;s de haberse concretado esta.</p>
                    </div>
                    <div class="divServicioPeq">
                        <img src="<?php echo RUTA_PATH; ?>images/servicios/financiacion.jpg" alt="Financiacion" />
                        <h2>Financiaci&oacute;n</h2> 
                        <p>Financiamos tus muebles en 60 meses sin interes.</p>
                    </div>
                    <div class="divServicioPeq right">
                        <img src="<?php echo RUTA_PATH; ?>images/servicios/atencion.jpg" alt="Atencion" />
                        <h2>Atenci&oacute;n personalizada</h2>
                        <p>Ponemos a tu servicio un profesional que atienda todas tus necesidades.</p>
                    </div>
                    <div class="divServicioPeq">
                        <img src="<?php echo RUTA_PATH; ?>images/servicios/presupuesto.jpg" alt="Presupuesto" />
                        <h2>Presupuesto sin compromiso</h2>
                        <p>Puedes solicitar un presupuesto sin ningun tipo de compromiso.</p>
                    </div>
                    <div class="divServicioPeq right">
                        <img src="<?php echo RUTA_PATH; ?>images/servicios/proyectos.jpg"  alt="Proyectos" />
                        <h2>Proyectos 3D</h2>
                        <p>Te hacemos un proyecto en 3D totalmente gratis, para hacerte una idea mejor de como quedar&iacute;a los muebles en tu espacio.</p>
                    </div>
                    <div class="divServicioPeq">
                        <img src="<?php echo RUTA_PATH; ?>images/servicios/medidas.jpg" alt="Medidas" />
                        <h2>Tomamos las medidas en casa</h2>
                        <p>Disponemos de un personal cualificado, los cuales van a su casa a tomarles todas las medidas necesarias.</p>
                    </div>
                </div>        
            </div>
        </div>
        <?php
        require_once './footer.php';
        ?>

    </body>
</html>
