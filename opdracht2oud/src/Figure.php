<?php
namespace Opdracht2aoud;

abstract class Figure
{
    private $color;

    public function __construct($color)
    {
        $this->color = $color;
    }

    abstract public function draw();
}