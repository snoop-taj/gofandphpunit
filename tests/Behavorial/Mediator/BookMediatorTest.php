<?php


namespace GOF\Test\Behavorial\Mediator;

use GOF\Behavorial\Mediator\BookMediator;

class BookMediatorTest extends \PHPUnit_Framework_TestCase
{

    public $bookMediator;

    public function setUp()
    {
        $this->bookMediator = new BookMediator('Basic PHP Book', 'Zak');
    }

    public function testBookMediatorGetsAuthorName()
    {
        $this->assertEquals("Zak", $this->bookMediator->getAuthor()->getAuthor());
    }

    public function testBookMediatorGetsTitleName()
    {
        $this->assertEquals("Basic PHP Book", $this->bookMediator->getTitle()->getTitle());
    }
    
    public function testBookMediatorGetTitleAndAuthorUpperCase()
    {
        $this->bookMediator->getTitle()->setTitleUpperCase();
        $this->assertEquals("BASIC PHP BOOK by ZAK", $this->bookMediator->getTitle()->getTitle(). ' by ' . $this->bookMediator->getAuthor()->getAuthor());
    }
    
    public function testBookMediatorGetTitleAndAuthorLowerCase()
    {
        $this->bookMediator->getTitle()->setTitleLowerCase();
        $this->assertEquals("basic php book by zak", $this->bookMediator->getTitle()->getTitle(). ' by ' . $this->bookMediator->getAuthor()->getAuthor());
    }
}
