<?php
require_once 'Usuario.php';

class Autenticador {
    private static $usuarios = [];

    public static function registrar($usuario) {
        self::$usuarios[$usuario->getEmail()] = $usuario;
    }

    public static function logar($email, $senha) {
        if (isset(self::$usuarios[$email])) {
            return self::$usuarios[$email]->verificarSenha($senha);
        }
        return false;
    }

    public static function buscarUsuario($email) {
        return self::$usuarios[$email] ?? null;
    }
}
