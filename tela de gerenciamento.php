<?php include 'conn.php'; ?>    

<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <nav>
        <a href="tela de gerenciamento.php"><h1>Gerenciar de Tarefas</h1></a>
        <a href="tasks.php"><h1>Criar Tarefa</h1></a>
        <a href="index.php"><h1>Criar Usuário</h1></a>
    </nav>
    <div id="container">
        <div class="menu">
            <h2 class="titulotarefa">A Fazer</h2>
            <?php
                $sql = "SELECT * FROM tasks WHERE status='a fazer'";
                $result = $conn->query($sql);
                if ($result->num_rows > 0) {
                    while($row = $result->fetch_assoc()) {
                        echo "<div class='task'>";
                        echo "<strong>nome: </strong>" . $row['nome'];
                        echo "<br><strong>descrição: </strong>" . $row['descricao'];
                        echo "<br><strong>status: </strong>" . $row['status'];
                        echo "<br><strong>prioridade: </strong>" . $row['prioridade'];
                        echo "<br><strong>setor: </strong>" . $row['setor'];
                        echo "<br><strong>reponsável: </strong>" . $row['user_id'];
                        echo "<br><button>Editar</button><button>Excluir</button>";
                        echo "</div>";
                    }
                }
            ?>
        </div>
        <div class="menu">
            <h2 class="titulotarefa">Em Progresso</h2>
            <?php
                $sql = "SELECT * FROM tasks WHERE status='em progresso'";
                $result = $conn->query($sql);
                if ($result->num_rows > 0) {
                    while($row = $result->fetch_assoc()) {
                        echo "<div class='task'>";
                        echo "<strong>nome: </strong>" . $row['nome'];
                        echo "<br><strong>descrição: </strong>" . $row['descricao'];
                        echo "<br><strong>status: </strong>" . $row['status'];
                        echo "<br><strong>prioridade: </strong>" . $row['prioridade'];
                        echo "<br><strong>setor: </strong>" . $row['setor'];
                        echo "<br><strong>reponsável: </strong>" . $row['user_id'];
                        echo "<br><button>Editar</button><button>Excluir</button>";
                        echo "</div>";
                    }
                }
            ?>
        </div>
        <div class="menu">
            <h2 class="titulotarefa">Feito</h2>
            <?php
                $sql = "SELECT * FROM tasks WHERE status='feito'";
                $result = $conn->query($sql);
                if ($result->num_rows > 0) {
                    while($row = $result->fetch_assoc()) {
                        echo "<div class='task'>";
                        echo "<strong>nome: </strong>" . $row['nome'];
                        echo "<br><strong>descrição: </strong>" . $row['descricao'];
                        echo "<br><strong>status: </strong>" . $row['status'];
                        echo "<br><strong>prioridade: </strong>" . $row['prioridade'];
                        echo "<br><strong>setor: </strong>" . $row['setor'];
                        echo "<br><strong>reponsável: </strong>" . $row['user_id'];
                        echo "<br><button>Editar</button><button>Excluir</button>";
                        echo "</div>";
                    }
                }
            ?>
        </div>
    </div>
</body>
</html>