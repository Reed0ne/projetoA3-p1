<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Projeto A3 - Faculdade</title>
    
    <link rel="shortcut icon" href="src/images/favicon.ico" type="image/x-icon">
    <link rel="stylesheet" href="src/styles/reset.css">
    <link rel="stylesheet" href="src/styles/style.css">
</head>
<body>
    <main class="container">
        <form action="src/scripts/logged.php" method="post">
            <h1>Login</h1>
            <p>Seja bem-vindo(a)! Faça o login para acessar o nosso querido site :)</p>
            <div class="dados_usuario">
                <div class="section_form">
                    <label for="login">Login: </label>
                    <input type="text" name="login" required placeholder="Login de Usuário">
                </div>
                <div class="section_form">
                    <label for="senha">Senha: </label>
                    <input type="password" name="senha" required placeholder="Sua senha">
                </div>
            </div>
            <input type="submit" value="Entrar" id="btn_submit">
            
            <footer>
                <p>Criado por Danyel Gian - 2023</p>
            </footer>
        </form>

        <div class="image-background">
        </div>
    </main>
    
</body>
</html>