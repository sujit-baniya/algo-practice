<?php

namespace Sujit\AlgoPractice;

class Characters
{
    public $defaultRegex = '/({needle})(?:{needle})+/i';
    public $defaultNeedle = '{needle}';

    private function getRegexFromPlaceHolder($needle, $pattern, $placeholder)
    {
        return str_replace($placeholder, $needle, $pattern);
    }

    public function shrink($str, $needle, $pattern, $callback, $placeholder = null)
    {
        $placeholder = $placeholder ?? $this->defaultNeedle;
        $pattern = $pattern ?? $this->defaultRegex;
        if (is_array($needle)) {
            foreach ($needle as $n) {
                $str = $this->shrink($str, $n, $pattern, $callback, $placeholder);
            }
            return $str;
        }
        return preg_replace_callback($this->getRegexFromPlaceHolder($needle, $pattern, $placeholder), $callback, $str);
    }
}