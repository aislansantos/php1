<?php
// normalmente se usa um arquivo de config para fazer a conexão com o banco de dados

/* para facilitar se colocar os dados do PDO em variaveis para facilitar a manutenção ou mesmo 
a troca de base de dados ou de usuarios, conforme abaixo */
$db_name = 'test';
$db_host = 'localhost';
$db_user = 'root';
$db_pass = "";


// A conexão acontence quando se estancia a classe PDO
$pdo = new PDO("mysql:dbname=".$db_name.";host=".$db_host, $db_user, $db_pass);