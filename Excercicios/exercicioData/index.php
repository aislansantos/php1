<?php
function mostrarDia($date) {
    $time = strtotime($date);
    setlocale(LC_TIME, 'pt_BR', 'pt_BR.utf-8', 'pt_BR.utf-8', 'portuguese');
    return ucfirst(strftime('%A', $time));
}
print_r(mostrarDia('2020-07-30'));