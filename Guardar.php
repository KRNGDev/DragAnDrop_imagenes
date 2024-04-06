<?php
include 'db.php';

$carpeta_destino = 'Imagenes/';


if (!empty($_FILES)) {

    $nom_archivo = uniqid() . '.' . pathinfo($_FILES['file']['name'], PATHINFO_EXTENSION);
    $destino_archivo = $carpeta_destino . $nom_archivo;

    while (file_exists($destino_archivo)) {
        $nom_archivo = uniqid() . '.' . pathinfo($_FILES['file']['name'], PATHINFO_EXTENSION);
        $destino_archivo = $carpeta_destino . $nom_archivo;
    }

    move_uploaded_file($_FILES['file']['tmp_name'], $destino_archivo);

    $sql = "INSERT INTO imagen(nombre,ruta) VALUES (:nombre, :ruta)";

    $datos = $mydb->prepare($sql);
    $datos->bindParam(':nombre', $nom_archivo);
    $datos->bindParam(':ruta', $destino_archivo);
    $datos->execute();
}

// Para borrar
if (isset($_POST["name"])) {

    $nombre= $_POST["name"];
    $archivo = $carpeta_destino . $nombre;
    unlink($archivo);
    
    $sqlEliminar = "DELETE FROM imagen WHERE nombre = :nombre";

    $datosEliminar = $mydb->prepare($sqlEliminar);
    $datosEliminar->bindParam(':nombre', $nombre, PDO::PARAM_STR);
    $datosEliminar->execute();
    
    
}
