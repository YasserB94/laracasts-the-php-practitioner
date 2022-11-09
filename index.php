<?php
$greeting = "Hello PHP!";
//ARRAYS
$names = ["Jeff", "Tom", "Jessica"];
//ASSOCIATIVE ARRAY(HashMap)
$persons = [
    "Jeff" => ["age" => 30, "gender" => "Male"],
    "Tom" => ["age" => true, "gender" => "Male"],
    "Jessica" => ["age" => null, "gender" => "Female"]
];


require "./index.view.php";
