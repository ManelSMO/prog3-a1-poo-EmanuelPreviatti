<?php
require_once 'classes/Sessao.php';
require_once 'classes/Usuario.php';

Sessao::iniciar();
$usuario = Sessao::get("usuario");

if (!$usuario) {
    header("Location: login.php");
    exit();
}

$cookieEmail = $_COOKIE['email'] ?? 'Não salvo';
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Dashboard</title>
</head>
<body>
    <h2>Bem-vindo, <?= htmlspecialchars($usuario->getNome()) ?>!</h2>
    <p>Seu e-mail: <?= htmlspecialchars($usuario->getEmail()) ?></p>
    <p>E-mail salvo no cookie: <?= htmlspecialchars($cookieEmail) ?></p>
    <a href="logout.php">Sair</a>
</body>
</html>