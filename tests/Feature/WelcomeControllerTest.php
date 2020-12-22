<?php

/*
 * Ce fichier est la propriété de l8 (c) 2020
 */

namespace Tests\Feature;

use Tests\TestCase;

/**
 * @internal
 * @coversNothing
 */
final class WelcomeControllerTest extends TestCase
{
  /**
   * A basic feature test example.
   *
   * @return void
   */
  public function testExample()
  {
    $response = $this->get('/');
    $response->assertStatus(200);
  }

  public function testIndex()
  {
    $response = $this->get('welcome');
    $response->assertStatus(200);
  }
}
