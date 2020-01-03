<?php 

// index.php

include_once('vendor/autoload.php');

use Opdracht1b\House;
use Opdracht1b\Room;

$house1 = new House();

$room1 = new Room(5,5,5);
$room2 = new Room(4,4,4);
$room3 = new Room(2,2,1);

$house1->addRoom($room1);
$house1->addRoom($room2);
$house1->addRoom($room3);
print "<pre>";
var_dump($house1);