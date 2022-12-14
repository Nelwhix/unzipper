<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInita0222d95b5c80e9616d5b57abeaf492c
{
    public static $prefixLengthsPsr4 = array (
        'N' => 
        array (
            'Nelwhix\\PhpArchiveTool\\' => 23,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Nelwhix\\PhpArchiveTool\\' => 
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
            $loader->prefixLengthsPsr4 = ComposerStaticInita0222d95b5c80e9616d5b57abeaf492c::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInita0222d95b5c80e9616d5b57abeaf492c::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInita0222d95b5c80e9616d5b57abeaf492c::$classMap;

        }, null, ClassLoader::class);
    }
}
