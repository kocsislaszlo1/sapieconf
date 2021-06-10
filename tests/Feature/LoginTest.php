<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class LoginTest extends TestCase
{
   /**
     * A basic feature test example.
     *
     * @return void
     */
    public function test()
    {
        $response = $this->get('/login');

        $response->assertStatus(200);
    }

    public function logintest()
    {
        $user = ['email' => 'kocsisaszlo633@gmail.com',
        'password' => 'valami1234'];

        $response = $this->post('login',$user);
        

        $response->assertStatus(200);

    }
}
