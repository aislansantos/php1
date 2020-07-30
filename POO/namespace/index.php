<?php
/* Namespace -> um recurso que foi adicionado no php 5.6, ele foi criado como uma forma de conseguir encapsular classes, constantes e etc dentro de um grupo,
para que se consgiga ter classes com mesmo nome. */
/* Nesse caso abaixo tenho de resolver a situação com namespace, porque ele usa a variavel de uma classe e depois tentar reutilzar a 
variavel para inromação igual de outra classe, dentro de cada classe tenho de definir o namespace. */
require_once 'classe1.php';
require_once 'classe2.php';
require_once 'classes/matematica/basico.php';

//eu tenho de alterar o namespace antes da barra para informar de que namespace esta sendo feito o acesso.
// para usar os namespace e o sistema localizar a deve se coloar como abaixo:
$a = new classe2\MinhaClasse();
echo $a->testar() . "<br>";

$a = new classe1\MinhaClasse();
echo $a->testar();

//caso de usar o caminho até o arquivo como namespace
$basico = new \classes\matematica\Basico();
$basico->teste();

/* pode ser usado da seguinte forma informando o caminho do arquivo no caminho antes de usar a classe */
// Use classes\matematica\Basico quando temos nome da classe igual ao que queremos estanciar podemos usar dessa forma
use classes\matematica\Basico as Basico;
$basico = new Basico();
$basico->teste();
?>
<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>POO - Namespace</title>
</head>

<body>

</body>

</html>