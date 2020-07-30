<?php

class Calculadora
{
    public float $total = 0;

     //------------------------------------------
    public function add($n)
    {
        $this->total +=  $n;
    }
    //------------------------------------------
    public function sub($n)
    {
        $this->total -= $n;
    }
    //------------------------------------------
    public function multiply($n)
    {
        $this->total *= $n;
    }
    //------------------------------------------
    public function divide($n)
    {
        $this->total /= $n;
    }
    //------------------------------------------
    public function clear()
    {
        $this->total = 0;
    }
    //------------------------------------------
    public function total()
    {
        return $this->total;
    }
    //------------------------------------------
}
