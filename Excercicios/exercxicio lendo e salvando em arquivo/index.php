<?php
$item = filter_input(INPUT_POST, 'item', FILTER_SANITIZE_SPECIAL_CHARS);


if (isset($item) && !empty($item)) {
    $itens = file_get_contents('nomes.txt');
    $itens .= "\n" . $item;
    file_put_contents('nomes.txt', $itens);

}

$nomes = file_get_contents('nomes.txt');
$nomes = explode("\n", $nomes);
 



?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <form action="" method="post">
        <label for=""> Novo Nome:
            <br />
            <input type="text" name="item" id="">
        </label>
        <input type="submit" value="salvar">
    </form>

    <h1>Lista de nomes:</h1>

    <ul>
        <?php
        foreach ($nomes as $nome) {
            echo '<li>' . $nome . '</li>';
        }
        $item = '';
        ?>
    </ul>
</body>

</html>