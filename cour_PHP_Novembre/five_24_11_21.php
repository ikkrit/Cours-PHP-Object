<?php

class Str {
    public static $striing;

    public static function upper($striing) {
        return mb_strtoupper($striing);
    }

    public static function lower($striing) {
        return mb_strtolower($striing);
    }

    public static function length($striing) {
        return mb_strlen($striing);
    }
}

echo Str::upper("toto est cool !").PHP_EOL;