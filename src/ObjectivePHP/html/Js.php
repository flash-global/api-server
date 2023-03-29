<?php

namespace Fei\ApiServer\ObjectivePHP\Html;

use Fei\ApiServer\ObjectivePHP\Html\Tag\Tag;

class Js
{
    static protected $files = [];

    public static function embed($src, $attributes = [])
    {
        self::$files[$src] = $attributes;
    }

    public static function dump()
    {
        echo '<!-- Embedded JavaScript files -->' . PHP_EOL;
        foreach (self::$files as $src => $attributes) {
            echo PHP_EOL;
            Tag::factory('script')
                ->addAttribute('src', $src)
                ->addAttribute('type', 'application/javascript')
                ->addAttributes($attributes)
                ->dump();
            Tag::factory('script')->close();
            echo PHP_EOL;
        }
        echo '<!-- End of embedded JavaScript files -->' . PHP_EOL;
    }

    public static function get()
    {
        return self::$files;
    }

    public static function clear()
    {
        self::$files = [];
    }

    public static function append($src, $attributes = [])
    {
        // remove any previous occurrence of the same file
        unset(self::$files[$src]);
        self::embed($src, $attributes);
    }

    public static function prepend($src, $attributes = [])
    {
        unset(self::$files[$src]);
        self::$files = array_merge([$src => $attributes], self::$files);
    }
}