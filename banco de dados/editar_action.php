<?php

/* aqui temos o modo de UPDATE do CRUD em si, o formulaio de edtar manda para esse arquivo fazer
a alteração no registro selecionado. O editar é bem similar ao ADICIONAR/INSERT */
require 'config.php';
// no caso do DAO temos de sempre dar um require no mesmo para usarmos a classe para os processos
require 'dao/UsuarioDaoMySql.php';
// temos de criar um objeto de susario dao para mandarmos o pdo para a classe ter acesso a base de dados
$usuarioDao = new UsuarioDaoMysql($pdo);

// Recebemos os dados e carregamos nas variaveis
$id = filter_input(INPUT_POST, 'id');
$name = filter_input(INPUT_POST, 'name');
$email = filter_input(INPUT_POST, 'email', FILTER_VALIDATE_EMAIL);

// É feito uma condição para verificar se o email e o nome foram preenchidos corretamente
if ($id && $name && $email) {

    /*no caso de DAO não temos manipulação de banco de dados pelo arquivo, temos sempre a 
    manipulação pela classe, como no POO , porém trabalhamos com duas classes conforme nesses exemplos*/
    //$usuario = $usuarioDAO->findById($id);
    $usuario = new Usuario();
    $usuario->setId($id);
    $usuario->setNome($name);
    $usuario->setEmail($email);


    $usuarioDao->update($usuario);

    // Redireciono para o index assim que faço a atualização
    header("Location: index.php");
    exit;
} else {
    header("Location: editar.php?id=" . $id);
    exit;
}
