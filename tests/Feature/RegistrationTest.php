<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;
use App\Models\User;
class RegistrationTest extends TestCase
{
    protected function successfulRegistrationRoute()
    {
        return route('home');
    }

    protected function registerGetRoute()
    {
        return route('register');
    }

    protected function registerPostRoute()
    {
        return route('register');
    }

    protected function guestMiddlewareRoute()
    {
        return route('home');
    }

    public function testUserCanViewARegistrationForm()
    {
        $response = $this->get($this->registerGetRoute());

        $response->assertSuccessful();
        $response->assertViewIs('auth.register');
    }
    public function testUserCannotViewARegistrationFormWhenAuthenticated()
    {
        $user = User::factory()->make();

        $response = $this->actingAs($user)->get($this->registerGetRoute());

        $response->assertRedirect($this->guestMiddlewareRoute());
    }
}
