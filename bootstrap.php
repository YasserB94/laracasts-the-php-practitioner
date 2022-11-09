<?php
$config = require 'config.php';

require './db/DbConnection.php';
require './db/DbQueryBuilder.php';
require "./Task.php";
return new DbQueryBuilder(DbConnection::make($config['database']));

