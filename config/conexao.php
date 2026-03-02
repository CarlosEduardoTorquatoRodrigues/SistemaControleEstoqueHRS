<?php
$host = "localhost";
$user = "root";
$pass = "123mudar";
$db = "estoque_db";

$conn = new mysqli($host, $user, $pass, $db);

if ($conn->connect_error) {
    die("Erro de conexão: " . $conn->connect_error);
}
?>