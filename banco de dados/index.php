<?php
// aqui temos a index e o modo de READ ou seja o select do CRUD.
require 'config.php';

$lista = [];
$sql = $pdo->query("SELECT * FROM usuarios");
if ($sql->rowCount() > 0) {
    $lista = $sql->fetchAll(PDO::FETCH_ASSOC);
}


?>

<a href="adicionar.php">Adicionar Usuario</a>

<table border="1" width="100%">
    <tr>
        <th>Id</th>
        <th>Nome</th>
        <th>Email</th>
        <th>Ações</th>
    </tr>
    <?php
    // dentro dos <td> a tag <?= é a mesma coisa que <?php echo, ou seja uma forma abreviada da mesma
    foreach ($lista as $usuario) : ?>
        <tr>
            <td><?= $usuario['id']; ?></td>
            <td><?= $usuario['nome']; ?></td>
            <td><?= $usuario['email']; ?></td>
            <td>
                <a href="editar.php?id=<?= $usuario['id']; ?>">[Editar]</a>

                <!-- depois do codigo do usuario temos o onclick que é um comando de java script para confirmar
                neste caso a exclusão do registro sem querer, o sistema vai perguntar se tem certeza da exclusão,
                a função retorna true e executa o excluir se confirmar ou então para o código no caso de dar não -->
                <a href="excluir.php?id=<?= $usuario['id']; ?>" onclick="return confirm('Tem certeza que deseja excluir ?')">[Excluir]</a>
            </td>
        </tr>
    <?php endforeach; ?>
</table>