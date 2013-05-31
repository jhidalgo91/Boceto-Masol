<?php require_once 'conf.php'; ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
    "http://www.w3.org/TR/xhtml1/DTD/xhtml1-Transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" >
    <head>
        <?php meta("Cocinas .::Grupo Masol::."); ?>
    </head>
    <body>

        <?php require_once 'head.php'; ?>
        <?php require_once 'menu.php'; ?>
        <div id="contenedor">
            <div id="contenidoPagina">
                <h1>Ba&ntilde;os</h1>
                <div class="divBanos">
                    <div class="divBanosImg">
                        <img src="<?php echo RUTA_PATH; ?>images/design/principalbano.jpg" alt="PrincipalBanio" />
                    </div>
                    <div class="divBanosSecu">
                        <h2>Amplia gama en baños</h2>
                        <p>Mobiliario de l&iacute;neas sencillas, elegantes y modernas.</p>
                        <p>Nuevos conceptos y las &uacute;ltimas tendencias.</p>
                        <p>Le ofrecemos al cliente un amplio abanico de posibilidades creando un mueble muy personal.</p>
                        <p>Accesorios de ducha.</p>
                        <p>Accesorios de sanitarios.</p>
                        <p>Espejos de baño.</p>
                        <p>Grifos...</p> 
                        <img src="<?php echo RUTA_PATH; ?>images/design/secundariabano.jpg" alt="SecundarioBanio" />
                    </div>
                </div>        
            </div>
        </div>
        <?php
        require_once './footer.php';
        ?>

    </body>
</html>
