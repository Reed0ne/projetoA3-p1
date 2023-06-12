<?php
    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        include('connection.php');

        $login = isset($_POST['login']) ? $_POST['login'] : '';
        $newPassword = isset($_POST['new_password']) ? $_POST['new_password'] : '';

        $update = "UPDATE login SET senha = '$newPassword' WHERE login = '$login'";
        $query = mysqli_query($connection, $update);

        if ($query) {
            echo "<p>Senha alterada com sucesso!</p>";
            echo "<p><a href='index.php'>Voltar para o Index</a></p>";
            exit();
        } else {
            echo "<p>Ocorreu um erro ao alterar a senha.</p>";
            echo "<p><a href='index.php'>Voltar para o Index</a></p>";
        }
    }
?>