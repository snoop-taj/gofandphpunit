<?php

namespace GOF\Creational\Singleton;

class BookBorrower
{
    public $borrowedBook = null;
    private $haveBook = false;

    public function borrowBook()
    {
        $this->borrowedBook = BookSingleton::instance();

        if ($this->borrowedBook == null) {
            $this->haveBook = false;
        } else {
            $this->haveBook = true;
        }
    }

    public function returnBook()
    {
        $this->borrowedBook->returnBook();
    }

    public function getTitleAndAuthor()
    {
        if ($this->haveBook == true) {
            return $this->borrowedBook->getTitleAndAuthor();
        } else {
            return 'Not Available Yo!';
        }
    }
}
