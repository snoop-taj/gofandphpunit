<?php


namespace GOF\Behavorial\Mediator;

class BookAuthorColleague extends BookColleague
{

    private $author;
    private $state;

    public function __construct($author, $mediator)
    {
        $this->author = $author;
        parent::__construct($mediator);
    }

    public function setAuthor($author)
    {
        $this->author = $author;
    }

    public function getAuthor()
    {
        return $this->author;
    }

    public function setState($state)
    {
        $this->state = $state;
    }

    public function getState()
    {
        return $this->state;
    }

    public function setAuthorUpperCase()
    {
        $this->setAuthor(strtoupper($this->getAuthor()));
        $this->setState('upper');
        $this->getMediator()->change($this);
    }

    public function setAuthorLowerCase()
    {
        $this->setAuthor(strtolower($this->getAuthor()));
        $this->setState('lower');
        $this->getMediator()->change($this);
    }
}
