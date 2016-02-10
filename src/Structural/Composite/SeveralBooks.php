<?php

namespace GOF\Structural\Composite;

class SeveralBooks extends OnTheShelfBook
{

    private $oneBooks = array();
    private $bookCount;

    public function __construct()
    {
        $this->setBookCount(0);
    }

    public function setBookCount($bookCount)
    {
        $this->bookCount = $bookCount;
    }

    public function getBookCount()
    {
        return $this->bookCount;
    }

    public function addBook($oneBook)
    {
        $this->setBookCount($this->getBookCount() + 1);
        $this->oneBooks[$this->getBookCount()] = $oneBook;
        return $this->getBookCount();
    }

    public function removeBook($oneBook)
    {
        $counter = 0;
        while ($counter ++ <= $this->getBookCount()) {
            if ($oneBook->getBookInfo(1) == $this->oneBooks[$counter]->getBookInfo(1)) {
                for ($x= $counter; $x <  $this->getBookCount(); $x++) {
                    $this->oneBooks[$x] = $this->oneBooks[$x +1];
                }
                $this->setBookCount($this->getBookCount() - 1);
            }
        }
        return $this->getBookCount();
    }

    public function getBookInfo($bookToGet)
    {
        if ($bookToGet <= $this->bookCount) {
            return $this->oneBooks[$bookToGet]->getBookInfo(1);
        } else {
            return false;
        }
    }
}
