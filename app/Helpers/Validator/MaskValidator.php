<?php

namespace App\Helpers\Validator;

class MaskValidator
{
    public static function validate($serial, $mask){
        $regex = [
            "N" => "[0-9]",
            "A" => "[A-Z]",
            "a" => "[a-z]",
            "X" => "[A-Z0-9]",
            "Z" => "[-|_|@]"
        ];
        $maskChars = str_split($mask);
        $totalRegex = "/^";
        foreach ($maskChars as $char) {
            $totalRegex .= $regex[$char];
        }
        $totalRegex .= "/";
        if(preg_match($totalRegex, $serial) == 0){
            return false;
        }
        return true;
    }
}
