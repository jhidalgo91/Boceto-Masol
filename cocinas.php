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
                <h1>Cocinas</h1>
                <div class="divCocinas">
                    <h2>Un lugar pensado para disfrutar cocinando con zonas bien diferenciadas.</h2>
                    <p>Masol, especialista en cocinas. Nuestro objetivo es diseñar cocinas de calidad, funcionales y duraderas.</p>
                    <p>Somos fabricantes, especialistas en cocinas, con más de 50 años de experiencia. Nuestro equipo lo forman los mejores profesionales del sector.</p>
                    <p>Como fabricantes ofrecemos una gran variedad de soluciones con materiales de primera calidad al mejor precio. </p>
                    <p>Masol Cocinas es una empresa dedicada al diseño y decoración de cocinas que ha desarrollado su propio estilo en el mercado de muebles de cocina, creando un producto de calidad y diseño funcional a la medida de un consumidor que es cada vez más exigente.</p>
                    <p>Nuestros especialistas le prepararán un proyecto de cocina acorde con sus deseos.  Déjese llevar por sus gustos y preferencias y escoja el estilo de cocina que prefiera: clásico, funcional o moderno. Todas nuestras cocinas cumplen con las mismas exigencias de calidad</p>
                    <p><b>En nuestra tienda puede conocer toda la gama de cocinas antes de comprar. Visite nuestra exposición de cocinas y siéntase como en casa.</b></p>
                    <h2>Encimeras</h2>
                    <p>La encimera es un elemento de la cocina de gran importancia, le asesoramos para averiguar cuál es el material más apropiado para usted.
Ofrecemos todas las encimeras disponibles en el mercado actual: Silestone, Compac, Levantina, Naturamia, Corian, Montelli, Compac Top, Eco by Cosentino además de todo tipo de granitos, encimeras de cristal, acero o madera maciza y por supuesto, todos los estilos y grosores de encimeras aglomeradas.</p>
                    <h2>Electrodomésticos</h2>
                    <p>Masol Cocinas pone a su disposición todas las marcas de electrodomésticos disponibles en el mercado español. Trabajamos con uno de los almacenes de electrodomésticos más grande de España, lo que nos permite conseguir los mejores precios. Ofrecemos un asesoramiento completo e imparcial sobre las máquinas y marcas que mejor cubren sus necesidades. Además, instalamos todos los electrodomésticos adquiridos en Masol Cocinas de forma gratuita y por supuesto, si tiene algún problema con ellos, solucionaremos todo sin ninguna molestia.</p>
                </div>        
                <div class="divCocinasFotos">
                    <a href="cocinasmodernas.php"><img src="<?php echo RUTA_PATH; ?>images/cocina/cocinasmodernas.jpg" /></a>
                    <a href="cocinasrusticas.php"><img src="<?php echo RUTA_PATH; ?>images/cocina/cocinasrusticas.jpg" /></a>
                </div>
            </div>
        </div>
        <?php
        require_once './footer.php';
        ?>

    </body>
</html>
