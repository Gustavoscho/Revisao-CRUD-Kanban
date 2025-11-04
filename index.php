<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <div id="titulo"><h1>Cadastro de Usuários</h1></div>

    <form method="post" id ="forms">
        <label  for="username">Nome</label>
        <input class="form-item" type="text" id="username" name="username" required>

        <label for="email">Email</label>
        <input class="form-item" type="email" id="email" name="email" required>

        <input id="button" type="submit" value="CADASTRAR">
    </form>

    <a href="tela de gerenciamento.php">voltar</a>
</body>

</html>

<?php
include 'conn.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = $_POST['username'];
    $email = $_POST['email'];

    $sql = "INSERT INTO users (username, email) VALUES ('$username', '$email')";

 if ($conn->query($sql) === true) {
        echo "Novo registro criado com sucesso.";
    } else {
        echo "Erro " . $sql . '<br>' . $conn->error;
    }
}

$conn->close();
?>

