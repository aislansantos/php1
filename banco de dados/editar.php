<?php

/*no caso de DAO não temos manipulação de banco de dados pelo arquivo, temos sempre a 
manipulação pela classe, como no POO , porém trabalhamos com duas classes conforme nesses exemplos*/


/*nesse arquivo de editar pegamos o id do cadastro via get, pesquisamos no banco de dados
e em seguida populamos os campos de imput para editar/alterar os dados do registro selecionado */
require 'config.php';
// no caso do DAO temos de sempre dar um require no mesmo para usarmos a classe para os processos
require 'dao/UsuarioDaoMySql.php';
// temos de criar um objeto de susario dao para mandarmos o pdo para a classe ter acesso a base de dados
$usuarioDao = new UsuarioDaoMysql($pdo);

// criamos uma variavel para popular na pesquisa do banco de dados
$usuario = false;

$id = filter_input(INPUT_GET, 'id');
// Testamos se a variavel ID recebeu valor
if ($id) {
    $usuario = $usuarioDao->findById($id);
}

if ($usuario === false) {
    header("Location: index.php");
    exit;
}

?>

<h1>Editar Usuário</h1>
<form action="editar_action.php" method="post">
    <input type="hidden" name="id" value="<?= $usuario->getId(); ?>">


    <label for="">
        Nome:<br>
        <!-- popula o campo de nome com a variavel tipo vetor $info carregada acima -->
        <input type="text" name="name" value="<?= $usuario->getNome(); ?>">
    </label><br><br>

    <label for="">
        E-mail:<br>
        <!-- popula o campo de nome com a variavel tipo vetor $info carregada acima -->
        <input type="email" name="email" value="<?= $usuario->getEmail(); ?>">
    </label><br><br>

    <input type="submit" value="Salvar">

</form>

<a href="index.php">index</a>