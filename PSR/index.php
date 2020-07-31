<?php
require 'autoload.php';

//forma de usar informando o caminho antes prara no instanciamento somente usar o nome da classe
use \fotos\Upload;
$u = new Upload;


// Forma de usar colocando o caminho no momento estanciar a classe
$m = new \matematica\Basica();
echo $m->somar(10,20);


