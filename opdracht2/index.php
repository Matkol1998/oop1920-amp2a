<?php

require "vendor/autoload.php";

use Opdracht2a\Figure;
use Opdracht2a\Square;
use Opdracht2a\Circle;

$square1 = new Square(0,255,255, 200);
print $square1->draw();

$square2 = new Square(15,234,145, 350);
print $square2->draw();

$circle1 = new Circle(0, 255, 255, 150);
print $circle1->draw();





