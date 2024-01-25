<?php

require 'config.php';

$lista = [];    

$sql = $pdo->query("SELECT * FROM relacaofuncionarios");

if ($sql->rowCount() > 0) {
    $lista = $sql->fetchAll(PDO::FETCH_ASSOC);
}

?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Solutions</title>
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
    <header>
        <h1>Solutions</h1>
        <span><a href="cadastrar.php">Cadastrar novo funcionário</a></span>
    </header>
    <section>
        <h2>Lista de Funcionários</h2>
        <table>
            <tr>
                <th>ID</th>
                <th>Nome</th>
                <th>CPF</th>
                <th>Email</th>
                <th>Cargo</th>
                <th>Salario</th>
                <th>Ações</th>
            </tr>
            <?php foreach($lista as $funcionario): ?>
                <tr>
                    <td><?=$funcionario['id'];?></td>
                    <td><?=$funcionario['nome'];?></td>
                    <td><?=$funcionario['cpf'];?></td>
                    <td><?=$funcionario['email'];?></td>
                    <td><?=$funcionario['cargo'];?></td>
                    <td><?=$funcionario['salario'];?></td>
                    <td><a href="editar.php?id=<?$funcionario['id'];?>" class="editar">Editar</a><a href="excluir.php?id=<?$funcionario['id'];?>" class="excluir">Excluir</a>
                </tr>
            <?php endforeach; ?>
        </table>
    </section>
    <footer>
        <span>&copy; Solutions Enterprise</span>
    </footer>
</body>
</html>