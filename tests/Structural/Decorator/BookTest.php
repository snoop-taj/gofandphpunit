<?php

namespace GOF\Test\Structural\Decorator;

use GOF\Structural\Decorator\Book;

class BookTest extends \PHPUnit_Framework_TestCase
{

    public $book;

    public function setUp()
    {
        $this->book = new Book("GOF For Dummies", "Snoop");
    }

    public function testGetTitle()
    {
        $this->assertEquals("GOF For Dummies", $this->book->getTitle());
    }

    public function testGetAuthor()
    {
        $this->assertEquals("Snoop", $this->book->getAuthor());
    }

    public function testGetTitleAndAuthor()
    {
        $this->assertEquals("GOF For Dummies by Snoop", $this->book->getTitleAndAuthor());
    }
}
