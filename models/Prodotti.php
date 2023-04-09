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
}