<?php

use PHPUnit\Framework\TestCase;

class ExampleTest extends TestCase
{
	public function testTrue()
	{
		$this->assertTrue(true);
	}

	public function testFalse()
	{
		$var1 = false;
		$this->assertFalse($var1);
	}

	public function testEquals()
	{
		$soma = 5 + 5;
		$this->assertEquals($soma, "10");
	}

	public function testSame()
	{
		$soma = 5 + 5;
		$this->assertSame($soma, 10);
	}

	public function testArray()
	{
		$this->assertIsArray(['Roberto', 'Paulo']);
	}

	public function testBool()
	{
		$this->assertIsBool(true);
	}

	public function testInt()
	{
		$this->assertIsInt(7);
	}

	public function testString()
	{
		$this->assertIsString("Texto");
	}

	public function testEmpty()
	{
		$this->assertEmpty([]);
	}

	public function testCount()
	{
		$this->assertCount(2, ['Roberto', 'Paulo']);
	}

	public function testHasKey()
	{
		$this->assertArrayHasKey('cor', ['cor' => 'azul']);
	}

}
