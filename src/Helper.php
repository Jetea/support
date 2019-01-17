<?php

namespace Jetea\Support;

class Helper
{
    public static function dd(...$vars)
    {
        foreach ($vars as $v) {
            var_dump($v);
        }

        die(1);
    }
}
