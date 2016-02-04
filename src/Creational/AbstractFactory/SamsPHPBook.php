<?php

namespace GOF\Creational\AbstractFactory;

class SamsPHPBook extends AbstractBook
{
    private $title;
    private $author;

    public function __construct()
    {
        $this->title = 'Mordenization of PHP Legecy Code';
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
