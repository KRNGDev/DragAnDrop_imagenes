<?php
include 'db.php';


$sql = "SELECT nombre,ruta FROM imagen";


$resultado =  $mydb->prepare($sql);
$resultado->execute();


$rutasArchivo = $resultado->fetchAll(PDO::FETCH_ASSOC);
if ($rutasArchivo) {
    foreach ($rutasArchivo as $imagen) {

        $nombre = $imagen['nombre'];
        $ruta = $imagen['ruta'];

        $url_imagen = 'albertolopezmartinez.top/Concurso/' . $ruta;

        echo ' <div class="archivoImagen">
            <img src="' . $ruta . '" class="img-thumbnail" width="175" height="175" style="height:175px;" />

            <div class="texto">

                <fieldset style="border-radius: 5px;" id="url">
                <legend>URL </legend>
                    <b style="color: black;">' . $url_imagen . '</b>
                </fieldset>
            

                <button type="button" class="eliminar_image" id="' . $nombre . '">Eliminar</button>
            </div>

            </div>';
    }
} else {
    echo "No se encontraron imágenes.";
}
