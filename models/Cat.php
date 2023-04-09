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

    public function getTipoPelo()
    {
        return $this->tipoPelo;
    }
    public function getLettiera()
    {
        return $this->lettiera;
    }
    public function getCibo()
    {
        return $this->cibo;
    }

    public function printCardCatHTML() {
        ?>
            <div class="col">
              <div class="card">
                <div class="card-body">
                  <h5 class="card-title"><?php echo $this->getId() ?></h5>
                  <ul>
                    <li><strong>Categoria:</strong> <?php echo $this->getCategoria() ?></li>
                    <li><strong>Prezzo:</strong> <?php echo $this->getPrezzo() ?></li>
                    <li><strong>Nome:</strong> <?php echo $this->getNome() ?></li>
                    <li><strong>Pelo:</strong> <?php echo $this->getTipoPelo() ?></li>
                    <li><strong>Lettiera:</strong> <?php echo $this->getLettiera() ?></li>
                    <li><strong>Cibo:</strong> <?php echo $this->getCibo() ?></li>
                  </ul>
                </div>
              </div>
            </div>
        <?php
    }
}