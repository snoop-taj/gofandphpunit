<?php

namespace GOF\Behavorial\Iterator;

use GOF\Behavorial\Interpreter\BookList;

class BookListReverseIterator extends BookListIterator
{

    public $bookList;

    public function __construct(BookList $bookList)
    {
        $this->bookList = $bookList;
        $this->currentCounter = $this->bookList->getBookCount() + 1;
    }

    public function hasNextBook()
    {
        if ($this->currentCounter > 1) {
            return true;
        } else {
            return false;
        }
    }

    public function getNextBook()
    {
        if ($this->hasNextBook()) {
            return $this->bookList->getBook(--$this->currentCounter);
        } else {
            return null;
        }
    }
}
