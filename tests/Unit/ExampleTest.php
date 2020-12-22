<?php

/*
 * Ce fichier est la propriété de l8 (c) 2020
 */

namespace Tests\Unit;

use PHPUnit\Framework\TestCase;

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
    // $this->assertTrue(true);
    $data   = [10, 20, 30];
    $result = array_sum($data);
    $this->assertSame(60, $result);
  }
}
