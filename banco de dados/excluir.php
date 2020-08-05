<?php
/*nesse arquivo de exclir pegamos o id do cadastro via get, pesquisamos no banco de dados
e em seguida populamos os campos de imput para editar/alterar os dados do registro selecionado */
require 'config.php';
// no caso do DAO temos de sempre dar um require no mesmo para usarmos a classe para os processos
require 'dao/UsuarioDaoMySql.php';
// temos de criar um objeto de susario dao para mandarmos o pdo para a classe ter acesso a base de dados
$usuarioDao = new UsuarioDaoMysql($pdo);


$id = filter_input(INPUT_GET, 'id');

// Testamos se a variavel ID recebeu valor
if ($id) {

    $usuarioDao->delete($id);
}

header("Location: index.php");
exit;
