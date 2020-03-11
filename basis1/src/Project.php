<?php
// Project.php

namespace ProjectA;

class Project
{
    private $name;
    private $tasks = [];

    public function setName($name)
    {
        $this->name = $name;
    }

    public function getName()
    {
        return ucfirst($this->name);
    }

    public function addTask($task)
    {
        $this->tasks[] = $task;
    }
}