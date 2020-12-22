<?php

/*
 * Ce fichier est la propriété de l8 (c) 2020
 */

namespace Tests\Unit;

use Illuminate\Support\Str;
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
    // $data   = [10, 20, 30];
    // $result = array_sum($data);
    // $this->assertSame(60, $result);
    $data = 'Je suis petit';
    $this->assertTrue(Str::startsWith($data, 'Je'));
    $this->assertFalse(Str::startsWith($data, 'Tu'));
    $this->assertSame(Str::startsWith($data, 'Tu'), false);
    $this->assertStringStartsWith('Je', $data);
    $this->assertStringEndsWith('petit', $data);
  }
}
