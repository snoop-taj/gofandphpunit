<?php

namespace GOF\Test\Structural\Flyweight;

use GOF\Structural\Flyweight\FlyweightFactory;

class FlyweightFactoryTest extends \PHPUnit_Framework_TestCase
{

    public $ff;
    public $ffb1;
    public $ffb2;
    public $ffb3;

    public function setUp()
    {
        $this->ff = new FlyweightFactory();
        $this->ffb1 = $this->ff->getBook(1);
        $this->ffb2 = $this->ff->getBook(1);
        $this->ffb3 = $this->ff->getBook(2);
    }

    public function testGetFirstBookAuthor()
    {
        $this->assertEquals("Snoop", $this->ffb1->getAuthor());
    }

    public function testGetSecondBookAuthor()
    {
        $this->assertEquals("Taj", $this->ffb3->getAuthor());
    }

    public function testFlyweightBookAreSame()
    {
        $this->assertEquals($this->ffb1, $this->ffb2);
    }

    public function testFlyweightBookAreDifferent()
    {
        $this->assertFalse($this->ffb2 == $this->ffb3);
    }
}
