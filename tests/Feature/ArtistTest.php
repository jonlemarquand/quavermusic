<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class ArtistTest extends TestCase
{
    /**
     * A basic feature test example.
     *
     * @return void
     */
    public function test_create_artist_by_form_input()
    {
        // 1. check is admin user
        // 2. is information correct
        // 3. return correct response
        $response = $this->post('/');

        $response->assertStatus(200);
    }
}
