<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit5779f545d693e83f8d99cd6c4aa089c0
{
    public static $prefixLengthsPsr4 = array (
        't' => 
        array (
            'think\\' => 6,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'think\\' => 
        array (
            0 => __DIR__ . '/..' . '/topthink/think-image/src',
        ),
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit5779f545d693e83f8d99cd6c4aa089c0::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit5779f545d693e83f8d99cd6c4aa089c0::$prefixDirsPsr4;

        }, null, ClassLoader::class);
    }
}
