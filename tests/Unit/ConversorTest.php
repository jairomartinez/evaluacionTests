<?php

namespace Tests\Unit;

use App\Helpers\Conversor;
use PHPUnit\Framework\TestCase;
use function PHPUnit\Framework\assertTrue;

class ConversorTest extends TestCase
{
    /**
     * Prueba de la funcion Convertir Farenheit a Centigrados.
     * Con datos válidos
     * @return void
     */
    public function test_convertirFarenheitACentigrados()
    {
        $c = Conversor::convertirFarenheitACentigrados(50);
        $this->assertTrue($c == 10);
    }


    /**
     * prieba de conversion de centigrados a farenheit
     * con datos validos
     * @return void
     */
    public function test_convertirCentigradosAFarenheit()
    {
        $f = Conversor::convertirCentigradosAFarenheit(10);
        $this->assertTrue($f == 50);
    }

    /**
     * prueba de convertir de centigrados a Kelvin
     * con datos válidos
     * @return void
     */
    public function test_convertirCentigradosAKelvin()
    {
        $k = Conversor::convertirCentigradosAKelvin(0);
        $this->assertTrue($k == 273.15);
    }

    /**
     * Prueba para convertir de Kelvin a Centigrados
     * con datos válidos
     * @return void
     */
    public function test_convertirKelvinACentigrados()
    {
        $c = Conversor::convertirKelvinACentigrados(273.15);
        $this->assertTrue($c == 0);
    }


    /**
     * Prueba para convertir de centigrados a Farenheit
     * con valor por debajo del cero absoluto
     * @return void
     */
    public function test_convertirCentigradosAFarenheitCeroAbsoluto()
    {
        $f = Conversor::convertirCentigradosAFarenheit(-280);
        $this->assertTrue($f == false);
    }

    public function test_convertirCentigradosAFarenheitConCadena()
    {
        $f = Conversor::convertirCentigradosAFarenheit("hola");
        $this->assertFalse($f);
    }

    /**
     * Prueba con valores pequeños para Conversion de Centigrados a farenheit
     * @return void
     */
    public function test_convertirCentigradosAFarenheitConValoresPequenio()
    {
        $f = Conversor::convertirCentigradosAFarenheit(10.004);
        $this->assertTrue($f == 50.01);
    }

    public function test_convertirCentigradosAFarenheitSinParametro()
    {
        $f = Conversor::convertirCentigradosAFarenheit();
        $this->assertFalse($f);
    }

    public function test_convertirCentigradosAFarenheitNumeroEnCadena()
    {
        $f = Conversor::convertirCentigradosAFarenheit("10");
        $this->assertTrue($f == 50);
    }


    public function test_convertirCentigradosAFarenheitNumeroGrande()
    {
        $f = Conversor::convertirCentigradosAFarenheit(1000000);
        $this->assertTrue($f == 1800032);
    }


    /************************************************************************
     *                                                                      *
     *                        Los 1 convertirFarenheitACentigrados          *
     *                                                                      *
     ************************************************************************/

    public function test_convertirFarenheitACentigradosCeroAbsoluto(){
        $c = Conversor:: convertirFarenheitACentigrados(-460);
        $this->assertTrue($c == false);
    }

    public function test_convertirFarenheitACentrigradosCaracter(){
        $c = Conversor:: convertirFarenheitACentigrados("Hola");
        $this->assertFalse($c);
    }

    public function test_convertirFarenhitACentigradosSinParametro(){
        $c = Conversor:: convertirFarenheitACentigrados();
        $this->assertFalse($c);

    }

    public function test_convertirFarenhitACentigradosDosArgumentos(){
        $c = Conversor:: convertirFarenheitACentigrados(23, 23);
        $this->assertFalse($c);

    }


    public function test_convertirFarenhitACentigradosConGrande(){
        $c = Conversor:: convertirFarenheitACentigrados(3000000000);
        $this->assertTrue($c == 5400000032);

    }
    public function test_convertirFarenhitACentigradosNumeroEnCadena()
    {
        $c = Conversor:: convertirFarenheitACentigrados("50");
        $this->assertTrue($c == 10);
    }

    /************************************************************************
     *                                                                      *
     *                        Los 2 convertirCentigradosAKelvin          *
     *                                                                      *
     ************************************************************************/
    public function test_convertirdeCentigradosaKelvinConCadena()
    {
        $k = Conversor::convertirCentigradosAKelvin("lengusjr");
        $this->assertFalse($k);
    }
    public function test_convertirCentigradosAKelvinVacio(){
        $c = Conversor::convertirCentigradosAKelvin();
        $this->assertFalse($c);
    }

    public function test_convertirCentigradosAKelvinNumeroGrande(){
        $c = Conversor::convertirCentigradosAKelvin(1000000);
        $this->assertTrue($c== 1000273.15);
    }

    public function test_convertirCentigradosAKelvinNumeroEnCadena(){
        $k = Conversor::convertirCentigradosAKelvin("10");
        $this->assertTrue($k==283.15);
    }
    public function test_convertirCentigradosAKelvinCeroAbsoluto(){
        $k = Conversor::convertirCentigradosAKelvin(-280);
        $this->assertFalse($k);
    }

    public function test_convertirCentigradosAKelvinValorNegativo(){
        $k = Conversor::convertirCentigradosAKelvin(-465);
        $this->assertFalse($k);
    }
    /************************************************************************
     *                                                                      *
     *                        Los 3 convertirKelvinACentigrados          *
     *                                                                      *
     ************************************************************************/
    public function test_convertirKelvinAcentigradosConCadena()
    {
        $k = Conversor::convertirKelvinACentigrados("Gracias");
        $this->assertFalse($k);
    }

    public function test_convertirKelvinACentigradosNumPequenio(){
        $c = Conversor::convertirKelvinACentigrados(5.105);
        $this -> assertTrue($c ==-268.04);
    }

    public function test_convertirKelvinACentigradosNumeroIgual(){
        $c = Conversor:: convertirKelvinACentigrados(273.15);
        $this -> asserTrue($c == 0);
    }

    public function test_convertirKelvinACentigradosNumeroCadena(){
        $c = Conversor::convertirKelvinACentigrados("50");
        $this -> assertTrue($c == -223.15);
    }

    public function test_convertirKelvinACentigradosCeroAbsluto(){
        $c = Conversor::convertirKelvinACentigrados( -50);
        $this -> assertFalse($c);
    }


}
