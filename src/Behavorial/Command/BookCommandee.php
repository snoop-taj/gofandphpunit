<?php


namespace GOF\Behavorial\Command;

class BookCommandee
{

    private $author;
    private $title;

    public function __construct($title, $author)
    {
        $this->setTitle($title);
        $this->setAuthor($author);
    }

    public function setAuthor($author)
    {
        $this->author = $author;
    }

    public function getAuthor()
    {
        return $this->author;
    }

    public function setTitle($title)
    {
        $this->title = $title;
    }
    
    public function getTitle()
    {
        return $this->title;
    }

    public function getTitleAndAuthor()
    {
        return $this->getTitle() . ' by ' . $this->getAuthor();
    }

    public function setStarOn()
    {
        $this->setTitle(str_replace(" ", "*", $this->getTitle()));
        $this->setAuthor(str_replace(" ", "*", $this->getAuthor()));
    }

    public function setStarOff()
    {
        $this->setTitle(str_replace("*", " ", $this->getTitle()));
        $this->setAuthor(str_replace("*", " ", $this->getAuthor()));
    }
}
