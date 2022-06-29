<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit16ebdb0b8ab859dc7850e29ee89b5912
{
    public static $prefixLengthsPsr4 = array (
        'L' => 
        array (
            'Luandias\\Echomvc\\' => 17,
        ),
        'C' => 
        array (
            'Core\\' => 5,
        ),
        'A' => 
        array (
            'App\\' => 4,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Luandias\\Echomvc\\' => 
        array (
            0 => __DIR__ . '/../..' . '/public',
        ),
        'Core\\' => 
        array (
            0 => __DIR__ . '/../..' . '/Core',
        ),
        'App\\' => 
        array (
            0 => __DIR__ . '/../..' . '/App',
        ),
    );

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit16ebdb0b8ab859dc7850e29ee89b5912::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit16ebdb0b8ab859dc7850e29ee89b5912::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit16ebdb0b8ab859dc7850e29ee89b5912::$classMap;

        }, null, ClassLoader::class);
    }
}
