<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class SignUpTest extends TestCase
{
    public function testSignupPassed()
    {

        $response = $this->post('/signup', [
            'name' => 'riski',
            'email' => 'mrizkisaria@gmail.com',
            'password' => 'rahasia'
        ]);

        $response->assertStatus(200)
            ->assertSeeText('berhasil');
    }

    public function testSignupFails()
    {
        $response = $this->post('/signup', [
            'name' => 'saria',
            'email' => 'haikal_takapesi@gmail.com',
            'password' => ''
        ]);
        $response->assertStatus(200)->assertSeeText('tidak berhasil');
    }
}
