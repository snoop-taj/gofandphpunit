<?php

namespace GOF\Test\Creational\Singleton;

use GOF\Creational\Singleton\BookBorrower;

class BookBorrowerTest extends \PHPUnit_Framework_TestCase
{

	private $bookBorrower1;
	private $bookBorrower2;

	public function setUp()
	{
		$this->bookBorrower1 = new BookBorrower();
		$this->bookBorrower2 = new BookBorrower();
	}

	public function testBookIsBorrowedByTheFirstBorrower()
	{	
		$this->bookBorrower1->borrowBook();
		$this->bookBorrower1->returnBook();
		$this->assertEquals('PHP is Dope Yo! by Snoop', $this->bookBorrower1->getTitleAndAuthor());
	}

	public function testBookIsBorrowedByTheSecondBorrowr()
	{
		
		$this->bookBorrower2->borrowBook();
		$this->bookBorrower2->returnBook();
		$this->assertEquals('PHP is Dope Yo! by Snoop', $this->bookBorrower2->getTitleAndAuthor());
	}

}
