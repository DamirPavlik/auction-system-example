<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit9c5c94670259f04bed3e8f9f8361d148
{
    public static $prefixLengthsPsr4 = array (
        'D' => 
        array (
            'Damir\\AuctionSystemExercise\\' => 28,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Damir\\AuctionSystemExercise\\' => 
        array (
            0 => __DIR__ . '/../..' . '/src',
        ),
    );

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit9c5c94670259f04bed3e8f9f8361d148::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit9c5c94670259f04bed3e8f9f8361d148::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit9c5c94670259f04bed3e8f9f8361d148::$classMap;

        }, null, ClassLoader::class);
    }
}
