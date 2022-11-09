<?php
declare(strict_types=1);

require "./functions.php";
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
require "./index.view.php";
