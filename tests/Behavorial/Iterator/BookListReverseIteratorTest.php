<?php


namespace GOF\Test\Behavorial\Iterator;

use GOF\Test\Behavorial\Iterator\BookListIteratorTest;
use GOF\Behavorial\Iterator\BookListReverseIterator;

class BookListReverseIteratorTest extends \PHPUnit_Framework_TestCase
{

    private $bookListReverseIterator;
    private $bookListIteratorTest;

    public function setUp()
    {
        $this->bookListIteratorTest = new BookListIteratorTest();
        $this->bookListIteratorTest->setUp();
        //		$this->getNextBook();
        $this->bookListReverseIterator = new BookListReverseIterator($this->bookListIteratorTest->interpreterTest->bookList);
    }

    public function testHasNextBookIsTrue()
    {
        $this->assertTrue($this->bookListReverseIterator->HasNextBook());
    }

    public function testGetNextBookReturnsNull()
    {
        $books = $this->getNextBook();
        $this->assertNull($books);
    }

    public function testHasNextBookIsFalse()
    {
        $this->getNextBook();
        $this->assertFalse($this->bookListReverseIterator->hasNextBook());
    }

    public function testGetNextBookWithTitle()
    {
        $book = $this->bookListReverseIterator->getNextBook();
        $this->assertEquals("Basic MYSQL", $book->getTitle());
    }
    
    public function testGetCurrentBookWithTitle()
    {
        $this->bookListReverseIterator->getNextBook();
        $book = $this->bookListReverseIterator->getCurrentBook();
        $this->assertEquals("Basic MYSQL", $book->getTitle());
    }

    private function getNextBook()
    {
        for ($i = 0; $i <= $this->bookListIteratorTest->interpreterTest->bookList->getBookCount(); $i++) {
            $books = $this->bookListReverseIterator->getNextBook();
        }
        
        return $books;
    }
}
