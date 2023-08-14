<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

class PackageControllerTest extends TestCase
{
    use RefreshDatabase;

    public function test_invalid_create_package()
    {
        $response = $this->post('/api/packages',
            headers: [
                'Accept' => 'application/json',
                'Content-Type' => 'application/json',
            ]
        );

        $response->assertStatus(422);
    }

    public function test_valid_create_package()
    {
        $this->withoutExceptionHandling();
        
        $data = [
            'tracking_code' => '123456789',
            'name' => 'Teste',
        ];

        $response = $this->postJson('/api/packages',
            $data,
        );

        $response->assertStatus(201);
    }

    public function test_throw_error_when_code_already_exists()
    {
        $data = [
            'tracking_code' => '123456789',
            'name' => 'Teste',
        ];

        $response = $this->postJson('/api/packages',
            $data,
        );

        $response->assertStatus(201);

        $response = $this->postJson('/api/packages',
            $data,
        );

        $response->assertStatus(422);
    }
}
