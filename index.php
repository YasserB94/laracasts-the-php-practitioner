<?php
declare(strict_types=1);
$queryBuilder = require 'bootstrap.php';
$tasks = $queryBuilder->selectAll('todos','Task');

require "./index.view.php";
