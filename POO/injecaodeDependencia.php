<?php
require_once 'menu.php';
/*
Injesção de Dependencia é quando se insere uma classe dentro de outra, normalmanete através do construtor,
não necessariamente por ele. o ideal para se trabalhar com injeção é também com interface.
*/
// Nos dois casos os metodos fazer a mesma coisa, fazem uma soma dos dois numeros.

interface MatematicaBasica
{
    public function somar($x, $y);
}

class Basico1 implements MatematicaBasica
{
    public function somar($x, $y)
    {
        return $x + $y;
    }
}

class Basico2 implements MatematicaBasica
{
    public function somar($x, $y)
    {
        $res = $x;
        for ($q = 0; $q < $y; $q++) {
            $res++;
        }

        return $res;
    }
}

//se usar o basico 3 vai dar erro pois dentro do construtor solicita a implmentação da interface MatematicaBasica
class Basico3
{
    public function somar($x, $y)
    {
        $res = $x;
        for ($q = 0; $q < $y; $q++) {
            $res++;
        }

        return $res;
    }
}


class Matematica
{
    private $basico;
    /*
    Forma simples sem injeção de dependencia
    public function __construct()
    {
        $this->basico = new Basico2;
    }
    */

    // forma com injeção de dependencia
    public function __construct(MatematicaBasica $b)
    {
        $this->basico = $b;
    }

    public function somar($x, $y)
    {
        return $this->basico->somar($x, $y);
    }
}

/*
Forma simples sem injeção de dependencia
$mat = new Matematica();
*/

// Forma com Injeção de Dependencia.
$basico = new Basico2();
$mat = new Matematica($basico);

/* 
pode ser feito dessa forma também
$mat = new Matematica(new Basico1());
*/

echo $mat->somar(10, 15);






/*

// exemplo pratico, para manipulação de banco de dados

interface DatabaseInterface
{
    public function listar();
}

class database
{
    // vai ter todos os processos padões de trabalho com banco de dados
    // listar
    // selecionar 1 item
    // inserir
    // atualizar
    // deletar

    private $engine;

    public function __construct(DatabaseInterface $eng)
    {
        $this->engine = $eng;
    }

    public function listaTudo()
    {
        return $this->engine->listar();
    }
}

class MysqlEngine implements DatabaseInterface
{
    public function Listar()
    {
        # code...
    }
}

class OracleEngine implements DatabaseInterface
{
    public function Listar()
    {
        # code...
    }
}

class MongoEngine implements DatabaseInterface
{
    public function Listar()
    {
        # code...
    }
}

//para trocar o motor de banco de dados só trocar o nome da classe de qual banco de dados vai ser usada
$db = new database(new MysqlEngine);
//ou 
$db = new database(new OracleEngine);


*/