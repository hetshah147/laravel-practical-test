<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class FutureEventTest extends TestCase
{
    /**
     * A basic feature test example.
     *
     * @return void
     */
    public function test_example()
    {
        $response = $this->get('/futureevents');
        $response->assertStatus(200)
            ->assertJsonCount(2)
            ->assertJsonPath('0.name', 'Laravel convention 2021')
            ->assertJsonPath('0.workshops.0.name', 'The new Eloquent - load more with less')
            ->assertJsonPath('0.workshops.1.name', 'AutoEx - handles exceptions 100% automatic')
            ->assertJsonPath('1.name', 'React convention 2021')
            ->assertJsonPath('1.workshops.0.name', '#NoClass pure functional programming')
            ->assertJsonPath('1.workshops.1.name', 'Navigating the function jungle');
    }
}
