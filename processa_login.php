<?php
require_once 'classes/Sessao.php';
require_once 'classes/Autenticador.php';

$email = trim($_POST['email']);
$senha = $_POST['senha'];
$lembrar = isset($_POST['lembrar']);

if (Autenticador::logar($email, $senha)) {
    Sessao::iniciar();
    Sessao::set("usuario", Autenticador::buscarUsuario($email));
    if ($lembrar) {
        setcookie("email", $email, time() + 3600);
    }
    header("Location: dashboard.php");
} else {
    echo "Informacoes inválidas.";
}
