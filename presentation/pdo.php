<?php

$servername = "localhost";
$db = "jobBoard";
$username = "root";
$password = "";

try {
    $conn = new PDO("mysql:host=$servername;
    dbname=$db", $username, $password);
    array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION);

    echo "Suksese";

} catch (PDOException $e) {
    echo "Lidhja deshtoi: " . $e->getMessage();
}

?>