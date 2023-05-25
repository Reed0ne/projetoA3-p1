<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registre-se</title>

    <link rel="shortcut icon" href="../images/favicon.ico" type="image/x-icon">
    <link rel="stylesheet" href="../styles/reset.css">
    <link rel="stylesheet" href="../styles/registers.css">
</head>
<body>
    <main>
        <h1>Cadastro</h1>
        <form action="new_user.php" method="post">
            <div class="secao-cadastro">
                <label for="name">Nome: </label>
                <input type="text" name="name" required placeholder="Digite seu Nome Completo">
            </div>
            <div class="secao-cadastro">
                <label for="login">Login: </label>
                <input type="text" name="login" required placeholder="Digite seu nickname">
            </div>
            <div class="secao-cadastro">
                <label for="senha">Senha: </label>
                <input type="password" name="senha" placeholder="Mínimo 8 caracteres" minlength="8" required>
            </div>
            <input type="submit" value="Cadastrar" id="btn-submit">
        </form>
        <footer>
            <p>Criado por Danyel Gian - 2023</p>
    </footer>
    </main>
</body>
</html>