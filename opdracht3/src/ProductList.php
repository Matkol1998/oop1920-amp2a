<?php
//ProductList.php

namespace Opdracht3a;

class ProductList
{
    private $name;
    private $items = [];

    public function addProduct($product)
    {
        $this->items[] = $product;
    }

    public function getProducts()
    {
        return $this->items;
    }
}