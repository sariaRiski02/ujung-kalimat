<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class MiddlewareTest extends TestCase
{
    public function test_invalidMiddleware()
    {
        $this->get('/nulis')
            ->assertRedirect('/signin');
    }

    public function test_validMiddleware()
    {
        $this->withCookie('IsMember', 'true')
            ->get('/nulis')
            ->assertStatus(200);
    }
}
