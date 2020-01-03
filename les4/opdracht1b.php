<?php

class House
{

    private $floors;
    public $rooms = [];
    private $price;

    public function __construct($floors, $rooms)
    {
        $this->floors = $floors;
        $this->rooms = $rooms;
   
    }

    public function addRoom($room)
    {
        $this->rooms[] = $room;
    }

    public function calculatePrice()
    {
        $volume = $this->width * $this->height * $this->length;
        $this->price = $volume * 3000;
    }

    public function getPrice()
    {
        return $this->price;
    }
}

class Room
{
    private $width;
    private $height;
    private $length;

    public function setRoom($width, $height, $length)
    {
        $this->width = $width;
        $this->height = $height;
        $this->length = $length;
    }

         
}


$house1 = new House(3,5);
$room1 = new Room();
$room1->setRoom(3,3,5);
$house1->addRoom($room1);
$room2 = new Room();
$room2->setRoom(10,10,10);
$house1->addRoom($room2);

var_dump($house1->rooms);
