<?php

use \Mockery as m;

class TinyHttpTest extends PHPUnit_Framework_TestCase
{
   public $VERSION = '0.2.0';

    public function tearDown()
    {
      m::close();
    }

    public function testTinyHttpConstructor()
    {
        $client = new \TinyHttp('http://api.giphy.com');
        $this->assertEquals('TinyHttp', get_class($client));
    }

    public function testVersion()
    {
      $this->assertEquals(json_decode(file_get_contents('./composer.json'))->version, $this->VERSION);
      $this->assertEquals(json_decode(file_get_contents('./composer.json'))->version, TinyHttp::VERSION);
    }
}

