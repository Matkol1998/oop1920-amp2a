<?php
// Patient.php

namespace Opdracht4;

class Patient extends Person
{
    private $payment;

    public function __construct($name, $eyeColor, $hairColor, $length, $weight, $role, $payment)
    {
        $this->payment = $payment;
        parent::__construct($name, $eyeColor, $hairColor, $length, $weight, $role);
    }
}