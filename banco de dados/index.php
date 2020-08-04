<?php
// aqui temos a index e o modo de READ ou seja o select do CRUD.
require 'config.php';
require 'dao/UsuarioDaoMySql.php';

$usuarioDao = new UsuarioDaoMysql($pdo);
$lista = $usuarioDao->findAll();

?>

<a href="adicionar.php">Adicionar Usuario</a>

<table border="1" width="100%">
    <tr>
        <th>Id</th>
        <th>Nome</th>
        <th>Email</th>
        <th>Ações</th>
    </tr>
    <!-- // dentro dos <td> a tag ?= é a mesma coisa que <php echo, ou seja uma forma abreviada da mesma  -->
    <?php foreach ($lista as $usuario) : ?>
        <tr>
            <td><?= $usuario->getId(); ?></td>
            <td><?= $usuario->getNome(); ?></td>
            <td><?= $usuario->getEmail() ?></td>
            <td>
                <a href="editar.php?id=<?= $usuario->getId(); ?>">[Editar]</a>

                <!-- depois do codigo do usuario temos o onclick que é um comando de java script para confirmar
                neste caso a exclusão do registro sem querer, o sistema vai perguntar se tem certeza da exclusão,
                a função retorna true e executa o excluir se confirmar ou então para o código no caso de dar não -->
                <a href="excluir.php?id=<?= $usuario->getId(); ?>" onclick="return confirm('Tem certeza que deseja excluir ?')">[Excluir]</a>
            </td>
        </tr>
    <?php endforeach; ?>
</table>

