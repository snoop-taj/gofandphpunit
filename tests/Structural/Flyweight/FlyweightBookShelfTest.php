<?php

namespace GOF\Test\Structural\Flyweight;

use GOF\Structural\Flyweight\FlyweightBookShelf;
use GOF\Structural\Flyweight\FlyweightFactory;

class FlyweightBookShelfTest extends \PHPUnit_Framework_TestCase
{

    private $fbs;
    private $ffTest;
    private $book1;
    private $book2;

    public function setUp()
    {
        $this->ffTest = new FlyweightFactoryTest();
        $this->ffTest->setUp();
        $this->fbs = new FlyweightBookShelf();
        $this->book1 = $this->fbs->addBook($this->ffTest->ffb1);
    }
    
    public function testFlyweightBookSelfGetBooks()
    {
        $this->assertEquals('Author: Snoop Title: Gof of Four for dummies', $this->fbs->showBooks());
    }
}
