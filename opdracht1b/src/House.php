<?php

// src/House.php

namespace Opdracht1b;

class House
{

    private $volume;
    private $price;
    private $rooms = [];

    public function addRoom($room)
    {
        $this->rooms[] = $room;
    }

}
