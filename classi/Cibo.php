<?php

require_once __DIR__ . "/Product.php";

class Cibo extends Product 
{
    private $ingredienti;
    private $scadenza;

    function __construct($_prezzo, $_nome, $_ingredienti, $_scadenza)
    {
        parent::__construct($_prezzo, $_nome);

        $this->setIngredienti($_ingredienti);
        $this->setScadenza($_scadenza);
    }

    /**
     * Get the value of ingredienti
     */ 
    public function getIngredienti()
    {
        return $this->ingredienti;
    }

    /**
     * Set the value of ingredienti
     *
     * @return  self
     */ 
    public function setIngredienti($ingredienti)
    {
        $this->ingredienti = $ingredienti;

        return $this;
    }

    /**
     * Get the value of scadenza
     */ 
    public function getScadenza()
    {
        return $this->scadenza;
    }

    /**
     * Set the value of scadenza
     *
     * @return  self
     */ 
    public function setScadenza($scadenza)
    {
        $this->scadenza = $scadenza;

        return $this;
    }
}