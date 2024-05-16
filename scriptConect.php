<?php
$host = "10.99.40.4:3306";
$user = "root";
$pass = "password";
$db = "estoqueTi";
$conn = new mysqli($host, $user, $pass, $db);

if ($conn -> error) {
    die("Conexão indisponível!". $conn -> error);
}