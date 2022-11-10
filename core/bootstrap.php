<?php
$app = [];

$app['config'] = require 'config.php';
require 'core/Router.php';
require 'core/Request.php';

require 'core/db/DbConnection.php';
require 'core/db/DbQueryBuilder.php';
$app['database'] = new DbQueryBuilder(DbConnection::make($app['config']['database']));

require "models/Task.php";

