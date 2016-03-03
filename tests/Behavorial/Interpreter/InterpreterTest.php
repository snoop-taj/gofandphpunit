<?php


namespace GOF\Test\Behavorial\Interpreter;

use GOF\Behavorial\Interpreter\Interpreter;
use GOF\Behavorial\Interpreter\BookList;
use GOF\Structural\Decorator\Book;

class InterpreterTest extends \PHPUnit_Framework_TestCase
{
    
    public $bookList;
    private $book;
    private $book2;
    private $interpreter;

    public function setUp()
    {
        $this->book = new Book('Basic PHP', 'Snoop');
        $this->book2 = new Book('Basic MYSQL', 'Snoop');
        $this->bookList = new BookList();
        $this->bookList->addBook($this->book);
        $this->bookList->addBook($this->book2);
        $this->interpreter = new Interpreter($this->bookList);
    }

    public function testInterpretWithBookAuthorOne()
    {
        $this->assertEquals("Snoop", $this->interpreter->interpret('book', 'author', 1));
    }

    public function testInterpretWithBookTitleAuthorOne()
    {
        $this->assertEquals("Basic PHP by Snoop", $this->interpreter->interpret('book', 'author', 'title', 1));
    }

    public function testInterpretWithBookTitleTwo()
    {
        $this->assertEquals("Basic MYSQL", $this->interpreter->interpret('book', 'title', 2));
    }
}
