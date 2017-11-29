<?php

namespace Tests\Feature;

use Tests\TestCase;
use Illuminate\Foundation\Testing\RefreshDatabase;

class WelcomeUsersTest extends TestCase
{
    /** @test */
    function it_welcomes_users_with_nickname()
    {
        $this->get('/saludo/dani/DK')
        	->assertStatus(200)
        	->assertSee('Bienvenido Dani, tu apodo es DK');
    }

    /** @test */
    function it_welcomes_users_without_nickname()
    {
        $this->get('/saludo/dani')
        	->assertStatus(200)
        	->assertSee('Bienvenido Dani');
    }
}
