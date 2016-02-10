<?php

namespace GOF\Structural\Decorator;

class BookTitleDecorator
{

    protected $book;
    protected $title;

    public function __construct(Book $book)
    {
        $this->book = $book;
        $this->restTitle();
    }

    public function restTitle()
    {
        $this->title = $this->book->getTitle();
    }

    public function showTitle()
    {
        return $this->title;
    }
}
