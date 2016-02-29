<?php


namespace GOF\Test\Behavorial\Command;

use GOF\Behavorial\Command\BookStarOffCommand;

class BookStarOffCommandTest extends \PHPUnit_Framework_TestCase
{

    private $bookStarOff;
    private $bookCommandeeTest;

    public function setUp()
    {
        $this->bookCommandeeTest = new BookCommandeeTest();
        $this->bookCommandeeTest->setUp();
        $this->bookStarOff = new BookStarOffCommand($this->bookCommandeeTest->bookCommandee);
    }

    public function testExecuteBookStarOffCommand()
    {
        $this->bookStarOff->execute();
        $this->assertEquals("Basic PHP by Zak", $this->bookCommandeeTest->bookCommandee->getTitleAndAuthor());
    }
}
