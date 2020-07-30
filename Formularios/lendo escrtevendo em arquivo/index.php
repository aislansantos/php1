<?php
$texto = file_get_contents('texto.txt');
$texto .= "\nteste de escrita";
file_put_contents('texto.txt', $texto);