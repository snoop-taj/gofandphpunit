<?php

namespace GOF\Test\Structural\Decorator;

use GOF\Structural\Decorator\BookTitleExclaimDecorator;

class BookTitleExclaimDecoratorTest extends \PHPUnit_Framework_TestCase
{

    private $bted;
    private $bookTitleTest;

    public function setUp()
    {
        $this->bookTitleTest = new BookTitleDecoratorTest();
        $this->bookTitleTest->setUp();
        $this->bted = new BookTitleExclaimDecorator($this->bookTitleTest->btd);
    }

    public function testGetBookTitleWithExclaimMark()
    {
        $this->bted->exclaimTitle();
        $this->assertEquals("!GOF For Dummies!", $this->bookTitleTest->btd->showTitle());
    }
}
