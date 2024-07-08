<?php

namespace App\Helpers;

class Conversor
{
    public static function convertirFarenheitACentigrados($f) {
        return round( ($f - 32) / 1.8, 2);
    }

    public static function convertirCentigradosAFarenheit($c) {
        return round($c * 1.8 + 32, 2);
    }

    public static function convertirCentigradosAKelvin($c) {
        return round($c + 273.15, 2);
    }

    public static function convertirKelvinACentigrados($k) {
        return round( $k - 273.15, 2);
    }


}

