<?php

class MetodoPagamento {
    private $tipo;
    private $numero;
    private $cvv;
    private $scadenza;

    function __construct($_tipo, $_numero, $_cvv, $_scadenza) {
        $this->setTipo($_tipo);
        $this->setNumero($_numero);
        $this->setCvv($_cvv);
        $this->setScadenza($_scadenza);
    }

    /**
     * Get the value of tipo
     */ 
    public function getTipo()
    {
        return $this->tipo;
    }

    /**
     * Set the value of tipo
     *
     * @return  self
     */ 
    public function setTipo($tipo)
    {
        $this->tipo = $tipo;

        return $this;
    }

    /**
     * Get the value of numero
     */ 
    public function getNumero()
    {
        return $this->numero;
    }

    /**
     * Set the value of numero
     *
     * @return  self
     */ 
    public function setNumero($numero)
    {
        if(strlen($numero) < 10) {
            throw new Exception("Il numero della carta non è valido");
        }
        $this->numero = $numero;

        return $this;
    }

    /**
     * Get the value of cvv
     */ 
    public function getCvv()
    {
        return $this->cvv;
    }

    /**
     * Set the value of cvv
     *
     * @return  self
     */ 
    public function setCvv($cvv)
    {
        $this->cvv = $cvv;

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

    public function checkScadenza() {
        $scadenza = DateTime::createFromFormat("m/y", $this->scadenza);
        $now = new DateTime("now");

        return $scadenza > $now;
    }
}