<?php

class Usuario
{

    private $id;
    private $nome;
    private $email;


    public function getId()
    {
        return $this->id;
    }
    public function setId($i)
    {
        //trim tira eventuais espaços no caso de id receber numero e letras, é uma boa pratica
        $this->id = trim($i);
    }


    public function getNome()
    {
        return $this->nome;
    }
    public function setNome($n)
    {
        /* ucwords coloca cada letra de cada palavra nesse caso nome, como maiuscula, a função ucfirst coloca a 
        primeira palavra somente como maiuscula como inicio de frase */
        $this->nome = ucwords(trim($n));
    }


    public function getEmail()
    {
        return $this->email;
    }
    public function setEmail($e)
    {
        // strtolowerconverte todo o texto para minuscula
        $this->email = strtolower(trim($e));
    }
}

/*Vamos criar uma interface para que as classes que todas as classes que forem fazer uso da classe usuario,
vai ter de seguir a implementação dessa interface */
interface usuarioDAO{
    public function add(Usuario $u);
    public function findAll();
    public function findByEmail($email);
    public function findById($id);
    public function update(Usuario $u);
    public function delete($id);
}