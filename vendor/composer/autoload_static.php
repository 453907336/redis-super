<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInita91a730fb898422ed52acf1203167232
{
    public static $prefixLengthsPsr4 = array (
        'W' => 
        array (
            'Whoops\\' => 7,
        ),
        'P' => 
        array (
            'Psr\\Log\\' => 8,
        ),
        'L' => 
        array (
            'Lib\\' => 4,
        ),
        'A' => 
        array (
            'App\\' => 4,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Whoops\\' => 
        array (
            0 => __DIR__ . '/..' . '/filp/whoops/src/Whoops',
        ),
        'Psr\\Log\\' => 
        array (
            0 => __DIR__ . '/..' . '/psr/log/Psr/Log',
        ),
        'Lib\\' => 
        array (
            0 => __DIR__ . '/../..' . '/lib',
        ),
        'App\\' => 
        array (
            0 => __DIR__ . '/../..' . '/app',
        ),
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInita91a730fb898422ed52acf1203167232::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInita91a730fb898422ed52acf1203167232::$prefixDirsPsr4;

        }, null, ClassLoader::class);
    }
}
