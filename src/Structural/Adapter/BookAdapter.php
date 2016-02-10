<?php


namespace GOF\Structural\Adapter;

use GOF\Creational\FactoryMethod\SnoopsPHPBook;

class BookAdapter
{
    private $book;

    public function __construct(SnoopsPHPBook $book)
    {
        $this->book = $book;
    }

    public function getAuthorAndTitle()
    {
        return $this->book->getTitle() . ' by ' . $this->book->getAuthor();
    }
}
