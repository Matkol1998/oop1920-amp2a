<?php
//index.php

require "vendor/autoload.php";

use Lesstatic\Project;
$project1 = new Project("OOP");
$project2 = new Project("Laravel");

Project::addProject($project1);
Project::addProject($project2);

print "<pre>";
var_dump(Project::$projects);