<?php

include ('connection.php');

$login = isset($_POST['login']) ? $_POST['login'] : '';
$password = isset($_POST['senha']) ? $_POST['senha'] : '';

$select = "SELECT nome, login, senha FROM login
            WHERE login = '$login' AND senha = '$password'";

$query = mysqli_query($connection, $select);
$data_user = mysqli_fetch_row($query);

if ($login = $data_user[1] && $password = $data_user[2]){
    session_start();
    $_SESSION['username'] = $data_user[0];
    header('Location: index.php');
} else {
    header('Location: ../../login.php');
}

?>