<?php
// Staff.php

namespace Opdracht4;

abstract class Staff extends Person
{
    protected $salary;

    abstract public function setSalary();
}