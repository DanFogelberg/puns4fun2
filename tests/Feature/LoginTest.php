<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class LoginTest extends TestCase
{
    /**
     * A basic feature test example.
     */


    public function test_view_login_form(): void
    {
        $response = $this->get('/adminLogin');
        $response->assertSeeText('Email');
        $response->assertStatus(200);
    }
}