<?php

namespace Rinsvent\DTO2DataBundle\Storage\Response;

class Header
{
    private static $items = [];

    public static function get(string $key)
    {
        return self::$items[$key] ?? null;
    }

    public static function set(string $key, string $value)
    {
        self::$items[$key] = $value;
    }

    public static function all()
    {
        return self::$items;
    }
}