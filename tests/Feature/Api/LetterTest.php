<?php

namespace Tests\Feature\Api;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class LetterTest extends TestCase
{
    public function test_CheckIfReturnCorrectLetterWithApi() {
        $data = ['letter' => 'G'];

        $response = $this->getJson(route('index', ['number' => 77430010]));
        
        $response->assertStatus(200)
            ->assertJsonFragment($data);
    }

    public function test_CheckIfReturnErrorWithApi() {
        $data = ['message' => 'El dato introducido es incorrecto'];

        $response = $this->getJson(route('index', ['number' => "esto debe dar error"]));
        
        $response->assertStatus(400)
            ->assertJsonFragment($data);
    }
}
