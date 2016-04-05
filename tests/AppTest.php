<?php

class AppTest extends PHPUnit_Framework_TestCase
{
    protected $app;

    public function setUp()
    {
        $this->app = new App();
    }

    public function testIsTrue()
    {
        $this->assertTrue($this->app->isTrue());
    }

    public function testIsFalse()
    {
        $this->assertFalse($this->app->isFalse());
    }
}
