<?php

require_once('menu.php');
// criada a classe Post
class Post
{
    //criada uma propriedade publica, pode ser acessada de fora, e alterada diretamente, temos mais duas propriedades as propriedades privadas e protegidas.


    /* propriedades tipadas, nova funcionalidade do php 7.4 que serve para proteger para receber somente um tipo de informação. por exelmplo na variavel likes se não for protegida
    e tiver um tipo de verificação pode entrar com caracteres de letras ao invés de ser um numero inteiro  depois da propriedade e antes do nome da variavel informo o tipo que deve
    ser a variavel, Ex: o INT abaixo na variavel likes*/

    public int $likes = 0;



    // protege o acesso dos dados para proteger a classe.
    //private $likes = 0;
    // funciona parecida com o private.
    // protected $likes = 0;


    public $coments = [];


    public string $author;

    //propriedade privada e protegida não são acessiveis de fora da classe.


    // como criar os metodos, eles também tem as propriedades de privada, publica e protegida como os atributos da classe.
    public function aumentarLike()
    {
        $this->likes++;
    }
}

// agora temos de criar o objeto propriamente dito.
//para se criar o objeto uso o comando new conforme abaixo.
$post1 = new Post();
$post1->aumentarLike();

/* exemplo onde like devia ser numero e foi inserida letra, sem a propriedade tipada o sistema aceitta a informação com tipos diferentes causando erro no sistema.
$post1 = new Post();
$post1->likes = 'Aislan';
*/


$post2 = new Post();
$post2->likes = 2;



echo 'POST 1 : ' . $post1->likes . ' LIKES<br/>';
echo 'POST 2 : ' . $post2->likes . ' LIKES<br/>';

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>POO - classes/objetos/propriedades/metodos</title>
</head>
<body>
<br><br><br><br>
    
</body>
</html>