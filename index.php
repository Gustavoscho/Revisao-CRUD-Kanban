<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <div id="titulo"><h1>Cadastro de Usuários</h1></div>

    <form action="" method="post" id ="forms">
        <label  for="username">Nome</label>
        <input class="form-item" type="text" id="username" name="username">

        <label for="email">Email</label>
        <input class="form-item" type="email" id="email" name="email">

        <input id="button" type="submit" value="CADASTRAR">
    </form>

    <a href="tasks.php">criar tarefa</a>
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

