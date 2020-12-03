<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit245bfe3080616a8f74c4aa78b9508b45
{
    public static $files = array (
        '9c9a81795c809f4710dd20bec1e349df' => __DIR__ . '/..' . '/joshcam/mysqli-database-class/MysqliDb.php',
        '94df122b6b32ca0be78d482c26e5ce00' => __DIR__ . '/..' . '/joshcam/mysqli-database-class/dbObject.php',
    );

    public static $prefixLengthsPsr4 = array (
        'a' => 
        array (
            'app\\' => 4,
        ),
        'U' => 
        array (
            'UK\\' => 3,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'app\\' => 
        array (
            0 => __DIR__ . '/../..' . '/application',
        ),
        'UK\\' => 
        array (
            0 => __DIR__ . '/../..' . '/UzhKeksy',
        ),
    );

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit245bfe3080616a8f74c4aa78b9508b45::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit245bfe3080616a8f74c4aa78b9508b45::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit245bfe3080616a8f74c4aa78b9508b45::$classMap;

        }, null, ClassLoader::class);
    }
}
