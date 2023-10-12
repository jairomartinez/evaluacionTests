<?php

namespace App\Helpers;

use function Termwind\renderUsing;

class Conversor
{
    public static function convertirFarenheitACentigrados($f) {
        return ($f - 32) / 1.8;
    }

    public static function convertirCentigradosAFarenheit($c) {
        return $c*1.8 + 32;
    }

    public static function convertirCentigradosAKelvin($c) {
        return $c + 273.15;
    }

    public static function convertirKelvinACentigrados($k) {
        return $k - 273.15;
    }

}
