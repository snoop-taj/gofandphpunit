<?php


namespace GOF\Behavorial\Memento;

class BookReader
{

    private $title;
    private $page;

    public function __construct($title, $page)
    {
        $this->setTitle($title);
        $this->setPage($page);
    }

    public function setTitle($title)
    {
        $this->title = $title;
    }

    public function getTitle()
    {
        return $this->title;
    }

    public function setPage($page)
    {
        $this->page = $page;
    }

    public function getPage()
    {
        return $this->page;
    }
}
