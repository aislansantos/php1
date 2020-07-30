<?php
require 'menu.php';

class Post
{
    private int $id;
    private int $likes = 0;

    //------------------------------------------------------------------------------------------------------------------------------

    public function setId($i)
    {
        $this->id = $i;
    }
    public function getId()
    {
        return $this->id;
    }

    //------------------------------------------------------------------------------------------------------------------------------

    public function setLilkes($l)
    {
        $this->likes = $l;
    }
    public function getLikes()
    {
        return $this->likes;
    }

    //------------------------------------------------------------------------------------------------------------------------------

    //Por exemplo o post pode ser foto, video ou texto uso essa classe como uma classe geral pois todas as classes vão ter esses atributos 
}

//---------------------------------------------------------------------------------------------------------------------------------

class Foto extends Post
{
    /* Essa classe foto vai estender a classe post, siginifica que dentro dessa classe vamos usar tudo que temos na classe Post, 
    ou seja vamos herdar a classe Post, tudo que tem dentro dentro dentro da classe POst ID E LIKES pode ser acessado por essa classe. */
    // No caso de foto temos a url, se fosse class testo teria outros atributos.
    private $url;

    //------------------------------------------------------------------------------------------------------------------------------

    public function __construct($id)
    {
        /*Como estou herdando o que se encontra dentro da classe POST posse acessar a atributo setId que se encontra dentro dela
         conforme abaixo pode ser visto*/
        $this->setId($id);
    }

    //------------------------------------------------------------------------------------------------------------------------------

    public function setUrl($u)
    {
        $this->url = $u;
    }

    //------------------------------------------------------------------------------------------------------------------------------

    public function getUrl()
    {
        return $this->url;
    }
}

//----------------------------------------------------------------------------------------------------------------------------------

class Texto extends Post
{
    private $body;

    //------------------------------------------------------------------------------------------------------------------------------

    public function __construct($id)
    {
        /*Como estou herdando o que se encontra dentro da classe POST posse acessar a atributo setId que se encontra dentro dela
         conforme abaixo pode ser visto*/
        $this->setId($id);
    }

    //------------------------------------------------------------------------------------------------------------------------------

    public function setBody($b)
    {
        $this->body = $b;
    }

    public function getBody()
    {
        return $this->body;
    }

    //------------------------------------------------------------------------------------------------------------------------------



}

//------------------------------------------------------------------------------------------------------------------------------

// confomrme abaixo a classe fotos acessou tanto os atributos dentro dela como os que estão dentro da classe POST
$foto = new Foto(20);
$foto->setLilkes(12);
$foto->setUrl('abc');


echo "FOTO: #" . $foto->getId() . " - " . $foto->getLikes() . " Likes - " . $foto->getUrl();


?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>POO - Herança</title>
</head>

<body>

</body>

</html>