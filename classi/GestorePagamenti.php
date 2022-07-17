<?php

class GestorePagamenti{
    private $metodiPagamento = [];

    public function add($_metodoPagamento) {
        $this->metodiPagamento[] = $_metodoPagamento;
    }

    /**
     * Get the value of metodiPagamento
     */ 
    public function getMetodiPagamento()
    {
        return $this->metodiPagamento;
    }

    /**
     * Set the value of metodiPagamento
     *
     * @return  self
     */ 
    public function setMetodiPagamento($metodiPagamento)
    {
        $this->metodiPagamento = $metodiPagamento;

        return $this;
    }

    public function getMetodo($index){
        return $this->getMetodiPagamento()[$index];
    }
}