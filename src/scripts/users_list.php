<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Listagem de Usuários</title>

    <link rel="stylesheet" href="../styles/reset.css">
    <link rel="stylesheet" href="../styles/index-styles.css">
    <link rel="stylesheet" href="../styles/table.css">
    <link rel="shortcut icon" href="../images/favicon.ico" type="image/x-icon">
</head>
<body>
<body>
    <main>
        <h1>Lista de Usuários</h1>
        
        <?php
        include('connection.php');

        $select = "SELECT * FROM login";
        $query = mysqli_query($connection, $select);

        if (mysqli_num_rows($query) > 0) {
            echo "<table class='table-style'>";
            echo "<tr><th>Nome</th><th>Login</th></tr>";

            while ($row = mysqli_fetch_assoc($query)) {
                echo "<tr>";
                echo "<td>" . $row['nome'] . "</td>";
                echo "<td>" . $row['login'] . "</td>";
                echo "</tr>";
            }

            echo "</table>";
        } else {
            echo "Nenhum usuário encontrado.";
        }

        mysqli_close($connection);
        ?>
        
        <footer>
            <a class="btn-return" href="index.php">Voltar a tela principal</a>
        </footer>
    </main>
</body>
    
</body>
</html>