<?php

namespace App\Http\Controllers;

use App\Helpers\Conversor;
use Illuminate\Http\Request;

class TemperaturaController extends Controller
{
    public function MostrarFarenheintACentigrados(){
        return view('FarenheitACentígrados');
    }

    public function ConvertirFarenheintACentigrados(Request $request){
        $farenheit = $request->input('farenheit');
        $c = Conversor::convertirFarenheitACentigrados($farenheit);
        return view('FarenheitACentígrados', ['c' => $c]);
    }

    public function MostrarCentigradosAFahrenheit(){
        return view('CentigradosAFahrenheit');
    }

    public function ConvertirCentigradosAFahrenheit(Request $request){
        $centigrados = $request->input('centigrados');
        $f = Conversor::convertirCentigradosAFarenheit($centigrados);
        return view('CentigradosAFahrenheit', ['f' => $f]);
    }

    public function MostrarCentigradosAKelvin(){
        return view('CentigradosAKelvin');
    }
    public function ConvertirCentigradosAKelvin(Request $request){
        $c = $request->input('centigrados');
        $k = Conversor::convertirCentigradosAKelvin($c);
        return view('CentigradosAKelvin', ['k' => $k]);
    }
}
