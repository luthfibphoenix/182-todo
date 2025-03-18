<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class EnvironmentTest extends TestCase
{
    /**
     * A basic feature test example.
     */
    public function testEnv()
    {
        $appName = function () {
            return env('YOUTUBE');
        };

        self::assertEquals("Programmer Zaman Now", $appName());

        
    }
}