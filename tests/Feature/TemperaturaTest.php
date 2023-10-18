<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class TemperaturaTest extends TestCase
{
    /**
     * A basic feature test example.
     */
    public function test_mostrarFormularioC2F(): void
    {
        $response = $this->get('/c2f');
        $response->assertStatus(200);
        $response->assertSeeText("Centígrados A Farenheit");
        $response->assertSee('name="centigrados"');
    }

    public function test_postAC2FValido() {
        $datos = [
            'centigrados'=>10,
        ];

        $response = $this->post('/c2f', $datos);
        $response->assertOk();
        $response->assertSeeText("50.00 grados farenheit");

    }
}
