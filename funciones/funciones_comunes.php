<?php
function OrganizarPorNombre($primero, $segundo) { 
   $nombre[0]=strtoupper($primero); 
   $nombre[1]=strtoupper($segundo); 
   sort($nombre); 
   return (strcmp(strtoupper($nombre[1]) , strtoupper($segundo))) ? 1 : -1; 
} 

function recorrerImagenes($path) {
    // Abrimos la carpeta que nos pasan como parámetro
    $dir = opendir($path);
    $arrayImagenes = array();
    $i=0;
    // Leo todos los ficheros de la carpeta
    while ($elemento = readdir($dir)) {
        // Tratamos los elementos . y .. que tienen todas las carpetas
        if ($elemento != "." && $elemento != ".." && $elemento != "grande") {
            // Si es una carpeta
            if (!is_dir($path . $elemento)) {
                $arrayImagenes[$i]=RUTA_PATH . $path . $elemento;
                $i++;
            }
        }
    }
    usort($arrayImagenes, "OrganizarPorNombre");
    return $arrayImagenes;
}

function mostrarImagen($imagen) {
    global $e;
    ?>
    <li <?php if((($e)%4)==0) echo "class='liSinMargen'" ?>>
        <a href="funciones/thumb/phpThumb.php?src=<?php echo $imagen; ?>&amp;w=960&amp;f=png" title="">
            <img src="funciones/thumb/phpThumb.php?src=<?php echo $imagen; ?>&amp;h=220&amp;w=220&amp;zc=1&amp;f=png" alt="" />
        </a>
    </li>
    <?php
}
?>
