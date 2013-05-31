<?php require_once 'conf.php'; ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
    "http://www.w3.org/TR/xhtml1/DTD/xhtml1-Transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" >
    <head>
        <?php meta("Grupo Masol"); ?>
        <script type="text/javascript" src="js/lightbox.js"></script>
        <link href="css/lightbox.css" rel="stylesheet" type="text/css" />
        <script type="text/javascript">
            $(function() {
                $('#gallery a').lightBox();
            });
        </script>
    </head>
    <body>

        <?php require_once 'head.php'; ?>
        <?php require_once 'menu.php'; ?>
        <div id="contenedor">
            <div id="contenidoPagina">
                <h1>Cocinas R&uacute;sticas</h1>
                <img src="<?php echo RUTA_PATH; ?>images/cocina/rusticas/grande/cabecerarustica.jpg" alt="Rusticas" />
                <div class="paginacion">
                    <?php
                    require_once './funciones/funciones_comunes.php';
                    $imagenes = recorrerImagenes("images/cocina/rusticas/");
                    if (empty($_GET["pag"])) {
                        $i = 0;
                        $pagina = 0;
                        $primeraImagen = 0;
                    } else {
                        $pagina = $_GET["pag"] * 10;
                        $primeraImagen = $pagina + $_GET["pag"];
                    }
                    for ($i = 0; $i <= ceil(count($imagenes) / 12); $i++) {
                        if (($i) == $pagina / 10)
                            echo "<b>";

                        echo "<a href='cocinasmodernas.php?pag=" . ($i) . "'>" . ($i + 1) . "</a> ";

                        if (($i) == $pagina / 10)
                            echo "</b>";
                    }
                    ?>
                </div>
                <div id="gallery">
                    <ul>
                        <?php
                        for ($i = $primeraImagen, $e = 0; ($e < 12) && count($imagenes) > $i; $i++, $e++) {
                            mostrarImagen($imagenes[$i]);
                        }
                        ?>
                    </ul>
                </div>
                <div class="paginacion">
                    <?php
                    for ($i = 0; $i <= ceil(count($imagenes) / 12); $i++) {
                        if (($i) == $pagina / 10)
                            echo "<b>";

                        echo "<a href='cocinasmodernas.php?pag=" . ($i) . "'>" . ($i + 1) . "</a> ";

                        if (($i) == $pagina / 10)
                            echo "</b>";
                    }
                    ?>
                </div>

            </div>
        </div>
        <?php
        require_once './footer.php';
        ?>

    </body>
</html>
