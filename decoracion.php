<?php require_once 'conf.php'; ?>
<!--
To change this template, choose Tools | Templates
and open the template in the editor.
-->
<!DOCTYPE html>
<html>
    <head>
        <?php meta("Empresa .::Grupo Masol::."); ?>
    </head>
    <body>

        <?php require_once 'head.php'; ?>
        <?php require_once 'menu.php'; ?>
        <div id="contenedor">
            <div id="contenidoPagina">
                <h1>Servicio de decoración</h1>
                <div class="divDecoracion">
                    <div><img src="funciones/thumb/phpThumb.php?src=<?php echo RUTA_PATH; ?>images/design/empresa.jpg&h=375&w=960&zc=1&f=png" width="960" /></div>
                    <h2>
                        ¿Quiere decorar su casa o local?
                    </h2>
                    <p>
                        Masol pone a su disposición un equipo de decoradores para 
                        ayudarle a encontrar la solución más adecuada a su espacio. 
                        Pida más información sobre nuestro servicio o mándenos fotos 
                        del espacio que quiere decorar: Correo Masol /Teléfonos Masol. 
                        Nosotros nos ocupamos del resto: asesoramiento en decoración, 
                        atención personalizada, transporte.
                        Le asesoramos en la selección de mobiliario y complementos de diseño, en las medidas y 
                        acabados que más se adapten a sus necesidades.
                    </p>
                </div>        
            </div>
        </div>
        <?php
        require_once './footer.php';
        ?>

    </body>
</html>
