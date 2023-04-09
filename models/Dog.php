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
    
    public function getTaglia()
    {
        return $this->taglia;
    }
    public function getCuccia()
    {
        return $this->cuccia;
    }
    public function getCibo()
    {
        return $this->cibo;
    }

    public function printCardDogHTML() {
        ?>
            <div class="col">
              <div class="card">
                <div class="card-body">
                  <h5 class="card-title"><?php echo $this->getId() ?></h5>
                  <ul>
                    <li><strong>Categoria:</strong> <?php echo $this->getCategoria() ?></li>
                    <li><strong>Prezzo:</strong> <?php echo $this->getPrezzo() ?></li>
                    <li><strong>Nome:</strong> <?php echo $this->getNome() ?></li>
                    <li><strong>Taglia:</strong> <?php echo $this->getTaglia() ?></li>
                    <li><strong>Cuccia:</strong> <?php echo $this->getCuccia() ?></li>
                    <li><strong>Cibo:</strong> <?php echo $this->getCibo() ?></li>
                  </ul>
                </div>
              </div>
            </div>
        <?php
    }
}