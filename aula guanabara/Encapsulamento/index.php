<?php
/*
--> Metodos abstratos: itens obrigatórios que devem ser implementados na classe e na interface só tem a sequencia sem implementação.
--> A interface é uma sequancia de metodos abstratos
que tem a classe deve ter se ela for uma implementação do interface, tendo obrigatoriedade de estar dentro dessas classes
como um guia do que a classe deve ter para funcionar*/

//como fazer a interface



?>
<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Encapsulamento Guanabara</title>

</head>

<body>
    <h1>Projeto Controle Remoto</h1>
    <pre>
    <article>Nesse código fonte temos a parte de encapsulamento com interface.</article>
    <br>
    <br>
    <?php

    require_once 'controleRemoto.php';
    $c = new ControleRemoto();
    $c->ligar();
    $c->menosVolume();
    $c->abrirMenu();

    ?>
    </pre>
</body>

</html>