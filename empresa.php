<?php require_once 'conf.php'; ?>
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" >
    <head>
        <?php meta("Empresa .::Grupo Masol::."); ?>
    </head>
    <body>

        <?php require_once 'head.php'; ?>
        <?php require_once 'menu.php'; ?>
        <div id="contenedor">
            <div id="contenidoPagina">
                <h1>Empresa</h1>
                <div class="divEmpresa">
                    <img src="<?php echo RUTA_PATH; ?>images/design/empresa.jpg" alt="Empresa" />
                    <p>
                        <b>Grupo Masol<b/> es una empresa que nace para cubrir las necesidades del hogar. 
                        Contamos con una infraestructura de m&aacute;s de 8.000 metros cuadrados, distribuidos en nuestras 4 tiendas.
                    </p>
                    <p>
                        Con m&aacute;s de 50 años de experiencia, Grupo Masol est&aacute; formado
                        por un amplio equipo profesional que lidera los cambios de
                        tendencia buscando un equilibrio entre calidad, diseño y precio.
                        Nuestro equipo est&aacute; perfectamente actualizado en todas las tendencias
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
