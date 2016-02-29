<?php


namespace GOF\Test\Behavorial\ChainOfResponsibility;

use GOF\Test\Behavorial\ChainOfResponsibility\BookSubSubTopicTest;
use GOF\Behavorial\ChainOfResponsibility\BookSubSubTopic;

class BookSubSubTopicTest extends \PHPUnit_Framework_TestCase
{

    private $bookSubSubTopic;
    private $bookSubTopicTest;

    public function setUp()
    {
        $this->bookSubTopicTest = new BookSubTopicTest();
        $this->bookSubTopicTest->setUp();
        $this->bookSubSubTopic = new bookSubSubTopic("PHP 4", $this->bookSubTopicTest->bookSubTopic);
    }
    
    public function testGetTitleOfParentBook()
    {
        $this->bookSubTopicTest->bookSubTopic->setTitle("Basic");
        $this->assertEquals("Basic", $this->bookSubSubTopic->getTitle());
    }

    public function testGetTitleWhenSetForSubSubBook()
    {
        $this->bookSubSubTopic->setTitle("basic");
        $this->assertEquals("basic", $this->bookSubSubTopic->getTitle());
    }

    public function testGetTopicForSubSubBook()
    {
        $this->assertEquals("PHP 4", $this->bookSubSubTopic->getTopic());
    }

    public function testGetParentTopic()
    {
        $this->assertEquals($this->bookSubTopicTest->bookSubTopic, $this->bookSubSubTopic->getParentTopic());
    }
}
