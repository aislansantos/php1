<?php
/*nesse arquivo de editar pegamos o id do cadastro via get, pesquisamos no banco de dados
e em seguida populamos os campos de imput para editar/alterar os dados do registro selecionado */
require 'config.php';

// criamos uma variavel para popular na pesquisa do banco de dados
$info = [];

$id = filter_input(INPUT_GET, 'id');
// Testamos se a variavel ID recebeu valor
if ($id) {

    // Prepara a pesquisa para ser feita a consuta no bando de dados
    $sql = $pdo->prepare("SELECT * FROM usuarios WHERE id = :id");
    // Troca o campo ID do select que pelo valor da variavel que veio pelo get
    $sql->bindValue(':id', $id);
    //executa a pesquisa
    $sql->execute();

    //fz um teste comparando se a pesquisa retornou alguma linha
    if ($sql->rowCount() > 0) {

        //se retornou salva a primeira linha na variavel, o modo fetch só puxa um registro
        $info = $sql->fetch(PDO::FETCH_ASSOC);
    }
    // se não encontrar o registro selecionado ele redireciona para a pagina da index
    else {
        header("Location: index.php");
        exit;
    }
} else {
    header("Location: index.php");
    exit;
}

?>

<h1>Editar Usuário</h1>
<form action="editar_action.php" method="post">
    <input type="hidden" name="id" value="<?= $info['id']; ?>">


    <label for="">
        Nome:<br>
        <!-- popula o campo de nome com a variavel tipo vetor $info carregada acima -->
        <input type="text" name="name" value="<?= $info['nome']; ?>">
    </label><br><br>

    <label for="">
        E-mail:<br>
        <!-- popula o campo de nome com a variavel tipo vetor $info carregada acima -->
        <input type="email" name="email" value="<?= $info['email']; ?>">
    </label><br><br>

    <input type="submit" value="Salvar">

</form>