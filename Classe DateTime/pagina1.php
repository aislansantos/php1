<?php
$today = new DateTime();
$end = new DateTime('2020-12-31');

$diff = $today->diff($end);


echo $diff->format('%y anos,%m meses, %d dias, %h horas, %i minutos, %s segundos');