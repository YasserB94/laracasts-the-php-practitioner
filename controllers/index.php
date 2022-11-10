<?php
$tasks = $app['database']->selectAll('todos','Task');
echo "Hello Index";
require "views/index.view.php";