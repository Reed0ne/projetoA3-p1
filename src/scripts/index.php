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
    <link rel="stylesheet" href="../styles/index_style.css">
    <link rel="shortcut icon" href="../images/favicon.ico" type="image/x-icon">
</head>
<body>
    <main>
        <h1>Olá <span> <?php echo $_SESSION['username']; ?> </span></h1>
        <a href="register.php" id="contact"><p>Cadastro</p></a>
        <a href="logout.php" id="logout"><p>Logout</p></a>
    </main>
    
    <footer>
        <p>Criado por Danyel Gian - 2023</p>
    </footer>
</body>
</html>