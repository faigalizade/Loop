<?php
namespace App\Core;

class Config
{
    protected static array $appConfig = [];

    public static function getConfig($path)
    {
        $pathArr = explode(".", $path);
        $fileName = $pathArr[0];
        unset($pathArr[0]);
        if (!array_key_exists($fileName, self::$appConfig)) {
            self::$appConfig[$fileName] = require_once realpath("config/{$fileName}.php");
        }
        $config = self::$appConfig[$fileName];

        foreach ($pathArr as $item) {
            $config = &$config[$item];
        }

        return $config ?? null;
    }
}