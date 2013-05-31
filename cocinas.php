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
                <h1>Cocinas</h1>
                <div class="divCocinasFotos">
                    <a href="cocinasmodernas.php"><img src="<?php echo RUTA_PATH; ?>images/cocina/contemporaneasreposo.jpg" onmouseout="javascript:this.src='<?php echo RUTA_PATH; ?>images/cocina/contemporaneasreposo.jpg'" onmouseover="javascript:this.src='<?php echo RUTA_PATH; ?>images/cocina/contemporaneasactivo.jpg'" alt="Contemporaneo" /></a>
                    <a href="cocinasrusticas.php"><img src="<?php echo RUTA_PATH; ?>images/cocina/rusticasreposo.jpg" onmouseout="javascript:this.src='<?php echo RUTA_PATH; ?>images/cocina/rusticasreposo.jpg'" onmouseover="javascript:this.src='<?php echo RUTA_PATH; ?>images/cocina/rusticasactivo.jpg'" alt="Rusticas"/></a>
                </div>
                <div class="divCocinas">
                  <p>Somos <b>fabricantes</b>, especialistas en cocinas, con más de <b>50 años</b> de experiencia.</p>
                  <p>Nuestro objetivo es diseñar cocinas de calidad funcionales y duraderas.</p>
                  <p>Nuestro equipo lo forman los mejores profesionales del sector.</p>
                  <p>Ofrecemos una gran variedad de soluciones con materiales de primera calidad al <b>mejor precio</b>.</p>
                  <p>Nuestros especialistas le prepararán un proyecto de cocina acorde con sus deseos.</p>
                  <p>En nuestra tienda puede conocer toda la gama de cocinas antes de realizar su compra.</p>
                  <p> Ofrecemos todas las encimeras disponibles actualmente en el mercado, como: cuarzo, porcelanico, piedra natural, madera maciza, laminadas, sintéticas...</p>
                    <h2>Electrodom&eacute;sticos</h2>
                    <p><b>Masol Cocinas</b> pone a su disposici&oacute;n todas las marcas de electrodom&eacute;sticos existentes en el mercado. Trabajamos con uno de los almacenes de electrodom&eacute;sticos m&aacute;s grande. Al formar parte del <b>Grupo Milar</b> podemos ofrecer precios muy competitivos.</p>
                    <p>Ofrecemos un asesoramiento completo e imparcial sobre las m&aacute;quinas y marcas que mejor cubren sus necesidades. Adem&aacute;s, instalamos todos los electrodom&eacute;sticos adquiridos en <b>Masol Cocinas</b> de forma gratuita y por supuesto, si tiene alg&uacute;n problema con ellos, solucionaremos todo sin ninguna molestia.</p>
                </div>        
            </div>
        </div>
        <?php
        require_once './footer.php';
        ?>

    </body>
</html>
