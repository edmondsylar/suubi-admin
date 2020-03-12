<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit56663ab3e80803ddffcfde8f7c4f882b
{
    public static $prefixLengthsPsr4 = array (
        'D' => 
        array (
            'Ddeboer\\Imap\\' => 13,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Ddeboer\\Imap\\' => 
        array (
            0 => __DIR__ . '/..' . '/ddeboer/imap/src',
        ),
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit56663ab3e80803ddffcfde8f7c4f882b::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit56663ab3e80803ddffcfde8f7c4f882b::$prefixDirsPsr4;

        }, null, ClassLoader::class);
    }
}
