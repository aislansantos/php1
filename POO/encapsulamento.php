<?php
require_once('menu.php');


class Post
{
    public int $id;
    public int $likes = 0;
    public $coments = [];
    private string $author;

    /* Emcapsulamento é proteger as propriedades de acessos externos e de modificações que vão prejudicar o funcionamento daquele objeto
    --> o encapsulamento é a mesma coisa que criar o set e o get das propriedades 
    --> sempre usar em todas as propriedades*/

    public function aumentarLike()
    {
        $this->likes++;
    }

    // criacção de getters e setters para encapsulamento uso para tratamento de informação como no setASuthor que deixa a primeira letra maiuscula.
    // para todas as propriedades da classe se cria um set e um get.

    public function setAuthor($n)
    {
        if (strlen($n) >= 3) {
            $this->author = ucfirst($n);
        }
        
    }
    public function getAuthor()
    {
        /* faço operador pra deixar em branco no caso do set não validar a consdição como o exemplo que tem de ter mais de 2 caracteres
        mais o author do $post1 só tem 2 caracteres*/
        return $this->author ?? 'Visitante';
    }
}


$post1 = new Post();
$post1->setAuthor('ai');

$post2 = new Post();
$post2->setAuthor('Fulano');

echo 'POST 1 : ' . $post1->likes . ' LIKES - ' . $post1->getAuthor() . '<br/>';
echo 'POST 2 : ' . $post2->likes . ' LIKES - ' . $post2->getAuthor() . '<br/>';

?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>POO - Encapsulamento</title>
</head>

<body>
    <br><br><br><br>

</body>

</html>