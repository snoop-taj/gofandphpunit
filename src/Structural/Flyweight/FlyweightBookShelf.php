<?php

namespace GOF\Structural\Flyweight;

class FlyweightBookShelf
{

    private $books = array();

    public function addBook($book)
    {
        $this->books[] = $book;
    }

    public function showBooks()
    {
        $output = null;
        
        foreach ($this->books as $book) {
            $output .= "Author: " . $book->getAuthor() . " Title: " . $book->getTitle();
        }
        return $output;
    }
}
