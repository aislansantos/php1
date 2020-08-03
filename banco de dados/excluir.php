<?php
/*nesse arquivo de exclir pegamos o id do cadastro via get, pesquisamos no banco de dados
e em seguida populamos os campos de imput para editar/alterar os dados do registro selecionado */
require 'config.php';


$id = filter_input(INPUT_GET, 'id');

// Testamos se a variavel ID recebeu valor
if ($id) {
    
    $sql = $pdo->prepare("DELETE FROM usuarios WHERE id = :id");
    $sql->bindValue(':id', $id);
    $sql->execute();

}

header("Location: index.php");
exit;