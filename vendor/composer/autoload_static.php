<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInitc957c1b9b560d848641228cf1aa7d0cc
{
    public static $prefixesPsr0 = array (
        'O' => 
        array (
            'Openpay' => 
            array (
                0 => __DIR__ . '/..' . '/openpay/sdk',
            ),
        ),
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixesPsr0 = ComposerStaticInitc957c1b9b560d848641228cf1aa7d0cc::$prefixesPsr0;

        }, null, ClassLoader::class);
    }
}
