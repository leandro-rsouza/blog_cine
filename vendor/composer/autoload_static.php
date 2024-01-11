<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInitf61b36ebe6d4f7f031ff9340d1b70f36
{
    public static $prefixLengthsPsr4 = array (
        'a' => 
        array (
            'app\\' => 4,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'app\\' => 
        array (
            0 => __DIR__ . '/../..' . '/app',
        ),
    );

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInitf61b36ebe6d4f7f031ff9340d1b70f36::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInitf61b36ebe6d4f7f031ff9340d1b70f36::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInitf61b36ebe6d4f7f031ff9340d1b70f36::$classMap;

        }, null, ClassLoader::class);
    }
}
