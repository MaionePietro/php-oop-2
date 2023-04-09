<?php
require_once __DIR__ . "/Prodotti.php";
class Cat extends Prodotti{
    protected $tipoPelo;
    protected $lettiera;
    protected $cibo;
    public function __construct($tipoPelo, $lettiera, $cibo, $prezzo, $img, $categoria, $nome)
    {
        parent::__construct($prezzo, $img, $categoria, $nome);
        $this->tipoPelo = $tipoPelo;
        $this->lettiera = $lettiera;
        $this->cibo = $cibo;
    }

    
}