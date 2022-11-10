<?php
$config = require 'config.php';
require 'core/Router.php';

require 'core/db/DbConnection.php';
require 'core/db/DbQueryBuilder.php';

require "models/Task.php";
return new DbQueryBuilder(DbConnection::make($config['database']));

