<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit333e36150443388167ee7b694be6b4b0
{
    public static $prefixLengthsPsr4 = array (
        'T' => 
        array (
            'Tekrom\\Ecommerce\\' => 17,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Tekrom\\Ecommerce\\' => 
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
            $loader->prefixLengthsPsr4 = ComposerStaticInit333e36150443388167ee7b694be6b4b0::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit333e36150443388167ee7b694be6b4b0::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit333e36150443388167ee7b694be6b4b0::$classMap;

        }, null, ClassLoader::class);
    }
}
