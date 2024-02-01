<?php

namespace Tests\Feature;

use App\Http\Controllers\SignInController;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Tests\TestCase;

class LoginTest extends TestCase
{
    public function testLoginPassed()
    {
        // ketika benar
        $this->post('/signin', [
            'email' => 'mrizkisaria002@gmail.com',
            'password' => 'rahasia'
        ])->assertRedirect('/beranda');
    }


    //  belum selesai
    public function testLoginFailed()
    {
        // ketika password kosong
        $this->post('/signin', [
            'email' => 'mrizkisaria002@gmail.com',
            'password' => ''
        ])->assertRedirect('/signin')
            ->assertSessionHasErrors(['password' => 'Kolom password harus diisi']);

        // ketika email kosong
        $this->post('/signin', [
            'email' => '',
            'password' => 'rahasia'
        ])->assertRedirect('/signin')
            ->assertSessionHasErrors(['email' => 'Kolom email harus diisi']);

        // ketika semuanya kosong
        $this->post('/signin', [
            'email' => '',
            'password' => ''
        ])->assertRedirect('/signin')
            ->assertSessionHasErrors([
                'email' => 'Kolom email harus diisi',
                'password' => 'Kolom password harus diisi'
            ]);

        // ketika password salah
        $this->post('/signin', [
            'email' => 'mrizkisaria002@gmail.com',
            'password' => "salah"
        ])->assertRedirect('/signin')
            ->assertSessionHas(['info' => 'Email atau Password salah']);


        // ketika email salah
        $this->post('/signin', [
            'email' => 'mrizkisaria123@gmail.com',
            'password' => 'rahasia'
        ])->assertSessionHas(['info' => 'Email atau Password salah']);
    }
}
