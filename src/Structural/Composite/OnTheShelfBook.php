<?php

namespace GOF\Structural\Composite;

abstract class OnTheShelfBook
{
    abstract public function getBookInfo($previousBook);
    
    abstract public function setBookCount($count);
    abstract public function getBookCount();

    abstract public function addBook($oneBook);

    abstract public function removeBook($oneBook);
}
