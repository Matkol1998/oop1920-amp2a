<?php
// Project

namespace Lesstatic;

class Project
{
    private $name;
    static $projects = [];

    public function __construct($name)
    {
        $this->name = $name;
    }

    static public function addProject($project)
    {
        self::$projects[] = $project;
    }

}