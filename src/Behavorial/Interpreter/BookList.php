<?php


namespace GOF\Behavorial\Interpreter;

use GOF\Structural\Decorator\Book;

class BookList
{

    private $books = array();
    private $bookCount = 0;

    public function __construct()
    {

    }

    public function setBookCount($bookCount)
    {
        $this->bookCount = $bookCount;
    }

    public function getBookCount()
    {
        return $this->bookCount;
    }

    public function getBook($bookNumber)
    {
        if (is_numeric($bookNumber) && $bookNumber <= $this->getBookCount()) {
            return $this->books[$bookNumber];
        } else {
            return null;
        }
    }

    public function addBook(Book $book)
    {
        $this->setBookCount($this->getBookCount() + 1);
        $this->books[$this->getBookCount()] = $book;
        return $this->getBookCount();
    }

    public function removeBook(Book $book)
    {
        $counter = 0;
        while ($counter++ <= $this->getBookCount()) {
            if ($this->books[$counter]->getTitleAndAuthor() == $book->getTitleAndAuthor()) {
                for ($i = $counter; $i <= $this->getBookCount(); $i++) {
                    $this->books[$i] = $this->books[$i + 1];
                }
                $this->setBookCount($this->getBookCount() - 1);
            }
        }
        return $this->getBookCount();
    }
}
