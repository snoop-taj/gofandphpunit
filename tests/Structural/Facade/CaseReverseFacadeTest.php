<?php

namespace GOF\Test\Structural\Facade;

use GOF\Structural\Decorator\Book;
use GOF\Structural\Facade\CaseReverseFacade;

class CaseReverseFacadeTest extends \PHPUnit_Framework_TestCase
{

    private $book;

    public function setUp()
    {
        $this->book = new Book('GOF for Dummies!', 'Snoop');
    }

    public function testBookAuthorReverseCaseLetters()
    {
        $author = $this->book->getAuthor();
        $actual = CaseReverseFacade::reverseStringCase($author);
        $this->assertEquals("sNOOP", $actual);
    }

    public function testBookTitleReverseCaseLetters()
    {
        $title = $this->book->getTitle();
        $actual = CaseReverseFacade::reverseStringCase($title);
        $this->assertEquals("gof FOR dUMMIES!", $actual);
    }
}
