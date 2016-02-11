<?php

namespace GOF\Test\Structural\Proxy;

use GOF\Structural\Proxy\ProxyBookList;
use GOF\Structural\Composite\OneBook;

class ProxyBookListTest extends \PHPUnit_Framework_TestCase
{

    private $book1;
    private $book2;
    private $book3;
    private $proxyBook;

    public function setUp()
    {
            $this->book1 = new OneBook("PHP for Dummies", "Snoop");
            $this->book2 = new OneBook("PHP for Advanced Dummies", "Zak");
            $this->book3 = new OneBook("PHP for Suppler Dummies", "Fool");
        $this->proxyBook = new ProxyBookList();
        $this->proxyBook->addBook($this->book1);
        $this->proxyBook->addBook($this->book2);
        $this->proxyBook->addBook($this->book3);
    }
    
    public function testNumberOfBooksAdded()
    {
        $this->assertEquals("3", $this->proxyBook->getBookCount());
    }

    public function testGetFirstBookInfoTitleAuthor()
    {
        $this->assertEquals("PHP for Dummies by Snoop", $this->proxyBook->getBookInfo(1));
    }

    public function testRemovingSecondBookFormTheSelf()
    {
        $this->assertEquals("2", $this->proxyBook->removeBook($this->book2));
    }
    
    public function testAddBook()
    {
        $this->assertEquals("4", $this->proxyBook->addBook($this->book2));
    }
}
