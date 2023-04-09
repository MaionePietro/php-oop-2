<?php
require_once __DIR__ . "/Prodotti.php";
class Dog extends Prodotti{
    protected $taglia;
    protected $cuccia;
    protected $cibo;
    public function __construct($taglia, $cuccia, $cibo, $prezzo, $img, $categoria, $nome)
    {
        parent::__construct($prezzo, $img, $categoria, $nome);
        $this->taglia = $taglia;
        $this->cuccia = $cuccia;
        $this->cibo = $cibo;
    }

}