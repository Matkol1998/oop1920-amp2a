<?php
// Doctor.php

namespace Opdracht4;

class Doctor extends Staff
{

    public function setSalary()
    {
        // TODO: Implement setSalary() method.
        $this->salary = $rate * $hour;
    }
}