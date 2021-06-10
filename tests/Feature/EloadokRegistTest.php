<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class EloadokRegistTest extends TestCase
{
    /**
     * A basic feature test example.
     *
     * @return void
     */
    public function test_example()
    {
        $response = $this->get('/regist');

        $response->assertStatus(200);
    }
     /**
     * A valid user can be registered.
     *
     * @return void
     */
    public function registtest()
    {
        $user = ['nev' => 'Nev',
        'fokozat' => 'Dr',
        'intezmeny' => 'Sapientia',
        'eloadascim' => 'cim',
        'email' => 'valami@gmail.com',
        'kivonat' => 'kivonat helye ',
        'szekcio_id' => '1'];

        $response = $this->post('regist',$user);
        

        $response->assertStatus(200);
    }
}
