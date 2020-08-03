<?php
/* aqui temos o modo de UPDATE do CRUD em si, o formulaio de edtar manda para esse arquivo fazer
a alteração no registro selecionado. O editar é bem similar ao ADICIONAR/INSERT */
require 'config.php';

// Recebemos os dados e carregamos nas variaveis
$id = filter_input(INPUT_POST, 'id');
$name = filter_input(INPUT_POST, 'name');
$email = filter_input(INPUT_POST, 'email', FILTER_VALIDATE_EMAIL);

// É feito uma condição para verificar se o email e o nome foram preenchidos corretamente
if ($id && $name && $email) {

    // Prepara a pesquisa para ser feita a consuta no bando de dados
    $sql = $pdo->prepare("UPDATE usuarios SET nome= :nome, email= :email WHERE id = :id");
    // Troca o campo ID do select que pelo valor da variavel que veio pelo post
    $sql->bindValue(':nome', $name);
    $sql->bindValue(':email', $email);
    $sql->bindValue(':id', $id);
    // Executa o comando sql fazendo a pesquisa
    $sql->execute();

    // Redireciono para o index assim que faço a atualização
    header("Location: index.php");
    exit;
}
