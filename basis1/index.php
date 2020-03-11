<?php
// index.php

require_once "vendor/autoload.php";

use ProjectA\Project;
use ProjectA\Task;

print "<pre>";
$task1 = new Task();
$task1->setTask("maken van plan van eisen", time());
//print $task1->getDescription();

$task2 = new Task();
$task2->setTask("maken van een projectplan", time());
//print $task2->getDescription();


$project1 = new Project();
$project1->setName('mvc');
$project1->addTask($task1);
$project1->addTask($task2);
var_dump($project1);
//print $project1->name;
//print $project1->getName();

$project2 = new Project();
$project2->setName('oop');

