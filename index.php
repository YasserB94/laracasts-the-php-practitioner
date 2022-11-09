<?php

echo "Hello World!\n";
//VARIABLES
$greeting = "Hello PHP! \n";
echo $greeting;
$name = "Yasser";
echo "Hello " . $name . "\n";
$hello = "Hello";
echo "${hello} ${name} \n";
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        header {
            background-color: gray;
            width: 100vw;
            text-align: center;
            padding: 1rem;
        }
    </style>
</head>
<!--PHP AND HTML-->

<body>
    <header>
        <h1>
            <?= $greeting ?>
        </h1>
        <p>
            <?php
            $noparam = "Name was not set\n || change by adding ?name=Tommy to the url";
            echo isset($_GET['name']) ? htmlspecialchars($_GET['name']) : $noparam ?>
        </p>
    </header>
</body>

</html>