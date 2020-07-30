<?php
echo '<pre>';
//print_r($_FILES);

$arquivosPermitidos = ['image/jpeg', 'image/jpg', 'image/png'];


if (in_array($_FILES['arquivo']['type'], $arquivosPermitidos)) {
    $extensao = explode(".",$_FILES['arquivo']['name']);
    $extensao = $extensao[count($extensao)-1];
    $nome = md5(time() . rand(0, 1000)) . '.'.$extensao;
    move_uploaded_file($_FILES['arquivo']['tmp_name'], 'arquivos/' . $nome);
    echo 'arquivo salvo';
}else{
    echo 'arquivo não permitido!';
}