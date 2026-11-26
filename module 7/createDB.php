<?php
$host = "localhost";
$user = "root";
$pass = "";
try {
    $conn = new PDO("mysql:host=$host", $user, $pass);
    $sql = "create database dddd";
    $conn->exec($sql);
    echo ("Database created");
} catch (exeptiion $e) {
    echo "Not created";
}


?>