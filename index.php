<?php
declare(strict_types=1);

$database = require 'core/bootstrap.php';
$route = trim($_SERVER['REQUEST_URI'],'/');
require Router::load('routes.php')->direct($route);
