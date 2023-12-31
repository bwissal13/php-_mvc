<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit82397fd9cfff4eca3592dd8a544d0c8f
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
            $loader->prefixLengthsPsr4 = ComposerStaticInit82397fd9cfff4eca3592dd8a544d0c8f::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit82397fd9cfff4eca3592dd8a544d0c8f::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit82397fd9cfff4eca3592dd8a544d0c8f::$classMap;

        }, null, ClassLoader::class);
    }
}
