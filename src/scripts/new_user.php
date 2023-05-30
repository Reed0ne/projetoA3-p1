<?php

include('connection.php');

$nome = isset($_POST['name']) ? $_POST['name'] : '';
$login = isset($_POST['login']) ? $_POST['login'] : '';
$senha = isset($_POST['senha']) ? $_POST['senha'] : '';

$insert = "INSERT INTO login (nome, login, senha)
        VALUES ('$nome', '$login', '$senha')";
$query = mysqli_query($connection, $insert);

header('Location: login.php')

?>