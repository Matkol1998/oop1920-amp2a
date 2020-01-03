<?php

abstract class Pet
{
    private $color;
    private $weight;
    private $name;

    public function setName($name)
    {
        $this->name = $name;
    }

    public function getName()
    {
        return "de naam van het dier is: ".$this->name."<br>";
    }

    abstract public function setGender();

}

class Dog extends Pet
{
    private $breed;

    public function setBreed($breed)
    {
        $this->breed = $breed;
    }

    public function getBreed()
    {
        return "deze hond is van het ras ".$this->breed."<br>";
    }

    public function setGender()
    {
        
    }
}

$dog1 = new Dog();
$dog1->setBreed('labrador');
print $dog1->getBreed();

$dog1->setName('Klaas');
print $dog1->getName();

