<?php
require 'menu.php';

class Post
{
    /* nesses casos a primeira que está como protected pode ser alterada tanto pela classe POST como pela FOTO e TEXTO 
    o segundo caso que é private se tentar acessar e modificar a infoemação vai dar erro de acesso.
    */

    /* Metodos em classes que que herdam de outras classes os metodos, posso criar metodos com mesmo nome, vai ser usado o metodo  que se 
    encontra nessa classe e não na classe mãe */

    // classe Protected pode ser alterada por uma classe que acessa a informação pelo extends cou seja com herança
    protected int $id;
    // classe Private só pode ser altera pela classe onde foi criada.
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


}

//------------------------------------------------------------------------------------------------------------------------------------------------------

class Foto extends Post
{

    private $url;

    //------------------------------------------------------------------------------------------------------------------------------

    public function __construct($id)
    {
        /*nesse caso estou acessando a propriedade da classe POST pela classe FOTO, se a orppriedade for PRIVATE vai dar erro
        pois só pode ser alterada na classe POST */
        $this->id = 900;
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

//------------------------------------------------------------------------------------------------------------------------------------------------------

class Texto extends Post
{
    private $body;

    //------------------------------------------------------------------------------------------------------------------------------

    public function __construct($id)
    {

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