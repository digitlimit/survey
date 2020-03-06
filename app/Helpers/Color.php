<?php namespace App\Helpers;

class Color{

    public static function random(){
        return '#' . str_pad(dechex(mt_rand(0, 0xFFFFFF)), 6, '0', STR_PAD_LEFT);
    }
}