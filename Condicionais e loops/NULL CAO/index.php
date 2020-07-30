<?php

//$nome = 'aislan ';
//$sobreNome = 'santos';


$nomeCompleto = $nome ?? 'Visitante';
$nomeCompleto .= $sobreNome ?? '';


echo ($nomeCompleto);