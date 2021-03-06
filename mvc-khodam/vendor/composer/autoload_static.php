<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInitd8b2c0f24e4c52a44da66f6666563447
{
    public static $prefixLengthsPsr4 = array (
        'A' => 
        array (
            'App\\' => 4,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'App\\' => 
        array (
            0 => __DIR__ . '/../..' . '/',
        ),
    );

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInitd8b2c0f24e4c52a44da66f6666563447::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInitd8b2c0f24e4c52a44da66f6666563447::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInitd8b2c0f24e4c52a44da66f6666563447::$classMap;

        }, null, ClassLoader::class);
    }
}
