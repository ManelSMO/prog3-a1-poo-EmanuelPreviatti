<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Cadastro</title>
</head>
<body>
    <h2>Cadastro de Usuário</h2>
    <form action="processa_cadastro.php" method="POST">
        <label>Nome: <input type="text" name="nome" required></label><br>
        <label>Email: <input type="email" name="email" required></label><br>
        <label>Senha: <input type="password" name="senha" required></label><br><br>
        <button type="submit">Cadastrar</button>
    </form>
    <p><a href="login.php">Já tem conta? Faça login</a></p>
</body>
</html>