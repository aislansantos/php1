<?php

if (isset($_COOKIE['nome'])) {
    $nome = $_COOKIE['nome'];
    echo 'Olá, ' . $nome . ' !!!';
    echo '<br/>';
    echo '<a href="sair.php">Sair</a>';
} else {
    header('Location: login.php');
}
