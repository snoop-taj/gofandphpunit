<?php

namespace GOF\Structural\Proxy;

use GOF\Structural\Composite\SeveralBooks;

class ProxyBookList
{

    private $bookList = null;

    public function makeList()
    {
        $this->bookList = new SeveralBooks();
    }

    public function getBookCount()
    {
        if ($this->bookList == null) {
            $this->makeList();
        }

        return $this->bookList->getBookCount();
    }

    public function addBook($book)
    {
        if ($this->bookList == null) {
            $this->makeList();
        }

        return $this->bookList->addBook($book);
    }

    public function removeBook($book)
    {
        if ($this->bookList ==  null) {
            $this->makeList();
        }
        
        return $this->bookList->removeBook($book);
    }

    public function getBookInfo($book)
    {
        if ($this->bookList == null) {
            $this->makeList();
        }

        return $this->bookList->getBooKInfo($book);
    }
}
