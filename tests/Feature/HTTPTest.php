<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Tests\TestCase;
use Illuminate\Support\Facades\Route;
use Illuminate\Foundation\Testing\WithoutMiddleware;
use Illuminate\Testing\Assert;


class HTTPTest extends TestCase
{
    use WithoutMiddleware;
    use RefreshDatabase;




    /**
     * A basic feature test example.
     */
    public function testExample()
    {
        $routes = [
            ["path" => "/", "method" => "get"],
            ["path" => "/addPun", "method" => "post"],
            ["path" => "/admin", "method" => "get"],
            ["path" => "/admin", "method" => "post"],
            ["path" => "/adminLogin", "method" => "get"],
            ["path" => "/adminLogin", "method" => "post"],
            ["path" => "/logout", "method" => "post"]
        ];


        foreach ($routes as $route) {
            if ($route["method"] === "get") $response = $this->get($route["path"]);
            if ($route["method"] === "post") $response = $this->post($route["path"]);
            //Should return error message with statusCode rather than failed to assert true == false
            Assert::assertTrue($response->getStatusCode() === 302 || $response->getStatusCode() === 200);
        }
    }
}