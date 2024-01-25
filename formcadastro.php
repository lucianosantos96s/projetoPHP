<?php
require 'config.php';

$nome = filter_input(INPUT_POST, 'nome');
$cpf = filter_input(INPUT_POST, 'cpf');
$email = filter_input(INPUT_POST, 'email', FILTER_VALIDATE_EMAIL);
$cargo = filter_input(INPUT_POST, 'cargo');
$salario = filter_input(INPUT_POST, 'salario');

if($nome && $cpf && $email && $cargo && $salario) {
    $sql = $pdo->prepare("INSERT INTO relacaofuncionarios (nome, cpf, email, cargo, salario) VALUES (:nome, :cpf, :email, :cargo, :salario)");
    $sql->bindValue(':nome', $nome);
    $sql->bindValue(':cpf', $cpf);
    $sql->bindValue(':email', $email);
    $sql->bindValue(':cargo', $cargo);
    $sql->bindValue(':salario', $salario);
    $sql->execute();
    
    header("Location: index.php");
} else {
    header("Location: cadastrar.php");
    exit;
}

?>