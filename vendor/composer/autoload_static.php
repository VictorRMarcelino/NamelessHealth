<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit80c0e7698ff07db78339ef1889b1d8a2
{
    public static $prefixLengthsPsr4 = array (
        's' => 
        array (
            'src\\' => 4,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'src\\' => 
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
            $loader->prefixLengthsPsr4 = ComposerStaticInit80c0e7698ff07db78339ef1889b1d8a2::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit80c0e7698ff07db78339ef1889b1d8a2::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit80c0e7698ff07db78339ef1889b1d8a2::$classMap;

        }, null, ClassLoader::class);
    }
}
