<?php

namespace Opdracht3a;

abstract class Product
{
    private $name;
    private $purchasePrice;
    private $tax;
    private $description;

    public function setProduct($name, $price, $tax, $description)
    {
        $this->name = $name;
        $this->purchasePrice = $price;
        $this->tax = $tax;
        $this->description = $description;
    }

    public function getProduct()
    {
        return [$this->name, $this->purchasePrice, $this->tax, $this->description];
    }

    abstract public function getInfo();
}
