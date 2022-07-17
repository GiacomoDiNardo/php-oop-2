<?php

class Cart {
    private $products = [];

    public function add($product) {
        $this->products[] = $product;
    }

    public function getTotal() {
        $totale = 0;
        foreach($this->products as $product) {
            $totale += $product->getPrezzo();
        }

        return $totale;
    }

    /**
     * Get the value of products
     */ 
    public function getProducts()
    {
        return $this->products;
    }

    /**
     * Set the value of products
     *
     * @return  self
     */ 
    public function setProducts($products)
    {
        $this->products = $products;

        return $this;
    }
}