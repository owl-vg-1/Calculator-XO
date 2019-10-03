<?php

namespace App;

class Censor
{

    public $words;

    function __construct(array $words)
    {
        $this->words = $words;
    }

    function check(string $text) : array  {

        $array = [];

        foreach ($this->words as $value) {
            preg_match_all("/$value/i", $text, $matches);
            if(count($matches[0]) > 0) {
                $array[$value] = count($matches[0]);
            }
            
        }
        return $array;
    }

}
