<?php
define("RUTA_PATH", "/boceto/", true);

function meta($titulo){
    ?>
       <title><?php echo $titulo; ?></title>
        <link href="<?php echo RUTA_PATH; ?>css/style.css" rel="stylesheet" type="text/css" />
        <!--[if IE]><link href="<?php echo RUTA_PATH; ?>css/style_IE.css" rel="stylesheet" type="text/css" /><![ENDIF]-->
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <!--Iniciotransaciones-->
        <script type="text/javascript"
        src="http://ajax.googleapis.com/ajax/libs/jquery/1.3.2/jquery.min.js"></script>
        <!--Fin transaciones-->
<?php
}

?>
