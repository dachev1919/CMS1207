<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInitd1768cc76776107296b14d6e39733b2d
{
    public static $prefixLengthsPsr4 = array (
        'a' => 
        array (
            'app\\' => 4,
        ),
        'R' => 
        array (
            'RedBeanPHP\\' => 11,
        ),
        'C' => 
        array (
            'CMS1207\\' => 8,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'app\\' => 
        array (
            0 => __DIR__ . '/../..' . '/app',
        ),
        'RedBeanPHP\\' => 
        array (
            0 => __DIR__ . '/..' . '/gabordemooij/redbean/RedBeanPHP',
        ),
        'CMS1207\\' => 
        array (
            0 => __DIR__ . '/..' . '/CMS1207/core',
        ),
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInitd1768cc76776107296b14d6e39733b2d::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInitd1768cc76776107296b14d6e39733b2d::$prefixDirsPsr4;

        }, null, ClassLoader::class);
    }
}
