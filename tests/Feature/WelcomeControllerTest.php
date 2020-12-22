<?php

/*
 * Ce fichier est la propriété de l8 (c) 2020
 */

namespace Tests\Feature;

use App\Services\Livre;
use Tests\TestCase;

/**
 * @internal
 * @coversNothing
 */
final class WelcomeControllerTest extends TestCase
{
  public function testIndex()
  {
    // Création Mock
    $this->mock(Livre::class, function ($mock) {
        $mock->shouldReceive('getTitle')->andReturn('Titre Du Livre');
    });

    // Action
    $response = $this->get('welcome');

    // Assertions
    $response->assertSuccessful();
    $response->assertViewHas('titre', 'Titre Du Livre');
  }
}
