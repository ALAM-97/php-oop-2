<?php

trait Cart {

    protected $product = [];

    public function __construct($_product)
    {
        $this->product = $_product;
    }

    public function addProduct($_product)
    {
        $this->product[] = $_product;
    }

    public function removeProduct($_product)
    {
        $newCart = $this->product[] =- $_product;
        return $newCart;
    }

    public function getCart()
    {
        $currentCart = $this->product;
        return $currentCart;
    }
}

