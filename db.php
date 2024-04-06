<?php

$dbHost = "localhost";
$dbUser = "root";
$dbPass = "";
$dbName = "Imagenes";

try {
    $mydb = new PDO("mysql:host=$dbHost;dbname=$dbName", $dbUser, $dbPass);


    $mydb->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    $error = $e->getCode();
    $mensaje = $e->getMessage();
}
