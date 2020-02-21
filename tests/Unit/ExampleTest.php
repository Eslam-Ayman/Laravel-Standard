<?php

namespace Tests\Unit;

use Tests\TestCase;
use Illuminate\Foundation\Testing\RefreshDatabase;

// rather than extend TestCase you can extend PHPUnit_Framework_TestCase & by the way you can use it in the PHP native
class ExampleTest extends TestCase // PHPUnit_Framework_TestCase // TestCase
{
	/*
		// Unit testing

		* 	if you create a function and you don't beging with keyword "test", PHPUnit will not interpret that as a test that will be executed

		* if you ran vendor/bin/phpunit command it will trigger all of your tests .
		* but sometimes you want to trigger current class or testFunction 
		* so in this situation you can provide the path of the file or directory with this command
		* Example : vendor/bin/phpunit tests/unit   |or vendor/bin/phpunit tests/unit/ExampleTest.php
	*/
    /**
     * A basic test example.
     *
     * @return void
     */
    public function testBasicTest()
    {
        $this->assertTrue(true);
    }

    public function testProductName()
    {
    	// $product = new Product('name1');

        $this->assertEquals('name1', 'name1'/*$product->name()*/);
    }
}
