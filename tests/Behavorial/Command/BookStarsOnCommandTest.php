<?php


namespace GOF\Test\Behavorial\Command;

use GOF\Behavorial\Command\BookStarsOnCommand;

class BookStarOnCommandTest extends \PHPUnit_Framework_TestCase
{

    private $bookStarOn;
    private $bookCommandeeTest;

    public function setUp()
    {
        $this->bookCommandeeTest = new BookCommandeeTest();
        $this->bookCommandeeTest->setUp();
        $this->bookStarOn = new BookStarsOnCommand($this->bookCommandeeTest->bookCommandee);
    }

    public function testExecuteBookStarOnCommand()
    {
        $this->bookStarOn->execute();
        $this->assertEquals("Basic*PHP by Zak", $this->bookCommandeeTest->bookCommandee->getTitleAndAuthor());
    }
}
