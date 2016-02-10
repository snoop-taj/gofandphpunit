<?php

namespace GOF\Test\Structural\Decorator;

use GOF\Structural\Decorator\BookTitleDecorator;

class BookTitleDecoratorTest extends \PHPUnit_Framework_TestCase
{

    public $btd;
    public $bookTest;
    
    public function setUp()
    {
        $this->bookTest = new BookTest();
        $this->bookTest->setUp();
        $this->btd = new BookTitleDecorator($this->bookTest->book);
    }

    public function testGetBookTitle()
    {
        $this->assertEquals("GOF For Dummies", $this->btd->showTitle());
    }
}
