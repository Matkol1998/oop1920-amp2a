<?php
// Task.php

namespace ProjectA;

class Task
{
    private $description;
    private $dateTime;

    public function setTask($desc, $date)
    {
        $this->description = $desc;
        $this->dateTime = $date;
    }

    public function getDescription()
    {
        return $this->description . "<br>";
    }
}