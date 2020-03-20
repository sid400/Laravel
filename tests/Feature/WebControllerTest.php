<?php

namespace Tests\Feature;

use Tests\TestCase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;

class WebControllerTest extends TestCase
{
    /**
     * A basic feature test example.
     *
     * @return void
     */
    public function testHome()
    {
        $response = $this->get('/');

        $response->assertStatus(200);
    }
    public function testHello()
    {
        $response = $this->get('/hello');

        $response->assertStatus(200);
    }
    public function testinfo()
    {
        $response = $this->get('/info');

        $response->assertStatus(200);
    }
    public function testtest()
    {
        $response = $this->get('/test');

        $response->assertStatus(200);
    }
    public function testAuth()
    {
        $response = $this->get('/Auth');

        $response->assertStatus(200);
    }
    public function testAdmin()
    {
        $response = $this->get('/admin');

        $response->assertStatus(200);
    }
    public function testAdmin_add()
    {
        $response = $this->get('/admin/add');

        $response->assertStatus(200);
    }
    public function testNews_categories()
    {
        $response = $this->get('/news/categories');

        $response->assertStatus(200);
    }
    public function testNews_card()
    {
        $response = $this->get('/news/card/1');

        $response->assertStatus(200);
        $response = $this->get('/news/card/2');

        $response->assertStatus(200);
    }
    
}
