<?php
session_start();

$nome = filter_input(INPUT_POST, 'nome', FILTER_SANITIZE_SPECIAL_CHARS);

if ($nome) {
    $_SESSION['nome'] = $nome;
}else{
 header('Location: login.php');
}

echo 'Olá, '.$_SESSION['nome'].' !!!<br/>';
echo '<a href="sair.php">Sair</a>';
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Excercicio Session - index</title>
</head>
<body>
    
</body>
</html>