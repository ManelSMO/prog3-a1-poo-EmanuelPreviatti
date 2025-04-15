<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Login</title>
</head>
<body>
    <h2>Login</h2>
    <form action="processa_login.php" method="POST">
        <label>Email: <input type="email" name="email" required></label><br>
        <label>Senha: <input type="password" name="senha" required></label><br>
        <label><input type="checkbox" name="lembrar"> Lembrar e-mail</label><br><br>
        <button type="submit">Entrar</button>
    </form>
    <p><a href="cadastro.php">Não tem conta? Cadastre-se</a></p>
</body>
</html>