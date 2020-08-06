<?php
$senha = "1234";
// recomendação sempre usar o PASSWORD_DEFAULT
$hash = password_hash($senha, PASSWORD_BCRYPT);
/*
A função password_hash tem dois parametros
1º Própria senha
2º o tipo de processo que vai ultilizar para fazer a criptografia, hoje em dia temos 2 tipos mais ultilizados que é:
 - PASSWORD_DEFAULT -> passa pro php gerar o hash que ele achar mais conveniente pra esse momento, pode ser que em
 versões futuras ele ache algum hash melhor, pode ir de 60 256 caracteres dependendo do metodo ultilizado.
 - PASSWORD_BCRYPT -> nesse caso ele usa sempre o metodo BCRYPT, ao inves de gerar por outros metodos, sempre usa 60 caracteres.
 */

 echo "SENHA ORIGINAL É: ".$senha."<br>";
 echo "HASH: ".$hash;