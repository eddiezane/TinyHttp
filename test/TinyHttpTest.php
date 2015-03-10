<?php

use \Mockery as m;

class TinyHttpTest extends PHPUnit_Framework_TestCase
{
    public function tearDown()
    {
      m::close();
    }

    public function testTinyHttpConstructor()
    {
        $client = new \TinyHttp('http://api.giphy.com');
        $this->assertEquals('TinyHttp', get_class($client));
    }
}

