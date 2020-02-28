<?php namespace App\Helpers;

class Numbering{

    public static function numberToAlphabet($number)
    {
        $alphabets = range('a', 'z');
        return isset($alphabets[$number]) ? $alphabets[$number] : $number;
    }

    public static function alphabetToNumber($alphabet)
    {
        $alphabets = range('a', 'z');
        $number = array_search(strtolower($alphabet), $alphabets);
        return $number ? $number : 0;
    }
}