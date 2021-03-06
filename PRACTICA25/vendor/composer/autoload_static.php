<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit6a7048c1561807cff443280077d9d0c0
{
    public static $files = array (
        '6035149c02307c252b21294d6cdf76cd' => __DIR__ . '/../..' . '/src/helpers.php',
    );

    public static $prefixLengthsPsr4 = array (
        'j' => 
        array (
            'jp\\' => 3,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'jp\\' => 
        array (
            0 => __DIR__ . '/../..' . '/src',
        ),
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit6a7048c1561807cff443280077d9d0c0::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit6a7048c1561807cff443280077d9d0c0::$prefixDirsPsr4;

        }, null, ClassLoader::class);
    }
}
