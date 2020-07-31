<?php
require 'vendor/autoload.php';

use \classes\matematica\Basica;
use Monolog\Logger;
use Monolog\Handler\StreamHandler;

// create a log channel
$log = new Logger('name');
$log->pushHandler(new StreamHandler('teste.log', Logger::WARNING));

$m = new Basica();
echo $m->somar(10,20);

$log->warning('Foo');
$log->error('Bar');

?>












<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css">
    <title>Document</title>
</head>
<body>
</body>
</html>