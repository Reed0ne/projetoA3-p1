<?php

session_start();

?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bem-vindo 😎</title>

    <link rel="stylesheet" href="../styles/reset.css">
    <link rel="stylesheet" href="../styles/index-styles.css">
    <link rel="shortcut icon" href="../images/favicon.ico" type="image/x-icon">
</head>
<body>
    <main>
        <h1>Olá <span> <?php echo $_SESSION['username']; ?> </span></h1>
        <p id="message-welcome">Seja bem-vindo(a) <span><?php echo $_SESSION['username']; ?></span>, espero que você aproveite o site! </p>
        <a href="register.php" id="contact"><p class="text-btn">Cadastro</p></a>
        <a href="logout.php" id="logout"><p class="text-btn">Logout</p></a>
        <footer>
            <p>Criado por Danyel Gian - 2023</p>
        </footer>
    </main>
</body>
</html>