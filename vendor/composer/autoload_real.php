<?php

// autoload_real.php @generated by Composer

class ComposerAutoloaderInitd1afcb4cde962532ea76edc7ffe3cedb
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

        spl_autoload_register(array('ComposerAutoloaderInitd1afcb4cde962532ea76edc7ffe3cedb', 'loadClassLoader'), true, true);
        self::$loader = $loader = new \Composer\Autoload\ClassLoader(\dirname(__DIR__));
        spl_autoload_unregister(array('ComposerAutoloaderInitd1afcb4cde962532ea76edc7ffe3cedb', 'loadClassLoader'));

        require __DIR__ . '/autoload_static.php';
        call_user_func(\Composer\Autoload\ComposerStaticInitd1afcb4cde962532ea76edc7ffe3cedb::getInitializer($loader));

        $loader->register(true);

        return $loader;
    }
}
