<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInitc32a80fd1b09988215e46a24a92d3870
{
    public static $prefixLengthsPsr4 = array (
        'W' => 
        array (
            'WillWashburn\\' => 13,
        ),
        'S' => 
        array (
            'Symfony\\Component\\Yaml\\' => 23,
        ),
        'N' => 
        array (
            'Noodlehaus\\' => 11,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'WillWashburn\\' => 
        array (
            0 => __DIR__ . '/..' . '/willwashburn/stream/src',
        ),
        'Symfony\\Component\\Yaml\\' => 
        array (
            0 => __DIR__ . '/..' . '/symfony/yaml',
        ),
        'Noodlehaus\\' => 
        array (
            0 => __DIR__ . '/..' . '/hassankhan/config/src',
        ),
    );

    public static $prefixesPsr0 = array (
        'S' => 
        array (
            'Sunra\\PhpSimple\\HtmlDomParser' => 
            array (
                0 => __DIR__ . '/..' . '/sunra/php-simple-html-dom-parser/Src',
            ),
        ),
    );

    public static $classMap = array (
        'FasterImage\\Exception\\InvalidImageException' => __DIR__ . '/..' . '/fasterimage/fasterimage/src/FasterImage/Exception/InvalidImageException.php',
        'FasterImage\\ExifParser' => __DIR__ . '/..' . '/fasterimage/fasterimage/src/FasterImage/ExifParser.php',
        'FasterImage\\FasterImage' => __DIR__ . '/..' . '/fasterimage/fasterimage/src/FasterImage/FasterImage.php',
        'FasterImage\\ImageParser' => __DIR__ . '/..' . '/fasterimage/fasterimage/src/FasterImage/ImageParser.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInitc32a80fd1b09988215e46a24a92d3870::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInitc32a80fd1b09988215e46a24a92d3870::$prefixDirsPsr4;
            $loader->prefixesPsr0 = ComposerStaticInitc32a80fd1b09988215e46a24a92d3870::$prefixesPsr0;
            $loader->classMap = ComposerStaticInitc32a80fd1b09988215e46a24a92d3870::$classMap;

        }, null, ClassLoader::class);
    }
}
