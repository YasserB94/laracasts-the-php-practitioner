<?php
declare(strict_types=1);

require "./functions.php";
require "./Task.php";
$greeting = "Hello PHP!";
//ARRAYS
$names = ["Jeff", "Tom", "Jessica"];
//ASSOCIATIVE ARRAY(HashMap)
$persons = [
    "Jeff" => ["age" => 30, "gender" => "maLe"],
    "ToM" => ["age" => 5, "gender" => "Male"],
    "jessica" => ["age" => 31, "gender" => "FEMALE"]
];
$formattedPersons = formatPersons($persons);

$tasks = [
    new Task('Refresh PHP'),
    new Task('Learn Laravel'),
    new Task('Grow a Beard and brag to other devs about php')
];

$tasks[0]->complete();
require "./index.view.php";
