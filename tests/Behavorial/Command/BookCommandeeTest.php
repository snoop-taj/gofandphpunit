<?php


namespace GOF\Test\Behavorial\Command;

use GOF\Behavorial\Command\BookCommandee;

class BookCommandeeTest extends \PHPUnit_Framework_TestCase
{

    public $bookCommandee;

    public function setUp()
    {
        $this->bookCommandee = new BookCommandee("Basic PHP", "Zak");
    }

    public function testGetBookCommandeeTitle()
    {
        $this->assertEquals("Basic PHP", $this->bookCommandee->getTitle());
    }

    public function testGetBookCommandeeAuthor()
    {
        $this->assertEquals("Zak", $this->bookCommandee->getAuthor());
    }

    public function testGetBookCommandeeTitleAndAuthor()
    {
        $this->assertEquals("Basic PHP by Zak", $this->bookCommandee->getTitleAndAuthor());
    }
}
