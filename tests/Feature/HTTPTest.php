<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Tests\TestCase;



class HTTPTest extends TestCase
{
    use RefreshDatabase;
    /**
     * A basic feature test example.
     */
    // public function test_admin(): void
    // {
    //     $admin = User::create(['name' => 'Dali', 'email' => 'test@test.se', 'password' => Hash::make('123')]);
    //     Auth::login($admin);
    //     $response = $this->get('/admin');
    //     $response->assertStatus(200);
    //     $response = $this->post('/admin');
    //     $response->assertStatus(200);
    // }
}