<?php
// classe muito simples para se tabalhar com data

// nesse caso ja pegamos a data atual
$date = new DateTime('2020-01-01 15:35:00');

// temos como adicionar ou tirar tempos e horas etc dessa hora
$date->add(DateInterval::createFromDateString('2 days'));

// podemos mudar o timeZone desta data
//$date->setTimezone(new DateTimeZone('America/Sao_Paulo'));

//agora precisamos formatar para mostrar.
echo $date->format('d/m/Y H:i:s');
