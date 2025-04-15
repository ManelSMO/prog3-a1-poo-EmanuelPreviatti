<?php
require_once 'classes/Usuario.php';
require_once 'classes/Autenticador.php';

$nome = trim($_POST['nome']);
$email = trim($_POST['email']);
$senha = $_POST['senha'];

if ($nome && $email && $senha) {
    $usuario = new Usuario($nome, $email, $senha);
    Autenticador::registrar($usuario);
    header("Location: login.php");
    exit();
} else {
    echo "Preencha todos os campos são obrigatórios.";
}
