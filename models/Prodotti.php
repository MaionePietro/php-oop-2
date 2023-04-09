<?php
class Prodotti{
    protected $id;
    protected $prezzo;
    protected $img;
    protected $categoria;
    protected $nome;

    public function __construct($prezzo, $img, $categoria, $nome)
    {
        $this->prezzo = $prezzo;
        $this->img = $img;
        $this->categoria = $categoria;
        $this->nome = $nome;
    }

    public function getId()
    {
        return $this->id;
    }
    public function setId($id)
    {
        $this->id = $id;
        return $this;
    }

    public function getPrezzo()
    {
        return $this->prezzo;
    }
    public function setPrezzo($prezzo)
    {
        $this->prezzo = $prezzo;

        return $this;
    }

    public function getImg()
    {
        return $this->img;
    } 
    public function setImg($img)
    {
        $this->img = $img;

        return $this;
    }

    public function getCategoria()
    {
        return $this->categoria;
    }
    public function setCategoria($categoria)
    {
        $this->categoria = $categoria;

        return $this;
    }

    public function getNome()
    {
        return $this->nome;
    }
    public function setNome($nome)
    {
        $this->nome = $nome;

        return $this;
    }

    public function printCardHTML() {
    ?>
        <div class="col">
          <div class="card">
            <div class="card-body">
              <h5 class="card-title"><?php echo $this->getId() ?></h5>
              <ul>
                <li><strong>Categoria:</strong> <?php echo $this->getCategoria() ?></li>
                <li><strong>Prezzo:</strong> <?php echo $this->getPrezzo() ?></li>
                <li><strong>Nome:</strong> <?php echo $this->getNome() ?></li>
              </ul>
            </div>
          </div>
        </div>
    <?php
    }
}