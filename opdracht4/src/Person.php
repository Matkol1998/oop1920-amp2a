<?php
// Person.php

namespace Opdracht4;

abstract class Person
{
    private $name;
    private $eyeColor;
    private $hairColor;
    private $length;
    private $weight;
    private $role;

    public function __construct($name, $eyeColor,
                                $hairColor, $length,
                                $weight, $role)
    {
        $this->name = $name;
        $this->eyeColor = $eyeColor;
        $this->hairColor = $hairColor;
        $this->length = $length;
        $this->weight = $weight;
        $this->role = $role;
    }

    /**
     * @return mixed
     */
    public function getName()
    {
        return $this->name;
    }



}