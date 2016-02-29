<?php


namespace GOF\Test\Behavorial\ChainOfResponsibility;

use GOF\Test\Behavorial\ChainOfResponsibility\BookTopicTest;
use GOF\Behavorial\ChainOfResponsibility\BookSubTopic;

class BookSubTopicTest extends \PHPUnit_Framework_TestCase
{

    public $bookSubTopic;
    public $bookTopicTest;

    public function setUp()
    {
        $this->bookTopicTest = new BookTopicTest();
        $this->bookTopicTest->setUp();
        $this->bookSubTopic = new BookSubTopic("PHP 5", $this->bookTopicTest->bookTopic);
    }
    
    public function testGetTitleOfParentBook()
    {
        $this->bookTopicTest->bookTopic->setTitle("Basic Tutorial");
        $this->assertEquals("Basic Tutorial", $this->bookSubTopic->getTitle());
    }

    public function testGetTitleWhenSetForSubBook()
    {
        $this->bookSubTopic->setTitle("Basic Tutorial");
        $this->assertEquals("Basic Tutorial", $this->bookSubTopic->getTitle());
    }

    public function testGetTopicForSubBook()
    {
        $this->assertEquals("PHP 5", $this->bookSubTopic->getTopic());
    }

    public function testGetParentTopic()
    {
        $this->assertEquals($this->bookTopicTest->bookTopic, $this->bookSubTopic->getParentTopic());
    }
}
