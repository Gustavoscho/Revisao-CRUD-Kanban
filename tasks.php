<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>tasks</title>
</head>

<body>
    <h1>Cadastro de Tarefas</h1>

    <form action="" method="post">
        <label for="nome">Nome:</label>
        <input type="text" id="nome" name="nome"><br><br>

        <label for="descricao">Descricao:</label>
        <textarea name="descricao" id="descricao"></textarea><br><br>

        <label for="setor">Setor:</label>
        <input type="text" id="setor" name="setor"><br><br>

        <label for="prioridade">Prioridade:</label>
        <select id="prioridade" name="prioridade">
            <option value="baixa">Baixa</option>
            <option value="média">Média</option>
            <option value="alta">Alta</option>
        </select><br><br>

        <label for="status">Status:</label>
        <select id="status" name="status">
            <option value="a fazer">a fazer</option>
            <option value="em progresso">em progresso</option>
            <option value="feito">feito</option>
        </select><br><br>


        <input type="submit" value="Cadastrar">
    </form>

    <a href="index.php">criar usuario</a>
</body>
</html>

<?php
include 'conn.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nome = $_POST['nome'];
    $descricao = $_POST['descricao'];
    $setor = $_POST['setor'];
    $prioridade = $_POST['prioridade'];
    $status = $_POST['status'];


    $sql = "INSERT INTO tasks (nome, descricao, setor, prioridade, status) VALUES ('$nome', '$descricao', '$setor', '$prioridade', '$status')";

 if ($conn->query($sql) === true) {
        echo "Nova tarefa criado com sucesso.";
    } else {
        echo "Erro " . $sql . '<br>' . $conn->error;
    }
}

$conn->close();
?>

