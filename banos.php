<?php require_once 'conf.php'; ?>
<!--
To change this template, choose Tools | Templates
and open the template in the editor.
-->
<!DOCTYPE html>
<html>
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
                    <div>
                        <img src="funciones/thumb/phpThumb.php?src=<?php echo RUTA_PATH; ?>images/design/banio.jpg&h=375&w=960&zc=1&f=png" width="960" />
                    </div>
                    <h2>Amplia gama en baños</h2>
                    <p>Mobiliario de l&iacute;neas sencillas, elegantes y modernas.</p>
                    <p>Nuevos conceptos y las &uacute;ltimas tendencias.</p>
                    <p>Le ofrecemos al cliente un amplio abanico de posibilidades creando un mueble muy personal.</p>
                    <p>Accesorios de ducha.</p>
                    <p>Accesorios de sanitarios.</p>
                    <p>Espejos de baño.</p>
                    <p>Grifos...</p>
                </div>        
            </div>
        </div>
        <?php
        require_once './footer.php';
        ?>

    </body>
</html>
