<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit4e0f1ab370373e73c7e18b0613493b96
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
            $loader->prefixLengthsPsr4 = ComposerStaticInit4e0f1ab370373e73c7e18b0613493b96::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit4e0f1ab370373e73c7e18b0613493b96::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit4e0f1ab370373e73c7e18b0613493b96::$classMap;

        }, null, ClassLoader::class);
    }
}
