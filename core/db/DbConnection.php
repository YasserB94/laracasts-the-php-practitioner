<?php


class DbConnection
{
    public static function make($config): PDO
    {
        try {
            $dsn = "mysql:host=" . $config['DB_HOST'] . ";dbname=" . $config['DB_NAME'];
            return new PDO($dsn, $config['DB_USER'], $config['DB_SECRET'], $config['DB_OPTIONS']);
        } catch (PDOException $e) {
            error_log($e->getMessage());
            exit('Error connecting to db');
        }
    }
}