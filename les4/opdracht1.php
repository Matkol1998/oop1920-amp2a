<?php

class House
{

    private $floors;
    private $rooms;
    private $width;
    private $height;
    private $length;
    private $price;

    public function __construct($floors, $rooms, $width, $height, $length)
    {
        $this->floors = $floors;
        $this->rooms = $rooms;
        $this->width = $width;
        $this->height = $height;
        $this->length = $length;

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

$house1 = new House(3, 5, 5, 10, 10);
$house1->calculatePrice();
print $house1->getPrice();