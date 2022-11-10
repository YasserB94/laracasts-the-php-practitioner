<?php
$tasks = $database->selectAll('todos','Task');
echo "Hello Index";
require "views/index.view.php";