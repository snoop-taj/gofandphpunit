<?php

namespace GOF\Creational\AbstractFactory;

class SamsMySQLBook extends AbstractBook
{

    private $title;
    private $author;

    public function __construct()
    {
        $this->title = 'Mordenzaing MYSQL';
        $this->author = 'Sams';
    }

    public function getAuthor()
    {
        return $this->author;
    }

    public function getTitle()
    {
        return $this->title;
    }
}
