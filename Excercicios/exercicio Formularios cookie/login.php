<?php
$nome = filter_input(INPUT_POST, 'nome', FILTER_SANITIZE_SPECIAL_CHARS);


if ($nome) {
    $espiracao = time() + (86400 * 30);
    setcookie('nome', $nome, $espiracao);

    header('Location: index.php');
}

?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <h1>Qual Seu Nome ?</h1>

    <form action="" method="post">
        <input type="text" name="nome" id="">
        <input type="submit" value="Salvar">
    </form>
</body>

</html>