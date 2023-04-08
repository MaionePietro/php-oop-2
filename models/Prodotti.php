<?php
class Prodotti{
    protected $id;
    protected $prezzo;
    protected $img;

    public function __construct($id, $prezzo, $img)
    {
        $this->id = $id;
        $this->prezzo = $prezzo;
        $this->img = $img;
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
}