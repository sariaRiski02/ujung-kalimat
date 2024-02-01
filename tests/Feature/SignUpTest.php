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
            'email' => 'coba002@gmail.com',
            'password' => 'rahasia'
        ]);

        $response->assertRedirect('/signin');
    }

    public function testSignupFails()
    {

        // ketika password kosong
        $this->post('/signup', [
            'name' => 'haikal',
            'email' => 'haikal_takapesi@gmail.com',
            'password' => ''
        ])->assertRedirect('/signup')
            ->assertSessionHasErrors(['password' => 'Kolom password harus diisi.']);


        // ketika nama kosong

        $this->post('/signup', [
            'name' => '',
            'email' => 'haikal_takapesi@gmail.com',
            'password' => 'rahasia'
        ])->assertRedirect('/signup')
            ->assertSessionHasErrors(['name' => 'Kolom name harus diisi.']);

        // ketika email kosong
        $this->post('/signup', [
            'name' => 'rahasia',
            'email' => '',
            'password' => 'rahasia'
        ])->assertRedirect('/signup')
            ->assertSessionHasErrors(['email' => 'Kolom email harus diisi.']);


        // ketika semuanya kosong
        $this->post('/signup', [
            'name' => '',
            'email' => '',
            'password' => ''
        ])->assertRedirect('/signup')
            ->assertSessionHasErrors([
                'name' => 'Kolom name harus diisi.',
                'email' => 'Kolom email harus diisi.',
                'password' => 'Kolom password harus diisi.'
            ]);

        // ketika email tidak valid 

        $this->post('/signup', [
            'name' => 'sahrul',
            'email' => 'rahasia',
            'passoword' => 'rahasia'

        ])->assertRedirect('/signup')
            ->assertSessionHasErrors([
                'email' => 'Format email tidak valid.'
            ]);
    }
}
