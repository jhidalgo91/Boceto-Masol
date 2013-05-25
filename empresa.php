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
                <h1>Empresa</h1>
                <div class="divBanos">
                    <div><img src="funciones/thumb/phpThumb.php?src=<?php echo RUTA_PATH; ?>images/design/empresa.jpg&h=375&w=960&zc=1&f=png" width="960" /></div>
                    <p>
                        Grupo Masol es una empresa que nace para cubrir las necesidades del hogar. 
                        Contamos con una infraestructura de más de 8.000 metros cuadrados, distribuidos en nuestras 4 tiendas.
                    </p>
                    <p>
                        Con más de 50 años de experiencia, Grupo Masol está formado
                        por un amplio equipo profesional que lidera los cambios de
                        tendencia buscando un equilibrio entre calidad, diseño y precio.
                        Nuestro equipo está perfectamente actualizado en todas las tendencias
                        de materiales y diseño, asistiendo a todas las ferias nacionales 
                        e internacionales de equipamiento para el hogar, proporcionando 
                        a nuestras tiendas un producto actual y duradero.
                    </p>
                </div>        
            </div>
        </div>
        <?php
        require_once './footer.php';
        ?>

    </body>
</html>
