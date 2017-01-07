<?php

use Faker\Factory;

class Faker_Supported_TestCase extends PHPUnit_Framework_TestCase
{
    /** @var Factory */
    protected $faker;

    protected function setUp()
    {
        parent::setUp();

        $this->faker = Factory::create();
    }
}