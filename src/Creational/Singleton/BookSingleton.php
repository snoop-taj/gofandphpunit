<?php

namespace GOF\Creational\Singleton;

class BookSingleton
{
    private $author = 'Snoop';
    private $title = 'PHP is Dope Yo!';
    private static $instance = null;
    private static $isBorrowed = false;

    public function instance()
    {
        if (self::$isBorrowed == false) {
            if (self::$instance == false) {
                self::$instance = new BookSingleton();
            }
                self::$isBorrowed = true;
                return self::$instance;
        } else {
            return null;
        }
    }

    public function getAuthor()
    {
        return $this->author;
    }

    public function getTitle()
    {
        return $this->title;
    }

    public function getTitleAndAuthor()
    {
        return $this->getTitle().' by '.$this->getAuthor();
    }

    public function returnBook()
    {
        self::$isBorrowed = false;
    }
}
