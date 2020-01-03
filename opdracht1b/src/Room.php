<?php

// src/Room.php

namespace Opdracht1b;

class Room
{
    private $length;
    private $width;
    private $height;
    
    public function __construct($length, $width, $height)
    {
        $this->length = $length;
        $this->width = $width;
        $this->height = $height;
    }
}
