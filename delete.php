<?php
require "database.php";

$id = $_GET["id"];


$statement = $conn->prepare("SELECT * FROM contacts WHERE id = :id");
$statement->execute([":id" => $id]);

if($statement->rowCount() == 0){
    http_response_code(404);
    echo("HTTP 040 NOT FOUNT");
    return;
}

$statement = $conn->prepare("DELETE FROM contacts WHERE id = :id");
$statement->execute([":id" => $id]);

header("Location: home.php");