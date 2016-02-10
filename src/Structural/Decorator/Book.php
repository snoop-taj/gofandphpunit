<?php

namespace GOF\Structural\Decorator;

class Book
{

    private $title;
    private $author;

    public function __construct($title, $author)
    {
        $this->title = $title;
        $this->author = $author;
    }

    public function getTitle()
    {
        return $this->title;
    }

    public function getAuthor()
    {
        return $this->author;
    }

    public function getTitleAndAuthor()
    {
        return $this->title . ' by ' . $this->author;
    }
}
