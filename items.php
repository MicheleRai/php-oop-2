<?php

abstract class Items {
    public $nome;
    public $price;
    public $animal;  
    public $stock;

    public function __construct($nome, $price, $animal, $stock)
    {
        $this->nome = $nome;
        $this->price =$price;
        $this->animal = $animal;
        $this->setStock($stock);
    }

    public function getPrice($sconto) {
        $prezzoScontato = $this->price - (($this->price/100) * $sconto);
        return $prezzoScontato;
    }

    public function setStock($stock) {
        if (is_int($stock)) {
            $this->stock = $stock;
        }
    }
}