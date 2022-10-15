<?php

namespace Sujit\AlgoPractice\Helpers;

use Sujit\AlgoPractice\Characters;

class SumRepeatedCharactersHelper
{
    public static function process($str, $pattern = null)
    {
        $characters = new Characters();
        $callback = [self::class, 'callback'];
        $first = $str;
        $last = $characters->shrink($first, str_split($first), $pattern, $callback);
        while($first !== $last) {
            $first = $last;
            $last = $characters->shrink($first, str_split($first), $pattern, $callback);
        }
        return $last;
    }

    public static function callback($matches): string
    {
        return $matches[1] * substr_count($matches[0], $matches[1]);
    }
}