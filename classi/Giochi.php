<?php

require_once __DIR__ . "/Product.php";

class Giochi extends Product
{
    private $colore;
    private $dimensione;

    function __construct($_prezzo, $_nome, $_colore, $_dimensione)
    {
        parent::__construct($_prezzo, $_nome);

        $this->setColore($_colore);
        $this->setDimensione($_dimensione);
    }


    /**
     * Get the value of colore
     */ 
    public function getColore()
    {
        return $this->colore;
    }

    /**
     * Set the value of colore
     *
     * @return  self
     */ 
    public function setColore($colore)
    {
        $this->colore = $colore;

        return $this;
    }

    /**
     * Get the value of dimensione
     */ 
    public function getDimensione()
    {
        return $this->dimensione;
    }

    /**
     * Set the value of dimensione
     *
     * @return  self
     */ 
    public function setDimensione($dimensione)
    {
        $this->dimensione = $dimensione;

        return $this;
    }
}