<?php
session_start();

?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Excercicio Session - login</title>
</head>
<body>
    <h2>Qual Seu Nome ?</h2>

    <form action="index.php" method="post">
        <input type="text" name="nome" id="">
        <input type="submit" value="Salvar">
    </form>
</body>
</html>