<?php

trait Cart {

    protected $product = [];

    public function __construct($_product)
    {
        $this->product = $_product;
    }

    public function addProduct($_product)
    {
        $this->product += $_product;
    }

    public function removeProduct($_product)
    {
        $this->product -= $_product;
    }

    public function getCart()
    {
        $currentCart = $this->product;
        return $currentCart;
    }
}

