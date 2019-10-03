<?php

namespace App;

class ArrayEntity
{
    public function plus1($array) {
        
        $array[array_keys($array)[1]]++;
        return $array;

    }
}
