<?php

class Orologi 
{
    public $marca;
    public $modello;
    public $materiali;
    public $movimentoMeccanico;

    function __construct($marca,$materiali)
    {
        $this->marca = $marca;
        $this->materiali = $materiali;
    }
}

$rolex = new Orologi('rolex','oro');
// echo $rolex->marca;
// echo $rolex->materiali;

