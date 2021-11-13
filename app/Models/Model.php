<?php
namespace App\Models;

use \R;

class Model
{
    public static string $tableName;

    public static function __callStatic($pluginName, $params)
    {
        array_unshift($params, static::$tableName);
        return R::$pluginName(...$params);
    }
}