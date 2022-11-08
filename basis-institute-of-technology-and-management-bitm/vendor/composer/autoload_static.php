<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInitd28fe52453ef9c3f1cd4d283e6228d4c
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
            0 => __DIR__ . '/../..' . '/app',
        ),
    );

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInitd28fe52453ef9c3f1cd4d283e6228d4c::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInitd28fe52453ef9c3f1cd4d283e6228d4c::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInitd28fe52453ef9c3f1cd4d283e6228d4c::$classMap;

        }, null, ClassLoader::class);
    }
}