<?php

// autoload_real.php @generated by Composer

class ComposerAutoloaderInitf61b36ebe6d4f7f031ff9340d1b70f36
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

        spl_autoload_register(array('ComposerAutoloaderInitf61b36ebe6d4f7f031ff9340d1b70f36', 'loadClassLoader'), true, true);
        self::$loader = $loader = new \Composer\Autoload\ClassLoader(\dirname(__DIR__));
        spl_autoload_unregister(array('ComposerAutoloaderInitf61b36ebe6d4f7f031ff9340d1b70f36', 'loadClassLoader'));

        require __DIR__ . '/autoload_static.php';
        call_user_func(\Composer\Autoload\ComposerStaticInitf61b36ebe6d4f7f031ff9340d1b70f36::getInitializer($loader));

        $loader->register(true);

        return $loader;
    }
}
