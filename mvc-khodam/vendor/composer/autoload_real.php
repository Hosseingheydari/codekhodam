<?php

// autoload_real.php @generated by Composer

class ComposerAutoloaderInitd8b2c0f24e4c52a44da66f6666563447
{
    private static $loader;

    public static function loadClassLoader($class)
    {
        if ('Composer\Autoload\ClassLoader' === $class) {
            require __DIR__ . '/ClassLoader.php';
        }
    }

    /**
     * @return \Composer\Autoload\ClassLoader
     */
    public static function getLoader()
    {
        if (null !== self::$loader) {
            return self::$loader;
        }

        spl_autoload_register(array('ComposerAutoloaderInitd8b2c0f24e4c52a44da66f6666563447', 'loadClassLoader'), true, true);
        self::$loader = $loader = new \Composer\Autoload\ClassLoader(\dirname(__DIR__));
        spl_autoload_unregister(array('ComposerAutoloaderInitd8b2c0f24e4c52a44da66f6666563447', 'loadClassLoader'));

        require __DIR__ . '/autoload_static.php';
        call_user_func(\Composer\Autoload\ComposerStaticInitd8b2c0f24e4c52a44da66f6666563447::getInitializer($loader));

        $loader->register(true);

        return $loader;
    }
}