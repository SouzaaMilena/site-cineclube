<?php
require 'conexao.php';
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $email = $_POST['email'];
    $senha = $_POST['senha'];
    $stmt = $pdo->prepare("INSERT INTO dados (email, senha) VALUES (:email, :senha");
    $stmt->execute(['email' => $email, 'senha' => $senha]);
    header("Location: cadastro.html");
}