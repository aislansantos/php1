<?php
require_once 'menu.php';
/* Polimorfismo -> diz respeito a implementação e não a classe */

interface Forma
{
    public function getTipo();
    public function getArea();
}

class Quadrado implements Forma
{
    private $largura;
    private $altura;

    public function __construct($l, $a)
    {
        $this->largura = $l;
        $this->altura = $a;
    }

    public function getTipo()
    {
        return 'Quadrado';
    }
    public function getArea()
    {
        return $this->largura * $this->altura;
    }
}

class Circulo implements Forma
{
    private $raio;

    public function __construct($r)
    {
        $this->raio = $r;
    }
    public function getTipo()
    {
        return 'Circulo';
    }
    public function getArea()
    {
        return pi() * ($this->raio * $this->raio);
    }
}

$quadrado = new Quadrado(5, 5);
$circulo = new Circulo(7);

$objetos = [
    $quadrado,
    $circulo
];

/* como se usa as mesmo atributos da classes para rodar os dois objetos criados pode se 
dizer que as duas classes tem a mesma forma pois usam o o mesmo metodos conforme abaixo
que as duas classes tem os mesmos metodos */

foreach ($objetos as $objeto) {
    $tipo = $objeto->getTipo();
    $area = $objeto->getArea();
    echo "Area " . $tipo . " : " . $area . "<br/>";
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>POO - Polimorfismo</title>
</head>

<body>
</body>

</html>