<?php
/*temos de implementar a classe controleRemoto na interface Controlador, no caso do php o processo Ã© duplo temos de dar
um require_once antes de iniciarmos a classe, e temos de indicar a interface, que nesse caso Ã© o controlador.php */
require_once 'controlador.php';

/* No momento de criarmos a classe temos de colocar o implments e o nome da interface que foi importada pelo require_ondce
que nesse caso Ã© a controlador.php */
class ControleRemoto implements Controlador
{

    //atributos
    private int $volume;
    private bool $ligado;
    private bool $tocando;

    //------MÃ©todos Especiais------

    // Construtor da classe------
    public function __construct()
    {
        $this->volume = 50;
        $this->ligado = false;
        $this->tocando = false;
    }


    // Get e Set Volume------
    private function getVolume()
    {
        return $this->volume;
    }


    private function setVolume($v)
    {
        $this->volume = $v;

        return $this;
    }

    // Get e Set ligado------
    private function getLigado()
    {
        return $this->ligado;
    }


    private function setLigado($ligado)
    {
        $this->ligado = $ligado;

        return $this;
    }

    // Get e Set Tocando ------
    private function getTocando()
    {
        return $this->tocando;
    }

    private function setTocando($tocando)
    {
        $this->tocando = $tocando;

        return $this;
    }


    //------Métodos Interface------
    public function ligar()
    {
        $this->setLigado(true);
    }

    public function desligar()
    {
        $this->setLigado(false);
    }

    public function abrirMenu()
    {
        echo "<strong><h3>-----MENU-----</h3></strong>";
        echo "<br> Está ligado?: " . ($this->getLigado() ? "SIM" : "NÃO");
        echo "<br> Está tocando?: " . ($this->getTocando() ? "SIM" : "NÃO");
        echo "<br> Volume: " . $this->getVolume();
        for ($i = 0; $i <= $this->getVolume(); $i += 10) {
            echo "|";
        }
        echo "<br>";
    }

    public function fecharMenu()
    {
        echo "Fechando Menu";
    }

    public function maisVolume()
    {
        if ($this->getLigado()) {
            $this->setVolume($this->getVolume() + 5);
        } else {
            echo "<p>ERROR! Não posso aumentar volume!</p>";
        }
    }

    public function menosVolume()
    {
        if ($this->getLigado()) {
            $this->setVolume($this->getVolume() - 5);
        } else {
            echo "<p>ERROR! Não posso diminuir volume!</p>";
        }
    }

    public function ligarMudo()
    {
        if ($this->getLigado() && $this->getVolume() > 0) {
            $this->setVolume(0);
        }
    }

    public function desligarMudo()
    {
        if ($this->getLigado() && $this->getVolume() == 0) {
            $this->setVolume(50);
        }
    }

    public function play()
    {
        if ($this->getLigado() && !($this->getTocando())) {
            $this->setTocando(true);
        }
    }

    public function pause()
    {
        if ($this->getLigado() && $this->getTocando()) {
            $this->getTocando(false);
        }
    }
}
