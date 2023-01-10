<?php

include __DIR__ .'/user.php';
abstract class Items {
    public $nome;
    public $price;
    public $animal;  
    public $stock;

    public function __construct($nome, $price, $animal, $stock)
    {
        $this->nome = $nome;
        $this->animal = $animal;
        $this->setPrice($price);
        $this->setStock($stock);
    }

    public function setPrice($price) {
        $this->price =$price - (($price/100)*$discount);
    }

    public function setStock($stock) {
        if (is_int($stock)) {
            $this->stock = $stock;
        }
    }
}