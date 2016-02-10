<?php

namespace GOF\Structural\Composite;

class OneBook extends OnTheShelfBook
{

    private $title;
    private $author;

    public function __construct($title, $author)
    {
        $this->title = $title;
        $this->author = $author;
    }

    public function getBookInfo($bookToGet)
    {
        if ($bookToGet == 1) {
            return $this->title . ' by ' . $this->author;
        } else {
            return false;
        }
    }

    public function setBookCount($count)
    {
        return false;
    }

    public function getBookCount()
    {
        return 1;
    }

    public function addBook($oneBook)
    {
        return false;
    }

    public function removeBook($oneBook)
    {
        return false;
    }
}
