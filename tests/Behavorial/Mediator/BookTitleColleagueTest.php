<?php


namespace GOF\Test\Behavorial\Mediator;

use GOF\Test\Behavorial\Mediator\BookMediatorTest;
use GOF\Behavorial\Mediator\BookTitleColleague;

class BookTitleColleagueTest extends \PHPUnit_Framework_TestCase
{

    private $bookTitleColleaguei;
    private $bookMediatorTest;

    public function setUp()
    {
        $this->bookMediatorTest = new BookMediatorTest();
        $this->bookMediatorTest->setUp();
        $this->bookTitleColleague = new BookTitleColleague('PHP Book', $this->bookMediatorTest->bookMediator);
    }

    public function testBookTitleColleagueName()
    {
        $this->assertEquals('PHP Book', $this->bookTitleColleague->getTitle());
    }

    public function testBookTitleColleagueNameUpperCase()
    {
        $this->bookTitleColleague->setTitleUpperCase();
        $this->assertEquals('PHP BOOK', $this->bookTitleColleague->getTitle());
    }

    public function testBookTitleColleagueNameLowerCase()
    {
        $this->bookTitleColleague->setTitleLowerCase();
        $this->assertEquals('php book', $this->bookTitleColleague->getTitle());
    }
}
