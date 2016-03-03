<?php

namespace GOF\Behavorial\Iterator;

use GOF\Behavorial\Interpreter\BookList;

class BookListIterator
{

    protected $bookList;
    protected $currentCounter = 0;
    
    public function __construct(BookList $bookList)
    {
        $this->bookList = $bookList;
    }

    public function getCurrentBook()
    {
        if ($this->currentCounter > 0 && $this->currentCounter <= $this->bookList->getBookCount()) {
            return $this->bookList->getBook($this->currentCounter);
        }
    }

    public function hasNextBook()
    {
        if ($this->currentCounter < $this->bookList->getBookCount()) {
            return true;
        } else {
            return false;
        }
    }

    public function getNextBook()
    {
        if ($this->hasNextBook()) {
            return $this->bookList->getBook(++$this->currentCounter);
        } else {
            return null;
        }
    }
}
