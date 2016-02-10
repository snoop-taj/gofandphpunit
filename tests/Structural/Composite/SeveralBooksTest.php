<?php

namespace GOF\Test\Structural\Composite;

use GOF\Structural\Composite\SeveralBooks;
use GOF\Structural\Composite\OneBook;

class SeveralBooksTest extends \PHPUnit_Framework_TestCase
{
    private $book1;
    private $book2;
    private $book3;
    private $severalBooks;

    public function setUp()
    {
        $this->book1 = new OneBook("PHP for Dummies", "Snoop");
        $this->book2 = new OneBook("PHP for Advanced Dummies", "Zak");
        $this->book3 = new OneBook("PHP for Suppler Dummies", "Fool");
        $this->severalBooks = new SeveralBooks();
        $this->severalBooks->addBook($this->book1);
        $this->severalBooks->addBook($this->book2);
        $this->severalBooks->addBook($this->book3);
    }

    public function testAddingSeveralBooksReturnsCorrectBookCount()
    {
        $count = $this->severalBooks->addBook($this->book1);
        
        $this->assertEquals("4", $count);
        
    }

    public function testGettingBookInfoFromBook1()
    {
        $actual = $this->severalBooks->getBookInfo(1);
        $this->assertEquals("PHP for Dummies by Snoop", $actual);
    }

    public function testRemovingBookFromSeveralBooks()
    {
        $count = $this->severalBooks->removeBook($this->book3);
        $this->assertEquals("2", $count);
    }
}
