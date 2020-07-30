<?php
require_once('menu.php');

//metodo estatico nada mais é do que um metodo dentro de uma classe que ele vai ser "independente", ele pode ser usado unicamente externamente.
// função dentro de uma classe é um metodo

class Matematica{
/* pode se usar uma propriedade estatica também */
    public static string $nome = 'Aislan';

/* para criar uma função statica colocar static depois do public e antes do function */
    public static function soma($x, $y)
    {
        return $x + $y;
    }

}
/* pode se usar a função somar sem criar um objeto 
modelo de função sem ser estatica:
$m = new Matematica();
echo $m->soma(10, 20);
*/

/*modelo de função estatica
para usar a função estatica deve se refenrenciar a classe onde esta a função -->classe::função */

echo Matematica:: $nome.'<br/>';
echo Matematica::soma(10, 20);