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
    {  $response=$this->withoutExceptionHandling();
        $response = $this->get('/login');

        $response->assertStatus(200);
    }
    /**
     * A basic feature test example.
     *
     * @return void
     */
    public function login_test()
    {
        $user = ['email' => 'kocsisaszlo633@gmail.com',
        'password' => 'valami15555234'];

        $response = $this->post('/login',$user);
        

        $response->assertStatus(200);

    }
}
