<?php


namespace GOF\Test\Behavorial\Memento;

use GOF\Behavorial\Memento\BookReader;

class BookReaderTest extends \PHPUnit_Framework_TestCase
{

    public $bookReader;

    public function setUp()
    {
        $this->bookReader = new BookReader("Basic PHP Book", "104");
    }

    public function testGetBookTitleName()
    {
        $this->assertEquals("Basic PHP Book", $this->bookReader->getTitle());
    }

    public function testGetBookPageNumber()
    {
        $this->assertEquals("104", $this->bookReader->getPage());
    }
}
