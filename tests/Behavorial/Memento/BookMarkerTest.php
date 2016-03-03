<?php


namespace GOF\Test\Behavorial\Memento;

use GOF\Test\Behavorial\Memento\BookReaderTest;
use GOF\Behavorial\Memento\BookMarker;

class BookMarkerTest extends \PHPUnit_Framework_TestCase
{
    
    private $bookMarker;
    private $bookReaderTest;

    public function setUp()
    {
        $this->bookReaderTest = new BookReaderTest();
        $this->bookReaderTest->setUp();
        $this->bookMarker = new BookMarker($this->bookReaderTest->bookReader);
        $this->bookReaderTest->bookReader->setPage(220);
        $this->bookReaderTest->bookReader->setTitle("Advanced PHP Book");
    }

    public function testMarkedPageNumber()
    {
        $this->bookMarker->getPage($this->bookReaderTest->bookReader);
        $this->assertEquals("104", $this->bookReaderTest->bookReader->getPage());
    }

    public function testMarkedTitleName()
    {
        $this->bookMarker->getTitle($this->bookReaderTest->bookReader);
        $this->assertEquals("Basic PHP Book", $this->bookReaderTest->bookReader->getTitle());
    }
}
