<?php

require "vendor/autoload.php";

use Opdracht3a\Music;

$music1 = new Music();
$music1->setProduct('Test1', 5.00, 9, 'blablabla');
$music1->addNumber('bla');
$music1->addNumber('blabla');

print "<pre>";
var_dump($music1->getInfo());

//var_dump( $music1->getProduct());