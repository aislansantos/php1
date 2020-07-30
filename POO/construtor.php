<?php
require_once('menu.php');


class Post
{
    public int $id;
    public int $likes = 0;
    public $coments = [];
    public string $author;

    /*O Construtor é um metodo que roda automaticamente toda vez que se cria um objeto novo, no caso do codigo abaixo ele escreve 2 vezes "teste",
    pois criamos o objeto $post1 e $post2 -> $post1 = new Post(); e $post2 = new Post(); rodou duas vezes.
    o construtor serve quando precisamos executar alguma coisa semnpre que o objeto é criado, para iniciar os objetos com propriedades informardas passamos parametros
    para criar o constutor se faz da seguinte forma  criamos uma variavel como */
    // podemos setar um valor inicial no parametro, se não houver valor dentro de algum objeto ele fica com um valor padrão.
    public function __construct($postId = 0)
    {
       $this->id = $postId;
       //consultar banco de dados para pegar inoformações do POST $id

       $this->likes = 12 * $postId;
    }

    public function aumentarLike()
    {
        echo 'abc';
        $this->likes++;
    }
}
/* por exemplo 25 é a quantidade de likes que vai iniciar  porque likes é po primeiro campo */
$post1 = new Post(25);

$post2 = new Post(1);

echo 'POST 1 : ' . $post1->likes . ' LIKES<br/>';
echo 'POST 2 : ' . $post2->likes . ' LIKES<br/>';
?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>POO - Constrtor</title>
</head>

<body>
    <br><br><br><br>

</body>

</html>