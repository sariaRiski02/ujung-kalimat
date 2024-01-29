<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class CookieTest extends TestCase
{
    public function testCookie()
    {

       

        // benar
        $this->withCookie('IsMember', 'true')
            ->get('/nulis')->assertStatus(200);
    }

    public function testHasNotCookie()
    {
        // salah
        $this->get('/nulis')->assertRedirect('/signin');
    }
}
