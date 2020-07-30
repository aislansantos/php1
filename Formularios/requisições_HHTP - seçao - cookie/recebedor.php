<?php
session_start();

require('../header.php');

$nome = filter_input(INPUT_POST, 'nome',FILTER_SANITIZE_SPECIAL_CHARS);
$email = filter_input(INPUT_POST, 'email', FILTER_VALIDATE_EMAIL);
$idade = filter_input(INPUT_POST, 'idade',FILTER_SANITIZE_NUMBER_INT);

if ($nome && $email && $idade) {

    $espiracao = time() + (86400 * 30);
    setcookie('nome',$nome, $espiracao);

    echo 'Nome: ' . $nome . '<br/>';
    echo 'E-mail: ' . $email . '<br/>';
    echo 'Idade: ' . $idade;
} else {
    $_SESSION['aviso'] = 'preencha os itens corretamente';
    header('Location: index.php');
    exit;
}