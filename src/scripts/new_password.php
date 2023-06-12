<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Alterar Senha</title>

    <link rel="stylesheet" href="../styles/reset.css">
    <link rel="stylesheet" href="../styles/index-styles.css">
    <link rel="stylesheet" href="../styles/new-password.css">
    <link rel="shortcut icon" href="../images/favicon.ico" type="image/x-icon">
</head>
<body>
    <main>
        <h1>Alterar Senha</h1>
        <form method="POST" action="change_password.php">
            <div class="info">
                <label for="login">Login:</label>
                <input type="text" name="login" required>
            </div>
            <div class="info">
                <label for="new_password">Nova Senha:</label>
                <input type="password" name="new_password" required>
            </div>
            <input type="submit" value="Alterar Senha" class="btn-submit">
        </form>
        <footer>
            <p>Criado por Danyel Gian - 2023</p>
        </footer>
    </main>
</body>
</html>