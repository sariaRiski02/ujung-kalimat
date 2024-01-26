<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class PageTest extends TestCase
{
    public function test_1_Page()
    {
        $this->get('/')
            ->assertViewIs("banner.index");

        $this->get('/beranda')
            ->assertViewIs("home.index");

        $this->get('/blog')
            ->assertViewIs("post.index");

        $this->get('/kontak')
            ->assertViewIs('contact.index');

        $this->get('/tentang')
            ->assertViewIs('about.index');

        $this->get('/signin')
            ->assertViewIs('signin.index');

        $this->get('/signup')
            ->assertViewIs('signup.index');

        $this->get('/penulis')
            ->assertViewIs('author.index');

        $this->get('/kategori')
            ->assertViewIs('categories.index');

        $this->get('/profil')
            ->assertViewIs('profil.index');

        $this->get('/user')
            ->assertViewIs('writer.index');

        $this->get('/nulis')
            ->assertViewIs('writePage.index');
    }
}
