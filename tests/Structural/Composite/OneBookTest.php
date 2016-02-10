<?php

namespace GOF\Test\Structural\Composite;

use GOF\Structural\Composite\OneBook;

class OneBookTest extends \PHPUnit_Framework_TestCase
{

    private $oneBook;
    
    public function setUp()
    {
        
        $this->oneBook = new OneBook('PHP for Dummies', 'Snoop');
    }

    public function testOneBookGetInfo()
    {
        $actual = $this->oneBook->getBookInfo(1);
        $this->assertEquals('PHP for Dummies by Snoop', $actual);
    }

    public function testOneBookDoesnotGetInfoAndReturnFalse()
    {
        $result = $this->oneBook->getBookInfo(2);
        $this->assertFalse($result);

    }

    public function testOneBookCountIsOne()
    {
        $this->assertEquals("1", $this->oneBook->getBookCount());
    }

    public function testOneBookAddBooks()
    {
        $this->assertFalse($this->oneBook->addBook("test"));
    }
    
    public function testOneBookRemoveBooks()
    {
        $this->assertFalse($this->oneBook->removeBook("test"));
    }
}
