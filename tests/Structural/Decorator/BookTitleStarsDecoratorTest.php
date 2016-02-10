<?php

namespace GOF\Test\Structural\Decorator;

use GOF\Structural\Decorator\BookTitleStarsDecorator;

class BookTitleStarsDecoratorTest extends \PHPUnit_Framework_TestCase
{
    
    private $btsd;
    private $bookTitleTest;

    public function setUp()
    {
        $this->bookTitleTest = new BookTitleDecoratorTest();
        $this->bookTitleTest->setUp();
        $this->btsd = new BookTitleStarsDecorator($this->bookTitleTest->btd);
    }

    public function testGetBookTitleWtihStarMark()
    {
        $this->btsd->starTitle();
        $this->assertEquals("GOF*For*Dummies", $this->bookTitleTest->btd->showTitle());
    }
}
