<?php
$host = "localhost";
$user = "root";
$pass = "";
$db = "estoqueTi";
$conn = new mysqli($host, $user, $pass, $db);

if ($conn -> error) {
    die("Conexão indisponível!". $conn -> error);
}