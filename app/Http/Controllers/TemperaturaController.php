<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TemperaturaController extends Controller
{
    //

    /**
     * Retorna el formulario para convertir de Farenheit a Centigrados
     *
     * @return void
     */
    public function mostrarFormF2C() {
        return view("f2c");
    }

    /**
     * Muestra el formulario para convertir de cenigrados a Kelvin
     *
     * @return view
     */
    public function mostrarFormC2K() {
        return view("c2k");
    }

    /**
     * Muestra el formulario para convertir de kelvin a centigrados
     * @return view
     */
    public function mostrarFormK2C() {
        return view("k2c");
    }

    /**
     * Muestra el formulario para convertir de centigrados a Kelvin
     * @return view
     */
    public function mostrarFormC2F() {
        return view("c2f");
    }
}
