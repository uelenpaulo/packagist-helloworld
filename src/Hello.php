<?php

namespace HelloWorld;

class Hello
{
    const VERSION = '1.1.5';

    public static function sayHello()
    {
        $version = self::VERSION;
        echo "$version: Hello You!" . PHP_EOL;
    }
}