<?php
// classe muito simples para se tabalhar com data

// nesse caso ja pegamos a data atual
//$date = new DateTime('2020-01-01 15:35:00');

// temos como adicionar ou tirar tempos e horas etc dessa hora>>>

// para adicionar tempo
//$date->add(DateInterval::createFromDateString('7 year 2 days 5 minutes 17 seconds'));

//para diminuir tempo
//$date->sub(DateInterval::createFromDateString('7 year 2 days 5 minutes 17 seconds'));

// podemos mudar o timeZone desta data
//$date->setTimezone(new DateTimeZone('America/Sao_Paulo'));

//agora precisamos formatar para mostrar.
//echo $date->format('d/m/Y H:i:s');



// Podemos também compara datas
$date1 = new DateTime('2020-01-01');
$date2 = new DateTime('2020-02-15');

/* comparar data
if ($date1 > $date2) {
    echo 'DATE 1 é maior que DATE 2';
}else{
    echo 'DATE 2 é maior que DATE 1';
}*/

//mostrar diferença de duas datas
$diff = $date1->diff($date2);
// para mostrar a qantidade de dias
echo $diff->format('%a');