<?php

require "vendor/autoload.php";

use Opdracht3a\Music;
use Opdracht3a\ProductList;

$music1 = new Music();
$music1->setProduct('Test1', 5.00, 9, 'blablabla');
$music1->addNumber('bla');
$music1->addNumber('blabla');

$music2 = new Music();
$music2->setProduct('Test2', 10.00, 21, 'burp');
$music2->addNumber('lalalalalalalala');
$music2->addNumber('pfffffffff');

// lijst aanmaken
$list1 = new ProductList();
$list1->addProduct($music1);
$list1->addProduct($music2);



print "<pre>";
//var_dump($list1->getProducts());
foreach($list1->getProducts() as $product)
{
    // Product $product
    print_r($product->getProduct());
}


//var_dump( $music1->getProduct());