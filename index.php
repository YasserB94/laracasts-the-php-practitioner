<?php
declare(strict_types=1);
require 'core/bootstrap.php';
require Router::load('routes.php')->direct(Request::uri());
