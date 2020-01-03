<?php

class Person
{
    protected $hairColor;
    private $eyeColor;
    private $length;
    private $weight;

    public function __construct($hairColor, $eyeColor, $length, $weight)
    {
        $this->hairColor = $hairColor;
        $this->eyeColor = $eyeColor;
        $this->length = $length;
        $this->weight = $weight;
    }

    public function changeHairColor($color)
    {
        $this->hairColor = $color;
    }
}


class Teacher extends Person
{
    private $salary;

    public function setSalary($salary)
    {
        $this->salary = $salary;
    }

    
}

class Student extends Person
{
    private $intuition;

    public function setIntuition($intuition)
    {
        $this->intuition = $intuition;
    }

    
}


$teacher1 = new Teacher('black', 'blue', 2.10, 55);
$teacher1->setSalary(10000);

$student1 = new Student('brown', 'brown', 1.50, 100);
$student1->setIntuition(1000);
$student1->changeHairColor('pink');
