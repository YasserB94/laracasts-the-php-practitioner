<?php

namespace App\Core;

class App
{
    private static array $registry;

    public static function bind(string $key, $value)
    {
        static::$registry[$key] = $value;
    }

    public static function get($key)
    {
        if (array_key_exists($key, static::$registry)) {
            return static::$registry[$key];
        } else {
            throw new Exception(
                "Call to unregistered ${key} made!"
            );
        }
    }

}