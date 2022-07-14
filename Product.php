<?php

class Product
{
    private $prezzo;
    private $nome;


    function __construct($_prezzo, $_nome)
    {
        $this->setPrezzo($_prezzo);
        $this->setNome($_nome);
    }

    /**
     * Get the value of prezzo
     */ 
    public function getPrezzo()
    {
        return $this->prezzo;
    }

    /**
     * Set the value of prezzo
     *
     * @return  self
     */ 
    public function setPrezzo($prezzo)
    {
        $this->prezzo = $prezzo;

        return $this;
    }

    /**
     * Get the value of nome
     */ 
    public function getNome()
    {
        return $this->nome;
    }

    /**
     * Set the value of nome
     *
     * @return  self
     */ 
    public function setNome($nome)
    {
        $this->nome = $nome;

        return $this;
    }
}
    

