<?php

namespace GOF\Test\Structural\Adapter;

use GOF\Creational\FactoryMethod\SnoopsPHPBook;
use GOF\Structural\Adapter\BookAdapter;

class BookAdapterTest extends \PHPUnit_Framework_TestCase
{
    public function testBookAdapterforTitleAndAuthorSnoopPHPBook()
    {
        $phpBook = new SnoopsPHPBook();
        $bookAdapter = new BookAdapter($phpBook);
        $this->assertEquals("PHP In Its Early Stages by Snoop", $bookAdapter->getAuthorAndTitle());
    }
}
