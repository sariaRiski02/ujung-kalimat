<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class LoginTest extends TestCase
{
    public function testLoginPassed()
    {
        $this->get('/signin', [
            'email' => 'mrizkisaria002@gmail.com',
            'password' => 'mrsaria002'
        ])->assertStatus(200);
    }


    //  belum selesai
    public function testLoginFailed()
    {
        $this->get('/signn', [
            'email' => 'mrizkisaria002@gmail.com',
            'password' => ''
        ])->assertSeeText('');
    }
}
