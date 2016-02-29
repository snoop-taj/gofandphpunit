<?php


namespace GOF\Test\Behavorial\ChainOfResponsibility;

use GOF\Behavorial\ChainOfResponsibility\BookTopic;

class BookTopicTest extends \PHPUnit_Framework_TestCase
{

    public $bookTopic;
    private $title = null;

    public function setUp()
    {
        $this->bookTopic = new BookTopic("PHP 7");
    }

    public function testGetTitleWhenNotSet()
    {
        $this->assertEquals('There is no title available', $this->bookTopic->getTitle());
    }

    public function testGetTitleWhenSet()
    {
        $this->bookTopic->setTitle('Basic Tut');
        $this->assertEquals('Basic Tut', $this->bookTopic->getTitle());
    }

    public function testGetTopic()
    {
        $this->assertEquals('PHP 7', $this->bookTopic->getTopic());
    }
}
