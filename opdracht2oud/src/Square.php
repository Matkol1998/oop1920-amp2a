<?php

namespace Opdracht2aoud;

class Square extends Figure
{
    private $height;
    private $width;

    public function __construct($color, $height, $width)
    {
        $this->height = $height;
        $this->width = $width;

        parent::__construct($color);
    }

    public function draw()
    {
        // TODO: Implement draw() method.
    }
}