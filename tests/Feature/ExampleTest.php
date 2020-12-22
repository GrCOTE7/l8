<?php

/*
 * Ce fichier est la propriété de l8 (c) 2020
 */

namespace Tests\Feature;

use Tests\TestCase;

// En cli: php artisan test --testdox

/**
 * @internal
 * @coversNothing
 */
final class ExampleTest extends TestCase
{
  /**
   * A basic test example.
   *
   * @return void
   */
  public function testBasicTest()
  {
    $response = $this->get('/');
    $response->assertSuccessful();
    $response->assertStatus(200);
    $this->assertSame('coucou', $response->getContent());
  }
}
