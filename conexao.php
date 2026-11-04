<?php

$dsn = "mysql:host=192.168.8.7;dbname=projeto2b11";
$username = "projeto2b11";
$password = "projeto2b11";
$pdo = new PDO($dsn, $username, $password);

$stmt = $pdo->query("SELECT * FROM usuario");
while ($usuario = $stmt->fetch(PDO::FETCH_ASSOC)) {
    echo $usuario['nome'] . " - " . $usuario['email'] . "<br>";
}
?>