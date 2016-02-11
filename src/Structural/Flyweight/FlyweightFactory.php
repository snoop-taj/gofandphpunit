<?php

namespace GOF\Structural\Flyweight;

use GOF\Structural\Decorator\Book;

class FlyweightFactory
{

    private $books = null;

    public function __construct()
    {
        $this->book[1] = null;
        $this->book[2] = null;
        $this->book[3] = null;
    }

    public function makeBook1()
    {
        return  new Book("Gof of Four for dummies", "Snoop");
    }

    public function makeBook2()
    {
        return new Book("Legacy Code for Dummies", "Taj");
    }

    public function makeBook3()
    {
        return new Book("Advnaced WareFare", "Zak");
    }

    public function getBook($bookKey)
    {
        if ($this->book[$bookKey] == null) {
            $makeFunction = 'makeBook' . $bookKey;
            $this->book[$bookKey] = $this->$makeFunction();
        }
        return $this->book[$bookKey];
    }
}
