<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Symfony\Component\HttpKernel\UriSigner;
use Tests\TestCase;


class LoginTest extends TestCase
{
    use RefreshDatabase;
    /**
     * A basic feature test example.
     */


    public function test_view_login_form(): void
    {
        $response = $this->get('/adminLogin');
        $response->assertSeeText('Email');
        $response->assertStatus(200);
    }

    public function test_login_form(): void
    {
        $user = User::create(['name' => 'Dali', 'email' => 'test@yrgo.se', 'password' => Hash::make('123')]);

        //$this->followingRedirects();
        $response = $this->post('/adminLogin', ['email' => $user->email, 'password' => '123']);
        //$response->assertSeeText($user->name);
        $response->assertRedirectToRoute('admin');
    }
}