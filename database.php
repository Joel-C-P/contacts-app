<?php

$host = "localhost";
$database = "contacts_app";
$user = "root";
$password = "";

try {
    $conn = new PDO("mysql:host=$host;dbname=$database", $user, $password);
    //foreach ($conn->query("SHOW DATABASES") as $filas) {
    //    print_r($filas);
    //}
    //die();
} catch (PDOException $e){
    die("PDO Connection ERROR, f HERMANITO: " . $e->getMessage());
}