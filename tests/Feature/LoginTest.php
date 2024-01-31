<?php

namespace Tests\Feature;

use App\Http\Controllers\SignInController;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Http\Request;
use Tests\TestCase;

class LoginTest extends TestCase
{
    public function testLoginPassed()
    {
        $this->post('/signin', [
            'email' => 'mrizkisaria002@gmail.com',
            'password' => 'mrsaria002'
        ])->assertRedirect('/beranda');
    }


    //  belum selesai
    public function testLoginFailed()
    {
        // ketika password kosong
        $this->post('/signin', [
            'email' => 'mrizkisaria002@gmail.com',
            'password' => null
        ])->assertRedirect('/signin')->assertSessionHasErrors(['password' => 'Kolom password harus diisi']);


        // $this->post('/signin', [
        //     'email' => 'mrizkisaria002@gmail.com',
        //     'password' => 
        // ])->assertRedirect('/signin')->assertSessionHasErrors(['password' => 'Kolom password harus diisi']);
    }
}
