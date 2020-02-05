<?php
// Music.php

namespace Opdracht3a;

class Music extends Product
{
    private $numbers = [];

    public function addNumber($number)
    {
        $this->numbers[] = $number;
    }

    public function getInfo()
    {
        // TODO: Implement getInfo() method.
        return [$this->getProduct(), $this->numbers];

    }
}