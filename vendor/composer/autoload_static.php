<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit2083d84e1a1d9df68d90e44678a661af
{
    public static $prefixLengthsPsr4 = array (
        'M' => 
        array (
            'MVC\\' => 4,
        ),
        'D' => 
        array (
            'Dcblogdev\\PdoWrapper\\' => 21,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'MVC\\' => 
        array (
            0 => __DIR__ . '/../..' . '/app',
        ),
        'Dcblogdev\\PdoWrapper\\' => 
        array (
            0 => __DIR__ . '/..' . '/dcblogdev/pdo-wrapper/src',
        ),
    );

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit2083d84e1a1d9df68d90e44678a661af::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit2083d84e1a1d9df68d90e44678a661af::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit2083d84e1a1d9df68d90e44678a661af::$classMap;

        }, null, ClassLoader::class);
    }
}
