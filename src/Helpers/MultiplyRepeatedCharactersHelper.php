<?php

namespace Sujit\AlgoPractice\Helpers;

use Sujit\AlgoPractice\Characters;

class MultiplyRepeatedCharactersHelper
{
    public static function process($str, $pattern = null)
    {
        $characters = new Characters();
        $callback = [self::class, 'callback'];
        return $characters->shrink($str, str_split($str), $pattern, $callback);
    }

    public static function callback($matches): string
    {
        return $matches[1] . '(x' . substr_count($matches[0], $matches[1]) . ')';
    }
}