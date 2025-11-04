<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>tasks</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <div id="titulo"><h1>Cadastro de Tarefas</h1></div>

    <form action="" method="post" id="forms">
        <label  for="nome">Nome</label>
        <input class="form-item" type="text" id="nome" name="nome" required>

        <label for="descricao">Descrição</label>
        <textarea class="form-item" name="descricao" id="descricao" required></textarea>

        <label for="setor">Setor</label>
        <input class="form-item" type="text" id="setor" name="setor" required>

        <label for="prioridade">Prioridade</label>
        <select class="form-item" id="prioridade" name="prioridade" required>
            <option value="baixa">Baixa</option>
            <option value="média">Média</option>
            <option value="alta">Alta</option>
        </select>

        <label for="status">Status</label>
        <select class="form-item" id="status" name="status" required>
            <option value="a fazer">A fazer</option>
            <option value="em progresso">Em progresso</option>
            <option value="feito">Feito</option>
        </select>

        <input class="button" type="submit" value="CADASTRAR">
    </form>

    <a href="tela de gerenciamento.php">voltar</a>
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

