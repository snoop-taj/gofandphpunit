<?php

namespace GOF\Test\Behavorial\Iterator;

use GOF\Test\Behavorial\Interpreter\InterpreterTest;
use GOF\Behavorial\Iterator\BookListIterator;

class BookListIteratorTest extends \PHPUnit_Framework_TestCase
{

    public $bookListIterator;
    public $interpreterTest;

    public function setUp()
    {
        $this->interpreterTest = new InterpreterTest();
        $this->interpreterTest->setUp();
        $this->bookListIterator = new BookListIterator($this->interpreterTest->bookList);
    }

    public function testHasNextBookIsTrue()
    {
        $this->assertTrue($this->bookListIterator->hasNextBook());
    }
    
    public function testGetNextBookReturnsNull()
    {
        $books = $this->getNextBook();
        $this->assertNull($books);
    }

    public function testNextBookHasReturnsFalse()
    {
        $this->getNextBook();
        $this->assertFalse($this->bookListIterator->hasNextBook());
    }

    public function testGetNextBookWithTitle()
    {
        $book = $this->bookListIterator->getNextBook();
        $this->assertEquals("Basic PHP", $book->getTitle());
    }

    public function testGetCurrentBookWithTitle()
    {
        $this->bookListIterator->getNextBook();
        $book = $this->bookListIterator->getCurrentBook();
        $this->assertEquals("Basic PHP", $book->getTitle());
    }

    public function getNextBook()
    {
        for ($i = 0; $i <= $this->interpreterTest->bookList->getBookCount(); $i++) {
            $books = $this->bookListIterator->getNextBook();
        }

        return $books;
    }
}
