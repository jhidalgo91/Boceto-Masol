<?php require_once 'conf.php'; ?>
<!--
To change this template, choose Tools | Templates
and open the template in the editor.
-->
<!DOCTYPE html>
<html>
    <head>
        <?php meta("Lista de Bodas .::Grupo Masol::."); ?>
    </style>

</head>
<body>

    <?php require_once 'head.php'; ?>
    <?php require_once 'menu.php'; ?>
    <div id="contenedor">
        <div id="contenidoPagina">
            <h1>Lista de Boda</h1>
            <h2>¿Anda sin saber qu&eacute; hacer con tu lista de bodas? <br />
                Nosotros hacemos el trabajo por ti.</h2>
            <p>En <b>Masol</b> encontrar&aacute;s todo lo necesario para tu nueva vida. Tenemos todo para que nos conf&iacute;es tu lista de bodas. 
                Te asesoramos en todo lo necesario y te recomendamos lo que mejor se adapta a tus necesidades.</p>
            <img src="funciones/thumb/phpThumb.php?src=<?php echo RUTA_PATH; ?>images/cocina/modernas/grande/13_6.JPG&h=375&w=960&zc=1&f=png" width="960" />
            <h2>Lista de Boda Ficticia y Modificable.</h2>
            <p>Todos los regalos comprados por tus invitados equivalen a un saldo euros.  
                Los futuros contrayentes pueden aprovechar la lista de bodas para incluir 
                nuestra amplia selecci&oacute;n de muebles, elementos decorativos o electrodom&eacute;sticos
                que respondan tu gusto y necesidades.
            </p>
        </div>
    </div>
    <?php
    require_once './footer.php';
    ?>

</body>
</html>
